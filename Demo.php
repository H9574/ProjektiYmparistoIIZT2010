<?php
try{
	require_once("db-init.php");
}catch(PDOException $ex){
	echo "ErrMsg to enduser!<hr>\n";
    echo "CatchErrMsg: " . $ex->getMessage() . "<hr>\n";
}

	//Evästeiden nimeäminen
	$Valinta = "valinta";
	
	$arpa = rand(1, 41);
		if ($arpa==17){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='1'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==18){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='3'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==19){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='1'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==20){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='3'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==21){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='4'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==22){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='5'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==23){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='6'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==24){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='7'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==25){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='8'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==26){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='8'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==27){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='9'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==28){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='10'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==29){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='11'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==30){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='12'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==31){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='13'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==32){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='14'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==33){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='15'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==34){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='16'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==35){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='17'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==36){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='18'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==37){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='19'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==38){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='20'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==39){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='21'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==40){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='22'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
		}if ($arpa==41){
			$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='23'");
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$Ratkaisu = "{$row['Brand']}";
				setcookie("tulos", $Ratkaisu);
			} 
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
		var oppilas;
		var tulos = getCookie("tulos");
		
		function ValittuLaake(Vastaus, Ratkaisu){
			if (Vastaus == Ratkaisu){
				location.replace("https://medgame.herokuapp.com/oikea.php")
			} else
			{
				location.replace("https://medgame.herokuapp.com/vaara.php")
			}
		}
		
		function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
			}
			return "";
		}
	  
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
        circle.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle.x = 100;
        circle.y = 100;
        stage.addChild(circle);
		/*
		var circle1 = new createjs.Shape();
        circle1.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle1.x = 200;
        circle1.y = 100;
        stage.addChild(circle1);
		*/
		var circle2 = new createjs.Shape();
        circle2.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle2.x = 300;
        circle2.y = 100;
        stage.addChild(circle2);
		var circle3 = new createjs.Shape();
        circle3.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle3.x = 400;
        circle3.y = 100;
        stage.addChild(circle3);
		var circle4 = new createjs.Shape();
        circle4.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle4.x = 500;
        circle4.y = 100;
        stage.addChild(circle4);
		var circle5 = new createjs.Shape();
        circle5.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle5.x = 600;
        circle5.y = 100;
        stage.addChild(circle5);
		var circle6 = new createjs.Shape();
        circle6.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle6.x = 700;
        circle6.y = 100;
        stage.addChild(circle6);
		var circle7 = new createjs.Shape();
        circle7.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle7.x = 800;
        circle7.y = 100;
        stage.addChild(circle7);
		var circle8 = new createjs.Shape();
        circle8.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle8.x = 100;
        circle8.y = 200;
        stage.addChild(circle8);
		var circle9 = new createjs.Shape();
        circle9.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle9.x = 200;
        circle9.y = 200;
        stage.addChild(circle9);
		var circle10 = new createjs.Shape();
        circle10.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle10.x = 300;
        circle10.y = 200;
        stage.addChild(circle10);
		var circle11 = new createjs.Shape();
        circle11.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle11.x = 400;
        circle11.y = 200;
        stage.addChild(circle11);
		var circle12 = new createjs.Shape();
        circle12.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle12.x = 500;
        circle12.y = 200;
        stage.addChild(circle12);
		var circle13 = new createjs.Shape();
        circle13.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle13.x = 600;
        circle13.y = 200;
        stage.addChild(circle13);
		var circle14 = new createjs.Shape();
        circle14.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle14.x = 700;
        circle14.y = 200;
        stage.addChild(circle14);
		var circle15 = new createjs.Shape();
        circle15.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle15.x = 800;
        circle15.y = 200;
        stage.addChild(circle15);
		var circle16 = new createjs.Shape();
        circle16.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle16.x = 100;
        circle16.y = 300;
        stage.addChild(circle16);
		var circle17 = new createjs.Shape();
        circle17.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle17.x = 200;
        circle17.y = 300;
        stage.addChild(circle17);
		var circle18 = new createjs.Shape();
        circle18.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle18.x = 300;
        circle18.y = 300;
        stage.addChild(circle18);
		var circle19 = new createjs.Shape();
        circle19.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle19.x = 400;
        circle19.y = 300;
        stage.addChild(circle19);
		var circle20 = new createjs.Shape();
        circle20.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle20.x = 500;
        circle20.y = 300;
        stage.addChild(circle20);
		var circle21 = new createjs.Shape();
        circle21.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle21.x = 600;
        circle21.y = 300;
        stage.addChild(circle21);
		var circle22 = new createjs.Shape();
        circle22.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle22.x = 700;
        circle22.y = 300;
        stage.addChild(circle22);
		
        stage.enableMouseOver();

		circle.addEventListener("click", function() { ValittuLaake(oppilas = "Burana", tulos); })
		//circle1.addEventListener("click", function(event) { alert("clicked"); })
		circle2.addEventListener("click", function() { ValittuLaake(oppilas = "Panadol", tulos); })
		circle3.addEventListener("click", function() { ValittuLaake(oppilas = "Marevan", tulos); })
		circle4.addEventListener("click", function() { ValittuLaake(oppilas = "Marevan Forte", tulos); })
		circle5.addEventListener("click", function() { ValittuLaake(oppilas = "Selexid", tulos); })
		circle6.addEventListener("click", function() { ValittuLaake(oppilas = "Trimopan", tulos); })
		circle7.addEventListener("click", function() { ValittuLaake(oppilas = "Amorion", tulos); })
		circle8.addEventListener("click", function() { ValittuLaake(oppilas = "V-pen Mega", tulos); })
		circle9.addEventListener("click", function() { ValittuLaake(oppilas = "Metforem", tulos); })
		circle10.addEventListener("click", function() { ValittuLaake(oppilas = "Buventol Easyhaler", tulos); })
		circle11.addEventListener("click", function() { ValittuLaake(oppilas = "Seretide diskus", tulos); })
		circle12.addEventListener("click", function() { ValittuLaake(oppilas = "Prednison", tulos); })
		circle13.addEventListener("click", function() { ValittuLaake(oppilas = "Thyroxin", tulos); })
		circle14.addEventListener("click", function() { ValittuLaake(oppilas = "Simvastatin", tulos); })
		circle15.addEventListener("click", function() { ValittuLaake(oppilas = "Heinix", tulos); })
		circle16.addEventListener("click", function() { ValittuLaake(oppilas = "Oxanest", tulos); })
		circle17.addEventListener("click", function() { ValittuLaake(oppilas = "Lantus", tulos); })
		circle18.addEventListener("click", function() { ValittuLaake(oppilas = "Nexium", tulos); })
		circle19.addEventListener("click", function() { ValittuLaake(oppilas = "Lisinopril", tulos); })
		circle20.addEventListener("click", function() { ValittuLaake(oppilas = "Furesis", tulos); })
		circle21.addEventListener("click", function() { ValittuLaake(oppilas = "Adalat", tulos); })
		circle22.addEventListener("click", function() { ValittuLaake(oppilas = "Albetol", tulos); })
		
		
        circle.addEventListener("mouseover", function(event) {a.style.opacity = 1; })
		//circle1.addEventListener("mouseover", function(event) {b.style.opacity = 1; })
		circle2.addEventListener("mouseover", function(event) {c.style.opacity = 1; })
		circle3.addEventListener("mouseover", function(event) {d.style.opacity = 1; })
		circle4.addEventListener("mouseover", function(event) {e.style.opacity = 1; })
		circle5.addEventListener("mouseover", function(event) {f.style.opacity = 1; })
		circle6.addEventListener("mouseover", function(event) {g.style.opacity = 1; })
		circle7.addEventListener("mouseover", function(event) {h.style.opacity = 1; })
		circle8.addEventListener("mouseover", function(event) {i.style.opacity = 1; })
		circle9.addEventListener("mouseover", function(event) {j.style.opacity = 1; })
		circle10.addEventListener("mouseover", function(event) {k.style.opacity = 1; })
		circle11.addEventListener("mouseover", function(event) {l.style.opacity = 1; })
		circle12.addEventListener("mouseover", function(event) {m.style.opacity = 1; })
		circle13.addEventListener("mouseover", function(event) {n.style.opacity = 1; })
		circle14.addEventListener("mouseover", function(event) {o.style.opacity = 1; })
		circle15.addEventListener("mouseover", function(event) {p.style.opacity = 1; })
		circle16.addEventListener("mouseover", function(event) {q.style.opacity = 1; })
		circle17.addEventListener("mouseover", function(event) {r.style.opacity = 1; })
		circle18.addEventListener("mouseover", function(event) {s.style.opacity = 1; })
		circle19.addEventListener("mouseover", function(event) {t.style.opacity = 1; })
		circle20.addEventListener("mouseover", function(event) {u.style.opacity = 1; })
		circle21.addEventListener("mouseover", function(event) {v.style.opacity = 1; })
		circle22.addEventListener("mouseover", function(event) {x.style.opacity = 1; })
	
		
        circle.addEventListener("mouseout", function(event) {a.style.opacity = 0; })
		//circle1.addEventListener("mouseout", function(event) {b.style.opacity = 0; })
		circle2.addEventListener("mouseout", function(event) {c.style.opacity = 0; })
		circle3.addEventListener("mouseout", function(event) {d.style.opacity = 0; })
		circle4.addEventListener("mouseout", function(event) {e.style.opacity = 0; })
		circle5.addEventListener("mouseout", function(event) {f.style.opacity = 0; })
		circle6.addEventListener("mouseout", function(event) {g.style.opacity = 0; })
		circle7.addEventListener("mouseout", function(event) {h.style.opacity = 0; })
		circle8.addEventListener("mouseout", function(event) {i.style.opacity = 0; })
		circle9.addEventListener("mouseout", function(event) {j.style.opacity = 0; })
		circle10.addEventListener("mouseout", function(event) {k.style.opacity = 0; })
		circle11.addEventListener("mouseout", function(event) {l.style.opacity = 0; })
		circle12.addEventListener("mouseout", function(event) {m.style.opacity = 0; })
		circle13.addEventListener("mouseout", function(event) {n.style.opacity = 0; })
		circle14.addEventListener("mouseout", function(event) {o.style.opacity = 0; })
		circle15.addEventListener("mouseout", function(event) {p.style.opacity = 0; })
		circle16.addEventListener("mouseout", function(event) {q.style.opacity = 0; })
		circle17.addEventListener("mouseout", function(event) {r.style.opacity = 0; })
		circle18.addEventListener("mouseout", function(event) {s.style.opacity = 0; })
		circle19.addEventListener("mouseout", function(event) {t.style.opacity = 0; })
		circle20.addEventListener("mouseout", function(event) {u.style.opacity = 0; })
		circle21.addEventListener("mouseout", function(event) {v.style.opacity = 0; })
		circle22.addEventListener("mouseout", function(event) {x.style.opacity = 0; })
		/**/
		var a = document.getElementById('a');
        a.style.position = "absolute";
        a.style.left = "80px";
        a.style.top = "850px";
        a.style.opacity = 0;
		
		/*
		var b = document.getElementById('b');
        b.style.position = "absolute";
        b.style.left = "80px";
        b.style.top = "850px";
        b.style.opacity = 0;
		*/
		
		var c = document.getElementById('c');
        c.style.position = "absolute";
        c.style.left = "80px";
        c.style.top = "850px";
        c.style.opacity = 0;
		
		var d = document.getElementById('d');
        d.style.position = "absolute";
        d.style.left = "80px";
        d.style.top = "850px";
        d.style.opacity = 0;
		
		var e = document.getElementById('e');
        e.style.position = "absolute";
        e.style.left = "80px";
        e.style.top = "850px";
        e.style.opacity = 0;
		
		var f = document.getElementById('f');
        f.style.position = "absolute";
        f.style.left = "80px";
        f.style.top = "850px";
        f.style.opacity = 0;
		
		var g = document.getElementById('g');
        g.style.position = "absolute";
        g.style.left = "80px";
        g.style.top = "850px";
        g.style.opacity = 0;
		
		var h = document.getElementById('h');
        h.style.position = "absolute";
        h.style.left = "80px";
        h.style.top = "850px";
        h.style.opacity = 0;
		
		var i = document.getElementById('i');
        i.style.position = "absolute";
        i.style.left = "80px";
        i.style.top = "850px";
        i.style.opacity = 0;
		
		var j = document.getElementById('j');
        j.style.position = "absolute";
        j.style.left = "80px";
        j.style.top = "850px";
        j.style.opacity = 0;
		
		var k = document.getElementById('k');
        k.style.position = "absolute";
        k.style.left = "80px";
        k.style.top = "850px";
        k.style.opacity = 0;
		
		var l = document.getElementById('l');
        l.style.position = "absolute";
        l.style.left = "80px";
        l.style.top = "850px";
        l.style.opacity = 0;
		
		var m = document.getElementById('m');
        m.style.position = "absolute";
        m.style.left = "80px";
        m.style.top = "850px";
        m.style.opacity = 0;
		
		var n = document.getElementById('n');
        n.style.position = "absolute";
        n.style.left = "80px";
        n.style.top = "850px";
        n.style.opacity = 0;
		
		var o = document.getElementById('o');
        o.style.position = "absolute";
        o.style.left = "80px";
        o.style.top = "850px";
        o.style.opacity = 0;
		
		var p = document.getElementById('p');
        p.style.position = "absolute";
        p.style.left = "80px";
        p.style.top = "850px";
        p.style.opacity = 0;
		
		var q = document.getElementById('q');
        q.style.position = "absolute";
        q.style.left = "80px";
        q.style.top = "850px";
        q.style.opacity = 0;
		
		var r = document.getElementById('r');
        r.style.position = "absolute";
        r.style.left = "80px";
        r.style.top = "850px";
        r.style.opacity = 0;
		
		var s = document.getElementById('s');
        s.style.position = "absolute";
        s.style.left = "80px";
        s.style.top = "850px";
        s.style.opacity = 0;
		
		var t = document.getElementById('t');
        t.style.position = "absolute";
        t.style.left = "80px";
        t.style.top = "850px";
        t.style.opacity = 0;
		
		var u = document.getElementById('u');
        u.style.position = "absolute";
        u.style.left = "80px";
        u.style.top = "850px";
        u.style.opacity = 0;
		
		var v = document.getElementById('v');
        v.style.position = "absolute";
        v.style.left = "80px";
        v.style.top = "850px";
        v.style.opacity = 0;
		
		var x = document.getElementById('x');
        x.style.position = "absolute";
        x.style.left = "80px";
        x.style.top = "850px";
        x.style.opacity = 0;

        stage.style.position = "centered";
  }
</script>
</head>
<body  onload="init();">
<header class="mainheader">
<div class="menu">
<nav><ul>
<li> <a href="#">Peli näkymä</a> </li>
<li> <a href="ulos.php">Sign out</a> </li>
</ul></nav></div>
</header>
<div class="mainContent">
<div class="content">
<article class="topcontent">
<header>
<h2>Team Hönö Demo game: MedGame</h2>
</header>
<content>
<h3>Doctor needs the answer for the following question:</h3>
<?php
	require_once 'Laskuja.class.php';
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
}if ($arpa==17){
        echo "The patient has a fever and he needs ibuprofen for 400mg.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='1'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==18){
        echo "Patient has a high fever. Patient is a child.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='3'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==19){
        echo "Patient is in pain. He needs paracetamol.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='1'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==20){ //meillä ei ollut panadol dortea, joten ajattelin että panadol olisi tarpeeksi lähellä
        echo "Patient has a fever and muscle aches. Patient is an adult. ";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='3'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==21){
        echo "Patient needs medicine for the treatment of deep vein thrombosis. ";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='4'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==22){
        echo "Patient needs medicine for preventative treatment of complications from thromboembolism. He is affected by atrial fibrillation. ";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='5'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==23){
        echo "Patien has an urinary track infection. He needs medicine containing the active substance pivmecillinam.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='6'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==24){
        echo "Patient needs medicine for an urinary track infection. He needs medicine containing the active substance trimetoprim.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='7'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==25){
        echo "Patient has clearly brinchitis. Bring me suitable medicine for it.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='8'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==26){
        echo "Patient has an inflammation of the middle ear. Bring suitable medicine for me. Its active subtance is amoxicillin.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='8'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==27){
        echo "Patient has pharyngitis caused by streptococcus. Bring me medicine.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='9'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==28){
        echo "Patiant has  type 2 diabetes mellitus. Bring me medicine containing the active substance metformin.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='10'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==29){
        echo "Patient has exercise-induced asthma and needs suitable medication.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='11'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==30){
        echo "Bring me respiratory medicine containing fluticasone/salmeterol as its active substance.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='12'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==31){
        echo "Patient has rheumatoid arthritis.  Bring suitable medicine.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='13'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==32){
        echo "Patient has thyroid dysfunction. Bring a suitable hormonal product for him.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='14'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==33){
        echo "Patient has high cholesterol. Bring suitable medicine.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='15'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==34){
        echo "Patient has allergic rhinitis in spring. Bring respinatory medicine for me. Its active subtanse is ";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='16'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==35){
        echo "Patient has pain caused by cancer. Bring me medicine containing the active subtance oxycodone.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='17'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==36){
        echo "Patient has diabetes. Bring medicine with insulin glargine as its active subtance.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='18'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==37){
        echo "Bring medicine for a reflux disease. Its active substance is esomeprazole.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='19'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==38){
        echo "Bring medicine for high blood pressure. Active substance is lisinopril.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='20'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==39){
        echo "Bring medicine for high blood pressure. Active substance is furosemide.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='21'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==40){
        echo "Patient is pregnant with her first child and her blood pressure raised suddenly. Bring medicine containing active substance nifedipine. ";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='22'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}if ($arpa==41){
        echo "Patient is pregnant with her first child and her blood pressure raised suddenly. Bring medicine containing active substance labelatol.";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='23'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}/*Tämä lääke puuttui listoilta 
if ($arpa==42){
        echo "Patient has gone into labor prematurely. Quickly! Bring medicine!!!";
		$stmt = $db->query("SELECT * FROM brand WHERE PrimaryKey='3'");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Ratkaisu = "{$row['Brand']}";
			echo "<br> Vastaus: $Ratkaisu </p>";
		} 
}*/
?>
</content>
</article>
</div>
</div>

<div id="isodiv">
<canvas id="demoCanvas" width="1388" height="694"></canvas>
<div id="a" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='1'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>

<div id="c" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='3'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="d" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='4'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="e" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='5'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="f" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='6'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="g" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='7'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="h" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='8'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="i" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='9'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="j" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='10'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="k" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='11'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="l" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='12'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="m" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='13'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="n" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='14'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="o" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='15'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="p" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='16'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="q" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='17'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="r" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='18'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="s" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='19'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="t" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='20'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="u" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='21'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="v" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='22'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
<div id="x" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='23'");
					echo "<table>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr><td>{$row['Brand']}</td><td>{$row['Dosage']}</td><tr>\n";
					}
					echo "</table>";
				?>
</div>
</div>
</body>
</html>
