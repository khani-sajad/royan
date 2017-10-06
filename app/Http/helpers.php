<?php

function translate($word){
  switch ($word) {
    case 'Admin': return 'ادمین' ; break;
    case 'Customer': return 'مشتری حقیقی' ; break;
    case 'Receiver': return 'پذیرنده' ; break;
    case 'Legal': return 'مشتری حقوقی' ; break;

    default: return ''; break;
  }
}
