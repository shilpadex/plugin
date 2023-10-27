<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style type="text/css">
   
.form_main_a {
    display: flex !important;
    flex-direction: column !important;
}

.wp-core-ui select {
    font-size: 14px !important;
    line-height: 40px !important;
}

div#myModal {
    top: 60px !important;
    position: fixed;
    right: 26%;
    box-shadow: 0px 0px 6px 0px #00000042;
    background: #fff !important;
}



label {

    padding: 20px 0px 8px !important;
    font-size: 16px !important;;
    table#table_custom tr td color: #000;
}
button.close-btn.btn-secondary {
   
    position: unset !important;
    
    padding: 4px 14px !important;
}


input[type="submit"] {
    margin: 28px 0px 0px;
    padding: 10px 4px;
    background: #000;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 20px;
    text-transform: uppercase;
}



button.close-btn.btn-secondary{
   cursor: pointer;
}
input[type="submit"]:hover {
    color: #747474;
}
.modal-header2 h2 {
    text-align: center;
    font-size: 27px;
    font-weight: 500;
    color: #000;
    margin-bottom: 8px;
}

.type {
    display: flex;
    flex-direction: column;
} 
.Questions {
    display: flex;
    flex-direction: column;
}
.Choices {
    display: flex;
    flex-direction: column;
}
table#table_custom tr td {
    border: 1px solid #00000073;
}
.dasboard_1 {
    text-align: center;
}


div#myModal {
    top: 0px !important;
    position: fixed;
    right: 0;
    /* box-shadow: 0px 0px 6px 0px #00000042; */
    background: #99919154 !important;
    left: 0;
    bottom: 0;
    display: flex;
    align-items: center;
}
.modal-dialog {
    width: 31%;
    background: #fff;
    padding: 30px;
    position: relative;
    border-radius: 10px;
    margin: 0 auto;
}

button.close-btn.btn-secondary {
    /* position: absolute; */
    margin: 20px auto 0px auto;
    bottom: 0;
    text-align: center;
    width: 23%;
    font-size: 19px;
    
} 

button.close {
/*    position: absolute;*/
    top: -25px;
    right: -10px;
    font-size: 45px;
    border: none;
    background: none;
}
table#table_custom td {
    text-align: center;
}
table#table_custom thead tr td {
    font-size: 18px;
    font-weight: 600;
}
.modal-content {
    top: 127px !important;
    position: fixed;
    right: 28%;
    box-shadow: 0px 0px 6px 0px #00000042;
    background: #fff !important;
    padding: 80px;
    text-align: center;
    border-radius: 10px;
}
h4.modal-title.text-center.text-warning {
    text-align: center;
    font-size: 27px;
    font-weight: 500;
    margin-top: 0;
    color: #000;
    margin-bottom: 8px;
}

.wp-die-message, p {
    font-size: 17px;
    line-height: 1.5;
    margin: 1em 0;
}

button.cls.w-50 {
    padding: 4px 10px;
    font-size: 18px;
}
button.deleteuserbutton.w-50 {
    padding: 8px 12px;
    font-size: 16px;
    background: #000;
    color: #fff;
    border: none;
}

button.cls.w-50 {
    padding: 6px 14px;
    font-size: 18px;
    background: #000;
    color: #fff;
    margin-left: 20px;
    border: none;
}


.modal1 {
    top: 60px !important;
    position: fixed;
    right: 0;
    box-shadow: 0px 0px 6px 0px #00000042;
 
    padding: 80px;
    text-align: center;
    left: 0;
    top: 0 !important;
    border-radius: 10px;
    bottom: 0;
    background: #201f1f57 !important;
}
button.delete-btn {
    border: none;
    background: none;
    font-size: 18px;
    color: red;
    font-weight: 600;
}
button.edit-btn {
    background: none;
    border: none;
    color: blue;
    font-size: 18px;
    font-weight: 600;
}

table#table_custom tr td {
    border: 1px solid;
    font-size: 15px;
/*    text-transform: capitalize;*/
}

table#table_custom thead tr td {
    font-size: 20px;
    font-weight: 700;
    color: #50575e;
}




.add_main {
    width: 10%;
    margin: 18px 0 auto auto;

}

button.add {
    
    padding: 4px 28px;
}


#wpcontent, #wpfooter {

    margin-right: 18px;
}

button.deleteuserbutton.w-50:hover {
    color: #a6a2a2;
}


button.cls.w-50:after{
color: #a6a2a2;
}
input#submit_1 {
    font-size: 18px;
    background: #000;
    color: #fff;
    padding: 8px;
    border: none;
    margin-top: 20px;
}
.Questions {
    text-align: start;
}
.Choices{
text-align: start;
}
label.Question_label {
    font-weight: 700;
}
label.choice {
    font-weight: 700;
}
button.deleteuserbutton.w-50{
    cursor: pointer;
}
button.cls.w-50 {
    cursor: pointer;
}
button.delete-btn {
    cursor: pointer;
}
button.edit-btn {
    cursor: pointer;
}
button.add {
    cursor: pointer;
}
.close{
    cursor: pointer;
}


@media screen and (max-width: 812px) {
.modal-content {
    top: 250px !important; }

}
  </style>
	<title></title>
</head>
<body>

<!-- DISPLAY database data on admin dashboard -->
<?php 
 global $wpdb, $table_prefix;
$wp_emp = $table_prefix.'formplugin';
 $query="select * from `$wp_emp`";
 $results= $wpdb->get_results($query);


 ?>
<div class="dasboard_1">

<table class="wp-list-table widefat fixed striped table-view-list pages" id="table_custom">
  <thead>
    <tr>
      <!-- <td>Id</td> -->
      <td>Questions</td>
      <td>Choices</td>
      <td>Type</td>
      <td>Delete</td>
      <td>Update</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($results as $row): ?>
      <tr>
        <td id="update_id" hidden><?php echo $row->user_id; ?></td>
        <td id="qu_1"><?php echo $row->Questions; ?></td>
        <td id="subtype_1"><?php echo nl2br($row->Questions_SUB); ?></td> <!-- Use nl2br here -->
        <td id="type_1"><?php echo $row->type; ?></td>
        <td><button class="delete-btn" data-id='<?php echo $row->user_id; ?>'>Delete</button></td>
        <td><button class="edit-btn" data-eid='<?php echo $row->user_id; ?>'>Update</button></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<!-- Delete model -->
<div class="modal1" id="deletemodel" style="display:none;">
 
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header1">
        <h4 class="modal-title text-center text-warning">Delete</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modalbody1">
     <input type="hidden" name="delete_id" class="deleteuserid" id="deleteuserid">
     <p>Are you sure you want to delete this record?</p>
   </div>
   <div class="buttons">
        <button type="submit" class="deleteuserbutton w-50" >Yes ,delete.</button>
          <button type="submit" class="cls w-50" >No</button>
        </div>
      
 </div>
 
</div>


<!-- The Modal to update data-->
<div class="modal2" id="myModal" style="display:none;">
  <div class="modal-dialog">
    <div class="modal_content">

      <!-- Modal Header -->
      <div class="modal-header2">
         <h2>Update</h2>
        <button type="button" class="close" >&times;</button>
      </div>

      <!-- Modal body -->
<form method="post" action="edit_content.php" enctype="multipart/form-data" id="up">
     <div class="form_main_a">
    <input type='text ' id='s_no' name ='s_no' hidden>
    <div class="Questions"> 
         <label class="Question_label">Question label</label>
      <input type='text' id='que' name ='que'> 
 </div>
 <div class="Choices">
            <label class="choice">Choices</label>
           <textarea id="que_sub" name="que_sub"></textarea>
</div>
   <!-- <input type='text' id='types' name ='types'>   -->


 <input type='button' id='submit_1' name ='submit_1' value="Update">
<!-- <button type="button" class="close-btn btn-secondary" data-dismiss="modal">Close</button> -->
 </div>
   </form>
</div>
</div></div>











     

</body>
</html>
<script type="text/javascript">
   $(document).on("click",".delete-btn", function(){
 var csid = $(this).data("id");
 // alert(csid);
 $('#deletemodel').show();


 var element = this;

$('#deleteuserid').val(csid);


  $(document).on("click",".deleteuserbutton", function(){
    var deleteuserid = $('#deleteuserid').val();
    // alert(deleteuserid);
    var   ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
 

  jQuery.ajax({
        url: ajaxurl,
        data: {
   action: 'my_action_action11',
 id:deleteuserid
 
    },
 type: 'POST',
 
  success:function(data) {
            console.log(data);
            // alert(data);
  location.reload();
      
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
        
  });
    });
   });

   $(document).on("click",".cls", function(){
    $("#deletemodel").hide();
  });
    $(document).on("click",".close", function(){
    $("#deletemodel").hide();

});
	



//update data


 $(document).on("click", ".edit-btn", function () {
    $("#myModal").show();
    $('#deletemodel').hide();

    var stdid = $(this).data("eid");
    var table_3 = $(this).parents('tr').find('#update_id').text();
    var que = $(this).parents('tr').find('#qu_1').text();
    var subque = $(this).parents('tr').find('#subtype_1').text();
    var subqueArray = subque.split('\n');
    var subqueFormatted = subqueArray.join('\n');
    var table_2 = $(this).parents('tr').find('#type_1').text();

    $('#s_no').val(table_3);
    $('#que').val(que);
    $('#types').val(table_2);
    $('#que_sub').val(subqueFormatted);

    // Add an event listener for the input event on que_sub
    $('#que_sub').on('input', function () {
        var queSubValue = $(this).val().trim();
        var choicesDiv = $('.Choices');

        // Check if que_sub is empty
        if (queSubValue === '') {
            choicesDiv.hide();
        } else {
            choicesDiv.show();
        }
    });

    // Trigger the input event on que_sub to initially check its value
    $('#que_sub').trigger('input');
});

$('#submit_1').click(function (e) {
    e.preventDefault();

    var update_id = $('#s_no').val();
    var Type = $('#types').val();
    var Question = $('#que').val();
    var sub_type = $('#que_sub').val().split('\n');

    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

    jQuery.ajax({
        url: ajaxurl,
        data: {
            action: 'my_action_action22',
            update_id: update_id,
            Question: Question,
            Type: Type,
            sub_type: sub_type
        },
        type: 'POST',
        success: function (data) {
            location.reload();
        },
        error: function (errorThrown) {
            console.log(errorThrown);
        }
    });
});

 //hide modalbox
   $(document).on("click",".close-btn", function(){
    $("#myModal").hide();
    });
     $(document).on("click",".close", function(){
    $("#myModal").hide();
    

});

</script>

<!-- 
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
    const queSelect = document.getElementById('que');
    const queSubSelect = document.getElementById('que_sub');
    const updateButton = document.querySelector('.edit-btn'); 

    // Define options for que_sub based on que selection
    const queSubOptions = {
        "How did you hear about me and Jamberry?": ["How did you hear about me and Jamberry?", "From a party.", "From Facebook.", "From Twitter.", "From Instagram.", "Others."],
        "Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?": ["Are you interested in earning free and discounted Jamberry products by hosting a party and sharing Jamberry with your friends?", "Yes! Lets set a date!", "Maybe, please send me more information. I want to see if I like the wraps first!", "Not right now, but ask me in a couple of months!", "No Thanks!"],
        "Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?": ["Are you interested in earning some extra money on your Jamberry wraps by being a Jamberry consultant?", "YES!!! Lets talk about it!", "Maybe, please send me more information", "Not right now.", "No thanks!"],
        "Pick Two": ["Pick Two"],
        "Name": ["First Name", "Last Name"],
        "Address": ["Street Address", "Apt.#", "City", "State", "Zip code", "Country"],
        "Preferred Method of Contact": ["Preferred Method of Contact"],
        "Email": ["Email", "Confirm Email"],
        "Phone number": ["Area code", "Phone number"],
        "Party hosts": ["Who is your party host?"],
    };

    // Function to update que_sub options based on que selection
    function updateQueSubOptions() {
        const selectedValue = queSelect.value;
        // console.log(selectedValue);
        queSubSelect.innerHTML = ""; // Clear existing options

        // Use the selected question to get the corresponding sub-options
        const selectedSubOptions = queSubOptions[selectedValue];
        // console.log(selectedSubOptions);

        if (selectedSubOptions) {
            selectedSubOptions.forEach(optionText => {
                const option = document.createElement("option");
                option.value = optionText;
                option.textContent = optionText;
                queSubSelect.appendChild(option);
            });
        }

        // Add a default option
        const defaultOption = document.createElement("option");
        defaultOption.value = "select";
        defaultOption.textContent = "Select an option";
        queSubSelect.insertBefore(defaultOption, queSubSelect.firstChild);
    }

    // Attach the event listener to que
    queSelect.addEventListener('change', updateQueSubOptions);

    // Attach an event listener to the update button
    updateButton.addEventListener('click', updateQueSubOptions);

    // Initialize que_sub options based on the initial que selection
    updateQueSubOptions();

    // Get the default selected value
    const defaultSelectedValue = queSelect.value;

    // Do something with the defaultSelectedValue
    console.log("Default selected value:", defaultSelectedValue);
});

</script>

 -->
 

