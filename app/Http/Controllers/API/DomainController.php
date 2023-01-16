<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Domain;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) : Response
    {
        // CODE CHALLENGE: Search Filter
        $domains = Domain::query();
        if(!empty($request->search)){
            $domains = $domains->where('domain_name', 'like', '%' . $request->search . '%');
        }
        $domains = $domains->orderBy('created_at', 'desc')->paginate($request->length);
        // Create HTTP response, 200 ok.
        $response = new Response($domains, Response::HTTP_OK);
        // Return HTTP response.
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : Response
    {
        // CODE CHALLENGE: Add Domains
        $data = array();
        $requested_domains = preg_split("/\r\n|\r|\n/", $request->domains);
        if(count($requested_domains) > 0){
            foreach($requested_domains as $domains){
                array_push($data, ['domain_name'=>$domains, 'is_idn'=> $request->internationalized]);
            }
        }
        Domain::insert($data);
        return new Response('true', Response::HTTP_OK);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) : Response
    {
        // CODE CHALLENGE: Toggle Imprint
        $model = Domain::findOrFail($id);
        $model->update($request->all());

        return new Response($model, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id) : Response
    {
        // CODE CHALLENGE: Delete Domains
        $model = Domain::findOrFail($id);
        $model->delete();

        return new Response($model, Response::HTTP_OK);
    }
}
