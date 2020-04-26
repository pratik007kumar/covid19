<?php

namespace App\Http\Controllers\Api\V1;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Resources\Doctor as DoctorResource;
use App\Http\Requests\Admin\StoreDoctorsRequest;
use App\Http\Requests\Admin\UpdateDoctorsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class DoctorsController extends Controller
{
    public function index()
    {
        

        return new DoctorResource(Doctor::with([])->get());
    }

    public function show($id)
    {
        if (Gate::denies('doctor_view')) {
            return abort(401);
        }

        $doctor = Doctor::with([])->findOrFail($id);

        return new DoctorResource($doctor);
    }

    public function store(StoreDoctorsRequest $request)
    {
        if (Gate::denies('doctor_create')) {
            return abort(401);
        }

        $doctor = Doctor::create($request->all());
        
        

        return (new DoctorResource($doctor))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateDoctorsRequest $request, $id)
    {
        if (Gate::denies('doctor_edit')) {
            return abort(401);
        }

        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->all());
        
        
        

        return (new DoctorResource($doctor))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('doctor_delete')) {
            return abort(401);
        }

        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return response(null, 204);
    }
}
