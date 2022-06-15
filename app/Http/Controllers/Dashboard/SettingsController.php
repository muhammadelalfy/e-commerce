<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function editShippingMethod($type){
        if ($type == 'free'){

            $shippingmethod = Setting::where('key' , 'free_shipping_labe')->first();
        }

        elseif ($type == 'inner'){

            $shippingmethod = Setting::where('key' , 'local_label')->first();

        }
        elseif ($type == 'outer'){

            $shippingmethod = Setting::where('key' , 'outer_label')->first();

        }
        return view('admin.setting.edit' , compact('shippingmethod'));
    }

    public function updateShippingMethod(Request $request , $id){

    }
}
