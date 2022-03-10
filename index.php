<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!------------------LIght BOx for Gallery-------------->
<link rel="stylesheet" href="lightbox.min.css">
<script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
<!------------------LIght BOx for Gallery-------------->
<title>Application-1</title>
</head>
<body>

<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
<script src="config.js"></script>
<script src="profile.js"></script>
    <!-------------------------------NAvigation Starts------------------>

    <nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color:#3097D1">
        <a href="login.html" class="navbar-brand"><img src="img/brand-white.png" alt="logo" class="img-fluid" width="80px" height="100px"></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>


        <div class="collapse navbar-collapse" id="responsive">
            <ul class="navbar-nav mr-auto text-capitalize">
                <li class="nav-item"><a href="index.html" class="nav-link active">home</a></li>
                <li class="nav-item"><a href="profile.html" class="nav-link">profile</a></li>
                <li class="nav-item"><a href="#modalview" class="nav-link" data-toggle="modal">messages</a></li>
                <li class="nav-item"><a href="notification.html" class="nav-link">docs</a></li>

                
            </ul>

            <form action="" class="form-inline ml-auto d-none d-md-block">
                <input type="text" name="search" id="search" placeholder="Search" class="form-control form-control-sm">
            </form>
            <a href="notification.html" class="text-decoration-none" style="color:#CBE4F2;font-size:22px;"><i class="far fa-bell ml-3 d-none d-md-block"></i></a> 

            <a href="#modallogout" data-toggle="modal"><img src="img/avatar-dhg.png" alt="" class="rounded-circle ml-3 d-none d-md-block" id="profilePicture" width="32px" height="32px"></a>

            <div class="modal" id="modallogout" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CodeXplorers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Do you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Log Out</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
            </div>
            



        </div>





    </nav>

    <!---------------------------------------------Ends navigation------------------------------>

    <!---------------------------MOdal Section  satrts------------------->

    <div class="modal fade" id="modalview">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">

            <div class="modal-content">


                <div class="modal-header">
                    <div class="modal-title h4">Messages</div>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <div class="modal-body">


                    <ul class="list-unstyled">


                     <a href="#" class="text-decoration-none">
                        <li class="media hover-media">
                           

                                <img src="img/avatar-dhg.png" id="profilePicture" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                        

                                <div class="media-body text-dark">
                                        <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                        </li>
                    </a>
                    <hr class="my-3">


                    
                    <a href="#" class="text-decoration-none">
                            <li class="media hover-media">
                               
                                    <img src="img/avatar-fat.jpg" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
    
                                    <div class="media-body text-dark">
                                            <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                            <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    
                                    </div>
    
                            </li>
                        </a>


                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">
                               
                                    <img src="img/avatar-mdo.png" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
    
                                    <div class="media-body text-dark">
                                            <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                            <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    
                                    </div>
    
                            </li>
                        </a>

                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                                <li class="media hover-media">
                                   
                                        <img src="img/avatar-dhg.png" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
        
                                        <div class="media-body text-dark">
                                                <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        
                                        </div>
        
                                </li>
                            </a>
                            <hr class="my-3">
        
        
                            
                            <a href="#" class="text-decoration-none">
                                    <li class="media hover-media">
                                       
                                            <img src="img/avatar-fat.jpg" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
            
                                            <div class="media-body text-dark">
                                                    <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
                                            </div>
            
                                    </li>
                                </a>
        
        
                                <hr class="my-3">
        
        
                                <a href="#" class="text-decoration-none">
                                    <li class="media hover-media">
                                       
                                            <img src="img/avatar-mdo.png" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
            
                                            <div class="media-body text-dark">
                                                    <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
                                            </div>
            
                                    </li>
                                </a>

                        
                                <hr class="my-3">
                                <a href="#" class="text-decoration-none">
                                        <li class="media hover-media">
                                           
                                                <img src="img/avatar-dhg.png" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
                
                                                <div class="media-body text-dark">
                                                        <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                
                                                </div>
                
                                        </li>
                                    </a>
                                    <hr class="my-3">
                
                
                                    
                                    <a href="#" class="text-decoration-none">
                                            <li class="media hover-media">
                                               
                                                    <img src="img/avatar-fat.jpg" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
                    
                                                    <div class="media-body text-dark">
                                                            <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                                            <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                                                    </div>
                    
                                            </li>
                                        </a>
                
                
                                        <hr class="my-3">
                
                
                                        <a href="#" class="text-decoration-none">
                                            <li class="media hover-media">
                                               
                                                    <img src="img/avatar-mdo.png" alt="img" width="60px" height="60px" class="rounded-circle mr-3">
                    
                                                    <div class="media-body text-dark">
                                                            <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                                            <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                                                    </div>
                    
                                            </li>
                                        </a>
    
    
                    </ul>
                  

                </div>
            </div>


        </div>


    </div>

    <!-------------------------------MOdal Ends---------------------------->



    <!-------------------------------------------Start Grids layout for lg-xl-3 columns and (xs-lg 1 columns)--------------------------------->


    <div class="container">
        <div class="row">


            <!--------------------------left columns  start-->

            <div class="col-12 col-lg-3">

                <div class="left-column">


                    <div class="card card-left1 mb-4" >
                        <img src="img/photo-1455448972184-de647495d428.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body text-center ">

                            <img src="img/avatar-dhg.png" alt="img" width="120px" height="120px" id="profilePicture1" class="rounded-circle mt-n5">
                            <h5 class="card-title" id="profileName1">Anushree Dutt</h5>

                            <p class="card-text text-center mb-2">Hi I am a CodeXplorer!</p>
                            <ul class="list-unstyled nav justify-content-center">
                               <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Dev Buddies <br> <strong>3</strong></li></a>
                              <!-- <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Enimes <br> <strong>1</strong></li></a>  -->
                            </ul>

                        </div>




                    </div>


                    <div class="card shadow-sm card-left2 mb-4">
                        <div class="card-body">

                                <h5 class="mb-3 card-title">About <small><a href="updateInfo.html" class="ml-1">Edit</a></small></h5>

                                <p class="card-text"> <i class="fas fa-calendar-week mr-2"></i> Went to <a href="#" class="text-decoration-none">TSEC</a></p>

                                <p class="card-text"> <i class="fas fa-user-friends mr-2"></i> See <a href="#" class="text-decoration-none">Friends list</a></p>
                                <p class="card-text"> <i class="far fa-building mr-2"></i> Works at <a href="#" class="text-decoration-none">Github</a></p>
                                <p class="card-text"> <i class="fas fa-home mr-2"></i> Lives in <a href="#" class="text-decoration-none">Mumbai</a></p>
                                <p class="card-text"> <i class="fas fa-map-marker mr-2"></i> From <a href="#" class="text-decoration-none">Mumbai, India</a></p>




                        </div>
                     




                    </div>




                    <div class="card shadow-sm card-left3 mb-4">

                        <div class="card-body">
                            <h5 class="card-title">Photos<small class="ml-2"><a href="#">.Edit </a></small></h5>

                            <div class="row">
                                <div class="col-6 p-1">
                                    <a href="img/left1.jpg" data-lightbox="id" ><img src="img/left1.jpg" alt="img" class="img-fluid my-2"></a>  
                                    <a href="img/left2.jpg"data-lightbox="id"><img src="img/left2.jpg" alt="img" class="img-fluid my-2"></a>
                                    <a href="img/left3.jpg"data-lightbox="id"><img src="img/left3.jpg" alt="img" class="img-fluid my-2"></a>

                                </div>


                                <div class="col-6 p-1">
                                        <a href="img/left4.jpg"data-lightbox="id"><img src="img/left4.jpg" alt="img" class="img-fluid my-2"></a>
                                        <a href="img/left5.jpg"data-lightbox="id"><img src="img/left5.jpg" alt="img" class="img-fluid my-2"></a>
                                        <a href="img/left6.jpg"data-lightbox="id"><img src="img/left6.jpg" alt="img" class="img-fluid my-2"></a>
    
                                    </div>

                            </div>

                        </div>


                    </div>
                
                </div>

            </div>

 <!--------------------------Ends Left columns------------------------->

<div>
    <img src="https://www.google.com/search?q=profile+image&rlz=1C1CHBF_enIN900IN900&sxsrf=APq-WBst49D8Wcx2kri0UkasjlS2a_vFfg:1646824817100&tbm=isch&source=iu&ictx=1&vet=1&fir=H6pHpB03ZEAgeM%252Cwg0CyFWNfK7o5M%252C_%253B-H_ExttvR7ahYM%252Cb5C9ViMmmhpq-M%252C_%253BeHQKa74ZnnpTfM%252CSixlWtBpRVa7SM%252C_%253Bc4DKZX1IkCpVhM%252Cb5C9ViMmmhpq-M%252C_%253BgRmIHR3owD_V0M%252CpmE0x0RqkiBF7M%252C_%253BjAbbSdWZuoI5VM%252C1TOa8nNeHRwggM%252C_%253BS2NNOWEtx4Sh8M%252CWIYPytbMl_8XfM%252C_%253BuXISzfBmyACS2M%252CUaTT14cKZXZhDM%252C_%253B31dvrCPLIkewdM%252CdSpQ5-chSmGJjM%252C_%253BiqUapMoekRrKBM%252Cy7i4Swccn0rqpM%252C_%253B6LZBULRxg_WfYM%252CgMlIcsQMiG-F2M%252C_%253B8WoEgpJPeH0e2M%252CFvQHUVZ-cx81xM%252C_%253B-h20Jdis7Qx6mM%252C-m0v_GLbqugcoM%252C_%253BkEuHdfl2sp9d1M%252COgWk3wP_2xVHMM%252C_%253BJpaFCmffhUdABM%252CeirPelkp9eoYkM%252C_&usg=AI4_-kQjccr7G1RsnUETMwfLiM4HCXJcSA&sa=X&ved=2ahUKEwiLzOvB9Lj2AhW9rVYBHdE1AcMQ9QF6BAgEEAE#imgrc=JpaFCmffhUdABM" id="profileImage">
    <div id="profileName"></div>

</div>



 <!---------------------------------------Middle columns  start---------------->

 <div class="container col-12 col-lg-6">
    <br><br>
    <div class="row">
      <a href="http://localhost/tsecHacks/profile.html?userId=jOaREOYFtWVw0OYCfJlj1DrmYDl1">
      <div class="col-sm ">
        <img src="https://lh3.googleusercontent.com/a-/AOh14GiN4fF1HOMliOfimysDmb7AaeSv4rLqUh-wfUjHwg=s96-c" alt="img" width="150px" height="150px" class="rounded-circle mb-4">
        <h6>Jaden Furtado</h6>
        <a href="#" class="btn btn-outline-info btn-sm mb-3"><i class="fas fa-user-friends"></i>Follow </a>
      </div>
      </a>
      <div class="col-sm">
        <a href="http://localhost/tsecHacks/?userId=jOaREOYFtWVw0OYCfJlj1DrmYDl1">
        <img src="https://lh3.googleusercontent.com/a/AATXAJxBIMk7H_3HUhSAisHVOj92TYU9tQ3DvrmcbOuY=s96-c" alt="img" width="150px" height="150px" class="rounded-circle">
        <h6>Anusherre Dutt</h6>
        <a href="#" class="btn btn-outline-info  btn-sm"><i class="fas fa-user-friends"></i>Follow </a>
    </a>
      </div>
      <div class="col-sm">
        <a href="http://localhost/tsecHacks/profile.html?userId=kkhaaFgEQ8aEWj9ZKfErP3atRzo2">
        <img src="https://lh3.googleusercontent.com/a/AATXAJx8AAaCkWxoa0yA9QX5dfyqUHSxS2i0ojpeZRcw=s96-c" alt="img" width="150px" height="150px" class="rounded-circle mb-4">
        <h6>Yohan Gupta</h6>
        <a href="#" class="btn btn-outline-info btn-sm mb-3"><i class="fas fa-user-friends"></i>Follow </a>
        </a>
      </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm ">
          <img src="img/avatar-dhg.png" alt="img" width="150px" height="150px" class="rounded-circle mb-4">
          <h6>Jacob Thornton</h6>
          <a href="#" class="btn btn-outline-info btn-sm mb-3"><i class="fas fa-user-friends"></i>Follow </a>
        </div>
        <div class="col-sm">
          <img src="img/avatar-fat.jpg" alt="img" width="150px" height="150px" class="rounded-circle">
          <h6>Mark otto</h6>
          <a href="#" class="btn btn-outline-info  btn-sm"><i class="fas fa-user-friends"></i>Follow </a>
        </div>
        <div class="col-sm">
          <img src="img/avatar-dhg.png" alt="img" width="150px" height="150px" class="rounded-circle mb-4">
          <h6>Jacob Thornton</h6>
          <a href="#" class="btn btn-outline-info btn-sm mb-3"><i class="fas fa-user-friends"></i>Follow </a>
        </div>
      </div>
  </div>


           

<!------------------------Middle column Ends---------------->








<!---------------------------Starts Right Columns----------------->


                
<!-- <div class="col-12 col-lg-3">


    <div class="right-column">

        <div class="card shadow-sm mb-4" >
            <div class="card-body">
                <h6 class="card-title">Sponsored</h6>
                <img src="img/right1.jpg" alt="card-img" class="card-img mb-3">
                <p class="card-text text-justify"> <span class="h6">It might be time to visit Iceland.</span> Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice.  What are you waiting for?</p>
                <a href="#" class="btn btn-outline-info card-link btn-sm">Buy a ticket</a>


            </div>

        </div>


        <div class="card shadow-sm mb-4">

            <div class="card-body">

                    <h6 class="card-title ">Likes <a href="#" class="ml-1"><small>.View All</small> </a> </h6>
                    <div class="row no-gutters d-none d-lg-flex">
                        <div class="col-6 p-1">
                                <img src="img/avatar-dhg.png" alt="img" width="80px" height="80px" class="rounded-circle mb-4">
                                <img src="img/avatar-fat.jpg" alt="img" width="80px" height="80px" class="rounded-circle">



                        </div>
                        <div class="col-6 p-1 text-left">
                            <h6>Jacob Thornton @fat</h6>
                            <a href="#" class="btn btn-outline-info btn-sm mb-3"><i class="fas fa-user-friends"></i>Follow </a>

                            <h6>Mark otto</h6>
                            <a href="#" class="btn btn-outline-info  btn-sm"><i class="fas fa-user-friends"></i>Follow </a>

                        </div>

                    </div>

            </div>

            <div class="card-footer">

                <p class="lead" style="font-size:18px;">Anushree likes working on the Front End.</p>
            </div>
            


        </div> -->

        <!-- <div class="card shadow-sm">
            <div class="card-body">
                <p>&copy; 2018 Bootstrap

                        <a href="#">About</a>
                        <a href="#">Help</a>
                        <a href="#">Terms</a>
                        <a href="#">Privacy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Ads </a>
                        <a href="#">Info</a>
                        <a href="#">Brand</a>
                        <a href="#">Blog</a>
                        <a href="#">Status</a>
                        <a href="#">Apps</a>
                        <a href="#">Jobs</a>
                        <a href="#">Advertise</a>
                </p>
            </div> -->

        </div>
    </div>

</div>

</div>


<!------------------------Light BOx OPtions------------->
<script>
        lightbox.option({
          
        })
    </script>



<!------------------------Light BOx OPtions------------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->

</html>