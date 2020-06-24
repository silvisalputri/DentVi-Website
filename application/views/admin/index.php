
<?php
    if($this->session->userdata('loggin')){
        $this->load->view('mainAdmin/head');
?>
    <?php if($this->session->flashdata('sukses')){?>
        <body class="" onload="nowuiDashboard.showNotification('top', 'center', 'success', '<?= $this->session->flashdata('sukses');?>')">
    <?php }elseif($this->session->flashdata('notif')){?>
        <body class="" onload="nowuiDashboard.showNotification('top', 'center', 'success', '<?= $this->session->flashdata('notif');?>')">
    <?php }elseif($this->session->flashdata('failed')){?>
        <body class="" onload="nowuiDashboard.showNotification('top', 'center', 'danger', '<?= $this->session->flashdata('failed');?>')">
    <?php }?>
    <div class="wrapper">
                <?php
                    $this->load->view('mainAdmin/sidebar');
                    $this->load->view($body);
                    $this->load->view('mainAdmin/footer');
                ?>
    </div>
        </body>
        <?php 
            $this->load->view('mainAdmin/script');
        ?>
</html> 
<?php }else{
    redirect("admin/login/");
}?>
