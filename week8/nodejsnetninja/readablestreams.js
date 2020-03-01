var http = require('http');
var fs = require('fs');
//we use utf 8 to receive the data from the file som.txt as text, 
//otherwise it will receive it  as a buffer, a bunch of numbers
var myReadStream = fs.createReadStream(__dirname + '/som.txt', 'utf-8');

myReadStream.on('data', function(chunk){
    console.log('new chunk received: ');
    console.log(chunk);
});