<?php
 header("content-type:text/html;charset=utf-8");
$page=$_POST["page"];
switch($page){
	  case 1:
	echo '{"pagecount":3,"page":[{"bookId":"1","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"2","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"3","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"4","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"5","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"}
	 ]}';
	 break;
	 case 2:
	 echo '{"pagecount":3,"page":[{"bookId":"6","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"7","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"8","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"9","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"10","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"}
	 ]}';
	 break;
      case 3:
	echo '{"pagecount":3,"page":[{"bookId":"11","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"},
        {"bookId":"12","bookName":"css+div从入门到精通","bookOri":"80","bookPrice":"90","bookPub":"人民邮电出版社","bookPic":"53f595f7N7977f3c4.jpg","bookAddTime":"2017-04-01 00:00:00"}
	 ]}';
	 break;
	 default:
	 echo "参数不正确";
}
?>