<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'cv';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'user_id',
        'Cv_name',
    ];
    use HasFactory;


}
