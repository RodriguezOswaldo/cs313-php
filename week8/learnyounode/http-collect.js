// const http = require('http');
// http.get(process.argv[2], (response)=>{
//     response.setEncoding('utf-8');
//     var body = "";
//     response.on('data', (chunk)=>{body = body +=chunk});
//     response.on('end', ()=>{
//         console.log(body);
//         console.log(body.length);
//     });
// })
const http = require('http');
http.get(process.argv[2], (response) => {
    response.setEncoding('utf-8');
    var body = "";
    response.on('data', (chunk) => {body = body += chunk});
    response.on('end', () => { 
        console.log(body.length);
        console.log(body);
    });
})