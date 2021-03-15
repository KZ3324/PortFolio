<?php
$servName = 'localhost';
$dbname = 'portfolio';
$user = 'root';
$password = '';

$pdo = new PDO("mysql:host=$servName;dbname=$dbname", "$user", "$password");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
  $result = "INSERT INTO contact(nom, email, message) VALUES ('$_POST[nom]', '$_POST[email]', '$_POST[message]')";
  $pdo->exec($result);
  header("location:portfolio.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <link rel="stylesheet" href="./assets/css/index.css" media="all" />
  <link rel="stylesheet" href="./assets/css/import.css" media="all" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/librairies/font-awesome-4.7.0/css/font-awesome.min.css" />
</head>

<body id="body">
  <nav id="nav">
    <div style="
          margin-left: 60px;
          display: flex;
          font-weight: bold;
          align-items: center;
        " onclick="menuNav()" id="menuBurger">
      <span style="font-size: 3em" id="croixMenu">&#9776;</span><span style="font-size: 3em; display: none" id="croixMenu2">&#10006;</span><span class="text-menu-burger">Menu</span>
      <div style="display: none" id="menu">
        <a href="#body"><span><i class="fa fa-angle-right" aria-hidden="true"></i>
            Accueil</span></a>
        <a href="#a_propos"><span><i class="fa fa-angle-right" aria-hidden="true"></i> A
            Propos</span></a>
        <a href="#competences"><span><i class="fa fa-angle-right" aria-hidden="true"></i>
            Compétences</span></a>
        <a href="#projets"><span><i class="fa fa-angle-right" aria-hidden="true"></i>
            Projets</span></a>
        <a href="#contact"><span><i class="fa fa-angle-right" aria-hidden="true"></i>
            Contact</span></a>
      </div>
    </div>
  </nav>
  <div id="top-nav" class="top-nav">
    <div>
      <span> Kévin / Zubrzycki </span>
    </div>
    <div>
      <span>
        <a style="color: black; text-decoration: none" href="mailto:kevin.zubrzycki@gmail.com">kevin.zubrzycki@gmail.com</a>
      </span>
    </div>
  </div>
  <aside id="aside"></aside>
  <div id="debut-contenu">
    <div id="accueil" class="contenu-page">
      <div class="box">
        <img src="./assets/logo/logo_kz.png" style="width: 300px; height: 560px" id="logo_kz" />
      </div>
      <div>
        <img src="./assets/logo/arrow.png" style="height: 40px; width: 40px" />
      </div>
    </div>
    <div class="contenu-page" id="a_propos">
      <div style="
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
          ">
        <h2 style="font-size: 3em; font-weight: bold">A propos</h2>
        <div class="horizontal-line"></div>
      </div>
      <div style="display: flex; justify-content: center; margin-top: 100px">
        <div style="background-color: green; width: 400px; height: 500px"></div>
        <div>
          <div style="position: relative; right: 30px; font-size: 2.5em">
            <h2 style="font-weight: bold; font-size: 1.3em">
              Kévin Zubrzycki
            </h2>
            <span>Developpeur Web / Web Mobile</span><br />
            <span>Agiliste</span><br />
          </div>
          <div style="width: 300px; margin-left: 100px; margin-top: 100px">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam,
            molestias deleniti recusandae quae illum laudantium nihil facilis
            esse nam quasi corrupti nostrum nesciunt optio beatae id eaque.
            Incidunt, iste facere!
          </div>
        </div>
      </div>
    </div>
    <div class="contenu-page" id="competences">
      <div style="
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
          ">
        <h2 style="font-size: 3em; font-weight: bold">Compétences</h2>
        <div class="horizontal-line"></div>
      </div>
      <div style="margin-top: 80px">
        <div style="display: flex; justify-content: space-around">
          <div class="competences_container">
            <div style="
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                ">
              <img src="./assets/logo/logo_dev.png" style="width: 35%" />
              <hr />
              <strong>Developpement</strong>
            </div>
            <div style="display: flex; flex-direction: column">
              <span>- HTML </span>
              <span>- CSS</span>
              <span>- JavaScript</span>
              <span>- Php</span>
              <span>- Angular</span>
            </div>
          </div>
          <div class="competences_container">
            <div style="
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                ">
              <img src="./assets/logo/logo_design.png" style="width: 35%" />
              <hr />
              <strong>Graphisme</strong>
            </div>
            <div style="display: flex; flex-direction: column">
              <span>- inDesign </span>
              <span>- Photoshop</span>
              <span>- AdobeXD</span>
              <span>- Illustrator</span>
            </div>
          </div>
          <div class="competences_container">
            <div style="
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                ">
              <img src="./assets/logo/logo_agiliste.png" style="width: 35%" />
              <hr />
              <strong>Agiliste</strong>
            </div>
            <div style="display: flex; flex-direction: column">
              <span>- Méthode Agile </span>
              <span>- Méthode Scrum</span>
              <span>- Scrum master</span>
              <span>- Gestion de projet</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contenu-page" id="projets">
      <div style="
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
          ">
        <h2 style="font-size: 3em; font-weight: bold">Projets</h2>
        <div class="horizontal-line"></div>
      </div>
      <div style="
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding-top: 3vh;
            padding-bottom: 3vh;
          ">
        <div class="container-projet" onmouseover="reductionImagePi()" onmouseout="resetImagePi()">
          <div>
            <img src="./assets/logo/logo_les-pi.png" id="img-pi" />
          </div>
          <div id="les-pi">
            <h2 class="titre_projet">Les Pi</h2>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
              sed, vel porro amet ducimus deleniti facilis voluptas pariatur
              facere veniam ipsa similique in rerum, perspiciatis quisquam
              quia perferendis quas hic.</span>
            <span class="titre_techno-projet">Techno :</span>
            <div class="techno-projet">
              <span>HTML</span><span>CSS</span><span>JS</span><span>Php</span><span>API</span>
            </div>
          </div>
        </div>
        <div class="container-projet" onmouseover="reductionImageMontauban()" onmouseout="resetImageMontauban()">
          <div>
            <img src="./assets/logo/logo-montauban-modif.jpg" id="img-montauban" />
          </div>
          <div id="les-pi">
            <h2>Montauban</h2>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
              sed, vel porro amet ducimus deleniti facilis voluptas pariatur
              facere veniam ipsa similique in rerum, perspiciatis quisquam
              quia perferendis quas hic.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="contenu-page" id="contact">
      <div style="
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
          ">
        <h2 style="font-size: 3em; font-weight: bold">Contact</h2>
        <div class="horizontal-line"></div>
      </div>
      <!-- Formulaire bootstrap -->
      <section id="contact">
        <div class="contact-wrapper">
          <!---------------- 
              
                    CONTACT PAGE LEFT 
                  
                    ----------------->

          <form id="contact-form" class="form-horizontal" role="form" method="POST">
            <div class="form-group">
              <div class="col-sm-12">
                <input type="text" class="form-control" id="name" placeholder="NAME" name="nom" value="" required />
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required />
              </div>
            </div>

            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>

            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
              <div class="button">
                <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
              </div>
            </button>
          </form>

          <!---------------- 
              
                    CONTACT PAGE RIGHT 
                  
                    ----------------->

          <div class="direct-contact-container">
            <ul class="contact-list">
              <li class="list-item">
                <i class="fa fa-map-marker fa-2x"><span class="contact-text place">Ribérac, France</span></i>
              </li>

              <li class="list-item">
                <i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:kevin.zubrzycki@gmail.com" title="Send me an email">kevin.zubrzycki@gmail.com</a></span></i>
              </li>
            </ul>

            <hr />
            <ul class="social-media-list">
              <li>
                <a href="#" target="_blank" class="contact-icon">
                  <i class="fa fa-github" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#" target="_blank" class="contact-icon">
                  <i class="fa fa-twitter" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#" target="_blank" class="contact-icon">
                  <i class="fa fa-instagram" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#" target="_blank" class="contact-icon">
                  <i class="fa fa-codepen" aria-hidden="true"></i></a>
              </li>
            </ul>
            <hr />

            <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
          </div>
        </div>
      </section>

      <!-- Formulaire bootstrap -->
    </div>
  </div>
  <script src="./assets/js/script.js"></script>
</body>

</html>