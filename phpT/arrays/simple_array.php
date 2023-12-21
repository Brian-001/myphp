<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple array1</title>
</head>
<style>
    .parent{
        display: flex;
    }
    .child{
        margin: auto;
    }
    .child li{
        list-style: none;
    }
</style>
<body>
    <!-- Create an array of any three usernames - perhaps for a "Top Performing Users" 
    section of your website. Then, create a loop that displays each username within a 
    list item. -->

    <!-- Solution is as follows -->
    <?php 
    $usernames = 
    [
        'John Doe',
        'Frank Doe',
        'Jane Doe',
    
    ];
    ?>
    <div class="parent">
        <div class="child">
        <h1>Top performing Users</h1>
            <?php foreach ($usernames as $username): ?>
                <li><?= $username ?></li>
            <?php endforeach; ?>
        </div>
    </div> 
</body>
</html>