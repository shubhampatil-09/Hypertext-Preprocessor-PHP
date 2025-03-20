<?php
        $fname = $_POST["fn"];
        $lname = $_POST["ln"];
        $branch = $_POST["branch"];
        $lang = $_POST["language"];
        $languages = " ";
        $i=0;
        $states = $_POST["states"];
        $dob = $_POST["dob"];

        foreach($lang as $i)
        {
            $languages = $languages." ".$i;
        }

        echo "First Name : ".$fname;
        echo "<br>Last Name : ".$lname;
        echo "<br>Branch : ".$branch;
        echo "<br>Languages selected are : ".$languages;
        echo "<br>States selected is : ".$states;
        echo "<br>Date of Birth is : ".$dob;
    ?>