<?php 



    if(isset($_POST['knopje']))
    {

        $email = $_POST['nieuws'];
        $headers = array(
            'From' => 'noreply@planco.com',
            'Reply-To' => 'noreply@planco.com',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        $bericht = "";
        $bericht .= "Automatische mail naar " . $email . "\r\n";
        $bericht .= "\r\n";
        $bericht .= "Bedankt voor het aanmelden op onze nieuwsbrief!";
        $bericht .= "\r\n";
        $bericht .= "Je kunt op elk moment jouw abonnement afzeggen.";
        $bericht .= "\r\n";
        $bericht .= "\r\n";
        $bericht .= "Veel geluk namens ons bij Planco!";

        
        mail($email,"Nieuwsbrief Conformatie",$bericht,$headers);

        echo '<script type="text/JavaScript">  window.history.back();   </script>';
    }

 




?>