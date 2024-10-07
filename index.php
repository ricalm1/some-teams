                    
    <?php 

    require 'header.php';

    require 'data.php';
        
    ?> <div class = "array"> <?php 

     foreach ($teams as $name => $info): ?>
        <div class="team">

            <h2>Team: <?php echo $name ?></h2>
            <p>League: <?php echo ($info['league']); ?> </p>
            <p> UEFA Coefficient ranking <?php echo ($info['uefa-coefficient-ranking']); ?></p>
            <p>City: <?php echo ($info['city']); ?></p>
            <p>Group <?php echo ($info['group']); ?></p>
            <img src="<?php echo ($info['logo']); ?>"/>
            <a href="<?php echo ($info['url']); ?>" target="_blank"> Visit <?php echo ($name); ?></a></div>
            
            <?php endforeach ?>
     </div>
       

        


