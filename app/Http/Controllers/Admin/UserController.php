<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Admin/User/index', [
            'users' => User::orderBy('id', 'DESC')->paginate(5),

        ]);
    }

    public function adduser()
    {
        return view('Admin/User/adduser');
    }
    public function postadduser(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password',
            'phone' => 'required|max:10',

        ], [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có 2 ký tự trở lên',
            'email.required' => 'Bạn chưa nhập Email',
            'email.email' => 'Định dạng Email chưa chính xác',
            'email.unique' => 'Email đã tồn tại',
            'password.min' => 'Password phải có 6 ký tự trở lên',
            'password.required' => 'Bạn chưa nhập password',
            'confirmpassword.required' => 'Bạn chưa nhập lại password',
            'confirmpassword.same' => 'Mật khẩu nhập lại chưa chính xác',
        ]);

        $req->merge(['password' => bcrypt($req->password)]);

        if (User::create($req->all())) {
            return redirect()->route('admin.user')->with('sucsess', 'Thêm tài khoản' . $req->name . 'thành công');
        } else {
            return redirect()->back()->with('error', 'Thêm tài khoản không thành công');
        }
    }

    public function deluser($id)
    {
        $user = User::find($id);

        if (User::where('id', $id)->delete()) {
            return redirect()->route('index.user')->with('sucsess', 'Thêm tài khoản' . $user->name . 'thành công');
        } else {
            return redirect()->back()->with('error', 'xóa danh mục' . $user->name . 'thất bại');
        }
    }
    public function edituser($id)
    {
      $user =  User::find($id);
      return view('admin.User.edituser',[
        'users' => $user
      ]);
    }

    public function postedituser($id, Request $req)
    {
        $user = User::find($id);

        if ($req->isMethod('Post')) {
            $req->offsetUnset('_token');
            if (User::where('id', $id)->update($req->all())) {
                return redirect('admin')->with('success', 'Sửa danh mục' . $req->name . 'thành công');
            } else {
                return redirect('admin')->with('success', 'Sửa danh mục' . $req->name . 'thất bại');
            }
        }
        return view('admin.User.edituser', ['users' => $user]);
    }
}
