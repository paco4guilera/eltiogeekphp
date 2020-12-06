$(document).on("click", ".mostrar-producto", function () { 
    var idProducto = $(this).attr("idProducto");
        window.location = "index.php?ruta=producto&idProducto="+idProducto;
    
})

