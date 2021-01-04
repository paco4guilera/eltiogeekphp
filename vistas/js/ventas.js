/*=============================================
IMPRIMIR FACTURA
=============================================*/

$(document).on("click", ".btn-vender", function () { 
    console.log("presionado");
	var total = $(this).attr("total");

	window.open("extensiones/tcpdf/pdf/factura.php?total="+total, "_blank");

})