//Require the express package
var express = require('express');
//declare the app variable
var app = express();
//declare the port
app.set('port', (process.env.PORT || 3000));
//setting up the view engine
app.set("view engine", "ejs");

app.get('/', getData);
//set up listener
app.listen(app.get("port"),()=>{
    console.log('The server is listening on port ', + app.get("port"));
});

function getData(req, res){
    console.log('Getting Data');
    res.write("(\"name\":\"John\")");
    res.end();
}