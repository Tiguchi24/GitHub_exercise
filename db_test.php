<!--?php <br ?--> $link = mysql_connect('localhost', 'root', '');
2
if (!$link) {
3
die('接続失敗！
4
'.mysql_error());
5
} else {
6
echo '接続成功！';
7
}
8
?&gt;