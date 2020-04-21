<?php
if(is_numeric($_GET["number"]) && $_GET["number"]== round($_GET["number"],0))
{
    $i=;
    $isprime=true;
    while($i<$_GET["number"])
    {
        if($i%$_GET["number"]==0)
        {$isprime=false;}
        $i++;

}
}
?>
<p>enter a whole number</p><br>
<form>
<input type="text"><input type="submit" value="go">
</form>