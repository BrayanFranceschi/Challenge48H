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
<body>
    
    <div class="CatalogueBox">
        <div class="Ambiance"> 
            <span>Passionnée de couleur? Découvrez nos photos aux milles couleurs de climats.</span>
            <div>

            </div>
            <button class="CatalogueButton" type=submit>Ambiance</button>
        </div>

        <div class="Produits">
            <span>Goûtez à nos produits issus des quatre coins du monde, tout à votre goût!</span>
            <div>

            </div>
            <button class="CatalogueButton"type=submit>Produits</button>
        </div>
    </div>







<style>
    .CatalogueBox {
        display:flex;
        flex-wrap:nowrap;
        align-items:center;
        position:relative;
    }

    .Ambiance {
        display:block;
        margin-left:auto;
        margin-right:auto;
        width:20%;
        text-align: center;
        padding-top:15%;
        font-size: 20px;

    }

    .Produits {
        display:inline-block;
        margin-left:auto;
        margin-right:auto;
        width:20%;
        text-align: center;
        padding-top:15%;
        font-size: 20px;
        

    }

    button {
        background-color:#e2a113;
        border: 0px;
        border-radius:2px;
        color:black;
        padding: 20px;
        margin: 8px;
        font-size: 20px; 
    }

    html {
        background-image:url('https://www.sushitimes.fr/wp-content/uploads/2020/04/italian-food-background-1.jpg');

        background-attachment: fixed;
        background-position: center;
      }
</style>







</body>
<footer class="footer">
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
    <p class="copyright">  Copyright PassionFroid 2021</p>
  </footer>
</html>