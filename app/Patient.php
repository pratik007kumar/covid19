<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 *
 * @package App
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $mobile
 * @property string $address
 * @property string $pin
 * @property string $state
*/
class Patient extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['first_name', 'last_name', 'email', 'mobile', 'address', 'pin', 'state'];
    

    public static function storeValidation($request)
    {
        return [
            'first_name' => 'max:191|required',
            'last_name' => 'max:191|nullable',
            'email' => 'max:191|required|unique:patients,email',
            'mobile' => 'max:191|nullable',
            'address' => 'max:191|nullable',
            'pin' => 'max:191|required',
            'state' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'first_name' => 'max:191|required',
            'last_name' => 'max:191|nullable',
            'email' => 'max:191|required|unique:patients,email,'.$request->route('patient'),
            'mobile' => 'max:191|nullable',
            'address' => 'max:191|nullable',
            'pin' => 'max:191|required',
            'state' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
