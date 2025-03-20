<?php
        //connection 
        $conn = mysqli_connect("localhost","root","","studentdetails");
        if($conn)
        {
            echo "<br>Connection successful";
        }
        else
        {
            echo "<br>Connection failed";
            exit();
        }


        //updation
        $q2 = "Update STUDENT SET f_n = 'Narayan' where f_n='Sam'";
        $r2 = mysqli_query($conn,$q2);
        
        if($r2)
        {
            echo "<br>Updation into table successful";
        }
        else
        {
            //echo "<br>Error while creating table";
            echo "<br>Error while updating into table: " . mysqli_error($conn);
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