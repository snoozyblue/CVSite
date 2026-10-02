<!-- Title        : contact.php -->
<!-- Author       : Ceryl Lake-->
<!-- Date Created : 25/09/2025 -->
<!-- Purpose      : Catch-all error page. -->
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Ceryl Lake|Graphic Design Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Preconnects -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Both of these help with getting the Roboto font. -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css"> <!-- External: W3 basic layout template -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> <!-- External: Body Text and smaller headings -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- External: Icons for headers and bullets -->
        <link rel="stylesheet" href="node_modules/augmented-ui/augmented-ui.min.css"> <!-- Local: CSS library for custom container panels -->
        <link rel="stylesheet" href="style.css"> <!-- Local: My stylesheet for custom elements -->
    </head>

    <header>
        <!-- Nav bar/menu -->
        <div class="navbar-glow w3-top w3-bar w3-black">
            <a href="/index.php"        class="w3-bar-item w3-button" target='_parent'>Home</a>
            <a href="/CV.php"           class="w3-bar-item w3-button" target='_parent'>CV</a>
            <a href="/projects.php"     class="w3-bar-item w3-button" target='_parent'>Projects</a>
            <a href="/graphicdesign.php"class="w3-bar-item w3-button" target='_parent'>Graphic Design</a>
            <a href="/contact.php"      class="w3-bar-item w3-button" target='_parent'>Contact</a>
        </div>
    </header>

    <body>
        
    <!-- Page Container -->
        <main class="w3-content" style="max-width:1400px; margin-top:7vh;">
            <div class="glitch-text snoozy-panel w3-display-container" style="width:100%" data-augmented-ui="tl-clip tr-clip br-clip bl-clip both">
                <h1 style="text-align: center;">content here</h1>
            </div>
        </main>        
    </body>
</html>