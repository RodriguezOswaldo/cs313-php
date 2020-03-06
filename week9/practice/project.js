//Require the express package
var express = require('express');
//declare the app variable
var app = express();
//Add a reference for Body Parser
var bodyParser = require("body-parser");
//including the math service file with  the operations
var ms = require("./mathService");

app.use(bodyParser.urlencoded({extended: true}));
//declare the port
app.set('port', (process.env.PORT || 3000));
//setting up the view engine
app.set("view engine", "ejs");

app.get('/', getData);

app.post('/', postData);
//set up listener
app.listen(app.get("port"),()=>{
    console.log('The server is listening on port ', + app.get("port"));
});

function getData(req, res){
    console.log('Getting Data');
    res.render("result", { var1: "", sign: '', var2: '', result: ''});
}
function postData(req, res){
    console.log('Posting Data');
    console.log(req.body.var1);
    console.log(req.body.sign);
    console.log(req.body.var2);
    // res.write("(\"name\":\"John\")");
    // res.end();
    var result = ms.computeOperation(req.body.sign,req.body.var1, req.body.var2);
    console.log(result);
    res.render("result", { var1: req.body.var1, sign: req.body.sign, var2: req.body.var2, result: result});
}