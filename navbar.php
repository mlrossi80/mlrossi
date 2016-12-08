
    <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand text-center" href="/"></a>
            </div>
          </div>
        </nav>

	    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
          <ul class="nav navbar-nav">

            <?php if ($page == 'home') { ?>
              <li class="active"><a href="/">Home</a></li>
            <?php } else { ?>
              <li><a href="/">Home</a></li>
            <?php } ?>

            <?php if ($page == 'cv') { ?>
              <li class="active"><a href="/cv">CV</a></li>
            <?php } else { ?>
              <li><a href="/cv">CV</a></li>
            <?php } ?>
            
          </ul>
          <!-- RIGHT SIDE NAV (FUTURE UPGRADE) -->
          <ul class="nav navbar-nav navbar-right">
            
            <li>&nbsp;</li>

            <?php if ($page == 'projects') { ?>
              <li class="active"><a href="projects">Freelance</a></li>
            <?php } else { ?>
               <li><a href="projects">Freelance</a></li> 
            <?php } ?>

          </ul>
      	  </div> <!-- end col -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>