<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link href="first.CSS" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            .signin .login-box .error{
                background-color: white;
                color: tomato;
                padding: 5px;
                width: 85%;  
                border-radius: 5px;
            }
        </style>
    </head>
    <body class="s-body">
        <div class="signin-container">
            <div class="navigation-bar">
                <div class="right-nav-bar">
                    <div class="left-link-nav">
                        <a href="index.html"><span class="nav-hover-span"></span>Home</a>
                    </div>
                    <div class="right-link-nav">
                        <div class="dropdown">
                            <span><span class="nav-hover-span"></span>Services</span>
                            <div class="dropdown-content">
                                <div class="link-wrapper">
                                    <ul>
                                        <li>
                                            <div class="link1">
                                                <a href="SystemAdminstrator.html"><span class="nav-hover-span"></span> System</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="link2">
                                                <a href="NetworkAdminstrato.html"><span class="nav-hover-span"></span>Network</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="link3">
                                                <a href="CommunicationAndInformation.html"><span class="nav-hover-span"></span>Communication and Network</a>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    
                                    
                                </div>
                                


                            </div>
                        </div>
                    </div>     
                    <div class="right-right-link-nav">
                        <a  href="about.html"><span class="nav-hover-span"></span>About</a>
                    </div>
                </div>
                
                <!-- <div class="left-nav-bar">
                    <a href="index.html"><span class="nav-hover-span"></span>Log Out</a>
                    
                </div> -->
            </div>

    
                
            </div>

            <!--The End Of Navigation Bar -->

          <div class="signin-container">

            <!--The Start of The Introductory/Well Come Part-->
            <div class="signin">
                <div class="login-box">
                    <div class="image-wrapper">
                        <img src="avatar.png" alt="">
                    </div>
                     <?php if (isset($_GET['error'])) { ?>
                         <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <form action="signin.php" method="post" autocomplete="off">
                        <div class="textbox">
                            <input type="text" placeholder="Username" name="username" value="" required >                            
                        </div>
    
                        <div class="textbox">
                            <input type="password" placeholder="Password" name="password" value="" required>
                        </div>
                        <div class="textbox">
                            <div class="textbox">
                                Team Leader<input type="radio" name="job" value="teamleader" checked>      <br>
                                System Adminstrator<input type="radio" name="job" value="systemadminstrator"> <br>
                                Network Adminstrator<input type="radio" name="job" value="networkadminstrator"><br>
                                Communication And Information<input type="radio" name="job" value="communicationandinformation">
                        </div>
                        </div>
                        <button class="signin-button" type="submit" name="submit"><span></span>Sign in</button>
                    </form>

                </div>
            </div>

          </div>

        </div>   

        </div>
          
            <script src="index.js"></script>
        
    </body>
</html> 