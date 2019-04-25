<?php
$tiempo_inicial = microtime(true);
$error = 0;
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
    <!--<th>Captura<a href="index.php">X amb captura</a></th>-->
    <th>DNS A</th>
    <th>DNS 1</th>
    <th>DNS 2</th>
  </tr>
  
  


<?php

echo url("arnauamado.com", "https://");
?><tr>
    <th>Recubik</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
<?php
echo url("task.recubik.com", "https://");
echo url("digitalsignageweb.com", "https://");
echo url("digitalsignagevision.com", "https://");
echo url("business.digitalsignagevision.com", "https://");
echo url("crm.digitalsignagevision.com", "https://");
echo url("scrm.digitalsignagevision.com", "https://");
echo url("inmo.digitalsignagevision.com", "https://");
echo url("premium.digitalsignagevision.com", "https://");
echo url("standard.digitalsignagevision.com", "https://");
//echo url("senator.digitalsignagevision.com/tiempo/Tiempo%20Barajas.html");
echo url("senator.digitalsignagevision.com", "https://");
?><tr>
    <th>SigueMedia</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
<?php
echo url("siguemedia.com", "https://");
echo url("cloud.siguemedia.com", "https://");
echo url("examsbaixcamp.siguemedia.com", "https://");
echo url("cambrapropietat.siguemedia.com", "https://");
echo url("sensualpinup.com", "https://");
?><tr>
    <th>Clients SigueMedia</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
<?php
echo url("bolsasdepasteleria.com", "https://");
echo url("bossa.cat", "https://");
echo url("chefmecsa.com", "https://");
echo url("creixellnatura.org", "https://");
echo url("englishangout.com", "https://");
echo url("espaiuniversal.com", "https://");
echo url("esportadaptat.org", "https://");
echo url("pescadoacasa.com", "https://");
echo url("rechousevideo.com", "https://");
echo url("reformasbaixllobregat.com", "https://");
echo url("reformatuinmueble.com", "https://");
echo url("xn--repararbaerasmadrid-33b.com", "https://");
echo url("xn--repararbaerasvalencia-kbc.com", "https://");
//echo url("terapiavilanova.com");
echo url("yoigonegociosbcn.com", "https://");
echo url("yoigonegociostgn.com", "https://");
echo url("repararbanyera.cat", "https://");

echo url("soniasafineblanking.com", "https://");
echo url("setsailtgn.com", "https://");
echo url("examsbaixcamp.com", "https://");
echo url("emiliodiazlaraescritor.com", "https://");
echo url("puentesdeluces.com", "https://");
echo url("capbarcelonapadel.com", "https://");


echo url("optimaweb.org", "http://");
echo url("finquessegarra.com", "https://");
echo url("linealhosting.com", "https://");
echo url("carolinareigterapeuta.com", "https://");
echo url("clinicadentalpalazon.com", "https://");
echo url("hmt-cm.com", "https://");
echo url("floresyburgos.com", "https://");





function conversorSegundosHoras($tiempo_en_segundos) {
    $horas = floor($tiempo_en_segundos / 3600);
    $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
    $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);

    $hora_texto = "";
    if ($horas > 0 ) {
        $hora_texto .= $horas . "h ";
    }

    if ($minutos > 0 ) {
        $hora_texto .= $minutos . "m ";
    }

    if ($segundos > 0 ) {
        $hora_texto .= $segundos . "s";
    }

    return $hora_texto;
}

function url($dominio, $https) {
 
    $estatreturn= "";
    $DNSA= "";
    $DNSNS1= "";
    $DNSNS2= "";
    $url = $https;
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
            $error = $error + 1;
        }
     } else {
         $error = $error + 1;
         $estatreturn= '<a style="color:red;">ERROR ('.$codihtml.')</a>';
     }

     $result = dns_get_record("arnauamado.com", DNS_ANY, $authns, $addtl);
     $ipdomini = gethostbyname($dominio);

     if ($ipdomini != "54.37.254.123") {
         $ipdomini = '<a style="color:orange;">'.$ipdomini.'</a>';
     }

     if ($ipdomini == "94.76.201.97") {
         $ipdomini = '<a style="color:red;">'.$ipdomini.'</a>';
     }

     if ($ipdomini == "54.37.254.123") {
         $ipdomini = '<a style="color:green;">'.$ipdomini.'</a>';
     }



     $test = dns_get_record($dominio, DNS_NS);

     


    /* //$URLpagina = "https://siguemedia.com";
    $PagespeedDataGoogle = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$url&screenshot=true");
    $PagespeedDataGoogle = json_decode($PagespeedDataGoogle, true);
    $captura = $PagespeedDataGoogle['screenshot']['data'];
    $captura = str_replace(array('_','-'),array('/','+'),$captura); 
   // echo "<center><img src=\"data:image/jpeg;base64,".$captura."\" /></center>";*/
     

     return "

    <tr>
        <td>" . $url . "</td>
        <td>" . $estatreturn . "</td>
        <!--<td><a href='capturawebgran.php?url=".$url."&enviar=Enviar+URL'><center><img src=\"data:image/jpeg;base64,".$captura."\" /></center></a></td>-->
        <!--<td><a href='".$url."'><center><img src=\"data:image/jpeg;base64,".$captura."\" /></center></a></td>-->
        <td>" . $ipdomini . "</td>
        <td>" . $test['0']['target'] . "</td>
        <td>" . $test['1']['target'] . "</td>
        
    </tr>


     ";


     
}

echo "</br>";

     

    
    $tiempo_final = microtime(true);
    $tiempo = $tiempo_final - $tiempo_inicial;
    $tiempo = conversorSegundosHoras(intval($tiempo));

    
    
    echo "Temps que a tardat: " . $tiempo . ".";

    

?>

</table>

</body>
</html>