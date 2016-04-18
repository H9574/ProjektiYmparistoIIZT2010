<?php
try{
	require_once("db-init.php");
}catch(PDOException $ex){
	echo "ErrMsg to enduser!<hr>\n";
    echo "CatchErrMsg: " . $ex->getMessage() . "<hr>\n";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MedGame</title>
<link rel="stylesheet" a href="stylesheet.css" type="text/css"/>
<meta name="viewport" content="width=device=width, initial-scale=1.8">
<script src="https://code.createjs.com/easeljs-0.8.2.min.js"></script>

<script>
  function init() {
    var stage = new createjs.Stage("demoCanvas");
        createjs.Ticker.addEventListener("tick", handleTick);
        function handleTick(event) {
		stage.update();
		if (!event.paused) {
				stage.update();
                }
        }
        // piirretään pelin tausta
        var tausta = new Image();
        tausta.src = "MedicineRoom.png"
        var bitmap = new createjs.Bitmap(tausta);
        stage.addChild(bitmap);
        var circle = new createjs.Shape();
        circle.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 50);
        circle.x = 100;
        circle.y = 100;
        stage.addChild(circle);
		
        stage.enableMouseOver();
        circle.addEventListener("click", function(event) { alert("clicked"); })
        circle.addEventListener("mouseover", function(event) {d.style.opacity = 1; })
        circle.addEventListener("mouseout", function(event) {d.style.opacity = 0; })
		
        var d = document.getElementById('makkara');
        d.style.position = "absolute";
        d.style.left = "50px";
        d.style.top = "800px";
        d.style.opacity = 0;
        //d.style.z-index = 0;
        //var z = document.getElementById('juusto');
        //z.style.position = "absolute";
        //z.style.left = "150px";
        //z.style.top = "100px";
        //d.style.z-index = 1;
        stage.style.position = "centered";
        //stage.style.z-index = 0;
  }
</script>
</head>
<body  onload="init();">
        <header class="mainheader">
                <div class="menu">
        <nav><ul>

        <li> <a href="#">Peli näkymä</a> </li>
        <li> <a href="ulos.php">Sign out</a> </li>

        </ul></nav>
                </div>
    </header>

                <div class="mainContent">
        <div class="content">
                <article class="topcontent">

                                                <header>
                        <h2>Team Hönö Demo game: MedGame</h2>
                        </header>

                    <content >
                                        <h3>Doctor needs the answer for the following question:</h3>

<?php
require_once 'Laskuja.class.php';
$arpa = rand(1, 16);
$Vastaus = new Laskuja();
$RoomaMuunnos = new Roomalaiset();
//Pysyviä muuttujia kaikkiin tehtäviin
		$Aika = rand(1, 48);
        $Maksimi = rand(6, 14);
        $Minimi = 4;
		$InfuusioNopeus = rand(4, $Maksimi);
		
if ($arpa==1){
        $Ratkaisu = intval($Vastaus->LaskeAnnostusMaksimi($Maksimi, $Aika));
        echo "The drug’s dosage is $Minimi – $Maksimi ml/h, how much of it at most can you give in $Aika hours?";
        echo "<br> Vastaus: $Ratkaisu ";
		echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter an answer as ml' />
			<input type='submit' value='Give to the patient' /></form>";
}
if ($arpa==2){
        $Aika = rand(1, 48);
        echo "The drug’s dosage is $Minimi – $Maksimi ml/h, how much of it at least must you give in $Aika hours?";
        $Ratkaisu = intval($Vastaus->LaskeAnnostusMinimi($Minimi, $Aika));
        echo "<br> Vastaus: $Ratkaisu ";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter an answer as ml' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==3){
        $Ruisku = 50;
        echo "The drug’s dosage is $Minimi-$Maksimi ml/h, how many $Ruisku ml syringes does the patient need per $Aika hours with an infusion rate of $InfuusioNopeus ml/h?";
        $Ratkaisu = intval($Vastaus->LaskeRuiskujenMaara($Aika, $Ruisku, $InfuusioNopeus));
        echo "<br> Vastaus: $Ratkaisu ";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='as number of syringes' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==4){
		$Vahvuus = array(0, 10, 20);
        $Paino = rand(50, 100);
        $laake = intval($Vahvuus[rand(1,2)]);
        $TarvittavaAntoNopeus = rand(4, 12);
        echo "Anaesthesia is maintained to a patient weighting $Paino kg. The drug’s required administration rate is $TarvittavaAntoNopeus mg/kg/h.
				The drug's strength is $laake mg/ml. What is the administration rate in unit ml/h?";
        $Ratkaisu = intval($Vastaus->LaskeAntoNopeus($Paino, $laake, $TarvittavaAntoNopeus));
        echo "<br> Vastaus: $Ratkaisu ";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as ml/h' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==5){
	    $Vahvuus = array(0, 2, 4, 20, 25, 50);
		$laake = intval($Vahvuus[rand(1,5)]);
        $KuivaAine = rand(1, 9)*100;
        echo "With $KuivaAine mg of dry powder, to how large volume do you need to reconstitute the drug into, for it to have strength of $laake mg/ml? ";
        $Ratkaisu = intval($Vastaus->LaskeNesteMaarasta($KuivaAine, $laake));
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as ml' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==6){
        $KuivaAine = array(0, 250, 750, 1500);
		$laake = intval($KuivaAine[rand(1,3)]);
        $KohdePro = rand (1, 10)/10;
        echo "With $laake mg of dry powder, how much saline will be needed for the resulting solution to have concentration of $KohdePro %?";
        $Ratkaisu = intval($Vastaus->LaskeNesteMaarasta($laake, $KohdePro)*10);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as ml' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==7){
		$AnnosTaulu = array(0, 0.025, 0.05, 0.075, 0.1, 0.15, 0.175, 0.2, 0.225, 0.275, 0.5, 1.75, 2);
        $Annos = floatval($AnnosTaulu[rand(1, 12)]);
        $Paino = rand(50, 100);
        $Aika = rand(1, 4);
        echo "Remifentanil is meant to be used in general anaesthesia as an intravenous analgesic. 
		The patient, weighting $Paino kg, has been given a maintenance rate of $Annos mcg/kg/min. How much remifentanil does the patient get in total, 
		if the infusion lasts for $Aika hours?";
        $Ratkaisu = intval($Vastaus->LaskeNestePainosta($Annos, $Paino, $Aika*60));
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as mcg' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==8){
        $KuivaAine = rand(1, 6);
        $Liuos = rand(1, 6)*10;
        echo "The medicine concentrate is prepared by reconstituting $KuivaAine mg of remifentanil 
		dry powder into $Liuos ml of saline. The concentrate is then diluted into an infusion by 
		adding saline ad 40 ml. What is the remifentanil concentrate’s strength in % with the precision of three decimals?";
        $Ratkaisu = round($Vastaus->LaskeYksikössäProsentti($KuivaAine, $Liuos), 3);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as %' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==9){
        $KuivaAine = 2;
		$LaimennusTaulu = array(0, 100, 40, 80);
        $Laimennus = intval($LaimennusTaulu[rand(1, 3)]);
        echo "The medicine concentrate is prepared by reconstituting $KuivaAine mg of remifentanil 
		dry powder into $KuivaAine ml of saline. The concentrate is then diluted into an infusion by 
		adding saline ad $Laimennus ml. What is the diluted infusion’s strength in unit mg/ml?";
        $Ratkaisu = intval($Vastaus->LaskeVahvuus($KuivaAine, $Laimennus));
        echo "<br>Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter an answer as mg/ml' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==10){
        $Laake = rand(2, 80);
        $Vahvuus = 50;
        echo "Patient has been given $Laake ml of a fentanyl-based drug. The drug’s strength is 
		$Vahvuus µg/ml. How much of the active ingredient, fentanyl, has the patient received?";
        $Ratkaisu = intval($Vastaus->LaskeSaatuLaake($Laake, $Vahvuus));
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter an answer as µg' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==11){
        $Laake = rand(1, 9);
        $Vahvuus = rand(1, 6)*10;
        $Paino = rand(35, 50);
        $Injektioliuos = rand(1, 9);
        $Suolaliuos = rand(6, 20);
        echo "Oxycodone hydrochloride injection solution with strength of $Vahvuus mg/ml is used for 
		acute and difficult pain. The patient is a child weighting $Paino kg and he has been prescribed 
		$Laake mg/kg of the active ingredient intravenously. You prepare the drug solution by taking 
		$Injektioliuos ml of the oxycodone hydrochloride injection solution and adding $Suolaliuos ml of 
		saline. How many ml of the solution do you give to the patient?";
        $Ratkaisu = intval($Vastaus->LaskeSaatuLiuos($Laake, $Vahvuus, $Paino, $Injektioliuos, $Suolaliuos));
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as ml' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==12){
        $KuivaAine = rand(2, 20)*10;
        $Liuos = rand(1, 9);
        echo "The stock solution is prepared by reconstituting $KuivaAine mg of dry powder 
		into $Liuos ml of saline. What is the resulting stock solution’s strength in % 
		with the precision of three decimals?";
        $Ratkaisu = round($Vastaus->LaskeYksikössäProsentti($KuivaAine, $Liuos), 3);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as %' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==13){
        $KuivaAine = rand(10, 20)*10;
        $Suolaliuos = rand(1, 15);
        $Maara = rand(10, 30)*10;
        echo "The stock solution is prepared by reconstituting $KuivaAine mg of dry powder into 
		$Suolaliuos ml of saline. How much stock solution do you get by using $Maara mg 
		of dry powder?";
        $Ratkaisu = intval($Vastaus->LaskeMaara($KuivaAine, $Suolaliuos, $Maara));
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter an answer as ml' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==14){
        $Maara = rand(3, 5);
        $Vahvuus = rand(1, 6);
        echo "The patient has been prescribed $Maara mg intramuscular injection of buprenorphine 
		for pain. How many ml with the precision of two decimals do you give, when the drug contains $Vahvuus mg/ml of the active ingredient?";
        $Ratkaisu = round($Vastaus->LaskeSaatuMaara($Vahvuus, $Maara), 2);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter the answer as ml' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==15){
        $Normi = rand(1, 500);
        $Rooma = $RoomaMuunnos->MuunnaNormiRoomaksi($Normi);
        echo "How is $Rooma written in arabic numerals?";
        $Ratkaisu = $RoomaMuunnos->MuunnaRoomaNormiksi($Rooma);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter an answer as number' />
			<input type='submit' value='Give to the patient' /></form>";
}if ($arpa==16){
        $Normi = rand(1, 500);
        echo "What is $Normi in Roman numerals?";
        $Ratkaisu = $RoomaMuunnos->MuunnaNormiRoomaksi($Normi);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "<h2>Player's answer</h2><form action='vertaa.php' method='post'>
			<input type='hidden' value='$Ratkaisu' name='ratkaisu'>
			<input type='text' name='vastaus' placeholder='enter an answer as Roman numerals' />
			<input type='submit' value='Give to the patient' /></form>";
}
?>
                                        </content>
                                </article>
        </div>
		</div>

<div id="isodiv">
        <canvas id="demoCanvas" width="1388" height="694"></canvas>
        <div id="makkara" style="width:300px;height:200px;border:1px solid #000;">
                <?php
					$stmt = $db->query('SELECT * FROM brand');
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "{$row['brand']}<br>\n";
					}
				?>
        </div>
</div>

</body>

</html>