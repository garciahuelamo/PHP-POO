var servidor = require('http'); //Require - módulo automatico de NodeJS
var ruta = require('url');
var archivos = require('fs');
var procesador = require('querystring');
var mensajes = [];

//Crear servidor web

servidor.createServer(function(req, res){ //req (request = lo que me piden) - res (result = lo que devuelvo) 
    if (req.url=="/"){
        res.writeHead(200, {'Content-Type': 'text/html'}) //Devolvemos un codigo 200 + el tipo de contenido que vamos a devolver
        console.log("principal");
        archivos.readFile('front.html', function(err, data){
            if(err) throw err;
            res.end(data);
        });
    } else if (req.url == ("/recibe")){
        console.log("recibe");
        res.writeHead(200, {'Content-Type': 'text/json'});
        res.end(JSON.stringify(mensajes));
    } else if(req.url.includes("/envia")){
        console.log("envia");
        var parametros = ruta.parse(req.url, true).query;
        console.log(parametros.mensaje);
        var fechaFormateada = Date.now()
        mensajes.push({
            fecha: fechaFormateada, 
            mensaje: parametros.mensaje
        })
        console.log(mensajes);
        res.end("");
    }
}).listen(8080) //Usamos el puerto 80 

