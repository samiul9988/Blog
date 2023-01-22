<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Mechanic extends Model
{
    use HasFactory;

    public Function carOwner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
    }
}
