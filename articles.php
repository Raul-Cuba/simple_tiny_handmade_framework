<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
     <title>Мой первый блог</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
          

	      <?php
               //сначала вытыгиваем инфу по всем статьям!
               include ("models/articles.php");
               $articles = articles_all(); 
               
               if( isset($_GET['id']) && (($_GET['id']-1) < count($articles))  ) :
				$id = $_GET['id'];			
				$a = $articles[$id-1];
          ?>

          
          <div class="article">
                    <h3>
             <a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a>            
                    </h3>
                    <em>Опубликовано: <?=$a['data']?></em>
                   <p><?=$a['content']?></p>
               </div>
          </div>
          



             <?php
			   else :
					echo "<h2>Запрошенной статьи нет</h2>";
			   endif;
			?>

      
     <div class="container">
        <br><br><br>
        <a href="http://raul.ru/project4/blog/">Вернуться назад на главную</a><br><br>
               <p>Мой первый блог<br>Copyright &copy;2016</p>
     </div>

</div>
</body>
</html>