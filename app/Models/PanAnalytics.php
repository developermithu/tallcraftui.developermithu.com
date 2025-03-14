<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanAnalytics extends Model
{
    use HasFactory;

    protected $table = 'pan_analytics';

    protected $fillable = ['name', 'impressions', 'hovers', 'clicks'];
}
