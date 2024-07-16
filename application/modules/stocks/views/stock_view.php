<?php $this->load->view('header') ?>

Page rendered in <strong>{elapsed_time}</strong> seconds. 

<div class="container-fluid">
    <div class="row">
        <?php

            $this->load->view('stocks_news_view');

             $this->load->view('stocks_sidebar_view');

        ?>

    </div>
</div>

<?php $this->load->view('footer') ?>