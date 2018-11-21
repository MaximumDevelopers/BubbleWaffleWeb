@extends('layouts.app')
@section('content')




<div id="cf" class="container-fluid">

    <div class="col-lg-11">
            <div id="c2" class="card shadow-md mb-6">
                <div class="card-block">
                    <div class="row">
                    <h5 id="ct1" class="card-title">Registered Account</h5>

                    <button id="btnLogin" type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#centralModalLGInfoDemo">Large </button>
                         
                          <!-- Central Modal Large Info-->
                          <div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog"
                          aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
                              <!--Content-->
                              <div class="modal-content">
                                  <!--Header-->
                                  <div class="modal-header">
                                      <p class="heading lead">Modal Info</p>

                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true" class="white-text">&times;</span>
                                      </button>
                                  </div>

                                  <!--Body-->
                                  <div class="modal-body">
                                      <div class="text-center">
                                          <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit
                                              iusto nulla
                                              aperiam blanditiis ad consequatur in dolores culpa, dignissimos,
                                              eius
                                              non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.
                                          </p>
                                      </div>
                                      <img src="https://mdbootstrap.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg"
                                          alt="Material Design for Bootstrap - dashboard" class="img-fluid">

                                  </div>

                                  <!--Footer-->
                                  <div class="modal-footer">
                                      <a role="button" class="btn btn-info">Get it now
                                          <i class="fa fa-diamond ml-1"></i>
                                      </a>
                                      <a role="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No,
                                          thanks</a>
                                  </div>
                              </div>
                              <!--/.Content-->
                          </div>
                      </div>
                      <!-- Central Modal Large Info-->
    
    
                      </div>
                    
                </div>
    
    
                   <div class="table-reponsive">
                    <table class="table" >
                            <thead>
                              <tr>
                                   
                               
                                <th scope="col">Firstname</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                
                              </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                     
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                      <td>@mdo</td>
                                    </tr>
                                    <tr>
                                     
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                      <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                      <td>@mdo</td>
                                    </tr>
                                  </tbody>
    
                            </table>
                   </div>
                    </div>
              
                   
        
                </div>
        
            </div>
        
        
     







@endsection