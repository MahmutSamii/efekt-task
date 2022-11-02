<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::find(1)->userProfile;
        return view('users.index',)->with('user', $user);
    }

    public function update(Request $request,$id)
    {
        $userProfile = UsersProfile::findOrFail($id);
        $userProfile->address = $request->address;
        $userProfile->phone_number = $request->phone_number;
        if ($request->photograph == ''){
            $userProfile->photograph = $userProfile->photograph;
        }
        if ($request->hasFile('photograph')){
            $photograph = public_path('assets/img/avatars/').$userProfile->photograph;
            if (File::exists($photograph)){
                File::delete($photograph);
            }
            $imageName = str_slug(Auth::user()->name) . '.' . $request->photograph->getClientOriginalExtension();
            $request->photograph->move(public_path('assets/img/avatars/'), $imageName);
            $userProfile->photograph = 'assets/img/avatars/' . $imageName;
        }
        $userProfile->updated_at = now();
        $userProfile->update();
        return redirect()->route('user');
    }
}
