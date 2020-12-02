<?php

$get = isset($_GET['pagina']) ? $_GET['pagina'] : '';



//require 'config.php';
require 'lib/funcs.php';
require 'templates/header.php';
//require 'template/menu.php';
?>
<div>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #ffd401;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #f5a127;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #f5a127;
        }
    </style>
    <?php
    rotas($get);
    ?>
</div> <!-- /container -->
<?php
require 'templates/footer.php';
?>