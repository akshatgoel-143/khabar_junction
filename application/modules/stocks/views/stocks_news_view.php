 <!-- Main Content -->
 <div class="col-md-8">
     <div class="main-content">

         <?php foreach ($news as $n) { ?>
            <?php if (!($n['image'] == '')) { ?>
             <div class="news-item">
                 <h3><?php echo $n['headline'] ?></h3>
                 <img src="<?php echo $n['image'] ?>" class="img-fluid" alt="News Image">
                 <p><?php echo $n['summary'] ?></p>
                 <a href="<?php echo $n['url'] ?>" target="_blank" class="btn btn-primary">Read More</a>
             </div>
             <?php } ?>
         <?php  } ?>
         <p><?php //echo $links; ?></p>

     </div>
 </div>