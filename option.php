<?php
/**
 * Created by PhpStorm.
 * User: Babafemi.Adigun
 * Date: 3/11/16
 * Time: 11:29 AM
 */


    $amt1 = $amount * 100; /// Amount coming from the sumit-form.php * 100kobo so it will be pass to where all $amt1 is found. But actually this wasn't here before i brought it here when you have been tell me the result of kobo is not coming to ur side.
    //$pdtid = "$tempref";
    $pdtid = 6661;
    //$pdtid = 6205;
    $payitemid = 101;
    $currencycode = 566;
    //$paytest = "https://stageserv.interswitchng.com/test_paydirect/pay";
    $paylive = "https://webpay.interswitchng.com/paydirect/pay";
    $callbackpage = "http://www.jfmedias.com/script/payweb/response.php";
    $reference = dotref();
    $mackey = "88A7F9E3C4C153BF7E0196654E36E1A70162F91C542F1C14160D767150B96D2ECB674D0EFF6FB4CC5037EDFEE4BAB60A968B2980F8524F8F64B754DF555BE59A";
    
    function dquery($amt1,$ref){
        $pdt = $GLOBALS['pdtid'];
		$thash = queryHash($ref);
        $parami = array(
            "productid"=>$GLOBALS['pdtid'],
            "transactionreference"=>$ref,
            "amount"=>$amt1,
        );
        $ponmo = http_build_query($parami) . "\n";

        $query_url = 'https://webpay.interswitchng.com/paydirect/api/v1/gettransaction.json';
        //$query_url = 'https://stageserv.interswitchng.com/test_paydirect/api/v1/gettransaction.json';
       // $url = "$query_url?productid=$pdt&transactionreference=$ref&amount=$amt";
        $url = "$query_url?productid=$pdt&transactionreference=$ref&amount=$amt1";
        //note the variables appended to the url as get values for these parameters
        $headers = array(
            "GET /HTTP/1.1",
            "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
            "Accept-Language: en-us,en;q=0.5",
            "Keep-Alive: 300",
            "Connection: keep-alive",
            "Hash: $thash " );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt( $ch, CURLOPT_POST, false );
        $data = curl_exec($ch);
        if (curl_errno($ch)) {
            print "Error: " . curl_error($ch);
        }
        else {
            $json = json_decode($data, TRUE);
            curl_close($ch);
            return $json;
        }
    }
    function dohash($amt1){
        $tohash = $GLOBALS['reference'].$GLOBALS['pdtid'].$GLOBALS['payitemid'].$amt1.$GLOBALS['callbackpage'].$GLOBALS['mackey'];
        $dhash =  hash('sha512',$tohash);
        return $dhash;
    }
    function queryHash($refi){
        $tryhash = $GLOBALS['pdtid'].$refi.$GLOBALS['mackey'];
        $dhash = hash('sha512', $tryhash);
        return $dhash;
    }
    function dotref (){
        $tref = mt_rand(100000,999999);
        
        return $tref;
    }

