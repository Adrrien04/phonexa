
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allumer la Caméra</title>
</head>
<body>

<video id="video" width="640" height="480" autoplay></video>
<button id="startBtn">Allumer la caméra</button>
<button id="stopBtn">Arrêter la caméra</button>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const video = document.getElementById('video');
        const startBtn = document.getElementById('startBtn');
        const stopBtn = document.getElementById('stopBtn');
        let stream;

        startBtn.addEventListener('click', function () {

            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (videoStream) {
                    stream = videoStream;
                    video.srcObject = videoStream;
                })
                .catch(function (error) {
                    console.error('Erreur d\'accès à la caméra:', error);
                });
        });

        stopBtn.addEventListener('click', function () {

            if (stream) {
                const tracks = stream.getTracks();
                tracks.forEach(track => track.stop());
                video.srcObject = null;
            }
        });
    });
</script>

</body>
</html>
//af