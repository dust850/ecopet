<html>
<head>
<title> Pagina de Datos en el Formulario </title>
</head>
<body>
  <h1>Registro de pedidos</h1>
<h2>ECOPET</h2>                                                            
<h3>pensando en el medio ambiente</h3>
 <h2>RUC: 7344893041</h2> 

 <?php

  
  $n1 =  $_POST['n1']*500;
  $n2 =  $_POST['n2']*400;
  $n3 =  $_POST['n3']*300;
  $neto = $n1 + $n2 + $n3;
  $igv = ($n1 + $n2 + $n3)*0.18;
  $tot = $igv + $neto;
  print "<table border=2>"; 
  print "<tr><td>Nombre del cliente:</td><td>$_POST[nom]</td></tr>";
  print "<tr><td>RUC:</td><td> $_POST[an]</td></tr>";
    print "<tr><td>Telefono:</td><td> $_POST[tel]</td></tr>";
 print "<tr><td>chancaca: 500$</td><td> $n1</td></tr>";
  print "<tr><td>flake 25mm: 400$</td><td> $n2</td></tr>";
  print "<tr><td>flake 10mm: 300$</td><td> $n3</td></tr>";
  print "<tr><td>precio neto:</td><td> $neto</td></tr>"; 
  print "<tr><td>igv:</td><td> $igv</td></tr>";
   print "<tr><td>Total:</td><td> $tot</td></tr>";

  print "</table>"; 
 ?>
</body>
</html>