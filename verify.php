
<?php
    
    $_SESSION['source']=_POST['source'];
    $_SESSION['destination']=_POST['destination'];
    echo $_SESSION['source'];echo $_SESSION['destination'];
    
?>





















<html>
    <head>
        <link type="text/css" rel="stylesheet" href="bootstrap.css" media="screen">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="custom.css" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
        
    </head>
    
    
    
    
    <body style="background-image:url('http://www.esc.cam.ac.uk/esc/images/Department/library/Areas%20Mapped%20by%20Part%20II%20Earth%20Sciences%20Students,%20Cambridge%20-%20Google%20Maps%20-%20Googl_2012-10-10_10-49-24.png'); opacity:1.5; background-size: cover; background-repeat:repeat;">
       
        
        
        
        
          <!--NAVBAR-->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="landingPage.php">Poolers</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                      <li  ><a href="aboutUs.html">About Us</a></li>
                      <li ><a href="contactUs.html" >Contact Us</a></li>
                      <li><a href="FAQ.html">FAQ</a></li>
                      <li><form action="queryPoolStatus.php"><input type="submit" value="Current Pool Status!" class="btn btn-primary" style="margin-top:8px;"></form></li>
                       
                      <li><a class="gb_Mb gb_Tb gb_R" id="gb_71" href="https://accounts.google.com/Logout?hl=en&amp;continue=https://www.google.co.in/%3Fgfe_rd%3Dcr%26ei%3DMRpRU9_3JKTO8gf_woDwDA" target="_top">Sign out</a></li>
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
      </nav>
        
        
        <div>
            
            
        </div>
        
        
    </body>
	
    
</html>
