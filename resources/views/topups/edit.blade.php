@extends('layouts.app')

@section('content')
<div class="container">
      <form method="post" action="{{action('TopupController@update', $id)}}">
        @csrf
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Approval</lable>
                <select name="approve">
                  <option value="0" @if($topups->status==0)selected @endif>Pending</option>
                  <option value="1" @if($topups->status==1)selected @endif>Approve</option>
                  <option value="2" @if($topups->status==2)selected @endif>Reject</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-top:40px">Update</button>
          </div>
        </div>
      </form>
    </div>
@endsection