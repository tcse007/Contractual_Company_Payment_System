@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            <h1> User Request</h1><hr>
            <div class="panel panel-default" >

                <div class="panel-heading">User Listing</div>
                <div class="panel-body">                     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>   
                                <th>Phone Number</th> 
                                <th>Payment</th> 
                                <th>Starting Date</th> 
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>       
                        
                                @if($users->active == 0)                          
                                    <tr>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->phonenumber}}</td>
                                        <td>{{$users->contract_detail->payment_for_staff_monthly}}</td>
                                        <td>{{$users->contract_detail->start_date}}</td>
                                        
                                        <td style="text-align:center">  
                                            
                                            <a  href="<?=URL::to('admin/home/user_update',array($users->id))?>"  class="btn btn-primary"><span class="glyphicon glyphicon-edit">Approve</a>
                
                                            <a  onclick="return check()" href="<?=URL::to('admin/home/deleteunregistereduser',array($users->id))?>" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-trash"></span>Detete</a>


                                            </td>
                                            
                                        </tr>
                                    @endif
                           
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
