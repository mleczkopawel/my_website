        <div class="item">
            <img src="../../image/c++.jpg" alt="Second slide"></img>
          <div class="container">
            <div class="carousel-caption">
              <?php
                if($_SESSION['auth'] == TRUE && !isset($_GET['logout']))
                    echo '<p><a class="btn btn-md btn-primary" href="../../podstrona/cpp/cpp.php" role="button">Więcej</a></p>';
                else{}
              ?>          
            </div>
          </div>
        </div>