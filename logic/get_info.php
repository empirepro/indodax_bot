<?php 
function get_info($url, $key, $secretKey){
    $data = [
            'method' => 'getInfo',
            'timestamp' => '1578304294000',
            'recvWindow' => '1578303937000'
        ];
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

    $responses = curl_exec($curl);
    $response = json_decode($responses, true);

    curl_close($curl);
    // var_dump($response); die;
    // print_r($response['return']['balance']['btc']);
    return $response;
}

function get_info_all_coin(){
	$url = 'https://indodax.com/api/pairs';
	$get_data = file_get_contents($url);
	$data = json_decode($get_data, true);
	return $data;
	// var_dump($data); die;
}
function get_price(){
	$url = 'https://indodax.com/api/summaries';
	$get_data = file_get_contents($url);
	$data = json_decode($get_data, true);
	return $data;
}

?>

