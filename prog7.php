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

        //connection 
        $conn = mysqli_connect("localhost","root","");
        if($conn)
        {
            echo "<br>Connection successful";
        }
        else
        {
            echo "<br>Connection failed";
            exit();
        }

        //creation of database
        $q1 = "CREATE DATABASE StudentDetails";
        $r1 = mysqli_query($conn,$q1);
        
        if($r1)
        {
            echo "<br>Database Created successful";
        }
        else
        {
            echo "<br>Error while creating database";
            exit();
        }

        //selecting db
        $dbname = "studentdetails";
        $i = mysqli_select_db($conn,$dbname);


        //creation of table
        $q2 = "CREATE TABLE STUDENT(
                f_n varchar(20) not null,
                l_n varchar(20) not null,
                branch_s varchar(20) not null,
                lang_s varchar(100) not null,
                state_s varchar(20) not null,
                d_o_b DATE not null
            )";
        $r2 = mysqli_query($conn,$q2);
        
        if($r2)
        {
            echo "<br>Table Created successful";
        }
        else
        {
            //echo "<br>Error while creating table";
            echo "<br>Error while creating table: " . mysqli_error($conn);
            exit();
        }

        //Insertion
        $q3 = "INSERT INTO STUDENT values('$fname','$lname','$branch','$languages','$states','$dob')";
        $r3 = mysqli_query($conn,$q3);
        
        if($r3)
        {
            echo "<br>Data Inserted into table successful";
        }
        else
        {
            //echo "<br>Error while creating table";
            echo "<br>Error while inserting into table: " . mysqli_error($conn);
            exit();
        }

        //display
        $q4 = "select * from STUDENT";
        $r4 = mysqli_query($conn,$q4);
        
        if($r4)
        {
            $n= mysqli_num_rows($r4);
            echo "<br><br>Number of Students ".$n;

            echo "<br>Displaying Student Details";
            while($info = mysqli_fetch_array($r4))
            {
                echo "<br>First Name : ".$info['f_n'];
                echo "<br>Last Name : ".$info['l_n'];
                echo "<br>Branch : ".$info['branch_s'];
                echo "<br>Languages selected are : ".$info['lang_s'];
                echo "<br>States selected is : ".$info['state_s'];
                echo "<br>Date of Birth is : ".$info['d_o_b'];
            }
        }
        else
        {
            //echo "<br>Error while creating table";
            echo "<br>Error while displaying " . mysqli_error($conn);
            exit();
        }

        mysqli_close($conn);
    ?>