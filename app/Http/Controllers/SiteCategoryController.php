<?php

namespace App\Http\Controllers;

use App\Models\SiteCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Support\Facades\Hash;
// use Illuminate\Http\Support\Facades\Alert;
use Illuminate\Http\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
// use RealRashid\SweetAlert\Facades\Alert;

class SiteCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
         // Auth::user()->hasRole('administrator');
         if(Auth::user()->isAbleTo('sitecategory-read'))
         {
             $sitecategory = SiteCategory::all();
             return view('sitecategory/view', ['sitecategory' =>$sitecategory, 'category'=>'All']);
         }
         else
         {
             return view('permissiondenied');
             $sitecategory = SiteCategory::all();
             return view('sitecategory/view', ['sitecategory' =>$sitecategory, 'category'=>'All']);
             
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
         if(Auth::check() && Auth::user()->isAbleTo('sitecategory-read'))
         {
             $sitecategory = SiteCategory::where('category','software')->get();
             return view('sitecategory/view', ['sitecategory' =>$sitecategory, 'category'=>'All']);
         }
         else
         {
            //  return view('permissiondenied');
            $sitecategory = SiteCategory::where('category','software')->get();
            return view('sitecategory/view_sitecategory_category', ['sitecategory' =>$sitecategory, 'category'=>'Softwares']);
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
            if(!Auth::user()->isAbleTo('sitecategory-create'))
            {
                return view('permissiondenied');
            }
            $category = 'category';
             
            return view('sitecategory/create',['category'=>$category]);
                
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
        if(!Auth::user()->isAbleTo('sitecategory-create'))
        {
            return view('permissiondenied');
        }

        $sitecategory = new  SiteCategory();
        $sitecategory->category_name=$request['category_name'];
        $sitecategory->description=$request['description'];
         
        if($request->file())
        {
            if($request->file('icon'))
            {
                $fileName2 = time().'sitecategory'.'_'.$request->category_name.'.'.$request->icon->getClientOriginalExtension();
                $request->file('icon')->move('assets/img', $fileName2 );
                $sitecategory->icon = $fileName2;
            }
        }
        if($sitecategory->save())
        {
            // Alert::toast('SiteCategory   Created Succesfully','success');
            // $route = $this->getRole(). 'ReadSiteCategory';
        return redirect()->route('view.sitecategory')->with('message','SiteCategory   Created Succesfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteCategory  $sitecategory
     * @return \Illuminate\Http\Response
     */
    public function show(SiteCategory $sitecategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteCategory  $sitecategory
     * @return \Illuminate\Http\Response
     */
    public function edit($sitecategory)
    {
        //check access right
        if(!Auth::user()->isAbleTo('sitecategory-update'))
        {
            return view('permissiondenied');
        }
    try{
        $sitecategory = SiteCategory::find(Crypt::decryptString($sitecategory));
        return view('sitecategory/edit', ['sitecategory'=>$sitecategory]);
    }  
    catch (DecryptException $e) 
    {
       
        return redirect()->back()->with('info','Decrypt error');
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteCategory  $sitecategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteCategory $sitecategory)
    {
        if(!Auth::user()->isAbleTo('sitecategory-update'))
        {
            return view('permissiondenied');
        }
        $sitecategory = SiteCategory::find($request->sitecategory_id);
        $sitecategory->category_name=$request['category_name'];
        $sitecategory->description=$request['description'];
        if($request->file())
        {
            if($request->file('icon'))
            {
                $fileName2 = time().'sitecategory'.'_'.$request->category_name.'.'.$request->icon->getClientOriginalExtension();
                $request->file('icon')->move('assets/img', $fileName2 );
                $sitecategory->icon = $fileName2;
            }
        }                     
        if($sitecategory->save())
        {
        return redirect()->route('view.sitecategory')->with('message','SiteCategory   Updated Succesfully');
        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteCategory  $sitecategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        //
        if(!Auth::user()->isAbleTo('sitecategory-delete'))
        {
            return view('permissiondenied');
        }

        $sitecategory = SiteCategory::find(Crypt::decryptString($request));
        if($sitecategory->delete())
        {
        $route ='view.sitecategory';
        return redirect()->route('view.sitecategory')->with('message','SiteCategory   Deleted Succesfully');
        }

    }
    public static function getRole()
    {
        return 'Inventory';
    }
}
