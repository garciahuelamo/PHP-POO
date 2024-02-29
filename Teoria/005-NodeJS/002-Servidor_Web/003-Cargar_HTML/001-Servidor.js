var servidor = require('http'); //Require - módulo automatico de NodeJS
var archivos = require('fs'); //File-System - el programa en Node es capaz de leer y escribir archivos

//Crear servidor web

servidor.createServer(function(req, res){ //req (request = lo que me piden) - res (result = lo que devuelvo) 
    archivos.readFile('inicio.html', function(err, data){
        res.writeHead(200, {'Content-Type': 'text/html'}) //Devolvemos un codigo 200 + el tipo de contenido que vamos a devolver
        res.write(data);
        res.end("");
    });

}).listen(8080) //Usamos el puerto 80 

