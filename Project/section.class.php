<?php
class Section{
  private $first;
  private $second;
  private $third;
  private $fourth;
  private $fifth;
  private $sixth;
  private $seventh;
  private $eighth;

  function __construct($first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth)
  {
    $this->first = $first;
    $this->second = $second;
    $this->third = $third;
    $this->fourth = $fourth;
    $this->fifth = $fifth;
    $this->sixth = $sixth;
    $this->seventh = $seventh;
    $this->eighth = $eighth;
  }

  //Getter functions
  public function getFirst(){return $this->first;}
  public function getSecond(){return $this->second;}
  public function getThird(){return $this->third;}
  public function getFourth(){return $this->fourth;}
  public function getFifth(){return $this->fifth;}
  public function getSixth(){return $this->sixth;}
  public function getSeventh(){return $this->seventh;}
  public function getEighth(){return $this->eighth;}

  //Setter functions
  public function setFirst($first){$this->first = $first;}
  public function setSecond($second){$this->second = $second;}
  public function setThird($third){$this->third = $third;}
  public function setFourth($fourth){$this->fourth = $fourth;}
  public function setFifth($fifth){$this->fifth = $fifth;}
  public function setSixth($sixth){$this->sixth = $sixth;}
  public function setSeventh($seventh){$this->seventh = $seventh;}
  public function setEighth($eighth){$this->eighth = $eighth;}
}
 ?>
