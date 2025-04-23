<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCategory extends Model
{
    use HasFactory;
    protected $table = 'site_category';


    function sitesByCategory($category_id)
    {
    //    $site = Site::where('category',$category_id)->get();
       $site = \DB::table('sites')->select('sites.*','site_category.category_name as scategory','site_category.icon as cicon')->leftjoin('site_category','site_category.id','sites.category')->where(['category'=>$category_id])->get();

       return $site;
    }
    function countSitesInCategory($category_id)
    {
       $site = $this->sitesByCategory($category_id)->count();
       return $site;
    }
}
