<html>
<body>
<?php
$players = array("Virat kohli", "Rohit sharma", "KL Rahul", "Hardik pandya", "Shubman Gill", "Ravindra Jadeja");
$player_no = array("45", "23", "74", "31", "61", "33");

// New array for player positions
$player_position = array("Batsman", "Batsman", "Wicket-Keeper Batsman", "All-Rounder", "Batsman", "All-Rounder");
?>

<h2>Indian Cricket Players</h2>

<table border="1" width="45%">
<tr>
<th>Player No</th>
<th>Player Name</th>
<th>Player Position</th>
</tr>

<?php
// use one loop and match all arrays by index
for ($i = 0; $i < count($players); $i++) {
    echo "<tr>";
    echo "<td>" . $player_no[$i] . "</td>";
    echo "<td>" . $players[$i] . "</td>";
    echo "<td>" . $player_position[$i] . "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>

