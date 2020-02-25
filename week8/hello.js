var http = require('http');

function theHello(req, res){
    console.log("Hello dude!!:" + req.url);

    res.writeHead(200, {"Content-Type": "application/json"});
    res.write("Hello from node!");
    res.end();
}
var newServer = http.createServer(theHello);
newServer.listen(8888);

console.log("The server is now listening on port 8888.")