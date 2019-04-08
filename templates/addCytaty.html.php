<?php include 'templates/header.html.php'; ?>

	<ul>
		<li><a href="?task=cytaty&amp;action=index">Strona główna</a>
		<li><a href="?task=cytaty&amp;action=all">Lista cytatów</a>
    </ul>
 
<h1>Dodaj cytat</h1>
<form action="?task=cytaty&amp;action=insert" method="post">
    Autor: </br><input type="text" name="artist"/><br/>
	Informacje o autorze: </br><input type="text" name="artist_info"/><br/>
    Treść:<br />
    <textarea name="content"></textarea><br/>
    </br><input type="submit" value="Dodaj" />
</form>
 
<?php include 'templates/footer.html.php'; ?>