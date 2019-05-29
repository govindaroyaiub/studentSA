<?php

Route::get('/', function () {
    return view('pages/welcome');
});
Route::get('/pages/index', function() {
    return view('pages/index');
});
Route::get('/pages/student', function() {
    return view('pages/student');
});
Route::get('/pages/welcome', function() {
    return view('pages/welcome');
});
Route::get('/pages/register_student', function() {
    return view('/pages/register_student');
});
Route::get('/pages/addClass', function(){
    return view('/pages/addClass');
});
Route::get('/pages/student_list', function(){
    return view('/pages/student_list');
});
Route::get('/pages/employee', function(){
    return view('/pages/employee');
});
Route::get('/pages/register_employee', function(){
    return view('/pages/register_employee');
});
Route::get('/pages/employee_list', function(){
    return view('/pages/employee_list');
});
Route::get('/pages/add_profession', function(){
    return view('/pages/add_profession');
});
Route::get('/pages/attendance_report', function(){
    return view('/pages/attendance_report');
});
Route::get('/pages/leave', function(){
    return view('/pages/leave');
});
Route::get('/pages/create_holiday', function(){
    return view('/pages/create_holiday');
});
Route::get('/pages/notice', function(){
    return view('/pages/notice');
});
Route::get('/pages/add_notice', function(){
    return view('/pages/add_notice');
});
Route::get('/pages/change_password', function(){
    return view('/pages/change_password');
});