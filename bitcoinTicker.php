<?php

function coindeskBPI(){
	$data = json_decode(getResource('http://api.coindesk.com/v1/bpi/currentprice.json'),'TRUE');
	return $data['bpi']['EUR']['rate'];
}

function bitStamp(){
	$data = json_decode(getResource('https://www.bitstamp.net/api/v2/ticker/btceur/'),'TRUE');
	return $data['last'];
}

function kraken(){
	$data = json_decode(getResource('https://api.kraken.com/0/public/Ticker?pair=XBTUSD'),'TRUE');
	return $data['result']['XXBTZEUR']['c'][0];
}

function getResource($url){
	$ch = curl_init();
	// SET CURL OPTIONS
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	// SIMPLE HACK FOR HTTPS SUPPORT, IDEALLY, WOULD POINT CURL TO A *PEM FILE WITH CERTS.
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

?>
