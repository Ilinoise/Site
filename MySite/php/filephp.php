<?php
// Выводим HTML-заголовки:
echo '<html>';
echo '<head>';
echo '<title>Registration</title>';
echo '</head>';
echo '<body>';
echo '<h3>Фамилия</h3>';
echo "<p>Переданное значение фамилии: <b>".$_POST['sur']."</b></p>";
echo '<h3>Имя</h3>';
echo "<p>Переданное значение имени: <b>".$_POST['nam']."</b></p>";
echo '<h3>Email</h3>';
if (isset($_POST['radiobutton']))
{
echo '<p>Пол: ';
if ($_POST['sex']==="men") echo "<b>Мужской</b>";
if ($_POST['sex']==="woman") echo "<b>Женский</b>";
echo '</p>';
}
else echo '<p>Пол не выбран</p>';
echo "<p> Email: <b>".$_POST['email']."</b></p>";
echo "<p>Пароль: <b>".$_POST['pass']."</b></p>";
echo "<p>Повторный пароль : <b>".$_POST['pass1']."</b></p>";
echo '<hr size="1">';
echo '<p>Знание языка: </p>';
if (isset($_POST['lan1'])) echo "<p><b>русский</b></p>";
if (isset($_POST['lan2'])) echo "<p><b>украинский</b></p>";
if (isset($_POST['lan3'])) echo "<p><b>английский</b></p>";
if (isset($_POST['lan4'])) echo "<p><b>французский</b></p>";
if (isset($_POST['lan5'])) echo "<p><b>немецкий</b></p>";
echo '<hr size="1">';
else echo '<p>Язык не выбран</p>';

echo '<hr size="1">';
echo '<p>Увлечения: </p>';
foreach ($_POST['enjoy_m'] as $keys=>$values) echo "<b>$values</b><br>";
echo '<hr size="1">';
echo '<p>Личные качества:</p>';
echo "<p><b>".$_POST['textarea']."</b></p>";

echo '<hr size="1">';
echo '<p>&copy;&nbsp;2005 <a href="http://php.su">PHP.SU</a></p>';
echo '</body>';
echo '</html>';
?>
