<!DOCTYPE html>
<html lang="en">
<head>
  <title>examprep</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .row.content {height: 450px}
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    } 
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Exam Preparation Online</a>
    </div>

  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="registration.php">Registration</a></p>
     <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Organisation
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">dtu</a></li>
      <li><a href="#">ggsipu</a></li>
      <li><a href="#">iit</a></li>
	  <li><a href="#">amity</a></li>
	  <li><a href="#">lpu</a></li>
	  <li><a href="#">bhu</a></li>
    </ul>
  </div>
  
  <div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Application Mode
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#"></a>offline</li>
      <li><a href="#"></a>online</li>
    </ul>
  </div>
  <div class="dropdown">
    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Engineering Stream:
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">cse</a></li>
      <li><a href="#">it</a></li>
      <li><a href="#">ece</a></li>
	  <li><a href="#">mae</a></li>
	  <li><a href="#">eee</a></li>
	  <li><a href="#">civil</a></li>
    </ul>
  </div>
    </div>
	
    <div class="col-sm-8 text-center"> 
      <h1>INTERVIEW EXPERIENCES</h1>
      <p></p>
      <hr>
     
    </div>
   <div class="col-sm-8 text-left"> 
      <table class="table table-bordered">
	  <tr><td><ul style="list-style-type:none">
  <li>job description:software developer</li>
  <li>duration:2 years</li>
  <li>Location:delhi</li>
  <li>Application Mode:Offline</li>
  <li>Organisation:ggsipu</li>
  <li>Engineering:cse</li>
</ul></td></tr>
	  </table>
      <hr>
    </div>
	<div class="col-sm-8 text-left"> 
      <table class="table table-bordered">
	  <tr><td><ul style="list-style-type:none">
  <li><b>job description:web developer</b></li>
  <li><b>duration:4 years</b></li>
  <li><b>Location:delhi</b></li>
  <li><b>Application Mode:Online</b></li>
  <li><b>Organisation:dtu</b></li>
  <li><b>Engineering:cse</b></li>
  </ul></td></tr>
	  </table>
      <hr>
    </div>
  </div>
</div>
</body>
</html>
