document.addEventListener("DOMContentLoaded", function () {
    const localVideo = document.getElementById('localVideo');
    const remoteVideo = document.getElementById('remoteVideo');
    const startBtn = document.getElementById('startBtn');
    const stopBtn = document.getElementById('stopBtn');

    let localStream, remoteStream;
    let localPeer, socket;

    startBtn.addEventListener('click', function () {
        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then(function (stream) {
                localStream = stream;
                localVideo.srcObject = stream;

                // Utiliser io() au lieu de io.connect()
                socket = io('https://sure-tough-snail.ngrok-free.app/');

                socket.on('connect', function () {
                    console.log('Connected to server');
                    initPeer();
                });

                socket.on('signal', function (data) {
                    localPeer.signal(data);
                });
            })
            .catch(function (error) {
                console.error('Error accessing camera:', error);
            });
    });

    stopBtn.addEventListener('click', function () {
        if (localStream) {
            const tracks = localStream.getTracks();
            tracks.forEach(track => track.stop());
            localVideo.srcObject = null;
            localStream = null;
            if (localPeer) {
                localPeer.destroy();
            }
        }
    });

    function initPeer() {
        localPeer = new SimplePeer({ initiator: true, trickle: false, stream: localStream });

        localPeer.on('signal', function (data) {
            socket.emit('signal', data);
        });

        localPeer.on('stream', function (stream) {
            remoteStream = stream;
            remoteVideo.srcObject = stream;
        });

        localPeer.on('close', function () {
            if (remoteStream) {
                const tracks = remoteStream.getTracks();
                tracks.forEach(track => track.stop());
                remoteVideo.srcObject = null;
            }
            remoteStream = null;
        });
    }
});
