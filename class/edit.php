<?php
class edit extends config{
  public $id;

  public function __construct($id){
    $this->id = $id;
  }
  public function editReview(){
    $con = $this->con();
    $sql = "update tbl_review set status = 'approve', date = now() where id = $this->id";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>
