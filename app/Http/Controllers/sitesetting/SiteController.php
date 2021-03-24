<?php

namespace App\Http\Controllers\sitesetting;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Sitesetting;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\FileExists;

class SiteController extends Controller
{
    public function sitesetting()
    {
        return view('Sitesetting.siteSetting');
    }

    public function sitesettingsubmit(Request $request){
        if($request->file('icon')){
            $s = Sitesetting::where('key','site_icon')->first();
            if($s){

                $siteicon = public_path($s->value);
                if(File::exists($siteicon)){
                    File::delete($siteicon);
                }
            }
            $request['site_icon'] = $this->imageUpload($request->icon);

        }

        if($request->file('favicon')){
            $f = Sitesetting::where('key','fav_icon')->first();
            if($f){

                $favicon = public_path($f->value);
                if(File::exists($favicon)){
                    File::delete($favicon);
                }
            }
            $request['fav_icon'] = $this->imageUpload($request->favicon);
        }

        $inputs = $request->only('description', 'site_icon', 'fav_icon');
        foreach($inputs as $key => $input){
            Sitesetting::updateOrCreate(['key'=>$key],[
                    'value' => $input,
                ]);
        }


    }

    public function imageUpload($image){
        $requestedimage = $image;
        $imagename = time().$requestedimage->GetCLientOriginalName();
        $path = public_path('images');
        $requestedimage->move($path,$imagename);
        return 'images/'.$imagename;

    }
}
