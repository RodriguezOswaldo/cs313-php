var http = require('http');
var fs = require('fs');

var server = http.createServer(function callBack(req, res){
    console.log('Request was made: ' + req.url);
    res.writeHead(200, {'Content-Type': 'text/html'});
    var myReadStream = fs.createReadStream(__dirname + '/som.txt', 'utf-8');
    // var myWriteStream = fs.createWriteStream(__dirname + '/written.txt');
    //writing in the same way but using pipe instead of the bunch of lines below
   //this line will clean the line 16
    myReadStream.pipe(res);
    // myReadStream.on('data', (chunk)=>{
    //     console.log('New Chunk Received: ');
    //     myWriteStream.write('written.txt');
    // });
    // res.end();
});
server.listen(5000);
console.log('Server is now listening on Port 5000...');