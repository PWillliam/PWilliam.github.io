<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <link rel="stylesheet" href="ce.css">
    <form name="calculator">
        <input type="text" name="display" id="display" disabled>
        <br>
        <input type="button" value="7" onclick="addToDisplay('7')">
        <input type="button" value="8" onclick="addToDisplay('8')">
        <input type="button" value="9" onclick="addToDisplay('9')">
        <input type="button" value="/" onclick="addToDisplay('/')">
        <br>
        <input type="button" value="4" onclick="addToDisplay('4')">
        <input type="button" value="5" onclick="addToDisplay('5')">
        <input type="button" value="6" onclick="addToDisplay('6')">
        <input type="button" value="*" onclick="addToDisplay('*')">
        <br>
        <input type="button" value="1" onclick="addToDisplay('1')">
        <input type="button" value="2" onclick="addToDisplay('2')">
        <input type="button" value="3" onclick="addToDisplay('3')">
        <input type="button" value="-" onclick="addToDisplay('-')">
        <br>
        <input type="button" value="0" onclick="addToDisplay('0')">
        <input type="button" value="." onclick="addToDisplay('.')">
        <input type="button" value="=" onclick="calculate()">
        <input type="button" value="+" onclick="addToDisplay('+')">
        <br>
        <input type="button" value="C" onclick="clearDisplay()">
    </form>

    <script>
        function addToDisplay(value) {
            document.calculator.display.value += value;
        }

        function clearDisplay() {
            document.calculator.display.value = '';
        }

        function calculate() {
            try {
                document.calculator.display.value = eval(document.calculator.display.value);
            } catch (error) {
                document.calculator.display.value = 'Erreur';
            }
        }
    </script>
</body>
</html>

