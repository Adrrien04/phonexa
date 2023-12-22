

document.addEventListener('DOMContentLoaded', function () {
    const localVideo = document.getElementById('localVideo');
    const remoteVideo = document.getElementById('remoteVideo');
    const startBtn = document.getElementById('startBtn');
    const stopBtn = document.getElementById('stopBtn');
    let localStream, remoteStream;
    let localPeerConnection, remotePeerConnection;

    startBtn.addEventListener('click', function () {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                localStream = stream;
                localVideo.srcObject = stream;

                localPeerConnection = new RTCPeerConnection();
                localPeerConnection.addStream(stream);


                localPeerConnection.onicecandidate = function (event) {
                    if (event.candidate) {

                        sendIceCandidate(event.candidate);
                    }
                };

                socket.onmessage = function (event) {
                    const data = JSON.parse(event.data);
                    if (data.type === 'video' && data.action === 'answer') {
                        handleAnswer(data.answer);
                    } else if (data.type === 'video' && data.action === 'ice-candidate') {
                        handleIceCandidate(data.candidate);
                    }
                };


                localPeerConnection.createOffer()
                    .then(function (offer) {
                        return localPeerConnection.setLocalDescription(offer);
                    })
                    .then(function () {
                        sendOffer(localPeerConnection.localDescription);
                    });

            })
            .catch(function (error) {
                console.error('Erreur d\'accès à la caméra:', error);
            });
    });

    stopBtn.addEventListener('click', function () {
        if (localStream) {
            const tracks = localStream.getTracks();
            tracks.forEach(track => track.stop());
            localVideo.srcObject = null;
        }
    });

    function sendOffer(offer) {
        socket.send(JSON.stringify({ type: 'video', action: 'offer', offer: offer }));
    }


    function handleOffer(offer) {
        remotePeerConnection = new RTCPeerConnection();

        localStream.getTracks().forEach(function (track) {
            remotePeerConnection.addTrack(track, localStream);
        });


        remotePeerConnection.onicecandidate = function (event) {
            if (event.candidate) {

                sendIceCandidate(event.candidate);
            }
        };

        remotePeerConnection.setRemoteDescription(offer)
            .then(function () {
                return remotePeerConnection.createAnswer();
            })
            .then(function (answer) {
                return remotePeerConnection.setLocalDescription(answer);
            })
            .then(function () {

                sendAnswer(remotePeerConnection.localDescription);
            });


        remotePeerConnection.ontrack = function (event) {
            if (!remoteStream) {
                remoteStream = new MediaStream();
                remoteVideo.srcObject = remoteStream;
            }
            remoteStream.addTrack(event.track);
        };
    }


    function sendAnswer(answer) {
        socket.send(JSON.stringify({ type: 'video', action: 'answer', answer: answer }));
    }


    function handleAnswer(answer) {
        localPeerConnection.setRemoteDescription(answer);
    }


    function sendIceCandidate(candidate) {
        socket.send(JSON.stringify({ type: 'video', action: 'ice-candidate', candidate: candidate }));
    }


    function handleIceCandidate(candidate) {
        remotePeerConnection.addIceCandidate(new RTCIceCandidate(candidate));
    }
});
