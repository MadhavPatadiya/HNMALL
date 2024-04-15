<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dikari;
use App\Models\kariyavar;
use App\Models\TotalJoiningFee;
use App\Models\Deactivate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
 use App\Http\Requests\DikariFromRequest;
 use App\Http\Requests\DikariFromRequest2;
 use App\Http\Requests\KariyavarFormRequest;
 use App\Http\Requests\DeactivateFormRequest;
 use Illuminate\Support\Facades\Auth;
 use App\Models\User;


class DikariController extends Controller
{
    public function index()
    {
        // $prefix = '000';
        // $auto_number = $this->generateRandomNumber($prefix);


        $lastDikari = Dikari::
        orderBy('id', 'asc')
        ->get();
        $lastDikariReceiptNo = Dikari::
        orderBy('id', 'asc')
        ->get();

        return view('admin.dikari.index', compact('lastDikari','lastDikariReceiptNo'));
    }
    public function create()
    {
        $dikari = Dikari::where('status', '=','active')->get();
        $user = User::all();
        return view('admin.dikari.create',compact('dikari','user'));
    }
    public function store(DikariFromRequest $request)
    {

        $validatedData = $request->validated();


        $lastDikari = Dikari::
        orderBy('id', 'asc')
        ->get();
        $lastDikariReceiptNo = Dikari::
        orderBy('id', 'asc')
        ->get();

        $dikari = new Dikari;
        $dikari->status = 'active';

        // member_image
        if ($request->hasFile('member_image')) {
            $file = $request->file('member_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/member_image/',$filename);
            $dikari->member_image = $filename;
        }

        // heir_image_1
        if ($request->hasFile('heir_image_1')) {
            $file = $request->file('heir_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/heir_image_1/',$filename);
            $dikari->heir_image_1 = $filename;
        }
        // daughter_image
        if ($request->hasFile('daughter_image')) {
            $file = $request->file('daughter_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/daughter_image/',$filename);
            $dikari->daughter_image = $filename;
        }

        $dikari->member_no  = '000'.$lastDikari->last()->member_no + 1;

        $dikari->receipt_no  = '0'.$lastDikariReceiptNo->last()->receipt_no + 1;

        $dikari->member_date  = $validatedData['member_date'];

        $dikari->mr  = $validatedData['mr'];

        $dikari->age  = $validatedData['age'];

        $dikari->village  = $validatedData['village'];

        $dikari->address  = $validatedData['address'];

        $dikari->taluk  = $validatedData['taluk'];
        $dikari->member_business  = $validatedData['member_business'];

        $dikari->mobile_no_1  = $validatedData['mobile_no_1'];
        $dikari->mobile_no_2  = $validatedData['mobile_no_2'];

        $dikari->city  = $validatedData['city'];

        $dikari->heir_name_1  = $validatedData['heir_name_1'];
        $dikari->age_1  = $validatedData['age_1'];
        $dikari->relationship_with_member_1  = $validatedData['relationship_with_member_1'];

        $dikari->daughter_name  = $validatedData['daughter_name'];
        $dikari->relationship_with_member_2  = $validatedData['relationship_with_member_2'];
        $dikari->birth_date_of_daughter  = $validatedData['birth_date_of_daughter'];
        $dikari->age_2  = $validatedData['age_2'];


        $dikari->amount_date  = $validatedData['amount_date'];
        $dikari->worth_kariyavar  = $validatedData['worth_kariyavar'];
        $dikari->kariyavar_amount  = $validatedData['kariyavar_amount'];
        $dikari->fix_amount  = $validatedData['fix_amount'];
        $dikari->fix_amount_word  = $validatedData['fix_amount_word'];
        $dikari->login_id = Auth::id();



        // heir_sign_image_2

        if ($request->hasFile('daughter_sign_image')) {

            $file = $request->file('daughter_sign_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/daughter_sign_image/',$filename);
            $dikari->daughter_sign_image = $filename;
        }

        // member_sign_image

        if ($request->hasFile('member_sign_image')) {

            $file = $request->file('member_sign_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/member_sign_image/',$filename);
            $dikari->member_sign_image = $filename;

        }

        // heir_sign_image_1

        if ($request->hasFile('heir_sign_image_1')) {

            $file = $request->file('heir_sign_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/heir_sign_image_1/',$filename);
            $dikari->heir_sign_image_1 = $filename;

        }

        // sign_on_behalf_of_jan_jagaruti_image

        if ($request->hasFile('sign_on_behalf_of_jan_jagaruti_image')) {

            $file = $request->file('sign_on_behalf_of_jan_jagaruti_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/',$filename);
            $dikari->sign_on_behalf_of_jan_jagaruti_image = $filename;

        }
        $dikari->save();


        $totalJoiningFee = TotalJoiningFee::first();
        if (!$totalJoiningFee) {
            $totalJoiningFee = new TotalJoiningFee();
        }
        $totalJoiningFee->total_joining_fee += 251;
        $totalJoiningFee->save();


        return redirect('admin/dikari/'.$dikari->id.'/view')->with('message','dikari Added Successfully');
    }

    public function destroy($id)
    {
        // Find the dikari by its ID
        $dikari = Dikari::findOrFail($id);

        if ($dikari->member_image) {
            Storage::delete('public/uploads/dikari/member_image/' . $dikari->member_image);
        }
        if ($dikari->heir_image_1) {
            Storage::delete('public/uploads/dikari/heir_image_1/' . $dikari->heir_image_1);
        }
        if ($dikari->daughter_image) {
            Storage::delete('public/uploads/dikari/daughter_image/' . $dikari->daughter_image);
        }
        if ($dikari->daughter_sign_image) {
            Storage::delete('public/uploads/dikari/daughter_sign_image/' . $dikari->daughter_sign_image);
        }
        if ($dikari->member_sign_image) {
            Storage::delete('public/uploads/dikari/member_sign_image/' . $dikari->member_sign_image);
        }
        if ($dikari->heir_sign_image_1) {
            Storage::delete('public/uploads/dikari/heir_sign_image_1/' . $dikari->heir_sign_image_1);
        }
        if ($dikari->sign_on_behalf_of_jan_jagaruti_image) {
            Storage::delete('public/uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/' . $dikari->sign_on_behalf_of_jan_jagaruti_image);
        }

        $dikari->delete();

        return redirect('admin/dikari/create')->with('message', 'દિકરીના કરિયાવરનું ફોર્મ સફળતાપૂર્વક કાઢી નાખ્યું');
    }

    // public function generateRandomNumber($prefix = '000')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = Dikari::where('member_no', 'like', $prefix . '%')
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

    // public function generateRandomNumber01($prefix = '0')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = Dikari::where('receipt_no', 'like', $prefix . '%')
    //                         ->orderBy('receipt_no', 'desc')
    //                         ->first();

    //     // If there are no entries yet with the desired format, start with 1
    //     if (!$lastBachat) {
    //         return $prefix . '01'; // Assuming you want the first number to be 01
    //     }

    //     // Extract the numeric part from the last member_no
    //     $lastNumber = intval(substr($lastBachat->receipt_no, strlen($prefix)));

    //     // Increment the last number by 1 and format it with leading zeros
    //     $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);

    //     return $prefix . $newNumber;
    // }

    Public function generateRandomNumber($prefix = '000')
    {
        // Find the last saved entry with the desired format
        $lastDikari = Dikari::
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
        $newNumber =  $lastDikari->first()->member_no + 1 ;

        return   $newNumber;
    }

    Public function generateRandomNumber01($prefix = '000')
    {
        // Find the last saved entry with the desired format
        $lastDikariReceiptNo = Dikari::
                            orderBy('receipt_no', 'desc')
                            ->get();

        // If there are no entries yet with the desired format, start with 1
        // if (!$lastBachat) {
        //     return $prefix . '01'; // Assuming you want the first number to be 01
        // }

        // Extract the numeric part from the last member_no
        // $lastNumber = intval(substr($lastBachat->member_no, strlen($prefix)));

        // Increment the last number by 1 and format it with leading zeros
        // $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        $newNumber =  $lastDikari->first()->receipt_no + 1 ;

        return   $newNumber;
    }




    public function edit($dikari_id)
    {
        $dikari = Dikari::findorfail($dikari_id);

        return view('admin.dikari.edit',compact('dikari'));
    }

    public function update(DikariFromRequest2 $request, $dikari_id)
    {
        $validatedData = $request->validated();

        $dikari = Dikari::findorfail($dikari_id);

        // member_image
        if ($request->hasFile('member_image')) {

            $path = 'public/uploads/dikari/member_image/'.$dikari->member_image;
            if(File::exists($path)) {
               File::delete($path);
            }

            $file = $request->file('member_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/member_image/',$filename);
            $dikari->member_image = $filename;
        }

        // heir_image_1
        if ($request->hasFile('heir_image_1')) {

            $path = 'public/uploads/dikari/heir_image_1/'.$dikari->heir_image_1;
            if(File::exists($path)) {
               File::delete($path);
            }

            $file = $request->file('heir_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/heir_image_1/',$filename);
            $dikari->heir_image_1 = $filename;
        }
        // daughter_image
        if ($request->hasFile('daughter_image')) {

            $path = 'public/uploads/dikari/daughter_image/'.$dikari->daughter_image;
            if(File::exists($path)) {
               File::delete($path);
            }

            $file = $request->file('daughter_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/daughter_image/',$filename);
            $dikari->daughter_image = $filename;
        }

        $dikari->member_no  = $validatedData['member_no'];

        $dikari->receipt_no  = $validatedData['receipt_no'];

        $dikari->status = 'active';


        $dikari->member_date  = $validatedData['member_date'];

        $dikari->mr  = $validatedData['mr'];

        $dikari->age  = $validatedData['age'];

        $dikari->village  = $validatedData['village'];

        $dikari->address  = $validatedData['address'];

        $dikari->taluk  = $validatedData['taluk'];
        $dikari->member_business  = $validatedData['member_business'];

        $dikari->mobile_no_1  = $validatedData['mobile_no_1'];
        $dikari->mobile_no_2  = $validatedData['mobile_no_2'];

        $dikari->city  = $validatedData['city'];

        $dikari->heir_name_1  = $validatedData['heir_name_1'];
        $dikari->age_1  = $validatedData['age_1'];
        $dikari->relationship_with_member_1  = $validatedData['relationship_with_member_1'];

        $dikari->daughter_name  = $validatedData['daughter_name'];
        $dikari->relationship_with_member_2  = $validatedData['relationship_with_member_2'];
        $dikari->birth_date_of_daughter  = $validatedData['birth_date_of_daughter'];
        $dikari->age_2  = $validatedData['age_2'];

        // heir_sign_image_2

        if ($request->hasFile('daughter_sign_image')) {

            $path = 'public/uploads/dikari/daughter_sign_image/'.$dikari->daughter_sign_image;
            if(File::exists($path)) {
               File::delete($path);
            }

            $file = $request->file('daughter_sign_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/daughter_sign_image/',$filename);
            $dikari->daughter_sign_image = $filename;
        }

        // member_sign_image

        if ($request->hasFile('member_sign_image')) {

            $path = 'public/uploads/dikari/member_sign_image/'.$dikari->member_sign_image;
            if(File::exists($path)) {
               File::delete($path);
            }

            $file = $request->file('member_sign_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/member_sign_image/',$filename);
            $dikari->member_sign_image = $filename;

        }

        // heir_sign_image_1

        if ($request->hasFile('heir_sign_image_1')) {

            $path = 'public/uploads/dikari/heir_sign_image_1/'.$dikari->heir_sign_image_1;
            if(File::exists($path)) {
               File::delete($path);
            }

            $file = $request->file('heir_sign_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/heir_sign_image_1/',$filename);
            $dikari->heir_sign_image_1 = $filename;

        }

        // sign_on_behalf_of_jan_jagaruti_image

        if ($request->hasFile('sign_on_behalf_of_jan_jagaruti_image')) {

            $path = 'public/uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/'.$dikari->sign_on_behalf_of_jan_jagaruti_image;
            if(File::exists($path)) {
               File::delete($path);
            }

            $file = $request->file('sign_on_behalf_of_jan_jagaruti_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('public/uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/',$filename);
            $dikari->sign_on_behalf_of_jan_jagaruti_image = $filename;

        }

        $dikari->update();

        return redirect('admin/dikari/'.$dikari->id.'/view')->with('message','dikari Updated Successfully');
    }

    public function view($id)
    {
        $dikari = dikari::findorfail($id);
        $user = User::all();

        return view('admin.dikari.view',compact('dikari','user'));
    }

    public function receipt()
    {
        $dikari = dikari::where('status', '=','active')->get();
        $Kariyavar = Kariyavar::all();
        $user = User::all();

        return view('admin.dikari.receipt',compact('dikari','Kariyavar','user'));
    }
    public function view_receipt($id)
    {
        $dikari = dikari::findorfail($id);
        $user = User::all();

        return view('admin.dikari.view_receipt',compact('dikari','user'));
    }

    public function create_kariyavar($id)
    {

        $dikari = dikari::findorfail($id);


        $lastkariyavar = kariyavar::
        orderBy('id', 'asc')
        ->get();

        return view('admin.dikari.create_kariyavar',compact('dikari','lastkariyavar'));
    }

    public function store_kariyavar(KariyavarFormRequest $request)
    {
        $validatedData = $request->validated();

        $lastkariyavar = kariyavar::
        orderBy('id', 'asc')
        ->get();

        $kariyavar = new kariyavar;

        $kariyavar->user_id  = $validatedData['user_id'];
        $kariyavar->receipt_no  = '0'.(optional($lastkariyavar->last())->receipt_no + 1 ?? '');

        $kariyavar->date  = $validatedData['date'];
        $kariyavar->kariyavar  = $validatedData['kariyavar'];
        $kariyavar->login_id = Auth::id();
        $kariyavar->save();

        $dikari = Dikari::findOrFail($validatedData['user_id']);
        $dikari->status = 'complete';
        $dikari->save();


        return redirect('admin/dikari/'.$kariyavar->id.'/view_kariyavar');

    }

    public function completed_list()
    {
        $dikari = Dikari::where('status', '=','complete')->get();
        $user = User::all();
        return view('admin.dikari.completed_list_dikari',compact('dikari','user'));
    }

    // public function generateRandomNumberdikari($prefix = '0')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = kariyavar::where('receipt_no', 'like', $prefix . '%')
    //                         ->orderBy('receipt_no', 'desc')
    //                         ->first();

    //     // If there are no entries yet with the desired format, start with 1
    //     if (!$lastBachat) {
    //         return $prefix . '01'; // Assuming you want the first number to be 01
    //     }

    //     // Extract the numeric part from the last member_no
    //     $lastNumber = intval(substr($lastBachat->receipt_no, strlen($prefix)));

    //     // Increment the last number by 1 and format it with leading zeros
    //     $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);

    //     return $prefix . $newNumber;
    // }
    public function generateRandomNumber1($prefix = '0')
    {
        // Find the last saved entry with the desired format
        $lastkariyavar = kariyavar::
                            orderBy('receipt_no', 'desc')
                            ->get();

        // If there are no entries yet with the desired format, start with 1
        // if (!$lastBachat) {
        //     return $prefix . '01'; // Assuming you want the first number to be 01
        // }

        // Extract the numeric part from the last member_no
        // $lastNumber = intval(substr($lastBachat->member_no, strlen($prefix)));

        // Increment the last number by 1 and format it with leading zeros
        // $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        $newNumber =  $lastkariyavar->first()->receipt_no + 1;

        return   $newNumber;
    }



    public function view_kariyavar($user_id)
    {
        $kariyavar = kariyavar::where('id','=',$user_id)->get();
        $dikari = dikari::findorfail($user_id);
        $user = User::all();

        return view('admin.dikari.view_kariyavar',compact('kariyavar','dikari','user'));
    }

    public function deactivate($id)
    {
        $dikari = dikari::findorfail($id);

        return view('admin.dikari.deactivate',compact('dikari'));
    }

    public function store_deactivate(DeactivateFormRequest $request)
    {
        $validatedData = $request->validated();
        $deactivate = new Deactivate;
        $deactivate->user_id  = $validatedData['user_id'];
        $deactivate->deactivate_date  = $validatedData['deactivate_date'];
        $deactivate->amount  = $validatedData['amount'];
        $deactivate->login_id = Auth::id();

        $deactivate->save();

        $dikari = Dikari::findOrFail($validatedData['user_id']);
        $dikari->status = 'deactivate';
        $dikari->save();


        return redirect('admin/dikari/'.$deactivate->user_id.'/view_deactivate')->with('message','Account Deactivated Successfully');
    }

    public function deactivate_list()
    {
        $dikari = dikari::where('status', '=','deactivate')->get();
        $Kariyavar = Kariyavar::all();
        $deactivates = Deactivate::all();
        $user = User::all();

        return view('admin.dikari.deactivate_list',compact('dikari', 'Kariyavar','deactivates','user'));
    }

    public function view_deactivate($id)
    {
        $dikari = dikari::findorfail($id);
        $deactivate = Deactivate::where('user_id',$dikari->id)->get();
        return view('admin.dikari.view_deactivate',compact('dikari','deactivate'));
    }


}
