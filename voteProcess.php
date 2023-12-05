<?php
include('db.php');
$voteValue = $_POST['value'];
addVoteTo($voteValue);
?>
<h2 class="resultH2">You voted for : <strong><?=$voteValue;?></strong></h2>
<table class="results">
<?php
$pollItems = selectAllItemsByVote();
foreach($pollItems as $pollItem){
?>
<tr>
    <td><strong><?=$pollItem['name'];?> :</strong></td>
    <td><?=$pollItem['votes'];?></td>
</tr>
<?php
}
?>
</table>