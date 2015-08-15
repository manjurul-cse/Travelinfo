<?php
include_once  "connect.php";

function search(){
	
                                              if (isset($_POST['searching'])) {
    $searching = $_POST['searching'];

    if ($_POST['searching'] == 'yes') {


        if (isset($_POST['find'])) {
            $find = $_POST['find'];
            if ($find == "") {
                echo "<p>You forgot to enter a search term";
                exit;
            }

            echo '<p style=
                                          "background-color:#999999;
                                          color:white;font-size:15px;
                                          padding-left:130px;">Search result for ' . $find . '</p><br/>';
            // Otherwise we connect to our Database 
            $mystring = $find;
            $parts = explode("'", $mystring);
            $find = $parts['0'];                                //break the string up around the "/" character in $mystring 
            //grab the first part 


            $find = strtoupper($find);
            $find = strip_tags($find);
            $find = trim($find);


            //Now we search for our search term, in the field the user specified 
            $sql = ("SELECT *FROM place WHERE name LIKE '%$find%'") or die("Error found1") . mysql_error();

            //And we display the results 
            $result = mysql_query($sql) or die("Error Found2" . mysql_error());
            echo '<br>';
            //-count results
            $numrows = mysql_num_rows($result) or die("Error Occured" . mysql_error());

            if (isset($_POST['name'])) {
                $name = $_POST['name'];
            }
            if (isset($_POST['location'])) {
                $location = $_POST['location'];
            }
            if (isset($_POST['description'])) {
                $location = $_POST['description'];
            }
            //-create while loop and loop through result set
            while ($row = mysql_fetch_array($result)) {

                $id = $row['id'];
                $name = $row['name'];
                $location = $row['location'];
                $description = $row['description'];

                //-display the result of the array

                echo "<ul>\n";
                echo "<h4><a href=index2.php?id=" . $id . ">$name</a></h4>\n";
                echo "Location:$location";
                echo "<h4><a href=index2.php?id=" . $id . ">click here for details</a></h4>\n";

                echo "</ul>";
            }
        }
    }
}

}

?>