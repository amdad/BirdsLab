<?
//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);
//error_reporting(-1);

require('admin/bootstrap.php');
function setActive($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIRDS Lab</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon"
      type="image/png"
      href="img/logo.png">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BIRDS Lab</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?=setActive("about");?>><a href="about.php">About Us</a>
                    </li>
                    <li <?=setActive("calendar");?>><a href="calendar.php">Calendar</a>
                    </li>
                    <li <?=setActive("appearances");?>><a href="appearances.php">Appearances</a>
                    </li>
                    <li <?=setActive("publications");?>><a href="publications.php">Publications</a>
                    </li>
                    <li <?=setActive("media");?>><a href="media.php">Media</a>
                    </li>
                    <li <?=setActive("teaching");?>><a href="teaching.php">Teaching</a>
                    </li>
                    <li><a href="http://sites.google.com/a/umich.edu/revzen-lab-wiki/home">Wiki</a>
                    </li>
                    <li <?=setActive("contact");?>><a href="contact.php">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
