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
        // Actions carried out when the Ticker is not paused.
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



        stage.style.position = "absolute";


        //stage.style.z-index = 0;
  }
</script>
</head>
<body  onload="init();">
        <header class="mainheader">
                <div class="menu">
        <nav><ul>

        <li> <a href="#">Peli näkymä</a> </li>
        <li> <a href="ulos.php">Kirjaudu ulos</a> </li>

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
                                        <h3>Doctor needs answer for the next question:</h3>

<?php
require_once 'Laskuja.class.php';
$arpa = rand(1, 17);
$Vastaus = new Laskuja();
$RoomaMuunnos = new Roomalaiset();
//Pysyviä muuttujia kaikkiin tehtäviin
        $Maksimi = rand(6, 14);
        $Minimi = 4;
        $Vahvuus = array(10, 20);

if ($arpa==1){
        $Aika = rand(1, 48);

        $Ratkaisu = $Vastaus->LaskeAnnostusMaksimi($Maksimi, $Aika);
        echo "The drug’s dosage is $Minimi – $Maksimi ml/h, how much of it can you give in a day (or in the $Aika hours)? ";
        echo "<br> Vastaus: $Ratkaisu ml";
        echo "<br>Annostusohje: $Minimi-$Maksimi ml/h <br> Aika: $Aika h";
}
if ($arpa==2){
        $Aika = rand(1, 48);

        echo "The drug’s dosage is $Minimi – $Maksimi ml/h, how much of it can you give in a day? (or in the $Aika hours)";
        $Ratkaisu = $Vastaus->LaskeAnnostusMinimi($Minimi, $Aika);
        echo "<br> Vastaus: $Ratkaisu ml";
        echo "<br>Annostusohje: $Minimi-$Maksimi ml/h <br> Aika: $Aika h";
}if ($arpa==3){
        $Ruisku = rand(1, 9)*100;
        $Aika = rand(1, 48);
        $InfuusioNopeus = rand(1, 48);

        echo "The drug’s dosage is $Minimi-$Maksimi ml/h, how many $Ruisku ml syringes does the patient need per day (or in $Aika hours) with an infusion rate of $InfuusioNopeus ml/h?";
        $Ratkaisu = $Vastaus->LaskeRuiskujenMaara($Aika, $Ruisku, $InfuusioNopeus);
        echo "<br> Vastaus: $Ratkaisu ml";
        echo "<br>Annostusohje: $Minimi-$Maksimi ml/h <br> Aika: $Aika h";
        echo "<br>Ruiskun koko: $Ruisku ml <br> Aika: $Aika h <br> Infuusionopeus: $InfuusioNopeus ml/h";
}if ($arpa==4){
        $Paino = rand(50, 100);
        $laake = settype($Vahvuus[rand(0,1)], "integer");
        $TarvittavaAntoNopeus = rand(4, 12);

        echo "Anaesthesia is maintained to a patient weighting $Paino kg. The drug’s required administration rate is $TarvittavaAntoNopeus mg/kg/h.
				The drug's strenght is $laake mg/ml. What is the administration rate in unit ml/h?";
        $Ratkaisu = $Vastaus->LaskeAntoNopeus($Paino, $laake, $TarvittavaAntoNopeus);
        echo "<br> Vastaus: $Ratkaisu";
        echo "Lääkkeen vahvuus: $Vahvuus mg/ml <br> Potilaan paino: $Paino ml <br> Anto nopeus potilaalle: $TarvittavaAntoNopeus mg/kg/h";
}if ($arpa==5){
        $KuivaAine = rand(1, 9)*100;
        $Laimennus = rand (10, 50);

        echo '<p>Harjoitus 4 ';
        $Ratkaisu = $Vastaus->LaskeNesteMaarasta($KuivaAine, $Laimennus);
        echo "<br> Vastaus: $Ratkaisu</p>";
        echo "Kuiva-ainetta: $KuivaAine mg <br> Vahvuus: $Laimennus mg/ml";
}if ($arpa==6){
        $KuivaAine = rand(1, 9)*100;
        $Laimennus = rand (10, 50);

        echo '<p>Harjoitus 5 ';
        $Ratkaisu = $Vastaus->LaskeNesteMaarasta($KuivaAine, $Laimennus)/10;
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Kuiva-ainetta: $KuivaAine mg <br> Vahvuus: $Laimennus mg/ml";
}if ($arpa==7){
        $Annos = rand(1, 6);
        $Paino = rand(50, 100);
        $Aika = rand(1, 4);

        echo '<p>Harjoitus 6 ';
        $Ratkaisu = $Vastaus->LaskeNestePainosta($Annos, $Paino, $Aika);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Aika: $Aika h <br> Potilaan paino: $Paino ml <br> Anto nopeus potilaalle: $Annos µg/kg/min";
}if ($arpa==8){
        $KuivaAine = rand(1, 9)*100;
        $Liuos = rand(1, 6)*10;

        echo '<p>Harjoitus 7 prosentteina';
        $Ratkaisu = $Vastaus->LaskeYksikössäProsentti($KuivaAine, $Liuos);
        echo "<br> Vastaus: $Ratkaisu % </p>";
        echo "Kuiva-ainetta: $KuivaAine mg <br> Liuos: $Liuos ml";
}if ($arpa==9){
        $KuivaAine = rand(1, 9)*100;
        $Laimennus = rand(1, 6)*10;

        echo '<p>Harjoitus 8 ';
        $Ratkaisu = $Vastaus->LaskeVahvuus($KuivaAine, $Laimennus);
        echo "<br>Vastaus: $Ratkaisu mg/ml </p>";
        echo "Kuiva-ainetta: $KuivaAine mg <br> Laimennos: $Laimennus ml";
}if ($arpa==10){
        $Laake = rand(6, 30);
        $Vahvuus = 25;

        echo '<p>Harjoitus 9 ';
        $Ratkaisu = $Vastaus->LaskeSaatuLaake($Laake, $Vahvuus);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Lääke määrä: $Laake ml <br> Vahvuus: $Vahvuus µg/ml";
}if ($arpa==11){
        $Laake = rand(1, 9);
        $Vahvuus = rand(1, 6)*10;
        $Paino = rand(50, 100);
        $Injektioliuos = rand(1, 9);
        $Suolaliuos = rand(6, 20);

        echo '<p>Harjoitus 10 ';
        $Ratkaisu = $Vastaus->LaskeSaatuLiuos($Laake, $Vahvuus, $Paino, $Injektioliuos, $Suolaliuos);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Lääke määrä: $Laake mg/kg <br> Vahvuus: $Vahvuus mg/ml <br> Potilaan paino: $Paino kg <br>
        Injektioliuosta: $Injektioliuos ml <br> Suolaliuosta: $Suolaliuos ml";
}if ($arpa==12){
        $KuivaAine = rand(2,20)*10;
        $Liuos = rand(1, 9);

        echo '<p>Harjoitus 11 ';
        $Ratkaisu = $Vastaus->LaskeYksikössäProsentti($KuivaAine, $Liuos);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Kuiva-ainetta: $KuivaAine mg <br> Suolaliuosta: $Liuos ml";
}if ($arpa==13){
        $KuivaAine = rand(10, 20)*10;
        $Suolaliuos = rand(1, 15);
        $Maara = rand(10, 30)*10;

        echo '<p>Harjoitus 12 ';
        $Ratkaisu = $Vastaus->LaskeMaara($KuivaAine, $Suolaliuos, $Maara);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Kuiva-ainetta: $KuivaAine mg <br> Suolaliuosta: $Suolaliuos ml <br> Haluttu määrä: $Maara mg";
}if ($arpa==14){
        $Maara = rand(3, 5);
        $Vahvuus = rand(1, 6);

        echo '<p>Harjoitus 13 ';
        $Ratkaisu = $Vastaus->LaskeSaatuMaara($Vahvuus, $Maara);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Määrätty määrä: $Maara mg <br> Vahvuus: $Vahvuus mg/ml";
		}if ($arpa==15){
        $KuivaAine = rand(1, 9)*100;
        $Liuos = rand(1, 6)*10;

        echo '<p>Harjoitus 7 ';
        $Ratkaisu = $Vastaus->LaskeYksikössäMgMl($KuivaAine, $Liuos);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Kuiva-ainetta: $KuivaAine mg <br> Liuos: $Liuos ml";
}if ($arpa==16){
        $Normi = rand(1, 500);
        $Rooma = $RoomaMuunnos->MuunnaNormiRoomaksi($Normi);

        echo '<p>Muuta Roomalainen luvuksi ';
        $Ratkaisu = $RoomaMuunnos->MuunnaRoomaNormiksi($Rooma);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Roomalainen: $Rooma";
}if ($arpa==17){
        $Normi = rand(1, 500);
        echo '<p>Muuta luku Roomalaiseksi ';
        $Ratkaisu = $RoomaMuunnos->MuunnaNormiRoomaksi($Normi);
        echo "<br> Vastaus: $Ratkaisu </p>";
        echo "Luku: $Normi";
}
?>
                                        <br>
                                        <form action="vertaa.php" method="post">
                                        Answer: <input type="text" name="vastaus">
                                        <br><input type="submit" value="Give to the patient">
                                        </form>
										<?php
										Tarkistus($Ratkaisu);
										?>
                                        </content>
                                </article>
        </div>
		</div>

<div id="isodiv">
        <canvas id="demoCanvas" width="1388" height="694"></canvas>
        <div id="makkara" style="width:300px;height:200px;border:1px solid #000;">
                TÄHÄN TULEE LÄÄKKEEN NIMI + MUUTA MAHDOLLISESTI
        </div>
</div>

</body>

</html>



