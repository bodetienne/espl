<?php

//Fonction champ de texte

function textfield($label, $placeholder, $info, $oblig){
  $form_star = "*";
  if($oblig == "yes"){
    $placeholder = $placeholder . $form_star ;
  }
  if($info == "no"){
    $display = "none;";
  } else {
    $display = "flex;";
  }

  echo '
  <div class="textfield">';
    if(isset($label) && ($label !== "")){
      echo'<label lass="textfield-label">' . $label . '</label>';
    }
    echo '<div class="input-group">
    <input type="text" name="textfield" placeholder="' . $placeholder . '" class="textfield-input">
      <a href="#" style="display : ' . $display . '">
        <img class="info-button" src="elements/info-button.png" alt="bouton pour plus d\'informations">
      </a>
    </div>
  </div>';

}


//Fonction bouton

function createbtn ($id, $txt, $color, $bg, $border){
    echo'<button type="button" name="button" class="btn-choix" id="' . $id .'"
    style="color : ' . $color .'; background : ' . $bg .'; border : 1px solid ' . $border. ';"
    >'.$txt.'</button>';
}

//Fonction ligne de boutons

// function btnligne($nb, $label){
//   $nb_ligne == 1;
//   $nb_btn == 1;
//   echo '<h2 class="nom-form">' . $label . '</h2>';
//   echo'<div class="ligne ligne-"'.$nb_ligne.'>';
//   for($i = 1; $i <= $nb; $i++){
//     if($nb_btn <== 3){
//       echo createbtn("bac-1", "Année 1", "#707070", "white", "#17E5F5");
//       $nb_btn++;
//     } else {
//       $nb_ligne++;
//       echo '</div>';
//       echo'<div class="ligne ligne-"'.$nb_ligne.''>;
//       $nb_btn == 1;
//     }
//   }
// }

?>
