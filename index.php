                    
    <?php 

    require 'header.php';

    require 'data.php';
        
    ?> <div class = "array"> <?php 

     foreach ($teams as $name => $info): ?>
        <div class="team">
            <ul>

           <li>Team: <?php echo $name ?></li> 
            <li>League: <?php echo ($info['league']); ?> </li>
            <li> UEFA Coefficient ranking <?php echo ($info['uefa-coefficient-ranking']); ?></li>
            <li>City: <?php echo ($info['city']); ?></li>
            <li>Group <?php echo ($info['group']); ?></li>
            <img src="<?php echo ($info['logo']); ?>"/>
            <a href="<?php echo ($info['url']); ?>" target="_blank"> Visit <?php echo ($name); ?></a></div>
     </ul>
            <?php endforeach ?>
     </div>
       

        


