<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    
    protected $table= 'sites';
    // protected $fillable = [
    //     'name',
    //     'url',
    //     'category',
    // ];

    function sitesByCategory($category_id)
    {
       $site = Site::where('category',$category_id)->get();
       return $site;
    }
    function siteCategory()
    {
       return  $this->belongsTo(SiteCategory::class,'category');
    }
    function countSitesInCategory($category_id)
    {
       $site = $this->sitesByCategory($category_id)->count();
       return $site;
    }
}
