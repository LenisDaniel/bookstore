<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Payment;
use App\User;
use App\Book;
use App\Mail\SaleAdmin;
use App\Mail\SaleClient;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sell', 'SellController@index')->name('sell');
Route::get('/account', 'AccountController@index')->name('account');
Route::post('/update_account/{id}', 'AccountController@update')->name('update_account');

Route::get('booklist/{id}', 'CategoriesController@index')->name('categories');
Route::get('bookdetails/{id}', 'BooksController@show')->name('bookdetails');
Route::get('unapproved', 'BooksController@index')->name('unapproved');
Route::post('approve_process', 'BooksController@is_approved')->name('approve_process');
Route::post('register_book', 'SellController@store')->name('register_book');

Route::get('/success', function(Request $request){

    $item_number = $_GET['item_number'];
    $txn_id = $_GET['tx'];
    $payment_gross = $_GET['amt'];
    $currency_code = $_GET['cc'];
    $payment_status = $_GET['st'];
    $user_id = $_GET['cm'];
    $tokens = md5(uniqid(rand(0,10000), true));

    if(!empty($txn_id)){

        $payment = new Payment;
        $payment->user_id = $user_id;
        $payment->book_id = $item_number;
        $payment->txn_id = $txn_id;
        $payment->payment_gross = $payment_gross;
        $payment->currency_code = $currency_code;
        $payment->payment_status = $payment_status;
        $payment->_token = $tokens;
        $payment->save();

        $user = User::where('id', $user_id)->get();
        $book_name = Book::where('id', '=', $item_number)->select('book_name')->get();
        Mail::to($user[0]->email)->send(new SaleClient($user[0]->name, $book_name[0]->book_name, $txn_id));
//        Mail::send('emails.sale', ['user' => $user], function ($m) use ($user) {
//            $m->from('info@tbs.com', 'The Book Store');
//            $m->to($user[0]->email, $user[0]->name)->subject('Your Purchase has been completed!');
//        });

        $admin_emails = User::where('is_admin', '=', 1)->select('email')->get();
        for($i = 0; $i < count($admin_emails); $i++){
            Mail::to($admin_emails[$i]->email)->send(new SaleAdmin($user[0]->name, $book_name[0]->book_name, $txn_id, $user[0]->email, $user[0]->phone));
        }

//        Mail::send('emails.sale_admin', ['admin_emails' => $admin_emails], function ($m) use ($admin_emails) {
//            $m->from('info@tbs.com', 'The Book Store');
//            $m->to($admin_emails[0]->email)->subject('Your Purchase has been completed!');
//        });

        $request->session()->flash('alert-success', 'The purchase of the book has been successfully completed');
        return view('home');
    }

})->name('success');
