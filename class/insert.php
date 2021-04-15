<?php
class insert extends config{
  public $names;
  public $review;

  public function __construct($names, $review){
    $this->names = $names;
    $this->review = $review;
  }
  public function insertReview(){
    $con = $this->con();
    $sql = "insert into tbl_review(names, feedbacks) values('$this->names', '$this->review')";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>