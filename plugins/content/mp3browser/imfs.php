<?php 
// Si no esta el id del usuario, que vuelva al home
if (!($_GET['id_imf'] OR $_GET['friendlyurl'])){
	header("Location: index.php");
	die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sumatoria</title>
<?php
require('includes/configuracion.php');
require('includes/db.php');
include("imf/inc_common.php");
require('includes/inc_sesiones.php');
?> 
<base href="/oculta/"/>
</head>

<body>
<?php 
include("includes/funciones_imf.php");
include("includes/funciones_usuario.php");
$friendlyURL = $_GET['friendlyurl'];
if ($friendlyURL) {
	$imf = getImfbyFriendlyURL($friendlyURL);
	$extension = substr($imf['logo'], strrpos($imf['logo'], "."));
	$imagen_imf = $ARCHIVOS_IMFS.$imf['id_imf'].$extension;
	if(!file_exists($imagen_imf)){
		$imagen_imf = "images/micro_icono.gif";
	} else {$imagen_imf = $imagen_imf;}
	} 
else {
	$id_imf = $_GET['id_imf'];
	$imf = getImf($id_imf);
	$extension = substr($imf['logo'], strrpos($imf['logo'], "."));
	$imagen_imf = $ARCHIVOS_IMFS.$imf['id_imf'].$extension;
	if(!file_exists($imagen_imf)){
		$imagen_imf = "images/micro_icono.gif";
	}
	}

include("includes/inc_top_menu.php"); ?>
<div id="BodyDiv">
<form action="prestar.php" method="post" name="Prestar" style="margin:0">
  <div class="centerDivCeroMargin">
    <div id="PrestarDivLeftMicro">
      <div id="PrestarSlider"><img src="<?=$imagen_imf?>" width="364px" height="238px" /><br />
      </div>
      <div>
        <span class="TitleText2"><strong>Descripci&oacute;n de la IMF</strong></span><br />
        <span class="TitleText3"><?=$imf['descripcion']?> </span><br />
      </div>
	    <div style="clear:both;"></div>
        
    </div>
    <div id="PrestarDivRightMicro">
    	<div class="botonVolver TitleText2"><a href="<?php echo $_SESSION['urlAnterior'] ?>">volver</a></div>
      <div id="PrestarPrimerColumna">
	    <div class="PrestarTitle">instituci&Oacute;n de microfinanzas </div>
	    <strong>Nombre: </strong><?=$imf['nombre']?><br />
	    <strong>Sitio Web:</strong> <a href="http://<?=$imf['website']?>" target="_blank" class="BlueLink"><?=$imf['website']?></a><br />
			<strong>Pa&iacute;s y Provincia: </strong><?=$imf['pais']?>, <?=$imf['provincia']?>
		<strong><br />
			Cartera: </strong>$ <?=$imf['cartera']?> 
<!--		<strong><br />
			Cartera en riesgo a 30 d&iacute;as: </strong><?=$imf['cartera_riesgo']?>
-->		<strong> <br />
			Tasa de inter&eacute;s mensual: </strong><?=$imf['tasa_interes']?>%
			<br /><br/>
		<div class="PrestarLineaPunteada"></div>
	    <div class="PrestarTitle">status en sumatoria</div>
      
	    <strong>Tiempo en Sumatoria: </strong><?=getStatus($imf['inic_operaciones'])?> d&iacute;as. 
    	<strong><br />
		    <?php 
		    $microemprendedores = getMicroemprendedoresFromImf($imf['id_imf']);
		    ?>
	    	Microempresarios Vigentes: </strong><?=mysql_num_rows($microemprendedores);?>
	    <strong><br />
			Microempresarios Hist&oacute;ricos: </strong><?=mysql_num_rows($microemprendedores);?> 
		<div class="PrestarLineaPunteada"></div>
    <br /><br />
	    <div style="clear:both;"></div>
      </div>
	  <div style="clear:both;"></div>
	</div>
    <div style="clear:both;"></div>
  </div>
</form>
<?php include("includes/inc_bottom_menu.php"); ?>
<?php include("includes/inc_footer.php"); ?>
</div>
</body>
</html>