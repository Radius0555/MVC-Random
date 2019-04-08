<?php

$alphabet = array('A', 'B', 'C', 'D', 'E');
$next = 'A';   //for the first call of page.
if (isset($_POST["next"])) 
{

    $letter = $_POST['letter'];

    $get = array_search($letter, $alphabet);

    $next = $alphabet[($get + 1)%count($alphabet)];  //for loop over array

}

echo $next;
?>

<form name="alphabet" method="post"> 
<input type="hidden"  name="letter" value="<?php echo $next;?>"/>
<input type="submit"  name="next" value="next"/>
</form>