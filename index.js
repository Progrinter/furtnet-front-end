var express = require('express');
var app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http);

   app.set('view engine','ejs');
   app.set("views","./");
  app.use(express.static(('./')));


    app.get("/",function(req,res){
        res.render("home")
    });

    app.get("/teste",function(req,res){
        res.render("perfil-psicologo");
    });


http.listen(process.env.PORT || 3000, function(){
  console.log('listening on', http.address().port);
});