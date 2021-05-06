<?php
require_once('./includes/header.php');
require_once('./db/index.php');

$parameters = explode('/', $_SERVER['PATH_INFO']);
array_shift($parameters);
$isHomepage = empty($parameters[0]);
if ($isHomepage) {
    print_r('page accueil');
} else {
    // print_r('autre page');
    // url : /seasons
    $dataType = $parameters[0];
    print_r($dataType);
    require_once('./'.$dataType.'.php');

    $isList = empty($parameters[1]);

    if ($isList) {
        // afficher la liste
        listAll();
    } else {
        $isCreate = $parameters[1] === 'create';

        if ($isCreate) {
            // afficher le formulaire de création
            createForm();
        } else {
            $isEdit = !empty($parameters[2]);

            if ($isEdit) {
                // afficher le formulaire d'édition

                //shows/189/edit
                editForm($parameters[1]);
            } else {
                // afficher les détails de la série
                details($parameters[1]);
            }
        }
    }


}


// $id = $_GET['id'];

// print_r(explode('/', $_SERVER['REQUEST_URI']));


// Affichage des résultats
/*echo '<table class="table">';

foreach ($data as $index => $row) {
    $str = '<tr>';
    $str .= '<td>'.$row['id'].'</td>';
    $str .= '<td>'.$row['title'].'</td>';
    $str .= '<td>'.$row['start_date'].'</td>';
    $str .= '<td>'.$row['end_date'].'</td>';
    $str .= '<td>'.$row['status'].'</td>';
    $str .='</tr>';
    echo $str;
}

echo '</table>';*/

require_once('./includes/footer.php');
?>

