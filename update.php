<html>
<title>
  Base Admin
</title>
<header>
  <?php
    $pdoString = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
    $pdo = new PDO($pdoString);
    if (!$pdo) {
      die("Could not connect");
    }
    $sql = "select * from offre";
    $statement = $pdo->query($sql);
    $display = "    <table align=\"'center'\" border=\"1\">\n";
    $display .= "      <tr>\n";
    $display .= "        <td> ID </td>\n";
    $display .= "        <td> Nbdays </td>\n";
    $display .= "        <td> Nbmax </td>\n";
    $display .= "        <td> Nbmin </td>\n";
    $display .= "        <td> Dayn </td>\n";
    $display .= "        <td> Dayt </td>\n";
    $display .= "        <td> Nom </td>\n";
    $display .= "        <td> Rate </td>\n";
    $display .= "      </tr>\n";
    while (($row = $statement->fetch(PDO::FETCH_ASSOC))) {
      $display .= "      <tr>\n";
      $display .= "        <td>" . $row["id"] . "</td>\n";
      $display .= "        <td>" . $row["nbdays"] . "</td>\n";
      $display .= "        <td>" . $row["nbmax"] . "</td>\n";
      $display .= "        <td>" . $row["nbmin"] . "</td>\n";
      $display .= "        <td>" . $row["dayn"] . "</td>\n";
      $display .= "        <td>" . $row["dayt"] . "</td>\n";
      $display .= "        <td>" . $row["nom"] . "</td>\n";
      $display .= "        <td>" . $row["rate"] . "</td>\n";
      if ($row["id"]==1){
        $qu="SELECT * FROM offre WHERE id=1";
        $pdoStrings = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
        $pdos = new PDO($pdoStrings);
        if (!$pdos) {
          die("Could not connect");
        }
        $statements = $pdos->query($qu);
        while (($rows = $statements->fetch(PDO::FETCH_ASSOC))) {
          $display .= "        <td> <a href=update.php?id=" . $rows["id"] . "&nbdays=" . $rows["nbdays"] . "&nbmax=" . $rows["nbmax"] . "&nbmin=" . $rows["nbmin"] . "&dayn=" . $rows["dayn"] . "&dayt=" . $rows["dayt"] . "&rate=" . $rows["rate"] . "&nom=" . $rows["nom"] . ">Edit</a> </td>\n";
        }
      }else if ($row["id"]==2){
        $qu="SELECT * FROM offre WHERE id=2";
        $pdoStrings = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
        $pdos = new PDO($pdoStrings);
        if (!$pdos) {
          die("Could not connect");
        }
        $statements = $pdos->query($qu);
        while (($rows = $statements->fetch(PDO::FETCH_ASSOC))) {
          $display .= "        <td> <a href=update.php?id=" . $rows["id"] . "&nbdays=" . $rows["nbdays"] . "&nbmax=" . $rows["nbmax"] . "&nbmin=" . $rows["nbmin"] . "&dayn=" . $rows["dayn"] . "&dayt=" . $rows["dayt"] . "&rate=" . $rows["rate"] . "&nom=" . $rows["nom"] . ">Edit</a> </td>\n";
        }
      }else if ($row["id"]==3){
        $qu="SELECT * FROM offre WHERE id=3";
        $pdoStrings = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
        $pdos = new PDO($pdoStrings);
        if (!$pdos) {
          die("Could not connect");
        }
        $statements = $pdos->query($qu);
        while (($rows = $statements->fetch(PDO::FETCH_ASSOC))) {
          $display .= "        <td> <a href=update.php?id=" . $rows["id"] . "&nbdays=" . $rows["nbdays"] . "&nbmax=" . $rows["nbmax"] . "&nbmin=" . $rows["nbmin"] . "&dayn=" . $rows["dayn"] . "&dayt=" . $rows["dayt"] . "&rate=" . $rows["rate"] . "&nom=" . $rows["nom"] . ">Edit</a> </td>\n";
        }
      }else{
        $display .= "        <td> <a href=update.php>Edit</a> </td>\n";
      }
      $display .= "      </tr>\n";
    }
    echo $display;
  ?>
  <h1> <?php echo 'Offre' . htmlspecialchars($_GET["id"]) . "!"; ?> </h1>
  <br>
  <br>
  <link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>
  <form method="post">
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
    <select name="dayn">
      <option value="lundi" <?php if (htmlspecialchars($_GET["dayn"])=="lundi") echo "selected='selected'"; ?>>Lundi</option>
      <option value="mardi" <?php if (htmlspecialchars($_GET["dayn"])=="mardi") echo "selected='selected'"; ?>>Mardi</option>
      <option value="mercredi" <?php if (htmlspecialchars($_GET["dayn"])=="mercredi") echo "selected='selected'"; ?>>Mercredi</option>
      <option value="jeudi" <?php if (htmlspecialchars($_GET["dayn"])=="jeudi") echo "selected='selected'"; ?>>Jeudi</option>
      <option value="vendredi" <?php if (htmlspecialchars($_GET["dayn"])=="vendredi") echo "selected='selected'"; ?>>Vendredi</option>
      <option value="samedi" <?php if (htmlspecialchars($_GET["dayn"])=="samedi") echo "selected='selected'"; ?>>Samedi</option>
      <option value="dimanche" <?php if (htmlspecialchars($_GET["dayn"])=="dimanche") echo "selected='selected'"; ?>>Dimanche</option>
    </select>
    <br>
    Nom de jour de depart:<br>
    <select name="dayt">
      <option value="lundi" <?php if (htmlspecialchars($_GET["dayt"])=="lundi") echo "selected='selected'"; ?>>Lundi</option>
      <option value="mardi" <?php if (htmlspecialchars($_GET["dayt"])=="mardi") echo "selected='selected'"; ?>>Mardi</option>
      <option value="mercredi" <?php if (htmlspecialchars($_GET["dayt"])=="mercredi") echo "selected='selected'"; ?>>Mercredi</option>
      <option value="jeudi" <?php if (htmlspecialchars($_GET["dayt"])=="jeudi") echo "selected='selected'"; ?>>Jeudi</option>
      <option value="vendredi" <?php if (htmlspecialchars($_GET["dayt"])=="vendredi") echo "selected='selected'"; ?>>Vendredi</option>
      <option value="samedi" <?php if (htmlspecialchars($_GET["dayt"])=="samedi") echo "selected='selected'"; ?>>Samedi</option>
      <option value="dimanche" <?php if (htmlspecialchars($_GET["dayt"])=="dimanche") echo "selected='selected'"; ?>>Dimanche</option>
    </select>
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
