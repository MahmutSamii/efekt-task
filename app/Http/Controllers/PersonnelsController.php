<?php

namespace App\Http\Controllers;

use App\Models\Personnels;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PersonnelsController extends Controller
{
    public function index()
    {
        $user = User::find(1)->userProfile;
        $personnels = Personnels::get();
        return view('personnels.index')->with(['user' => $user, 'personnels' => $personnels]);
    }

    public function create()
    {
        $user = User::find(1)->userProfile;
        return view('personnels.create')->with('user', $user);;
    }

    public function store(Request $request): RedirectResponse
    {
        $personnel = new Personnels;
        $personnel->save([
        'name' => $request->get('name'),
        'surname' => $request->get('surname'),
        'phone_number' => $request->get('phone_number'),
        'address' => $request->get('address'),
        'created_at' => now()]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::find(1)->userProfile;
        $personnel = Personnels::findOrFail($id);
        return view('personnels.edit')->with(['user' => $user, 'personnel' => $personnel]);;
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $personnel = Personnels::findOrFail($id);
        $personnel->update([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'phone_number' => $request->get('phone_number'),
            'address' => $request->get('address'),
            'updated_at' => now()]);
        return redirect()->back();
    }

    public function destroy($id): RedirectResponse
    {
        $personnel = Personnels::findOrFail($id);
        $personnel->delete();
        return redirect()->back();
    }
}
