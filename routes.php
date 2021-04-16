<?php
    
    Route::resource('/','LibrosController');
    Route::resource('/autor','AutorController');
    Route::resource('/editoriales','EditorialController');

    Route::dispatch();
?>
