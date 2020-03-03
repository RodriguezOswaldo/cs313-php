var express = require('express')
var app = express();
//requesting static files
app.use(express.static("public"));
//Requestion the Web Engine the ejs files
//two attributes views which is the parameter and templates the folder
//now go to line 23 where it use the render method to say which file you need 
//from this directory
app.set("views", "templates");
app.set("view engine", "ejs");


app.get("/", function(req, res){
    console.log('Received a request for /');

    res.write("this is the root");
    res.end();
});
app.get('/home', (req, res)=>{
    //Controller get info from the user
    console.log('received request for /home');
    var name = getCurrentLoggedInUser();
    //the page I want to display
    res.render("home");
});
app.listen(5000, function(){
    console.log('server listening on port 5000');
})

//Model it works with the database
function getCurrentLoggedInUser(){
    //access database
    //make sure they have permission to be on the site
    return "Luke";
}