<!DOCTYPE html>
<html>
    <title>
        Crestan Crop
    </title>
    <body>
        <div class="userModal" style="text-align:center;">
        
        <form id="data_form" method="POST">
            <div class="form-group">
                    <b>Name</b><br>
                    <input type="text" id="user" name="user" autocomplete="off"><br><br>
                </div>
                <div class="form-group">
                    <b>City</b><br> 
                    <input type="text" id="city" name="city" autocomplete="off"><br><br>
                </div>
                <div class="form-group">
                    <b>Occupation</b><br> 
                    <input type="text" id="occ" name="occ" autocomplete="off"><br><br>
                </div>
                    <input type="submit" id="submit" name="submit" value="submit">
            </div>
        </form>
        <table id="example1" class="table">
		    <thead>
		        <tr>
		            <th scope="col">Name</th>
		            <th scope="col">City</th>
		            <th scope="col">Occupation</th>
		        </tr>
		    </thead>

		</table>
        

    </body>
</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script type="text/javascript">
            $("#data_form").submit(function(event)
            {
                event.preventDefault();
                // $('#submit').click(function(){
                    $.ajax({
                        url: "<?php echo base_url('Welcome/create');?>" ,
                        data: $("#data_form").serialize(),  //serialize used to store input one by one
                        type: 'post',
                        async: false, //first complete the above task and then, proceed to next
                        dataType: 'json',
                        success: function(response)
                        {
                            $('#data_form').modal('hide');
                            $('#data_form')[0].reset();
                            alert("Successfully Inserted.");
                            // $('#userModal').DataTable().ajax.reload();
                        },
                        error: function()
                        {
                            alert("Error");
                        }
                    })
                // })
            });


            //displaying of data 
        //     $(document).ready(function(){
		// 	$('#example1').DataTable({
		// 		"ajax" : "<?php echo base_url('Welcome/fetch_data'); ?>",
		// 		"order": [],
		// 	});
		// });
        //displaying of data
        $(document).ready(function(){
            $('#example1').DataTable({
                "ajax": "<?php echo base_url('Welcome/fetch_data'); ?>",
                "order": [],
            });
        });
            


    </script>  
 </head>
 <body> 
</script>