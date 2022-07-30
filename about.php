<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
</head>

<body>
    <style>
    .main {
        /* width: 1130px; */
        /* max-width: 100%; */
        margin-top: 27px;
        margin-left: 22px;
        display: flex;
        /* align-items: center; */
    }

    .about-text {
        color: black;
        /* font-size: 80px; */
        /* text-transform: capitalize; */
        text-align: center;
        margin: 22px auto;
        /* border: 2px solid black; */
    }
    .about-text h1{
        font-size: 40px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
right: 17px;
    }

    .about-text h2 {
        color: black;
        /* font-size: 25px; */
        /* text-transform: capitalize; */
        /* margin-bottom: 25px; */
        letter-spacing: 3px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .about-text h3 {
        color: black;
        /* letter-spacing: 2px; */
        line-height: 30px;
        font-size: 20px;
        /* margin-bottom: 45px; */
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }

    button {
        background: black;
        color: white;
        /* text-decoration: none; */
        /* border: 2px solid transparent; */
        font-weight: bold;
        padding: 13px 30px;
        border-radius: 38px;
        transition: .5s;
        font-size: 30px;
        /* list-style-type: none; */

    }
    button a{
       text-decoration: none;
       color: white;
    }

    button:hover {
        background: red;
        border: none;
        cursor: pointer;

    }

    .about-text h1,
    h2,
    h3,
    button {
        position: relative;
        top: 9vw;
    }
    span{
        color: red;
    }
    /* h1 span{
        color: red;
    } */
    </style>
    <!-- <div class="container" style="background-color:black;">
    <img src="images/about-img.jpg" alt="img">
    <div class="abt" style="float:right;">
        <h1 style="color:red;">ABOUT US</h1>
    </div>
</div> -->
    <section class="about">
        <div class="main">
            <img src="images/about-img.jpg" alt="img">
            <div class="about-text">
             <h1>ABOUT US </h1>
                <h2>The Best <span>Fitness Gym</span> in the town</h2>
                <p>
                <h3>Every Day is a Chance to become Better.We are the best fitness gym in the town.<br> We can Give
                    assurance
                    that Under our Guidance you
                    can Achieve your Goals. <br>We have Our Expert Trainer which will Help and Guide you to Achieve your
                    Goals.<br>
                    Always Remember Pain is Temporary, Regret is Permanent.</h3>
                </p>
                <Button type="button"><a href="contact.php">JOIN NOW</a></Button>
            </div>
        </div>
    </section>
</body>

</html>