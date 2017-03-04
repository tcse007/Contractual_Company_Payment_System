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
                                <th>Role Name</th> 
                                <th>Active</th> 

                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>       
                            @foreach($users as $user)
                            @if($user->role_name!='Admin' && $user->aproved == 0)                          
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phonenumber}}</td>
                                <td>{{$user->role_name}}</td>
                                @if($user->aproved==1)
                                <td>Aproved</td>
                                @else
                                <td>Not Aproved</td>
                                @endif
                                <td style="text-align:center">  

                                    <a  href="<?=URL::to('admin/home/user_edit',array($user->id))?>"  class="btn btn-primary"><span class="glyphicon glyphicon-edit">Approve</a>

                                    <a  onclick="return check()" href="<?=URL::to('admin/home/user_delete',array($user->id))?>" class="btn btn-danger">

                                        <span class="glyphicon glyphicon-trash"></span>Detete</a>
                                    </td>

                                </tr>
                                @endif
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
