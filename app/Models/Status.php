<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['title'])]
class Status extends Model
{
    public const NEW = 'новая';
 
    public const TITLES = ['новая', 'подтверждена', 'приём состоялся', 'отменена'];
 
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
