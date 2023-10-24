<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['url', 'id_ticket'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    

}
