var servidor = require('http'); //Require - módulo automatico de NodeJS
var ruta = require('url');

//Crear servidor web

servidor.createServer(function(req, res){ //req (request = lo que me piden) - res (result = lo que devuelvo) 
    res.writeHead(200, {'Content-Type': 'text/html'}) //Devolvemos un codigo 200 + el tipo de contenido que vamos a devolver
    var parametros = ruta.parse(req.url, true).query;
    res.write("Tu nombre es: " + parametros.nombre);
    res.write("<br>");
    res.write("Tus apellidos son: " + parametros.apellidos);
    res.end("");
}).listen(8080) //Usamos el puerto 80 

//Resultado: http://localhost:8080/?nombre=Angela%20Garcia
