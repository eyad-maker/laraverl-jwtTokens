<?php

namespace App\Http\Controllers;
use App\Services\AuthService;
use App\Services\LoginService;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $AuthService;
   

    public function __construct(AuthService $AuthService)
    {
        $this->AuthService = $AuthService;
    }
   
    public function index()
    {
        //
        return view("register");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    // login 
    public function login(Request $request)
    {
        return $this->AuthService->login($request);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->AuthService->register($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
