<?php

function connect_to_database(){
  $link = mysqli_connect("localhost","root","","clip");

  return $link;
}

function get_data(){

  if(isset($_GET['url']))

  {

      $url = $_GET['url'];
      $link = connect_to_database();
      $query = "SELECT * FROM `content` WHERE url = '$url'";
      $result = mysqli_query($link,$query);
      if(mysqli_num_rows($result) == 1)

      {
          $row = mysqli_fetch_assoc($result);
          $query2 = "DELETE FROM `content`
                    WHERE url = '$url'";
          $result2 = mysqli_query($link,$query2);
          if($result2)return $row['data'];
      }

      else {
          $query = "INSERT INTO `content` (url, data)
                    VALUES ('$url', '')";
          $result = mysqli_query($link,$query);
          if($result)return "empty";


      }





  }

  else return "no_get";


}


if(isset($_POST['save']))

{

  $data = $_POST['data'];

  $link = connect_to_database();
  $url = mysqli_real_escape_string($link,$_POST['url']);
  $query = "UPDATE `content`
            SET data = '$data'
            WHERE url = '$url'";
  $result = mysqli_query($link,$query);
  if($result)echo 'Saved..';
  else echo 'Error...';




}






 ?>
