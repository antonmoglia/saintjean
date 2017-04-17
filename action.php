<?php

$ROOT_NAME = "files/";

// get  & prename (required to create a folder)
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];

// build a 'unique' folder name with timestamp+lastname+firstname
$now = date('md His');
$replace = preg_replace('/[^a-z0-9]+/', '_', strtolower($now . ' ' .$lastname.' '.$firstname));
$dirname = $ROOT_NAME . "/" . substr($replace,0,50);

// create new folder
mkdir($dirname, 0777, true);

// create text file containing applicant infos
$infos =  "\nNom: ".$lastname.
          "\nPrénom: ".$firstname.
          "\nEmail: ".$_POST["email"].
          "\nNom de l'esperluette : ".$_POST["ampersand"].
          "\nPays: ".$_POST["country"].
          "\nSociété: ".$_POST["company"].
          "\nVille: ".$_POST["city"].
          "\n\nDate de reception: ".date('Y-m-d H:i:s').
          "\nAdresse IP: ".$_SERVER['REMOTE_ADDR'];
$info_file = fopen($dirname."/infos.txt", "w") or die("Unable to open file!");
fwrite($info_file, $infos);
fclose($info_file);

// upload first file
for ($i = 1; $i <= 10; $i++) {

  $filename = $_FILES["file".$i]["name"];
  $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
  $file_ext = substr($filename, strripos($filename, '.')); // get file name
  $filesize = $_FILES["file".$i]["size"];
  $allowed_file_types = array('.svg');

  if ( $filename != "" && in_array(strtolower($file_ext),$allowed_file_types) && ($filesize < 2097152))
  {
    // Rename file
    $newfilename = $file_basename . $file_ext;
    move_uploaded_file($_FILES["file".$i]["tmp_name"], $dirname . "/" . $i . "-" . $newfilename);
  // elseif (empty($file_basename))
  // {
  //   // file selection error
  //   echo "Please select a file to upload.";
  // }
  // elseif ($filesize > 200000)
  // {
  //   // file size error
  //   echo "The file you are trying to upload is too large.";
  // }
  // else
  // {
  //   // file type error
  //   echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
  //   unlink($_FILES["file"]["tmp_name"]);
  // }
  }
}
$url = explode('/', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
array_pop($url);
header('Location: '.implode('/', $url)."/done.php");
?>
