<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
    include 'connect.php';
	header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header("Content-Disposition: attachment; filename=List Transaction.xls");
	?>
 
    <h3>LAPORAN LIST TRANSAKSI EMPAT KOPI</H3>
    <tr>

    </tr>
	<table border="1">
    <tr class="success">
    
                            <th width="50px">No</th>
                            <th>Id Product</th>
                            <th>Name Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Checkout Date</th>


                            
                        </tr>
                    
                        
                        <?php
                        $start_date=$_GET['start_date'];
                        $end_date=$_GET['end_date'];
                        $data = mysqli_query($con,"select list_transaction.*, product.menu_name from list_transaction left join product on list_transaction.id_product=product.id_product 
                        where checkout_date between '$start_date' and '$end_date' order by checkout_date desc");
                        $no = 1;
                        
                        while($d = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id_product']; ?></td>
                                <td><?php echo $d['menu_name']; ?></td>
                                <td><?php echo $d['quantity_buy']; ?></td>                             
                                <td>Rp<?php echo $d['menu_price']; ?></td>
                                <td><?php $orgDate = $d['checkout_date']; 
                                          $newDate = date("d/m/Y H:i:s", strtotime($orgDate));echo $newDate;   ?> </td>
                            </tr>

 
                                
                            </tr>
                            <?php
                        }
                        ?>
                        <tfoot class="text-center">
                          <?php 
                            
                            $start_date=$_GET['start_date'];
                            $end_date=$_GET['end_date'];
                            $data7 = mysqli_query($con,"select sum(menu_price) as total, sum(quantity_buy) as quantity_buy from list_transaction where checkout_date between '$start_date' and '$end_date'");
                            $total = mysqli_fetch_array($data7);
                                                      ?>
                            <tr>
                                <th></th>
                               
                                
                                <th scope="row">Total</th>
                                <!-- <td>Web-Development Bundle</td> -->
                                <td></td>
                                <td><b><?php echo $total['quantity_buy'] ?></b></td>
                                <td><b>Rp<?php echo $total['total'] ?></b></td>
                                <!-- <td><a href="excel_listtransactionall.php" class="btn btn-warning px-5  mt-3">Export Data</a></td> -->
                                <!-- <td><a href="checkout.php">Checkout</a></td> -->
                            </tr>
                        </tfoot>
	</table>
</body>
</html>