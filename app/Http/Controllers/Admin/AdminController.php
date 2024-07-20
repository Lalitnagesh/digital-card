<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dotenv\Validator;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        Session::put('page', 'dashboard');
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:50'
            ];

            $customMessages = [
                'email.required' => 'Email is required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required'
            ];

            $this->validate($request, $rules, $customMessages);

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid Email or Password');
            }
        }
        return view('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return view('admin.login');
    }

    public function changePassword()
    {
        return view('admin.update-password');
    }

    public function checkCurrentPassword(Request $request)
    {
        if (Hash::check($request->current_password, Auth::guard('admin')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::guard('admin')->user();

        if (Hash::check($request->current_password, $user->password)) {
            $data = $request->all();

            if ($data['new_password'] == $data['confirm_password']) {
                $user->password = Hash::make($data['new_password']);
                $user->save();

                return response()->json(['success' => 'Password updated successfully.']);
            } else {
                return response()->json(['error' => 'New password and confirm password do not match.']);
            }
        } else {
            return response()->json(['error' => 'Current password is incorrect.']);
        }
    }

    public function updatedetails(Request $request)
    {

        if ($request->isMethod('post')) {
            $user = Auth::guard('admin')->user();

            $user->name = $request->admin_name;
            $user->email = $request->admin_email;
            $user->mobile = $request->admin_number;
            $user->save();

            // Image Upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images', $fileName, 'admin_images'); // Use 'admin_images' disk
                $user->image = $path;
                $user->save();
            }
        }
        return view('admin.details');
    }
}
