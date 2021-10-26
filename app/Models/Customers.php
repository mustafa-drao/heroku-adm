<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table="customers";
    protected $fillable = [
        'Age','Education_Level','Gender','Home_Ownership','Internet_Connection','Marital_Status','Movie_Selector','Num_Bathrooms',
        'Num_Bedrooms','Num_Cars','Num_Children','Num_TVs','PPV_Freq','Buying_Freq','Format','Renting_Freq','Viewing_Freq','Theater_Freq','TV_Movie_Freq','TV_Signal'];
    public $timestamps = false;

}
