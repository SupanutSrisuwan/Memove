@extends('layouts.login')

@section('content')
    <div class=" mt-4">
        <div class="text-center pl-3 pr-3 d-flex justify-content-between">
            <a href="/?order=1">
            <button class="btn btn-link m-0 p-0"><i class="fas fa-arrow-left" style="font-size: 30px; color: black;"></i></button></a>
            <h3>
                Review
            </h3>
            <div></div>
        </div>
        <form method="POST" action="/review" style="margin-bottom:100px;" id="report-store" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="row mt-5 pl-3 pr-3">
            <div class="col-12">
                <label for="body" class="control-label"><i class="fas fa-file-signature"></i> ข้อความ</label>
                <textarea class="form-control" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.15);border-radius: 10px;" placeholder="ข้อความ" name="message" cols="50" rows="5" id="message"></textarea>
            </div>
            <input type="hidden" id="user_id" name="user_id" value="{{$user->id}}">
        </div>
    </div>
    
    <div class="mt-5 pt-5 fixed-bottom" style="bottom:3%;">
        <div class="row pl-3 pr-3 mt-5 pt-5">
            <div class="col-12 mt-5">
                <input type="submit" class="btn btn-block p-3" style="font-size:20px;background: #2DB589;color:#fff;box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.25);border-radius: 10px;" value="ยืนยัน">
           
            </div>
        </div>
    </div>
    </form>
@endsection