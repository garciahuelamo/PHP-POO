var archivos = require('fs');
archivos.unlink("cambio.txt", function(err){
    if(err) throw err;
    console.log("Mision cumplida");
});

//AQUI FINALIZA EL VIDEO 11