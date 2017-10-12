<?php
function ra($value){
  return strtolower(str_replace('App\\','',$value));
}

function translate($word){
  switch (ra($word)) {
    case 'admin': return 'ادمین' ; break;
    case 'customer': return 'مشتری حقیقی' ; break;
    case 'receiver': return 'پذیرنده' ; break;
    case 'legal': return 'مشتری حقوقی' ; break;
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

function toman($value)
{
  return $value ? $value.' تومان' : $value;
}
