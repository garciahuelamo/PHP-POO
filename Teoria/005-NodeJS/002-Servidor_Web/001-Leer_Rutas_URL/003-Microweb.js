var servidor = require('http'); //Require - módulo automatico de NodeJS

//Crear servidor web

servidor.createServer(function(req, res){ //req (request = lo que me piden) - res (result = lo que devuelvo) 
    res.writeHead(200, {'Content-Type': 'text/html'}) //Devolvemos un codigo 200 + el tipo de contenido que vamos a devolver
    res.write("<h1>Hola mundo desde Node.js</h1>"); 
    switch(req.url){ //Enrutador -> elige las rutas que están permitidas en la página web
        case "/":
            res.end("Estás en la página principal");
            break;
        case "/sobremi":
            res.end("Estás en la página sobre mi");
            break;    
        case "/contacto":
            res.end("Estás en la página contacto");
            break;    
        default:
            res.end("Página no encontrada");
    }
}).listen(8080) //Usamos el puerto 80 

