<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class myController extends Controller
{
    // Trang Home
    public function home() {
        return view('home');
    }
    //================================= Trang Admin =================================
    public function Admin() {
        $clients = DB::select('select * from clients');
        $staffs = DB::select('select * from staffs');
        return view('Admin/Doashboah',['clients'=>$clients],['staffs'=>$staffs]);
        // return view('Admin/Doashboah');
    }
    //---------client--------------
    public function client() {
        return view('Admin/client');
    }
    public function clientAdd() {
        return view('Admin/clientAdd');
    }
    public function clientEdit($id) {
        $clients = DB::select('select * from clients where id = ?', [$id]);
        return view('Admin/clientEdit',['clients'=>$clients]);
    }

    public function clientSave(Request $request)
    {
        $messages = [];
        $validator = Validator::make($request->all(), [
            'client_ma' => 'required',
            'client_ten' => 'required',
            'client_sdt' => 'required',
            'client_email' => 'required',
            'client_address' => 'required',
            'client_image' => 'required'
        ], $messages);
        if($validator->fails()) {
            return redirect('/khachhang')
                ->withErrors($validator)
                ->withInput();
        }else{
            $client_ma = $request->input('client_ma');
            $client_ten = $request->input('client_ten');
            $client_sdt = $request->input('client_sdt');
            $client_email = $request->input('client_email');
            $client_address = $request->input('client_address');
            $client_date = date('Y/m/d');
            $client_image = $request ->file('client_image');
                $storedPath = $client_image->move("Public\Client_images",
                time()."_".$client_image->getClientOriginalName());
    
            DB::insert('insert into clients(MaKH,TenKH,SoDT,Email,Address,NgayDK,Image) values (?,?,?,?,?,?,?)'
            ,[$client_ma,$client_ten,$client_sdt,$client_email,$client_address,$client_date,$storedPath]);
    
            return redirect('/khachhang')->with('success','Client Add Success......');
        }
        
    }
    public function clientUpload(Request $request,$id){
            $client_ma = $request->input('client_ma');
            $client_ten = $request->input('client_ten');
            $client_sdt = $request->input('client_sdt');
            $client_email = $request->input('client_email');
            $client_address = $request->input('client_address');
            $client_date = date('Y/m/d');
            // $client_image = $request ->file('client_image');
            // $storedPath = $client_image->move("Public\Client_images",
            // time()."_".$client_image->getClientOriginalName());

        DB::update('update clients set MaKH = ?,TenKH = ?,SoDT = ?,Email = ?,Address = ?,NgayDK = ? where id = ?'
        ,[ $client_ma,$client_ten,$client_sdt,$client_email,$client_address,$client_date,$id]);
        
        return redirect('Admin/client')->with('success','Data Client Updated Success....');
    }
    public function clientDelete($id){
        DB::select('delete from clients where id = ?', [$id]);
        return redirect('Admin/client')->with('success','Data Deleted success.. !!');
    }
    //xem client : 
    public function clientView(){
        $clients = DB::select('select * from clients');
        return view('/Admin/client',['clients'=>$clients]);
    }
    //--------------end client------------------

    //---------------staff (Nhân viên)--------------
    public function staffView(){
        $staffs = DB::select('select * from staffs');
        return view('/Admin/staff',['staffs'=>$staffs]);
    }
    public function staffAdd() {
        return view('Admin/staffAdd');
    }
    public function staffEdit($id) {
        $staffs = DB::select('select * from staffs where id = ?', [$id]);
        return view('Admin/staffEdit',['staffs'=>$staffs]);
    }

    public function staff_Save(Request $request)
    {
        $messages = [];
        $validator = Validator::make($request->all(), [
            'staff_ma' => 'required',
            'staff_ten' => 'required',
            'staff_sdt' => 'required',
            'staff_email' => 'required',
            'staff_address' => 'required',
            'staff_image' => 'required'
        ], $messages);
        if($validator->fails()) {
            return redirect('/Admin/staffAdd')
                ->withErrors($validator)
                ->withInput();
        }else{
            $staff_ma = $request->input('staff_ma');
            $staff_ten = $request->input('staff_ten');
            $staff_sdt = $request->input('staff_sdt');
            $staff_email = $request->input('staff_email');
            $staff_address = $request->input('staff_address');
            $staff_date = date('Y/m/d');
            $staff_image = $request ->file('staff_image');
                $storedPath = $staff_image->move("Public\Staff_images",
                time()."_".$staff_image->getClientOriginalName());
    
            DB::insert('insert into staffs(MaNV,TenNV,SoDT,Email,DiaChi,NgayThem,Image) values (?,?,?,?,?,?,?)'
            ,[$staff_ma,$staff_ten,$staff_sdt,$staff_email,$staff_address,$staff_date,$storedPath]);
    
            return redirect('/Admin/staffAdd')->with('success','Nhân Viên Add Success......');
        }
        
    }
    public function staffUpload(Request $request,$id){
            $staff_ma = $request->input('staff_ma');
            $staff_ten = $request->input('staff_ten');
            $staff_sdt = $request->input('staff_sdt');
            $staff_email = $request->input('staff_email');
            $staff_address = $request->input('staff_address');
            $staff_date = date('Y/m/d');
            // $staff_image = $request ->file('client_image');
            // $storedPath = $staff_image->move("Public\staff_images",
            // time()."_".$stafft_image->getClientOriginalName());

        DB::update('update staffs set MaNV = ?,TenNV = ?,SoDT = ?,Email = ?,DiaChi = ?,NgayThem = ? where id = ?'
        ,[$staff_ma,$staff_ten,$staff_sdt,$staff_email,$staff_address,$staff_date,$id]);
        
        return redirect('Admin/staff')->with('success','Data Client Updated Success....');
    }
    public function staffDelete($id){
        DB::select('delete from staffs where id = ?', [$id]);
        return redirect('Admin/staff')->with('success','Data nhân viên Deleted success.. !!');
    }
    
    //--------------end staff(Nhân Viên)------------------

    //------------ User-Admin ------------
    public function users() {
        $users = DB::select('select * from users');
        return view('Admin/user',['users'=>$users]);
    }
    public function usersDelete($id){
        DB::select('delete from users where id = ?', [$id]);
        return redirect('Admin/users')->with('success','Xóa thành công user.. !!');
    }
    //---------- end-user-Admin -----------

    // ---------- Orders ----------------
    public function ordersDelete($id){
        DB::select('delete from hoadon where SoHD = ?', [$id]);
        return redirect('Admin/orders')->with('success','Xóa thành công user.. !!');
    }
    // ----------End Orders ----------------

    //------------------ Product ------------------
    //Xem product
    public function productsview() {
        $products = DB::select('select * from products');
        return view('/Admin/product',['products'=>$products]);
    }
    public function productAdd() {
        return view('Admin/productAdd');
    }
    public function productEdit($id) {
        $products = DB::select('select * from products where id = ?', [$id]);
        return view('Admin/productEdit',['products'=>$products]);
    }
    public function productSave(Request $request)
    {
        $messages = [];
        $validator = Validator::make($request->all(), [
            'prd_name' => 'required',
            'prd_mieuta' => 'required',
            'prd_soluong' => 'required',
            'prd_price' => 'required',
            'prd_image' => 'required'
        ], $messages);
        if($validator->fails()) {
            return redirect('/Admin/productAdd')
                ->withErrors($validator)
                ->withInput();
        }else{
            $prd_name = $request->input('prd_name');
            $prd_mieuta = $request->input('prd_mieuta');
            $prd_soluong = $request->input('prd_soluong');
            $prd_price = $request->input('prd_price');
            $client_date = date('Y/m/d');
            $prd_image = $request ->file('prd_image');
                $storedPath = $prd_image->move("Public\Product_images",
                time()."_".$prd_image->getClientOriginalName());
    
            DB::insert('insert into products(ProductName,Mota,Price,Quantity,NgayNhapSP,Image) values (?,?,?,?,?,?)'
            ,[$prd_name,$prd_mieuta,$prd_price,$prd_soluong,$client_date,$storedPath]);
    
            return redirect('/Admin/productAdd')->with('success','Thêm Sản Phẩm Thành Công......');
        }
        
    }
    public function productUpload(Request $request,$id){
        $prd_name = $request->input('prd_name');
        $prd_mieuta = $request->input('prd_mieuta');
        $prd_soluong = $request->input('prd_soluong');
        $prd_price = $request->input('prd_price');
        $prd_date = date('Y/m/d');
        // $client_image = $request ->file('client_image');
        // $storedPath = $client_image->move("Public\Client_images",
        // time()."_".$client_image->getClientOriginalName());

        DB::update('update products set ProductName = ?,Mota = ?,Price = ?,Quantity = ?,NgayNhapSP = ? where id = ?'
        ,[$prd_name,$prd_mieuta,$prd_price,$prd_soluong,$prd_date,$id]);
        
        return redirect('Admin/product')->with('success','Cập nhật Sản Phẩm Thành công....');
    }
    public function productDelete($id){
        DB::select('delete from products where id = ?', [$id]);
        return redirect('Admin/product')->with('success','Xóa Sản Phẩm Thành Công.. !!');
    }
    //------------------- end product ----------------

    public function orders() {
        // return view('Admin/order');

        $hoadon = DB::select('select * from hoadon');
        return view('Admin/order',['hoadon'=>$hoadon]);
    }
    
    
    //============================================= end admin ==========================================








    // Trang Liên Hệ
    public function lienhe() {
        $tel = "0222256789";
        return view('contact',['sdt' => $tel]);
    }
    // Hiển Ngày Hôm nay
    public function xemngay() {
        $day = "Hôm Nay Là Days : " .date("d/m/Y");
        return $day;
    }
    // đăng ký validate : 
    public function SaveRegister_valid(Request $request) {
        // dd($request->all());
        $messages = [];
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'tel' => 'required|between:10,11|unique:registers,"Tel"',
            'email' => 'required|email|unique:registers,"email"',
            'address' => 'required'
        ], $messages);
        if($validator->fails()) {
            return redirect('register_valid')
                ->withErrors($validator)
                ->withInput();
        }else{
            $name = $request->input('name');
            $tel = $request->input('tel');
            $email = $request->input('email');
            $address = $request->input('address');
            $Rdate = date('Y/m/d');
            DB::insert('insert into registers 
            (membername, tel, email, address, registerdate) values (?, ?, ?, ?, ?)',
            [$name, $tel, $email, $address , $Rdate]);
            return view('register_valid',['message'=>"Đăng Ký Thành Công."]);
        }
    }
    public function ShowForm_valid() {
        return view('register_valid');
    }
    public function dangky_kh() {
        return view('DK_khachhang');
    }
    //Thành Viên
    
    // đăng ký Thành Viên (members) : 
    public function SaveMembers(Request $request) {
        // dd($request->all());
        $messages = [];
        $validator = Validator::make($request->all(), [
            'memberID' => 'required',
            'name' => 'required|max:100',
            'tel' => 'required|between:10,11|unique:registers,"Tel"',
            'email' => 'required|email|unique:registers,"email"',
            'address' => 'required'
        ], $messages);
        if($validator->fails()) {
            return redirect('members')
                ->withErrors($validator)
                ->withInput();
        }else{
            $memberID = $request->input('memberID');
            $name = $request->input('name');
            $tel = $request->input('tel');
            $email = $request->input('email');
            $address = $request->input('address');
            $Rdate = date('Y/m/d');
            $image = $request ->file('imageMember');
            $storedPath = $image->move("Public\imageMembers",
            time()."_".$image->getClientOriginalName());
            DB::insert('insert into members 
            (MemberID ,MemberName, Tel, Email, Address, JoinDate, Starts, ImageMembers) values (?, ?, ?, ?, ?, ?, ?,?)',
            [$memberID,$name, $tel, $email, $address , $Rdate , 0, $storedPath]);
            return view('members',['message'=>"Đăng Ký Thành Công."]);
        }
    }
    public function ShowFormMembers() {
        return view('members');
    }
    //Update Thành Viên :
    public function edit_members($id){
        $members = DB::select('select * from members where MemberID = ?', [$id]);
        return view('memberedit',['members'=>$members]);
    }
    public function update_members(Request $request,$id){
            $memberID = $request->input('memberID');
            $name = $request->input('name');
            $tel = $request->input('tel');
            $email = $request->input('email');
            $address = $request->input('address');
            $Rdate = date('Y/m/d');
            $image = $request ->file('imageMember');
            $storedPath = $image->move("Public\imageMembers",
            time()."_".$image->getClientOriginalName());
        
        DB::update('update members set memberID = ?,name = ?,tel = ?,email = ?,address = ?,JoinDate = ?,imageMember = ? where MemberID = ?'
        ,[ $memberID,$name,$tel,$email,$address,$Rdate,$storedPath,$id]);
        
        return redirect('members')->with('success','Data Updated');
    }
    // End Thành Viên
    //===============================================================


    // Nhập invoices :
    public function SaveInvoices(Request $request) {
        $messages = [];
        $validator = Validator::make($request->all(), [
            'invoicesID' =>'required',
            'dateInvoices' =>'required',
            'memberID' =>'required',
            'totalM' =>'required',
            'doanhthuOnline' =>'required',
            'doanhthuOffline' =>'required',
        ], $messages);
        if($validator->fails()) {
            return redirect('invoices')->withErrors($validator)->withInput();
        }else{
            $invoicesID = $request->input('invoicesID');
            $dateInvoices = $request->input('dateInvoices');
            $memberId = $request->input('memberID');
            $productID = $request->input('productID');
            $totalM = $request->input('totalM');
            $doanhthuOnline = $request->input('doanhthuOnline');
            $doanhthuOffline = $request->input('doanhthuOffline');

            DB::insert('insert into hoadon 
            (SoHD ,NgayNhapHD, MaKH, ProductID, Quantity, TotalMoney,DTOnline,DTOffline) values (?, ?, ?, ?, ?, ?, ?, ?)',
            [$invoicesID,$dateInvoices, $memberId, $productID, 1, $totalM,$doanhthuOnline,$doanhthuOffline]);
            return view('invoices',['message'=>"Nhập Thành Công."]);
        }
    }
    //get Mã Thành Viên , Mã Sản Phẩm 
    public function NhapFormInvoices() {
        // $data = DB::table('clients')->select(DB::raw('MaKH, concat("_",TenKH, " - ", SoDT,"_") as ghichu'))->get();
        // $dstv = $data->pluck('ghichu','MaKH');
        // $data1 = DB::table('products')->select(DB::raw('ProductID, concat("_", ProductName,"_") as ghichu1'))->get();
        // $dssp = $data1->pluck('ghichu1','ProductID');
        // return view('invoices',['dstv'=>$dstv, 'dssp'=>$dssp]);

        $products = DB::table('products')->select('*');
        $products = $products->get();
        return view('invoices',compact('products'));
    }
    
    
    //---------------------------------------------------------------------------------------

    // view Xem thành Viên (members): 
    public function xemtv() {
        $clients = DB::table('clients')->select('*');
        $clients = $clients->get();

        return view('xemkh',compact('clients'));
    }
    // view Xem sản Phẩm (product):     
    public function xemsp() {
        $products = DB::table('products')->select('*');
        $products = $products->get();

        return view('xemsp',compact('products'));
    }
    public function product() {
        $products = DB::table('products')->select('*');
        $products = $products->get();

        return view('product',compact('products'));
    }
}
