<?php
if (isset($_POST['Name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "gym_site";   // ✅ Correct DB name

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Collect form data
    $Name     = $_POST['Name'];
    $Phone_No = $_POST['Phone_No'];  // ✅ must match form
    $Email    = $_POST['Email'];
    $Message  = $_POST['Message'];   // ✅ corrected typo

    // Insert query
    $sql = "INSERT INTO `contact_us` (`Name`, `Phone_No`, `Email`, `Message`) 
            VALUES ('$Name', '$Phone_No', '$Email', '$Message')";

    if ($con->query($sql) === true) {
        echo "✔️ Your response has been submitted!";
    } else {
        echo "❌ ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym</title>
    <STYle>
        *{
           
            margin: 0;
            padding: 0;
        }
        .logo{
            font-size: 15mm;
            margin-top: 0.1%;
            color:brown
        }
        nav{
            display: flex;
            justify-content: space-around;
           
           
        }
        nav::before{
            content: '';
            background-color: black;
            position: absolute;
            height: 8%;
            width: 100%;
            z-index: -1;
            opacity: 8;
        }
        nav ul{
            display: flex;
            text-decoration: none;
            justify-content: space-around;
             margin-top: 1%;
        }
       nav ul li {
            display: flex;
            padding: 3px 22px;
            list-style: none;
            justify-content: space-around;
           

        }
        nav ul li a{
           list-style: none;
           font-size: 6mm;
           text-decoration: none;
           display: flex;
           color: black;

           
        }
        nav ul li a:hover{
          color: black;
          background-color: white;
          border-radius: 30px;
          margin:0.5% ;
        }
        
        .text a{
            text-decoration: none;
            font-size: 6mm;
            color:white;
            background-color: brown;
            margin-top: 1%;
            
            
        }
        button a{
            font-size: 6mm;
            text-decoration: none;
            color:black;
            margin-top: 1%;
        }
        .home{
             display: flex;
             flex-direction: column;
             margin-top: 3px  ;
              color: rgb(253, 252, 252);
              
             justify-content: center;
             align-items: center;
        }
        .home::before{
             content: '';
            background: url("gym3.webp") no-repeat center; 
            background-size: 100% 100%; 
            position:absolute;
            height: 100%;
            width: 100%;
            
            z-index: -1;

            opacity: 0.89;
           
        }
       
        .h1{
            font-size: 10mm;
            margin-top: 1%;
            margin-bottom: 1%;
        }
        .p1{
            font-size: 7mm;
           
            margin-bottom: 1%;
        }
        .p2{
            font-size: 7mm;
           
            margin-bottom: 1%;
        }
        .btn{
            font-size: 7mm;
            text-decoration: none;
           margin-top: 10%;
           margin-left: 0%;
            justify-content: center;
            position: absolute;
            background-color: brown;
            color: white;
            border:2px solid white;
            cursor: pointer;
        }
        ::selection{
            background-color: antiquewhite;
            color: black;
        }
        
        /* services */
        .services{
             display: grid;
            margin-top: 270px;
            margin-bottom: 50PX;
            
           
        }
        .h2{
            display: flex;
            gap: 10px;
            padding-top: 40px;
            margin-left: 650px;
            font-size: 10mm;
        }
        .ser{
            display: flex;
            margin-top: 60px;
           margin-left: 120px;
            justify-content: space-around;
            margin-right: 40px;
           
        }
        .img1{
            border: 2px solid black;
            margin-right: 40px;
           justify-content: center;
        }
        .img1 img{
            padding-left: 140px;
            margin-right: 40px;
        } 
        .img2 img{
            padding-left: 140px;
            margin-right: 40px;
        } 
        .img3 img{
            padding-left: 140px;
            margin-right: 40px;
        } 
      
       
        .img2{
            border: 2px solid black;
            justify-content: center;
            margin-right: 40px;
            
        }
        .img3{
            border: 2px solid black;
            justify-content: center;
             margin-right: 40px;
        }
        .j{
            margin-left: 125px;
        }
        /* CLIENT */
        .CLIENT{
            
            
            height: auto;
        }
        .CLIENT::before{
             content: '';
            background: url("CLIENTS.webp") no-repeat center; 
            background-size: 100% 100%; 
            position:absolute;
            height: 104%;
            width: 100%;
            z-index: -1;
            opacity: 0.3;
           
        }
        .C1{
          padding-top: 40px;
            margin-left: 650PX;
            font-size: 10MM;
        }
        .T1{
            margin-left:350px;
            
        }
        .B1 img{
            margin-right: 10px;
            margin-left: 200px;
        }
        .B2 img{
            margin-left: 200px;
            margin-right: 10px;
        }
        .B3 img{
            margin-left: 200px;
            margin-right: 10px;
        }
        .B4 img{
            margin-left: 200px;
            margin-right: 10px;
        }
        .C111{
            display: flex;
            margin-top: 40px;

        }
        /* contact us */
        .contact{
            
           position: relative;
           padding-bottom: 30px;
            
        }
        .contact::before{
           
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.5;
            background: url("contact\ us.webp")  no-repeat center center/cover ;
        }
        .co1{
            padding-top: 20px;
            padding-bottom: 20px;
            margin-left: 650PX;
            font-size: 10MM;
        }
        .contactbox{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contactbox input,
        .contactbox textarea{
            width:100%;
            padding: 7px;
        }
        .contactbox label{
            font-size: 6mm;
        }
        .icons{
            background-color:rgb(196, 92, 28);
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .socialicons{

            margin-left: 650px;
        }
        .footer{
            margin-left: 550px;
            color: black;
        }
        @media (max-width:1210px){
           /* nav */
           nav{
            flex-direction: column;
            
           }
           nav::before
           {
            height: 30%;
           }
           .logo
           {
            margin: auto;
           justify-self: center;
           }
           nav ul{
            float: none;
            display: block;
            width: 100%;
            text-align: left;
           }
           .text{
          
           margin: auto;
           justify-self: center;
           
           }
            /*home  */
           .home{
            display: flex;
            flex-direction: column;
            margin-top: 20;
            
           }
           .btn{
            margin-top: 200px;
            flex-direction: column;
           }
                   
            /* services */
            .h2{
            padding-top: 40px;
            margin-left: 30px;
            font-size: 10mm;
            display: flex;
            flex-direction: column;
        }
        .ser{ 
            margin-top: 60px;
           margin-left: 30px;
           display: flex;
           flex-direction: column;
           
        }
        .img1{
            border: 2px solid black;
            margin-bottom: 10px;
            
        }
        .img1 img{
             align-self: baseline;
            height: 100px;
            width: 100px;
           
        } 
        .img2 img{
            align-self: baseline;
        } 
        .img3 img{
            align-self: center;
            
        } 
      
       
        .img2{
            border: 2px solid black;
            margin-bottom: 10px;
            
        }
        .img3{
            border: 2px solid black;
           
        }
        .j{
            align-self: baseline;
        }
        
             /* client */
             .C1{
               margin: auto;
               justify-self: center;
               align-items: baseline;
             }
             .C111{
               
                flex-direction: column;
                margin: auto;
                justify-self: center;
                }
             
             .CLIENT{
                background-image: url("CLIENTS.webp") ;
                height: 100%;
                width: 100%;
                background-repeat: no repeat;
                background-size: cover;
                
               
             }
             .T1{
                align-self: center;
            
        }

             .B1 img{
                align-self: center;
                height: 200px;
                width: 200px;
             }
             .B2 img{
                align-self: center;
                height: 200px;
                width: 200px;
             }
             .B3 img{
                height: 200px;
                width: 200px;
                align-self: center;
             }
             .B4 img{
                height: 200px;
                width: 200px;
                align-self: center;
             }
            
             
              /* contact */
              .co1{
                margin: auto;
           justify-self: center;

              }
              .contact{
                background-image: url("contact\ us.webp") ;
                height: 100%;
                width: 100%;
                background-repeat: no repeat;
                background-size: cover;
              }
              .contactbox{
                height: 90%;
                width: 90%;

              }
               /* footer */
               .socialicons{
                margin: auto;
           
           text-align: center;
            }
            .footer{
                margin: auto;
           
           text-align: center;
            }
        }
        @media (max-width:448px){
         /* nav */
         nav{
            flex-direction: column;
            
           }
           nav::before
           {
            height: 30%;
           }
           .logo
           {
            margin: auto;
           justify-self: center;
           }
           nav ul{
            float: none;
            display: block;
            width: 100%;
            text-align: left;
           }
           .text{
          
           margin: auto;
           justify-self: center;
           
           }
            /*home  */
           .home{
            display: flex;
            flex-direction: column;
            margin-top: 20;
            
           }
           .btn{
            margin-top: 350px;
            flex-direction: column;
           }
                   
            /* services */
            .h2{
            padding-top: 40px;
            margin-left: 30px;
            font-size: 10mm;
            display: flex;
            flex-direction: column;
        }
        .ser{ 
            margin-top: 60px;
           margin-left: 10px;
           display: flex;
           flex-direction: column;
           
        }
        .img1{
            border: 2px solid black;
            margin-bottom: 10px;
            
        }
        .img1 img{
             align-self: baseline;
            height: 100px;
            width: 100px;
           
        } 
        .img2 img{
            align-self: baseline;
        } 
        .img3 img{
            align-self: center;
            
        } 
      
       
        .img2{
            border: 2px solid black;
            margin-bottom: 10px;
            
        }
        .img3{
            border: 2px solid black;
           
        }
        .j{
            align-items: center;
        }
        
             /* client */
             .C1{
                margin: auto;
           justify-self: center;
             }
             .C111{
               
                flex-direction: column;
                margin: auto;
                justify-self: center;
                }
             
             .CLIENT{
                background-image: url("CLIENTS.webp") ;
                height: 100%;
                width: 100%;
                background-repeat: no repeat;
                background-size: cover;
                
               
             }
             .T1{
            margin-left:20px;
            
        }

             .B1 img{
                margin-left: 10px;
                height: 100px;
                width: 200px;
             }
             .B2 img{
                margin-left: 10px;
                height: 100px;
                width: 200px;
             }
             .B3 img{
                height: 100px;
                width: 200px;
                margin-left: 10px;
             }
             .B4 img{
                height: 100px;
                width: 200px;
                margin-left: 10px;
             }
            
             
              /* contact */
              .co1{
                margin: auto;
           justify-self: center;

              }
              .contact{
                background-image: url("contact\ us.webp") ;
                height: 100%;
                width: 100%;
                background-repeat: no repeat;
                background-size: cover;
              }
              .contactbox{
                height: 90%;
                width: 90%;

              }
               /* footer */
               .socialicons{
                margin: auto;
           
           text-align: center;
            }
            .footer{
                margin: auto;
           
           text-align: center;
            }
        }
    </STYle>

</head>
<body>
    <nav>
        <div class="logo">BEAT</div>
        <UL>
            <li><a href="index.php" ><i class="fa fa-home"></i>HOME</a></li>
            <li><a href="about us.php"><i class="fa fa-user"></i>ABOUT US</a></li>
            <li><a href="classes.php"><i class="fa fa-edit"></i>CLASSES</a></li>
        </UL>
        <div class="text" style="margin-top: 1%;"><button><a href="#"><i class="fa fa-clone"></i>REGISTER</a></button></div>
    </nav>
    <section class="home">
    <h1 class="h1">Welcome to BEAT</h1>
    <p class="p1">Motivation is what gets you started.Habit is what keeps you going
       </p>
    <p class="p2">We will provide you a good and organised training with wonderful trainers. </p><br>
       <br>
    <button class="btn">Become a Member Now</button>
    </section>
   
   <section class="services">
    <h1 class="h2">OUR <P>SERVICES</P></h1>
    <div class="ser">
    <span class="img1"><img src="workout1.webp" height="100px" width="100px" ><h1 class="j">WORKOUT</h1><p class="p3" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic consequatur quod ipsa architecto 
        veritatis aliquid qui atque, rem quidem inventore odio at corrupti sint debitis ipsum voluptate facilis et. Vero.</p></span>
     <span class="img2"><img src="workout.2.webp"  height="100px" width="100px" ><H1 class="j" >TRAINING</H1><p class= "p4" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, sit nulla molestiae ea sint mollitia totam cum facere. Doloribus veniam ducimus qui sit facilis deserunt eaque sunt dignissimos! Illum, deleniti!</p></span>
      <span class="img3"><img src="zumba.jpeg"  height="100px" width="100px"><H1 class="j">ZUMBA</H1><p class="p5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, sit nulla molestiae ea sint mollitia totam cum facere. Doloribus veniam ducimus qui sit facilis deserunt eaque sunt dignissimos! Illum, deleniti!</p></span>
      </div>
   </section>
   <SECtion class="CLIENT">
    <H1 class="C1">OUR CLIENTS</H1>

    <DIv class="C111">
    <DIV class="C11">
        <SPan class="B1" ><IMG SRC="body builder1.webp" height="300PX" width="400PX"><P class="T1">JOHNSON</P></SPan>
            <SPan class="B2"><IMG SRC="body builder2.webp" height="300PX" width="400PX"><P class="T1">pira</P></SPan>
    </DIV>
    <DIV class="C12">
        <SPan class="B3" ><IMG SRC="body builder3.webp" height="300PX" width="400PX"><P class="T1">JOHNSON</P></SPan>
            <SPan class="B4"><IMG SRC="body builder4.webp" height="300PX" width="400PX"><P class="T1">JOHNSON</P></SPan>
    </DIV>
    </DIv>
</SECtion >
<section class="contact">
 <h1 class="co1" >Contact Us</h1>
 <div class="contactbox">
 <form action="index.php" method="post">
        <div class="formgrp">
            <label for="Name">Name</label>
            <input type="text" size="30" placeholder="Enter your Name" name="Name"></div>
            <div class="formgrp">
            <label for="Number">Phone_No</label>
            <input type="number" size="30" name="Phone_No" placeholder=" Enter Number">
        </div>
            <div class="formgrp"> 
            <label for="Name">Email</label>
            <input type="email" size="30" name="Email" placeholder="Enter your Email ">
        </div>
        <div class="formgrp"> 
            <label for="Name">Message</label>
           <textarea name="Message" id="" cols="30" rows="10"></textarea>
        </div>
        <div><center>
            <button><input type="submit" value="Submit"></button>
            <button><input type="Reset" value="reset"></button>
        </center>
        </div>
       
    </form>
   </div>

   </section>
   <section class="icons">
    <div class="socialicons">
        <a href="https://www.facebook.com/kriti.saha.102?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/kankana-saha-072947287?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://youtube.com/@kankanasaha2486?si=0ZFc93wINuIEFxnU"><i class="fa-brands fa-youtube"></i></a>
    </div>    
   
   <div class="footer">
    <p>copyright &copy;2022;designed by Kankana Saha</p>
   </div>
</section>
</body>
</html>