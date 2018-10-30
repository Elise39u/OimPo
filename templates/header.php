<!DOCTYPE HTML>
<html>
<?php define("URL", "http://localhost/OimPortofolio/");
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OIM 11 portfolio </title>
    <link rel="stylesheet" href="<?php echo (URL. 'css/style.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo (URL. 'index.php'); ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About me
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo (URL. 'aboutme.php'); ?>">About Me</a>
                    <a class="dropdown-item" href="#">MBO history</a>
                    <a class="dropdown-item" href="#"> Hobbys </a>
                    <a class="dropdown-item" href="#"> CV</a>
                    <a class="dropdown-item" href="#">Passions</a>
                    <a class="dropdown-item" href="#">Dreams</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo (URL. 'social.php'); ?>">Social </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    OIM opdrachten
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo (URL. 'opdrachten.php'); ?>">Learing goals </a>
                    <a class="dropdown-item" href="<?php echo (URL. 'opdrachtOIM/dayIn.php'); ?>">A day in the life</a>
                    <a class="dropdown-item" href="<?php echo (URL. 'opdrachtOIM/NoLogo.php'); ?>">No logo</a>
                    <a class="dropdown-item" href="<?php echo (URL. 'opdrachtOIM/BigData.php'); ?>"> Big data</a>
                    <a class="dropdown-item" href="<?php echo (URL. 'opdrachtOIM/Robot.php'); ?>">We are the robots</a>
                    <a class="dropdown-item" href="<?php echo (URL. 'opdrachtOIM/UX.php'); ?>">User experience</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo (URL. 'projects.php'); ?>">Projects </a>
            </li>
        </ul>
    </div>
</nav>
<body>