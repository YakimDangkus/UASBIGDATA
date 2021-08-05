<?php
class volume
{
	protected $p;
	protected $l;
	protected $t;

  public function setP($p) {

    $this->p = $p;
    return $this; 
  }
  public function setL($l) {

    $this->l = $l;
    return $this; 
  }
  public function setT($t) {

    $this->t = $t;
    return $this; 
  }
}
class anak extends volume
{
	protected $a;
	public function volum() {
		$this->a =$this->p*$this->l*$this->t;
		return $this;
	}

    public function __toString()
    {
        return "Maka Volumenya adalah : ".$this->a;
    }
}

$ob=new anak;
echo $ob->setP(4)->setL(5)->setT(6)->volum();