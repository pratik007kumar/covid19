<?php

namespace App\Http\Controllers\Api\V1;

use App\Patient;
use App\Http\Controllers\Controller;
use App\Http\Resources\Patient as PatientResource;
use App\Http\Requests\Admin\StorePatientsRequest;
use App\Http\Requests\Admin\UpdatePatientsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class PatientsController extends Controller
{
    public function index()
    {
        

        return new PatientResource(Patient::with([])->get());
    }

    public function show($id)
    {
        if (Gate::denies('patient_view')) {
            return abort(401);
        }

        $patient = Patient::with([])->findOrFail($id);

        return new PatientResource($patient);
    }

    public function store(StorePatientsRequest $request)
    {
        if (Gate::denies('patient_create')) {
            return abort(401);
        }

        $patient = Patient::create($request->all());
        
        

        return (new PatientResource($patient))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdatePatientsRequest $request, $id)
    {
        if (Gate::denies('patient_edit')) {
            return abort(401);
        }

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());
        
        
        

        return (new PatientResource($patient))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('patient_delete')) {
            return abort(401);
        }

        $patient = Patient::findOrFail($id);
        $patient->delete();

        return response(null, 204);
    }
}
