<?php

function cleanFormEntries($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

function valueFormEntries($form) {
  foreach ($form as $key => $value) {
    if (!$value || $value == "0") {
      $result = false;
      return $result;
      break;
    }
  }
return $result;
}
 ?>
