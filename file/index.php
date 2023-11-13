<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>File Handling</p>'; ?> 

    
    <?PHP
    // Display the content of each file using fgets
   
    for ($i = 1; $i <= 13; $i++) {
        $filename = "file$i.txt";
        $file = fopen($filename, "r");

        if ($file) {
            echo "Content of $filename:<br>";
            while (!feof($file)) {
                echo fgets($file) . "<br>";
            }
            fclose($file);
            echo "<br>";
        } else {
            echo "Unable to open $filename.<br><br>";
        }
    }
    ?>


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>