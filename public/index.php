<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.min.js"></script>
    <script src="js/camera.js"></script>
    <title>Allumer la Caméra</title>
</head>
<body>

<video id="localVideo" width="320" height="240" autoplay></video>
<video id="remoteVideo" width="320" height="240" autoplay></video>
<button id="startBtn">Allumer la caméra</button>
<button id="stopBtn">Arrêter la caméra</button>

<!-- Ajout du formulaire et de la liste de messages -->
<form id="chatForm">
    <input id="m" autocomplete="off" />
    <button>Send</button>
</form>
<ul id="messages"></ul>

</body>
</html>
