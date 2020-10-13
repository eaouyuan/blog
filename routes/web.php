<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('photos','PhotoController');



// 透過設定路由群組中的namespace屬性，來統一調整群組所使用的命名空間
// Route::group(['namespace'=>'cool'],function(){
//     Route::get('cool','TestController@index');
// });
// Route::get('cool','Cool\TestController@index');


Route::get('/','HomeController@index');
Route::get('alert','BoardController@alert');

Route::prefix('board')->group(function(){
    Route::get('/','BoardController@getIndex')->name('board.index');
    Route::get('/yuan','BoardController@getName')->name('board.name');
});




// 使用controller 代替路由閉包的使用
Route::group(['prefix'=>'student'],function(){
    Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>'StudentController@getStudentData'
    ]);

    Route::get('{student_no}/score/{subject?}',[
        'as'=>'student.score',
        'uses'=>'StudentController@getStudentScore'
    ])->where(['subject'=>'(chinese|english|math)']);
});


// Route::get('/','HomeController@index');

// 路由命名+前綴符
// Route::pattern('student_no','s[0-9]{10}');
// Route::group(['prefix'=>'student'],function(){
//     Route::get('{student_no}',[
//         'as'=>'student',
//         'uses'=>function($student_no){
//             return'學號:'.$student_no;
//         }
//     ]);

//     Route::get('{student_no}/score/{subject?}',[
//         'as'=>'student.score',
//         'uses'=>function($student_no,$subject=null){
//             return '學號:'.$student_no.'的'.((is_null($subject))?'所有科目':$subject).'成績';
//         }
//     ])->where(['subject'=>'(chinese|english|math)']);

// });


// Route::pattern('student_no','s[0-9]{10}');
// Route::get('student/{student_no}', function ($student_no) {
//     return '學號:'.$student_no;
// });

// Route::get('student/{student_no}/score/{subject?}',
//     function ($student_no,$subject=null) {
//         return '學號:'.$student_no.'的'.((is_null($subject))?'所有科目':$subject).'成績';
// })->where(['subject'=>'(chinese|english|math)']);


// Route::get('student/{student_no}', function ($student_no) {
//     return '學號:'.$student_no;
// })->where(['student_no'=>'s[0-9]{10}']);

// Route::get('student/{student_no}/score/{subject?}',
//     function ($student_no,$subject=null) {
//         return '學號:'.$student_no.'的'.((is_null($subject))?'所有科目':$subject).'成績';
// })->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);

// Route::get('student/{student_no}/score/{subject}',
//     function ($student_no,$subject) {
//         return '學號:'.$student_no.'的'.$subject.'所有成績。';
// }); 'student_no'=>'s[0-9]{10}',

// Route::get('student/{student_no}/score', function ($student_no) {
//     return '學號:'.$student_no.'的所有成績。';
// });

// Route::get('student/{student_no}', function ($student_no) {
//     return '學號:'.$student_no;
// });

// 限制使用方法
// Route::match (['get','post'],'/', function () {
//     return view('welcome');
// });

// 基本用法
// Route::get('/', function () {
//     return view('welcome');
// });
