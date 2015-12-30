        <div class="item">
            <img src="image/qt.jpg" alt="Second slide"></img>
          <div class="container">
            <div class="carousel-caption">
              <?php
                if($_SESSION['auth'] == TRUE && !isset($_GET['logout']))  
                    echo '<p><a class="btn btn-md btn-primary" href="podstrona/qt/qt.php" role="button">Więcej</a></p>';
                else{}
              ?>          
            </div>
          </div>
        </div>