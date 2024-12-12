<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Page</title>
    <!-- Basic styling to make it look nicer -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Basic PHP output using echo -->
    <h1><?php echo "Hello, World!"; ?></h1>

    <!-- Demonstrating PHP variables and string concatenation -->
    <?php
        $greeting = "Welcome to";
        $appName = "My PHP Website";
        
        // Using PHP to generate dynamic content
        echo "<p>{$greeting} {$appName}!</p>";

        // Showing the current date using PHP's date function
        echo "<p>Today is " . date('l, F j, Y') . "</p>";
    ?>

    <!-- Demonstrating PHP if statement -->
    <?phpwhat should i put in the source directory as a test
        $hour = date('H');
        if ($hour < 12) {
            echo "<p>Good morning!</p>";
        } else if ($hour < 18) {
            echo "<p>Good afternoon!</p>";
        } else {
            echo "<p>Good evening!</p>";
        }
    ?>
</body>
</html>