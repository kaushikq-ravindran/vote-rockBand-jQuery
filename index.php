<?php include('db.php');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="poll.js"></script>
    
<link rel="stylesheet" href="styles.css">
<title>PHP Poll</title>
</head>

<body>
    
    <div class="wrapper poll">
        <h1>Vote for your favorite punk rock band</h1>
        <div class="pollitems">
            <?php
                $pollitems = selectAllItemsRand();
                $i = 0;
                foreach($pollitems as $pollitem){
            ?>
            <input type="radio" class="pollInput" name="pollInput" value="<?=$pollitem['name'];?>" id="poll<?=$i;?>">
            <label for="poll<?=$i;?>" class="pollLabel">
                <img src="images/<?=$pollitem['image'];?>" alt="<?=$pollitem['name'];?>">
                <h2><?=$pollitem['name'];?></h2>
            </label>
            <?php
                    $i++;
                }
            ?>
        </div>
        <a href="#" class="submitPoll">Vote</a>
    </div>
    
</body>
</html>
