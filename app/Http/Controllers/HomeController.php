<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use App\Models\Notification;
use App\Models\Report;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile.index');
    }

    public function profileOther($id)
    {
        $user = User::find($id);
        $count = DB::table('reviews')
                    ->where('user_id', '=',  $id)
                    ->count();
        $reviews = DB::table('reviews')
                    ->where('user_id', '=',  $id)
                    ->get();
        return view('profile.user', compact('user', 'reviews', 'count'));
    }

    public function profileEdit($id)
    {
        $user = User::find($id);
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        if($request->file('photo') != null){
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $today = date('YmdHis');
            $filenameToStore = $today.'_'.$filename.'.'.$extension;
            $request->file('photo')->move('uploads/photos/',$filenameToStore);
        }
        

        $user = User::find($request->input('user'));
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->major = $request->input('major');
        $user->phone = $request->input('phone');
        $user->student_id = $request->input('studentID');
        $user->description = $request->input('description');
        if($request->file('photo') != null){$user->img = $filenameToStore;}
        $user->save();

        return redirect("/profile")->with('success','User update');
    }

    public function updateCoin($coin)
    {
        $money = DB::table('banks')->orderBy('id', 'desc')->first();

        $bank = new Bank;
        $bank->statement = 'เติมเงิน';
        $bank->status = 'ยังไม่ไดด้รับการยืนยัน';
        $bank->user_id = \Auth::user()->id;
        $bank->money = $coin;
        $bank->total = $money->total+$coin;
        $bank->save();

        $noti = new Notification;
        $noti->title = 'รอการยืนยันการเติมเงิน';
        $noti->message = 'ระบบได้ทำการยืนยันดำเนินการ กรุณารอสักครู่';
        $noti->by = 'Admin';
        $noti->user_id = \Auth::user()->id;
        $noti->show = 'show';
        $noti->save();

        return back();
    }

    public function withdraw($coin)
    {
        $money = DB::table('banks')->orderBy('id', 'desc')->first();

        $bank = new Bank;
        $bank->statement = 'ถอนเงิน';
        $bank->status = 'ยังไม่ไดด้รับการยืนยัน';
        $bank->user_id = \Auth::user()->id;
        $bank->money = $coin;
        $bank->total = $money->total;
        $bank->save();

        $noti = new Notification;
        $noti->title = 'รอการยืนยันการถอนเงิน';
        $noti->message = 'ระบบได้ทำการยืนยันดำเนินการ กรุณารอสักครู่';
        $noti->by = 'Admin';
        $noti->user_id = \Auth::user()->id;
        $noti->show = 'show';
        $noti->save();

        return back();
    }

    public function report()
    {
        return view('profile.report');
    }
    
    public function createReport(Request $request)
    {
        $report = new Report;
        $report->topic = $request->input('topic');
        $report->message = $request->input('message');
        $report->user_id = \Auth::user()->id;
        $report->save();

        $noti = new Notification;
        $noti->title = 'การแจ้งปัญหาเรียบร้อย';
        $noti->message = 'ระบบได้ทราบถึงปัญหาที่แจ้งเข้ามาแล้ว กรุณารอการดำเนินการแก้ไข';
        $noti->by = 'Admin';
        $noti->user_id = \Auth::user()->id;
        $noti->show = 'show';
        $noti->save();

        return view('profile');
    }

    public function review($id)
    {
        $user = User::find($id);
        return view('profile.review',compact('user'));
    }

    public function reviewStore(Request $request)
    {
        $report = new Review;
        $report->review = $request->input('message');
        $report->user_id = $request->input('user_id');
        $report->user_review = \Auth::user()->id;
        $report->save();

        return redirect("/profile/{$request->input('user_id')}")->with('alert','Order created');
    }

    public function fav($id)
    {
        $user = User::find($id);
        $user->fav = $user->fav+1;
        $user->save();

        return back();
    }

    public function dislike($id)
    {
        $user = User::find($id);
        $user->dislike = $user->dislike+1;
        $user->save();

        return back();
    }
}
