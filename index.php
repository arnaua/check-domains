<?php

echo url("arnauamado.com");
echo url("digitalsignageweb.com");
echo url("business.digitalsignagevision.com");
echo url("crm.digitalsignagevision.com");
echo url("scrm.digitalsignagevision.com");
echo url("digitalsignagevision.com");
echo url("inmo.digitalsignagevision.com");
echo url("premium.digitalsignagevision.com");
echo url("standard.digitalsignagevision.com");
//echo url("senator.digitalsignagevision.com/tiempo/Tiempo%20Barajas.html");
echo url("senator.digitalsignagevision.com");
echo "</br>";
echo url("siguemedia.com");
echo url("cloud.siguemedia.com");
echo url("examsbaixcamp.siguemedia.com");
echo url("cambrapropietat.siguemedia.com");
echo "</br>";
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
           // return true;
            $estatreturn= '<a style="color:green;">OK</a>';

        } else {
            $estatreturn= '<a style="color:red;">ERROR</a>';
            //return false;
        }
     } else {
         //return false;
         $estatreturn= '<a style="color:red;">ERROR</a>';
     }

     $result = dns_get_record("arnauamado.com", DNS_ANY, $authns, $addtl);

     return "Estat: " . $estatreturn . " | Web: <a href='$url'>" . $url . "</a> | DNS registro A: " . gethostbyname($dominio) . " / Servidores DNS: " . $result['4']['target'] . " / " . $result['5']['target'] . "</br>";
}

?>
