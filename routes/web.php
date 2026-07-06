<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome', ['greeting' => 'Hello',
                             'person' => request('person','world'), 
                             'tasks' => [ 'Task 1', 'Task 2', 'Task 3'  ] ,
                             'names' => []]);

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::get( '/idea', function() {
   // $idea = session()->get('idea', []);
   $ideas = \DB::table('ideas')->get();

   //return $ideas[0]->description;
   return view('idea', ['ideas' => $ideas]);

});
/*Route::post('/idea', function () {
    dd('Idea submitted');
});
*/

/*Route::post('idea',function(){
   dd(request()->all());

});*/
Route::post('idea', function() {
    $idea = request('idea');
    session()->push('idea', $idea);
    return redirect('/idea');
});
