<?php
class delete extends config{
  public $id;

  public function __construct($id){
    $this->id = $id;
  }
  public function RejectReview(){
    $con = $this->con();
    $sql = "delete from tbl_review where id = $this->id";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>
