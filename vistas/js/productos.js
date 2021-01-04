$(document).on("click", ".mostrar-producto", function () { 
    var idProducto = $(this).attr("idProducto");
        window.location = "index.php?ruta=producto&idProducto="+idProducto;
    
})
/* Revisar si el producto existe */
$("#nuevoProducto").change(function () { 
    $(".alert").remove();
    var producto = $(this).val();
    var datos = new FormData();
    datos.append("validarProducto", producto);
    $.ajax({
        url:"ajax/productos.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) { 
            if (respuesta) { 
                $("#nuevoProducto").parent().after(' <br> <div class="alert alert-warning">Este producto ya existe </div>');
                $("#nuevoProducto").val("");
            }
        }
    })
})
/* Revisar si el producto existe ID para editar */
$("#editarId").change(function () { 
    $(".alert").remove();
    var id = $(this).val();
    var datos = new FormData();
    datos.append("validarProductoID", id);
    $.ajax({
        url:"ajax/productos.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) { 
            if (!respuesta) { 
                
                $("#editarId").parent().after(' <br> <div class="alert alert-warning">Este producto NO existe </div>');
                $("#editarId").val("");
            }
        }
    })
})