<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <style type="text/css">
 	.widefat tfoot tr td, .widefat tfoot tr th, .widefat thead tr td, .widefat thead tr th {
    color: #2c3338;
    font-size: 20px !important;
    font-weight: 700 !important;
}

#wpbody-content {
  
    padding-top: 60px !important;
   
}
.widefat td, .widefat th {
    border-right: 1px solid #c3c4c7;
   
}
table.wp-list-table.widefat.fixed.striped.table-view-list.pages tr td:nth-child(1) {
    width: 5% !important;
}

.dashboard_2 {
    width: 98% !important; 
}
table.wp-list-table.widefat.fixed.striped.table-view-list.pages tr td {
    border: 1px solid #6a6060;
}
.modal1-content {
    top: 150px !important;
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

.deleteuserbutton.w-50 {
    padding: 8px 12px;
    font-size: 16px;
    background: #000;
    color: #fff;
    border: none;
}


button.No {
    padding: 8px 12px;
    font-size: 16px;
    background: #000;
    color: #fff;
    border: none;
}

button.delete_btn {
    border: none;
    background: none;
    font-size: 18px;
    color: red;
    font-weight: 600;
}
button.close {
    position: absolute;
    top: -25px;
    right: -10px;
    font-size: 45px;
    border: none;
    background: none;
    cursor: pointer;
}


.modalbody2 p {
    font-size: 17px;
    line-height: 24px;
    color: rgb(60, 67, 74);
}

.deleteuserbutton.w-50 {
 
    margin-right: 20px;
  
}
button.delete_btn {
width: 100%; 
 cursor: pointer; } 
table.wp-list-table.widefat.fixed.striped.table-view-list.pages tr td:nth-child(1) {
    width: 5% !important;
    text-align: center;

}  




table.wp-list-table.widefat.fixed.striped.table-view-list.pages tr td:nth-child(3) {
    text-align: center;
}
table.wp-list-table.widefat.fixed.striped.table-view-list.pages tr td:nth-child(3) {
    text-align: center;
    width: 15% !important;
}

div#deletemodel1 {
    top: 68px !important;
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

@media screen and (max-width: 812px) {


table.wp-list-table.widefat.fixed.striped.table-view-list.pages tr td:nth-child(3) {

    width: 19% !important;
}


table.wp-list-table.widefat.fixed.striped.table-view-list.pages tr td:nth-child(1) {
    width: 10% !important;
     
}






.modal1-content {
  
    right: -5px !important;
    padding: 62px!important;
    width: 60% !important;
    margin: 20px !important;

}

.modal1-content {
    top: 175px !important;
}
}
div#wpfooter {
    display: none;
}

 </style>
	<title></title>
</head>
<body>



<!-- DISPLAY database data on admin dashboard -->
<?php 
 global $wpdb, $table_prefix;
$wp_emp = $table_prefix.'shilpanewup';

?>
<div class="dashboard_2">
    <table class="wp-list-table widefat fixed striped table-view-list pages">
        <thead>
            <tr>
                <td>ID</td>
                <td>Details</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = $wpdb->get_results("SELECT `user_id`, `user_details` FROM $wp_emp");

            if (!empty($data)) {
                $groupedData = [];

                foreach ($data as $row) {
                    $user_id = $row->user_id;
                    $user_details = $row->user_details;

                    if (!isset($groupedData[$user_id])) {
                        $groupedData[$user_id] = [];
                    }

                    // Split the user_details by newline character and add to the array
                    $detailsArray = explode("\n", $user_details);
                    $groupedData[$user_id] = array_merge($groupedData[$user_id], $detailsArray);
                }

                foreach ($groupedData as $user_id => $detailsArray) {
                    echo "<tr>";
                    echo "<td>$user_id</td>";
                    echo "<td>";
                    foreach ($detailsArray as $detail) {
                        // Separate label and value by colon
                        list($label, $value) = explode(':', $detail, 2);

                        // Wrap the label in a span with font-weight: 600
                        echo "<span style='font-weight: 600;'>$label:</span> $value<br>";
                    }
                    echo "</td>";
                    echo "<td><button class='delete_btn' data-id='$user_id'>Delete</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td>No data available in the database.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>




<!-- Delete model -->
<div class="modal11" id="deletemodel1" style="display:none;">
 
    <div class="modal1-content">

      <!-- Modal Header -->
      <div class="modal-header21">
        <h4 class="modal-title text-center text-warning">Delete</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modalbody2">
     <input type="" name="delete_id" class="Delete_id" id="Delete_id" hidden>
     <p>Are you sure you want to delete this record?</p>
   </div>
   <div class="buttons">
        <button type="submit" class="deleteuserbutton w-50" style="cursor:pointer;" >Yes ,delete.</button>
          <button class="No" style="cursor:pointer;" >No</button>
        </div>
      
 </div>
 
</div>

</div>




</body>
</html>
<script type="text/javascript">
   $(document).on("click", ".delete_btn", function(){
    var csid = $(this).data("id");
  // alert(csid);

 $('#deletemodel1').show();
 var element = this;

$('#Delete_id').val(csid);

$(document).on("click",".deleteuserbutton", function(){
    var Delete_id = $('#Delete_id').val();
     // alert(Delete_id);
    var   ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
 

  jQuery.ajax({
        url: ajaxurl,
        data: {
   action: 'my_action_action111',
 id:Delete_id
 
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

   $(document).on("click",".No", function(){
    $("#deletemodel1").hide();
  });
    $(document).on("click",".close", function(){
    $("#deletemodel1").hide();

});

   


</script>