<?php

namespace App\Models;

class Article {
    public static function getAllArticles() {
        return [
            [   'id'=>'1',
                'title'=>"News One",
               'desc'=>"Balen le khoje khola "  
         ],
         [  'id'=>'20',    
            'title'=>"News Two",
         'desc'=>"Khola Bhettiyo! Aba k huncha???"  
     ]
        ];
            
        
    }
    public static function getSingleArticle($id)
    {
        $articles = self::getAllArticles();

        foreach($articles as $values){
            if($values['id']==$id)
            {
                return $values;
            }
        }
        }
}
?>