<!--?php <br ?--> $link = mysqli_connect('localhost', 'root', '');
2
if (!$link) {
3
die('接続失敗！
4
'.mysqli_error());
5
} else {
6
echo '接続成功！';
 mysqli_set_charset($link, "utf8");
 mysqli_close($link);
7
}
8
?&gt;