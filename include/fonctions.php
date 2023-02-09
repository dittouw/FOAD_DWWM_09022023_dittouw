
<?php
function dateDuJour()
{ 
    $today = date("m.d.y");
    return $today;
}
echo $today;

function dd(){
    $today = date("m.d.y");
    var_dump($today);
    die();
}
?>