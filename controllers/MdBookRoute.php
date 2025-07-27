<?php
    
    //      BOOK REGISTRATION ROUTE
    LtRoute::post('/books/create', 'mdBook@TbBookController@bookRegistration')->name('book.create');
    
    //      EDIT  BOOK ROUTE
    LtRoute::patch('/books/edit', 'mdBook@TbBookController@editBook')->name('book.edit');
    
    //      DELETE BOOK ROUTE    
    LtRoute::delete('/books/delete', 'mdBook@TbBookController@deleteBook')->name('book.delete');
    
    //      VIEW BOOK ROUTE    
    LtRoute::get('/books', 'mdBook@TbBookController@viewBooks')->name('book.view');
  


?>
      
      
      
      
      
      
      
      
      
      
      