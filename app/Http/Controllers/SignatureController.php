<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class SignatureController extends Controller
{
    //

    public function upload_signature(Request $request){


        $validator = Validator::make($request->all(), [
            'signature_1' => 'required|image|mimes:jpeg,png,jpg',
            'signature_2' => 'required|image|mimes:jpeg,png,jpg',
            'signature_3' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if(Signature::where('user_id',auth()->id())->exists()){

            return view('dashboard',['SignatureUploaded'=>Signature::where('user_id', auth()->id())->exists()
            ,'container' => 'get_image'
            ,'result_history' => []]);

        }
        else{
            $signature_1 = Image::make($request->file('signature_1'))->save("signatureImage/signature_1.jpeg");
            $signature_2 = Image::make($request->file('signature_2'))->save("signatureImage/signature_2.jpeg");
            $signature_3 = Image::make($request->file('signature_3'))->save("signatureImage/signature_3.jpeg");

       
            $image1 = imagecreatefromjpeg("signatureImage/signature_1.jpeg");
            $image2 = imagecreatefromjpeg("signatureImage/signature_2.jpeg");
            $image3 = imagecreatefromjpeg("signatureImage/signature_3.jpeg");    
            
            
            imagejpeg($image1,"signatureImage/signature_1.jpeg",25);
            imagejpeg($image2,"signatureImage/signature_2.jpeg",25);
            imagejpeg($image3,"signatureImage/signature_3.jpeg",25);
            

            $user_signature = [
             
            'signature_1' => base64_encode(file_get_contents("signatureImage/signature_1.jpeg")),
            'signature_2' => base64_encode(file_get_contents("signatureImage/signature_2.jpeg")),
            'signature_3' => base64_encode(file_get_contents("signatureImage/signature_3.jpeg")),
            'user_id'=>auth()->id()
            ];
            
            $signature_model = new Signature($user_signature);
            $signature_model->save();   

            return view('dashboard',['SignatureUploaded'=>Signature::where('user_id', auth()->id())->exists()
                    ,'container' => 'get_image'
                    ,'result_history' => []]);
        }            
       
    }
}
