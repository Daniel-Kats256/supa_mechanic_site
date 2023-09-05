<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supa mechanic</title>
    <style>
        <?php
            include 'css/blog.css';
        ?>
    </style>
</head>
<body>
    <div class="top">
        <div class="logo">
            <img src="images/logo.jpg" alt="">
        </div>
        <div class="boxes">
            <div> 
                <a href="home.php">home</a>
            </div>
            <div> 
                <a href="about.php">About</a>
            </div>
            <div>
                <a href="services.php">services</a>
            </div>
            <div>
                <a href="blog.php">blog</a>
            </div>
            <div>
                <a href="contact.php">contacts</a>
            </div>
        
        </div>
    </div>
    <header>
        <div>
            
            <h1>
                SUPA TECH MECHANICS
            </h1>
        </div>
    </header>
    <center>
        <div>
           <div>
            <form action="send.php" method="post">
                <input type="name" placeholder="FULLNAMES" name="fname"><br>
                <input type="text" placeholder="phone number" name="phone"><br>
                <input type="email" placeholder="enter email" name="email"><br>
                <input type="location" placeholder="what is your location" name="place"><br>
                <input type="event" placeholder="How can we be of help" name="challenge"><br>
                <textarea name="comment" placeholder="comment" id="" cols="30" rows="10"></textarea>
                <button type="submit" name="send">send</button>
            </form>
            <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo  $_GET['error']?></p>
             <?php } ?>
            <h3>LOCATION</h3>
            <P>We are located at supa Mall opposite Beta shopping Mall, level 6 shop no. 11</P>
            <h3>Phone contact </h3>
            <p> 0700966054 <br>0754975422 <br>0771197280</p>
          </div>
        </div>
    </center>
    <div class="fot">
        <div class="flex">
            <div>
                <h3>
                    Cars
                </h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
            <div>
                <h3>
                   box bodies
                </h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
            <div>
                <h3>
                    Tractors
                </h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
            <div>
                <h3>
                    Motorbikes
                </h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
            <footer class="flex">
                <h2>you will find no mechanic better than supa mechanic </h2>
                <p>&copy; supa tech mech 2023 <br> All rights reserved</p>
            </footer>
        </div>
    </div>
 
</body>
</html>