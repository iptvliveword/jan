<?php

// Created by MUJER HASIBUAN
// Please don't remove tag :)

mujer('6685');

function mujer($mh){

	// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/

	$ch = curl_init();
    $mujerCH = basename($mh); 


	curl_setopt($ch, CURLOPT_URL, 'https://www.vidio.com/live/'.$mh.'/tokens');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);

	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');



	$headers = array();

	$headers[] = 'Authority: www.vidio.com';

	$headers[] = 'Content-Length: 0';

	$headers[] = 'Origin: https://www.vidio.com';

	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36';

	$headers[] = 'Dnt: 1';

	$headers[] = 'Accept: /';

	$headers[] = 'Sec-Fetch-Site: same-origin';

	$headers[] = 'Sec-Fetch-Mode: cors';

	$headers[] = 'Referer: https://m.vidio.com/live/$mh';

	$headers[] = 'Accept-Encoding: gzip, deflate, br';

	$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
	$headers[] = 'cookie: cookie: ahoy_visitor=502c8f42-c7c7-4376-8977-8f57f6b8d376;__gads=ID=bde6fe9a92416400-22600bceb2c2000e:T=1595791634:S=ALNI_MaSYBRQ3MOdnDmw6Wtt3LHnSTVkTw;__asc=19d9bae81738c84d21cca14ebfb;__auc=19d9bae81738c84d21cca14ebfb;_gid=GA1.2.1044219464.1596031158;_CEFT=Q%3D%3D%3D;_fbp=fb.1.1595790385493.1233774131;shva=1;remember_user_token=eyJfcmFpbHMiOnsibWVzc2FnZSI6IlcxczBOamMxTVRRMU9GMHNJaVF5WVNReE1DUTFjRlJTYjJ4T2RYSjVlRE5MVmtWb2QzWjJPSGRQSWl3aU1UVTVOakF6TVRNMk1pNHdOVFUzT0RVMElsMD0iLCJleHAiOiIyMDIyLTA3LTI5VDE0OjAyOjQyLjA1NVoiLCJwdXIiOiJjb29raWUucmVtZW1iZXJfdXNlcl90b2tlbiJ9fQ%3D%3D--fe9b3b0637a10894c98d5437f41ec7285519b66a;_vidio=true;plenty_id=46751458;_vidio_session=bW4zWUZVNVJqRm85YW5tYjB2bnRQSGlWWElnTnhDQ2RPNnFLbkVMbmZsUlJpdmdHd055dEM0MG81SkJDdXJ5dkVpNEJHUktBTUZPZ2lVTyswV0hpOTJlanlDd0lSeE85eEdva1hvdGZ3Z24vY29QNm1EY1l5YkRKZ1loQkIwclVqMWlqejhSYWcxemRTMXUxdGhGNjM2dVdhWEdheHZOZWtCQ0owdXo1c0lVZEJuT3ZjR0djdHdadUo1R3JSQ0Nnc3pWZDR0d0hjVXE3T2d2V1k1L1JZb1NNdUZybmN6b3pqS1NLaW9NOTZ2ZUlhdXl1TFVQSi9pMWVBVXpMQVZ2akZRNmpCdEhTeDNKZktTdm9NeTBxWWljQ3Fic0tkcERFU3hRdlM0S2pTVk5sM1JCKzNyRUg0TGdDem9NZnFobGVlc3lqUDBRRVJhVGlycDFxWktEWWxGRkVJSSt2amthenRhWHFoY1puTG5ObVAxWEFYUWVTWFlGWGN2MEJFZGlwWkVuR2RXeDVnSzhrL1ZyQUtPTEg3QmhRMm1keHdxV29WaVo1b2daaW1uL3N5TnlMMURBY0Ftc0p5T1ZZeUFDU0M4UHZiajdUL0tFMlYyZVpRREFFNlRqbmRrM0RkSkFsNWRLRUhnNUtBbGs9LS1YaVduOFpvQnFUT2tmTU1hcGlNdE5nPT0%3D--2ef8bb9ba20510aad30587dfd2a602471520d51b;ahoy_visit=b02702ec-9c19-4e8d-8f6a-f196120e63df;_ga=GA1.1.991029667.1595790382;_ga_JBTBSESXVN=GS1.1.1596031155.9.1.1596031454.28;_dc_gtm_UA-47200845-12=1;_ga=GA1.3.991029667.1595790382;_gid=GA1.3.1044219464.1596031158;_gat_UA-47200845-12=1;luws=774c3270ca8e90367bd369b1_37465859;kppid_managed=kppidff_Ni_TbDsw';

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);

	if (curl_errno($ch)) {

		echo 'Error:' . curl_error($ch);

	}

	curl_close($ch);
	
	echo "............................................................SCRIPT SUCCES... CREATED BY MUJER HASIBUAN............................................................";
	    echo "...........DAN INI DAFTAR LINK M3U8 UNTUK CHANNEL CHAMPION TV 1..........";

	$result = json_decode($result, true);

	$token= $result['token'];

    $mujer = "https://app-etslive-2.vidio.com/live/$mh/master.m3u8?$token";

    echo $link = file_get_contents($mujer);
    echo "...TERIMAKASIH...😊";
    
    $file = fopen("$mujerCH-championtv1.m3u8","w+");
$simpen = fwrite($file,"$link");
fclose($file);



}
