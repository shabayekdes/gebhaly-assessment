<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\ServiceRepositoryInterface; 
use App\Http\Resources\ServiceResource;
use App\Http\Requests\storeServiceRequest;

class ServiceController extends Controller
{
    /**
     * @var ServiceRepositoryInterface
     */
    private $ServiceRepository;
  
    /**
     * Service Controller constructor.
     *
     * @param ServiceRepositoryInterface $ServiceRepository
     */
    public function __construct(ServiceRepositoryInterface $ServiceRepository)
    {
        $this->ServiceRepository = $ServiceRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->ServiceRepository->paginate();

        return ServiceResource::collection($services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  storeServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeServiceRequest $request)
    {
        return $this->ServiceRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
