<?php

class volume {

    protected $p;
    protected $l;
    protected $t;

    public function __construct($p,$l,$t) 
    {
        $this->p = $p;
        $this->l = $l;
        $this->t = $t;
    }

    public function setP() {
        $this->p=$this->p;
        return $this;
    }

    public function setL() {
        $this->l=$this->l;
        return $this;
    }
    
    public function setT() {
        $this->t=$this->t;
        return $this;
    }
}
class anak extends volume
{
    protected $get;    
       protected function get()
       {
         $this->get=($this->p)*($this->l)*($this->t);
         echo "Volumenya adalah = ".$this->get;
       }
    }
}

$p = "4";
$l = "5";
$t = "6";
$objk = new volume($p,$l,$t);
$objk = new anak 
echo$objk->get();

