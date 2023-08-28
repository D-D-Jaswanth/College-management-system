<?php

                $select = " SELECT * FROM `faculty` JOIN `faculty list` ON faculty list.id = faculty.id";
    
                $result = mysqli_query($conn, $select);
                if(mysqli_num_rows($result) > 0){
                    $fetch = mysqli_fetch_assoc($result);
                }
                
                ?>



<?php
                        
                        if($fetch['std_image'] == ''){
                            echo '<img src="images/default.jpg">';
                        }
                        else{
                            echo '<img src="upload/faculty'.$fetch['fact_image'].'">';
                        }

                        ?>