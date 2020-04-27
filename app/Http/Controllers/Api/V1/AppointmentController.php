<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Resources\Appointment as AppointmentResource;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAppointmentsRequest;
use App\Http\Requests\Admin\UpdateAppointmentsRequest;

class AppointmentController extends Controller
{
    public function index()
    {


        return new AppointmentResource(Appointment::select('title', 'event_start_dt as start', 'event_end_dt as end', 'id')->get());
    }

    public function show($id)
    {
        if (Gate::denies('appointment_view')) {
            return abort(401);
        }

        $Appointment = Appointment::with([])->findOrFail($id);

        return new AppointmentResource($Appointment);
    }

    public function store(StoreAppointmentsRequest $request)
    {
        if (Gate::denies('appointment_create')) {
            return abort(401);
        }

        $Appointment = Appointment::create($request->all());



        return (new AppointmentResource($Appointment))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateAppointmentsRequest $request, $id)
    {
        if (Gate::denies('appointment_edit')) {
            return abort(401);
        }

        $Appointment = Appointment::findOrFail($id);
        $Appointment->update($request->all());




        return (new AppointmentResource($Appointment))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('appointment_delete')) {
            return abort(401);
        }

        $Appointment = Appointment::findOrFail($id);
        $Appointment->delete();

        return response(null, 204);
    }
}
