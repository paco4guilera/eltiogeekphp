$(document).on("click", ".mostrar-producto", function () { 
    var nombreProducto = $(this).attr("nombreProducto");
        window.location = "index.php?ruta=producto&nombreProducto="+nombreProducto;
    
})