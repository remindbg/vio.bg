@extends('layouts.adminlayout')


@section('content')

        <table class="table table-dark table-bordered mb-0">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>email</th>
                <th>name</th>
                <th>date registered</th>
                <th>Role</th>
                <th>Active?</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{date('Y-m-d h:i:s', strtotime($user->created_at))}}</td>
                    <td>
                        @if($user->admin == 1)
                            <span class="badge badge-danger">admin</span>
                         @else
                            <span class="badge badge-primary">Regular</span>

                        @endif
                    </td>
                    <td>
                        @if($user->active == 1)
                            <span class="badge badge-soft-info">Yes</span>
                        @else
                            <span class="badge badge-soft-primary">No</span>

                        @endif
                    </td>
                    <td>
                        <a href="{{route('users.edit',$user->id)}}"><span class="badge badge-primary">Edit</span> </a>
                        <a href=""><span class="badge badge-danger">Delete</span> </a>

                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>


@stop