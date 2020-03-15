<?php declare(strict_types=1);
define("header", ["<h2>Sex orientation survey(totaly correct).</h2>", "made by mikewii"]);

function servInfoFormat($name){
	$res = is_null($_SERVER[$name])? "Undefined" : "$_SERVER[$name]";
	echo "<p><b>$name</b></p>";
	echo "<ul>";
	echo "<li>$res</li>";
	echo "</ul>";
}
function serverInfo(){
	$args = array("PHP_SELF", 'GATEWAY_INTERFACE', 'SERVER_ADDR',
	'SERVER_NAME', 'SERVER_SOFTWARE', 'SERVER_PROTOCOL', 'REQUEST_METHOD',
	'REQUEST_TIME', 'QUERY_STRING', 'HTTP_ACCEPT', 'HTTP_ACCEPT_CHARSET',
	'HTTP_HOST', 'HTTP_REFERER', 'HTTPS', 'REMOTE_ADDR', 'REMOTE_HOST', 
	'REMOTE_PORT', 'SCRIPT_FILENAME', 'SERVER_ADMIN', 'SERVER_PORT',
	'SERVER_SIGNATURE', 'PATH_TRANSLATED', 'SCRIPT_NAME', 'SCRIPT_URI');
	foreach ($args as $value) {
		servInfoFormat($value);
	}
	
}

class dude {
	function dude($name, int $age, bool $sex, $sexuality){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
		$this->sexuality = $sexuality;
	}
	function info($pp = false){
		$gender = $this->sex ? "male" : "female";
		$over18 = $this->is18();
		echo "<p><b>$this->name</b></p>";
		echo "<ul>";
		echo "<li> Age: $this->age"."yo</li>";
		echo "<li> Gender: $gender</li>";
		echo "<li> Sexuality: $this->sexuality</li>";
		if($over18) echo "<li>Is over 18! such wow</li>";
		if($pp) echo "<li>Have big pp! </li>";
		echo "</ul>";
	}
	function is18() : bool {
		return $res = $this->age >= 18 ? true : false;
	}
}

function main(){
	$pee = new dude("peepee", 22, true, "pan");
	$pee_gf = clone $pee;
	$pee_gf->name = "poopoo";
	$pee_gf->age += 4;
	$pee_gf->sex = false;
	$pee_gf->sexuality = "ace";

	echo header[0];
	$pee->info(true);	
	$pee_gf->info(true);


	echo "<br><br><h2>".header[1]."</h2>";

	$res = gmdate("Y-M-d"."(D)"." | H-m-s T P");
	$res2 = gmdate("r");

	echo "Custom date format: $res<br>";
	echo "RFC 2822 date format: $res2<br>";
}
main();
serverInfo();


?>