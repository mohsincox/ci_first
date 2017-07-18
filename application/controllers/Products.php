<?php
class Products extends CI_Controller {

        public function shoes($sandals, $id)
        {
        	//http://localhost/ci_first/index.php/products/shoes/bata/345
                echo $sandals;
                echo $id;
        }
}