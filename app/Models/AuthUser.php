<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;

class AuthUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'id_user', 'nama', 'username', 'password', 'role', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'password'
    ];

    protected $primaryKey = 'id_user';

    public $incrementing = false;

    protected $keyType = 'string';

    public function getAuthPassword()
    {
        return $this->password;
    }

    public static function generateUserId()
    {
        $userId = DB::table('users')->max('id_user');
        $addZero = '';
        $userId = str_replace("U", "", $userId);
        $userId = (int) $userId + 1;
        $incrementUserId = $userId;

        if (strlen($userId) == 1) {
            $addZero = "000";
        } elseif (strlen($userId) == 2) {
            $addZero = "00";
        } elseif (strlen($userId) == 3) {
            $addZero = "0";
        }

        $newUserId = "U" . $addZero . $incrementUserId;
        return $newUserId;
    }
}
