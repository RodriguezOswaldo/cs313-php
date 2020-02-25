

var fs = require('fs');
var myNumber= undefined;

function addOne(){
    fs.readFile('number.txt', function doneReading(err, fileContents){
        myNumber = parseInt(fileContents)
        myNumber++     
    });
}
function logMyNumber(){
    console.log(myNumber);
}
addOne();
console.log(logMyNumber);

//Example 2

var fs = require('fs');
fs.readFile('movie.mp', finishedReading)

function finishedReading(error, movieData){
    if(error) return console.error(error)
    //do something with the movie
}

//Example 3

downloadPhoto('http://coolcats.com/cat.gif', handlePhoto)
function handlePhoto(error, photo){
    if(error) console.error('Download error!', error)
    else console.log('Download finished', photo)
}
console.log('Download started')