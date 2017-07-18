<?php
class Blog extends CI_Controller {

    public function index()
        {
        	 $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
                $data['title'] = "My Real Title";
                $data['heading'] = "My Real Heading";

                $this->load->view('blogview', $data);
        }

    public function comments()
    {
        echo 'Look at this!';
    }

 //    public function _remap($method)
	// {
 //        if ($method === 'comments')
 //        {
 //                $this->$method();
 //        	//echo "test";
 //        }
 //        else
 //        {
 //            $this->d();
 //        }
	// }

	// public function comments()
 //    {
 //        echo 'Look at this!';
 //    }

    public function d()
    {
    	echo "alo";
    }

    public function _output($output)
	{
	        echo $output;
	}

	public function _utility()
	{
	        // some code
		echo "ggg";
	}
}