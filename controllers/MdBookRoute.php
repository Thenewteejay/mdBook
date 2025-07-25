<?php
    
    //      BOOK REGISTRATION ROUTE
    LtRoute::post('/books/registration', 'mdBook@TbBookController@bookRegistration');
    
    //      EDIT  BOOK ROUTE
    LtRoute::patch('/books/edit', 'mdBook@TbBookController@editBook');
    
    //      DELETE BOOK ROUTE    
    LtRoute::delete('/books/delete', 'mdBook@TbBookController@deleteBook');
  


?>
      
      
      
      
      
      
      