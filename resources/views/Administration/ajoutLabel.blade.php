<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header class="navbar">
    <div class="topnav">
      <a  href="/">Home</a>
      <a href="/catalogue">Catalogue</a>
      <a href="/ajoutImage">Ajout Image</a>
</div>

    
    </header>
<style>
    body {
      min-height:100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

html {
  position:relative;
  min-height:100%;
 color:white;
  background-color: rgb(29, 29, 29);
  
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>




<div>
    <form class="formulaire" action="/modification_tags" method="POST" enctype="multipart/form-data">
      {{ csrf_field()}}
          
      <img class="img-form" src="{{$image->url_image}}"  alt="Image">
 
        <div>
            <label> Humain : @if($image->avecHumain == "1")  oui @elseif($image->avecHumain == "0") non @endif </label>
            <select name="avecHumain" >
              <option value="{{ $image->avecHumain }}">Photo avec humain?</option>
              <option value="1">oui</option>
              <option value="0">non</option>
              
          </select>
          </div>

          <div>
              <label> Produit :  @if($image->avecProduit == "1")  oui @elseif($image->avecProduit == "0") non @endif </label>
              <select name="avecProduit">
                <option value="{{ $image->avecProduit }}">Photo avec produit?</option>
                <option value="1">oui</option>
                <option value="0">non</option>
                
            </select>
          </div>
          
          <div>
            <label> Institutionnelle :  @if($image->institutionelle == "1")  oui @elseif($image->institutionelle == "0") non @endif </label>
            <select name="institutionelle">
              <option value="{{ $image->institutionelle }}">Photo institutionnelle?</option>
              <option value="1">oui</option>
              <option value="0">non</option>
              
          </select>
          </div>

          <div>
            <label> Type d'image :  @if($image->type == "PassionFroid") photo PassionFroid @elseif($image->type == "Fournisseur") photo Fournisseur @elseif($image->type == "Logo") photo logo @endif</label>
            <select name="type">
                <option value="{{ $image->type }}">Choissisez une option</option>
                <option value="PassionFroid">photo PassionFroid</option>
                <option value="Fournisseur">photo Fournisseur</option>
                <option value="Logo">photo logo</option>
            </select>
          </div>

          <div>
            <label> Format : @if($image->format == "Vertical") Vertical @elseif($image->format == "Horizontal") Horizontal  @endif</label>
            <select name="format">
                <option value="{{ $image->format }}">Choissisez une option</option>
                <option value="Vertical">Vertical</option>
                <option value="Horizontal">Horizontal</option>
            </select>
          </div>

          <div>
            <label> Crédits photo : </label>
            <input type="text" id="crédit" name="creditphoto" value="{{ $image->creditPhoto }}" > 
          </div>

            <div>
            <label> Droit d'utilisation limités : @if($image->droitUtilisation == "0") Non @elseif($image->droitUtilisation == "1") Oui  @endif </label>
            <select name="droitUtilisation">
              <option value="{{ $image->droitUtilisation }}">Choissisez une option</option>
              <option value="0">Non</option>
              <option value="1">Oui</option>
          </select>
          </div>

          <div>
            <label> Date fin d'utilisation : {{ $image->dateFinUtilisation }}</label>
            <input type="date" id="dateFinUtilisation" name="dateFinUtilisation" value="{{ $image->dateFinUtilisation }}"> 
          </div>

          <div>
            <label> Tags : </label>
            <input type="text" id="tags" name="tags" value="{{ $image->tags }}" > 
          </div>

          <div class="form-group">
            <label for="InputNom">Nom</label>
            <input type="string"  id="InputNom" name="nom" placeholder="Nom" value="{{$image->nom }}">
            @if($errors->has('nom'))
                <p>{{$errors->first('nom')}}</p>
            @endif
        </div>

        <input type="hidden" name="id" id=""  value="{{$image->id }}">

          <div>
            <button type="submit"> Soumettre </button>
            </div>

    </form>


    <style>
      .img-form {
        width: 10%;
        margin: 10px;
      }
    
      .formulaire {
        text-align:center;
        
      }
    </style>