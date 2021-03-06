<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\searchValidation;
use Illuminate\Support\Facades\Input;
use App\CostCenter;
use DB;

class SearchController extends Controller
{
    public function getSearch()
    {
        $costcenters = CostCenter::all();
        $type = Input::get('type');
        $quarter = Input::get('quarter');
        $costcenter = Input::get('costcenter');

        $app_details = DB::table('app_details')
        ->join ('cost_centers', 'cost_centers.id', 'app_details.costcenter_id')
        ->join('apps', 'apps.id', 'app_details.app_id')
        ->select('app_details.id','cost_centers.costcenter_name', 'apps.year', 'apps.type', 'apps.quarter', 'app_details.item_name')
        ->whereNOTIn('app_details.id', function($query){
            $query->select('job_orders.app_item_id')->from('job_orders');
        })
        ->where('app_details.costcenter_id', $costcenter)
        ->where('apps.type', $type)
        ->where('apps.quarter', $quarter)
        ->orderBy('apps.year', 'asc')
        ->orderBy('apps.quarter', 'asc')
        ->get();
// ->whereNOTIn('app_details.id',function($query){
            //     $query->select('job_orders.app_item_id')->from('job_orders');
            // })
        return view('apps.searchResult')->with('app_details', $app_details)
                                        ->with('costcenters', $costcenters);
    }
}
