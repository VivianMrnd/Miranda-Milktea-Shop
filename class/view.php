<?php
class view extends config{

    public function viewData(){
        $con = $this->con();
        $sql = "select * from tbl_review where status = 'reject'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 

        echo "
            <table class = 'table table-transparent table-sm text-light'>
                <thead>
                    <tr>
                        <th scope='col'>NAMES</th> 
                        <th scope='col'>COMMENTS</th>
                        <th scope='col'>DATE</th>
                        <th scope='col'>ACTION</th>
                    </tr>
                </thead>
                <tbody>";
            foreach($result as $data){
                echo "<tr>
                        <td>$data[names]</td>
                        <td>$data[feedbacks]</td>
                        <td>$data[date]</td>
                        <td><a class = 'btn btn-light btn-sm' href='review.php?edit=$data[id]'>APPROVE</a>
                            <a class = 'btn btn-danger btn-sm' href='review.php?delete=$data[id]'>REJECT</a>
                        </td>
                    </tr>";
            }

        echo "</tbody></table>";
       
    }

    public function viewApprovedData(){
        $con = $this->con();
        $sql = "select * from tbl_review where status = 'approve'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 

        foreach($result as $data){
            echo "
                    <div class='card'>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item text-light bg-dark'><b>$data[names]</b>&nbsp;
                                $data[feedbacks] &nbsp;&nbsp;
                                <small>$data[date]</small>
                            </li>
                        </ul>
                    </div>
            ";
        }
       
    }

}
?>

