<html>
<title>
  Base Admin
</title>
<header>
  <h1> Base admin </h1>
  <br>
  <br>
</header>
<body>
  <form method="post">
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
    <br>
    <input type="submit" name="update" value="Update">
  </form>
  <form action="index.php">
    <input type="submit" name="annuler" value="Annuler">
  </form>
  <?php
  if (isset($_POST['update'])){
  $db=pg_connect("host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com port=5432 dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82");
  $nbdays=$_POST['nbdays'];
  $nbmax=$_POST['nbmax'];
  $nbmin=$_POST['nbmin'];
  $dayn=$_POST['dayn'];
  $dayt=$_POST['dayt'];
  $nom=$_POST['nom'];
  $rate=$_POST['rate'];
  $offre=htmlspecialchars($_GET["id"]);
  if ($offre==1){
    echo "ouiiiiii";
  }else{
    echo "nonnnn";
  }
  $query="UPDATE offre SET nbdays=$nbdays,nbmax=$nbmax,nbmin=$nbmin,dayn='$dayn',dayt='$dayt',nom='$nom',rate='$rate' WHERE id=$offre";
  $result=pg_query($db,$query);
  if (!$result){
    echo "Update failed!";
  }else {
    echo "Update successfull!";
  }
  }
   ?>
</body>
</html>
