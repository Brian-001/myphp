    <?php 
    $books = 
    [
        [
            'bookName' => 'Kidagaa Kimemwozea',
            'bookAuthor' => 'Ken Walibora',
            'releaseYear' => 2000,
            'bookPurchaseUrl' => 'http://ken.com',
        ],

        [
            'bookName' => 'River Between',
            'bookAuthor' => 'Said A. Mohamed',
            'releaseYear' => 2012,
            'bookPurchaseUrl' => 'http://said.com',
        ],

        [
            'bookName' => 'The River and the Source',
            'bookAuthor' =>'Margaret Ogola',
            'releaseYear' => 2014,
            'bookPurchaseUrl' => 'http://margaret.com',
        ],
    ];

    

    $filteredBooks = array_filter($books, function ($book){
        return $book['bookAuthor'] === 'Said A. Mohamed';
    });

   require "ass_array.view.php";