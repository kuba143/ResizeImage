<!--Jakub Salachna-->
<?php

//FUNKCJA OBLICZAJACA NOWE WYMIARY I KOPIUJACA NOWY OBRAZ DO FOLDERU
function resize($image, $extension)
{
  if(file_exists($image))
  {
    switch ($extension) {
      case 'png':
          $original = imagecreatefrompng($image);
        break;

      case 'jpeg':
          $original = imagecreatefromjpeg($image);
        break;

      case 'jpg':
          $original = imagecreatefromjpeg($image);
        break;
    }
    
    $original_w = imagesx($original);
    $original_h = imagesy($original);

    $new_w = $original_w / 1.5;
    $new_h = $original_h / 1.5;

    if($original)
    {
      $new_image = imagecreatetruecolor($new_w, $new_h);
      imagecopyresampled($new_image, $original, 0, 0, 0, 0, $new_w, $new_h, $original_w, $original_h);

      imagejpeg($new_image, $image);
    }   
  }
}

// FUNKCJA SPRAWDZAJACA ROZSZERZENIE PLIKU
function extension($extension)
{
  switch ($extension) {
      case 'png':
          $original = imagecreatefrompng($image);
        break;

      case 'jpeg':
          $original = imagecreatefromjpeg($image);
        break;

      case 'jpg':
          $original = imagecreatefromjpeg($image);
        break;
      
      default:
          $_SESSION['info'] = 2;
          //header('Location:../index.php');
          header("Location: ".$_SERVER['HTTP_REFERER']);
          exit();
        break;
    }
}


?>