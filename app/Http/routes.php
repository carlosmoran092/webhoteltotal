<?php

Route::get('/', 'WelcomeController@index');

Route::get('nuestraorganizacion','PagesController@nuestraorganizacion');

Route::get('asesoria','PagesController@asesoria');

Route::get('partnersyaliados','PagesController@partnersyaliados');

Route::get('ofertadevalor','PagesController@ofertadevalor');

Route::get('contactos','PagesController@contactos');

Route::get('erp','PagesController@erp');

Route::get('pms','PagesController@pms');

Route::get('revenue','PagesController@revenue');

Route::get('encuestas','PagesController@encuestas');

Route::get('conserje','PagesController@conserje');

Route::get('eventos-esm','PagesController@eventos_esm');



?>


