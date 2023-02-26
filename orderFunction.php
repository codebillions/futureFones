<?php

        require("database.php");

        class order{
                public $custID;
                private $connection;

                public function orderdeatails(){
                    $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

                    if ($connection->connect_error){
                        echo"couldn't connect". $connection->connect_error;
                    }else{
                        $sql = " SELECT `itemName`, `price`, `fullName`, `phoneNumber`, `local_Govt`, `date`, `quantity`, `payment_option`, `total`, `srNo`
                        FROM `orders`
                        JOIN customer ON customer.customerID = orders.customerID
                        WHERE customer.customerID= '".$this->custID."'";

                    $result = $connection->query($sql);
                    $num_of_rec = $result->num_rows;

                    if($num_of_rec >= 1){

                        $table = '<table class="table table-striped table-sm table-bordered text-center">
          		   	             <thead>
                                    <tr>
                                        <th class="bg-dark text-white" scope="col"><h5>PHONE NAME</h5></th>
                                        <th class="bg-dark text-white" scope="col"><h5>PRICE</h5></th>
                                        <th class="bg-dark text-white" scope="col"><h5>DATE</h5></th>
                                        <th class="bg-dark text-white" scope="col"><h5>QUANTITY</h5></th>
                                        <th class="bg-dark text-white" scope="col"><h5>PAYMENT TYPE</h5></th>
                                        <th class="bg-dark text-white" scope="col"><h5>TOTAL</h5></th>
                                    </tr>          		    	
                                 </thead>
          			        <tbody>';

                                        while ($row = $result->fetch_assoc()) {
                                            $table .='<tr scope="row" >
                                                    <td>'.$row['itemName'].'</td>
                                                    <td>'.$row['price'].'</td>
                                                    <td>'.$row['date'].'</td>
                                                    <td>'.$row['quantity'].'</td>
                                                    <td>'.$row['payment_option'].'</td>
                                                    <td>'.$row['total'].'</td>
                                                    </tr>';
                                        }

                                            $table .='
                                                </tbody>
                                            </table>';

                                            return $table;
                    }else{
                        echo"<h2 class='text-dark text-center'>".$_SESSION['FNAME']." you will see your orders here</h2>";
                    }
                    }
                }

        }
?>