<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php echo '<h1>PHP and Creating Output</h1>' ?>
  
    <?php echo '<p>The PHP echo command can be used to create output.</p>' ?>

    <?php echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>' ?>
    
    <?php echo '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>' ?>
    
    <?php echo '<h2>More HTML to Convert</h2>' ?>

    <?php echo '<p>PHP says "Hello World!"</p>' ?>

    <?php echo '<p>Can you display a sentence with \' and "?</p>' ?>

    <img src=" <?php echo 'php-logo.png' ?>">

    <!-- PHP VARIABLES -->

    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    // echo $linkName;

    echo '<h1>' .$linkName. '</h1>';

    echo '<p>' .$linkURL. '</p>';
    echo '<a href="' .$linkURL. '">' .$linkName. '</a>';

    echo '<p>' .$linkImage. '</p>';

    echo '<p>' .$linkDescription. '</p>';

    ?>

    <!-- PHP ARRAYS -->

    <?php 

    $person['first'] = 'Saloni';
    $person['last'] = 'Pawar';
    echo '<p>Hello '.$person['first'].' '.$person['last'].'!</p>';

    ?>


    <?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$link['name'].'</h1>';

    echo '<p>'.$link['url'].'</p>';

    echo '<p>'.$link['image'].'</p>';

    echo '<p>'.$link['description'].'</p>';

    ?>
    

  </body>
</html>
