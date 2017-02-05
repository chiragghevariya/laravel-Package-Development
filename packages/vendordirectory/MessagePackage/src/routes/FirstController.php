<?php

namespace vendordirectory\MessagePackage\routes;

use App\Http\Controllers\Controller;

class FirstController extends Controller{
    
    
    
    public function getFirstView(){

        return view('messagepackage::first');
        
    }
    
    
    
    
}
