                    
    <?php 

    require 'header.php';

    require 'data.php';
        
    ?> <div class = "array"> <?php 

     foreach ($teams as $name => $info): ?>
       
        <div class ="card">
        <ul>
            <div class ="image">
            <img src="<?php echo ($info['logo']); ?>"/>
            </div>
            <li>Team: <?php echo $name ?></li> 
            <li>League: <?php echo ($info['league']); ?> </li>
            <li> UEFA Coefficient ranking: <?php echo ($info['uefa-coefficient-ranking']); ?></li>
            <li>City: <?php echo ($info['city']); ?></li>
            <li>Group: <?php echo ($info['group']); ?></li>
            <li><a href="<?php echo ($info['url']); ?>" target="_blank"> Visit <?php echo ($name); ?></a></li>
        </ul>
        </div>
        
            <?php endforeach ?>
     </div>
     <div class="footer">
     <p> Copyright 2024 Rickard Almgren</p>
       

        


