<?php 
 
namespace App\Controllers; 
 
class Page extends BaseController {     
    public function about() 
    {
    return view('about', [ 
        'title' => 'Halaman About',  
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
        halaman ini.'
        ]);    
    } 
 
    public function contact()     
    {        
        return view('contact', [
            'title' => 'Halaman Contact',  
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
            halaman ini.'
            ]);   
         } 
 
    public function faqs()    
     {         
        return view('faqs', [
            'title' => 'Halaman ',  
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }
    
    public function tos() {     
        echo "ini halaman Term of Services";
     }
} 