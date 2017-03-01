<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>contact me</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
   <!--  Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#service">Services <span class="sr-only">(current)</span></a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#process">Process</a></li>
        <li><a href="#product">Products</a></li>


           </ul>
      <form class="navbar-form navbar-left" action="posts.store" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="email">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#work">Work</a></li>
        <li><a href="#Testimonials">Testimonials</a></li>
        <li class="active"><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">my account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1></h1>
<div class="container">
    <div class="row">
       <div class="col-md-12">
         <div class="jumbotron">
           <h1 id="tier5">TIER5</h1>
             <p>Thank you so much for visiting.</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
         </div>
       </div>
    </div>
    <div class="row">
       <div class="col-md-8">
         <div class="post">
           <h1 id="service">Services</h1>
             <p>he have lots of services to offer</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
       </div>
        <hr>
       <div class="col-md-8">
         <div class="post">
           <h1 id="about">About</h1>
             <p>he have lots of services to offer</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
       </div>
 
         <hr>
    
       <div class="col-md-8">
         <div class="post">
           <h1 id="process">Process</h1>
             <p>he have lots of services to offer</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
       </div>
      
       <div class="col-md-8">
         <div class="post">
           <h1 id="product">Products</h1>
             <p>he have lots of services to offer</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
       </div>
       <div class="col-md-8">
         <div class="post">
           <h1 id="work">Work</h1>
             <p>he have lots of services to offer</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
        </div>
         <div class="col-md-8">
         <div class="post">
           <h1 id="Testimonials">Testimonials</h1>
             <p>he have lots of services to offer</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
        </div>
         <div class="col-md-8">
         <div class="post">
           <h1 id="contact">Contact</h1>
             <p>he have lots of services to offer</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
        </div> 
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Contact Me</h1>
              <h1>
              <form method="POST" action="{{url('/')}}/postcontact">
                    <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                    </div>
                    <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="Send Message" class="btn btn-success">
              </form>
            </div>
          </div>
        </div>

     <!-- <div class="col-md-3 col-md-offset-1">
         <div class="post">
           <h1>Notification</h1>
             <p>.............</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
       </div> -->
             
 
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>