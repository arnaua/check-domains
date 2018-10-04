<?php


function url_exists( $url = NULL ) {
 
    if( empty( $url ) ){
        return false;
    }
 
    $options['http'] = array(
        'method' => "HEAD",
        'ignore_errors' => 1,
        'max_redirects' => 0
    );
    $body = @file_get_contents( $url, NULL, stream_context_create( $options ) );
    
    // Ver http://php.net/manual/es/reserved.variables.httpresponseheader.php
    if( isset( $http_response_header ) ) {
        sscanf( $http_response_header[0], 'HTTP/%*d.%*d %d', $httpcode );
 
        //Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
        $accepted_response = array( 200, 301, 302 );
        if( in_array( $httpcode, $accepted_response ) ) {
            return true;
        } else {
            return false;
        }
     } else {
         return false;
     }
}
$url = "https://";
$dominio = "arnauamado.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo " </br>";

$url = "https://";
$dominio = "digitalsignageweb.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "business.digitalsignagevision.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "crm.digitalsignagevision.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "digitalsignagevision.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "inmo.digitalsignagevision.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "premium.digitalsignagevision.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "senator.digitalsignagevision.com";
$url .= "$dominio";
$url .= "/tiempo/Tiempo%20Barajas.html";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "standard.digitalsignagevision.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";
echo "</br>";



$url = "https://";
$dominio = "siguemedia.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "cloud.siguemedia.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "examsbaixcamp.siguemedia.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "cambrapropietat.siguemedia.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";
echo "</br>";


















$url = "https://";
$dominio = "bolsasdepasteleria.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "bossa.cat";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";



$url = "https://";
$dominio = "chefmecsa.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";



$url = "https://";
$dominio = "creixellnatura.org";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";



$url = "https://";
$dominio = "englishangout.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "espaiuniversal.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "esportadaptat.org";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";




$url = "https://";
$dominio = "pescadoacasa.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";


$url = "https://";
$dominio = "rechousevideo.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "reformasbaixllobregat.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "reformatuinmueble.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "xn--repararbaerasmadrid-33b.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "xn--repararbaerasvalencia-kbc.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "setsailtgn.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";



$url = "https://";
$dominio = "soniasafineblanking.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "terapiavilanova.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "yoigonegociosbcn.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";

$url = "https://";
$dominio = "yoigonegociostgn.com";
$url .= "$dominio";
$urlexists = url_exists( $url );

echo "Estat: ";
if($urlexists == true){
    echo '<a style="color:green;">OK</a>';
}

if($urlexists == false){
    echo '<a style="color:red;">ERROR</a>';
}
echo " | Web: <a href='$url'>$url</a> | DNS registro A: ";
echo gethostbyname($dominio);
echo "</br>";




?>
