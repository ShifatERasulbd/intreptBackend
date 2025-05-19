<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siteSetting;
class SiteSettingController extends Controller
{
    //
    public function index(){
        $settings=siteSetting::orderBy('id','Desc')->get();
        return view('backend.siteSetting.all_setting',compact('settings'));
    }
    public function create(){

        return view('backend.siteSetting.add_setting');
    }
    public function store(Request $request){
          $request->validate([
            'image' => 'required|image|max:2048' // max 2MB
        ]);

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
       
        // Save to public/uploads
         $file->move(public_path('uploads/settings'), $filename);

           $file_path='uploads/settings/'.$filename;
         $siteSetting=siteSetting::insert([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_author' => $request->meta_author,
            'meta_keywords' => $request->meta_keywords,
            'logo'=>$file_path,
           
        ]);
        return redirect()
        ->route('settings');
    }
    public function edit($id){
        $settings=siteSetting::findorfail($id);
       return view('backend.siteSetting.edit_setting',compact('settings'));
    }

    public function update(Request $request){
           $setting_id = $request->id;
        
           $settings=siteSetting::findorfail($setting_id);
           if(!$request->hasFile('image')){
                $settings->update([
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_author' => $request->meta_author,
                'meta_keywords' => $request->meta_keywords,
            
                
             ]);
           return redirect()->back();
           }else{

                 $file = $request->file('image');
                 $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/settings/'), $filename);
                $file_path='uploads/settings/'.$filename;
                //  delete old image
                if ($settings->image && file_exists(public_path('uploads/settings' . $settings->image))) {
                    unlink(public_path('uploads/settings' . $settings->image));
                }
                $settings->update([
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'meta_author' => $request->meta_author,
                    'meta_keywords' => $request->meta_keywords,
                    'logo'=>$file_path,
                  ]);
                return redirect()->back();
                
           }
       
    
    }


    public function destroy($id){
       siteSetting::findorfail($id)->delete();
       return redirect()->route('settings');
    }   
}
