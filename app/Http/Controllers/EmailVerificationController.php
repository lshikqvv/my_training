<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailVerificationRequest;
use App\Http\Requests\UpdateEmailVerificationRequest;
use App\Models\EmailVerification;

class EmailVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmailVerificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailVerification $emailVerification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmailVerification $emailVerification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailVerificationRequest $request, EmailVerification $emailVerification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailVerification $emailVerification)
    {
        //
    }
}
