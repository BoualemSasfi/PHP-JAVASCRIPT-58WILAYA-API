<?php

header("Access-Control-Allow-origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: GET");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: *");

if(isset($_GET['username']) && isset($_GET['key'])){
	if ($_GET['username'] == 'alpa' && $_GET['key'] == '12345' ) {

		$data = [
		["Nom" => "Adrar","Code" => "01","Image" => "images/01.png"],
		["Nom" => "Chlef","Code" => "02","Image" => "images/02.png"],
		["Nom" => "Laghouat","Code" => "03","Image" => "images/03.png"],
		["Nom" => "Oum El Bouaghi","Code" => "04","Image" => "images/04.png"],
		["Nom" => "Batna","Code" => "05","Image" => "images/05.png"],
		["Nom" => "Béjaïa","Code" => "06","Image" => "images/06.png"],
		["Nom" => "Biskra","Code" => "07","Image" => "images/07.png"],
		["Nom" => "Béchar","Code" => "08","Image" => "images/08.png"],
		["Nom" => "Blida","Code" => "09","Image" => "images/09.png"],
		["Nom" => "Bouira","Code" => "10","Image" => "images/10.png"],

		["Nom" => "Tamanrasset","Code" => "11","Image" => "images/11.png"],
		["Nom" => "Tébessa","Code" => "12","Image" => "images/12.png"],
		["Nom" => "Tlemcen","Code" => "13","Image" => "images/13.png"],
		["Nom" => "Tiaret","Code" => "14","Image" => "images/14.png"],
		["Nom" => "Tizi Ouzou","Code" => "15","Image" => "images/15.png"],
		["Nom" => "Alger","Code" => "16","Image" => "images/16.png"],
		["Nom" => "Djelfa","Code" => "17","Image" => "images/17.png"],
		["Nom" => "Jijel","Code" => "18","Image" => "images/18.png"],
		["Nom" => "Sétif","Code" => "19","Image" => "images/19.png"],
		["Nom" => "Saïda","Code" => "20","Image" => "images/20.png"],

		["Nom" => "Skikda","Code" => "21","Image" => "images/21.png"],
		["Nom" => "Sidi Bel Abbès","Code" => "22","Image" => "images/22.png"],
		["Nom" => "Annaba","Code" => "23","Image" => "images/23.png"],
		["Nom" => "Guelma","Code" => "24","Image" => "images/24.png"],
		["Nom" => "Constantine","Code" => "25","Image" => "images/25.png"],
		["Nom" => "Médéa","Code" => "26","Image" => "images/26.png"],
		["Nom" => "Mostaganem","Code" => "27","Image" => "images/27.png"],
		["Nom" => "M'Sila","Code" => "28","Image" => "images/28.png"],
		["Nom" => "Mascara","Code" => "29","Image" => "images/29.png"],
		["Nom" => "Ouargla","Code" => "30","Image" => "images/30.png"],

		["Nom" => "Oran","Code" => "31","Image" => "images/31.png"],
		["Nom" => "El Bayadh","Code" => "32","Image" => "images/32.png"],
		["Nom" => "Illizi","Code" => "33","Image" => "images/33.png"],
		["Nom" => "Bordj Bou Arreridj","Code" => "34","Image" => "images/34.png"],
		["Nom" => "Boumerdès","Code" => "35","Image" => "images/35.png"],
		["Nom" => "El Tarf","Code" => "36","Image" => "images/36.png"],
		["Nom" => "Tindouf","Code" => "37","Image" => "images/37.png"],
		["Nom" => "Tissemsilt","Code" => "38","Image" => "images/38.png"],
		["Nom" => "El Oued","Code" => "39","Image" => "images/39.png"],
		["Nom" => "Khenchela","Code" => "40","Image" => "images/40.png"],

		["Nom" => "Souk Ahras","Code" => "41","Image" => "images/41.png"],
		["Nom" => "Tipaza","Code" => "42","Image" => "images/42.png"],
		["Nom" => "Mila","Code" => "43","Image" => "images/43.png"],
		["Nom" => "Aïn Defla","Code" => "44","Image" => "images/44.png"],
		["Nom" => "Naâma","Code" => "45","Image" => "images/45.png"],
		["Nom" => "Aïn Témouchent","Code" => "46","Image" => "images/46.png"],
		["Nom" => "Ghardaïa","Code" => "47","Image" => "images/47.png"],
		["Nom" => "Relizane","Code" => "48","Image" => "images/48.png"],
		["Nom" => "Timimoun","Code" => "49","Image" => "images/49.png"],
		["Nom" => "Bordj Badji Mokhtar","Code" => "50","Image" => "images/50.png"],

		["Nom" => "Ouled Djellal","Code" => "51","Image" => "images/51.png"],
		["Nom" => "Béni Abbès","Code" => "52","Image" => "images/52.png"],
		["Nom" => "In Salah","Code" => "53","Image" => "images/53.png"],
		["Nom" => "In Guezzam","Code" => "54","Image" => "images/54.png"],
		["Nom" => "Touggourt","Code" => "55","Image" => "images/55.png"],
		["Nom" => "Djanet","Code" => "56","Image" => "images/56.png"],
		["Nom" => "El M'Ghair","Code" => "57","Image" => "images/57.png"],
		["Nom" => "El Meniaa","Code" => "58","Image" => "images/58.png"],
		];

			

		

		$json_data = json_encode($data);
		print_r($json_data);
		}
		else{
		$data = ["message" => "ERREUR DE CONNEXION VEUILLEZ VERIFIER LE NOM UTILISATEUR ET LA CLÉ"];
		$json_data = json_encode($data);
		print_r($json_data);
		}
}
else{
	$data = ["message" => "ERREUR DE CONNEXION VEUILLEZ VERIFIER LE NOM UTILISATEUR ET LA CLÉ"];
	$json_data = json_encode($data);
	print_r($json_data);
}
