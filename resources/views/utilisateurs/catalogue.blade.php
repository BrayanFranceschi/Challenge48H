

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header class="navbar">
    <div class="topnav">
  <a  href="/">Home</a>
  <a href="/catalogue">Catalogue</a>
  <a href="/ajoutImage">Ajout Image</a>
</div> 
    </header>
<body>
  <div>
    <form action="{{ url('/recherche') }}" class="d-flex">
        @csrf
          <div >
            <input type="text" name="tag1" id="" placeholder="Tag 1" class="InputBar">
          </div>
          <div >
            <input type="text" name="tag2" id="" placeholder="Tag 2" class="InputBar">
          </div>
          <div >
            <input type="text" name="tag3" id="" placeholder="Tag 3" class="InputBar">
          </div>
          <div >
            <input type="text" name="nom" id="" placeholder="Nom de l'image" class="InputBar">
          </div>
          <div >
            <input type="text" name="" id="" placeholder="Type d'image" class="InputBar">
          </div>
          
        
        <button class="TagButton" type="submit">Chercher</button>
        
    
      </form>
    </div>
 



    <div class="flex-container">

        @foreach($images as $image)
          
          <div class="test">
            <img class="DescriptionImg" src="{{$image->url_image}}" alt="image" width="300" height="200">
            <a href="{{url('/modification_tags/'.$image->id)}}" >Description/Modification</a>
            {{-- <button type="submit" class="DescriptionButton">Description</button> --}}
        </div>
        @endforeach
        
        
</body>
{{-- <footer class="footer">
    <p class="copyright">  Copyright PassionFroid 2021</p>
  </footer> --}}
  </html>




  
<!-- STYLE BODY -->

  <style>
    .flex-container {
        display:flex;
        flex-wrap:wrap;
        justify-content: space-between;
   
    }

  

    .test {
        border:2px solid white;
        display:flex;
        text-align:center;
        margin:auto;
    }

    .d-flex {
      display:flex;
      text-align:center;
      border-bottom:solid 3px white;
      margin-left:25%;
      margin-right:25%;
      margin-bottom: 20px;
      margin-top: 20px;
    }


    .InputBar {
      text-align:center;
    }

    .TagButton {
      margin-bottom:5px;
      padding-right:11px;
    }



</style>
  <!-- STYLE HEADER -->
  <style>
    body {
        background-color: rgb(29, 29, 29);
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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




<!-- STYLE FOOTER -->
    <style>
      footer {
        background-color:#4CAF50;
        overflow: hidden;
      }
      
      .copyright {
        text-align:center;
        color:white;
      }
  
    </style>

<style>
      
      footer {
      background-color: #4CAF50;
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      overflow: hidden;
  }
      
      .copyright {
        text-align:center;
        color:white;
      }
  
    </style>


