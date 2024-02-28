<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeadsController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function generateLeads()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array();
            // echo '<pre>';print_r($post);exit;
            if (!empty($this->input->post('first_name'))) {
                $user_name = $this->input->post('first_name') . ' ' .$this->input->post('last_name') ;
                $data['user_name'] = $user_name;
            }
            if (!empty($this->input->post('user_name'))) {
				$data['user_name'] = $this->input->post('user_name');
			}
            if (!empty($this->input->post('user_email'))) {
				$data['user_email'] = $this->input->post('user_email');
			}
            if (!empty($this->input->post('user_phone'))) {
				$data['user_phone'] = $this->input->post('user_phone');
			}
            if (!empty($this->input->post('type_of_service'))) {
				$data['type_of_service'] = $this->input->post('type_of_service');
			}
            if (!empty($this->input->post('other_services'))) {
				$data['type_of_service'] = $this->input->post('other_services');
			}
            if (!empty($this->input->post('comments_by_client'))) {
				$data['comments_by_client'] = $this->input->post('comments_by_client');
			}
            $response_type='';
            if (!empty($this->input->post('response_type'))) {
				$response_type = $this->input->post('response_type');
			}
            $data['usa_time']  = $this->getUsaTime();
            $data['pak_time'] = $this->getPakTime();
            $data['domain_name']  =  getDomain();
            $data['order_from']  = returnSlug();
            // $post['domain_name']  = 'starleadsmedia.com';
            $data['region']  = 'Pak';
            if ($_SERVER['HTTP_HOST'] != "localhost") {
                $region = $this->getRegion();
                $data['region']  = $region;
            }
            $lead_id = $this->input->post('lead_id');
            // echo '<pre>';print_r($data);exit;
            if ($lead_id ) {
                $this->db->where('lead_id', $lead_id)->update('leads', $data);
            } else {
                $lead_id = $this->common_model->insert_array('leads', $data);
            }
            if ($lead_id) {
                if($response_type){
                    echo json_encode(['success' => "success", 'lead_id' => $lead_id]);
                } else{
                        // $res = $this->sendNotification($is_Submitted, getDomain(), 1);
                    $this->session->set_flashdata([
                        'title' => 'Thank You!',
                        'flash_message' => 'Our Agent will contact you shortly.',
                    ]);
                    if (!empty($this->input->post('url'))) {
                        $reload_url = $this->input->post('url');
                        $array=array(
                            'subject'=>'Thank you for reaching out to All Star Technologies!',
                            'user_name'=>$data['user_name'],
                            'user_email'=>$data['user_email'],
                        );
                        $this->send_email($array, 'thank-you');
                        $to_marketing=array(
                            'subject'=>'New Lead Generated from All Star Technologies!',
                            'user_name'=>'Marketing Team',
                            'user_email'=>'info@allstartechnologies.co.uk',
                            'lead_id'=>$lead_id,
                            'leads'=>$data,
                        );
                        $this->send_email($to_marketing, 'new-leads');
                        $slug=returnSlug();
                        $notification_body='New lead initiated with ' .$slug.'-'.$lead_id;
                        $redrict_url='https://admin.usmedicare.net/leads';
                        $this->customNotification($lead_id, $redrict_url, 'New Lead Initiated', $notification_body, 1);
                        redirect(base_url($reload_url));
                    }
                    redirect(base_url());
                }
                
            } else {
                echo "Form Not Submited";
                redirect(base_url());
            }
        } else {
            echo "Form Not Submited";
            redirect(base_url());
        }
    }
    public function validate_phone($phone)
    {
        // Check if the phone number starts with '+', followed by numbers, and has a minimum length of 8 characters
        if (preg_match('/^\+\d{8,}$/', $phone)) {
            return TRUE; // Validation passes
        } else {
            $this->form_validation->set_message('validate_phone', 'Invalid phone number format');
            return FALSE; // Validation fails
        }
    }
    function getPakTime()

	{

		date_default_timezone_set("Asia/Karachi");

		$dateTime = date('Y-m-d h:i:A');

		return $dateTime;
	}
	function sendEmail(){
	    $array=array(
            'subject'=>'Thank you for reaching out to All Star Technologies!',
            'user_name'=>'Ahsan',
            'user_email'=>'carlosbrathwaite.rad@gmail.com',
        );
        $this->send_email($array, 'thank-you');
	}
    function getUsaTime()
	{
		date_default_timezone_set('US/Pacific');
		$time = time();
		if ($time >= strtotime("Second Sunday March 0")  && $time < strtotime("First Sunday November 0")) {
			return date('Y-m-d H:i', $time);
		} else {

			return date('Y-m-d H:i', $time);
		}
		die;
	}
    function getRegion()
	{
		// Get User

		//Gets the IP Address from the visitor
		$PublicIP = $_SERVER['REMOTE_ADDR'];
		//Uses ipinfo.io to get the location of the IP Address, you can use another site but it will probably have a different implementation
		$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
		//Breaks down the JSON object into an array
		$json     = json_decode($json, true);
		//This variable is the visitor's county
		$country  = $json['country'];
		//This variable is the visitor's region
		$region   = $json['region'];
		//This variable is the visitor's city
		$city     = $json['city'];

		return $country;
	}
}
