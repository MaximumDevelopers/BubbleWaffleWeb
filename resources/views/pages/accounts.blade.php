@extends('layouts.app')
@section('content')




<div id="cf" class="container-fluid">

    <div class="col-lg-11">
            <div id="c2" class="card shadow-md mb-6">
                <div class="card-body">
                        <div class="row">
                                <h2 id="ct1" class="card-title">Manage User Account</h2>
                                
                                <button type="button" class="btn btn-primary btn-sm ml-auto btnLogin" data-toggle="modal"
                                                        data-target="#centralModalLGInfoDemo">Add Account
                                </button>
                                
                                
                        </div>
                    
                    <div class="table-reponsive text-nowrap">
                            
                            
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                             
                                          <th scope="col">Firstname</th>
                                          <th scope="col">Lastname</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Type</th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                              <tr>
                                               
                                                <td >Danielle</td>
                                                <td>Bote</td>
                                                <td>Daniellebote@gmail.com</td>
                                                <td>Admin</td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-user-edit btn btn-yellow  btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-trash btn btn-red btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                              </tr>
                                              <tr>
                                              
                                                <td>Jacob</td>
                                                <td>Joel</td>
                                                <td>Joel@gmail.com</td>
                                                <td>Cashier</td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-user-edit btn btn-yellow  btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-trash btn btn-red btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                              </tr>
                                              <tr>
                                              
                                                <td>Odivilas</td>
                                                <td>Ron</td>
                                                <td>RonHenLin@gmail.com</td>
                                                <td>Cook</td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-user-edit btn btn-yellow btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-trash btn btn-red btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                              </tr>
    
                                              <tr>
                                                <td>Canillas</td>
                                                <td>keno</td>
                                                <td>Keno@gmail.com</td>
                                                <td>Janitor</td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-user-edit btn btn-yellow  btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="fa fa-trash btn btn-red btn-sm" style="font-size: 1rem;"></button>
                                                </td>
                                              </tr>
                                            </tbody>
                                    
                                  </table>
        
        
                           </div>
                     
                </div>
    
    
                   
                    </div>
              
                   
        
                </div>
        
    </div>
        
        
     







@endsection