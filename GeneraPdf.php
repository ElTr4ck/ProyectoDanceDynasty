<?php
session_start();


require ('assets/php/fpdf185/fpdf.php');

// Obtener los datos del formulario

$nombre = $_SESSION['nombre'];
$apellidoPaterno = $_SESSION['apellidoPaterno'];
$apellidoMaterno = $_SESSION['apellidoMaterno'];
$curp = $_SESSION['curp'];
$email = $_SESSION['email'];
$telefono = $_SESSION['telefono'];
$calle = $_SESSION['calle'];
$cp = $_SESSION['cp'];
$numExt = $_SESSION['numExt'];
$numInt = $_SESSION['numInt'];
$entidad = $_SESSION['entidad'];
$municipio = $_SESSION['municipio'];
$colonia = $_SESSION['colonia'];

$salon = $_SESSION['salon'];
$fechaEvento = $_SESSION['fechaEvento'];
$horario = $_SESSION['horario'];
$numP = $_SESSION['numP'];
$tipoEv = $_SESSION['tipoEv'];
$otroEv = $_SESSION['otroEv'];
$menu = $_SESSION['menu'];
$entradaMenu = $_SESSION['entradaMenu'];
$fuerteMenu = $_SESSION['fuerteMenu'];
$postreMenu = $_SESSION['postreMenu'];

// Generar el número de folio único a partir de la CURP y de la fecha
$folio = substr(md5($curp . $fechaEvento), 0, 8);

// Crear una instancia de la clase FPDF
$pdf = new FPDF();

// Agregar una página al PDF
$pdf->AddPage();

// Establecer la fuente y el tamaño del texto
$pdf->SetFont('Helvetica','BI', 22, '', true, 'UTF-8');  //Elegimos fuente, tipo, tamaño

// Agregar imagen de fondo
//$pdf->Image('assets/img/fondo.jpg', 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());
$pdf->Image('assets/img/logo.png', 10, 5, 20, 25);
$pdf->Image('assets/img/logoPDF.jpg', 65, 280, 80, 25);

// Agregar el contenido al PDF

$pdf->SetTextColor(71, 30, 75); //Color morado fuerte
$pdf->Cell(0, 20, utf8_decode('Resúmen de la orden:'), 0, 1,'C'); // Título

$pdf->SetFont('Helvetica','BI',14, '', true, 'UTF-8');
$pdf->SetTextColor(255, 255, 0); //COLOR AMARILLO

$pdf->SetTextColor(71, 30, 75); //Color morado fuerte

$pdf->Cell(0, 0, '============================================ ' , 0, 1, 'C');

$pdf->SetTextColor(3, 255, 246); //Color azul
$pdf->Cell(0, 10, 'Datos del cliente' , 0, 1,'C');
$pdf->SetTextColor(255, 255, 0); //COLOR AMARILLO

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->Cell(50, 10, 'Nombre: ', 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0, 10, utf8_decode($nombre) .' '. utf8_decode($apellidoPaterno) . ' '. utf8_decode($apellidoMaterno) , 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(50, 10, 'E-Mail: ', 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($email), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(50, 10, utf8_decode('Teléfono: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($telefono), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(50, 10, utf8_decode('CURP: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($curp), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(50, 10, utf8_decode('Domicilio: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($calle . ' ' . $numExt . ', ' . $cp . ', ' .$colonia . ', ' . $municipio . ', ' . $entidad ), 0, 1);

$pdf->SetTextColor(71, 30, 75); //Color morado fuerte
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(0, 10, '============================================ ' , 0, 1, 'C');
$pdf->SetTextColor(3, 255, 246); //Color azul

$pdf->Cell(0, 10, 'Datos del evento' , 0, 1,'C');
$pdf->SetTextColor(0, 0, 0);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(80, 10, utf8_decode('Salón elegido: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($salon), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(80, 10, utf8_decode('Fecha elegida: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($fechaEvento), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(80, 10, utf8_decode('Horario reservado: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($horario), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(80, 10, utf8_decode('Número de personas: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($numP), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(80, 10, utf8_decode('Tipo de evento elegido: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($tipoEv), 0, 1);

if(isset($otroEv) && !empty($otroEv)){
    $pdf->SetTextColor(106, 44, 112); //Color morado
    $pdf->SetFont('Helvetica', 'BI', 14);
    $pdf->Cell(80, 10, utf8_decode('Otro evento solicitado: '), 0, 0);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Helvetica', '', 14);
    $pdf->Cell(0, 10,utf8_decode($otroEv), 0, 1);
}

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(80, 10, utf8_decode('Menú elegido: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 10,utf8_decode($menu), 0, 1);

if(isset($entradaMenu) && !empty($entradaMenu)){
    $pdf->SetTextColor(106, 44, 112); //Color morado
    $pdf->SetFont('Helvetica', 'BI', 14);
    $pdf->Cell(80, 10, utf8_decode('Entrada para el menú: '), 0, 0);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Helvetica', '', 14);
    $pdf->Cell(0, 10,utf8_decode($entradaMenu), 0, 1);

    $pdf->SetTextColor(106, 44, 112); //Color morado
    $pdf->SetFont('Helvetica', 'BI', 14);
    $pdf->Cell(80, 10, utf8_decode('Plato fuerte para el menú: '), 0, 0);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Helvetica', '', 14);
    $pdf->Cell(0, 10,utf8_decode($fuerteMenu), 0, 1);

    $pdf->SetTextColor(106, 44, 112); //Color morado
    $pdf->SetFont('Helvetica', 'BI', 14);
    $pdf->Cell(80, 10, utf8_decode('Postre para el menú: '), 0, 0);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Helvetica', '', 14);
    $pdf->Cell(0, 10,utf8_decode($postreMenu), 0, 1);
}

if($salon == 'Jardin'){
    $pdf->Image('assets/img/portfolio/portfolio-12.jpg', 90, 230, 50);
}
elseif($salon == 'SalonA'){
    $pdf->Image('assets/img/portfolio/portfolio-11.jpg', 90, 230, 50);
}
elseif($salon == 'SalonB'){
    $pdf->Image('assets/img/portfolio/portfolio-10.jpg', 90, 230, 50);
}

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(20, 20, utf8_decode('Folio: '), 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(0, 20,utf8_decode($folio), 0, 1);

$pdf->SetTextColor(106, 44, 112); //Color morado
$pdf->SetFont('Helvetica', 'BI', 14);
$pdf->Cell(0, 0, utf8_decode('Dance Dynasty "Libera el poder de la fiesta"'), 0, 1, 'C');

// Generar el PDF
$pdfContenido = $pdf->Output('S');
$ruta = 'assets/pdfs/' . $folio . '.pdf';
file_put_contents($ruta, $pdfContenido);

//Descargar el PDF automaticamente
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $folio . '.pdf"');
echo $pdfContenido;

//Meter valores a la BD para poder ubicar el archivo mas tarde
$conexion = mysqli_connect('localhost', 'root','', 'pdancedinasty');
$sql = "INSERT INTO comprobante VALUES ('$folio', '$curp', '$fechaEvento')";

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

mysqli_query($conexion, $sql);

if(isset($_SESSION['crudAdmin'])){
    header('Location: crud.php');
}

session_destroy();
header('Location: index.html');


?>
