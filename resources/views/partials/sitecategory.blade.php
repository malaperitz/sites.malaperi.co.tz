<?php
$categories = App\Models\SiteCategory::all();
function sites($category_id )
{
   $site = App\Models\Site::where('category',$category_id)->count();
   return $site;
}

?> 