<?php 
echo "Associative 2-dimensional array:<br>";

$marks1=array(
    array("Maths"=>80,"Physics"=>89,"Chemistry"=>79),
    array("Maths"=>90,"Physics"=>78,"Chemistry"=>87),
    array("Maths"=>78,"Physics"=>90,"Chemistry"=>79)
);
echo "<ul>";
for($r=0;$r<count($marks1);$r++)
{
    echo "<li>";
    foreach($marks1[$r] as $key=>$value)
    {
        echo "<span id='$key$r'>".$key." = ".$value."</span>  ";
    }
    echo "</li>";
    echo "<br><br>";
}
echo "</ul>";

?>
<button onclick="show()">Show</button>
<div id="here"></div>
<script type="text/javascript">
    var i=0;
        function show()
        {

            document.getElementById("here").innerHTML = document.getElementById("Maths"+i).innerHTML;
            i++;
        }
</script>