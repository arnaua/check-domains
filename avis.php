<?php
$tiempo_inicial = microtime(true);
$error = 0;

echo "Check Domains";
  



echo url("task.recubik.com", "https://");
echo url("digitalsignageweb.com", "https://");
echo url("digitalsignagevision.com", "https://");
echo url("business.digitalsignagevision.com", "https://");
echo url("crm.digitalsignagevision.com", "https://");
echo url("scrm.digitalsignagevision.com", "https://");
echo url("inmo.digitalsignagevision.com", "https://");
echo url("premium.digitalsignagevision.com", "https://");
echo url("standard.digitalsignagevision.com", "https://");
//echo url("senator.digitalsignagevision.com/tiempo/Tiempo%20Barajas.html", "https://");
echo url("senator.digitalsignagevision.com", "https://");
echo url("siguemedia.com", "https://");
echo url("cloud.siguemedia.com", "https://");
echo url("examsbaixcamp.siguemedia.com", "https://");
echo url("cambrapropietat.siguemedia.com", "https://");
echo url("sensualpinup.com", "https://");
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
echo url("repararbanyera.cat", "https://");
echo url("xn--repararbaerasmadrid-33b.com", "https://");
echo url("xn--repararbaerasvalencia-kbc.com", "https://");
echo url("xn--arreglarbaeras-znb.com", "https://");
//echo url("terapiavilanova.com", "https://");
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

echo url("arnauamado.com", "https://");

echo url("fincaspremium.com", "https://");
echo url("englishangoutonline.com", "https://");
echo url("coachpsicologo.com", "https://");
echo url("reformasgava.com", "https://");
echo url("xn--arreglarbaeras-znb.com", "https://");

echo url("endesarrolloweb.com", "https://");
echo url("distribuidorcarteleriadigital.com", "https://");
echo url("siguemedia.net", "https://");
echo url("aprendeareciclar.com", "https://");


function send($method, $data)
{
    $url = "https://api.telegram.org/bot775720752:AAHT1z9wbO-IDhlqsNsP9J_91dtaROyDmrY". "/" . $method;

    if (!$curld = curl_init()) {
        exit;
    }
    curl_setopt($curld, CURLOPT_POST, true);
    curl_setopt($curld, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curld, CURLOPT_URL, $url);
    curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($curld);
    curl_close($curld);
    return $output;
}

function sendMessage($chatId, $text) 
    {
      $TOKEN = "701866076:AAGVaqLebSl35J4hFd2Wyuc1ijt0d0_sRZI";
      $TELEGRAM = "https://api.telegram.org:443/bot$TOKEN"; 

      $query = http_build_query(array(
        'chat_id'=> $chatId,
        'text'=> $text,
        'parse_mode'=> "HTML", // Optional: Markdown | HTML
      ));

      $response = file_get_contents("$TELEGRAM/sendMessage?$query");
      return $response;
    }




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
           // return ok;

        } else {
            
            $txt = 'Error Domnio: '.$url;
            $txt .= " \n";
            $txt .= 'Codiogo de Error: '.$codihtml;

            sendMessage('446086312', $txt);

        }
     } else {
            
            /*$txt = 'Error Domnio: '.$url;
            $txt .= " \n";
            $txt .= 'Codiogo de Error: '.$codihtml;

            sendMessage('446086312', $txt);*/
     }

     $result = dns_get_record("arnauamado.com", DNS_ANY, $authns, $addtl);
     $ipdomini = gethostbyname($dominio);

     $test = dns_get_record($dominio, DNS_NS);
     
}

    
    $tiempo_final = microtime(true);
    $tiempo = $tiempo_final - $tiempo_inicial;
    $tiempo = conversorSegundosHoras(intval($tiempo));

    
    
    echo "Temps que a tardat: " . $tiempo . ".";




    
       /*$chatId = "446086312";
        $response = "Tria una opcio: ";
        $response .= " \n";
        $response .= "Menu:";

$keyboard = [
    'inline_keyboard' => [
        [
            ['text' => 'Programar plantilla', 'callback_data' => 'Programar'],
            ['text' => 'Editar plantilla', 'callback_data' => 'Editar'],
            ['text' => 'Arnau', 'callback_data' => 'Arnau']
        ],
        [ 
            ['text' => 'Pantallas', 'callback_data' => 'Pantallas'],
            ['text' => 'Usuaris', 'callback_data' => 'Usuaris'],
            ['text' => 'Reverter', 'callback_data' => 'reverter']
        ]
    ]
    ];
    $encodedKeyboard = json_encode($keyboard);
    $parameters = 
        array(
            'chat_id' => $chatId, 
            'text' => $response, 
            'reply_markup' => $encodedKeyboard
        );

    send('sendMessage', $parameters);*/



    

?>

</table>

</body>
</html>