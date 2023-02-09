<?php include 'header.php'; ?>
<form action=""method="get">
<input type="number" placeholder="Enter your first number" name= "num1">
<input type="number" placeholder="Enter your first number" name= "num2">
<select name="operator" id="">
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="mul">Multiply</option>
    <option value="div">Divide</option>
</select>
<input type="submit" name="cal" value="calculate">
</form>
<?php
if (isset($_Get["cal"])){
    $num1 = $_Get["num1"];
    $num2 = $_Get["num2"];
    $operat = $_Get["operator"];
    switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            $result = $num1 / $num2;
            break;
        default:
            $result = "Error: You have not selected the correct oprator";

    }
}
if (itset($result)){
    echo "<h2> Result : $result </h2>" ;
}
?>

<?php include "footer.php";?>