
@extends('partials.navbar')

@section('container')

<div class="container mt-3">
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
</div>

<div class="container mt-3">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-7 mb-4">
            <div class="card">
                <div class="card-body">
                <h4 class="d-flex align-items-center mb-3" style="margin: 10px 10px 10px 10px"><i class="material-icons text-info mr-2">Product</i>Result</h4><hr>
                <div class="row">
                  <div class="col-md-12">
                  <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                             <thead>
                               <th>No</th>
                               <th>Product Name</th>
                               <th>Company</th>
                               <th>Date Launch</th>
                               <th>Edit</th>
                               <th>Delete</th>
                             </thead>

                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Website Administrasi</td>
                                  <td>Universitas X</td>
                                  <td>August 05, 2021</td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><i class="bi bi-pencil"></i></button></p></td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"><i class="bi bi-trash3"></i></span></button></p></td>
                                </tr>

                                <tr>
                                  <td>2</td>
                                  <td>SMS Broadcasting</td>
                                  <td>Indosat Ooredoo Hutchison</td>
                                  <td>August 11, 2021</td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><i class="bi bi-pencil"></i></button></p></td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                                </tr>

                                <tr>
                                  <td>3</td>
                                  <td>Customer Service System</td>
                                  <td>Mitra Sejahtera Company</td>
                                  <td>August 17, 2021</td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><i class="bi bi-pencil"></i></button></p></td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                                </tr>

                                <tr>
                                  <td>4</td>
                                  <td>Information System</td>
                                  <td>Universitas B</td>
                                  <td>August 19, 2021</td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><i class="bi bi-pencil"></i></button></p></td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                                </tr>

                                <tr>
                                  <td>5</td>
                                  <td>Application System</td>
                                  <td>Gobiz</td>
                                  <td>August 24, 2021</td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><i class="bi bi-pencil"></i></button></p></td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                                </tr>

                                <tr>
                                  <td>6</td>
                                  <td>SMS Broadcasting</td>
                                  <td>Bank Mega</td>
                                  <td>August 29, 2021</td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><i class="bi bi-pencil"></i></button></p></td>
                                  <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                                </tr>
                              </tbody>
                        </table>

                    <div class="btn-toolbar-end d-grid gap-2 d-md-flex justify-content-md-end" role="toolbar" aria-label="Toolbar with button groups" style="margin-top: 30px">
                      <div class="btn-group me-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-primary"><a><i class="bi bi-chevron-left"></i></a></button>
                        <button type="button" class="btn btn-outline-primary">1</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">3</button>
                        <button type="button" class="btn btn-outline-primary">4</button>
                        <button type="button" class="btn btn-outline-primary"><a><i class="bi bi-chevron-right"></i></a></button>
                      </div>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          
          
          <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>
                    <div class="modal-body">
                    <div class="form-group">
                  <input class="form-control " type="text" placeholder="Product Name">
                  </div>
                  <div class="form-group">
                  
                  <input class="form-control " type="text" placeholder="Company Name">
                  </div>
                  <div class="form-group">
                    <input type="date" class="form-control" max="3000-12-31" min="1000-01-01" id="ddate" name="duedate" placeholder="mm/dd/yyyy">
                  </div>
                </div>
                    <div class="modal-footer ">
                  <button type="button" class="btn btn-primary btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
              </div>
              <!-- /.modal-content --> 
            </div>
                <!-- /.modal-dialog --> 
              </div>
              
              <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                    <div class="modal-body">
                 
                 <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                 
                </div>
                  <div class="modal-footer ">
                  <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
                  </div>
              <!-- /.modal-content --> 
            </div>
        </div>
      </div>
    </div>




        <div class="col">
        <div class="card mb-4 ">
            <div class="card-body">
                <h4 class="d-flex align-items-center mb-3" style="margin: 10px 10px 10px 10px"><i class="material-icons text-info mr-2">Product</i>Categories</h4><hr>
                <table class="table table-striped" style="margin-top: 50px">
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Website Development</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>SMS Broadcasting</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Information System</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Mobile Advertising</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Artificial Intelligence</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Application System</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>Mobile Application</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>Email Marketing</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><i class="bi bi-trash3"></i></button></p></td>
                      </tr>
                    </tbody>
                  </table>
                  
        </div>
        <div class="container">
          <p data-placement="top" data-toggle="tooltip" title="New"><button class="btn btn-primary btn-xs" data-title="New" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-pencil"></span>Add a new category</button></p>
        </div>
        <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">New Category</h4>
          </div>
              <div class="modal-body">
              <div class="form-group">
            <input class="form-control " type="text" placeholder="Product Category">
            </div>
          </div>
              <div class="modal-footer ">
            <button type="button" class="btn btn-primary btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Add</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>




    <script src="js/script.js"></script>
    <script>
      $(document).ready(function(){
        $("#mytable #checkall").click(function () {
                if ($("#mytable #checkall").is(':checked')) {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", true);
                    });

                } else {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", false);
                    });
                }
            });
            
            $("[data-toggle=tooltip]").tooltip();
        });
    </script>

    <script type="text/javascript">
      $('.datepicker').datepicker();
    </script>


@endsection   
