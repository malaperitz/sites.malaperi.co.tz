<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\SiteCategory;
use Illuminate\Http\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Support\Facades\Hash;
// use Illuminate\Http\Support\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use RealRashid\SweetAlert\Facades\Alert;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
         // Auth::user()->hasRole('administrator');
         if(Auth::user()->isAbleTo('site-read'))
         {
            //  $site = Site::all();
             $site = Site::all();
             return view('sites/view', ['site' =>$site, 'category'=>'All']);
         }
         else
         {
             return view('permissiondenied');
            
         }
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_softwares()
    {
         // Auth::user()->hasRole('administrator');
         if(Auth::check() && Auth::user()->isAbleTo('site-read'))
         {
             $site = Site::where('category','software')->get();
             return view('sites/view', ['site' =>$site, 'category'=>'All']);
         }
         else
         {
            //  return view('permissiondenied');
            $site = Site::where('category','software')->get();
            return view('sites/view_site_category', ['site' =>$site, 'category'=>'Softwares']);
         }
    }
    public function view_siteByCategory($category_id)
    {
         // Auth::user()->hasRole('administrator');
         if(Auth::check() && Auth::user()->isAbleTo('site-read'))
         {
             $ctgry = SiteCategory::where('category_name',$category_id)->first();
             $sctgry = Site::where('category',$ctgry->id)->get();
            //  foreach($sctgry as $cate)
            //  {
            //  $site = \DB::table('sites')->select('sites.*','site_category.category_name as scategory','site_category.icon as cicon')->leftjoin('site_category','site_category.id','sites.category')->where(['category'=>$cate->id])->get();
            // //  $site = Site::where(['category'=>$cate->id])->get();
            //     return view('sites/view', ['site' =>$site, 'category'=>'movies']);
            //  }

             $site = Site::where(['category' =>$ctgry->id])->get();
            // dd($site);
             //  $site = Site::where(['category' =>$category_id])->get();
             return view('sites/view', ['site' =>$site, 'category'=>$category_id]);
         }
         else
         {
            //  return view('permissiondenied');
            $ctgry = SiteCategory::where('category_name',$category_id)->first();
            $site = Site::where('category',$ctgry->id)->get();
            return view('sites/view_site_category', ['site' =>$site, 'category'=>$ctgry->category_name]);
         }
    }
    public function view_musics()
    {
         // Auth::user()->hasRole('administrator');
         if(Auth::check() && Auth::user()->isAbleTo('site-read'))
         {
             $site = Site::where('category','music')->get();
             return view('sites/view', ['site' =>$site, 'category'=>'Musics']);
         }
         else
         {
            //  return view('permissiondenied');
            $site = Site::where('category','music')->get();
            return view('sites/view_site_category', ['site' =>$site, 'category'=>'Musics']);
         }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            //check access right
            if(!Auth::user()->isAbleTo('site-create'))
            {
                return view('permissiondenied');
            }
        $category= SiteCategory::all();
             
            return view('sites/create',['category'=>$category]);
                
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check access right
        if(!Auth::user()->isAbleTo('site-create'))
        {
            return view('permissiondenied');
        }
        $site = new  Site();
        $site->name=$request['name'];
        $site->category=$request['category'];
        $site->url=$request['url'];

        if($site->save())
        {
            // Alert::toast('Site   Created Succesfully','success');
            // $route = $this->getRole(). 'ReadSite';
        return redirect()->route('view.site')
        ->with('message','Site   Created Succesfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit($site)
    {
        //check access right
        if(!Auth::user()->isAbleTo('site-update'))
        {
            return view('permissiondenied');
        }
    try{
        $site = Site::find(Crypt::decryptString($site));
        // $category= SiteCategory::all();
        // $component_type= Component_type::all();
        // return view('sites/update', ['site'=>$site, 'category'=>$category]);
        $category= SiteCategory::all();
        // $category=['Software','Music','Gospel','drama'];
        return view('sites/edit', ['site'=>$site, 'category'=>$category]);
    }  
    catch (DecryptException $e) 
    {
        return redirect()->back();
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        if(!Auth::user()->isAbleTo('site-update'))
        {
            return view('permissiondenied');
        }
        $site = Site::find($request->site_id);
        $site->name=$request['name'];
        $site->category=$request['category'];
        $site->url=$request['url'];
        if($site->save())
        {
        return redirect()->route('view.site')->with('message','Site   Updated Succesfully');
        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        //
        if(!Auth::user()->isAbleTo('site-delete'))
        {
            return view('permissiondenied');
        }

        $site = Site::find(Crypt::decryptString($request));
        if($site->delete())
        {
        $route ='view.site';
        return redirect()->route('view.site')->with('message','Site   Deleted Succesfully');
        }

    }
    public static function getRole()
    {
        return 'Malaperi';
    }
}
