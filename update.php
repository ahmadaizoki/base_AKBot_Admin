<?php
    $host="ec2-54-75-224-100.eu-west-1.compute.amazonaws.com";
    $port="5432";
    $dbname="deoaedt1t45duq";
    $user="ufmqwqytarffyx";
    $password="96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
    $pg_options="--client_encoding=UTF8";
    $connection_string="host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
    $dbconn=pg_connect($connection_string);
    if ($dbconn){
      echo "connected to".pg_host($dbconn);
    }else{
      echo "Error in connection to database.";
    }
    $sql="UPDATE offre SET dayn='samediiii' WHERE id=1";
    $result=pg_query($dbconn, $sql);
    if (!$result){
      echo preg_last_error($dbconn);
    }else{
      echo "Updated successfully";
    }
    pg_close($dbconn);
?>
