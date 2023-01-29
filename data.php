<?php

header("Access-Control-Allow-origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: GET");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: *");

if(isset($_GET['username']) && isset($_GET['key'])){
	if ($_GET['username'] == 'alpa' && $_GET['key'] == '12345' ) {

$data=[
["Nom" => "Adrar","Code" => "01"],
["Nom" => "Chlef","Code" => "02"],
["Nom" => "Laghouat","Code" => "03"],
["Nom" => "Oum El Bouaghi","Code" => "04"],
["Nom" => "Batna","Code" => "05"],
["Nom" => "Béjaïa","Code" => "06"],
["Nom" => "Biskra","Code" => "07"],
["Nom" => "Béchar","Code" => "08"],
["Nom" => "Blida","Code" => "09"],
["Nom" => "Bouira","Code" => "10"],

["Nom" => "Tamanrasset","Code" => "11"],
["Nom" => "Tébessa","Code" => "12"],
["Nom" => "Tlemcen","Code" => "13"],
["Nom" => "Tiaret","Code" => "14"],
["Nom" => "Tizi Ouzou","Code" => "15"],
["Nom" => "Alger","Code" => "16"],
["Nom" => "Djelfa","Code" => "17"],
["Nom" => "Jijel","Code" => "18"],
["Nom" => "Sétif","Code" => "19"],
["Nom" => "Saïda","Code" => "20"],

["Nom" => "Skikda","Code" => "21"],
["Nom" => "Sidi Bel Abbès","Code" => "22"],
["Nom" => "Annaba","Code" => "23"],
["Nom" => "Guelma","Code" => "24"],
["Nom" => "Constantine","Code" => "25"],
["Nom" => "Médéa","Code" => "26"],
["Nom" => "Mostaganem","Code" => "27"],
["Nom" => "M'Sila","Code" => "28"],
["Nom" => "Mascara","Code" => "29"],
["Nom" => "Ouargla","Code" => "30"],

["Nom" => "Oran","Code" => "31"],
["Nom" => "El Bayadh","Code" => "32"],
["Nom" => "Illizi","Code" => "33"],
["Nom" => "Bordj Bou Arreridj","Code" => "34"],
["Nom" => "Boumerdès","Code" => "35"],
["Nom" => "El Tarf","Code" => "36"],
["Nom" => "Tindouf","Code" => "37"],
["Nom" => "Tissemsilt","Code" => "38"],
["Nom" => "El Oued","Code" => "39"],
["Nom" => "Khenchela","Code" => "40"],

["Nom" => "Souk Ahras","Code" => "41"],
["Nom" => "Tipaza","Code" => "42"],
["Nom" => "Mila","Code" => "43"],
["Nom" => "Aïn Defla","Code" => "44"],
["Nom" => "Naâma","Code" => "45"],
["Nom" => "Aïn Témouchent","Code" => "46"],
["Nom" => "Ghardaïa","Code" => "47"],
["Nom" => "Relizane","Code" => "48"],
["Nom" => "Timimoun","Code" => "49"],
["Nom" => "Bordj Badji Mokhtar","Code" => "50"],

["Nom" => "Ouled Djellal","Code" => "51"],
["Nom" => "Béni Abbès","Code" => "52"],
["Nom" => "In Salah","Code" => "53"],
["Nom" => "In Guezzam","Code" => "54"],
["Nom" => "Touggourt","Code" => "55"],
["Nom" => "Djanet","Code" => "56"],
["Nom" => "El M'Ghair","Code" => "57"],
["Nom" => "El Meniaa","Code" => "58"]

];

			

		

		$json_data = json_encode($data);
		print_r($json_data);
	}
	else{
	$data = ["message" => "ERREUR DE CONNEXION VEUILLEZ VERIFIER LE NOM D_UTILISATEUR ET LA CLÉ"];
	$json_data = json_encode($data);
	print_r($json_data);
	}
}
else{
	$data = ["message" => "ERREUR DE CONNEXION VEUILLEZ VERIFIER LE NOM D_UTILISATEUR ET LA CLÉ"];
	$json_data = json_encode($data);
	print_r($json_data);
}
