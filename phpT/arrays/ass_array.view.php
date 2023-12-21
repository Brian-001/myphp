<style>
    .book{
        position: relative;
    }
    .bdetails
    {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 50%);
    }
    .bdetails li{
        list-style: none;
        padding: 10px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>     
    <meta charset="UTF-8">
    <title>Associative Array|Ex 1.</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>
<body>   
    <div class="book">
        <div class="bdetails">
            <h1>Recommended Books are as follows:</h1>
            <ul>
                <?php foreach ($filteredBooks as $book) : ?>
                    <a href="<?= $book['bookPurchaseUrl'] ?>">
                        <li>
                            <?= $book['bookName']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['bookAuthor'] ?>
                        </li>
                    </a>

                <?php endforeach; ?>
            </ul>
            
            
        </div>
    </div>  
</body>
</html>