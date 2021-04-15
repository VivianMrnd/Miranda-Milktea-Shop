<?php
    function crud(){
        editStatus();
        Reject();
    }

    function insertR(){

        if(!empty($_GET['names']) && !empty($_GET['review'])){
            $insert = new insert($_GET['names'],$_GET['review']);
            if($insert ->insertReview()){
              echo '<div class="alert alert-success alert-dismissible fade show fixed-bottom container" 
              role="alert"><strong>Thank you for the feedback!</strong> Your review is on the process 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom container" 
                role="alert">Error Adding Feedback. 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
    }

    function viewTable(){

        $view = new view();
        $view->viewData();
    }

    
    function viewApprove(){

        $view = new view();
        $view->viewApprovedData();
    }

    
    function editStatus(){
        if(!empty($_GET['edit'])){
            $edit = new edit($_GET['edit']);
            if($edit ->editReview()){

                echo '<div class="alert alert-success alert-dismissible fade show fixed-bottom container" 
                role="alert"><strong>REVIEW APPROVED! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom container" 
                role="alert">ERROR APPROVING REVIEW. 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
    }

    function Reject(){
        if(!empty($_GET['delete'])){
            $delete = new delete($_GET['delete']);
            if($delete ->RejectReview()){
                echo '<div class="alert alert-success alert-dismissible fade show fixed-bottom container" 
                role="alert"><strong>REVIEW REJECTED! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom container" 
                role="alert">ERROR DELETING/REJECTING REVIEW. 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
    }
?>

