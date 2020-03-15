<?php declare(strict_types=1);
class user {
	function user($name = null, $pass = null, $age = null, $sex = false, $sexuality = null){
		$this->name = $name;
		$this->pass = $pass;
		$this->age = $age;
		$this->sex = $sex;
		$this->sexuality = $sexuality;
	}
	function info($pp = false){
		$gender = $this->sex <= 50? "male" : "female";
		$over18 = $this->is18();
		echo "<p><b>$this->name</b></p>";
		echo "<ul>";
		echo "<li> Age: $this->age"."yo</li>";
		echo "<li> Gender: $gender</li>";
		echo "<li> Sexuality: $this->sexuality</li>";
		if($over18) echo "<li>Is over 18! such wow</li>";
		if($pp){
			?>
			<a class="test1__links" href="https://www.youtube.com/watch?v=b0Oux-sYXfg">Have big pp! </li>
			<?php
		} 
		echo "</ul>";
	}
	function is18() : bool {
		return $res = $this->age >= 18 ? true : false;
	}
}

function addFooter($str){
	?>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<p class="head__text">Created By mikewii</p>
	<?php
}

function run(){
	$dude = new user(
		$_POST['name'],
		$_POST['pass'],
		$_POST['age'],
		$_POST['sex'],
		$_POST['sexuality']);
	
	$dude->info(true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	run();
	addFooter("peepee");
}

?>