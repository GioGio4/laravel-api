<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["title", "pic", "description", "link", "type_id"];

    //* Relazione con Type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    //* Relazione N-N con technologies
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }


    public function getImageUri()
    {
        return $this->pic ? asset('storage/' . $this->pic) : 'https://thumbs.dreamstime.com/b/no-image-available-icon-vector-illustration-flat-design-140476186.jpg';
    }
}
