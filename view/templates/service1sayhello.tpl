<form action="index.php" method="POST">
    <input type="hidden" name="service" value="service1">
    <input type="hidden" name="action" value="sayhello">
    <label for="vorname">Name</label><br/>
    <input type="text" name="vorname" maxlength="30"><br/>
    <button type="submit">Absenden</button>
</form><br/>
{$maindata[0]}