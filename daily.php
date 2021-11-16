<?php
include('config.php');
include('includes/header.php');?> 

<div id="wrapper">
    <main>
        <h1><?php echo $headline;?></h1>
          <h2 class="heading"><?php echo $comfortFood;?></h2>
            <!-- <div class="feature"> -->
            
            <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
        <!-- </div> -->
    </main>
    <aside>
        <h2 class="subheader"><i><?php echo $subheader;?></i></h2>
        <p class="description"><?php echo $content;?></p>
    </aside>
    <img class="divider" src="images/divider.png" alt="Fancy Page Divider">
    <section>
    <h2>Daily Comfort Foods</h2>
            <p><i>For every day of the week, we serve a different comfort food.</i></p>
            <ul>
                <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
                <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
                <li><a href="daily.php?today=Thursday">Thursday</a></li>
                <li><a href="daily.php?today=Friday">Friday</a></li>
                <li><a href="daily.php?today=Saturday">Saturday</a></li>
                <li><a href="daily.php?today=Sunday">Sunday</a></li>
                <li><a href="daily.php?today=Monday">Monday</a></li>
            </ul>
    </section>

    <?php
    include('includes/footer.php');?>