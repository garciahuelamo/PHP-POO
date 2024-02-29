var servidor = require('http'); //Require - módulo automatico de NodeJS
var archivos = require('fs'); //File-System - el programa en Node es capaz de leer y escribir archivos

//Crear servidor web

servidor.createServer(function(req, res){ //req (request = lo que me piden) - res (result = lo que devuelvo) 
    
    res.writeHead(200, {'Content-Type': 'text/html'}) //Devolvemos un codigo 200 + el tipo de contenido que vamos a devolver

    switch(req.url){ //Enrutador -> elige las rutas que están permitidas en la página web
        case "/":
            archivos.readFile('inicio.html', function(err, data){
                res.write(data);
                res.end("");
            });
            break;
        case "/sobremi":
            archivos.readFile('sobremi.html', function(err, data){
                res.write(data);
                res.end("");
            });
            break;    
        case "/contacto":
            archivos.readFile('contacto.html', function(err, data){
                res.write(data);
                res.end("");
            });
            break;    
        default:
            res.end("Página no encontrada");
    }


}).listen(80) //Usamos el puerto 80 

