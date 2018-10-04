<?php 
    function checkDomain($domain,$server,$findText){ 
        // Open a socket connection to the whois server 
        $con = fsockopen($server, 43); 
        if (!$con) return false; 
         
        // Send the requested doman name 
        fputs($con, $domain."\r\n"); 
         
        // Read and store the server response 
        $response = ' :'; 
        while(!feof($con)) { 
            $response .= fgets($con,128);  
        } 
         
        // Close the connection 
        fclose($con); 
         
        // Check the response stream whether the domain is available 
        if (strpos($response, $findText)){ 
            return true; 
        } 
        else { 
            return false;    
        } 
    } 
     
    function showDomainResult($domain,$server,$findText){ 
       if (checkDomain($domain,$server,$findText)){ 
          echo "<tr><td>$domain</td><td>AVAILABLE</td></tr>"; 
       } 
       else echo "<tr><td>$domain</td><td>TAKEN</td></tr>"; 
    } 
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd"> 
<html> 
<body> 
<!--?php 
$str = "google.com";
echo $str . "<br>";
echo strstr($str,"."). "<br>";
echo substr(strstr($str,"."),1);?-->
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="domain">          
        <table> 
          <tr>
            <td>Domain name:</td>
            <td><input name="domainname" type="text" /></td>
            <td><input type="checkbox" name="com" checked/>.com</td>
            <td><input type="checkbox" name="net" />.net</td>
            <td><input type="checkbox" name="in" />.in</td>
            <td><input type="checkbox" name="info" />.info</td>
          </tr> 
          <tr align="right"><td colspan="6"><input type="submit" name="submitBtn" value="Check domain"/></td></tr> 
        </table>  
        
      </form> 
<?php     
    // The form was submitted 
    //$tlds = array('.aero','.biz','.cat','.com.','.coop','.edu','.gov','.info','.int','.jobs','.mil','.mobi','.museum','.name','.net','.org','.travel','.ac','.ad','.ae','.af','.ag','.ai','.al','.am','.an','.ao','.aq','.ar','.as','.at','.au','.aw','.az','.ba','.bb','.bd','.be','.bf','.bg','.bh','.bi','.bj','.bm','.bn','.bo','.br','.bs','.bt','.bv','.bw','.by','.bz','.ca','.cc','.cd','.cf','.cg','.ch','.ci','.ck','.cl','.cm','.cn','.co','.cr','.cs','.cu','.cv','.cx','.cy','.cz','.de','.dj','.dk','.dm','.do','.dz','.ec','.ee','.eg','.eh','.er','.es','.et','.eu','.fi','.fj','.fk','.fm','.fo','.fr','.ga','gb','.gd','.ge','.gf','.gg ','gh','.gi','.gl','.gm','.gn','.gp','.gq','.gr','.gs','.gt','.gu','.gw','.gy','.hk','.hm','.hn','.hr','.ht','.hu','.id','.ie','.il','.im','.in','.io','.iq','.ir','.is','it','.je','.jm','.jo','.jp','.ke','.kg','.kh','.ki','.km','.kn','.kp','.kr','.kw','.ky','.kz','.la','.lb','.lc','.li','.lk','.lr','.ls','.lt','.lu','.lv','.ly','.ma','.mc','.md','.me','.mg','.mh','.mk','.ml','.mm','.mn','.mo','.mp','mq','mr','ms','.mt','mu','.mv','.mw','.mx','.my','.mz','.na','.nc','.ne','.nf','.ng','.ni','.nl','.no','.np','.nr','.nu','.nz','.om','.pa','.pe Peru','.pf','.pg','.ph','.pk','.pl','.pm','.pn','.pr','.ps','.pt','pw','.py','.qa','.re','.ro','.ru','.rw','.sa','.sb','.sc','.sd','.se','.sg','.sh St.','.si','.sj','.sk','.sl','.sm','.sn','.so','.sr','.st','.su','.sv','.sy','.sz','.tc','.td Chad','.tf','.tg','.th','.tj','.tk','.tm','.tn','.to','.tp','.tr','.tt','.tv','.tw','.tza','.ua','.ug','.uk','.um','.us','.uy','.uz','.va','.vc','.ve','vg','vi U.S','.vn','.vu','.wf','.ws','.ye','.yt','.yu','.za','.zm','.zr','.zw');
    
    if (isset($_POST['submitBtn'])){ 
        $domainbase = (isset($_POST['domainname'])) ? $_POST['domainname'] : ''; 
        $d_com      = (isset($_POST['com'])) ? 'com' : '';   
        $d_net      = (isset($_POST['net'])) ? 'net' : '';   
        $d_in      = (isset($_POST['in'])) ? 'in' : '';   
        $d_info      = (isset($_POST['info'])) ? 'info' : '';     
         
        // Check domains only if the base name is big enough 
        if (strlen($domainbase)>2){ 
            echo '<table>'; 
            if ($d_com != '')   
               showDomainResult($domainbase.".".$d_com,'whois.crsnic.net','No match for');
            if ($d_net != '')   
               showDomainResult($domainbase.".".$d_net,'whois.crsnic.net','No match for');
            if ($d_in != '')   
               showDomainResult($domainbase.".".$d_in,'whois.crsnic.net','No match for');
            if ($d_info != '')   
               showDomainResult($domainbase.".".$d_info,'whois.crsnic.net','No match for');
                  
            echo '</table>'; 
        } 
    } 
?>     
</body>    
</html>