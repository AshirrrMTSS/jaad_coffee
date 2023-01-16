<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\Models\Domain;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stats() : Response
    {
        $stats = [
            // CODE CHALLENGE: Active Domains
            'active' => $this->getActiveDomains(),
            // CODE CHALLENGE: Trashed Domains
            'trash' => $this->getTrashDomains(),
            // CODE CHALLENGE: Internationalized Domains
            'internationalized' => $this->getRemainingDomains('is_idn'),
            // CODE CHALLENGE: Imprinted Domains
            'imprinted' => $this->getRemainingDomains('is_imprinted')
        ];
        // Create HTTP response, 200 ok.
        $response = new Response($stats, Response::HTTP_OK);
        // Return HTTP response.
        return $response;
    }
    function getActiveDomains(){
        $rec = Domain::whereNull('deleted_at')->get();
        return count($rec);
    }
    function getTrashDomains(){
        $rec = Domain::onlyTrashed()->get();
        return count($rec);
    }
    function getRemainingDomains($column_name){
        $rec = Domain::where($column_name, 1)->get();
        return count($rec);
    }
    
}

