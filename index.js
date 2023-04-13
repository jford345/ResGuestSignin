var express = require("express")
var bodyParser = require("body-parser")
var mongoose = require("mongoose")

const app = express()

app.use(bodyParser.json())
app.use(express.static('public'))
app.use(bodyParser.urlencoded({
    extended:true
}))

mongoose.connect('mongodb://127.0.0.1:27017/resguestsigin',{
    useNewUrlParser: true,
    useUnifiedTopology: true
});

var db = mongoose.connection;

db.on('error',()=>console.log("Error in Connecting to Database"));
db.once('open',()=>console.log("Connected to Database"))



app.post("/guestsign",(req,res)=>{
    var gswid = req.body.gswid;
    var fname = req.body.fname;
    var lname = req.body.lname;
    var phonenum = req.body.phonenum;
    var email = req.body.email;
    //need name of drpdown box selector

    var data = {

        "gswid": gswid,
        "fname": fname,
        "lname" : lname,
        "phonenum": phonenum,
        "email": email
       
    }

    db.collection('guestsignin').insertOne(data,(err,collection)=>{
        if(err){
            throw err;
        }
        console.log("Record Inserted Successfully");
    });

    return res.redirect('signup_success.html')

})


app.get("/",(req,res)=>{
    res.set({
        "Allow-access-Allow-Origin": '*'
    })
    return res.redirect('index.html');
}).listen(3000);


console.log("Listening on PORT 3000");