
<?php 

$pagename = "Gallery";

?>

        <?php include '../includes/header.php';?>
        <div class="homeContainer">
            <div class="mainBody">
                <div class="content">
                    <?php include '../includes/nav.php';?>

                    <div class="mainContent">
                        <?php include '../includes/breadcrumb.php';?>
                        <h2 class="bigText">Gallery</h2> 
                        <div class="galleria">
                            <a href="/assets/images/placeholder_homepage.jpg"><img src="/assets/images/placeholder_homepage.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage2.jpg"><img src="/assets/images/placeholder_homepage2.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage.jpg"><img src="/assets/images/placeholder_homepage.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage2.jpg"><img src="/assets/images/placeholder_homepage2.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage.jpg"><img src="/assets/images/placeholder_homepage.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage2.jpg"><img src="/assets/images/placeholder_homepage2.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage.jpg"><img src="/assets/images/placeholder_homepage.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage2.jpg"><img src="/assets/images/placeholder_homepage2.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage.jpg"><img src="/assets/images/placeholder_homepage.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage2.jpg"><img src="/assets/images/placeholder_homepage2.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage.jpg"><img src="/assets/images/placeholder_homepage.jpg" data-title="My title" data-description="My description"></a>
                            <a href="/assets/images/placeholder_homepage2.jpg"><img src="/assets/images/placeholder_homepage2.jpg" data-title="My title" data-description="My description"></a>
                          
                        </div>

                    </div>

                </div>
           
            </div>
            <script type="text/javascript">
                Galleria.loadTheme('/assets/scripts/galleria/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria', {
                    transition: 'fade'
                });
            </script>
            <?php include '../includes/footer.php';?>
            
        