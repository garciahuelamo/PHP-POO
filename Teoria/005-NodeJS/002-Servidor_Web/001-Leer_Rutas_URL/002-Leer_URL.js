var servidor = require('http'); //Require - módulo automatico de NodeJS

//Crear servidor web

servidor.createServer(function(req, res){ //req (request = lo que me piden) - res (result = lo que devuelvo) 
    res.writeHead(200, {'Content-Type': 'text/html'}) //Devolvemos un codigo 200 + el tipo de contenido que vamos a devolver
    res.write("<h1>Hola mundo desde Node.js</h1>"); 
    res.end(req.url);
    console.log("Alguien ha cargado la web");
}).listen(8080) //Usamos el puerto 80 

