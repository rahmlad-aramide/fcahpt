
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page foor payment</title>
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                margin: 0;
                padding: 0;
            }
            
            .row::after {
                display: block;
                content: '';
                clear: both;
            }

            .row > div {
                float: left;
                height: 96.5vh;
            }
            .sidebar {
                background-color: rgb(123, 123, 123);
                color: white;
                width: 22%;
            }
            .sidebar .logo {
                border-top: 1px solid white;
                height: 100px;
                align-items: center;
                padding: 5px; 
                display: flex;  
                border-bottom: 1px solid white;
            }
            .sidebar .logo h5 {
                font-size: 13px;
                color: black;
                text-align: center;
            }
            ul {
                list-style-type: none;
                line-height: 300%;
                padding: 20px;
            }
             ul > li >.active  {
                color: rgb(152, 5, 5);
                text-decoration: underline;
                text-decoration-thickness: 2px;

            }
            .sidebar a {
                text-decoration: none;
                color: black;
                padding-left: 10px;
                display: block;
                font-size: 25px;
            }
            .logo img{
                width: 60px;
                height: 60px;
            }
            .content {
                background-color: white;
                width: 78%;
            }
            .content h2 {
                padding-top: 20px;
                text-align: center;
                color: black;
            }.content p {
                padding-top: 17px;
                width: 90%;
                text-align: justify;
                margin: auto;
            }
            input {
                width: 45%;
                height: 1.5rem;
            }
            input[type=checkbox] {
                width: auto;
                padding-right: 23rem;
            }
            select {
                width: 45%;
                height: 1.5rem;
            }
            .c {
                background-color: rgb(123, 123, 123);
                height: 20px;
            }

            .box {
                width: 60%;
                height: 70vh;
                padding-top: 50px;
                text-align: center;
                margin: 50px 0px 50px 200px;
                box-shadow: 4px 7px 2px  #333;
                background-color: rgb(123, 123, 123);
            }
        </style>
</head>
<body>
    <div class="c">

    </div>
    <div class="row">
        <div class="sidebar">
            <div class="logo">
                <img src="./Federal-College-of-Animal-Health-and-Production-Technology-Ibadan-logo-480x482-removebg-preview.png" alt="">
                <h5>Federal-College-of-Animal-Health-and-Production-Technology-Ibadan</h5>
            </div>
            <ul>
                <li><a href="./index.php" >Home</a></li>
                <hr>
                <li><a href="#" class="active">School Fees</a></li>
                <hr>
                <li><a href="#">Deparment</a></li>
                <hr>
                <li><a href="#">Medical</a></li>
                <hr>
                <li><a href="#">SUG</a></li>
                <hr>
                <li><a href="#">State</a></li>
            </ul>
        </div>

        <div class="content"> 

        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia cum pariatur totam corporis temporibus ullam soluta adipisci illo quisquam, at et sequi. Esse quod ab ratione mollitia. Necessitatibus, expedita vel.
        Voluptas iure, quasi nostrum velit voluptatum minima consequuntur temporibus maiores. Eos nobis ut quas culpa nulla, adipisci illo provident consectetur quae eveniet inventore. Itaque perferendis, odio est fugit doloremque consectetur.
        Laborum fugiat dolorem omnis. Aspernatur ducimus ratione harum inventore eos consequatur at adipisci reprehenderit itaque quaerat, aut ipsum in aliquam voluptas dolorum, quod tenetur? Provident dolores unde tempora deleniti? Nam?
        Facilis voluptatibus minima totam nobis quam laboriosam aliquam architecto iure voluptate iste, nihil beatae vitae hic fuga eveniet veritatis impedit tempore, error dolorum delectus aspernatur reprehenderit repellendus cum! Tempore, officiis.
        Ipsa eius animi, asperiores ipsum fuga labore mollitia ratione quidem inventore culpa corrupti, nulla placeat harum quibusdam voluptatem sapiente dolores reiciendis suscipit quis cum atque nisi. Tenetur nobis molestiae ullam.
        </div>
</html>