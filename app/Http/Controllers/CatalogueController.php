<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class CatalogueController extends Controller
{

    public function catalogue(){
        $images = Images::All();
        return view('utilisateurs/catalogue',[
            'images' => $images,
        ]);
    }


    public function recherche(){
        $tag1 = request('tag1');
        $tag2 = request('tag2');
        $tag3 = request('tag3');
        $nom = request('nom');
        
        
        $images = Images::where('tags', 'like', "%$tag1%")
                            ->where('tags', 'like', "%$tag2%") 
                            ->where('tags', 'like', "%$tag3%")  
                            ->where('nom', 'like', "%$nom")   
                            ->get();

        
        return view('utilisateurs/catalogue', [
            'images' => $images,
        ]);

    }
}
