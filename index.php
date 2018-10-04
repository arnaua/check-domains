<?php
function microtime_float()
{
list($useg, $seg) = explode(" ", microtime());
return ((float)$useg + (float)$seg);
}

$tiempo_inicio = microtime_float();
?>

<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>Domini</th>
    <th>Estat</th>
    <th>Captura</th>
    <th>DNS A</th>
    <th>DNS 1</th>
    <th>DNS 2</th>
  </tr>

  


<?php

echo url("arnauamado.com");
echo url("digitalsignageweb.com");
echo url("digitalsignagevision.com");
echo url("business.digitalsignagevision.com");
echo url("crm.digitalsignagevision.com");
echo url("scrm.digitalsignagevision.com");
echo url("inmo.digitalsignagevision.com");
echo url("premium.digitalsignagevision.com");
echo url("standard.digitalsignagevision.com");
//echo url("senator.digitalsignagevision.com/tiempo/Tiempo%20Barajas.html");
echo url("senator.digitalsignagevision.com");
echo url("siguemedia.com");
echo url("cloud.siguemedia.com");
echo url("examsbaixcamp.siguemedia.com");
echo url("cambrapropietat.siguemedia.com");
echo url("bolsasdepasteleria.com");
echo url("bossa.cat");
echo url("chefmecsa.com");
echo url("creixellnatura.org");
echo url("englishangout.com");
echo url("espaiuniversal.com");
echo url("esportadaptat.org");
echo url("pescadoacasa.com");
echo url("rechousevideo.com");
echo url("reformasbaixllobregat.com");
echo url("reformatuinmueble.com");
echo url("xn--repararbaerasmadrid-33b.com");
echo url("xn--repararbaerasvalencia-kbc.com");
echo url("terapiavilanova.com");
echo url("yoigonegociosbcn.com");
echo url("yoigonegociostgn.com");
echo url("repararbanyera.cat");


function url($dominio) {
 
    $estatreturn= "";
    $DNSA= "";
    $DNSNS1= "";
    $DNSNS2= "";
    $url = "https://";
    $url .= "$dominio";
    $codihtml = "";
    $ipdomini = "";




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

        $codihtml = $httpcode;
 
        //Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
        $accepted_response = array( 200, 301, 302 );
        if( in_array( $httpcode, $accepted_response ) ) {
           // return true;
            $estatreturn= '<a style="color:green;">OK</a>';

        } else {
            $estatreturn= '<a style="color:red;">ERROR ('.$codihtml.')</a>';
            //return false;
        }
     } else {
         //return false;
         $estatreturn= '<a style="color:red;">ERROR ('.$codihtml.')</a>';
     }

     $result = dns_get_record("arnauamado.com", DNS_ANY, $authns, $addtl);
     $ipdomini = gethostbyname($dominio);

     if ($ipdomini == "94.76.201.97") {
         $ipdomini = '<a style="color:red;">'.$ipdomini.'</a>';
     }

     $test = dns_get_record($dominio, DNS_NS);


     //$URLpagina = "https://siguemedia.com";
    $PagespeedDataGoogle = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$url&screenshot=true");
    $PagespeedDataGoogle = json_decode($PagespeedDataGoogle, true);
    $captura = $PagespeedDataGoogle['screenshot']['data'];
    $captura = str_replace(array('_','-'),array('/','+'),$captura); 
   // echo "<center><img src=\"data:image/jpeg;base64,".$captura."\" /></center>";
     

     return "

    <tr>
        <td>" . $url . "</td>
        <td>" . $estatreturn . "</td>
        <td><center><img src=\"data:image/jpeg;base64,".$captura."\" /></center></td>
        <td>" . $ipdomini . "</td>
        <td>" . $test['0']['target'] . "</td>
        <td>" . $test['1']['target'] . "</td>
        
    </tr>


     ";


     
}

echo "</br>";
echo "</br>";
echo "</br>";

$tiempo_fin = microtime_float();
$tiempo = $tiempo_fin - $tiempo_inicio;

echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio);

?>

</table>

</body>
</html>