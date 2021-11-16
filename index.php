<?php
include('config.php');
include('includes/header.php');?> 

<div id="wrapper">
    <main>
    <h1><?php echo $headline;?></h1>
    <div id="hero">
    <?php echo random_photos($image);?>
    <h3>
        <pre>
        function random_photos($image) {
            $image[0] = 'penguin';
            $image[1] = 'ducklings';
            $image[2] = 'squirrel';
            $image[3] = 'babyelephant';
            $image[4] = 'babyraccoon';

            $i = rand(0,4);
            $selected_image = ''.$image[$i].'.jpg';
            echo '&lt;img src="images/'.$selected_image.'" alt=" '.$image[$i].' "&gt;';
            }
        </pre>
    </h3>
    </div><!--end hero-->
    <p>Enim esse ut esse culpa consequat occaecat adipisicing sit. Sit sit ullamco mollit elit commodo fugiat labore. Eiusmod dolor dolor labore aute ea sunt duis ad commodo. Lorem laboris id irure amet ipsum duis incididunt occaecat aliquip.</p>
    </main>
        
    <aside>
            <h3>Here is my aside</h3>
    </aside>

    <?php
    include('includes/footer.php');?>