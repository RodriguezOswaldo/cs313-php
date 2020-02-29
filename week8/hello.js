var http = require('http');

function callBack(req, res){
    console.log('request was made: ' + req.url);
    //Telling the server what to do with the response
    if(req.url== '/home'){
        res.writeHead(200, {'Content-Type':'text/html'});
        res.write('<h1>Welcome to the Home Page</h1>')
        res.end();
    }
    if(req.url=='/getData'){
        res.writeHead(200, {'Content-Type':'application/json'});
        res.end('{"name":"Oswaldo Rodriguez","class":"cs313"}');
    }
    if(req.url=='/family'){
        res.writeHead(200, {'Content-Type':'text/html'});
        res.write('<h2>My Family:</h2>');
        res.write('<ul><li><p>Wife: <a>Helena</a></p></li>');
        res.write('<li><p>Oldest Son: <a>Arthur</a></p></li>');
        res.write('<li><p>Youngest Son: <a>Luke</a></p></li></ul>');
        res.end();
    }
    else{
        res.writeHead(404, {'Content-Type':'text/plain'});
        res.end('Error!');
    }
}
var newServer = http.createServer(callBack);
newServer.listen(8888);

console.log("The server is now listening on port 8888.")