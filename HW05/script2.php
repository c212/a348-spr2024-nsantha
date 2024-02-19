<?php
$file = 'count.txt';

// Get current count from file
$count = intval(file_get_contents($file));


// Increment the count
$count++;

// Write new count to file
file_put_contents($file, $count);

// Get the current date and time
$date = date('m/d/Y h:i:s a');
?>
<?php
// Print the count and date/time to the page
echo "This page has been accessed $count times;";
echo "Click";?> <html><body><p><a href="/hw06/count.php">here</a> to know the time and date</p></body></html>

<?php
   date_default_timezone_set("America/Indiana/Indianapolis");
   // Get current date and time
$current_datetime = date("m/d/Y h:i:s a");
   $fp = fopen("count.php", "a"); 
   fwrite($fp, $current_datetime . "\n");
    // see http://php.net/manual/en/function.date.php
   fclose($fp); 
 ?>
