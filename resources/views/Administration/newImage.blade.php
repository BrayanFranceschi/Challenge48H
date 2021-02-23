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


<div>
      <h2> Ajout Image </h2>
      </div>
    <div>
    <form class="formulaire" action="/ajoutImage" method="POST" enctype="multipart/form-data">
      {{ csrf_field()}}
          

        <input type="file" name="file[]" multiple  id="InputFile" class="form-control">

          <div>
            <button class="submit-button" type="submit"> Soumettre </button>
            </div>

    </form>
</body>
<footer class="footer">
    <p class="copyright">  Copyright PassionFroid 2021</p>
  </footer>
</html>

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

<!-- STYLE BODY -->
<style>
    .formulaire {
        text-align:center;
        color :white;

    }

    h2 {
        text-align:center;
        color:white;
    }

    .form-control {
        border: 2px solid white;
    border-radius: 3px;
    background-color: #333;
    margin:10px;
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