<?php

function cleanFormEntries($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

function valueFormEntries($form) {
  foreach ($form as $key => $value) {
    if (!$value) {
      $result = false;
      return $result;
      exit;
    }
    else {
      $result= true;
    }

  }
return $result;
}
 ?>
