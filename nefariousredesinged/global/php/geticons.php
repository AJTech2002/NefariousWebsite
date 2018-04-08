<?php

  function echoIcon ($iconName, $className, $idName, $style) {
    $dir = get_template_directory_uri() . "/global/icons/social/" . $iconName . ".svg";

    echo "<img src='$dir' $className $idName $style/>";
  }

  function echoSpecialIcon ($iconName, $className, $idName, $style) {
    $dir = get_template_directory_uri() . "/global/icons/" . $iconName . ".svg";

    echo "<img src='$dir' $className $idName $style/>";
  }

?>
