<!--Jakub Salachna-->
<?php 
ob_start();
session_start();
$_SERVER['HTTP_REFERER'];
include('inc/functions.php');

//SPRAWDZENIE CZY WSTAWIONO W FORMULARZU PLIK
if (is_uploaded_file($_FILES['image']['tmp_name']))
{
        $path = $_FILES['image']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION); // POBRANIE ROZSZERZENIA PLIKU

        extension($ext);

			  move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']); // DODANIE PLIKU DO FOLDERU IMG
        
        $image = 'img/'.$_FILES['image']['name'];
        resize($image, $ext);

        //echo "Dodano plik"
        $_SESSION['info'] = 1;
        header('Location:index.php');
}
else 
{
   //echo 'Błąd przy przesyłaniu danych!';
   $_SESSION['info'] = 2;
   header("Location: ".$_SERVER['HTTP_REFERER']);
}

ob_end_flush();
?>