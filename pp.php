<html>
{%autoescape off %}
  $pdoString = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
  $pdo = new PDO($pdoString);
  if (!$pdo) {
    die("Could not connect");
  }
  $sql = "select * from offre";
  $statement = $pdo->query($sql);
  $display = "    <table border=\"1\">\n";
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
    $display .= "      </tr>\n";
  }
  echo $display;
{% endautoesacape %}
</html>
