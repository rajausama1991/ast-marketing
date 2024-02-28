<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = $this->getReviews();
        $data['title'] = 'Digital Marketing Agency in Dubai Revolutionizing Businesses';
        $data['canonical_tag'] = current_url();
        $data['page_name'] = 'Home';
        $data['meta_title'] = 'Boost Your Business with a Top Digital Marketing Agency!';
        $data['meta_descrption'] = 'Discover How Our Digital Marketing Agency Maximizes Your Online Success. Get Results Today!';
        $var['content'] = $this->load->view('frontend/home', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    public function getReviews()
    {
        // $cid = 5238456790674600095; //CID of a place can be genrated from https://pleper.com/index.php?do=tools&sdo=cid_converter
        //execute curl
        $url = 'https://maps.googleapis.com/maps/api/place/details/json?place_id=PLACE_ID&key=API KEY';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $data = curl_exec($ch);
        curl_close($ch);

        $arrayData = json_decode($data, true); // json object to array conversion
        $result = array();
        $result = $arrayData['result'];

        $result['user_ratings_total']; // display total number of users who rated
        $result['rating']; // display total average rating
        $result['reviews'];   //holds information like author_name, author_url, language, profile_photo_url, rating, relative_time_description, text, time
        $result['url'];
        $overall_ratings = '';
        // echo "<pre>";
        // print_r($result);
        // die;
        // echo $reviews[0]->author_name;
        // $authorName = $reviews[0]['author_name'];
        // echo $authorName;

        // foreach ($reviews as $review) {
        //     $authorName = $review['author_name'];
        //     // You can do something with $authorName here, such as printing it or storing it.
        // }


        // die;
        //display on view
        // var_dump($total_users);
        // var_dump($overall_ratings);
        // var_dump($reviews);  

        return $result;
    }
    function seoServices()
    {
        $data['title'] = 'SEO Services';
        $data['page_name'] = 'SEO Services';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'SEO Services: Get Found Online & Dominate Search Results';
        $data['meta_descrption'] = 'Reach the top of search results & attract more customers with our expert SEO services. We offer a complete range of solutions to boost your websites visibility & organic traffic.';
        $var['content'] = $this->load->view('services/seo', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function socialMediaMarketing()
    {
        $data['title'] = 'Social Media Marketing';
        $data['page_name'] = 'Social Media Marketing';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Social Media Marketing Services: Grow Your Audience & Drive Sales';
        $data['meta_descrption'] ='Unleash the power of social media! Our expert social media marketing services help you build a strong online presence, engage your audience, and achieve your business goals.';
        $var['content'] = $this->load->view('services/social-media-marketing', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function graphicDesign()
    {
        $data['title'] = 'Graphics Design';
        $data['page_name'] = 'Graphics Design';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Stunning Graphics Design: Elevate Your Brand & Captivate Your Audience';
        $data['meta_descrption'] ='Attract attention and boost engagement with powerful, professional graphics design. We create unique visuals that tell your story and connect with your target audience.';
        $var['content'] = $this->load->view('services/graphic-design', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function appDevelopment()
    {
        $data['title'] = 'Application Development';
        $data['page_name'] = 'Application Development';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] ='Application Design & Development Services: Build the Next Big App';
        $data['meta_descrption'] ='Turn your app idea into reality with our expert Application Design & Development Services. We create user-friendly, high-performing apps that drive engagement and achieve your business goals.';
        $var['content'] = $this->load->view('services/app-development', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function logoDesign()
    {
        $data['title'] = 'Logo Design';
        $data['page_name'] = 'Logo Design';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Brand Boost: Affordable Logo Design Services';
        $data['meta_descrption'] ='Need a logo that pops? Our Logo Design Services ignite brands with vibrant designs that grab attention & drive results. Free consultation!';
        $var['content'] = $this->load->view('services/logo-design', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function ppc()
    {
        $data['title'] = 'PPC Services';
        $data['page_name'] = 'PPC Services';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'PPC Services: Generate High-Quality Leads & Boost ROI';
        $data['meta_descrption'] = 'Maximize your online advertising budget with our expert PPC services. We help you create targeted campaigns, optimize your bids, and track your results to achieve your business goals.';
        $var['content'] = $this->load->view('services/ppc', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function aboutUs()
    {
        $data['title'] = 'About Us';
        $data['page_name'] = 'About Us';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'About Us: Your Trusted Partner in Digital Marketing Success';
        $data['meta_descrption'] = 'Your one-stop shop for all your digital marketing needs. We are a passionate team of experts dedicated to helping businesses of all sizes achieve their online goals.';
        $var['content'] = $this->load->view('frontend/about-us', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function contactUs()
    {
        $data['title'] = 'Contact Us';
        $data['page_name'] = 'Contact Us';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Lets Connect! Contact All Star Technologies Today';
        $data['meta_descrption'] = 'Get in touch with us for any questions or inquiries. We are happy to assist you through phone, email, or the provided contact form.';
        $var['content'] = $this->load->view('frontend/contact-us', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function privacyPolicy()
    {
        $data['title'] = 'Privacy Policy';
        $data['page_name'] = 'Privacy Policy';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Learn How All Star Technologies Protects Your Data';
        $data['meta_descrption'] = 'Our privacy policy outlines how we collect, use, and protect your personal information. We are committed to respecting your privacy and ensuring your data is safe.';
        $var['content'] = $this->load->view('frontend/privacy-policy', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function termConditions()
    {
        $data['title'] = 'Terms and Conditions';
        $data['page_name'] = 'Terms and Conditions';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Understand Our Agreement Before Using All Star Technologies';
        $data['meta_descrption'] = 'Review our terms and conditions for using our website, services, and products. This page outlines our legal agreement with you, including user rights and responsibilities.';
        $var['content'] = $this->load->view('frontend/term-conditions', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function webDesign()
    {
        $data['title'] = 'Website Design and Development';
        $data['page_name'] = 'Website Design and Development';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Website Design & Development Services - Professional & Affordable';
        $data['meta_descrption'] = 'Create a stunning website that attracts customers & drives results.We offer comprehensive website design & development services for businesses of all sizes';
        $var['content'] = $this->load->view('services/web-design', $data, true);
        $this->load->view('frontend/template2023', $var);
    }
    function thankYou()
    {
        $data['title'] = 'Thank You';
        $data['page_name'] = 'Thank You';
        $data['canonical_tag'] = current_url();
        $data['meta_title'] = 'Thank You for Choosing All Star Technologies';
        $data['meta_descrption'] = 'Your support is appreciated! We are excited to help you and look forward to serving you again soon.';
        $var['content'] = $this->load->view('frontend/thank-you', $data, true);
        $this->load->view('frontend/template2023', $var);
    }

    function login()
    {
        $this->form_validation->set_rules('email', 'User Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('country_code', 'country code', 'trim|required');



        $email = $this->input->post('email', TRUE);
        $phone = $this->input->post('phone');
        $country_code = $this->input->post('country_code');


        if ($this->form_validation->run() === FALSE) {
            $data = $this->getReviews();
            $data['title'] = 'AST Marketing Website';
            $data['canonical_tag'] = current_url();
            $data['page_name'] = 'Home';
            $data['meta_title'] = 'Boost Your Business with a Top Digital Marketing Agency!';
            $data['meta_descrption'] = 'Discover How Our Digital Marketing Agency Maximizes Your Online Success. Get Results Today!';
            $var['content'] = $this->load->view('frontend/home', $data, true);
            $this->load->view('frontend/template2023', $var);
        } else {
            $email = $this->input->post('email', TRUE);
            $phone = $country_code . '' . $this->input->post('phone');
            $password = str_replace(' ', '', ucwords($email));
            $user_password = md5($password . '123');
            $query = $this->common_model->login($email, $user_password);

            if ($query->num_rows() > 0) {
                $row = $query->row();

                if ($row->role_id) {
                    $this->session->set_userdata('user_id', $row->admin_id);
                    redirect(base_url());
                } else {
                    redirect(base_url());
                }
            } else {
                $data['user_email'] = $email;
                $data['user_coantact'] = $phone;
                $data['domain_type'] = 'ASTM';
                $password = str_replace(' ', '', ucwords($email));
                $data['user_password'] = md5($password . '123');

                $this->db->insert('users', $data);
                $user_id = $this->db->insert_id();
                if ($user_id) {
                    $this->session->set_userdata('user_id', $user_id);
                }
                redirect(base_url());
            }
        }
    }
}
