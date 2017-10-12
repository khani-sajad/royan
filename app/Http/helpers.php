<?php
function ra($value){
  return strtolower(str_replace('App\\','',$value));
}

function translate($word){
  switch (ra($word)) {
    case 'Admin': return 'ادمین' ; break;
    case 'Customer': return 'مشتری حقیقی' ; break;
    case 'Receiver': return 'پذیرنده' ; break;
    case 'Legal': return 'مشتری حقوقی' ; break;
    case 'card': return 'آیکیو کارت' ; break;
    case 'paper': return 'آیکیو برگ' ; break;

    default: return $word; break;
  }
}

function offer_type($type){
  switch ($type) {
    case '1': return 'عمومی' ; break;
    case '2': return 'مرجع' ; break;

    default: return ''; break;
  }
}
