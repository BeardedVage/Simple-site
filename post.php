<?PHP header("Content-Type: text/html; charset=utf-8");
?>
<?


$adminemail="info@fix-it.by";

$date=date("d.m.y");

$time=date("H:i");

$backurl="http://fix-it.by/index.html";

//---------------------------------------------------------------------- //



$name=$_POST['name'];

$email=$_POST['email'];

$msg=$_POST['message'];




$msg="


Name: $name


E-mail: $email


Message: $msg


";


mail("$adminemail", "$date $time ��������� �� $name", "$msg");




$f = fopen("message.txt", "a+");

fwrite($f," \n $date $time ��������� �� $name");

fwrite($f,"\n $msg ");

fwrite($f,"\n ---------------");

fclose($f);


print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 10000);
//--></script>


<p style='margin-top: 60px;font-size: 1pc; text-align:center;
    line-height: 27px;
    font-family: Arial, Helvetica, sans-serif;'><strong>���� ��������� ����������! ���� ��������� �������� � ���� � ��������� �����</strong><br>���������, ������ �� ������ ������������� �������������� �� ������� ��������...<br> ���� ������� �� <a href='http://fix-it.by'>��� ������</a> ��� ��������</p>";
exit;


?>