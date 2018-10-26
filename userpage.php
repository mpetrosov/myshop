<?php
    
    include('includes/auth.php');
    include_once('includes/session.php');
    include_once('includes/conf.php');
    
    if(!isAuthenticated()){
        include('includes/header.php');
        include('includes/sidebar.php');
    die(header('Location: '.BASE_URL. "signin.php?failed"));
    }else{
        include('includes/header1.php'); 
        include('includes/sidebar.php');
    }
    
?>
        
        <div class="content">Content
            
        </div>
<?php
    include('includes/footer.php');
?>       
