<head>
    <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <link rel='stylesheet' type='text/css' media='screen' href='Styles/stylesheet.css'/>
        <title<?php echo $title; ?></title>
</head>
<body>
    <body>
        <div id="wrapper">
            <div id="banner">
            <a id="banner-text">Sudath IT Lab</a>
        </div>  

        <nav id="navigation">
            <ul id="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li> 
            </ul>    
        </nav>
        <div id="content_area">
            <?php echo $content; ?>
        </div>
        <div id="sidebar">
        </div>