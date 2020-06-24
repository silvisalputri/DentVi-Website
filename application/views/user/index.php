<!-- Not For Home.php -->
<?php 
    $this->load->view('main/header');
?>
<body>
<?php 
    $this->load->view('main/navbar'); 
    $this->load->view($contain);
    $this->load->view('main/footer')
?>
</body>
</html>
