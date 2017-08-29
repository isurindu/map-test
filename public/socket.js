var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

server.listen(4020);

app.get('/', function (req, res) {
  res.sendfile(__dirname + '/socket.index.html');
});

io.on('connection', function (socket) {
  socket.emit('walking', { lat: 51.508742,long:-0.120850});
  socket.on('my other event', function (data) {
    console.log(data);
  });
});