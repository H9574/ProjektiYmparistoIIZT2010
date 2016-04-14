
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MedGame</title>
<link rel="stylesheet" a href="stylesheet.css" type="text/css"/>
<meta name="viewport" content="width=device=width, initial-scale=1.8">
</head>

<body>
	<header class="mainheader">
		<div class="menu">
        <nav><ul>

        <li class="active"> <a href="#">Etusivu</a></li>
		<form action="sisaan.php" method="post">
		<li> Tunnus: <input type="text" name="tunnus"> </li>
        <li> <a href="ulos.php">Sign out</a> </li>
		</form>

        </ul></nav>
		</div>
    </header>
		
		<div class="mainContent">
        <div class="content">
                <article class="topcontent">
<?php
echo '<IMG SRC="HappyEnd.png">
<FORM METHOD="LINK" ACTION="Demo.php">
<INPUT TYPE="submit" VALUE="Play again">
</FORM>';
?>
				</article>
        </div>
        </div>

</div>
</body>

</html>