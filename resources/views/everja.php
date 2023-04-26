<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <style>
        body{
            background-color: #afbfff;

        }
        
        h1{
            margin-top: 5rem;
            font-size: 120px;
        }
        </style>
    <title>Document</title>
</head>
<body>
<center style="background-color:#91a7ff; display: grid; justify-content: center; margin-top: 5rem; margin-left: 10%;margin-right: 10%; border-radius: 25px;"><h1>Event</h1>
<table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th width="280px">Name</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <th>1</th>
                <th width="280px">เดินป่ามหาประลัย</th>
                <th width="280px"><a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> join </a></th>
            </tr>
            <tr>
            <th>2</th>
                <th width="280px">Name</th>
                <th width="280px"><button></button></th>
            </tr>
        </tbody>
    </table>
    </center>
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal">
                   <input type="hidden" name="product_id" id="product_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
       
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-12">
                            <textarea id="status" name="status" required="" placeholder="Enter status" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bdate" class="col-sm-2 control-label">bdate</label>
                        <div class="col-sm-12">
                            <input type="datetime" name="bdate" id="bdate" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="job" class="col-sm-2 control-label">job</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="job" name="job" placeholder="Enter job" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sex" class="col-sm-2 control-label">sex</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="sex" name="sex" placeholder="Enter sex" value="" maxlength="50" required="">
                        </div>
                    </div>
        
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
  $(function () {
    
        
      /*------------------------------------------
      --------------------------------------------
      Click to Button
      --------------------------------------------
      --------------------------------------------*/
      $('#createNewProduct').click(function () {
          $('#saveBtn').val("create-product");
          $('#product_id').val('');
          $('#productForm').trigger("reset");
          $('#modelHeading').html("Create");
          $('#ajaxModel').modal('show');
      });
        
      /*------------------------------------------
      --------------------------------------------
      Create Product Code
      --------------------------------------------
      --------------------------------------------*/
      $('#saveBtn').click(function (e) {
          e.preventDefault();
          $(this).html('Sending..');
        
          $.ajax({
            data: $('#productForm').serialize(),
            url: "products-ajax-crud",
            type: "POST",
            dataType: 'json',
            success: function (data) {
         
                $('#productForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();
             
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
            }
        });
      });
         
         
    });
</script>
</html>