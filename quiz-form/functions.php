<?php
//to include css file for frontend
function enqueue_related_pages_scripts_and_styles(){
        wp_enqueue_style('related-styles', plugins_url('/style.css', __FILE__));
       
    }
add_action('wp_enqueue_scripts','enqueue_related_pages_scripts_and_styles');

// create the table in the database
 global $wpdb, $table_prefix;
  $wp_emp = $table_prefix.'formplugin';
$charset_collate = $wpdb->get_charset_collate();
$sql = "CREATE TABLE IF NOT EXISTS `$wp_emp` (`user_id` INT(255) NOT NULL AUTO_INCREMENT , `Questions` VARCHAR(255) NOT NULL , `Questions_SUB` VARCHAR(255) NOT NULL , `type` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;";
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);

//customize option of form for admin

add_action( 'admin_menu', 'mfp_Add_My_Admin_Link' );
 
function mfp_Add_My_Admin_Link()
{
      add_menu_page('Form Questions','Form Questions','manage_options', 'menu','menu_function');
      
     add_submenu_page('menu','my first menu page','Records','manage_options','submenu','sd_display_sub_menu_page');
     
      // add_submenu_page('menu','my first sub menu page','Results','manage_options','submenu2','sd_display_sub_menu_page1');
  

       
}


function menu_function(){

        include( plugin_dir_path( __FILE__ ) . '/form.php');
     include( plugin_dir_path( __FILE__ ) . '/front.php');  
     
      
      

 }
  function sd_display_sub_menu_page(){
      include( plugin_dir_path( __FILE__ ) . '/databse.php');
     
 }



 // ajax callback function to delete data
function my_ajax_callback_function2() {
   print_r($_POST);
    $id =$_POST['id'];
   
    global $wpdb;
    $table_name = $wpdb->prefix . 'formplugin';
     $wpdb->delete( $table_name, [ 'user_id' => $id] );
 
}

    
    
    add_action( 'wp_ajax_my_action_action11', 'my_ajax_callback_function2' );    
    add_action( 'wp_ajax_nopriv_my_action_action11', 'my_ajax_callback_function2' );


// ajax callback function to update data
function my_ajax_callback_function1() {
    $update_id = $_POST['update_id'];
    $Question = $_POST['Question'];
    $Questions_SUB = $_POST['sub_type'];
    $Type = $_POST['Type'];
    
    // Convert the array into a string with line breaks
    $Questions_SUB = implode("\n", $Questions_SUB);

    global $wpdb;
    $table = $wpdb->prefix . 'formplugin';

    $wpdb->query("UPDATE $table SET Questions = '$Question', Questions_SUB = '$Questions_SUB' WHERE user_id = $update_id");
}

    
    add_action( 'wp_ajax_my_action_action22', 'my_ajax_callback_function1' );    
    add_action( 'wp_ajax_nopriv_my_action_action22', 'my_ajax_callback_function1' );





function my_shortcode(){
   
ob_start();

   
include( plugin_dir_path( __FILE__ ) . '/validation.php');
       include( plugin_dir_path( __FILE__ ) . '/header.php'); 
  
$thankYouMessage = ''; // Initialize an empty variable for the thank you message

if (isset($_POST['SUBMIT'])) {
    global $wpdb, $table_prefix;
    $table = $table_prefix . 'shilpanewup';
    $charset_collate = $wpdb->get_charset_collate();

    // Create the table if it doesn't exist
    $q = "CREATE TABLE IF NOT EXISTS `$table` (
        `user_id` INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `user_details` TEXT NOT NULL
    ) ENGINE = InnoDB";
    dbDelta($q);

    if (isset($_POST['selectedOptions']) && is_array($_POST['selectedOptions'])) {
        // Initialize an array to store user details
        $userDetails = array();

        foreach ($_POST['selectedOptions'] as $dataId => $selectedValues) {
            // Get the label for this dataId
            $label = $_POST['label_' . $dataId];

            if (is_array($selectedValues)) {
                // Combine the data-id, label, and selected values
                $selectedData = "$dataId : $label " . implode(", ", $selectedValues);

                // Add the selected data to the user details array
                $userDetails[] = $selectedData;
            }
        }

        // Combine all user details into a single string
        $userDetailsString = implode("\n", $userDetails);

        // Insert data into the database
        $escaped_data = $wpdb->prepare('%s', $userDetailsString);
        $sql = "INSERT INTO $table (`user_details`) VALUES ($escaped_data)";

        if ($wpdb->query($sql)) {
            $thankYouMessage = '<div class="thank-you-message" style="background-color: #00cc00; color: #ffffff; padding: 5px; text-align: center; font-size: 20px;">Thank you for submitting the form!</div>';

            // header('Location:thank_you.php');
            $_SESSION['nonce'] = md5(uniqid());
        } else {
            echo "Error inserting records: " . $wpdb->last_error . "<br>";
        }
    } else {
        echo "No selected data received from the form.";
    }
}
  // Display the thank you message only if it's set
        if (!empty($thankYouMessage)) {
            echo $thankYouMessage;
        }



  global $wpdb, $table_prefix;
$wp_emp = $table_prefix.'formplugin';
 $query="select * from `$wp_emp`";
 $results= $wpdb->get_results($query);
    foreach($results as $row): 
          $user_id  =  $row->user_id;
  $Questions  =  $row->Questions;
 $Questions_SUB = $row->Questions_SUB; 
      $Type  =  $row->type ;
      
 ?>
   <div class="container" >
 
      <div class="quizform">
   
   <form method="POST" action="" id="myForm">
    <div class="questionsub">
        <?php if ($Type == "text") { ?>
            <div class="textinputs">
                <div class="textinputs1">
                   <label class="subtype" data-id="<?php echo $Questions; ?>"> <?php echo $Questions; ?><span class="required-field" style=" color: red;">*</span></label>
                </div>
                <div class="textinputs_heading">
                    <input type="<?php echo $Type; ?>" id="<?php echo $user_id; ?>" class="forminputs" name="selectedOptions[<?php echo $Questions; ?>][]" data-id="<?php echo $user_id; ?>">

                   <input type="hidden" name="label_<?php echo $user_id; ?>" value="<?php echo $Questions; ?>">
                </div>
                <div class="error-message" style="COLOR: red"></div>
            </div>
        <?php } else if ($Type == "number") { ?>
            <div class="textinputs">
                <div class="textinputs1">
                    <label class="subtype" data-id="<?php echo $Questions; ?>"> <?php echo $Questions; ?><span class="required-field" style=" color: red;">*</span></label>
                </div>
                <div class="numbers">
                    <input type="<?php echo $Type; ?>" id="<?php echo $user_id; ?>" class="formnum" name="selectedOptions[<?php echo $Questions; ?>][]" data-id="<?php echo $user_id; ?>">
                   <input type="hidden" name="label_<?php echo $user_id; ?>" data-id="<?php echo $Questions; ?>">
                </div>
                <div id="number_msg1" style="color: red;"></div>
                <div class="number_msg2" style="color: red;"></div>
                <div class="number_msg3" style="color: red;"></div>
            </div>
        <?php } elseif ($Type == "email") { ?>
            <div class="textinputs">
                <div class="emailinputs">
                     <label class="subtype" data-id="<?php echo $Questions; ?>"> <?php echo $Questions; ?><span class="required-field" style=" color: red;">*</span></label>
                </div>
                <input type="<?php echo $Type; ?>" class="formemail" id="formemail" name="selectedOptions[<?php echo $Questions; ?>][]" id="emailInput1" data-id="<?php echo $user_id; ?>">
               <input type="hidden" name="label_<?php echo $user_id; ?>" value="<?php echo $Questions; ?>">
                <div class="email-error-msg" style="COLOR: red;"></div>
                <div class="email-msg2" id="emailInput-error" style="COLOR: red;"></div>
                <div class="email-required-msg" style="COLOR: red;"></div>
                 <div class="email-required-msg" style="color: red;"></div> 
            </div>
        <?php } elseif ($Type == "checkbox") {
            // Split the $Questions_SUB string into an array of values based on line breaks ("\n")
            $valuesArray = explode("\n", $Questions_SUB);

            // Display the common $Questions heading
            ?>
            <div class="checkbox-group que_check">
                <div class="checkbox-main">
                    <label class="subtype" data-id="<?php echo $Questions; ?>"> <?php echo $Questions; ?><span class="required-field" style=" color: red;">*</span></label>
                </div>

                <!-- Loop through the values and create a checkbox for each one -->
                <input type="hidden" name="label_<?php echo $user_id; ?>" value="<?php echo $Questions; ?>">

                <?php foreach ($valuesArray as $value) {
                    $value = trim($value); // Remove leading/trailing spaces

                    if (!empty($value)) { // Skip empty values, if any
                        ?>
                        <div class="checkbox-input">
                                <input type="checkbox" value="<?php echo $value; ?>" class="checkbox" name="selectedOptions[<?php echo $Questions; ?>][]" data-id="<?php echo $user_id; ?>">
                                   <?php echo $value; ?>
                            
                        </div>
                    <?php
                    }
                } ?>

                <!-- Error message container at the end of the active group -->
                <div class="checkbox-error" style="color: red;"></div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php endforeach; ?>

    <input type="submit" class="final" name="SUBMIT" style="margin: 27px 0;padding: 9px 9px; cursor: pointer; 
    padding: 12px 23px !important;
    font-size: 20px !important;
    background: #000;
    color: #fff;
    border: none;
">
</form>

  </div>

<?php  
$html=ob_get_clean();
return $html;



}

add_shortcode('customizeform','my_shortcode');

// if (isset($_POST['SUBMIT'])) {
//     global $wpdb, $table_prefix;
//     $table = $table_prefix . 'shilpanewup';
//     $charset_collate = $wpdb->get_charset_collate();

//     // Create the table if it doesn't exist
//     $q = "CREATE TABLE IF NOT EXISTS `$table` (
//         `user_id` INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         `user_details` TEXT NOT NULL
//     ) ENGINE = InnoDB";
//     dbDelta($q);

//     if (isset($_POST['selectedOptions']) && is_array($_POST['selectedOptions'] &&$_POST['label']) && is_array($_POST['label']) && !empty($_POST['selectedOptions']) {
//         $selectedValues = $_POST['selectedOptions'];
       

//         // Join the selected values with a newline character
//         $newlineSeparatedValues = implode("\n", $selectedValues,$selectedlabel);

//         // Properly escape and quote the joined string
//         $escaped_values = $wpdb->prepare('%s', $newlineSeparatedValues);

//         // Do not specify a value for user_id to allow auto-increment
//         $sql = "INSERT INTO $table (`user_details`) VALUES ($escaped_values)";

//         if ($wpdb->query($sql)) {
//             // Data inserted successfully
//             $_SESSION['nonce'] = md5(uniqid());
//         } else {
//             echo "Error inserting records: " . $wpdb->last_error . "<br>";
//         }
//     } else {
//         echo "No selected data received from the form.";
//     }
// }




 // ajax callback function to delete data
function my_ajax_callback_function22() {
   print_r($_POST);
    $id =$_POST['id'];
   // echo $id;
    global $wpdb;
    $table_name = $wpdb->prefix . 'shilpanewup';
     $wpdb->delete( $table_name, [ 'user_id' => $id] );
 
}

    
    
    add_action( 'wp_ajax_my_action_action111', 'my_ajax_callback_function22' );    
    add_action( 'wp_ajax_nopriv_my_action_action111', 'my_ajax_callback_function22' );
