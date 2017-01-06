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


mail("$adminemail", "$date $time Сообщение от $name", "$msg");




$f = fopen("message.txt", "a+");

fwrite($f," \n $date $time сообщение от $name");

fwrite($f,"\n $msg ");

fwrite($f,"\n ---------------");

fclose($f);


print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 10000);
//--></script>


<p style='margin-top: 60px;font-size: 1pc; text-align:center;
    line-height: 27px;
    font-family: Arial, Helvetica, sans-serif;'><strong>Ваше сообщение отправлено! Наши менеджеры свяжутся с вами в ближайшее время</strong><br>Подождите, сейчас вы будете автоматически перенаправлены на Главную страницу...<br> Либо нажмите на <a href='http://fix-it.by'>эту ссылку</a> для перехода</p>";
exit;


?>