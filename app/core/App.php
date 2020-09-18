<?php
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        // echo "Selamat datang";
        $url = $this->parseUrl();
        var_dump($url);
    }

    public function parseUrl()
    {
        // link : php-mvc/public/index.php?url=asd
        if (isset($_GET['url'])) { //buat ambil kata asd setelah url 
            $url = rtrim($_GET['url'], '/'); //buat ilangin simbol / yg dikanan
            $url = filter_var($url, FILTER_SANITIZE_URL); //buat benerin url
            // php-mvc/public/home/page/satu/dua
            $url = explode('/', $url); //buat pecah url yg diketik setelah public
            return $url;
        }
    }
}
