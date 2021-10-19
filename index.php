<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://raw.githubusercontent.com/coder-val/images/main/csu%20logo.png">
    <title>Lab 01: Introduction to Objects</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            background-color: #171717;
            color: #EDEDED;
        }
        .line1{
            margin-top: -70px;
            font-weight: 500;
            font-size: 5rem;
            margin-bottom: -15px;
            width: 1100px;
        }
        .l{
            width: 82%;
            border: 5px solid #DA0037;
            border-radius: 4px;
            margin-top: 0px;
            margin-bottom: 15px;
        }
        .line2{
            font-weight: 300;
            font-size: 1.75rem;
            letter-spacing: 4px;
            transition:  .3s ease;
            cursor: pointer;
            font-weight: 500;
            width: 550px;
        }
        .sp{
            display: inline-block;
            font-size: 7.5rem;
            color: #FFA931;
            cursor: pointer;
            transition: .3s ease;
        }
        .name{
            display: inline-block;
            font-weight: 400;

        }
        .line2:hover{
            letter-spacing: 0px;
        }
        .sp:hover{
            transform: scale(1.3);
        }
        .bd{
            display: inline-block;
            transition: all .25s ease;
        }
        .bd:hover{
            cursor: pointer;
            transform:  translateY(-15px);
        }
    </style>
</head>
<body>
</body>
</html>

<?php
#Create a program containing an object that could execute methods following tasks:
#Show the authors full birth date, followed by;
#Calculate age from birth year, and;
#Display the author's fullname of the program preceded with text "AUTHOR: ".
    class authorInfo{

        public $birthDate;
        public $age;
        public $fullname;

        function author_Birthdate(){
            $bdate = str_replace('-', '/', $this->birthDate);
            return $bdate;
        }

        function author_Age(){
            $birthDate = $this->birthDate;
            date_default_timezone_set("Asia/Manila");
            $currentDate = date("d-m-Y");
            $calc_Age = date_diff(date_create($birthDate), date_create($currentDate));
            $age = $this->age + (int)$calc_Age->format("%y");
            return $age;
        }

        function author_Fullname($fname){
            //return $this->fullname;
            $this->fullname = $fname;
            return $this->fullname;
        }
    }
    $author = new authorInfo();
    $author->birthDate = '14-02-2001';
    $author->age = 0;
    //$author->fullname = 'Val Melbin C. Cabitac';
    $author->author_Fullname("Val Melbin C. Cabitac");
    echo "<p class='line1'>" . "<span class='bd'>" . $author->author_Birthdate() . "</span>" . ", " . "<span class='sp'>" . $author->author_Age() . "</span>" . " " . "<span class='bd'>Years Old</span></p>";
    echo "<hr class='l'>";
    echo "<p class='line2'>AUTHOR: <span class='name'>" . $author->fullname . "</span></p>";
?>