var express = require('express');


var app = express();
   app.set('view engine','ejs');
   app.set("views","./");
  app.use(express.static(('./')));


    app.get("/",function(req,res){
        res.render("index");
    });

app.listen('3030');
