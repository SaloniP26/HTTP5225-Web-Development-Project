<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <h1>PHP and For Loops</h1> 
    
    <p>Use PHP echo, if statements, and loops to output all three links.</p>
        
        
    <?php

    // **************************************************
    // Do not edit this code

    // Define a multi dimensional array to store all of the links
    $links = array (
        0 => array (
          'name' => 'Codecademy',
          'url' =>'https://www.codecademy.com/',
          'image' => '',
          'description' => 'Learn to code interactively, for free.' ),
        1 => array ( 
          'name' => '',
          'url' => 'https://www.w3schools.com/',
          'image' => 'w3schools.png',
          'description' => 'W3Schools is optimized for learning, testing, and training.' ),
        2 => array (
          'name' => 'Mozilla Developer Network',
          'url' => 'https://www.codecademy.com/',
          'image' => 'mozilla.png',
          'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
        );
        
    // **************************************************


      // Use the print_r function to view the contents of the array
      echo '<pre>';
      print_r ($links);
      echo '</pre>';


    // Loop through the array and display the link information
    for ($i = 0; $i < count ($links); $i ++)
    {
        if ($links[$i]['name'] == "")
        {
            echo '<h1>' . $links[$i]['url'] . '</h1>';
        }
        else
        {
            echo '<h1>' . $links[$i]['name'] . '</h1>';
        }
        // echo '<h1>'.$links[$i]['name'].'</h1>';

        if ($links[$i]['url'])
        {

            if ($links[$i]['name'])
            {
                echo '<p><a href="' . $links[$i]['url'] . '"> ' .$links[$i]['name'] . '</a></p>';
            }
            else
            {
                echo '<p><a href="' . $links[$i]['url'] .'"> ' .$links[$i]['url'] . '</a></p>';
            }

        }

        if ($links[$i]['image'])
        {
            echo '<img src="' . $links[$i]['image'] . '" width="200">';
        }

        if ($links[$i]['description'])
        {
            echo '<p>' . $links[$i]['description'] . '</p>';
        }

    }
    ?>

    <div class="container">
        <div class="row">

            <?php

            // Function to get users from API

            function getUsers() {
                $url = "https://jsonplaceholder.typicode.com/users";
                $data = file_get_contents($url);
                return json_decode($data, true);
            }

            $users = getUsers();

            
            for ($i = 0; $i < count ($users); $i ++) {
                    echo '<div class="card" style="width: 18rem;">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">Name: ' . $users[$i]['name'] . '</h5>';
                    echo '<h6 card-subtitle mb-2 text-body-secondary>Email:' . $users[$i]['email'] . '</h6>';
                    echo '<p class="card-text">Username: ' . $users[$i]['username'] . '</p>';
                    echo '<p class="card-text">Phone: ' . $users[$i]['phone'] . '</p>';
                    echo '<p><a href="#" class="btn btn-primary"> View Details </a></p>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>

        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

