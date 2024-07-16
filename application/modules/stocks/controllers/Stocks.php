
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stocks extends CI_Controller
{

    public function stock_sidebar()
    {
        $url = 'https://finnhub.io/api/v1/news?category=forex,merger&token=' . TOKEN;

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
                $sidebar = $data;
        }
        curl_close($ch);
        return $sidebar;
    }

    public function Stock()
    {
        $url = 'https://finnhub.io/api/v1/company-news?symbol=AAPL&from=2023-08-15&to=2023-08-20&token=' . TOKEN;


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

            $this->datas['news'] = $data;
            $this->datas['sidebar'] = $this->stock_sidebar();
            $this->load->view('stock_view', $this->datas);
        }
        curl_close($ch);
    }
}
