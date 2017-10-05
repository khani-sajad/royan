<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function flash_message($success)
    {
      $message = $success ? 'ذخیره سازی با موفقیت انجام شد.' : 'ذخیره سازی با خطا مواجه شد.' ;
      $status  = $success ? 'success' : 'danger' ;
      session()->flash('message', $message);
      session()->flash('status', $status);
    }
    protected function flash_delete_message($success)
    {
      $message = $success ? 'آیتم مورد نظر با موفقیت پاک شد.' : 'متاسفانه حذف آیتم مورد نظر با خطا مواجه شد' ;
      $status  = $success ? 'success' : 'danger' ;
      session()->flash('message', $message);
      session()->flash('status', $status);
    }
    protected function validate_card()
    {
        return request()->validate([
          "uid" => "required|unique:cards",
          "number" => "required|unique:cards",
          "type" => "nullable"
        ]);
    }
}
