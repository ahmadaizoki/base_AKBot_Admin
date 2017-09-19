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
  <form method="post" action="index.php">
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
    <input type="submit" name="update" value="Update">
  </form>
  <?php
    $pdoString = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
    $pdo = new PDO($pdoString);
    if (!$pdo) {
      die("Could not connect");
    }
    $sql = "select * from offre";
    $statement = $pdo->query($sql);
    $display = "    <table border=\"1\">\n";
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
        $qurey="SELECT * FROM offre WHERE id=1";
        $db=pg_connect("host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com port=5432 dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82");
        $result=pg_connect($db,$query);
        echo $result;
        $display .= "        <td> <a href=update.php?" . $result .">Edit</a> </td>\n";
      //  $display .= "        <td> <a href=update.php?id=" . $result["id"] . "&nbdays=" . $result["nbdays"] . "&nbmax=" . $result["nbmax"] . "&nbmin=" . $result["nbmin"] . "&dayn=" . $result["dayn"] . "&dayt=" . $result["dayt"] . "&nom=" . $result["nom"] . "&rate=" . $result["rate"] . ">Edit</a> </td>\n";
      }else if ($row["id"]==2){
        $display .= "        <td> <a href=update.php?id=2>Edit</a> </td>\n";
      }else if ($row["id"]==3){
        $display .= "        <td> <a href=update.php?id=3>Edit</a> </td>\n";
      }else{
        $display .= "        <td> <a href=update.php>Edit</a> </td>\n";
      }
      $display .= "      </tr>\n";
    }
    echo $display;
  ?>
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
  $offre=$_POST['offre'];
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
