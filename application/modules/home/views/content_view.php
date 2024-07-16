 <!-- Main Content -->
 <div class="col-md-8">
     <div class="main-content">

         <?php
            if ($this->uri->segment(1) == 'global' || $this->uri->segment(1) == 'international') {
                $this->load->view('international');
            }
        ?>

         <?php foreach ($news as $n) { ?>
            <?php if (!($n['title'] == '[Removed]') 
            &&  !($n['urlToImage'] == null)
        ) { ?>

             <div class="news-item">
                 <h3><?php echo $n['title'] ?></h3>
                 <img src="<?php echo $n['urlToImage'] ?>" class="img-fluid" alt="News Image">
                 <p><?php echo $n['description'] ?></p>
                 <p class="text-muted">Created on: <span><?php echo $n['publishedAt'] ?></span></p>
                 <a href="<?php echo $n['url'] ?>" target="_blank" class="btn btn-primary">Read More</a>
             </div>
             <?php  } ?>
         <?php  } ?>
         <p><?php //echo $links; ?></p>

     </div>
 </div>