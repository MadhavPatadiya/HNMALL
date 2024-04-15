<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BachatFromRequest2;
use App\Http\Requests\BachatFromRequest;
use App\Models\Bachat;
use App\Models\TotalInterest;
use App\Models\TotalJoiningFee;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BachatController extends Controller
{
    public function index()
    {
        $prefix = '000';
        $auto_number = $this->generateRandomNumber($prefix);
        $lastBachat = Bachat::
            orderBy('id', 'asc')
            ->get();
        return view('admin.bachat.index', compact('lastBachat'));

    }
    public function create()
    {
        $bachat = Bachat::where('status', '=', 'active')->get();
        $user = User::all();
        return view('admin.bachat.create', compact('bachat', 'user'));
    }

    public function store(BachatFromRequest $request)
    {
        $validatedData = $request->validated();

        $lastBachat = Bachat::
            orderBy('id', 'asc')
            ->get();

        $bachat = new Bachat;
        $bachat->member_no = '000' . $lastBachat->last()->member_no + 1;

        $bachat->member_date = $validatedData['member_date'];

        // member_image
        if ($request->hasFile('member_image')) {
            $file = $request->file('member_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/member_image/', $filename);
            $bachat->member_image = $filename;
        }

        // heir_image_1
        if ($request->hasFile('heir_image_1')) {
            $file = $request->file('heir_image_1');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_image_1/', $filename);
            $bachat->heir_image_1 = $filename;
        }
        // heir_image_2
        if ($request->hasFile('heir_image_2')) {
            $file = $request->file('heir_image_2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_image_2/', $filename);
            $bachat->heir_image_2 = $filename;
        }

        $bachat->mr = $validatedData['mr'];

        $bachat->age = $validatedData['age'];

        $bachat->village = $validatedData['village'];

        $bachat->address = $validatedData['address'];

        $bachat->taluk = $validatedData['taluk'];
        $bachat->member_business = $validatedData['member_business'];

        $bachat->mobile_no_1 = $validatedData['mobile_no_1'];
        $bachat->mobile_no_2 = $validatedData['mobile_no_2'];

        $bachat->city = $validatedData['city'];

        $bachat->heir_name_1 = $validatedData['heir_name_1'];
        $bachat->age_1 = $validatedData['age_1'];
        $bachat->relationship_with_member_1 = $validatedData['relationship_with_member_1'];

        $bachat->heir_name_2 = $validatedData['heir_name_2'];
        $bachat->age_2 = $validatedData['age_2'];
        $bachat->relationship_with_member_2 = $validatedData['relationship_with_member_2'];
        $bachat->percentage = $validatedData['percentage'];
        // status
        // $bachat->percentage_1_25 = $request->percentage_1_25 == true ? '1':'0';
        // $bachat->percentage_1 = $request->percentage_1 == true ? '1':'0';

        // radioButton
        // $bachat->percentage_1_25 = $request->input('percentage') == '1' ? '1' : '0';
        // $bachat->percentage_1 = $request->input('percentage') == '1' ? '1' : '0';

        // member_sign_image
        if ($request->hasFile('member_sign_image')) {
            $file = $request->file('member_sign_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/member_sign_image/', $filename);
            $bachat->member_sign_image = $filename;
        }

        // heir_sign_image_1
        if ($request->hasFile('heir_sign_image_1')) {
            $file = $request->file('heir_sign_image_1');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_sign_image_1/', $filename);
            $bachat->heir_sign_image_1 = $filename;
        }

        // heir_sign_image_2
        if ($request->hasFile('heir_sign_image_2')) {
            $file = $request->file('heir_sign_image_2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_sign_image_2/', $filename);
            $bachat->heir_sign_image_2 = $filename;
        }

        // sign_on_behalf_of_jan_jagaruti_image
        if ($request->hasFile('sign_on_behalf_of_jan_jagaruti_image')) {
            $file = $request->file('sign_on_behalf_of_jan_jagaruti_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/sign_on_behalf_of_jan_jagaruti_image/', $filename);
            $bachat->sign_on_behalf_of_jan_jagaruti_image = $filename;
        }
        $bachat->login_id = Auth::id();
        $bachat->save();

        $wallet = new Wallet();
        $wallet->user_id = $bachat->id;
        $wallet->balance = 0;
        $wallet->save();

        $totalInterest = new TotalInterest();
        $totalInterest->user_id = $bachat->id; // Assuming the "id" field is the primary key of the Bachat table
        $totalInterest->total_interest = 0; // Initial total interest for the new user
        $totalInterest->save();

        $totalJoiningFee = TotalJoiningFee::first();
        if (!$totalJoiningFee) {
            $totalJoiningFee = new TotalJoiningFee();
        }
        $totalJoiningFee->total_joining_fee += 200;
        $totalJoiningFee->save();

        return redirect('admin/bachat/' . $bachat->id . '/view')->with('message', 'Bachat Added Successfully');
    }

    // public function generateRandomNumber($prefix = '000')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = Bachat::where('member_no', 'like', $prefix . '%')
    //                         ->orderBy('member_no', 'desc')
    //                         ->first();

    //     // If there are no entries yet with the desired format, start with 1
    //     if (!$lastBachat) {
    //         return $prefix . '01'; // Assuming you want the first number to be 01
    //     }

    //     // Extract the numeric part from the last member_no
    //     $lastNumber = intval(substr($lastBachat->member_no, strlen($prefix)));

    //     // Increment the last number by 1 and format it with leading zeros
    //     $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);

    //     return $prefix . $newNumber;
    // }

    public function generateRandomNumber($prefix = '000')
    {
        // Find the last saved entry with the desired format
        $lastBachat = Bachat::
            orderBy('member_no', 'desc')
            ->get();

        // If there are no entries yet with the desired format, start with 1
        // if (!$lastBachat) {
        //     return $prefix . '01'; // Assuming you want the first number to be 01
        // }

        // Extract the numeric part from the last member_no
        // $lastNumber = intval(substr($lastBachat->member_no, strlen($prefix)));

        // Increment the last number by 1 and format it with leading zeros
        // $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        $newNumber = $lastBachat->first()->member_no + 1;

        return $newNumber;
    }

    public function edit($bachat_id)
    {
        $bachat = Bachat::findorfail($bachat_id);

        return view('admin.bachat.edit', compact('bachat'));
    }

    public function update(BachatFromRequest2 $request, $bachat_id)
    {
        $validatedData = $request->validated();

        $bachat = Bachat::findorfail($bachat_id);

        $bachat->member_no = $validatedData['member_no'];

        $bachat->member_date = $validatedData['member_date'];

        // member_image
        if ($request->hasFile('member_image')) {

            $path = 'public/uploads/bachat/member_image/' . $bachat->member_image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('member_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/member_image/', $filename);
            $bachat->member_image = $filename;
        }

        // heir_image_1
        if ($request->hasFile('heir_image_1')) {

            $path = 'public/uploads/bachat/heir_image_1/' . $bachat->heir_image_1;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_image_1');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_image_1/', $filename);
            $bachat->heir_image_1 = $filename;
        }
        // heir_image_2
        if ($request->hasFile('heir_image_2')) {

            $path = 'public/uploads/bachat/heir_image_2/' . $bachat->heir_image_2;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_image_2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_image_2/', $filename);
            $bachat->heir_image_2 = $filename;
        }

        $bachat->mr = $validatedData['mr'];

        $bachat->age = $validatedData['age'];

        $bachat->village = $validatedData['village'];

        $bachat->address = $validatedData['address'];

        $bachat->taluk = $validatedData['taluk'];
        $bachat->member_business = $validatedData['member_business'];

        $bachat->mobile_no_1 = $validatedData['mobile_no_1'];
        $bachat->mobile_no_2 = $validatedData['mobile_no_2'];

        $bachat->city = $validatedData['city'];

        $bachat->heir_name_1 = $validatedData['heir_name_1'];
        $bachat->age_1 = $validatedData['age_1'];
        $bachat->relationship_with_member_1 = $validatedData['relationship_with_member_1'];

        $bachat->heir_name_2 = $validatedData['heir_name_2'];
        $bachat->age_2 = $validatedData['age_2'];
        $bachat->relationship_with_member_2 = $validatedData['relationship_with_member_2'];
        $bachat->percentage = $validatedData['percentage'];

        // status
        // $bachat->percentage_1_25 = $request->percentage_1_25 == true ? '1':'0';
        // $bachat->percentage_1 = $request->percentage_1 == true ? '1':'0';

        // member_sign_image
        if ($request->hasFile('member_sign_image')) {

            $path = 'public/uploads/bachat/member_sign_image/' . $bachat->member_sign_image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('member_sign_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/member_sign_image/', $filename);
            $bachat->member_sign_image = $filename;
        }

        // heir_sign_image_1
        if ($request->hasFile('heir_sign_image_1')) {

            $path = 'public/uploads/bachat/heir_sign_image_1/' . $bachat->heir_sign_image_1;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_sign_image_1');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_sign_image_1/', $filename);
            $bachat->heir_sign_image_1 = $filename;
        }

        // heir_sign_image_2
        if ($request->hasFile('heir_sign_image_2')) {

            $path = 'public/uploads/bachat/heir_sign_image_2/' . $bachat->heir_sign_image_2;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_sign_image_2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/heir_sign_image_2/', $filename);
            $bachat->heir_sign_image_2 = $filename;
        }

        // sign_on_behalf_of_jan_jagaruti_image
        if ($request->hasFile('sign_on_behalf_of_jan_jagaruti_image')) {

            $path = 'public/uploads/bachat/sign_on_behalf_of_jan_jagaruti_image/' . $bachat->sign_on_behalf_of_jan_jagaruti_image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('sign_on_behalf_of_jan_jagaruti_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/bachat/sign_on_behalf_of_jan_jagaruti_image/', $filename);
            $bachat->sign_on_behalf_of_jan_jagaruti_image = $filename;
        }
        $bachat->update();

        return redirect('admin/bachat/' . $bachat->id . '/view')->with('message', 'Bachat Updated Successfully');
    }
    public function view($id)
    {
        $bachat = bachat::findorfail($id);
        $user = User::all();

        return view('admin.bachat.view', compact('bachat', 'user'));
    }

    public function delete($id)
    {
        $bachat = Bachat::findOrFail($id);

        // member_image
        if ($bachat->member_image) {
            Storage::delete('public/uploads/bachat/member_image/' . $bachat->member_image);
        }

        // heir_image_1
        if ($bachat->heir_image_1) {
            Storage::delete('public/uploads/bachat/heir_image_1/' . $bachat->heir_image_1);
        }

        // heir_image_2
        if ($bachat->heir_image_2) {
            Storage::delete('public/uploads/bachat/heir_image_2/' . $bachat->heir_image_2);
        }

        //member_sign_image
        if ($bachat->member_sign_image) {
            Storage::delete('public/uploads/bachat/member_sign_image/' . $bachat->member_sign_image);
        }

        //heir_sign_image_1
        if ($bachat->heir_sign_image_1) {
            Storage::delete('public/uploads/bachat/heir_sign_image_1/' . $bachat->heir_sign_image_1);
        }

        //heir_sign_image_2
        if ($bachat->heir_sign_image_2) {
            Storage::delete('public/uploads/bachat/heir_sign_image_2/' . $bachat->heir_sign_image_2);
        }

        //sign_on_behalf_of_jan_jagaruti_image
        if ($bachat->sign_on_behalf_of_jan_jagaruti_image) {
            Storage::delete('public/uploads/bachat/sign_on_behalf_of_jan_jagaruti_image/' . $bachat->sign_on_behalf_of_jan_jagaruti_image);
        }

        $bachat->delete();
        return redirect('admin/bachat/create')->with('message', 'માસિક બચત ફોર્મ સફળતાપૂર્વક કાઢી નાખ્યું');

    }
}
