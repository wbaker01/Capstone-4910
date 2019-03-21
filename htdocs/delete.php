<?php
//remove <script></script> and add php start and close tag
//comment these two lines when code started working fine
error_reporting(E_ALL);
ini_set('display_errors',1);

$titleName = 'song_data.txt';
$eachlines = file($titleName, FILE_IGNORE_NEW_LINES);
$dataArray = array();

?>
<body>
    <div id="page-wrap">
        <h1>Select Sheet To Delete</h1>
        <!-- <select id="value" onchange="location = this.value;">
            <option selected value="sheets.php">Please Select</option> -->
        <form method = "post" action = "remove.php">
          <select name = "deleteFile" size = "1">
           <?php foreach($eachlines as $lines){
				$data = explode(',',$lines);
				$key = $data[0];
				$value = $data[1];
				$dataArray[$key] = $value;
                echo '<option value="'.$value.'".$">'.$key.'</option>';
            }?>
        </select>
        <input type="submit" name="submit" value="Delete">
        </form>
    </div>
</body>
