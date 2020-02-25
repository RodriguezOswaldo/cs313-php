var mymodule = require('./mymodule.js');

var directory = process.argv[2];
var fileType = process.argv[3];

mymodule(directory, fileType, function (err, data) {
    if (err) {
        console.log('ERROR');
    } else {
        data.forEach(datum => {console.log(datum)});
    }
});