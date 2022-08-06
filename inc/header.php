    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
              <div class="col-xs-3"><i class="fa-brands fa-dochub"></i></div>
              <div class="col-xs-9">Readers Blog</div>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" style="color:white;">Home</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">
              Creators
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <?php
                  $query = "SELECT * FROM categories ORDER BY id DESC";
                  $run = mysqli_query($con,$query);
                  if(mysqli_num_rows($run) > 0){
                      while($row = mysqli_fetch_array($run)){
                          $category = ucfirst($row['category']);
                          $id = $row['id'];
                          echo "<li><a href='index.php?cat=".$id."'>$category</a></li>";
                      }
                  }
                  else{
                      echo "<li><a href='#'>No Categories Yet</a></li>";
                  }
                  ?>
              </ul>
            </li>
            
           
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>