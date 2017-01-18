<?php

    if( $_POST )
    {
        $first_temp_type_name=$_POST['first_temp_type_name'];
        $second_temp_type_name=$_POST['second_temp_type_name'];
        $given_value=$_POST['given_value'];
    }

    if (!is_numeric($given_value)){
        $result = "Please Enter A Valid Number";
    }elseif ($first_temp_type_name == "" || $second_temp_type_name == ""){
        $result = "Please Choose A Temperature Scale";
    }else{


        //Fahrenheit to celsius, kelvin, rankine, newton, delisle, reaumur and romer
        if ($first_temp_type_name=='fahrenheit'){
            if ($second_temp_type_name=='celsius'){
                $celsius=fahrenheit_to_celsius($given_value);
                $result = "$given_value Fahrenheit = $celsius Celsius";
            } elseif ($second_temp_type_name=='kelvin') {
                 $kelvin=fahrenheit_to_kelvin($given_value);
                 $result = "$given_value Fahrenheit = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='rankine') {
                 $rankine=fahrenheit_to_rankine($given_value);
                 $result = "$given_value Fahrenheit = $rankine Rankine";
            } elseif ($second_temp_type_name=='newton') {
                 $newton=fahrenheit_to_newton($given_value);
                 $result = "$given_value Fahrenheit = $newton Newton";
            } elseif ($second_temp_type_name=='delisle') {
                 $delisle=fahrenheit_to_delisle($given_value);
                 $result = "$given_value Fahrenheit = $delisle Delisle";
            } elseif ($second_temp_type_name=='reaumur') {
                 $reaumur=fahrenheit_to_reaumur($given_value);
                 $result = "$given_value Fahrenheit = $reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
                 $romer=fahrenheit_to_romer($given_value);
                 $result = "$given_value Fahrenheit = $romer Romer";
            } else {
                    $result = "$given_value Fahrenheit";
            }
        }

        //Celsius to fahrenheit, kelvin, rankine, newton, delisle, reaumur and romer
        if ($first_temp_type_name=='celsius'){

            if ($second_temp_type_name=='fahrenheit'){
                $fahrenheit=celsius_to_fahrenheit($given_value);
                $result = "$given_value Celsius  = $fahrenheit Fahrenheit";
            } elseif ($second_temp_type_name=='kelvin') {
                $kelvin=celsius_to_kelvin($given_value);
                $result = "$given_value Celsius   = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='rankine') {
                $rankine=celsius_to_rankine($given_value);
                $result = "$given_value Celsius   = $rankine Rankine";
            } elseif ($second_temp_type_name=='newton') {
                $newton=celsius_to_newton($given_value);
                $result = "$given_value Celsius   = $newton Newton";
            } elseif ($second_temp_type_name=='delisle') {
                $delisle=celsius_to_delisle($given_value);
                $result = "$given_value Celsius   = $delisle Delisle";
            } elseif ($second_temp_type_name=='reaumur') {
                $reaumur=celsius_to_reaumur($given_value);
                $result = "$given_value Celsius   = $reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
                $romer=celsius_to_romer($given_value);
                $result = "$given_value Celsius   = $romer Romer";
            } else {
                $result = "$given_value Celsius";
            }
        }

        //Kelvin to fahrenheit, celsius, rankine, newton, delisle, reaumur and romer
        if ($first_temp_type_name=='kelvin'){
            if ($second_temp_type_name=='fahrenheit'){
                    $fahrenheit=kelvin_to_fahrenheit($given_value);
                    $result = "$given_value Kelvin  = $fahrenheit Fahrenheit";
            } elseif ($second_temp_type_name=='celsius') {
                    $celsius=kelvin_to_celsius($given_value);
                    $result = "$given_value Kelvin  = $celsius Celsius";
            } elseif ($second_temp_type_name=='rankine') {
                    $rankine=kelvin_to_rankine($given_value);
                    $result = "$given_value Kelvin  = $rankine Rankine";
            } elseif ($second_temp_type_name=='newton') {
                    $newton=kelvin_to_newton($given_value);
                    $result = "$given_value Kelvin  = $newton Newton";
            } elseif ($second_temp_type_name=='delisle') {
                    $delisle=kelvin_to_delisle($given_value);
                    $result = "$given_value Kelvin  = $delisle Delisle";
            } elseif ($second_temp_type_name=='reaumur') {
                    $reaumur=kelvin_to_reaumur($given_value);
                    $result = "$given_value Kelvin  = $reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
                    $romer=kelvin_to_romer($given_value);
                    $result = "$given_value Kelvin  = $romer Romer";
            } else {
                    $result = "$given_value Kelvin";
                }
            }


        //Rankine to fahrenheit, celsius, kelvin, newton, delisle, reaumur and romer     
        if ($first_temp_type_name=='rankine'){
            if ($second_temp_type_name=='fahrenheit'){
                $fahrenheit=rankine_to_fahrenheit($given_value);
                $result = "$given_value Rankine  = $fahrenheit Fahrenheit";
            } elseif ($second_temp_type_name=='celsius') {
                $celsius=rankine_to_celsius($given_value);
                $result = "$given_value Rankine = $celsius Celsius";
            } elseif ($second_temp_type_name=='kelvin') {
                $kelvin=rankine_to_kelvin($given_value);
                $result = "$given_value  Rankine = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='newton') {
                $newton=rankine_to_newton($given_value);
                $result = "$given_value  Rankine = $newton Newton";
            } elseif ($second_temp_type_name=='delisle') {
                $delisle=rankine_to_delisle($given_value);
                $result = "$given_value Rankine = $delisle Delisle";
            } elseif ($second_temp_type_name=='reaumur') {
                $reaumur=rankine_to_reaumur($given_value);
                $result = "$given_value Rankine = $reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
                $romer=rankine_to_romer($given_value);
                $result = "$given_value Rankine =  $romer Romer";
            } else {
                $result = "$given_value Rankine";
            }
        }

        //Newton to fahrenheit, celsius, kelvin, rankine, delisle, reaumur and romer
        if ($first_temp_type_name=='newton'){
            if ($second_temp_type_name=='fahrenheit'){
                $fahrenheit=newton_to_fahrenheit($given_value);
                $result = "$given_value Newton  = $fahrenheit Fahrenheit";
            } elseif ($second_temp_type_name=='celsius') {
                $celsius=newton_to_celsius($given_value);
                $result = "$given_value Newton = $celsius Celsius";
            } elseif ($second_temp_type_name=='kelvin') {
                $kelvin=newton_to_kelvin($given_value);
                $result = "$given_value Newton = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='rankine') {
                $rankine=newton_to_rankine($given_value);
                $result = "$given_value Newton = $rankine Rankine";
            } elseif ($second_temp_type_name=='delisle') {
                $delisle=newton_to_delisle($given_value);
                $result = "$given_value Newton = $delisle Delisle";
            } elseif ($second_temp_type_name=='reaumur') {
                $reaumur=newton_to_reaumur($given_value);
                $result = "$given_value Newton = $reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
                $romer=newton_to_romer($given_value);
                $result = "$given_value Newton = $romer Romer";
            } else {
                $result = "$given_value Newton";
            }
        }

        //Delisle to fahrenheit, celsius, kelvin, rankine, newton, reaumur and romer
        if ($first_temp_type_name=='delisle'){
            if ($second_temp_type_name=='fahrenheit'){
                $fahrenheit=delisle_to_fahrenheit($given_value);
                $result = "$given_value Delisle = $fahrenheit Fahrenheit";
            } elseif ($second_temp_type_name=='celsius') {
                $celsius=delisle_to_celsius($given_value);
                $result = "$given_value Delisle = $celsius Celsius";
            } elseif ($second_temp_type_name=='kelvin') {
                $kelvin=delisle_to_kelvin($given_value);
                $result = "$given_value Delisle = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='rankine') {
                $rankine=delisle_to_rankine($given_value);
                $result = "$given_value Delisle = $rankine Rankine";
            } elseif ($second_temp_type_name=='newton') {
                $newton=delisle_to_newton($given_value);
                $result = "$given_value Delisle = $newton Newton";
            } elseif ($second_temp_type_name=='reaumur') {
                $reaumur=delisle_to_reaumur($given_value);
                $result = "$given_value Delisle = $reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
                $romer=delisle_to_romer($given_value);
                $result = "$given_value Delisle = $romer Romer";
            } else {
                $result = "$given_value Delisle";
            }
        }

        //Reaumur to fahrenheit, celsius, kelvin, rankine, newton, delisle and romer
        if ($first_temp_type_name=='reaumur'){
            if ($second_temp_type_name=='fahrenheit'){
                $fahrenheit=reaumur_to_fahrenheit($given_value);
                $result = "$given_value Reaumur = $fahrenheit Fahrenheit";
            } elseif ($second_temp_type_name=='celsius') {
                $celsius=reaumur_to_celsius($given_value);
                $result = "$given_value Reaumur = $celsius Celsius";
            } elseif ($second_temp_type_name=='kelvin') {
                $kelvin=reaumur_to_kelvin($given_value);
                $result = "$given_value Reaumur = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='rankine') {
                $rankine=reaumur_to_rankine($given_value);
                $result = "$given_value Reaumur = $rankine Rankine";
            } elseif ($second_temp_type_name=='newton') {
                $newton=reaumur_to_newton($given_value);
                $result = "$given_value Reaumur = $newton Newton";
            } elseif ($second_temp_type_name=='delisle') {
                $delisle=reaumur_to_delisle($given_value);
                $result = "$given_value Reaumur = $delisle Delisle";
            } elseif ($second_temp_type_name=='romer') {
                $romer=reaumur_to_romer($given_value);
                $result = "$given_value Reaumur = $romer Romer";
            } else {
                $result = "$given_value Reaumur";
            }
        }

        //Romer to fahrenheit, celsius, kelvin, rankine, newton, delisle and reaumur
        if ($first_temp_type_name=='romer'){
            if ($second_temp_type_name=='fahrenheit'){
                $fahrenheit=romer_to_fahrenheit($given_value);
                $result = "$given_value Romer = $fahrenheit Fahrenheit";
            } elseif ($second_temp_type_name=='celsius') {
                $celsius=romer_to_celsius($given_value);
                $result = "$given_value Romer = $celsius Celsius";
            } elseif ($second_temp_type_name=='kelvin') {
                $kelvin=romer_to_kelvin($given_value);
                $result = "$given_value Romer = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='rankine') {
                $rankine=romer_to_rankine($given_value);
                $result = "$given_value Romer = $rankine Rankine";
            } elseif ($second_temp_type_name=='newton') {
                $newton=romer_to_newton($given_value);
                $result = "$given_value Romer = $newton Newton";
            } elseif ($second_temp_type_name=='delisle') {
                $delisle=romer_to_delisle($given_value);
                $result = "$given_value Romer = $delisle Delisle";
            } elseif ($second_temp_type_name=='reaumur') {
                $reaumur=romer_to_reaumur($given_value);
                $result = "$given_value Romer = $reaumur Reaumur";
            } else {
                $result = "$given_value Romer";
            }
        }
    }

?>
