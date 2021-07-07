@extends('layouts.login')

@section('content')
    <div class=" mt-4">
        <div class="text-center pl-3 pr-3 d-flex justify-content-between">
            <a href="/?order=1">
            <button class="btn btn-link m-0 p-0"><i class="fas fa-arrow-left" style="font-size: 30px; color: black;"></i></button></a>
            <h3>
                แจ้งปัญหา
            </h3>
            <div></div>
        </div>
        <form method="POST" action="/report" style="margin-bottom:100px;" id="report-store" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="row mt-5 pl-3 pr-3">
            <div class="col-12 p-3">
                <select class="form-control p-2" id="topic" name="topic" style="height: 55px;border-radius: 10px;background: #FA3654;color:#fff;box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.25);">
                    <option value="เลือกหัวข้อ">เลือกหัวข้อ</option>
                    <option value="ไม่พบผู้ส่งสินค้า">ไม่พบผู้ส่งสินค้า</option>
                    <option value="เติมเงินไม่เข้า">เติมเงินไม่เข้า</option>
                    <option value="ถอนเงินออกจากระบบไม่สำเร็จ">ถอนเงินออกจากระบบไม่สำเร็จ</option>
                    <option value="ผู้ฝากซื้อซื้อสินค้าไม่ครบ">ผู้ฝากซื้อซื้อสินค้าไม่ครบ</option>
                    <option value="ไม่พบผู้รับสินค้า">ไม่พบผู้รับสินค้า</option>
                    <option value="ไม่ได้รับการคืนเงินจากระบบ">ไม่ได้รับการคืนเงินจากระบบ</option>
                </select>
            </div>
            <div class="col-12">
                <label for="body" class="control-label"><i class="fas fa-file-signature"></i> รายละเอียดของปัญหา</label>
                <textarea class="form-control" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.15);border-radius: 10px;" placeholder="ระบุรายละเอียด" name="message" cols="50" rows="5" id="message"></textarea>
            </div>
        </div>
    </div>
    
    <div class="mt-5 pt-5 fixed-bottom" style="bottom:3%;">
        <div class="row pl-3 pr-3 mt-5 pt-5">
            <div class="col-12 mt-5">
                <input type="submit" class="btn btn-block p-3" style="font-size:20px;background: #E93F3F;color:#fff;box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.25);border-radius: 10px;" value="ส่งเรื่อง">
           
            </div>
        </div>
    </div>
    </form>
@endsection

<script>
</script>