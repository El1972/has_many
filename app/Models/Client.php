<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'clients';

    protected $primaryKey = 'id';

    public function profile(){

        return $this->hasMany(Profile::class);

    }
}
