<?php
function ra($value){
    return strtolower(str_replace('App\\','',$value));
}

function rc($value){
    return (int) strtolower(str_replace(',','',$value));
}

function userable_type()
{
    return ra(auth()->user()->userable_type);
}

function userable_id()
{
    return auth()->user()->userable_id;
}

/****************************************************************/

function translate($word){
    switch (ra($word)) {
        case 'admin': return 'ادمین' ; break;
        case 'customer': return 'مشتری حقیقی' ; break;
        case 'receiver': return 'پذیرنده' ; break;
        case 'legal': return 'مشتری حقوقی' ; break;
        case 'card': return 'آیکیو کارت' ; break;
        case 'paper': return 'آیکیو برگ' ; break;
        case 'passenger': return 'مسافر' ; break;
        case 'citizen': return 'شهروند' ; break;

        default: return $word; break;
    }
}

function translate_number($value,$type)
{
    switch ($type) {
        case 'buy_type':
        if ( $value == 1 ) return 'عمده' ;
        if ( $value == 2 ) return 'خرده' ;
        break;

        case 'offer':
        return $value == 2 ? 'معرف' : 'عمومی'; break;

        default: return $value; break;
    }
}

/****************************************************************/


function toman($value)
{
    return $value ? $value.' تومان' : $value;
}

/****************************************************************/


function jumbo_error($message)
{
    $error = "
    <div style='background:#E74430; padding:50px; text-align:center; font-size:2em; margin:50px;'>
    $message
    </div>
    ";
    return $error;
}

function reference_name($id,$luxury=false)
{
    $ref = \App\Reference::find($id);
    $person = $ref->referencable;

    if ($luxury) {
        if ( isset( $person->business_name ) ) return $person->business_name;
        if ( isset( $person->company_name ) ) return $person->company_name;
        if ( isset( $person->mobile ) ) return $person->mobile;
    }else {
        if ( isset( $person->manager_name ) ) return $person->manager_name;
        if ( isset( $person->first_name ) ) return $person->first_name . ' ' . $person->last_name ;
    }

    return '?';
}

function storage($path)
{
    $path = 'storage/'.$path;
    $path = asset($path);
    $path = str_replace('public/','',$path);
    return $path;
}

function reference_type($id)
{
    $ref = \App\Reference::find($id);
    return translate($ref->referencable_type);
}
