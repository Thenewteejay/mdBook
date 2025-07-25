<?php

ltImport('mdLt', 'LtNavigate.php');
ltImport('mdBook', 'TbBook.php');



class TbBookController {
    
    public function viewBooks(){
        $bookModel = new TbBook();
        $books = $bookModel->findAll();
        $response = LtResponse::json('success', 201, 200, $books);
        return $response;
    }
    
    public function bookRegistration(){
        
        ob_end_clean();
        $bookModel = new TbBook();
        $bookModel->processRequest();
        $formType = $bookModel->_formType;
        $bookModel->insert();
        
        if($formType === 'webview'){
            //redirect to book registration page
            $responseResult = $bookModel->responseResult;
            LtNavigate::to('RegisterBook.html', 'mdBook')->withData('registerBook', $responseResult)->redirect();
        }else{
            //this is api response
            return $bookModel->responseJson();
        }
        
        
        exit();
        
    }
    
    public function editBook(){
        
       ob_end_clean();
       
       $bookModel = new TbBook();
       $request = new LtRequest;
       $bookId = $request->bookId;
       $bookModel->title = $request->title;
       $bookModel->year = $request->year;
       $bookModel->author = $request->author;
       $formType = $request->_formType;
       
       $bookModel->update('ltId', '=', $bookId);
        
        if($formType == 'webview'){
            //redirect to view book page
            $responseResult = $bookModel->responseResult;
            LtNavigate::to('EditBook.html', 'mdBook')->withData('editBook', $responseResult)->redirect();
        }else{
            //this is api response
            return $bookModel->responseJson();
        }
        
        exit();
        
    }
    
    public function deleteBook(){
       ob_end_clean();
       
       $bookModel = new TbBook();
       $request = new LtRequest;
       $bookId = $request->bookId;
       $formType = $request->_formType;
       
       $bookModel->delete('ltId', '=', $bookId);
        
        if($formType == 'webview'){
             //redirect to view book page
            $responseResult = $bookModel->responseResult;
            LtNavigate::to('DeleteBook.html', 'mdBook')->withData('deleteBook', $responseResult)->redirect();
        }else{
            //this is api response
            return $bookModel->responseJson();
        }
        
        exit();
    }
    
    
    
}








?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      