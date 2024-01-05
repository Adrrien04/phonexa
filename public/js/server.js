const express = require('express');
const http = require('http');
const socketIO = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIO(server);

app.use(express.static(__dirname + '/public'));

io.on('connection', function (socket) {
    console.log('User connected:', socket.id);

    socket.on('disconnect', function () {
        console.log('User disconnected:', socket.id);
    });

    socket.on('signal', function (data) {
        console.log('Signal received from', socket.id, data);
        io.emit('signal', data);
    });
});


const port = process.env.PORT || 3000;
server.listen(port, function () {
    console.log(`Server listening on port ${port}`);
});
