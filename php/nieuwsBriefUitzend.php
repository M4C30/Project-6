<?php 



    if(isset($_POST['uitzend']))
    {
        $headers = array(
            'From' => 'noreply@planco.io',
            'Reply-To' => 'noreply@planco.io',
            'X-Mailer' => 'PHP/' . phpversion()
        );

        $bericht = $_POST['nieuws'];
       

       $conn= new SQLite3("brief.db");

       if($conn->connect_error){
           die("connection failed: ". $conn ->connect_error);
       }

       $result1 = $conn->query("SELECT email FROM brief WHERE ID = '1'");
       $result2 = $conn->query("SELECT email FROM brief WHERE ID = '2'");
       $result3 = $conn->query("SELECT email FROM brief WHERE ID = '3'");
       $result4 = $conn->query("SELECT email FROM brief WHERE ID = '4'");
       $result5 = $conn->query("SELECT email FROM brief WHERE ID = '5'");
       $result6 = $conn->query("SELECT email FROM brief WHERE ID = '6'");
       $result7 = $conn->query("SELECT email FROM brief WHERE ID = '7'");
       $result8 = $conn->query("SELECT email FROM brief WHERE ID = '8'");
       $result9 = $conn->query("SELECT email FROM brief WHERE ID = '9'");
       $result10 = $conn->query("SELECT email FROM brief WHERE ID = '10'");
       $result11 = $conn->query("SELECT email FROM brief WHERE ID = '11'");
       $result12 = $conn->query("SELECT email FROM brief WHERE ID = '12'");
       $result13 = $conn->query("SELECT email FROM brief WHERE ID = '13'");
       $result14 = $conn->query("SELECT email FROM brief WHERE ID = '14'");
       $result15 = $conn->query("SELECT email FROM brief WHERE ID = '15'");
       $result16 = $conn->query("SELECT email FROM brief WHERE ID = '16'");
       $result17 = $conn->query("SELECT email FROM brief WHERE ID = '17'");
       $result18 = $conn->query("SELECT email FROM brief WHERE ID = '18'");


            while($row = $result1->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result2->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result3->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result4->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result5->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result6->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result7->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result8->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result9->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result10->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result11->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result12->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result13->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result14->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result15->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result16->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result17->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
            while($row = $result18->fetchArray()){
                $to = $row["email"];
                mail($to,"PlanCo maandelijkse nieuwsbrief",$bericht,$headers);
            }
        
        

        $conn ->close();

        
    }

 




?>