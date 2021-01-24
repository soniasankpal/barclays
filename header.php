

<body>
    <div class="header">
            <a href="#default" class="logo">BookStore</a>
            <div class="header-right">
              <a href="home">Home</a>
              <?php 
								if(session_id() == ''){
									session_start();
								}
								if(!isset($_SESSION['username']) ){ ?>
                    
										<li class="active"><a href="signin.php">SIGNIN</a></li>
										<li ><a href="signup.html">Sign Up</a></li>
								<?php }else { ?>
								<li ><a href="#">Hello <?php echo $_SESSION['username'];?></a></li>
								<li ><a href="logout.php">Logout</a></li>
								<?php }?>
              
            </div>
          </div>
    </body>