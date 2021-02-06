<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<title>
    Crestan Crop
</title>
<body>
   <table>
       <tr>
           <th>Name</th>
           <th>City</th>
           <th>Occupation</th>
       </tr>

       <script type="text/javascript">
            $(document).ready(function(){
                $("$example1").DataTable({
                    "ajax": "<?php echo base_url('welcome/fetch_data'); ?>",
                    "order": [],
                });
            });

    
        </script>
       
       
       
       <?php 
            // print_r($user_arr[0]["name"]);
            // for($i=0; $i<sizeof($user_arr); $i++)
            // {
            //     print_r($user_arr[$i]["name"]); echo "<br>";
            //     print_r($user_arr[$i]["city"]); echo "<br>";
            //     print_r($user_arr[$i]["occupation"]); echo "<br>";
            // }
            // foreach($user_arr as $key => $value)
            // {
            //     // echo "<pre>";
            //     // print_r($value["name"]);
            //     // echo "</pre>";
            //     // echo "<table>";
            //     echo "<tr>
            //         <td>" .$value["name"]. "</td>
            //         <td>" .$value["city"]. "</td>
            //         <td>" .$value["occupation"]. "</td>
            //     </tr>";
            //     // echo "</table>";
            // }
       ?>
        
   </table>
</body>
</html>

<style>
    table, th, td {
        border: 1px solid black;
    }
</style>