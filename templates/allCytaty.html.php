<?php include 'templates/header.html.php'; ?>
 
<ul>
	<li><a href="?task=cytaty&amp;action=index">Strona główna</a>
	<li><a href="?task=cytaty&amp;action=add">Dodaj cytat</a>
</ul> 
 
<h1>Lista cytatów</h1>
</br>
<table>
    <tr>
        <td>Autor</td>
		<td>O autorze</td>
        <td>Cytat</td>
    </tr>
    <?php foreach($this->get('cytaty') as $cytaty) { ?>
    <tr>
        <td><?= $cytaty['artist']; ?></td>
		<td><?= $cytaty['artist_info']; ?></td>
        <td><?= $cytaty['content']; ?></td>
    </tr>
    <?php } ?>
</table>
 
<?php include 'templates/footer.html.php'; ?>