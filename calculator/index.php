<form>
    <input name="num1" placeholder="Number 1"><br>
    <input name="num2" placeholder="Number 2"><br>

    <select name="operator">
        <option value="none">None</option>
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="divide">Divide</option>
        <option value="multiply">Multiply</option>
    </select>

    <br>
    <button type="submit" name="submit" value="submit">
        Calcuate
    </button>


    <p>The Answer Is :</p>
    <?php

    if (isset($_GET['submit'])) {

        $num1     = $_GET['num1'];
        $num2     = $_GET['num2'];
        $operator = $_GET['operator'];

        if ($operator == 'add') {
            echo  $num1 + $num2;
        } elseif ($operator == 'subtract') {
            echo  $num1 - $num2;
        } elseif ($operator == 'divide') {
            echo  $num1 / $num2;
        } elseif ($operator == 'multiply') {
            echo  $num1 * $num2;
        } else {
            echo 'You need to select a method';
        }
    }
    ?>

</form>