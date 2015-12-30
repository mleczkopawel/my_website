        <div class="item active">
            <img src="image/php.jpg" alt=""></img>
          <div class="container">
            <div class="carousel-caption">                
              <?php
                if($_SESSION['auth'] == TRUE && !isset($_GET['logout'])) 
                    echo '<p><a class="btn btn-md btn-primary" href="podstrona/php/php.php" role="button">Więcej</a></p>';
                else{}
              ?>         
            </div>
          </div>
        </div>