
<!DOCTYPE html>
<html lang="">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATABASE CONNECTIVITY</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">


   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
  </head>
  <body><
      <div class="container">
    <h1>DATABASE CONNECTIVITY</h1>
</center>
    <h3>DATABASE</h3>
    <br />
    <button class="btn btn-success" onclick="add_book()"><i class="glyphicon 

glyphicon-plus"></i> Add Book</button>
    <br />
    <br />
     <?php echo validation_errors(); ?>
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
	<th>First_Name</th>
                    <th>Last_Name</th>
                    <th>UID_NO.</th>
                    <th>Father_Name</th>
                    <th>Mother_Name</th>
                    <th>Photo</th>
                    <th>Postal_address</th>
                    <th>City</th>
                    <th>District</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Phone_No</th>
                    <th>Mobile_No</th>
                    <th>Date Of Birth</th>
                    <th>AGE</th>
                    <th>Anniversary_Date</th>
                    <th>Pan_No.</th>
                    <th>Office_addresse</th>
                    <th>City</th>
                    <th>District</th>
                    <th>State</th>
                    <th>Occupation</th>
                    <th>Nominee_Name</th>
                    <th>Nominee_Age</th>
                    <th>Relation</th>
                    <th style="width:125px;">Action</p></th>
        </tr>
      </thead>
      		
      <tbody>
	
	<tr>
	                 <td><?php echo $alwayss->id;?></td>
                   <td><?php echo $alwayss->fname;?></td>
	                <td><?php echo $alwayss->mname;?></td>
	                 <td><?php echo $always->uid;?></td>
	                   <td><?php echo $always->faname;?></td>
                      <td><?php echo $always->moname;?></td>
                    <td><?php echo $always->image;?></td>
                    <td><?php echo $always->paddress;?></td>
                    <td><?php echo $always->p_city;?></td>
                      <td><?php echo $always->p_district;?></td>
                       <td><?php echo $always->p_state;?></td>
                       <td><?php echo $always->pincode;?></td>
                        <td><?php echo $always->phone_no;?></td>
                        <td><?php echo $always->mob_no;?></td>
                         <td><?php echo $always->dob;?></td>
                         <td><?php echo $always->age;?></td>
                         <td><?php echo $always->aniver_date;?></td>
                         <td><?php echo $always->pan_no;?></td>
                         <td><?php echo $always->oaddress;?></td>
                         <td><?php echo $always->ocity;?></td>
                         <td><?php echo $always->odistrict;?></td>
                         <td><?php echo $always->ostate;?></td>
                         <td><?php echo $always->job;?></td>
                         <td><?php echo $always->nomi_name;?></td>
                         <td><?php echo $always->n_age;?></td>
                          <td><?php echo $always->n_relation;?></td>
                            
	<td><button class="btn btn-warning" onclick="edit_book(<?php echo $always->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
	      <button class="btn btn-danger" onclick="delete_book(<?php echo $always->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
               </td>
              
     </tr>
                          
	</tbody> 
	 </table>
</div>
<script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>" ></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>
  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;
 
 
    function add_book()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
 
    function edit_book(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('index.php/democon/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="id"]').val(data.id);
            $('[name="fname"]').val(data.fname);
            $('[name="mname"]').val(data.mname);
            $('[name="uid"]').val(data.uid);
            $('[name="faname"]').val(data.faname);
            $('[name="moname"]').val(data.moname);
            $('[name="image"]').val(data.image);
            $('[name="paddress"]').val(data.paddress);
            $('[name="p_city"]').val(data.p_city);
            $('[name="p_district"]').val(data.p_district);
            $('[name="p_state"]').val(data.p_state);
            $('[name="pincode"]').val(data.pincode);
            $('[name="phone_no"]').val(data.phone_no);
            $('[name="mob_no"]').val(data.mob_no);
            $('[name="dob"]').val(data.dob);
            $('[name="age"]').val(data.age);
            $('[name="aniver_date"]').val(data.aniver_date);
            $('[name="pan_no"]').val(data.pan_no);
            $('[name="oaddress"]').val(data.oaddress);
            $('[name="ocity"]').val(data.ocity);
            $('[name="odistrict"]').val(data.odistrict);
            $('[name="job"]').val(data.job);
            $('[name="nomi_name"]').val(data.nomi_name);
            $('[name="n_age"]').val(data.n_age);
            $('[name="relation"]').val(data.relation);

            $('#modal_form').modal('show'); // show bootstrap modal when complete 

loaded
            $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
 
 
    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('index.php/democon/book_add')?>";
      }
      else
      {
        url = "<?php echo site_url('index.php/democon/book_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
 
    function delete_book(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('index.php/democon/book_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
 
  </script>
 
  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-

label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Registration Form</h3>
      </div>
      <div class="modal-body form">
           <?php echo validation_errors(); ?>
        <form action="#" id="form" class="form-horizontal">
           <legend><h1>Fill your Details here:</h1></legend>
        <div class="row">
     <div class="col-sm-4">
         <div class="form-group">
             <label for="fname">First_Name</label>
             <input type="text" class="form-control" name="fname" 

placeholder="First_Name">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="Middle_Name">Middle_Name</label>
             <input type="text" class="form-control" name="mname" 

placeholder="Middle_Name">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="UID">UID_NO.</label>
             <input type="value" class="form-control" name="uid" placeholder="UID_NO.">
         </div>
     </div>
         </div>
         <div class="row">
     <div class="col-sm-4">
         <div class="form-group">
             <label for="Father_Name">Father_Name</label>
             <input type="text" class="form-control" name="faname" 

placeholder="Father_Name">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="Mother_Name">Mother_Name</label>
             <input type="text" class="form-control" name="moname" 

placeholder="Mother_Name">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
            <label for="image">Image file:</label>
            <input name="image" class="form-control" type="file">
         </div>
     </div>
         </div>
     <div class="row">
         <div class="col-sm-8">
          <div class="form-group">
               <label for="address">Postal_address:</label>
     <textarea name="paddress" class="form-control" rows="4" 

required="required"></textarea>
          </div>
     </div>
          </div>
<div class="row">
     <div class="col-sm-4">
         <div class="form-group">
             <label for="City">City:</label>
             <input type="text" class="form-control" name="p_city" placeholder="Enter City:">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="District">District:</label>
             <input type="text" class="form-control" name="p_district" placeholder="Enter District:">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="State">State:</label>
             <input type="value" class="form-control" name="p_state" placeholder="Enter State:">
         </div>
     </div>
         </div>
         <div class="row">
     <div class="col-sm-4">
         <div class="form-group">
             <label for="PIN">Pincode:</label>
             <input type="text" class="form-control" name="pincode" placeholder="Enter pincode:">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="phone">Phone_No:</label>
             <input type="text" class="form-control" name="phone_no" placeholder="Enter Phone_No:">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="mob">Mobile_No:</label>
             <input type="value" class="form-control" name="mob_no" placeholder="Enter Mob_No:">
         </div>
     </div>
     <div class="row">
     <div class="col-sm-3">
         <div class="form-group">
                  <label for="dob">DOB:</label>
                 <input type="date" name="dob" class="form-control" title="Enter dob:">
             </div>
             </div>
     <div class="col-sm-3">
         <div class="form-group">
             <label for="age">AGE:</label>
             <input type="text" class="form-control" name="age" placeholder="Enter your AGE:">
         </div>
     </div>
      <div class="col-sm-3">
         <div class="form-group">
                  <label for="dob">Anniversary_Date:</label>
                 <input type="date" name="aniver_date" class="form-control" placeholder="Enter dob:">
             </div>
             </div>
      <div class="col-sm-3">
         <div class="form-group">
             <label for="pan">PAN_No:</label>
             <input type="value" class="form-control" name="pan_no" placeholder="Enter PAN_No:">
         </div>
     </div>
     <div class="row">
         <div class="col-sm-8">
          <div class="form-group">
               <label for="address">Office_address:</label>
     <textarea name="oaddress" class="form-control" rows="4"></textarea>
          </div></div></div>
<div class="row">
     <div class="col-sm-4">
         <div class="form-group">
             <label for="City">City:</label>
             <input type="text" class="form-control" name="ocity" placeholder="Enter City:">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="District">District:</label>
             <input type="text" class="form-control" name="odistrict" placeholder="Enter District:">
         </div>
     </div>
      <div class="col-sm-4">
         <div class="form-group">
             <label for="State">State:</label>
             <input type="value" class="form-control" name="ostate" placeholder="Enter State:">
         </div>
     </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="job">Occupation:</label>
             <input type="text" class="form-control" name="job" placeholder="Enter your Occupation:">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="Nominee_Name">Nominee_Name</label>
             <input type="text" class="form-control" name="nomi_name" placeholder="Enter Nominee_Name">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                   <label for="n_age">Nominee_AGE:</label>
             <input type="text" class="form-control" name="n_age" placeholder="Enter Nominee_AGE:">  
                 </div>
             </div>
             <div class="col-sm-9">
                 <div class="form-group">
                     <label for="relation">Relation:</label>
             <input type="text" class="form-control" name="relation" placeholder="Describe Relation:">
                 </div>
             </div>
         </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
 
 
<!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>


