<html>
<title>
  Base Admin
</title>
<header>
  <h1> <?php echo 'Offre' . htmlspecialchars($_GET["id"]) . "!"; ?> </h1>
  <br>
  <br>
</header>
<body>
  <form method="get" action="/">
    Nombre de jours:<br>
    <input type="text" name="nbdays" value="<?php echo htmlspecialchars($_GET["nbdays"])?>">
    <br>
    Nombre max de nuits:<br>
    <input type="text" name="nbmax" value="<?php echo htmlspecialchars($_GET["nbmax"])?>">
    <br>
    Nombre min de nuits:<br>
    <input type="text" name="nbmin" value="<?php echo htmlspecialchars($_GET["nbmin"])?>">
    <br>
    Nom de jour d'arriver:<br>
    <input type="text" name="dayn" value="<?php echo htmlspecialchars($_GET["dayn"])?>">
    <br>
    Nom de jour de depart:<br>
    <input type="text" name="dayt" value="<?php echo htmlspecialchars($_GET["dayt"])?>">
    <br>
    Nom d'offre:<br>
    <input type="text" name="nom" value="<?php $id=htmlspecialchars($_GET["id"]);
    $pdoS = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
    $pdoSS = new PDO($pdoS);
    if (!$pdoSS) {
      die("Could not connect");
    }
    $sqlS = "SELECT nom FROM offre WHERE id=$id";
    $state = $pdoSS->query($sqlS);
    while (($rows = $state->fetch(PDO::FETCH_ASSOC))) {
      echo $rows["nom"];
    }
    ?>">
    <br>
    Rate:<br>
    <input type="text" name="rate" value="<?php echo htmlspecialchars($_GET["rate"])?>">
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
