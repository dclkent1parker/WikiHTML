<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <Body></title>   
    <link rel="stylesheet" href="css\style.css">  
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Krub" rel="stylesheet"> 
  </head>

  <body>
    <header>
      <?php include ("header.php"); ?>
    </header>
    <nav>
      <ul>
        <li><a class="encours" href="body.html">BODY</a></li>
        <li><a href="html.html">HTML</a></li>
        <li><a href="title.html">TITLE</a></li>
        <li><a href="biu.html">B, I, U</a></li>
        <li><a href="pre.html">PRE</a></li> 
        <li><a href="p.html">P</a></li> 
        <li><a href="ulolli.html">UL, OL, LI</a></li>
        <li><a href="br.html">BR</a></li>
        <li><a href="hr.html">HR</a></li>  
        <li><a href="table.html">TABLE, TD, TR...</a></li> 
        <li><a href="img.html">IMG</a></li>
        <li><a href="a.html">A</a></li>
        <li><a href="h.html">H</a></li>
        <li><a href="!.html">!..</a></li>
        <li><a href="form.html">FORM</a></li>
        <li><a href="imput.html">INPUT</a></li>
        <li><a href="textarea.html">TEXTAREA</a></li>
        <li><a href="select.html">SELECT</a></li>
        <li><a href="meta.html">META</a></li>
        <li><a href="head.html">HEAD</a></li>
        <li><a href="link.html">LINK</a></li>
        <li><a href="div.html">DIV</a></li>
        <li><a href="doctype.html">DOCTYPE</a></li>
      </ul>
    </nav>
    <main>
      <div id="definition">
        <h2><xmp>Définition de la balise <body></xmp></h2>
          <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>L'élément &ltbody&gt représente le contenu principal du document HTML, soit le corps du document. Il ne peut y avoir qu'un élément &ltbody&gt par document.</p></div>
      </div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><body>Ceci est un exemple</body></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
          <p> <body>Ceci est un exemple</body></p></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
      <p><em>Créé par</em> <strong>les D Codeurs du Lac</strong></p>
      <img src="./images/LogoLycan256.png" alt="Logo Lycan">
      <img src="./images/Licorne_mini.png" alt="logo Sylvie">
      <img src="./images/quentin.png" alt="Logo quentin">
      <img src="./images/monlogo.jpg" alt="logo black-beard">
    </footer> 
  </body>
</html>