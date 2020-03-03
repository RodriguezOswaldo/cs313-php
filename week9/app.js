const express = require('express')
const app = express()
const port = 3000

app.get('/user', (req, res)=> res.send('Got a post request'))
app.listen(port, ()=> console.log(`Example app listening on port ${port}!`))

// app.post('/', function(req, res){
//     res.send('Got a POST request')
// })
// app.listen(port, ()=> console.log(`Example app listening on port ${port}!`))
