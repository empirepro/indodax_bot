<?php 
include 'logic/api.php';

function order($pair, $type_, $idr, $order_price, $url, $key, $secretKey){
	$url = $url;
    $key = $key;
    $secretKey = $secretKey;

    if ($type_ == 'Buy') {
    	$data = [
	        'method' => 'trade',
	        'timestamp' => '1578304294000',
	        'recvWindow' => '1578303937000',
	        'pair' => $pair,
	        'type' => 'buy',
	        'price' => $order_price,
	        'idr' => $idr
    	];
    } elseif ($type_ == 'Sell') {
    	$data = [
	        'method' => 'trade',
	        'timestamp' => '1578304294000',
	        'recvWindow' => '1578303937000',
	        'pair' => $pair,
	        'type' => 'sell',
	        'price' => $order_price,
	        'idr' => $idr
    	];
    }
	

    // var_dump($data); die;
	$post_data = http_build_query($data, '', '&');
    $sign = hash_hmac('sha512', $post_data, $secretKey);

    $headers = ['Key:'.$key,'Sign:'.$sign];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => true
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $res = json_decode($response, true);
    // var_dump($res); die;
    if ($res['success']) {
       if ($res['error']) {
	    	echo "<script>
					alert('Failed because [". $res['error'] ."]');
					window.location='order.php';
				</script>";
	    }else{
	    	echo "<script>
					alert('Success to ". $type_ ."');
					window.location='order.php';
				</script>";
	    }
    } else {
    	echo "<script>
					alert('Failed because [". $res['error'] ."]');
					window.location='order.php';
				</script>";
    }
}

function sell(){

}

