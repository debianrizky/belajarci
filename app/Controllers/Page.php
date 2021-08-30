<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function page1()
    {
        echo 'Halaman 1';
        echo '</br><a href="../Page2"><button type="submit">next</button></a>';
    }
    public function page2()
    {
        echo 'Halaman 2';
        echo '</br><a href="../Page3"><button type="submit">next</button></a>';
    }
    public function page3()
    {
        echo 'Halaman 3';
        echo '</br><a href="../Page4"><button type="submit">next</button></a>';
    }
    public function page4()
    {
        echo 'Halaman 4';
        echo '</br><a href="../Page5"><button type="submit">next</button></a>';
    }
    public function page5()
    {
        echo 'Halaman 5';
        echo '</br><a href="../Page1"><button type="submit">next</button></a>';
    }
}
