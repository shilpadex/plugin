<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style type="text/css">
  table#table_custom {
    margin: 27px 0px;
}
button.add {
    margin-top: 10px;
}
select#type {
    margin-bottom: 10px;
}
label.type {
    margin-bottom: 10px;
}
input[type="submit"] {
    margin: 10px 3px;
    padding: 4px 4px;
}
select#type {
    width: 127px;
}
 /* select#options {
  width: 126px;
}*/
form#up {
    display: flex;
    flex-direction: column;
}

table#table td {
    font-size: 20px;
    text-align: center;
    padding-bottom: 22px;
}

input#s_no {
    width: 53px;
    padding: 3px 10px;
}

button.close {
    position: absolute;
    top: -24px;
    right: -8px;
    font-size: 45px;
    border: none;
    background: none;
}


button.close-btn.btn-secondary {
    position: absolute;
    bottom: 28px;
    left: 40%;
    font-size: 16px;
    padding: 4px 30px;
}
.modal-header2 h2 {
    margin-top: 0px;
   
}


input[type="submit"] {
    margin: 10px 3px;
    padding: 5px 4px;
    font-size: 16px;
    text-transform: uppercase;
 
}

div#myModal {
    padding: 39px 29px 80px;
    border-radius: 10px;
}
button.back {
    padding: 4px 18px;
    font-size: 16px;
}
label.type {
    font-size: 16px;
 
}
select#type {
    margin-top: 12px;
}
.input1 {
    margin-top: 22px;
}
select#options {
    margin: 12px 0px;
}
button.add {
    margin-top: 10px;
    font-size: 20px;
    padding: 4px 22px;
}

div#BUTTON {
    text-align: end;
}

label.type {
    margin-bottom: 10px;
    font-size: 32px !important;
    color: #1d2327;
    font-weight: 600;
}

 select#options {
    width: 40% !important;
    max-width: unset;
}
select#size {
    width: 40%;
}

input[type="submit"] {
    margin: 28px 0px 0px;
    padding: 7px 26px;
    background: #000;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 20px;
    text-transform: capitalize !important;
}

button.back {
    padding: 4px 18px !important;
    font-size: 16px;
    margin-top: 60px;
    background: #000;
  color: #fff;
}
.add_main {
    width: unset !important;
    margin: unset !important;
}
select#type {
    margin-top: 12px;
/*    width: 100% !important;*/
}
div#BUTTON {
    text-align: end;
}

label.type {
    margin-bottom: 10px;
    font-size: 32px !important;
    color: #1d2327;
    font-weight: 600;
}

 select#options {
    width: 100%;
}
select#size {
    max-width: unset;
}

input[type="submit"] {
    margin: 28px 0px 0px !important;
   padding: 7px 10px !important;
    background: #000;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 20px !important;
    text-transform: capitalize;
}

button.back {
    padding: 4px 18px !important;
    font-size: 20px !important;
    margin-top: 60px !important;
    background: #000;
  color: #fff;
}
.outer_section {
    border: 2px solid #00000029 !important;
    padding: 40px;
    margin-top: 60px;
    background: #fff;
}

input[type="submit"] {
    padding: 6px 30px !important;
}

label.type {
    margin-bottom: unset;
    font-size: 32px !important;
    color: #1d2327;
    padding-top: 6px !important;
    font-weight: 600;
}

button.back {
    
    margin-bottom: 38px !important;
}
button.add {
    margin-top: 28px;}
button.back {
    border: none !important;
}
.errormsg {
    padding: 10px 0;
    font-size: 18px;
}
input#submit_1 {
    cursor: pointer;
}
button.back {
    cursor: pointer;
}
#size {
    display: none; /* Hide .type class by default */
}
input#customQuestionInput {
    width: 40%;
    padding: 6px;
}
textarea#customOption {
    width: 40%;
    margin-top: 10px;
}
select#type {
    margin-top: 12px;
    width: 40% !important;
    max-width: unset;
}



@media screen and (max-width: 812px) {

.dasboard_1 {
    overflow: scroll;
  
}

table#table_custom {
    display: block;
}

#wpcontent, #wpfooter {
    margin-right: unset !important;
}

#wpcontent {
    height: 100%;
    padding-left: 14px;
    padding-right: 14px;
}

}

@media screen and (max-width: 812px) {
.modal-content {
 
   right: 0% !important;  
    padding: 44px !important;
    margin: 20px !important;
}


table#table_custom {
    /* margin: 27px 0px; */
    width: 164%;
}
.modal-dialog {
    width: 100% !important
    }

    .modal-content {
    top: 118px ;
}


.modal-dialog {
    background: #fff;
    padding: 30px;
 
    position: relative;
  
    width: 100%;
    border-radius: 10px;
    margin: 0 auto;
}

.modal1 {
    padding: 0px !important;
}
.modal-content {
    top: 60px !important;
    position: relative !important;
}

}
</style>
	<title>Backend</title>
</head>
<body>
<div class="container">
    <div id="BUTTON"> <button class="add">Add</button>   </div> 
    <div class="outer_section" style="display:none;" >   
    <button class="back" style="display:none;">Back</button >
     
    <div class="add_main" >
    <!-- <button class="add">Add</button> -->
    <div class="form_main" style="display:none;" >
	
	<form class="form_sec" method="post" id="myForm">
   <div class="dashboard" > 
     <div class="type">
           <label class="type">Select Input Type</label></div>
       <select id="options" name="type">
           <option value="checkbox">Checkbox</option>
            <option value="email">Email</option>
            <option value="number">Number</option>
             <option value="text">Text</option>
            <!-- Add more input types as needed -->
        </select>
    </div>



   <label class="type">Questions</label>         
  <select id="type" class="main" name="question" onchange="handleQuestionChange()">
  <option>Select any</option>
     <option value="Other">Other (Type your question)</option> <!-- Added "Other" option -->
  <option value="How did you hear about me and Jamberry?">How did you hear about me and Jamberry?</option>
  <option value="Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?">Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?</option>
  <option value="Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?">Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?</option>
        <option value="Pick Two" >Pick Two</option>
        <option  value="First Name">First Name</option>
         <option  value="Last Name">Last Name</option>
        <option value='Street Address'>Street Address</option>
        <option value='Apt. #'>Apt. #</option>
        <option value='City'>City</option>
        <option value='State'>State</option>
        <option value='Zip code'>Zip code</option>
        <option value='Country'>Country</option>
        <option  value="Preferred Method of Contact" >Preferred Method of Contact</option>
         <option  value="Email" >Email</option>
         <option value='Confirm Email'>Confirm Email</option>
         <option value='Area code'>Area code</option>
          <option  value="Phone number" >Phone number</option>
            <option value='Who is your party host?'>Who is your party host?</option>
            
        </select>
</select>

 
</div>
<div id="customQuestion" style="display: none;">
           <input type="text" id="customQuestionInput" name="customQuestionInput" placeholder="Enter your custom question">
        </div>
<div>
    <div id="customOptionsDiv" style="display: none;">
   <textarea id="customOption" name="customOption" placeholder="Enter an option"></textarea>
   
</div>
  <select id="size" name="Option[]" multiple>
    <option value="">-- Select one -- </option>
</select>
</div>

 <div>
       
      <input type="submit" class="submit_2" name="submit" >
       
       </form>
</div>
</div>
</div>
</div>

</body>
</html>
 <script type="text/javascript">
   
// $(document).ready(function () {
//     $("#type").change(function () {
//         var val = $(this).val();
//         if (val == "How did you hear about me and Jamberry?") {
//             $("#size").html("<option value='From a party'>From a party.</option><option value='From Facebook.'>From Facebook.</option><option value='From Twitter.'>From Twitter.</option><option value='From Instagram.'>From Instagram.</option><option value='Others.'>Others.</option>");
//         }
//          else if (val == "Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?") {
//             $("#size").html("<option value='Yes! Lets set a date!'>Yes! Lets set a date!</option><option value='Maybe, please send me more information. I want to see if I like the wraps first!'>Maybe, please send me more information. I want to see if I like the wraps first!</option><option value='Not right now, but ask me in a couple months!'>Not right now, but ask me in a couple months!</option><option value='No Thanks!'>No Thanks!</option>");
//         }
//          else if (val == "Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?") {
//             $("#size").html("<option value='YES!!! Lets talk about it!'>YES!!! Lets talk about it!</option><option value='Maybe, please send me more information'>Maybe, please send me more information</option><option value='Not right now.'>Not right now.</option><option value='No thanks!'>No thanks!</option>");
//         }
//         else  if (val == "Other") {
//             // If "Other" is selected, show the custom question input
//             $("#customQuestionInput").show();
//              $("#customOptionsDiv").show();
//               $("#size").hide();
//                // $("#type").hide();
//         } else {
//             // If any other option is selected, hide the custom question input
//             $("#customQuestionInput").hide();
//              $("#customOptionsDiv").hide();
//                 $("#size").hide();
//                  // $("#type").show();
//         }
     
       
//     });
// });


    $(document).ready(function () {
    // Attach an event handler to the "type" select element
    $("#type").change(function () {
        var val = $(this).val();
        var selectedOption = $("#options").val();

        if ((selectedOption === "checkbox") &&
            (val === "How did you hear about me and Jamberry?" ||
             val === "Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?" ||
             val === "Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?")) {
            $("#size").show();
        } else {
            $("#size").hide();
        }

        // Your existing code for the "type" select element
        if (val == "How did you hear about me and Jamberry?") {
            $("#size").html("<option value='From a party'>From a party.</option><option value='From Facebook.'>From Facebook.</option><option value='From Twitter.'>From Twitter.</option><option value='From Instagram.'>From Instagram.</option><option value='Others.'>Others.</option>");
        } else if (val == "Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?") {
            $("#size").html("<option value='Yes! Lets set a date!'>Yes! Lets set a date!</option><option value='Maybe, please send me more information. I want to see if I like the wraps first!'>Maybe, please send me more information. I want to see if I like the wraps first!</option><option value='Not right now, but ask me in a couple months!'>Not right now, but ask me in a couple months!</option><option value='No Thanks!'>No Thanks!</option>");
        } else if (val == "Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?") {
            $("#size").html("<option value='YES!!! Lets talk about it!'>YES!!! Lets talk about it!</option><option value='Maybe, please send me more information'>Maybe, please send me more information</option><option value='Not right now.'>Not right now.</option><option value='No thanks!'>No thanks!</option>");
         }
          else if (val == "Other" ) {
            // If "Other" is selected, show the custom question input
            $("#customQuestion").show();
            $("#customOptionsDiv").show();
            $("#size").hide();
        } else {
            // If any other option is selected, hide the custom question input
            $("#customQuestion").hide();
            $("#customOptionsDiv").hide();
            $("#size").hide();
        }
     });

    // Your existing code for the "options" select element
    $('#options').on('change', function() {
        var selectedOption = $(this).val();
        var val = $("#type").val();

        if ((selectedOption === "checkbox") &&
            (val === "How did you hear about me and Jamberry?" ||
             val === "Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?" ||
             val === "Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?")) {
            $('#size').show();
        } else {
            $('#size').hide();
        }
    });
});

</script> 
 



<?php 
// if (isset($_POST['submit'])) {
//     global $wpdb, $table_prefix;
//     $wp_emp = $wpdb->prefix . 'formplugin';

//     // Check if 'Option' is set in $_POST
//     if (isset($_POST['Option'])) {
//         // Extract values from the selected options array
//         $selectedOptionsValues = array_values($_POST['Option']);

//         // Convert the values to a string with line breaks
//         $selectedOptionsString = implode("\n", $selectedOptionsValues);
//     } else {
//         // If 'Option' is not set, you can set a default value or handle it as needed
//         $selectedOptionsString = ''; // Set a default value, or any other handling
//     }

//     $post_data = array(
//         'Questions' => $_POST['question'],
//         'Questions_SUB' => $selectedOptionsString, // Insert the string with line breaks
//         'type' => $_POST['type']
//     );

//     $wpdb->insert($wp_emp, $post_data);
// }


if (isset($_POST['submit'])) {
    global $wpdb, $table_prefix;
    $wp_emp = $wpdb->prefix . 'formplugin';

    // Check if 'type' is set to "Other"
   if (isset($_POST['question']) && $_POST['question'] === "Other") {
    // Custom logic for Questions_SUB
    if ($_POST['type'] === "checkbox") {
        // Handle customOption as an array and implode with '\n'
        $questionsSubValue = is_array($_POST['customOption']) ? implode("\n", $_POST['customOption']) : $_POST['customOption'];
    } else {
        // Handle other cases where customOption is not involved
        $questionsSubValue = ''; // You can set a default value or handle it as needed
    }

    $post_data = array(
        'Questions' => $_POST['customQuestionInput'],
        'Questions_SUB' => $questionsSubValue,
        'type' => $_POST['type']
    );
}else {
        // If 'question' is not "Other," use the original fields
        $selectedOptionsString = is_array($_POST['Option']) ? implode("\n", $_POST['Option']) : '';
        $post_data = array(
            'Questions' => $_POST['question'],
            'Questions_SUB' => $selectedOptionsString,
            'type' => $_POST['type']
        );
    }

    $wpdb->insert($wp_emp, $post_data);
}

?>
<script>
$(document).ready(function(){
  $(".add").click(function(){
    $(".form_main").show();
    $("#table_custom").hide();
    $(".back").show();
    $(".add").hide();
    $("#deletemodel").hide();
     $(".outer_section").show();
  });
    $(".back").click(function(){
    $(".add").show();
    $("#table_custom").show();
     $(".form_main").hide();
      $(".back").hide();
        $(".outer_section").hide();
  });
});
</script>
<script type="text/javascript">
$(document).on("click",".add", function(){
        $('.form_main').show();
    });
</script>



<script>

function handleQuestionChange() {
    var selectElement = document.getElementById("type");
    var customQuestionInput = document.getElementById("customQuestionInput");
    var customQuestion = document.getElementById("customQuestion");
    var customOptionsDiv = document.getElementById("customOptionsDiv");
    var sizeDiv = document.getElementById("size");

    if (selectElement.value === "Other") {
        if (selectElement.value === "checkbox") {
            customQuestion.style.display = "block";
            customOptionsDiv.style.display = "block"; // Show both customQuestion and customOptionsDiv
        } else {
            customQuestion.style.display = "block";
            customOptionsDiv.style.display = "none"; // Show customQuestion and hide customOptionsDiv for other options
        }
        sizeDiv.style.display = "none"; // Hide the size div
    } else {
        customQuestion.style.display = "none";
        customOptionsDiv.style.display = "none";
        customQuestionInput.value = "";
        sizeDiv.style.display = "none";
    }
}

</script>
<script type="text/javascript">
     $(document).ready(function () {
      $('#options').on('change', function() {
        var selectedOption = $(this).val();
        var val = $("#type").val();

        if ((selectedOption === "checkbox")&&(val === "Other"))
             {
            $('#customQuestion').show();
             $('#customOptionsDiv').show();
        } else {
           
             $('#customOptionsDiv').hide();
        }
    });
});

</script> 







