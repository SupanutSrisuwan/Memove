@extends('layouts.app')

@section('content')
<div id="part-one">
    <div class="container p-3">
        <div class="text-center d-flex justify-content-between">
            <a href="/profile/edit/{{ \Auth::user()->id  }}" >
                <img src="https://image.flaticon.com/icons/png/512/126/126472.png" width="30" alt="setting">
            </a>
            <h3>Profile</h3>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt" style="font-size:25px;"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                @if(\Auth::user()->img == null)
                    <img style="width: 100%" class="rounded-circle float-left" src="https://th.jobsdb.com/en-th/cms/employer/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png">
                @else
                    <img style="width: 100%" class="rounded-circle float-left" src="{{ url('') }}/uploads/photos/{{\Auth::user()->img}}">
                @endif
            </div>
            <div class="col-8">
                <h2>{{ \Auth::user()->username  }}</h2>
                <small class="text-black" style="font-weight: 300">USER ID#{{ \Auth::user()->id  }}</small>
            </div>
        </div>
        
    </div>
    <div class="mb-3 mt-3 p-3" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);">
        <img width="30" class="mb-4" src="{{ url('') }}/img/coin.png">
        <span class="ml-3" style="font-size:50px;">{{ \Auth::user()->coin  }}</span>
        <button onclick="nextOne()" style="border-radius: 10px;" type="button" class="btn btn-outline-danger float-right p-4">ถอน cash</button>
    </div>
    <div class="container mb-5 ">
        <p class="text-center" style="font-weight: 200;font-size:20px;">
            คุณสามารถเติมเหรียญ
            <br>
            เพืื่อใช้งานในระบบได้อย่างง่ายดาย
        </p>
        <div class="row p-4" style="color: #0669B1;font-weight: 200;">
            <div class="col-6 text-center mb-4">
                    <div class="card-body pt-2 p-0 pb-3 card-list ">
                        <p onclick="pay(9)" style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            9
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">9 บาท</p>
                    </div>
                
            </div>
            
            <div class="col-6 text-center mb-4">
                    <div onclick="pay(35)" class="card-body pt-2 p-0 pb-3 card-list ">
                        <p style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            35
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">35 บาท</p>
                    </div>
                
            </div>
            <div class="col-6 text-center mb-4">
                    <div onclick="pay(99)" class="card-body pt-2 p-0 pb-3 card-list ">
                        <p style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            99
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">99 บาท</p>
                    </div>
                
            </div>
            <div class="col-6 text-center mb-4">
                    <div onclick="pay(199)" class="card-body pt-2 p-0 pb-3 card-list ">
                        <p style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            199
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">199 บาท</p>
                    </div>
                
            </div>
            <div class="col-6 text-center mb-4">
                    <div onclick="pay(350)" class="card-body pt-2 p-0 pb-3 card-list ">
                        <p style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            350
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">350 บาท</p>
                    </div>
                
            </div>
            <div class="col-6 text-center mb-4">
                    <div onclick="pay(550)" class="card-body pt-2 p-0 pb-3 card-list ">
                        <p style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            550
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">550 บาท</p>
                    </div>
                
            </div>
            <div class="col-6 text-center mb-4">
                
                    <div onclick="pay(830)" class="card-body pt-2 p-0 pb-3 card-list ">
                        <p style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            830
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">830 บาท</p>
                    </div>
            </div>
            <div class="col-6 text-center mb-4">
                
                    <div onclick="pay(999)" class="card-body pt-2 p-0 pb-3 card-list ">
                        <p style="color: #0669B1;font-weight: 500;font-size:40px;" class="mt-3">
                            999
                            <img width="35" class="mb-2" src="{{ url('') }}/img/coin.png">
                        </p>
                        <hr>
                        <p class="card-text">999 บาท</p>
                    </div>
            </div>
        </div>
    </div>
</div>
<div id="part-two">
<div class="container p-3">
    <div class="text-center d-flex justify-content-between">
            <button onclick="backOne()" class="position-relative btn btn-link m-0 p-0 ml-2">
                <i class="fas fa-arrow-left" style="font-size: 30px; color: black;"></i>
            </button>
            <h3>Wallet</h3>
            <div></div>
        </div>
        <div class="row mt-5">
            <h5 class="col-7" style="font-weight: 300;">ยอดเงินคงเหลือ</h5>
            <br>
            <div class="text-right col-5">
                <img width="30" class="mb-4" src="{{ url('') }}/img/coin.png">
                <span class="ml-3" style="font-size:50px;">{{ \Auth::user()->coin  }}</span>
            </div>
        </div>
        
    </div>
    <div class="mb-3 mt-3 p-3" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);">
        <div class="row">
            <div class="col-10"><input type="text" class="form-control p-3" id="withdraw" name="withdraw" placeholder="กรอกจำนวนเงิน" style="border:none;"></div>
            <div class="col-2 pt-3"><img width="30" class="mb-4" src="{{ url('') }}/img/coin.png"></div>
        </div>
    </div>
    <div class="container mb-5 ">
        <p class="text-center mb-5" style="font-weight: 200;font-size:20px;margin-bottom:60px;!important">
            ค่าธรรมเนียมการทำธุรกรรมผ่านระบบ 25 บาท/ครั้ง
            <br><br><br><br>
            *หมายเหตุ ท่านสามารถถอนเงินออกจาก
            ระบบโดยไม่เสียค่าธรรมเนียมได้ 3 ครั้งภายใน 30 วัน
        </p>
        <button onclick="withdraw()" class="btn btn-memove btn-block mt-5 p-2" style="font-size: 24px;">ถอนเงิน</button>
    </div>
</div>
</div>
@endsection

<script>
    function nextOne() {
        document.getElementById('part-one').style.display = 'none';
        document.getElementById('part-two').style.display = 'block';
    }
        
    function backOne() {
        document.getElementById('part-one').style.display = 'block';
        document.getElementById('part-two').style.display = 'none';
    }

function pay(coin) {
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success ml-2',
        cancelButton: 'btn border-radius-10'
    },
    buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
    title: 'ยืนยันการเติมเงิน',
    text: "ราคาที่ต้องการจ่าย " + coin + " บาท",
    icon: 'question',
    showCancelButton: true,
    confirmButtonText: 'ยืนยัน',
    cancelButtonText: 'ยกเลิก',
    reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = '/profile/coin/' + coin
            swalWithBootstrapButtons.fire(
            'สำเร็จ',
            'เติมเงินเรียบร้อย',
            'success'
            )
        }
    })
}

function withdraw() {
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success ml-2',
        cancelButton: 'btn border-radius-10'
    },
    buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
    title: 'ยืนยันการถอนเงิน',
    text: "จำนวนเงินที่ต้องการถอน " + document.getElementById('withdraw').value + " บาท",
    icon: 'question',
    showCancelButton: true,
    confirmButtonText: 'ยืนยัน',
    cancelButtonText: 'ยกเลิก',
    reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = '/profile/'+document.getElementById('withdraw').value+'/withdraw'
        }
    })
}
</script>
