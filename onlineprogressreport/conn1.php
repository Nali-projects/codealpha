<?php 

$host="localhost";
$username="root";
$password="";
$database="semester";
$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    echo " connection not established";
}
else{
echo " connectiion established";
}
$sql="SELECT * FROM 1stsem";
$result=mysqli_query($conn,$sql);
$data=array();
$data1=array();
if(mysqli_num_rows($result)>0)
{

    while($row=mysqli_fetch_assoc($result))
    {
         $data[]=$row['sub_code'];
         $data1[]=$row['sub_name'];
         $mon=$row['month & year'];

         
    }


}
print_r($data1);
print_r($data);
echo "$mon";
?>


<tr class="info">
                            <td>2</td>
                            <td><?php echo $sub_code1[1]['sub_code']; ?></td>
                            <td> <?php echo $sub_name1[1]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                         <tr class="info">
                            <td>3</td>
                            <td><?php echo $sub_code1[2]['sub_code']; ?></td>
                            <td> <?php echo $sub_name1[2]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                        <tr class="info">
                            <td>4</td>
                            <td><?php echo $sub_code1[3]['sub_code']; ?></td>
                            <td> <?php  echo $sub_name1[3]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                        <tr class="info">
                            <td>5</td>
                            <td><?php echo $sub_code1[4]['sub_code']; ?></td>
                            <td> <?php echo $sub_name1[4]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                        <tr class="info">
                            <td>6</td>
                            <td><?php echo $sub_code1[5]['sub_code']; ?></td>
                            <td> <?php echo $sub_name1[5]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                        <tr class="info">
                            <td>7</td>
                            <td><?php echo $sub_code1[6]['sub_code']; ?></td>
                            <td> <?php echo $sub_name1[6]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                        <tr class="info">
                            <td>8</td>
                            <td><?php echo $sub_code1[7]['sub_code']; ?></td>
                            <td> <?php echo $sub_name1[7]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                        <tr class="info">
                            <td>9</td>
                            <td><?php echo $sub_code1[8]['sub_code']; ?></td>
                            <td> <?php echo $sub_name1[8]['sub_name']; ?></td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>
                            <td>76</td>
                            <td>2</td>
                            <td>A</td> 
                        </tr>
                        <!-- <tr class="info">
                            <td>10</td>
                            <td>td>
                            <td>Engineering mathematics</td>
                            <td>30</td>
                            <td>70</td>
                            <td>100</td>