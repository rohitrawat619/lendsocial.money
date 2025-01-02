<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	 public function __construct()
    {
        parent::__construct();
       $this->load->model('Home_model');
    }


    private function authenticate()
    {
        // Get the 'Authorization' header (basic auth or other token)
        $authHeader = $this->input->get_request_header('Authorization');
        $oathToken = $this->input->get_request_header('oath_token'); // Custom token header

        // Expected values (You can store these in a secure place like environment variables)
        $validAuthHeader = 'Basic YW50QXBwXzIwMjM6QW50X1NlY3VyZSZAMSE2NQ==';
        $validOathToken = '3XNMOS+cxNMlWx3yKRLQMNBtV1oCANpAX1iY2d1kQL9KVIKfSJJr4EsDz00EWMIlR9/40t14ydGdVgdB0aQUwixfArAfYpqGEUSPkVzBWbcHEA5TTY2L6xy5fFv0lro6WJVhTwAfOEL6Qr9vZXjxLMZFz9QJHqfAKQHrdV/FELpK//T5GiPI7Hy7V/QVO+4BDFwIisiLMr4tWz5PqjASFzhXnhbaxkj/flRpc3CgG78h6qYGnrQERAizZP6kyub//AY6A4KckBzVF3uVPtppxA==';

        // Validate both the Authorization header and the oath_token
        if (!$authHeader || $authHeader !== $validAuthHeader || !$oathToken || $oathToken !== $validOathToken) {
            // Send 401 Unauthorized response
            $this->output
                ->set_status_header(401)
                ->set_content_type('application/json')
                ->set_output(json_encode(['message' => 'Unauthorized']))
                ->_display();
            exit; // Stop further execution
        }
    }

    public function index() {
        $schemes = $this->Home_model->index();
    
        $response = [
            'status' => true,
            'message' => 'Schemes fetched successfully.',
            'data' => $schemes
        ];
    
        $this->load->view('templates\header.php');
        $this->load->view('lendsocial_view', ['schemes' => $schemes]);
        $this->load->view('templates\footer.php');
    }
    
    
    public function get_schemes() {
        
        $schemes = $this->Home_model->get_schemes();
    
        $response = [
            'status' => true,
            'message' => 'Schemes fetched successfully.',
            'data' => $schemes
        ];

        $this->load->view('templates\header.php');
        $this->load->view('scheme', ['schemes' => $schemes]);
        $this->load->view('templates\footer.php');
    }

    public function get_scheme_details($id) {

        $de_id = $this->encrypt->decode(rawurldecode($id));

        $scheme_details = $this->Home_model->get_scheme_details($de_id);

        $response = [
            'status' => true,
            'message' => 'Schemes fetched successfully.',
            'data' => $scheme_details
        ];
     
        if ($scheme_details) {
			$this->load->view('templates/header');
            $this->load->view('schemes_details', ['scheme_details' => $scheme_details]);
            $this->load->view('templates\footer.php');
        } else {

            show_404();
            $this->load->view('templates\footer.php');
        }
    }

    //Android App Endpoint

    public function androidindex() {
        $this->authenticate();
        $schemes = $this->Home_model->index();
        header('Content-Type: application/json');
    
        if (empty($schemes)) {
            echo json_encode(['status' => false, 'message' => 'No schemes found']);
        } else {
            echo json_encode(['status' => true, 'data' => $schemes]);
            exit;
        }
    }
    
    public function androidget_schemes() {
        $this->authenticate();
        $schemes = $this->Home_model->get_schemes();
        header('Content-Type: application/json');
        
        if (empty($schemes)) {
            echo json_encode(['status' => false, 'message' => 'No schemes found']);
            exit;
        } else {
            echo json_encode(['status' => true, 'data' => $schemes]);
            exit;
        }
    }

    public function androidget_scheme_details($id) {
        $this->authenticate();
        $de_id = $this->encrypt->decode(rawurldecode($id));

        $scheme_details = $this->Home_model->get_scheme_details($de_id);
        header('Content-Type: application/json');

        if (empty($scheme_details)) {
            echo json_encode(['status' => false, 'message' => 'No schemes found']);
            exit;
        } else {
            echo json_encode(['status' => true, 'data' => $scheme_details]);
            exit;
        }
    }
}
?>