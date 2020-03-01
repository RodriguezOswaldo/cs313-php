var fs = require('fs');

var myReadStream = fs.createReadStream(__dirname + '/som.txt', 'utf-8');
var myWriteStream = fs.createWriteStream(__dirname + '/written.txt');

myReadStream.on('data', (chunk)=>{
    console.log('New chunk received: ');
    // console.log(chunk);
    myWriteStream.write(chunk);
});

