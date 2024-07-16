<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library("pagination");
    }

    public function India()
    {
        $url = 'https://newsapi.org/v2/top-headlines?country=in&apiKey=' . API_KEY;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: YourAppName/1.0'
        ]);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            if ($data['status'] == 'ok') {
                $this->datas['news'] = $data['articles'];
                
                $this->datas['sidebar'] = $this->side_bar();

                $this->load->view('home_view', $this->datas);
            } else {
                echo 'Error: ' . $data['message'];
            }
        }

        curl_close($ch);
    }

    public function side_bar()
    {
        // $apiKey = 'a2262e8e19ab4cf6947080ce128534d6';
        $url = 'https://newsapi.org/v2/top-headlines?country=in&apiKey='  . API_KEY;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: YourAppName/1.0'
        ]);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            if ($data['status'] == 'ok') {
                $sidebar = $data['articles'];
            }
        }
        curl_close($ch);
        return $sidebar;
    }

    public function Bitcoin()
    {
        $url = 'https://newsapi.org/v2/everything?q=bitcoin&apiKey=' . API_KEY;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: YourAppName/1.0'
        ]);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            if ($data['status'] == 'ok') {
                // $bitcoin = $data['articles'];
                $this->datas['news'] = $data['articles'];
                $this->datas['sidebar'] = $this->side_bar();
                $this->load->view('home_view', $this->datas);
            } else {
                echo 'Error: ' . $data['message'];
            }
        }
        curl_close($ch);
    }

    public function Apple()
    {
        $url = 'https://newsapi.org/v2/everything?q=apple&apiKey=' . API_KEY;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: YourAppName/1.0'
        ]);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            if ($data['status'] == 'ok') {
                // $bitcoin = $data['articles'];
                $this->datas['news'] = $data['articles'];
                $this->datas['sidebar'] = $this->side_bar();
                $this->load->view('home_view', $this->datas);
            } else {
                echo 'Error: ' . $data['message'];
            }
        }
        curl_close($ch);
    }

    public function Global()
    {
        $url = 'https://newsapi.org/v2/everything?domains=techcrunch.com,thenextweb.com,bbc.co.uk,engadget.com&apiKey=' . API_KEY;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: YourAppName/1.0'
        ]);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            
            if ($data['status'] == 'ok') {
                // $bitcoin = $data['articles'];

                $view = 'global';
                $this->datas['news'] = $data['articles'];
                $this->datas['sidebar'] = $this->side_bar();
                $this->load->view('home_view', $this->datas);
            } else {
                echo 'Error: ' . $data['message'];
            }
        }
        curl_close($ch);
    }

    public function International()
    {

        // $currentURL = base_url('home/international'); //http://myhost/main
        // $params   = $_SERVER['QUERY_STRING']; //my_id=1,3
        // $fullURL = $currentURL . '?' . $params;

        // $country = $_GET['country'];

        $country = $_POST['country'];

        $url = 'https://newsapi.org/v2/top-headlines?country=' . $country . '&apiKey='  . API_KEY;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: YourAppName/1.0'
        ]);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            if ($data['status'] == 'ok') {

                // $string = $fullURL;
                // $parts = explode('/', $string);
                // $this->pageConfig($data['totalResults'], $fullURL);
                // $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
                // $this->datas['links'] = $this->pagination->create_links();

                
                $this->datas['news'] = $data['articles'];
                $this->datas['sidebar'] = $this->side_bar();

                $this->load->view('home_view', $this->datas);
            } else {
                echo 'Error: ' . $data['message'];
            }
        }

        curl_close($ch);
    }
  
}
