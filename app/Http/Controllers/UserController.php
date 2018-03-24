<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function applycnic(Request $request)
    {
    	$data['fname'] =$request->fname;
    	$data['lname'] =$request->lname;
    	$data['dob'] =$request->dob;
    	$data['appType'] =$request->appType;
    	$data['identity'] =$request->identity;
    	$data['present_addr'] =$request->present_addr;
    	$data['permanent_addr'] =$request->permanent_addr;
    	$data['mobile'] =$request->mobile;
    	$data['email'] =$request->email; 
    	$data['gender'] =$request->gender; 
    	$data['religion'] =$request->religion; 
    	$data['profession'] =$request->profession; 
    	$comma_separated = implode("", $data);
    	//return hash("sha256",$comma_separated);
    	
                
	}
} 