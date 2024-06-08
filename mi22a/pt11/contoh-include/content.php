<style>
    #content {
        font-family: Arial, Helvetica, sans-serif;
        width: 500px;
        border: 1px solid grey;
        padding: 8px;
    }
</style>

<div id="content">
    <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'product':
                    include "content/product.php";
                    break;
                case 'about':
                    include "content/about.php";
                    break;
                case 'bantuan':
                    include "content/bantuan.php";
                    break;
                default:
                    break;
            }
        } else {
            include "content/home.php";
        }
    ?>
</div>