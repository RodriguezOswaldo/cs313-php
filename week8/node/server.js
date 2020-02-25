var http = require('http');

function sayHello(req, res){
    console.log("Received Request for: " + req.url);

    res.write("Hello fron Node");
    res.end();
}
var server = http.createServer(sayHello);
server.listen(5000);

console.log("The server is now listening on port 5000...");