<?php

function textfield($label, $placeholder, $info, $oblig){
  if($oblig == "yes"){
    $placeholder = $placeholder . "*";
  }
  if($info == "no"){
    $display = "none;";
  } else {
    $display = "flex;";
  }

  echo '
  <div class="textfield">';
    if((isset($label) && ($label !== "")){
      '<label class="textfield-label">' . $label . '</label>'
    })'

    <div class="input-group">
      <input type="text" name="textfield" placeholder="' . $placeholder . '" class="textfield-input">
      <a href="#" style="display=' . $display . '">
        <img class="info-button" src="../elements/info-button.png" alt="bouton pour plus d\'informations">
      </a>
    </div>
  ';

}

?>
