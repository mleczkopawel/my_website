<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include 'layout/head.php';
      ?>
  </head>
  <body>  
   <?php
        include 'layout/menu.php';
        include 'layout/slide/main.php';
      ?>
       <div class="row">
        <div class="col-lg-4-centt">
          <p>
            <?php
                if($_SESSION['auth'] == TRUE && !isset($_GET['logout']))
                {    
                    echo "<b><h1>Cześć, ".$_SESSION['user']."!</h1></b><br>";
                }
                else
                {
                    if (!isset($_POST['login']) && !isset($_POST['password']) && $_SESSION['auth'] == FALSE)
                    {                    
            ?>
            <h1>WITAJ</h1>
            <?php
                    }                 
                }
            ?>
          </p>
        </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.LoreLorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur m ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestiae, tenetur vitae quasi saepe pariatur 
              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.              fugit officiis repellendus accusamus sed delectus praesentium nobis adipisci magnam dicta amet odio culpa exercitationem.</p>
       </div>
      <?php
        include 'layout/polecane.php';
        include 'layout/footer.php';
      ?>
  </body>
</html>
