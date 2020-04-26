<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 *
 * @package App
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $state
 * @property string $pin
*/
class Doctor extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'state', 'pin'];
    

    public static function storeValidation($request)
    {
        return [
            'first_name' => 'max:191|required',
            'last_name' => 'max:191|nullable',
            'email' => 'max:191|required|unique:doctors,email',
            'phone' => 'max:191|required',
            'address' => 'max:191|nullable',
            'state' => 'max:191|nullable',
            'pin' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'first_name' => 'max:191|required',
            'last_name' => 'max:191|nullable',
            'email' => 'max:191|required|unique:doctors,email,'.$request->route('doctor'),
            'phone' => 'max:191|required',
            'address' => 'max:191|nullable',
            'state' => 'max:191|nullable',
            'pin' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
