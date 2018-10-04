<?php
if (isset($_GET["enviar"])){
 $pagina=$_GET["url"];
//Declaramos la Url enviada desde un formulario
$URLpagina = "".$pagina."";
 
//Llamamos a Google PageSpeed Insights API
$PagespeedDataGoogle = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$URLpagina&screenshot=true");
 
//Decodificar datos con JSON
$PagespeedDataGoogle = json_decode($PagespeedDataGoogle, true);
 
//La imagen de la captura de pantalla
$captura = $PagespeedDataGoogle['screenshot']['data'];
$captura = str_replace(array('_','-'),array('/','+'),$captura); 
 
//Mostramos en el navegador la captura de pantalla
echo "<center><img src=\"data:image/jpeg;base64,".$captura."\" /></center>";
echo $URLpagina;
}
?>
