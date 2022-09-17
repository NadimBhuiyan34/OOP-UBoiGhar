<?php 
namespace UBoiGhar\Sell_Book;
class sellbook{
    public $booktitle=null;
    public $bookAuthor=null;
    public $bookedition=null;
    public $bookquantity=null;
    public function __construct($booktitle,$bookAuthor,$bookedition,$bookquantity) {
        $this->booktitle = $booktitle;
        $this->bookAuthor = $bookAuthor;
        $this->bookedition = $bookedition;
        $this->bookquantity = $bookquantity;
      }
      public function get_name() {
        return $this->booktitle;
        return $this->bookAuthor; 
        return $this->bookedition; 
        return $this->bookquantity;
      }
}



?>