<?php
try{
  $pdoString="pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82"
  $con=pg_connect($pdoString);
  if (!$con){
    die ('Failed to cinnect: ' .mysqli_connect_error());
  }
  $sql='SELECT * FROM offre';
  $query=pg_query($con,$sql);
  if (!$query){
    die ('SQL ERROR: '.mysqli_error($con));
  }
 ?>
<html>
<title>
  Base Admin
</title>
<header>
  <h1>Base Admin</h1>
  <br>
  <br>
</header>
<body>
  <form method="post" action="/">
    Nombre de jours:<br>
    <input type="text" name="nbdays">
    <br>
    Nombre max de nuits:<br>
    <input type="text" name="nbmax">
    <br>
    Nombre min de nuits:<br>
    <input type="text" name="nbmin">
    <br>
    Nom de jour d'arriver:<br>
    <select name="dayn">
      <option value="lundi">Lundi</option>
      <option value="mardi">Mardi</option>
      <option value="mercredi">Mercredi</option>
      <option value="jeudi">Jeudi</option>
      <option value="vendredi">Vendredi</option>
      <option value="samedi">Samedi</option>
      <option value="dimanche">Dimanche</option>
    </select>
    <br>
    Nom de jour de depart:<br>
    <select name="dayt">
      <option value="lundi">Lundi</option>
      <option value="mardi">Mardi</option>
      <option value="mercredi">Mercredi</option>
      <option value="jeudi">Jeudi</option>
      <option value="vendredi">Vendredi</option>
      <option value="samedi">Samedi</option>
      <option value="dimanche">Dimanche</option>
    </select>
    <br>
    Nom d'offre:<br>
    <input type="text" name="nom">
    <br>
    Rate:<br>
    <input type="text" name="rate">
    <br>
    Choisir une offre:<br>
    <select name="offre">
      <option value="1">Offre 1</option>
      <option value="2">Offre 2</option>
      <option value="3">Offre 3</option>
    </select>
    <br>
    <br>
    <input type="submit">
  </form>
  <h1> Table 1 </h1>
  <table>
    <caption> La table offre</caption>
    <thead>
      <tr>
        <th>id</th>
        <th>nbdays</th>
        <th>nbmax</th>
        <th>nbmin</th>
        <th>dayn</th>
        <th>dayt</th>
        <th>nom</th>
        <th>rate</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=1;
      $total=0;
      while ($row=mysqli_fetch_array($query)){
        $id=$row['id']==0 ? '' :number_format($row['id']);
        echo  '<tr>'
        echo '$row['id']'
        echo '</tr>'
        $total += $row['id'];
        $no++;
      }
       ?>
     </tbody>
     <tfoot>
       <tr>
         <th colspan="4">TOTAL </th>
         <th><?=number_format($total)?></th>
       </tr>
     </tfoot>
   </table>
</body>
</html>
