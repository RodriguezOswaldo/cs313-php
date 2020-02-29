//https://www.youtube.com/watch?v=qSAze9b0wrY&list=PL4cUxeGkcC9gcy9lrvMJ75z9maRw4byYp&index=11
//Bringing the package
var http = require('http');
function callBack(req, res){
    console.log('request was made: ' + req.url);
    if(req.url== '/home'){
        res.writeHead(200, {'Content-Type':'text/plain'});
        res.end('<h1>Welcome to the Home Page</h1>');
    }else{
        res.writeHead(200, {'Content-Type':'text/plain'});
        res.end('Hey Dude! you Made it!');
    }
    // if(req.url=='/getData'){

    // }
    //Telling the server what to do with the response
}
//creating server
var server = http.createServer(callBack);

server.listen(3000);
console.log('Yo dawgs, now listening on port 3000');