var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

server.listen(4020);

app.get('/', function (req, res) {
  res.sendFile(__dirname + '/map.html');
});

app.get('/test', function (req, res) {
  res.sendFile(__dirname + '/test.html');
});


io.on('connection', function (socket) {
	console.log("connected someone");
	  socket.on('walking', function (location) {
	    socket.emit('walking',location);
	    console.log(location);
	  });
});