<!--Jakub Salachna-->
<?php
//WYŚWIETALNIE KOLOROWYCH RAMEK Z ODPOWIEDNIMI KOMUNIKATAMI
switch ($_SESSION['info']) 
{
	case '1':
		?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Plik dodany.
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
 					</button>
			</div>
		<?php
		$_SESSION['info'] = null;
		break;
	
	case '2':
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Spróbuj ponownie!
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
 					</button>
			</div>
		<?php
		$_SESSION['info'] = null;
		break;

	case '3':
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Błędny format pliku!
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
 					</button>
			</div>
		<?php
		$_SESSION['info'] = null;
		break;
}

?>