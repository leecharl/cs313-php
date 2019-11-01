
var http = require('http');
var url = require('url');
var fs = require('fs');

var hostname = 'localhost';
var port = 8888;

var resJson = {
    "class": "CS313",
    "name": "Aaron Lee"
};

var server = http.createServer(function onRequest(req, res) {
    if (req.url == "/home") {
        res.writeHead(200, {'Content-type': 'text/html'});
        res.write("<h1>Welcome to the Home Page</h1>");
        res.end();
    } else if (req.url == "/getData") {
        res.writeHead(200, {'Content-type': 'application/json'});
        res.write(JSON.stringify(resJson));
        res.end();
    } else {
        res.writeHead(404, {'Content-type': 'text/html'});
        res.write("Page Not Found");
        res.end();
    }
});

server.listen(port, hostname, () => { 
    console.log('Server started on port ' + port);
});