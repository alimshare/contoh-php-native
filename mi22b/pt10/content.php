<style>
    #content {
        font-family: Arial, Helvetica, sans-serif;
        border: 1px solid grey;
        padding: 10px;
        width: 450px;
    }
</style>

<div id="content">
    <?php 

        if (isset($_GET['page'])) {
            
            $page = $_GET['page'];
            switch ($page) {
                case 'Beranda':
                    include 'content/home.php';
                    break;
                    
                case 'Tentang':
                    include 'content/tentang.php';break;

                case 'Bantuan':
                    include 'content/bantuan.php';break;
                
                default:
                    # code...
                    break;
            }

        } else {
            include 'content/home.php';
        }
    
    ?>
</div>