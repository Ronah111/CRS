<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Requests\CreateAppointmentRequest;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data from this view
        
        return View('/appointment');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $appointment = Request::all();
    // Appointment::create($appoitnment); // <-- Change this
    // return $appointment;

        // return View('create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {

        $appointment = new Appointment;
        $appointment->name = $request->name;
        $appointment->studentNo = $request->studentNo;
        $appointment->regNo = $request->regNo;
        $appointment->from = $request->from;
        $appointment->to = $request->to; 
        $appointment->date_of_booking = $request->date_of_booking;
        $appointment->save();

        // dd($appointment);
        // $appointment = StoreAppointmenRequest::all();
        // // dd($appointment);
        // Appointment::create($appointment);
        $count =1;
        return redirect('/appointment')->with('status', 'Appointment has been made on computer ' )
        ->with($count);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
