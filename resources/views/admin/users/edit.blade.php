@extends('layouts.adminlayout')

@section('content')
    <div class="col-xl-12">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">User Details</h5>
            <p class="mb-25"></p>
            <div class="row">
                <div class="col-sm">
                    <form action="{{route('users.update',$user->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="form-group col-lg-5">
                                <label for="username">Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input class="form-control" id="username" name="name" value="{{$user->name}}" type="text">
                                </div>
                            </div>
                            <div class="form-group col-lg-5">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" name="email" value="{{$user->email}}" type="email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-10">
                                <label for="country">isActive</label>
                                <select class="form-control custom-select d-block w-100" id="active" name="active">
                                    <option value="0"  @if($user->active == 0) selected @endif">No</option>
                                    <option value="1"  @if($user->active == 1) selected @endif>Yes</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="state">isAdmin</label>
                                <select class="form-control custom-select d-block w-100" id="admin" name="admin">
                                    <option value="0" @if($user->admin == 0) selected @endif">No</option>
                                    <option value="1"  @if($user->admin == 1) selected @endif>Yes</option>
                                </select>
                            </div>

                        </div>
                        <hr>
                        <div class="form-group col-lg-10">
                            <p>About user</p>
                            <textarea name="about" id="" cols="60" rows="5">{{$user->about}}</textarea>

                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label for="avatar">Avatar</label>
                                <input class="form-control" id="avatar" value="{{$user->avatar}}" type="text">
                            </div>

                        </div>

                        <hr>
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>



@stop