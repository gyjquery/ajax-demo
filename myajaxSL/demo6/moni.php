<?php
  header("content-Type:text/html,charset=utf-8");
$page=$_POST["page"];
switch($page){
	case 1:
	echo  '{"pagecount":"3","page":[{"bookId":"1","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"2","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"3","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
         {"bookId":"4","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
          {"bookId":"5","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"}
	]}';
   break;
   case 2:
	echo  '{"pagecount":"3","page":[{"bookId":"6","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"7","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"8","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
         {"bookId":"9","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
          {"bookId":"10","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"}
	]}';
   break;
   case 3:
	echo  '{"pagecount":"3","page":[{"bookId":"11","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"12","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"13","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
         {"bookId":"14","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
          {"bookId":"15","bookName":"斗破苍穹","bookOri":"60","bookprice":"80","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"}
	]}';
   break;
   default:
   echo '什么玩应';
}
?>