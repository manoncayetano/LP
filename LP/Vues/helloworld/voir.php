<form method="post">
    <label for="eleve">Nombre d'élèves par groupe</label></br>
    <input type="number" id="eleve" name="eleve" />
    <input type="submit" class="button button1" name="submit" />
    </form>
<?php
$a = 1;
$colors = array('1' => '#fff', '2' => '#F2E7DC');
$json_data = file_get_contents("eleves.json");
$eleves = json_decode($json_data,true);
shuffle($eleves);

if ( isset( $_POST['submit'] ) ) {
    $groupe_eleve = $_POST['eleve'];

    echo 'NB eleves selectionné : ' . $groupe_eleve.'</br>';

    $i = 0;
    $g = 1;
    $e = 0;

    $nbEleveGroupe = count($eleves)/$_POST['eleve'];
    echo '<section id="groupes">';

    while ($g <= ceil($nbEleveGroupe)) {

        echo '<div class="groupe">';
        echo '<h2 class="bg-groupe">Groupe ' . $g . '</h2></br>';

        while ($e < $_POST['eleve']) {
            $nom = $eleves[$i]['Nom'] ?? null;
            $prenom = $eleves[$i]['Prénom'] ?? null;
            $e++;
            $i++;
                echo '<p class="bg-eleve" style="background-color:'. $colors[$a] .'">' . $nom .' '. $prenom .'</p>';
                $a++;
                if($a > 2) {
                    $a = 1;
                }
        }
        echo '</div>';
        $g++;
        $e = 0;
    }
    $g = 0;
   echo '</section>';



}