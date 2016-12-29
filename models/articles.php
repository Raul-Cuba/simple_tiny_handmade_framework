<?php  
//функция вызова всего массива статей
function articles_all(){
    
    $art1 = array(
    	   "id"      => 1, 
    	   "title"   => "ауди tt", 
    	   "data"    => "2016-12-24", 
    	   "content" => "Хочу купить бэху-семерку, а в багажнике чтобы лежала ауди тт" );
    $art2 = array(
    	   "id"      => 2, 
    	   "title"   => "Мало денег на авто", 
    	   "data"    => "2016-12-24", 
    	   "content" => "Интересно можно ли за 100 тыс что-ниибудь купить"  );
    $art3 = array(
           "id"      => 1, 
           "title"   => "tt", 
           "data"    => "2016-12-24", 
           "content" => "Хочу купить бэху-семерку" );
    $art4 = array(
           "id"      => 2, 
           "title"   => "Обслуживание гэтээра", 
           "data"    => "2016-12-24", 
           "content" => "Ниссан ГТР - машина с очень дорогим ТО"  );

     $art5 = array(
           "id"      => 1, 
           "title"   => "Газовое топливо", 
           "data"    => "2016-12-24", 
           "content" => "Статья эта рассказывает как перевести тачку на газ" );
    $art6 = array(
           "id"      => 2, 
           "title"   => "x5", 
           "data"    => "2016-12-24", 
           "content" => "Как вы думаете, что можно купить за 400 тыс"  );

    $art7 = array(
           "id"      => 1, 
           "title"   => "tt", 
           "data"    => "2016-12-24", 
           "content" => "Хочу купить бэху-семерку, но не дороже ляма рублей" );
    $art8 = array(
           "id"      => 2, 
           "title"   => "x5", 
           "data"    => "2016-12-24", 
           "content" => "Ниссан ГТР - клеавая машина. Но мерседес круче"  );


    //Объявить переменную как массив - обязательно
    $arr   = array();
    
    //иницилизация значений
    $arr[] = $art1;
    $arr[] = $art2;
    $arr[] = $art3;
    $arr[] = $art4;
    $arr[] = $art5;
    $arr[] = $art6;
    $arr[] = $art7;
    $arr[] = $art8;

    //а можно и так набить массив массивчиками
    //array_push($arr, $art1);
    //array_push($arr, $art2);

    return $arr;
}
function articles_get($id){
	
}
function articles_new($title, $data, $content){
	
}
function articles_edit($id, $title, $data, $content){
	
}
function articles_delete($id){
	
}
?>