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
    <input type="submit" name="update">
  </form>
  <form action="index.php">
    <input type="submit" name="annuler">
  </form>
</body>
</html>