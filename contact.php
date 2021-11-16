<?php
include('config.php');
include('includes/header.php');?>

<div id="wrapper">
    <main>
    <h1><?php echo $headline;?></h1>

    <div id="about-form">
    <h2>Want to recieve a free sample of our handmade pet meals?</h2>
    <p>Simply fill out your contact information, let us know whether you have a dog or cat and whether they have any allergies.</p>
    <p>If your pet has a favorite fruit or vegetable, leave it in the comment section and we will do our best to include that in your free sample.</p>
    <p>Processing and shipment start 2-3 days after we recieve your request!</p>
    </div>
    <?php include('includes/form.php');?>
    </main>
        
    <aside>
    <img src="images/cat.jpg" alt="Cat laying down">
    <img src="images/blueberries.jpg" alt="A bowl of blueberries">
    <img src="images/chihuahua.jpg" alt="A chihuahua in a field of flowers">
    <img src="images/rawbeef.jpg" alt="Pieces of raw beef">
    </aside>
    </html>
<?php include('includes/footer.php');?>