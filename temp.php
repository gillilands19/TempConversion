<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <meta name="description" content="A web based application to convert temperatures from one scale to another." />
        <link href='https://fonts.googleapis.com/css?family=Unkempt:400,700|Averia+Sans+Libre:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/tempstyles.css">
        <script src="https://code.jquery.com/jquery-2.2.0.js" type="text/javascript"></script>


        <title>Temperature Converter - Project One</title>
    </head>

    <body>

        <div class="site-wrapper">
            <div class="form-wrapper">
                <form action="results.php" method="post" name="temp_conversion" id="temp_form">
                    <h2>Convert From</h2>
                    <div class="btn-wrapper-outer" id="btn-wrapper-one">
                        <div class="btn-wrapper-inner">
                    <a href="javascript:void(0)" id="fahr_btn_one" onclick="return scaleOne_Click('fahrenheit');"><div class="scale_btn" id="fahr-wrapper">
                        <h3>
                            Fahrenheit
                        </h3>
                        </div></a>
                        <a href="javascript:void(0)" id="cels_btn_one" onclick="return scaleOne_Click('celsius')"><div class="scale_btn">
                        <h3>
                            Celsius
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="kelvin_btn_one" onclick="return scaleOne_Click('kelvin')"><div class="scale_btn">
                        <h3>
                            Kelvin
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="newton_btn_one" onclick="return scaleOne_Click('newton')"><div class="scale_btn">
                        <h3>
                            Newton
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="rankine_btn_one" onclick="return scaleOne_Click('rankine')"><div class="scale_btn">
                        <h3>
                            Rankine
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="romer_btn_one" onclick="return scaleOne_Click('romer')"><div class="scale_btn">
                        <h3>
                            Romer
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="delisle_btn_one" onclick="return scaleOne_Click('delisle')"><div class="scale_btn">
                        <h3>
                            Delisle
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="reaumur_btn_one" onclick="return scaleOne_Click('reaumur')"><div class="scale_btn">
                        <h3>
                            Reaumur
                        </h3>
                        </div></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="first_temp_type_name" value="" id="first_scale">
                    <div class="input-wrapper"><input type="text" name="given_value" placeholder="Enter The Temperature" id="temp_input" value="" required onfocus="if(this.value  != '') { this.value = ''; } "></div>
                    <!--<div class="result-wrapper"><h3 id="label_one"></h3></div>-->
                    <h2 id="label_two">Convert To</h2>
                    <div class="btn-wrapper-outer">
                        <div class="btn-wrapper-inner">
                        <a href="javascript:void(0)" id="fahr_btn_two" onclick="return scaleTwo_Click('fahrenheit')"><div class="scale_btn_two">
                        <h3>
                            Fahrenheit
                        </h3>
                        </div></a>
                        <a href="javascript:void(0)" id="cels_btn_two" onclick="return scaleTwo_Click('celsius')"><div class="scale_btn_two">
                        <h3>
                            Celsius
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="kelvin_btn_two" onclick="return scaleTwo_Click('kelvin')"><div class="scale_btn_two">
                        <h3>
                            Kelvin
                        </h3>
                        </div></a>
                        <a href="javascript:void(0)" id="newton_btn_two" onclick="return scaleTwo_Click('newton')"><div class="scale_btn_two">
                        <h3>
                            Newton
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="newton_btn_two" onclick="return scaleTwo_Click('rankine')"><div class="scale_btn_two">
                        <h3>
                            Rankine
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="romer_btn_two" onclick="return scaleTwo_Click('romer')"><div class="scale_btn_two">
                        <h3>
                            Romer
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="delisle_btn_two" onclick="return scaleTwo_Click('delisle')"><div class="scale_btn_two">
                        <h3>
                            Delisle
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="reaumur_btn_two" onclick="return scaleTwo_Click('reaumur')"><div class="scale_btn_two">
                        <h3>
                            Reaumur
                        </h3>
                        </div></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="second_temp_type_name" value="" id="second_scale">
                    <input type="submit" name="btn" value="Convert" id="submit_button">
                </form>
            </div>

        </div>

        <div class="result-wrapper"></div>

        <script type="text/javascript">
            //add value to first hidden form field on button click
            function scaleOne_Click(val){
                document.getElementById('first_scale').value = val;
                return true;
            }
            //add value to second hidden form field on button click
            function scaleTwo_Click(val){
                document.getElementById('second_scale').value = val;
                return true;
            }
            //remove/add "active" class based on which scale button of convert from is clicked
            $(".scale_btn").on("click", function(){
               $(".scale_btn").removeClass('active');
                $(this).addClass('active');
                $('body').animate({scrollTop: $('#temp_input').offset().top}, 'slow');
            });
            //remove/add "active" class based on which scale button of convert two is clicked
            $(".scale_btn_two").on("click", function(){
               $(".scale_btn_two").removeClass('active');
                $(this).addClass('active');
            });

            $('#temp_form').submit(function(e){
            e.preventDefault(); // Prevent Default Submission

            //submit the form using AJAX
            $.ajax({
            url: 'results.php', //process form data with results.php
            type: 'POST', // specifies the POST method
            data: $(this).serialize(), // it will serialize the form data
            dataType: 'html' //requests html from results.php to be returned.
            })
            //when form data is sent and processed the data requested fades into current page
            .done(function(data){
            $('.result-wrapper').fadeIn('slow', function(){
            $('.result-wrapper').fadeIn('slow').html(data);
            $('body').animate({scrollTop:0}, 'fast');
            $('html').addClass('no-scroll');
                });
            })
            //on failure to submit form alert box will display with error message
            .fail(function(){
            alert('Form Submission Failed!');
            });
            });

            //first attempt at AJAX submission guided by using the jquery documentation couldn't get this to work, it's also a bit long winded compared to the working version
            /*show results div on submit button click
            $("#submit_button").click(function(){
                $('body').scrollTop(0);
            });

            /*submit form using ajax
            $("#temp_form").submit(function(event) {

            // stop form from submitting normally
            event.preventDefault();

            // get the action attribute from the <form action=""> element
            var $form = $( this ),
            url = $form.attr( 'action' );

            // Send the data using post with element id first_scale, temp_input, second_scale
            var posting = $.post( url, {  first_scale: $('#first_scale').val(), temp_input: $('#temp_input').val(), second_scale: $('#second_scale').val() });

            posting.done(function(data) {
                    var content = $(data).find('.result-wrapper');
                    $(".result-wrapper").empty().append(content);
                });

    });*/

        </script>
    </body>
