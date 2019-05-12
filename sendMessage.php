<!doctype html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <title>Poundle</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:300,700' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

    </head>
    <body>

        <header>
            <div class="container">
                <h1 class="logo"><i class="fa fa-magnet"></i>Poundle</h1>
                <i class="fa fa-bars toggle-menu"></i>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="splash">
            <div class="container">
                <h1>Poundle</h1>
                <a class="btn" href="#contact">Contact me<i class="fa fa-angle-down"></i></a>
            </div>
        </section>

        <section id = "help" class="feature greybg">
            <div class="container">
                <h1> Output</h1>
                <?php
                  echo("<p> Name = ".$_POST["name"]."</p>");
                  echo("<p> Email = ".$_POST["email"]."</p>");
                  echo("<p> Message = ".$_POST["Message"]."</p>");
                ?>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="copyright">
                    <p>Implemented by Angelo Giacco. <a href="http://twitter.com/giaccoangelo" target="_blank">Follow me on Twitter</a>.</p>
                </div>
                <div class="social">
                    Share This:
                    <a href="https://twitter.com/home?status=Introducing%20the%20local%20cryptocurrency%20for%20Oundle:%20Poundle!%20By%20%20@giaccoangelo" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=poundle.herokuapp.com" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.reddit.com/submit?title=Introducing%the%local%20cryptocurrency%20for%20Oundle:%20Poundle!&url=poundle.herokuapp.com" target="_blank"><i class="fa fa-reddit"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=poundle.herokuapp.com&title=Introducing%20the%20local%20cryptocurrency%20for%20Oundle:%20Poundle!" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </footer>
    </body>
