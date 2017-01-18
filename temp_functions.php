<?php
// temp_functions.php

//Celsius to Fahrenheit ° F = 9/5 ( ° C) +
//Celsius to Kelvin K = ° C + 273
//Celsius to Rankine R = ° C * 1.8 + 491.67
//Celsius to Newton N = ° C * 0.33
//Celsius to Delisle D = ° (C * 1.5) - 100
//Celsius to Romer RO = ° (C * 21 / 40) + 7.5-
//Celsius to Reaumur RE = °C * 0.8

//Fahrenheit to Celsius ° C = 5/9 (° F - 3
//Fahrenheit to Kelvin ° K = (F+459.67)*5/9
//Fahrenheit to Rankine ° RK = F + 459.67
//Fahrenheit to Newton ° N = (F - 32) * 11/60
//Fahrenheit to Delisle ° D = (212 - F) * 5/6
//Fahrenheit to Romer ° R = (F - 32) * 4/9
//Fahrenheit to Reaumur ° RE = (F - 32)*7/24+7.5

//Kelvin to Celsius ° C = K - 273
//Kelvin to Fahrenheit ° F = 9/5 (K - 273.15)
//Kelvin to Rankine ° RK = K * 1.8
//Kelvin to Newton ° N = (K - 273.15) * 0.33
//Kelvin to Delisle ° D = (373.15 - K) * 3/2
//Kelvin to Romer ° RO = ((K - 273.15) * 0.525)) + 7.25
//Kelvin to Reaumur ° RE = (K - 273.15) * 0.8

//Rankine to Celsuis ° C = (RK - 491.67) * 1.8
//Rankine to Fahrenheit ° F = RK - 459.67
//Rankine to Kelvin ° K = RK / 1.8
//Rankine to Newton ° N = (RK - 491.67) * 11 / 60
//Rankine to Delisle ° D = (671.67 - RK) * 5 / 6
//Rankine to Romer ° RO = ((RK - 491.67) * 0.02967)) + 7.5
//Rankine to Reaumur ° RE = (RK - 491.67) / 2.25

//Newton to Celsuis ° C = N / 0.33
//Newton to Fahrenheit ° F = (60 * N / 11) + 32
//Newton to Kelvin ° K = (N / .33)  +273.15
//Newton to Rankine ° RK = N * 5.4545 + 491.67
//Newton to Delisle ° D = (N * 4.5455) - 100
//Newton to Romer ° RO = N * (35 / 22) + 7.5
//Newton to Reaumur ° RE = N * 80 / 33

//Delisle to Celsuis ° C = (100 - D) * 2  / 3
//Delisle to Fahrenheit ° F = (D + 100) * 1.2 + 32
//Delisle to Kelvin ° K = 37.15 - (D * 2 / 3)
//Delisle to Rankine ° RK = (671.67 - D) * 6 / 5
//Delisle to Newton ° N = (33 - D) * 11 / 50
//Delisle to Romer ° RO = (60 - D) * 7 / 20
//Delisle to Reaumur ° RE = (80 - D) * 8 / 15

//Romer to Celsuis ° C = (RO - 7.5 ) / 0.525
//Romer to Fahrenheit ° F = (RO - 7.5) * 24 / 39
//Romer to Kelvin ° K = (R - 7.5) * 40 / 294.15
//Romer to Kelvin ° K = 21/40 * (R - 273.15) + 7.5  I USED THIS ONE
//Romer to Rankine ° RK = ((RO - 7.5) * 24 / 7) + 491.67
//Romer to Newton ° N = (RO - 7.5) * 22 / 35
//Romer to Delisle ° D = (60 - RO) * 20 / 7
//Romer to Reaumur ° RE = (RO - 7.5) * 32 / 21

//Reaumur to Celsuis ° C = RE * 1.25
//Reaumur to Fahrenheit ° F = (RE * 2.25) + 32
//Reaumur to Kelvin ° K = (RE * 125) + 273.15
//Reaumur to Rankine ° RK = (RE * 2.25) +491.67
//Reaumur to Newton ° N = RE * 33 / 80
//Reaumur to Delisle ° D = (60 - RE) * 20 / 7
//Reaumur to Romer ° RO = (RE * 0.65625) + 7.5

//Fahrenheit to celsius
function fahrenheit_to_celsius($given_value)
{
	$celsius=5/9*($given_value-32);
	return number_format($celsius,2);
}
//Fahrenheit to kelvin
function fahrenheit_to_kelvin($given_value)
{
	$kelvin=($given_value+459.67)*5/9;
	return number_format($kelvin,2);
}
//Fahrenheit to rankine
function fahrenheit_to_rankine($given_value)
{
    $rankine=$given_value+459.67;
    return number_format($rankine,2);
}
//Fahrenheit to newton
function fahrenheit_to_newton($given_value)
{   $newton=($given_value-32)*11/60;
    return number_format($newton,2);
}
//Fahrenheit to delisle
function fahrenheit_to_delisle($given_value)
{
    $delisle=(212-$given_value)*5/6;
    return number_format($delisle,2);
}
//Fahrenheit to romer
function fahrenheit_to_romer($given_value)
{
    $romer=($given_value-32)*7/24+7.5;
    return number_format($romer,2);
}
//Fahrenheit to reaumur
function fahrenheit_to_reaumur($given_value)
{
    $reaumur=($given_value-32)/2.25;
    return number_format($reaumur,2);
}
//Celsius to fahrenheit
function celsius_to_fahrenheit($given_value)
{
	$fahrenheit=$given_value*9/5+32;
	return number_format($fahrenheit,2);
}
//Celsinumber_format($,2)us to kelvin
function celsius_to_kelvin($given_value)
{
	$kelvin=$given_value+273.15;
	return number_format($kelvin,2);
}
//Celsius to rankine
function celsius_to_rankine($given_value)
{
    $rankine=($given_value*1.8)+491.67;
    return number_format($rankine,2);
}
//Celsius to newton
function celsius_to_newton($given_value)
{
    $newton=$given_value*0.33;
    return number_format($newton,2);
}
//Celsius to delisle
function celsius_to_delisle($given_value)
{
    $delisle=(100-$given_value)*3/2;
    return number_format($delisle,2);
}
//Celsius to romer
function celsius_to_romer($given_value)
{
    $romer=($given_value*21/40)+7.5;
    return number_format($romer,2);
}
//Celsius to reaumur
function celsius_to_reaumur($given_value)
{
    $reaumur=$given_value*0.8;
    return number_format($reaumur,2);
}
//Kelvin to fahrenheit
function kelvin_to_fahrenheit($given_value)
{
	$fahrenheit=9/5*($given_value-273.15)+32;
	return number_format($fahrenheit,2);
}
//Kelvin to celsius
function kelvin_to_celsius($given_value)
{
	$celsius=$given_value-273.15;
	return number_format($celsius,2);
}
//Kelvin to rankine
function kelvin_to_rankine($given_value)
{
    $rankine=$given_value*9/5;
    return number_format($rankine,2);
}
//Kelvin to newton
function kelvin_to_newton($given_value)
{
    $newton=($given_value-273.15)*33/100;
    return number_format($newton,2);
}
//Kelvin to delisle
function kelvin_to_delisle($given_value)
{
    $delisle=(373.15-$given_value)*3/2;
    return number_format($delisle,2);
}
//Kelvin to romer
function kelvin_to_romer($given_value)
{
    $romer=($given_value - 273.15)* 0.52500 + 7.50;
    return number_format($romer,2);
}
//Kelvin to reaumur
function kelvin_to_reaumur($given_value)
{
    $reaumur=($given_value-273.15)*4/5;
    return number_format($reaumur,2);
}
//Rankine to fahrenheit
function rankine_to_fahrenheit($given_value)
{
    $fahrenheit=$given_value-459.67;
    return number_format($fahrenheit,2);
}
//Rankine to celsius
function rankine_to_celsius()
{
    $celsius=($given_value-491.67)*1.8;
    return number_format($celsius,2);
}
//Rankine to kelvin
function rankine_to_kelvin($given_value)
{
    $kelvin=$given_value/1.8;
    return number_format($kelvin,2);
}
//Rankine to newton
function rankine_to_newton($given_value)
{
    $newton=($given_value-491.67)*11/60;
    return number_format($newton,2);
}
//Rankine to delisle
function rankine_to_delisle($given_value)
{
    $delisle=(671.67-$given_value)*5/6;
    return number_format($delisle,2);
}
//Rankine to romer
function rankine_to_romer($given_value)
{
    $romer=0.02967*($given_value-491.67)+7.5;
    return number_format($romer,2);
}
//Rankine to reaumur
function rankine_to_reaumur($given_value)
{
    $reaumur=($given_value-491.67)*(4/9);
    return number_format($reaumur,2);
}
// Newton to fahrenheit
function newton_to_fahrenheit($given_value)
{
    $fahrenheit=$given_value * 60/11 + 32;
    return number_format($fahrenheit,2);
}
// Newton to celsius
function newton_to_celsius($given_value)
{
    $celsius=$given_value/0.33;
    return number_format($celsius,2);
}
// Newton to kelvin
function newton_to_kelvin($given_value)
{
    $kelvin=($given_value/0.33)+273.15;
    return number_format($kelvin,2);
}
// Newton to rankine
function newton_to_rankine($given_value)
{
    $rankine=$given_value*5.4545+491.67;
    return number_format($rankine,2);
}
// Newton to delisle
function newton_to_delisle($given_value)
{
    $delisle=(33-$given_value)*50/11;
    return number_format($delisle,2);
}
// Newton to romer
function newton_to_romer($given_value)
{
    $romer=$given_value*(35/22)+7.5;
    return number_format($romer,2);
}
// Newton to reaumur
function newton_to_reaumur($given_value)
{
    $reaumur=$given_value*80/33;
    return number_format($reaumur,2);
}
// Delisle to fahrenheit
function delisle_to_fahrenheit($given_value)
{
    $fahrenheit=212-$given_value*6/5;
    return number_format($fahrenheit,2);
}
// Delisle to celsius
function delisle_to_celsius($given_value)
{
    $celsius=100-$given_value*2/3;
    return number_format($celsius,2);
}
// Delisle to kelvin
function delisle_to_kelvin($given_value)
{
    $kelvin=373.15-($given_value*2/3);
    return number_format($kelvin,2);
}
// Delisle to rankine
function delisle_to_rankine($given_value)
{
	$rankine=671.67-$given_value*6/5;
	return number_format($rankine,2);
}
// Delisle to newton
function delisle_to_newton($given_value)
{
    $newton=33-$given_value*11/50;
    return number_format($newton,2);
}
// Delisle to romer
function delisle_to_romer($given_value)
{
    $romer=60-$given_value*7/20;
    return number_format($romer,2);
}
// Delisle to reaumur
function delisle_to_reaumur($given_value)
{
	$reaumur=80-$given_value*8/15;
	return number_format($reaumur,2);
}
function romer_to_fahrenheit($given_value)
{
    $fahrenheit=($given_value-7.5)*(24/7)+32;
    return number_format($fahrenheit,2);
}
// Romer to celsuis
function romer_to_celsius($given_value)
{
    $celsius=($given_value-7.5)/0.525;
    return number_format($celsius,2);
}
// Romer to kelvin
function romer_to_kelvin($given_value)
{
    $kelvin=21/40*($given_value-273.15)+7.15;
    //$kelvin=($given_value-7.5)*40/294.15;
    return number_format($kelvin,2);
}
// Romer to rankine
function romer_to_rankine($given_value)
{
    $rankine=24/7*($given_value - 7.5)+491.67;
    return number_format($rankine,2);
}
// Romer to newton
function romer_to_newton($given_value)
{
    $newton=($given_value-7.5)*22/35;
    return number_format($newton,2);
}
// Romer to delisle
function romer_to_delisle($given_value)
{
    $delisle=(60-$given_value)*20/7;
    return number_format($delisle,2);
}
// Romer to reaumur
function romer_to_reaumur($given_value)
{
    $reaumur=($given_value-7.5)*32/21;
    return number_format($reaumur,2);
}
// Reaumur to fahrenheit
function reaumur_to_fahrenheit($given_value)
{
    $fahrenheit=($given_value*2.25)+32;
    return number_format($fahrenheit,2);
}
// Reaumur to celsius
function reaumur_to_celsius($given_value)
{
    $celsius=$given_value*1.25;
    return number_format($celsius,2);
}
// Reaumur to kelvin
function reaumur_to_kelvin($given_value)
{
    $kelvin=($given_value*125)+273.15;
    return number_format($kelvin,2);
}
// Reaumur to rankine
function reaumur_to_rankine($given_value)
{
    $rankine=($given_value*2.25)+491.67;
    return number_format($rankine,2);
}
// Reaumur to newton
function reaumur_to_newton($given_value)
{
    $newton=$given_value*33/80;
    return number_format($newton,2);
}
// Reaumur to delisle
function reaumur_to_delisle($given_value)
{
    $delisle=(80-$given_value)*15/8;
    return number_format($delisle,2);
}
// Reaumur to romer
function reaumur_to_romer($given_value)
{
    $romer=($given_value*0.65625)+7.5;
    return number_format($romer,2);
}
?>
