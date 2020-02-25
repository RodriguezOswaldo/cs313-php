const fs = require('fs');
var data = fs.readFileSync(process.argv[2], {encoding:'utf-8'} );
var newlines = data.split('\n').length -1;
console.log(newlines);