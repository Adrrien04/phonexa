const express = require('express');
const http = require('http');
const socketIO = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIO(server);

app.use(express.static(__dirname + '/public'));

io.on('connection', function (socket) {
    console.log('User connected');

    socket.on('disconnect', function () {
        console.log('User disconnected');
    });

    socket.on('signal', function (data) {
        io.emit('signal', data);
    });

    // Ajout de la réception des messages du chat
    socket.on('chat message', function (message) {
        io.emit('chat message', message);
    });
});

const port = process.env.PORT || 3000;
server.listen(port, function () {
    console.log(`Server listening on port ${port}`);
});
