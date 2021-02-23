<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class ImageController extends Controller
{
    //
    public function formulaireImage(){
        return view('Administration/newImage');
    }


    public function addImage(){
        
        
        $images = request('file');
        
        

        foreach(request()->file('file') as $image ){
            Images::create([
                
                //'url_image' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
                'url_image' => cloudinary()->upload($image->getRealPath())->getSecurePath(),


            ]);
        }
           
           

        return redirect('/');

    }

    public function FormulaireModifTag(){

        $id = request('id');
        $image = Images::where('id', $id)->firstOrFail();

       
    
        return view('Administration/ajoutLabel', [
            'image' => $image,
            
        ]);
     

    }


    public function ModifTag(){
        

        $id = request('id');

        //Mise a jour de l'image en bdd
        $image = Images::where('id', $id)->update([
            'nom' =>request('nom'),
            'institutionelle'=> request('institutionelle'),
            'type' => request('type'),
            'avecProduit'=> request('avecProduit'),
            'avecHumain'=> request('avecHumain'),
            'format' => request('format'),
            'credit'=> request('credit'),
            'droitUtilisation'=> request('droitUtilisation'),
            'copyright' => request('copyright'),
            'dateFinUtilisation'=> request('dateFinUtilisation'),
            'tags'=> request('tags'),
                
        ]);  

        $images = Images::All();
        return view('utilisateurs/catalogue',[
            'images' => $images,
        ]);

    }
}

