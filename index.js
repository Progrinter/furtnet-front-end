var express = require('express');


var app = express();
   app.set('view engine','ejs');
   app.set("views","./");
  app.use(express.static(('./')));


    app.get("/",function(req,res){
        res.render("home")
    });

    app.get("/teste",function(req,res){
        res.render("perfil-psicologo");
    });


app.listen(3000, function(){
  console.log('listening on');
});