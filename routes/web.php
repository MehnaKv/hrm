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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});




Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['web','admin']],function() {

    Route::resource('dashboard','AdminnotfctnController');

Route::resource('employ','HRMmanagementController');

Route::resource('emp','LeaveController');

Route::resource('payroll','PayrollController');

    Route::resource('request','LeaverequsetController');


    Route::post('leave_update/{id}', 'LeaverequsetController@updateStatus');

    Route::resource('pdf','ApdfController');


    Route::resource('downloadpayroll','AdmindownloadpayController');







    Route::get('/m', function () {
        return view('admin.employee_details');
    });
    Route::get('/emn', function () {
        return view('admin.edit_details');
    });
    Route::get('/e', function () {
        return view('admin.viewemployee');
    });

    Route::get('/en', function () {
        return view('admin.show_details');
    });
    Route::get('/ek', function () {
        return view('admin.view_payroll');
    });

    Route::get('/el', function () {
        return view('admin.show_leavedetails');
    });


});





Route::group(['prefix'=>'user','middleware'=>['web','user']],function() {
    Route::get('/dashboard', function () {
        return  view('user.dashboard');
    });
    Route::resource('empl','EmployeeController');

    Route::resource('leaveapp','EmployeeleavedetailsController');

    Route::resource('leave','EmployeeapplicationController');

    Route::resource('stats','EmployeeapplicationController');

    Route::resource('salary','EmployeesalarydetailsController');

    Route::post('send','MailController@send');






    Route::get('/emm', function () {
        return view('user.leave_applctn');
    });


});




Route::group(['prefix'=>'directors','middleware'=>['web','directors']],function() {

    Route::resource('dashboard','DirectornotfctnController');

    Route::resource('dir','DirectorempdetailController');

    Route::resource('request','DirectorleaverequestController');

    Route::resource('not','DirectornotfctnController');

    Route::resource('pay','DirectorpayrollController');

    Route::resource('pdf','DpdfController');

    Route::resource('downloadpayroll','DirectordownloadpayController');
    });


  Route::get('/showlogin', function () {
    return view('auth.userlogin');
   });


//Route::get('/home', 'HomeController@index')->name('home');
