const fs = require('fs');
var data = fs.readFileSync(process.argv[2], {encoding:'utf-8'}, function callback(err, res){
    if(err){
        console.error(err);
    }else{
        return res;
    }
} );
var newlines = data.split('\n').length -1;
console.log(newlines);

// const fs = require('fs');
// var data = fs.readFileSync(process.argv[2], { encoding: 'utf-8' }, function callback(err, res) {
//     if (err) {
//         console.err(err);
//     }
//     else {
//         return res;
//     }
// });
// var newlines = data.split('\n').length - 1;
// console.log(newlines);