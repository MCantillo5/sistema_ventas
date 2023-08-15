<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $fillable = [ 'bill_id', 'cantidad'];

    public function bill(){
        return $this->belongsTo(Bill::class);
    }
}
