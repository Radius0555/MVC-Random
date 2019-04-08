<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
#przycisk
{
float: left;
width: 50px;
height: 50px;
background-color: #FF0000;
}
#wynik1
{
float: left;
width: 150px;
height: 250px;
background-color: #0000FF;
}
#start
{
float: left;
width: 50px;
height: 50px;
background-color: #FF0000;
}
#wynik2
{
float: left;
width: 150px;
height: 250px;
background-color: #0000FF;
}
</style>

</head>
<body>
<script>
let tablica = [];
let i = 1;
tablica[1] = 'Pierwszy element';
tablica[2] = 'Drugi element';
tablica[3] = 'Trzeci element';
tablica[4] = 'Czwarty element';


	document.addEventListener('click',function(event)
	{
		let klik = event.target.id;
		switch(klik)
		{
			case 'przycisk':
				document.getElementById('wynik1').innerHTML = tablica[i];
				if(i<4)
				{
					i++;
				}
				else if(i==4)
				{
					i=1;
				}
			break;
			case 'start':
				setInterval(function () 
				{
					document.getElementById('wynik2').innerHTML = tablica[i];
					if(i<4)
					{
						i++;
					}
					else if(i==4)
					{
						i = 1;
					}
				}, 2000);
			break;
		}
		});
</script>
<main>
<section>
<div id="przycisk"></div>
<div id="wynik1"></div>
</section>
<section>
<div id="start"></div>
<div id="wynik2"></div>
</section>
</main>
</body>
</html>