<?php

/* require_once "../../../controladores/ventas.controlador.php";
require_once "../../../modelos/ventas.modelo.php"; */

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/productos.controlador.php";
require_once "../../../modelos/productos.modelo.php";

class imprimirFactura
{

	public $cliente;
	public $total;
	public $fecha;
	public $nombreCliente;
	public function traerImpresionFactura()
	{

		//TRAEMOS LA INFORMACIÓN DEL CLIENTE
		$correo = $this->cliente;

		$productos = ControladorProductos::ctrMostrarCarrito($correo);
		$nombre = $this->nombreCliente;
		$fecha = $this->fecha;
		$total = $this->total;

		//REQUERIMOS LA CLASE TCPDF

		require_once('tcpdf_include.php');

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		$pdf->startPageGroup();

		$pdf->AddPage();

		// ---------------------------------------------------------

		$bloque1 = <<<EOF

	<table>
		
		<tr>
			
			<td style="width:150px"><img src="images/logoFactura.png"></td>

			<td style="background-color:white; width:180px">
				
				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					<br>
					
					<br>
					Cliente: $nombre

					<br>
					Juan de Dios Robledo No. 686 Int. A

				</div>

			</td>

			<td style="background-color:white; width:180px">

				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					<br>
					
					<br>
					Teléfono: 33-3655-8752
					
					<br>
					elTioGeek@gmail.com

				</div>
				
			</td>


		</tr>

	</table>

EOF;

		$pdf->writeHTML($bloque1, false, false, false, false, '');

		// ---------------------------------------------------------

		$bloque2 = <<<EOF

	<table>
		
		<tr>
			
			<td style="width:540px"><img src="images/back.jpg"></td>
		
		</tr>

	</table>

	<table style="font-size:10px; padding:5px 10px;">
	
		<tr>
		
			<td style="border: 1px solid #666; background-color:white; width:210px">

				Cliente: $nombre

			</td>

			<td style="border: 1px solid #666; background-color:white; width:150px; text-align:right">
			
				Fecha: $fecha

			</td>

		</tr>

		

		

	</table>
	<br>
	<br>

EOF;

		$pdf->writeHTML($bloque2, false, false, false, false, '');

		// ---------------------------------------------------------

		$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>
		
		<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center">Producto</td>
		<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Precio.</td>

		</tr>

	</table>

EOF;

		$pdf->writeHTML($bloque3, false, false, false, false, '');

		// ---------------------------------------------------------

		foreach ($productos as $key => $item) {



			$bloque4 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>
			
			<td style="border: 1px solid #666; color:#333; background-color:white; width:260px; text-align:center">
				$item[producto_nombre]
			</td>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">
				$ $item[producto_precio]
			</td>



		</tr>

	</table>


EOF;

			$pdf->writeHTML($bloque4, false, false, false, false, '');
		}

		// ---------------------------------------------------------

		$bloque5 = <<<EOF

		<table style="font-size:10px; padding:5px 10px;">

		<tr>
			
			<td style="border: 1px solid #666; color:#333; background-color:white; width:260px;">
				TOTAL:
			</td>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">
				$ $total
			</td>



		</tr>

	</table>

EOF;

		$pdf->writeHTML($bloque5, false, false, false, false, '');

		$tablas = "carrito";
		$carrito = ModeloProductos::mdlVaciarCarrito($tablas, $correo);

		// ---------------------------------------------------------
		//SALIDA DEL ARCHIVO 

		$pdf->Output('factura.pdf', 'D');
	}
}

$factura = new imprimirFactura();
$factura->total = $_GET["total"];
$factura->cliente = $_GET["cliente"];
$factura->fecha = $_GET["fecha"];
$factura->nombreCliente = $_GET["nombre"];
$factura->traerImpresionFactura();
