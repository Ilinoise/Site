<?php
// ������� HTML-���������:
echo '<html>';
echo '<head>';
echo '<title>Registration</title>';
echo '</head>';
echo '<body>';
echo '<h3>�������</h3>';
echo "<p>���������� �������� �������: <b>".$_POST['sur']."</b></p>";
echo '<h3>���</h3>';
echo "<p>���������� �������� �����: <b>".$_POST['nam']."</b></p>";
echo '<h3>Email</h3>';
if (isset($_POST['radiobutton']))
{
echo '<p>���: ';
if ($_POST['sex']==="men") echo "<b>�������</b>";
if ($_POST['sex']==="woman") echo "<b>�������</b>";
echo '</p>';
}
else echo '<p>��� �� ������</p>';
echo "<p> Email: <b>".$_POST['email']."</b></p>";
echo "<p>������: <b>".$_POST['pass']."</b></p>";
echo "<p>��������� ������ : <b>".$_POST['pass1']."</b></p>";
echo '<hr size="1">';
echo '<p>������ �����: </p>';
if (isset($_POST['lan1'])) echo "<p><b>�������</b></p>";
if (isset($_POST['lan2'])) echo "<p><b>����������</b></p>";
if (isset($_POST['lan3'])) echo "<p><b>����������</b></p>";
if (isset($_POST['lan4'])) echo "<p><b>�����������</b></p>";
if (isset($_POST['lan5'])) echo "<p><b>��������</b></p>";
echo '<hr size="1">';
else echo '<p>���� �� ������</p>';

echo '<hr size="1">';
echo '<p>���������: </p>';
foreach ($_POST['enjoy_m'] as $keys=>$values) echo "<b>$values</b><br>";
echo '<hr size="1">';
echo '<p>������ ��������:</p>';
echo "<p><b>".$_POST['textarea']."</b></p>";

echo '<hr size="1">';
echo '<p>&copy;&nbsp;2005 <a href="http://php.su">PHP.SU</a></p>';
echo '</body>';
echo '</html>';
?>
