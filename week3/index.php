<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA = 'Codeacademy';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkCTA= 'W3Schools';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA = 'Mozilla';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';
        echo '<a href="' . $linkURL . '">' . $linkCTA . '</a>';
        echo '<img src="' . $linkImage . '" width="200" />';
        echo '<p>'. $linkDescription . '</p>';

        if ($linkURL === '')
            {
                echo '<p>'. $linkCTA . '</p>';
            }
            
        else
            {
                echo '<a href="' . $linkURL .'">' . $linkCTA . '</a>';
            }

        

        ?>

     <!-- Grading Scheme -->

     <?php

    // **************************************************

    $randomGrade = ceil(rand(1, 100));

    echo '<h1>The random Score is ' . $randomGrade . '.</h1>';

    if ($randomGrade <= 60) {

        echo '<h2>Congratulations!</h2>';

        echo '<p>Your Grade "F"</p>';

    } 
    elseif ($randomGrade <= 70) {

        echo '<h2>Congratulations!</h2>';

        echo '<p>Your Grade "E"</p>';

    } 
    elseif ($randomGrade <= 75) {
        echo '<h2>Congratulations!</h2>';

        echo '<p>Your Grade "D"</p>';

    } 
    elseif ($randomGrade <= 80) {

        echo '<h2>Congratulations!</h2>';

        echo '<p>Your Grade "C"</p>';

    } 
    elseif ($randomGrade <= 85) {

        echo '<h2>Congratulations!</h2>';

        echo '<p>Your Grade "B"</p>';

    } 
    elseif ($randomGrade <= 90) {

        echo '<h2>Congratulations!</h2>';

        echo '<p>Your Grade "A"</p>';

    } 
    else {

        echo '<h2>Congratulations!</h2>';

        echo '<p>Your Grade "A+"</p>';

    }

    // **************************************************

    ?>

        <?php

        $day = ceil(rand(1, 7));

        echo '<h1>The random Day is ' . $day . '.</h1>';

        echo '<p>Today is '.$day.'!</p>';

        switch ($day) 
        {
        case "1":
            echo "It's Monday!";
            break;
        case "2":
            echo "It's Tuesday!";
            break;
        case "3":
            echo "It's Wednesday!";
            break;
        case "4":
            echo "It's Thursday!";
            break;
        case "5":
            echo "It's Friday!";
            break;
        case "6":
            echo "It's Saturday!";
            break;
        case "7":
            echo "It's Sunday!";
            break;
        default:
            echo "Have a great day!";
            break;
        }

        ?>
        

    </body>
</html>
