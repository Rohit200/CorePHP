<?php
if(isset($_POST['name']))
{
    $name=$_REQUEST['name'];
    //echo $name;
    $filecontent=file_get_contents("Book.json");
    $json=json_decode($filecontent,true);
    $i=0;
    $name=strtoupper($name);
    While($i<sizeof($json))
    {
        if($json[$i]["name"]==$name)
        {
            echo "Book name is ".$json[$i]["name"]."<br>";
            echo "Price of the Book is ".$json[$i]["Price"]."<br>";
            break;
        }
        $i++;
  }
  if($i>=sizeof($json))
  echo "Book not found \n";

}

?>
 