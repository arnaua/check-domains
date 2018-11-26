<?php
$tiempo_inicial = microtime(true);
$error = 0;

echo "Check Domains";
  



echo url("task.recubik.com");
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
echo url("sensualpinup.com");
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
echo url("repararbanyera.cat");
echo url("xn--repararbaerasmadrid-33b.com");
echo url("xn--repararbaerasvalencia-kbc.com");
echo url("xn--arreglarbaeras-znb.com");
echo url("terapiavilanova.com");
echo url("yoigonegociosbcn.com");
echo url("yoigonegociostgn.com");
echo url("repararbanyera.cat");
echo url("soniasafineblanking.com");
echo url("setsailtgn.com");
echo url("examsbaixcamp.com");
echo url("emiliodiazlaraescritor.com");
echo url("puentesdeluces.com");
echo url("capbarcelonapadel.com");

echo url("arnauamado.com");


function send($method, $data)
{
    $url = "https://api.telegram.org/bot701866076:AAGVaqLebSl35J4hFd2Wyuc1ijt0d0_sRZI". "/" . $method;

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
           // return ok;

        } else {
            
            $txt = 'Error Domnio: '.$url;
            $txt .= " \n";
            $txt .= 'Codiogo de Error: '.$codihtml;

            sendMessage('446086312', $txt);

        }
     } else {
            
            $txt = 'Error Domnio: '.$url;
            $txt .= " \n";
            $txt .= 'Codiogo de Error: '.$codihtml;

            sendMessage('446086312', $txt);
     }

     $result = dns_get_record("arnauamado.com", DNS_ANY, $authns, $addtl);
     $ipdomini = gethostbyname($dominio);

     $test = dns_get_record($dominio, DNS_NS);
     
}

    
    $tiempo_final = microtime(true);
    $tiempo = $tiempo_final - $tiempo_inicial;
    $tiempo = conversorSegundosHoras(intval($tiempo));

    
    
    echo "Temps que a tardat: " . $tiempo . ".";




    
        $chatId = "446086312";
        $response = "Ciao , benvenuto!";

$keyboard = [
    'inline_keyboard' => [
        [
            ['text' => 'forward me to groups', 'callback_data' => 'someString']
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

    send('sendMessage', $parameters);



    

?>

</table>

</body>
</html>