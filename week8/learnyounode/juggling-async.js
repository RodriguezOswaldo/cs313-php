const http = require('http');
var urls = [
    process.argv[2],
    process.argv[3],
    process.argv[4]
];
urls.forEach(url => {
    http.get(url, (response) => {
        response.setEncoding('utf-8');
        var body = "";
        response.on('data', (chunk) => {body = body += chunk});
        response.on('end', () => { 

            console.log(body);
        });
    });
});