<!doctype html>
<html lang="en">
  <head>
    <title>Dickens Zihua Fan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!-- full version of jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
    <script>

    //scrollUpBotton
    $(document).ready(function(){
        //console.log( "ready!" );
        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('#scrollTopButton').fadeIn();
            } else {
                $('#scrollTopButton').fadeOut();
            }
        });

        //Click event to scroll to top
        $('#scrollTopButton').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
        
         //menu scroll down
        $('#nav-tech-stack').click(function(){
            console.log('I have clicked!');
            var jumpTo = $('#tech-stack').offset().top - 30;
            $('html, body').animate({scrollTop: jumpTo},800);
        });

        $('#nav-cv').click(function(){
            console.log('I have clicked!');
            var jumpTo = $('#cv').offset().top - 60;
            $('html, body').animate({scrollTop: jumpTo},800);
        });

        $('#nav-contact').click(function(){
            console.log('I have clicked!');
            var jumpTo = $('#contact').offset().top - 60;
            $('html, body').animate({scrollTop: jumpTo},800);
        });

        $('#nav-visit').click(function(){
            console.log('I have clicked!');
            var jumpTo = $('#visit').offset().top - 30;
            $('html, body').animate({scrollTop: jumpTo},800);
        });

        $('#nav-connect').click(function(){
            console.log('I have clicked!');
            var jumpTo = $('#connect').offset().top - 80;
            $('html, body').animate({scrollTop: jumpTo},800);
        });
    });
    </script>
    
</head>
  <body>

    <!--
        In the bootstrap system,

        each component will begin wrapped with <div class="">, class is equal to its wrapper class

        i.e. container is the wrapper class, then wrapped with row, then wrapped with col-**-**
    -->

    <!-- #################### Navigation #################### -->
    <!--navbar is container, sticky-top is sticky to top, bglight and navbarlight setup the color-->
    
    <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-dark navbar-font fixed-top">
        <div class="container-fluid">
            <!--toggle button of navbar menu-->
            <button class="navbar-toggler" type="button" data-toggle="collaspe" id="" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--navbar menu-->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <!--push the nav-menu to righthand side -->
                <ul class="navbar-nav mr-auto">

                    <!--navbar list -->
                    <li class="nav-item">
                        <a id="nav-tech-stack" href="#" class="nav-link"> 
                           <span class="fa fa-server"></span> Tech-Skill</a>
                    </li>
                    <li class="nav-item">
                            <a id="nav-cv" href="#" class="nav-link">
                                    <span class="fa fa-newspaper-o"></span> CV</a>
                    </li>
                    <li class="nav-item">
                            <a id="nav-contact" href="#" class="nav-link">
                               <span class="fa fa-envelope"></span> Contact</a>
                    </li>
                    <li class="nav-item">
                            <a id="nav-visit" href="#" class="nav-link">
                               <span class="fa fa-map"></span> Visit</a>
                    </li>
                    <li class="nav-item">
                            <a id="nav-connect" href="#" class="nav-link">
                               <span class="fa fa-group"></span> Connect</a>
                    </li>
                </ul>

                <!-- login and Rego -->
                <ul style="display:none;" class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php"><span class="fa fa-pencil-square-o"></span> Register</a>
                    </li>

                    <!-- 
                        Dropdown login form 
                        1. i, attr: class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        2. div, class="dropdown-menu" aria-labelledby="navbarDropdown"
                        3. 
                    -->
                    <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fa fa-user"></span> Login
                                  </a>
                        <div class="dropdown-menu dropdown-menu-right my-2" aria-labelledby="navbarDropdown">
                            <form class="m-3" action="login.php" method="POST">
                                <div class="form-group">
                                    <label for="username">Username: </label>
                                    <input type="email" name="username" id="username" placeholder="example@mail.com">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password: </label>
                                    <input type="password" name="pwd" id="pwd">
                                </div>
                                <div class="dropdown-divider"></div>
                                <button type="submit" class="d-block btn btn-primary btn-sm mx-auto">Go</button>
                                <a href="forgetpwd" class="my-2 d-block small text-center">Forget Password</a>
                            </form>  
                        </div>
                    </li>
                </ul>              
            </div>     
        </div>
    </nav>

   <!-- #################### Carousel Image Sliders #################### -->
   <!--carousel slide class contains all three things: indicator, image and control-->
   <!-- add .active to anyone of the three images, otherwise carousel won't be displayed-->
    <div id="slides" class="carousel slide" data-ride="carousel">

        <!--The following are the indicators of carousel which bring us to different slides-->
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>

        <!--The three images-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/resources/img/deadship.jpg" alt="deadship" class="img-responsive" width="100%" max-height="600px">
                <!--wrapped with wrapper class to add caption-->  
            </div>
            <div class="carousel-item">
                <!-- w-100 is the same as width:100%-->
                    <img src="/resources/img/onetree.jpg" alt="onetree" class="img-responsive w-100"  max-height="600px">
            </div>
            <div class="carousel-item">
                    <img src="/resources/img/manytrees.jpg" alt="manytrees" class="img-responsive" width="100%" ma-height="600px">
            </div>
            <div class="carousel-caption">
                    <h1 class="display-2">Welcome</h1>
                    <h3 class="">Here is my little place that you can find more about me</h3>
                    <button style="display:none;" type="button" class="btn btn-outline-light btn-lg">Registration</button>
                    <button style="display:none;" type="button" class="btn btn-primary btn-lg">Get Started</button>
                </div>
        </div>

        <!-- control wrapper carousel-control-prev -->
        <!--href: # means that it will point to the outermost wrapper div, i.e. #slides in this example-->
        <!-- <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev"> -->
            <!-- aria-hidden = true/false reflects the effect that the arrow appears when cursor move on the image. -->
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <!-- <span class="sr-only">Previous</span> -->
        <!-- </a> -->
        <!-- control wrapper carousel-control-next -->
        <!-- <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->

        
    </div>

    <!-- ############################ Jumbotron ############################ -->
    <div class="container-fluid" id="cv">
        <!-- jumbotron is the outermost wrapper class-->
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-8"><p class="lead">For any career purpose, feel free to download my CV</p> 
            </div>
            <div class="col-xs-12 col-sm-4">
                <!-- in order to display the button in the center position, 
                    we use m(margin)x(both left and right)-auto(margin-right == margin-left),
                    precondition is that the display element should be in block rather than inline(becauseof width property)
                -->
                <form method="post" action="downloadcv.php">
                    <button class="btn btn-outline-primary btn-lg d-block mx-auto" type="submit">Download</button>
                </form>
                
            </div>
        </div>
    </div>

    <!-- ############################ Welcome Section ############################ -->
    <div id="tech-stack" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-4 mx-auto">
                <h1 class="display-4">My Tech Stack</h1>
                <!--horizontal line can only be placed within div, size attribute is deprecated in HTML5-->
                <hr class="my-4">
            </div>
            
            <div class="col-10 m-auto">
                <p class="lead">Welcome to my personal webiste. The followng programming technique form my tech-stack. It includes <b>Front-End</b>, <b>Back-End</b>, <b>Database</b> and <b>Framework</b>. </p>
            </div>
        </div>
    </div>

    <!-- ############################ Three Column Section ############################ -->
    <div class="container-fluid padding">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-3 text-center mt-5">
                <img class="d-block w-25 mx-auto code-logo" src="resources/img/h5c3.png" alt="h5c3">
                <h3>HTML5/CSS3</h3>
                <!-- <p class="lead">Built with the latest of HTML and CSS</p> -->
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 text-center mt-5">
                    <img class="d-block w-25 mx-auto code-logo" src="resources/img/php.png" alt="php">
                    <h3>PHP 7</h3>
                    <!-- <p class="lead">Built with the latest of PHP</p> -->
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 text-center mt-5">
                    <img class="d-block w-25 mx-auto code-logo" src="resources/img/github.png" alt="github">
                    <h3>Github</h3>
                    <!-- <p class="lead">Github work as version control system</p> -->
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 text-center mt-5">
                    <img class="d-block w-25 mx-auto code-logo" src="resources/img/laravel.png" alt="laravel">
                    <h3>Laravel</h3>
                    <!-- <p class="lead">Built system based on php framework laravel</p> -->
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!-- ############################ Two Column Section ############################ -->
    <div id="contact" class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>Hi there, ...</h2>
                <p>Feel free to go through it to explore something funny.</p>
                <p>This homepage just act as my personal porfolio</p>
                <p>If you have any question, feel free to contact me...</p>
                <br>
                <a href="#" class="btn btn-primary mb-5" data-toggle="collapse" data-target="#contact-form">contact me</a>
            </div>
            <div class="col-lg-6">
                <!-- img-fluid is used in B4, but img-responsive is used in B3 -->
                <img src="resources/img/global.jpg" class="img-fluid rounded img-rounded" alt="global">
            </div>
            
            <div id="contact-form" class="col-sm-12 ml-auto mt-5 collapse">
                <hr class="my-4">
                <h2 class="text-center my-4">Email Me...</h2>
                <form class="" action="">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="customer_email" id="email" aria-describedby="emailHelpId" placeholder="Your Email ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="customer_fname">First Name</label>
                        <div class="col-sm-10"><input class="form-control" type="text" name="customer_fname" id="customer_fname" aria-describedby="emailHelpId" placeholder="David"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="customer_lname">Last Name</label>
                        <div class="col-sm-10"><input class="form-control" type="text" name="customer_lname" id="customer_lname" aria-describedby="emailHelpId" placeholder="Jones"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="customer_phone">Phone</label>
                        <div class="col-sm-10"><input class="form-control" type="tel"  name="customer_phone" id="customer_phone" aria-describedby="emailHelpId" placeholder="0450000000"></div>
                    </div>
                    <div class="form-group rown">
                        <button class="btn btn-primary btn-lg">Send</button>
                    </div>
                </form>
            </div>
            
            
        </div>
        <!--my means margin top and buttom-->
        <hr class="my-4">
    </div>

    <!--
        when it implements a button to toggle a collapses, the structure of code should be like this

        button, attr: data-toggle="collapse"; data-target="#targetID PS: dont miss out '#' "

        div, attr: class="collapse"; id="#targetID"
    -->

    <!-- ############################ Meet the team ############################ -->


    <div id="visit" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">The place I have been to</h1>
                <hr class="my-4">
            </div>
        </div>
    </div>

    <!-- ############################ Cards ############################ -->

    <div  class="container-fluid padding">
            <div class="row padding">
                <div class="col-md-4">
                    <div class="card">
                        <img src="resources/img/korea.jpg" class="card-img-top" alt="team1">
                        <div class="card-body">
                            <h4 class="card-title">South Korea</h4>
                            <p class="card-text">I had been to Korean in 2017. It was a nice place to go. Korea’s dense urban centers, developed parks and recreation facilities, high tech infrastructure and ultra modern public transportation systems are just some of the things that have made Korea a recognized hotspot for international business and travel. Seoul Olympic Park, located in the capital city of Seoul, preserves the spirit of the 1988 Summer Olympics and is open all day providing multipurpose areas for sports, leisure and a variety of cultural activities.

                                    To this day, South Korea remains one of the world’s most ethnically homogenous countries. It is believed that the people of South Korea are direct descendants of several migratory Mongol tribes who ventured into the Korean Peninsula about a half million years ago. </p>
                            <!-- <button type="button" class="btn btn-outline-primary bg-md">Read More</button> -->
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="card">
                        <img src="resources/img/melbourne.jpg" class="card-img-top" alt="team1">
                        <div class="card-body">
                            <h4 class="card-title">Melbourne</h4>
                            <p class="card-text">Melbourne is one of the most comfortable and situable city for livnig. I came here at 2012 for my bachelor study. Melbourne, with a population of more than three million, is Australia's second largest city. It is regarded as the cultural and fashion capital of Australia and renowned for its fine restaurants. It is a true multicultural city with more than one quarter of Melbourne's inhabitants born overseas. The city is extremely racially tolerant and very easy to work and live in. Visitors enjoy a warm and friendly reception.</p>
                            <!-- <button type="button" class="btn btn-outline-primary bg-md">Read More</button> -->
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="card">
                        <img src="resources/img/china.jpg" class="card-img-top" alt="team1">
                        <div class="card-body">
                            <h4 class="card-title">China</h4>
                            <p class="card-text">I was born in China. It is a beautiful Country.Viewing the world map, you will find that China is a vast country situated at the eastern part of Eurasia and the western coast of the Pacific Ocean. Covering a land area of 3,706,581 square miles (9,600,000 square kilometers), China is the third largest of the world, inferior to Russia and Canada. It is 3,231 miles long from east to west and 3,417.5 miles long from north to south. With the entire territory shaping like a rooster, its northernmost end reaches Mohe in Heilongjiang Province; the southernmost is at Zengmu Ansha in Nansha Islands, the easternmost at conjunction of Heilongjiang River and the Wusuli River, while the western at the Pamirs.</p>
                            <!-- <button type="button" class="btn btn-outline-primary bg-md">Read More</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

    <!-- ############################ Connect ############################ -->
    <div id="connect" class="container-fluid padding">
        <div class="row padding text-center">
            <div class="col-12"><h2>Connect</h2></div>
            <div class="col-12 mt-2"> <p class="lead">Follow Me On These Social Media</p></div>
            
        </div>

        <!--
            There are two way to do the alignment of the content
            1. use container, row, col-12 and text-center the text
            2. use d-flex, justify-content-center
        -->
        <div class="social d-flex justify-content-center">
                <a href="https://www.facebook.com/dickens.fan.7" class="px-5"><i class="fa fa-facebook-official"></i></a>
                <a href="https://www.linkedin.com/in/zihua-dickens-fan-449860a5" class="px-5"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>


    
    <!-- ############################ Footer ############################ -->
    <div id="footer" class="container-fluid padding footer">
        <div class="row text-center">
            <div class="col-md-4">
                    <hr class="light">
                <h3>Dickens Zihua Fan</h3>

                <p>+61 450 750 209</p>
                <p>dickensdjj@outlook.com</p>

            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>My Hours</h5>
                <hr class="light">
                <p>Monday: 9am - 5pm</p>
                <p>Saturday - Sunday: Party Time</p>
            </div>
            <div class="col-md-4">
                    <hr class="light">
                    <h5>My Address</h5>
                    <hr class="light">
                    <p>380 little lonsdale street</p>
                    <p>Melbourne</p>
                    <p>VIC</p>
                    <p>3000</p>
            </div>
        </div>
        <div class="col-12 text-center footer">
            <hr>
            <h5>&copy; Dicknes Zihua Fan</h5>
        </div>
         
    </div>

    <!-- ############################ Extra Section ############################ -->
    <button id="scrollTopButton" class="btn btn-primary btn-lg scrollTopButton"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></button>
    
</body>
</html>