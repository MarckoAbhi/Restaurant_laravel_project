<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;
use App\Models\CartModel;
use Illuminate\Support\Facades\DB;  // Import DB facade for transactions
use Illuminate\Support\Facades\Session; // Import Session facade
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuItems = MenuModel::where('status','!=',9)->get(); 
        return view('menu.index', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = !empty($request ->name)?$request->name:Null;
        $description = !empty($request ->description )?$request->description:Null;
        $price = !empty($request->price)?$request->price:NULL;
        $image = !empty($request->image)?$request->image:NULL;
        $status = !empty($request ->status)?$request ->status:2;  
        $created_by =NULL;
        $created_at = date('y-m-d H:i:s');
        $updated_by = Null;
        $updated_at = Null;
    
        //dd($request);
        // Handle image upload
        $imagePath = $request->file('image')->store('menu_images', 'public');
       
        $myarr = [
            "name"=> $name,
            "description"=>$description,
            "price"=>$price,
            "image"=>$imagePath,
            "status"=>$status,
            "created_by" => $created_by,
            "created_at" => $created_at,
            "updated_by" => $updated_by,
            "updated_at" => $updated_at,
           ] ;
           
           //dd($request);
           
           DB::beginTransaction();
            $query=MenuModel::create($myarr);
            if ($query) {
                DB::commit();
                $message = 'Entry Saved Successfuly';
                Session::flash('message', $message);
            } else {
                DB::rollback();
                $message = 'Something Went Wrong';
                Session::flash('error', $message);
            }

        // Redirect back with a success message
        return redirect()->route('menu.index')->with('success', 'Menu item added successfully!');
    }


    public function show()
{
    // Fetch the menu item by ID
    // $menuItem = MenuModel::findOrFail($id);

    // return view('menu.show', compact('menuItem'));
}
    /**
     * Display the specified resource.
     */
    public function cart()
    {
        // Fetch all cart items with menu relationship
        $cartItems = CartModel::where('status', '!=', 9)
                              ->with('menu') // Ensure menu data is loaded
                              ->get();
    
        // Debugging: Check if data is being retrieved
        if ($cartItems->isEmpty()) {
            dd('Cart is empty, no items found.');
        } else {
            dd($cartItems); // Show all cart items
        }
    
        // Calculate total price
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->menu ? $cartItem->menu->price : 0;
        });
    
        return view('menu.cart', compact('cartItems', 'totalPrice'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    
    public function clearCart()
    {
        // Clear all items from the cart by setting their status to 9 (deleted)
        CartModel::where('status', '!=', 9)->update(['status' => 9]);
    
        return redirect()->route('cart')->with('success', 'Your cart has been cleared.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id=Crypt::decryptString($id);
        $name = !empty($request ->name)?$request->name:Null;
        $description = !empty($request ->description )?$request->description :Null;
        $price = !empty($request ->price)?$request->price:Null;
        $image = !empty($request->image)?$request->image:Null;
        $status = !empty($request ->status)?$request ->status:2;  
        $updated_by =Null;
        $updated_at = date('y-m-d H:i:s');
        $myarr = [
        "name"=> $name,
        "description "=>$description ,
        "price"=>$price,
        "image"=>$image,
        "status"=>$status,
        "updated_by" => $updated_by,
        "updated_at" => $updated_at,
       ] ;
       DB::beginTransaction();
        $query=MenuModel::where('id',$id)->update($myarr);
        if ($query) {
            DB::commit();
            $message = 'Entry Saved Successfuly';
            Session::flash('message', $message);
        } else {
            DB::rollback();
            $message = 'Something Went Wrong';
            Session::flash('error', $message);
        }
        return redirect()->route('menu.index',$id)->with('success', 'Menu item updated successfully');
    }

    public function add($itemId)
{
    // Retrieve the item from the database
    $item = MenuModel::findOrFail($itemId); 

    $existingCartItem = CartModel::where('item_id', $item->id)
                                 ->where('status', '!=', 9) 
                                 ->first();

    if ($existingCartItem) {
        return redirect()->back()->with('info', 'This item is already in your cart.');
    }

    // Add the item to the cart table (no user_id)
    CartModel::create([
        'item_id' => $item->id,
        'status' => 1, // Active status
        'created_by' => null,  
        'updated_by' => null,
    ]);

    return redirect()->back()->with('success', $item->name . ' has been added to your cart!');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = MenuModel::findOrFail($id);
        $item->status = 9; 
        $item->save();
        return redirect('menu')->with('flash_message', 'Item  deleted!');
    }
}