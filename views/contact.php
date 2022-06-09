<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/sass/navbar.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/sass/contact.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact</title>
</head>


<body>
<nav>
    <img src="/images/newLogo.png" alt="logo_portfolio">
    

    
   
        <ul id="ul1">
            <li id="firstLi"><a href="\index.html">Présentation</a></li>
            <li class="middle-li"><a href="projets.html">Projets</a></li>
            <li class="middle-li"><a href="cv.html">CV</a></li>
            <li class="middle-li" style="text-decoration: underline;"><a href="#">Contact</a></li>
            <li id="lastLi"><a href="https://www.linkedin.com/in/valentin-harnay-609b91b9" target="_blank"><img src="\images\linkedin.png" alt="logo linkedin" class="linkedin"></a></li>
        </ul>


<!-- liste déroulante s'affichant quand screen < 650px -->
        <div id="menu" class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/hamburger.png" alt="icone menu hamburger" class="hamburger">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="menuDeroulant">
              <li class="texte-items"><a class="dropdown-item" href="\index.html">Présentation</a></li>
              <li class="texte-items"><a class="dropdown-item" href="projets.html">Projets</a></li>
              <li class="texte-items"><a class="dropdown-item" href="cv.html">CV</a></li>
              <li class="texte-items" style="text-decoration: underline;"><a class="dropdown-item" href="#">Contact</a></li>
              <li class="texte-items"><a class="dropdown-item" href="https://www.linkedin.com/in/valentin-harnay-609b91b9" target="_blank"><img src="\images\linkedin.png" alt="logo linkedin" class="linkedin"></a></li>
            </ul>
          </div>


    
</nav>



<div class="background">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
</div>



<div id="formContact">
			<form action="/models/sentMsg.php" method="post" name="form1">
				<h5>Message</h5><label><b>Prenom</b></label> <input name="prenom" type="text">
				<label><b>Nom</b></label> <input name="nom" type="text"> <label><b>Téléphone</b></label>
				<input name="tel" type="text"> <label><b>E-mail</b></label> <input name="mail"
					type="text"> <label><b>Votre message *</b></label>
				<textarea name="message" required="" type="text" style="resize: none" style="color : #2f365f"></textarea>
        <span>* Obligatoire</span>
                <input type="submit" value='Valider' id="input"> <br>
                <div id="other-contact"><span><img src="/images/portable.png" alt="icone portable" class="portable"><br> <b>07 84 26 43 62</b></span>
                <span><img src="/images/mail.png" alt="icone mail" class="mail"><br> <b>valentinharnay@gmail.com</b></span>
                 </div>

			</form>
      
		</div>


    <div class="popup">
  Message envoyé avec succès.
</div>




<script src="/javascript/textarea-disabled.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>