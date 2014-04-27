<?PHP
$config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
REQUIRE_ONCE($config);


?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?PHP ECHO $site['title']; ?></title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="<? ECHO $modernizr; ?>"></script>
</head>
<body>
  <header>     
    <div class="row">
      <div class="large-12 columns">
        
        <h1>Welcome to Foundation</h1>
        <nav class="top-bar" data-topbar> 
          <ul class="title-area"> 
            <li class="name"> <h1><a href="#">Domain.com</a></h1> </li> 
            <li class="toggle-topbar menu-icon"><a href="#">HOME</a></li>
          </ul> 
         
          <section class="top-bar-section"> 
      <!-- Right Nav Section --> 
            <ul class="right"> 
              <li class="active"> <a href="#">Right Button</a></li> 
                <li class="has-dropdown"> <a href="#">Admin</a> 
                <ul class="dropdown"> 
                  <li><a href="#">Users</a></li>
                  <li><a href="#">Objects</a></li>
                  <li><a href="#">Files</a></li>
                  <li><a href="#">Links</a></li> 
                </ul> 
            </ul> 
      <!-- Left Nav Section --> 
            <ul class="left"> 
              <li><a href="#">HOME</a></li> 
              <li><a href="#">Shared</a></li> 
              <li><a href="#">Settings</a></li> 


            </ul> 
          </section> 
        </nav>
      </div>
    </div>
  </header>
  <div id="middle"> 
    <div class="row">
      <div class="large-12 columns">
        <h1>middle</h1>
        

      </div>
    </div>
  </div>
  <footer>
    <div id="middle"> 
    <div class="row">
      <div class="large-12 columns">
        <h1>footer</h1>
      </div>
    </div>
  </div> 
  </footer>
  
  
<?PHP  
// include JS
INCLUDE $templates.'/globals/foundation_js.php';
?>

</body>
</html>





