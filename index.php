<?php
if(!isset($_POST['numeros']))
{
?>
Ingrese una lista de numeros separados por comas
<form action="#" method="post">
<input type="text" name="numeros" value="1,2,3,2,1">
<input type="submit" value="es capicua?">
</form>
<?php
}
else
{
  $numeros=explode(",",$_POST['numeros']);
  $contador=0;
  for($i=0;$i<count($numeros)-1;$i++)
  {
    echo $numeros[$i]+1;
    echo $numeros[$i+1]."<br />";
    if($numeros[$i]==$numeros[$i+1] || $numeros[$i]+1==$numeros[$i+1] || $numeros[$i]-1==$numeros[$i+1])
    {
      $contador++;
    }
    else
    {
      $contador--;
    }
  }
  if($contador==count($numeros)-1)
  {
    echo "Capicua";
  }
  else
  {
    echo "No es capicua";
  }
}
?>