<?php
try{
	require_once("db-init.php");
}catch(PDOException $ex){
	echo "ErrMsg to enduser!<hr>\n";
    echo "CatchErrMsg: " . $ex->getMessage() . "<hr>\n";
}
?>

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
						$Annettu = {$row["Brand"]};
						setcookie($Valinta, $Annettu);
					}
					echo "</table>";
				?>
</div>
<div id="b" style="width:300px;height:200px;border:1px solid #000;background-color: #03a8f9;">
                <?php
					$stmt = $db->query("SELECT * 
										FROM brand 
										WHERE PrimaryKey='2'");
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
/*
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
		}*/
		
		var oppilas; //valintoja on monta joten siksi laitetaan menee jokainen yksitellen ja vältytään override ongelmalta
		var tulos = getCookie("tulos"); // vain yksi eväste nimeltä tulos, koska tämä täyttyy vain yhden kerran
		
		function ValittuLaake(Vastaus, Ratkaisu){
			if (Vastaus == Ratkaisu){
				location.replace("https://medgame.herokuapp.com/oikea.php")
			} else
			{
				location.replace("https://medgame.herokuapp.com/vaara.php")
			}
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
		var circle1 = new createjs.Shape();
        circle1.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 45);
        circle1.x = 200;
        circle1.y = 100;
        stage.addChild(circle1);
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

		circle.addEventListener("click", function() { ValittuLaake(oppilas = getCookie("valinta"), tulos); })
		circle1.addEventListener("click", function(event) { alert("clicked"); })
		circle2.addEventListener("click", function(event) { alert("clicked"); })
		circle3.addEventListener("click", function(event) { alert("clicked"); })
		circle4.addEventListener("click", function(event) { alert("clicked"); })
		circle5.addEventListener("click", function(event) { alert("clicked"); })
		circle6.addEventListener("click", function(event) { alert("clicked"); })
		circle7.addEventListener("click", function(event) { alert("clicked"); })
		circle8.addEventListener("click", function(event) { alert("clicked"); })
		circle9.addEventListener("click", function(event) { alert("clicked"); })
		circle10.addEventListener("click", function(event) { alert("clicked"); })
		circle11.addEventListener("click", function(event) { alert("clicked"); })
		circle12.addEventListener("click", function(event) { alert("clicked"); })
		circle13.addEventListener("click", function(event) { alert("clicked"); })
		circle14.addEventListener("click", function(event) { alert("clicked"); })
		circle15.addEventListener("click", function(event) { alert("clicked"); })
		circle16.addEventListener("click", function(event) { alert("clicked"); })
		circle17.addEventListener("click", function(event) { alert("clicked"); })
		circle18.addEventListener("click", function(event) { alert("clicked"); })
		circle19.addEventListener("click", function(event) { alert("clicked"); })
		circle20.addEventListener("click", function(event) { alert("clicked"); })
		circle21.addEventListener("click", function(event) { alert("clicked"); })
		circle22.addEventListener("click", function(event) { alert("clicked"); })
		
		
        circle.addEventListener("mouseover", function(event) {a.style.opacity = 1; })
		circle1.addEventListener("mouseover", function(event) {b.style.opacity = 1; })
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
		circle1.addEventListener("mouseout", function(event) {b.style.opacity = 0; })
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
		
		var b = document.getElementById('b');
        b.style.position = "absolute";
        b.style.left = "80px";
        b.style.top = "850px";
        b.style.opacity = 0;
		
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
   include("TehtavanArvonta.php");
?>
</content>
</article>
</div>
</div>
</body>
</html>