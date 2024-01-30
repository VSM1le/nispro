<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Part extends Model
{
    use HasFactory;
    protected $fillable =['type', 'partnis' , 'parttru','partname','snp','user_id'];
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
