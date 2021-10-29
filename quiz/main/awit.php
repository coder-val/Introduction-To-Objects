<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            transition: all ease-in-out .25s;
        }
        body{
            background: #1a1a1a;
            color: white;
            position: relative;
            display: block;
            
        }
        #header{
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }
        .container {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
        }
        h1{
            font-size: 60px;
            font-family: 'Poppins', sans-serif;
            color: #EDEDED;
        }
        
        .welcome{
            max-width: 1100px;
            width: 100%;
            margin-bottom: 35px;
        }
        h2{
            position: relative;
            font-size: 28px;
            font-family: 'Raleway', sans-serif;
            font-weight: normal;
            margin-bottom: 13px;
            color: #d1d1d1;
        }
        span{
            color: white;
            font-weight: 600;
            transition: all ease-in-out .25s;
        }
        span:hover{
            color: #F9D276;
            cursor: pointer;
        }
        #line{
            color: white;
            font-weight: 600;
            position: relative;
            width: 100%;
            cursor: pointer;
        }

        #line:hover::after{
            width: 30%;
            
        }

        #line::after{
            content: '';
            display: block;
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 100%;
            height: 3px;
            background: linear-gradient(to left, #F70D1C 0%, #FF6200 90%);
            border-radius: 3px;
            
        }
        
        strong{
            color: #F9D276;
            cursor: pointer;
        }
        strong:hover{
            color: #FFBD44;
        }
        .socials{
            display: flex;
            margin-top: 50px;
        }
        .socials a{
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            line-height: 1;
            margin-right: 10px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        .socials a:hover{
            background: #F70D1C;
        }
        .socials a img{
            width: 20px;
            height: 20px;
        }
        .socials a.back{
            margin-left: 15px;
        }
        .socials a.back:hover{
            background: #00CA4E;
        }
    </style>
    <title>WELCOME!</title>
</head>
<body>
    <header id="header">
        <div class="welcome">
            <h1>
                <?php 
                    $name = $_POST["clientName"];
                    for ($i = 0; $i < strlen($name); $i++) {
                        if (substr($name, $i, 1) == " "){
                            echo "Hello " . substr($name, 0, $i) . " !";
                            break;
                        }
                    }
                ?>
            </h1>
        </div>
        <div class="container">
            <h2><?php $awit = new awit; echo "<strong>"; $awit->client_Name(); echo "</strong> works at <span id='line'>"; $awit->company_Name(); echo "</span>.";?></h2>
            <h2><?php $awit = new awit; echo "A company based in <span>"; $awit->company_Address(); echo "</span>.";?></h2>
            <h2><?php $awit = new awit; echo "Employed since <span>"; $awit->Employment_Date(); echo "</span>.";?></h2>
            <div class="socials">
                <a href="#"><img src="./icons/facebook-brands.svg" alt=""></a>
                <a href="#"><img src="./icons/instagram-brands.svg" alt=""></a>
                <a href="#"><img src="./icons/twitter-brands.svg" alt=""></a>
                <a href="./index.html" class="back"><img src="./icons/arrow-alt-circle-left-solid.svg" alt=""></a>
            </div>
        </div>
    </header>
    
    <?php
        class awit{
            function client_Name(){
                echo $_POST["clientName"];
            }
            function company_Name(){
                echo $_POST["companyName"];
            }
            function company_Address(){
                echo $_POST["companyAddress"];
            }
            function Employment_Date(){
                $dmy = $_POST["employmentDate"];
                $d = substr($dmy, 8, 2);
                $m = substr($dmy, 5, 2);
                $y = substr($dmy, 0, 4);
                // echo $d . "/" . $m . "/" . $y;
                $month = array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                $mm = $month[((int)$m)];
                echo $mm . " " . $d . ", " . $y;
            }
        }
    ?>
</body>
</html>