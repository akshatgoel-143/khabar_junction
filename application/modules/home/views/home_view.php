<?php $this->load->view('header') ?>

Page rendered in <strong>{elapsed_time}</strong> seconds. 

<div class="container-fluid">
    <div class="row">
        <?php

            $this->load->view('content_view');

            $this->load->view('sidebar_view');
        ?>

    </div>
</div>

<?php $this->load->view('footer') ?>