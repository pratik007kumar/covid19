<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;


    protected $fillable = ['doctor_user_id', 'patient_user_id', 'title', 'event_start_dt', 'event_end_dt'];


    public static function storeValidation($request)
    {
        return [
            // 'first_name' => 'max:191|required',
            // 'last_name' => 'max:191|nullable',
            // 'email' => 'max:191|required|unique:doctors,email',
            // 'phone' => 'max:191|required',
            // 'address' => 'max:191|nullable',
            // 'state' => 'max:191|nullable',
            // 'pin' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            // 'first_name' => 'max:191|required',
            // 'last_name' => 'max:191|nullable',
            // 'email' => 'max:191|required|unique:doctors,email,' . $request->route('doctor'),
            // 'phone' => 'max:191|required',
            // 'address' => 'max:191|nullable',
            // 'state' => 'max:191|nullable',
            // 'pin' => 'max:191|nullable'
        ];
    }
    //

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_user_id', 'id');
    }
    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_user_id', 'id');
    }
}
