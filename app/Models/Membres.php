<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
//use App\Models\Membres as Authenticatable;

class Membres extends Model /*Authenticatable*/
{
    use HasFactory;

   /*protected $table = 'Membres';
   protected $primarykey = 'id';
    protected $fillable = [
        'nom',
        'email',
        'password',
    ];
    */

    public function roles():BelongsToMany
    {
        return $this->belongsToMany(Roles::class);

    }
}
