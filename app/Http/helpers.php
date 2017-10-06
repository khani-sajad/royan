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

function offer_type($type){
  switch ($type) {
    case '1': return 'عمومی' ; break;
    case '2': return 'مرجع' ; break;

    default: return ''; break;
  }
}
