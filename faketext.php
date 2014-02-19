<?php
/*
* Découpe une de caractères après un certain nombre
*	$text : string, chaine à découper
*	$max : integer, nombre de caractère de la chaine à retourner
*	
*	@return : string
*/
function coupe_chaine($text, $max)
{
      return substr($text, 0, $max);
}

$base = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit. Pst canata tari est paroy malardi dalr sahit ya kho ral labass erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna. Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu amet.';

$nb = $_POST['nb'];
$nb_base = strlen($base);
if(!is_numeric($nb) || $nb < 1){
	$texte = $base;
}
elseif ($nb > $nb_base){
	$n = ceil($nb / $nb_base);
	$texte = '';

	for ($i=0; $i <= $n; $i++) { 
		$texte .= ' ' . $base;
	}
	$texte = coupe_chaine($texte, $nb);
}
else{
	$texte = coupe_chaine($base, $nb);
}

echo $texte;
?>