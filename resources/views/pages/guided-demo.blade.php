

    <!--
    //abneet 8 june 19
    $country_list = DB::table('country')
        ->groupBy('country_name')
        ->get();
    $timezone_list = DB::table('timezone')
        ->groupBy('zone_id')
        ->get();
    $zone_list = DB::table('zone')
        ->groupBy('zone_id')
        ->get();
     -->

<!-- MENU STARTS -->

@extends('layouts.app')

<!-- MENU ENDS -->

@section('content')


<div class="container">

     <div class="row">
            <div class="col-md-12 col-sm-12 col-12 main-box">
                <div class="row">
                    


                     <div class="col-md-12 enquiry-box light-bg">
                        <div class="row">
                            <div class="col-md-8 offset-md-2" id="enquiry-form">
                                <form class="enquiry-form" id="guided-demo-form">
                              {{ csrf_field() }}

                                    <div class="row form-group element-margin">
                                        <div class="col-md-4">
                                            <label for="fullname">Your Country Time Zone <span class="mandatory">*</span></label>
                                        </div>

                                        <div class="row form-group element-margin">
                                            {{echo $_REQUEST['HTTP_HOST']}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                      <label for="fullname">Time Slot <span class="mandatory">*</span></label>
                                    </div>
                                    <div class="col-md-7">
                                      <select class="form-control" id="exampleFormControlSelect1" name="time_slot">
                                        <option value="">Select a time slot</option>
                                        <!-- <option value="1">09:30 am to 09:45 am</option>
                                        <option value="2">09:45 am to 10:00 am</option> -->
                                        <option value="3">10:00 am to 10:15 am</option>
                                        <option value="4">10:15 am to 10:30 am</option>
                                        <option value="5">10:30 am to 10:45 am</option>
                                        <option value="6">10:45 am to 11:00 am</option>
                                        <option value="7">11:00 am to 11:15 am</option>
                                        <option value="8">11:15 am to 11:30 am</option>
                                        <option value="9">11:30 am to 11:45 am</option>
                                        <option value="10">11:45 am to 12:00 pm</option>
                                        <option value="11">12:00 pm to 12:15 pm</option>
                                        <option value="12">12:15 pm to 12:30 pm</option>
                                        <option value="13">12:30 pm to 12:45 pm</option>
                                        <option value="14">12:45 pm to 01:00 pm</option>
                                        <!-- <option value="15">01:00 pm to 01:15 pm</option>
                                        <option value="16">01:15 pm to 01:30 pm</option>
                                        <option value="17">01:30 pm to 01:45 pm</option>
                                        <option value="18">01:45 pm to 02:00 pm</option> -->
                                        <option value="19">02:00 pm to 02:15 pm</option>
                                        <option value="20">02:15 pm to 02:30 pm</option>
                                        <option value="21">02:30 pm to 02:45 pm</option>
                                        <option value="22">02:45 pm to 03:00 pm</option>
                                        <option value="23">03:00 pm to 03:15 pm</option>
                                        <option value="24">03:15 pm to 03:30 pm</option>
                                        <option value="25">03:30 pm to 03:45 pm</option>
                                        <option value="26">03:45 pm to 04:00 pm</option>
                                        <option value="27">04:00 pm to 04:15 pm</option>
                                        <option value="28">04:15 pm to 04:30 pm</option>
                                        <option value="29">04:30 pm to 04:45 pm</option>
                                        <option value="30">04:45 pm to 05:00 pm</option>
                                        <option value="31">05:00 pm to 05:15 pm</option>
                                        <option value="32">05:15 pm to 05:30 pm</option>
                                        <option value="33">05:45 pm to 06:00 pm</option>
                                        <!-- <option value="34">06:00 pm to 06:15 pm</option> -->
                                        <!-- <option value="35">06:15 pm to 06:30 pm</option> -->
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row form-group element-margin">
                                    <div class="col-md-4">
                                      <label for="fullname">Full Name<span class="mandatory">*</span></label>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" class="form-control" id="full_name" name="full_name">
                                    </div>
                                  </div>
                                  <div class="row form-group element-margin">
                                    <div class="col-md-4">
                                      <label for="fullname">Company Name<span class="mandatory">*</span></label>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                  </div>
                                  <div class="row form-group element-margin">
                                    <div class="col-md-4">
                                      <label for="fullname">Mobile No<span class="mandatory">*</span></label>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="text" class="form-control" id="mobile" name="mobile">
                                    </div>
                                  </div>
                                  <div class="row form-group element-margin">
                                    <div class="col-md-4">
                                      <label for="exampleInputEmail1">Email Address<span class="mandatory">*</span></label>
                                    </div>
                                    <div class="col-md-7">
                                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                                    </div>
                                  </div>


                                  
                                

                                <div class="row form-group element-margin">
                                    <div class="col-md-7 offset-md-4">
                                      <button type="button" class="btn btn-danger quote-modal-btn element-margin" id="schedule-demo">Request a Guided CRM Demo</button>
                                    </div>
                                  </div>

                              </form>
                            </div>
                            <div class="col-md-12" id="enquiry-success" style="display:none">
                                <h4 class="center contact-heading">Enquire about Real Estate CRM</h4>
                                <div class="enquiry-success-div">
                                    <p>Hi <span id="client-name"></span>,</p>
                                    <p class="enquiry-ty-text">Thank you for your enquiry.</p>
                                    <p><b>Your enquiry</b> is assigned to <b>Redlava Sales Team.</b> They will contact you, alternatively you could reach them on the contact details given below.</p>
                                </div>
                                <div class="enquiry-success-div enquiry-contact">
                                    <p class="enquiry-contact-title">If any questions / concerns contact</p>
                                    <p>sales(at)redlava(dot)com</p>
                                    <p>(+91) 920 9096 844 / 920 9096 855 / 932 4414 355</p>
                                    <p class="enquiry-timing">(Timing : 10am to 1pm &amp; 2pm to 6pm, Mon to Fri)</p>
                                    <p class="enquiry-satisfaction">Your satisfaction is important to us.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>

            </div>
        </div>
      

</div>


<!-- Form Ends -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<script>

$( document ).ready(function() {
    var today =  new Date();
    var today_date = formatDate(today);
    
    $(".date_picker1").flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate:"today",
        "disable": [today_date,
        function(date) {
            // return true to disable
            return (date.getDay() === 0 || date.getDay() === 6);

        }
    ],
    });
    $(".date_picker1").css('background-color', 'white');


    $('#schedule-demo').click(function(){
        $.ajax({
                url:'/save-schedule-demo',
                data:$('#guided-demo-form').serialize(),
                type:'POST',
                dataType: "json",
                beforeSend: function() {
                    $("#schedule-demo").html("Requesting...");
                    $("#schedule-demo").attr("disabled", 'disabled');
                    $('#error-msgs').hide();
                    $('#error-msgs-top').hide();
                },
                success:function(data){
                    $('#error-msgs').hide();
                    $('#error-msgs-top').hide();
                    var name = btoa(data.name);
                    var day_date = btoa(data.day_date);
                    var time = btoa(data.time);
                    var lead_id = btoa(data.lead_id);

                    window.location.href="/guided-demo-success/"+name+"/"+day_date+"/"+time+"/"+lead_id;
                    $("#schedule-demo").html("Demo Requested");
                    $("#schedule-demo").removeClass("feature-button");
                    $("#schedule-demo").addClass("btn-success");
                    $('#error').hide();
                    $("#full_name").val("");
                    $("#company").val("");
                    $("#mobile").val("");
                    $("#email").val("");
                    $("#index_enquiry_form").hide();
                    $("#index_lenq_curr_page").val("");
                    $("#index_lenq_curr_section").val("");
                    $("#index_lenq_curr_industry").val("");
                    $("#index_lenq_curr_location").val("");
                    $("#index_lenq_curr_ip").val("");
                    $("#schedule-demo").attr("disabled", 'disabled');
                    //$("#index_enquiry_successnotif").show();
                },
                 error: function( data )
                { 
                    $("#schedule-demo").html("Request My CRM Demo");
                    $("#schedule-demo").removeAttr("disabled");
                    var errorText = data['responseText'];
                    var temp = $.parseJSON(errorText);

                    var div_error = [];

                    var numeric_array = new Array();
                    for (var items in temp['errors']){
                        numeric_array.push( temp['errors'][items] );
                    }

                    var numeric_array2 = new Array();
                    for (var items in numeric_array){
                        numeric_array2.push( numeric_array[items][0] );
                    }

                   
                    $('#error-msgs').html(numeric_array2.join('<br>')).show();
                    $('#error-msgs-top').html(numeric_array2.join('<br>')).show();

                }
            });
        
            // $(".submit-signup").removeAttr("disabled");
            // $(".submit-signup").html("Submit");
            // $('#error').show();
        
    });



});
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}
    
</script>
<!--abneet script for zone code -->
@stop




















