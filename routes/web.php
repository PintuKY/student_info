<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Route::view('/StdNamefiles','StdNamefile');

Route::get('/Name_Info',[StudentController::class,'NameDetails']);
Route::post('/Name_Info',[StudentController::class,'AddstudentData'])->name('student.add');

Route::get('/Add_Stud_clss',[StudentController::class,'Studclss']);
Route::post('/Add_Stud_clss',[StudentController::class,'AddCls'])->name('student.clas');

Route::get('/Add_Stud_Mark',[StudentController::class,'StudMark']);
Route::post('/Add_Stud_Mark',[StudentController::class,'AddMarks'])->name('student.marks');

Route::get('/Fetch_List_Data',[StudentController::class,'FetchListData']);

Route::get('/Edit_student_Data/{id}',[StudentController::class,'EditData']);
Route::post('/Update_student_Data',[StudentController::class,'UpdateData'])->name('update.data');

Route::get('/Show_all_details',[StudentController::class,'Showalldetails'])->name('show.detail');