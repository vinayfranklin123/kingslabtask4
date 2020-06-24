<?php
extract($_POST);
if(isset($save))
{
    switch($ch)
    {
        case '+':
        $res=$fn+$sn;
        break;
        
        case '-':
        $res=$fn-$sn;
        break;
        
        case '*':
        $res=$fn*$sn;
        break;
        
    }
    
}

?>
<!DOCTYP html>
<html>
    <head>
        <title>Calculator- switch</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <form method="post w-25">
            <div class="form-group">
                <input class="form-control" type="number" name="fn" placeholder="Enter first number" value="<?php  echo @$fn;?>"/><br>
                <input class="form-control" type="number" name="sn" placeholder="Enter second number" value="<?php  echo @$sn;?>"/><br>
                <select class="form-control" name="ch">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                </select><br>
                <input class="form-control" type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/><br>
                <input class="form-control" type="submit"
                name="save" value="Show Result"/><br>
            </div>
        </form>
    </body>
</html>
