<!-- Sidebar -->
<div class="col-md-4">
    <div class="sidebar">
        <h3>Latest in Stock Market</h3>

        <?php foreach ($sidebar as $side) { ?>


            <div class="sidenews-item">
                <a href="<?php echo $side['url'] ?>" target="_blank" style="text-decoration: none;  color: black; margin:5px">
                    <img src="<?php echo $side['image'] ?>" class="img-fluid" alt="news Image">
                    <h6><?php echo $side['headline'] ?></h6>
                    <p><?php echo $side['summary'] ?></p>
                </a>
            </div>

        <?php  } ?>


    </div>
</div>