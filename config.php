<?php

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['project.php'] = 'Project';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

// create a function for our navigation, so the function is called out on our header.php page

function my_nav($nav){
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        } //end else
    } //end foreach
    return $my_return;
} // end function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Homepage - IT 261 Website';
    $body = 'home';
    $headline = 'Welcome to my IT 261 Website Homepage!';
    break;
    case 'about.php':
    $title = 'About - IT 261 Website';
    $body = 'about inner';
    $headline = 'Welcome to my IT 261 Website About page!';
    break;
    case 'daily.php':
    $title = 'Daily - IT 261 Website';
    $body = 'daily inner';
    $headline = 'Comfort Kitchen';
    break;
    case 'project.php':
    $title = 'Project - IT 261 Website';
    $body = 'project inner';
    $headline = 'Welcome to my IT 261 Website Project page!';
    break;
    case 'gallery.php':
    $title = 'Gallery - IT 261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to my IT 261 Website Gallery page!';
    break;
    case 'contact.php':
    $title = 'Contact - IT 261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to my IT 261 Website Contact page!';
    break;
    default:
    $title = 'IT 261 Website';
}

// this is the beginning of the switch for the coffee homework 
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch
switch ($today) {
    case 'Tuesday' :
    $comfortFood = "Tuesday's Comfort Food:";
    $subheader = 'Mac and Cheese';
    $pic = 'macncheese2.jpeg';
    $alt = 'Mac and Cheese';
    $content = '<b>Made with <i>sharp cheddar cheese</i>, <i>gruyere</i>, and <i>whole milk</i></b>.<br><br> A combination of cheeses, layered in the dish as well as melted into a rich and creamy cheese sauce, for the ultimate in cheesy deliciousness!';
    $bgcolor = 'background-color:#FFD700';
    break;

    case 'Wednesday' :
    $comfortFood = "Wednesday's Comfort Food:";
    $subheader = 'Southern Fried Chicken and Waffles';
    $pic = 'chickennwaffles2.jpeg';
    $alt = 'Chicken and Waffles';
    $content = '<b>Made with <i>buttermilk</i>, <i>chili powder</i>, and <i>honey</i></b>.<br><br> Includes juicy southern fried chicken and fluffy waffles with an amazing sweet and spicy sauce made with maple syrup or honey.';
    $bgcolor = 'background-color:#FFE4B5';
    break;
    
    case 'Thursday' :
    $comfortFood = "Thursday's Comfort Food:";
    $subheader = 'Meatloaf';
    $pic = 'meatloaf2.jpeg';
    $alt = 'Meatloaf';
    $content = '<b>Made with <i>90% lean beef</i>, <i>Panko breadcrumbs</i>, and <i>parsley</i></b>.<br><br> The meatloaf is so tender and juicy on the inside with a sweet and tangy sauce that glazes the meatloaf and adds so much flavor!';
    $bgcolor = 'background-color:#CD5C5C';
    break;

    case 'Friday' :
    $comfortFood = "Friday's Comfort Food:";
    $subheader = 'Classic Chicken Pot Pie';
    $pic = 'chickenpotpie2.jpeg';
    $alt = 'Chicken Pot Pie';
    $content = '<b>Made with <i>carrots</i>, <i>mushrooms</i>, and <i>peas</i></b>.<br><br> This Classic Chicken Pot Pie has a flaky, buttery crust, a creamy sauce, and a hearty mix of chicken and vegetables.';
    $bgcolor = 'background-color:#8FBC8F';
    break;

    case 'Saturday' :
    $comfortFood = "Saturday's Comfort Food:";
    $subheader = 'Spaghetti and Meatballs';
    $pic = 'spagetti2.jpeg';
    $alt = 'Spaghetti and Meatballs';
    $content = '<b>Made with <i>beef</i>, <i>parmesan</i>, and <i>bread crumbs</i></b>.<br><br> Juicy, tender meatballs covered in rich marinara sauce and served over a big plate of spaghetti. What’s not to love? This classic Italian dish is always a favorite.';
    $bgcolor = 'background-color:#B22222';
    break;

    case 'Sunday' :
    $comfortFood= "Sunday's Comfort Food:";
    $subheader = 'Grilled 3-Cheese and Tomato Soup';
    $pic = 'grilledcheeseandtomato2.jpeg';
    $alt = 'Grilled Cheese and Tomato Soup';
    $content = '<b>Made with <i>sharp cheddar</i>, <i>havarti</i>, and <i>smoked gouda</i></b>.<br><br> Flavor-packed creamy tomato soup paired with a gooey and perfectly crunchy 3 cheese grilled cheese sandwich.';
    $bgcolor = 'background-color:#FFA500';
    break;

    case 'Monday' :
    $comfortFood = "Monday's Comfort Food:";
    $subheader = 'Chicken Fried Steak';
    $pic = 'chickenfriedsteak2.jpeg';
    $alt = 'Chicken Fried Steak';
    $content = '<b>Made with <i>whole milk</i>, <i>heavy cream</i>, and <i>cayenne</i></b>.<br><br> Tenderized beef cutlets are dipped in egg and flour and fried, much like fried chicken, but with steak.';
    $bgcolor = 'background-color:#3CB371';
    break;
}

//photos - we will display our photos randomly
$image = array(
    'penguin',
    'ducklings',
    'squirrel',
    'babyelephant',
    'babyraccoon'
    );

function random_photos($image){

    $image[0] = 'penguin';
    $image[1] = 'ducklings';
    $image[2] = 'squirrel';
    $image[3] = 'babyelephant';
    $image[4] = 'babyraccoon';

    $i = rand(0,4);
    $selected_image = ''.$image[$i].'.jpg';
    echo '<img src="images/'.$selected_image.'" alt=" '.$image[$i].' ">';
}

//variables for my form
$full_name = '';
$email = '';
$phone = '';
$street_address = '';
$city = '';
$state= '';
$zipcode= '';
$pet_type = '';
$allergies = '';
$comments = '';
$privacy = '';


$full_name_err = '';
$email_err = '';
$phone_err = '';
$street_address_err = '';
$city_err = '';
$state_err = '';
$pet_type_err = '';
$zipcode_err= '';
$allergies_err = '';
$ingredients_err= '';
$comments_err = '';
$privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['full_name'])) {
        $full_name_err = 'Please enter your full name';
    } else {
        $full_name = $_POST['full_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['street_address'])) {
        $street_address_err = 'Please fill out your street address';
    } else {
        $street_address = $_POST['street_address'];
    }

    if(empty($_POST['city'])) {
        $city_err = 'Please fill out your city';
    } else {
        $city = $_POST['city'];
    }

    if(empty($_POST['state'])) {
        $state_err = 'Please fill out your state';
    } else {
        $state = $_POST['state'];
    }

    if(empty($_POST['zipcode'])) {
        $zipcode_err = 'Please fill out your zip code';
    } else {
        $zipcode = $_POST['zipcode'];
    }

    if($_POST['pet_type'] == NULL) {
        $pet_type_err = 'Please select your pet type';
    } else {
        $pet_type = $_POST['pet_type'];
    }

    if(empty($_POST['allergies'])) {
        $allergies_err = 'Please let us know if your pet has any allergies!';
    } else {
        $allergies = $_POST['allergies'];
    }

    if(empty($_POST['comments'])) {
        $comments_err = 'Please fill out the comment section';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'You must agree';
    } else {
        $privacy = $_POST['privacy'];
    }

    if(empty($_POST['phone'])) {
        $phone_err = 'Please fill out your phone number';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { 
        $phone_err = 'Invalid format!';
        } else {
        $phone = $_POST['phone'];
        }
        }

    function my_allergies(){
        $my_return = '';
        if(!empty($_POST['allergies'])){
            $my_return = implode(', ', $_POST['allergies']);
        }
        return $my_return;
    }

if(isset(
    $_POST['full_name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['street_address'],
    $_POST['city'],
    $_POST['state'],
    $_POST['zipcode'],
    $_POST['pet_type'],
    $_POST['allergies'],
    $_POST['comments'],
    $_POST['privacy']
    )) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Sample Meal Request,' .date('m/d/y');
        $body = '
        Full name is: '.$full_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Street Address: '.$street_address.' '.PHP_EOL.'
        City: '.$city.' '.PHP_EOL.'
        State: '.$state.' '.PHP_EOL.'
        Zip Code: '.$zipcode.' '.PHP_EOL.'
        Pet Type: '.$pet_type.' '.PHP_EOL.'
        Allergies: '.my_allergies().' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'noreply@mystudentswa.com',
            'Reply-to' => ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }
} // end of server request
