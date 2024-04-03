<!DOCTYPE html>
<html lang="en">
<head>

    <title>Demo</title>
</head>
<body> 
    <style>
        body {
    place-items: center;
    display: grid;
    height: 100;
}
    </style>
    <h1>CONDITIONAL !</h1>
    <?php 
    $book="HARRY POTTER";
    $read = false;
    if($read){
        $message ="you have read the book $book";
    }
    else{
        $message="you have not read the book $book";
    }
     
    ?>
    <H1>
<?= $message; ?>
    </H1>

    <h1>ARRAYS</h1>
    <?php 
    $arrays = ["ice","water","ice-creams","milk","cup"];
    ?>
    <ul>
    <?php foreach($arrays as $array){
        echo "<li>{$array}</li>";
    }
    ?>
    </ul>
    <h1>A DIFFERENT APPROACH OF RETRIEVING DATA</h1>
    <?php 
    $devices =["camera","laptops","mobiles","tablets","air pods"];
    ?>
    <ul>
    <?php foreach ($devices as $device):?>
        <li><?= $device ?></li>
    <?php endforeach ?>
    </ul>
    <h1>ASSOCIATIVE ARRAY</h1>
    <?php 
    $arrays =[ 
        ['book'=>'HARRY POTTER','paper'=>1050,'link'=>'http://example.com','year'=>'1999'],
        ['book'=>'THE MAGIC','paper'=>555,'link'=>'http://example.com','year'=>'2000'],
    ];
    ?>
    <ul>
    <?php foreach($arrays as $array):?>
        <li>
            <a href="<?= $array['link']; ?>">
            <?= $array['book']." ".$array['year'];?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
    <h1>Filter the book by authors</h1>
    <?php  $books =[
        ['name'=>'The monk who sold his ferrari','author'=>'Robin Sharma','year'=>'2001'],
        ['name'=>'The family wisdom','author'=>'Robin Sharma','year'=>'2002'],
        ['name'=>'The secret','author'=>'Rhonda Byrnie','year'=>'2012'],
        ['name'=>'The flower','author'=>'lia','year'=>'2001']
    ];
    // foreach($books as $book){
    //     echo $book['name'];
    // }
    function filterBooks($books,$author){
        $filteredBooks = [];
        foreach($books as $book){
            if($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
        
    }
    ?>
    <ul><?php 
    
    foreach(filterBooks($books,'Robin Sharma') as $book):?>
    <li> 
        <?= $book['name']; ?>
    </li>
    <?php endforeach; ?>
</ul>
<h1>Lambda function</h1>
<?php
    $books =[
      ['name'=>'The monk who sold his ferrari','author'=>'Robin Sharma','year'=>2001,'link'=>'http://example.com'],
      ['name'=>'The family wisdom','author'=>'Robin Sharma','year'=>2002,'link'=>'http://example.com'],
      ['name'=>'The secret','author'=>'Rhonda Byrnie','year'=>2012,'link'=>'http://example.com'],
      ['name'=>'The flower','author'=>'lia','year'=>2001,'link'=>'http://example.com']
];
function filterBook($items,$key,$value){
    $filteredValue =[];
    foreach($items as $item){
        if($item[$key]===$value){
            $filteredValue[]=$item;

        }
    }
    return $filteredValue;
}

$filter = filterBook($books,'year',2001);

?>
 <ul>
    <?php foreach($filter as $fil):?>
        <li>
            <a href="<?= $fil['link']; ?>">
            <?= $fil['name']." ".$fil['year'];?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</body>
</html>