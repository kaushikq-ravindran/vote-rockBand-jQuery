<?php 
function Query($z){
	$user = "USERNAME";
	$pass = "PASSWORD";
	$dbname="DATABASE NAME";
	$dbh = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
	$dbh->query('SET NAMES utf8');
	return $dbh->query($z);
}

function selectAllItemsRand(){
    //To prevent favoring an item over the others, we show them at random so everyone will see them in a different order.
    $contents = Query("SELECT * FROM pollitems ORDER BY RAND()");
	return $contents;
}

function selectAllItemsByVote(){
    //Here we select all items oredering them by the amount of vote they received.
    $contents = Query("SELECT * FROM pollitems ORDER BY `votes` DESC");
	return $contents;
}

function selectVoteFrom($name){
    //Selecting the amount of votes the items selected has.
    $contents = Query("SELECT * FROM pollitems WHERE `name`='".$name."'");
	foreach($contents as $content){
		return $content['votes'];
	}
}

function addVoteTo($name){
    //Here we add 1 vote to an item.
    Query("UPDATE `pollitems` SET `votes`='".(selectVoteFrom($name)+1)."' WHERE `name`='".$name."'");
}

?>