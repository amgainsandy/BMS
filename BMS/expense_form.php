<!DOCTYPE html>
<html>
<head>
    <title>Expense Form</title>
    <link rel="stylesheet" href="style3.css"> 
</head>
<body>
    <h2>    </h2>
    <form action="process_form.php" method="post" style="width:30%">
        <label for="total_money">Total Money:</label><br>
        <input type="text" id="total_money" name="total_money"><br><br>

        <label for="payer">Who Paid:</label><br>
        <div style="display:flex;width:100%;gap:30px">
          <div> <label for="">Sandesh</label> <input type="radio" name="payer"></div>
            <select id="payer" name="payer">
                <option value="partner">Your partner</option>
                <option value="partner">Your Partner</option>
            </select>

        </div>
        <label for="date">Date:</label><br>
        <input type="text" id="date" name="date" placeholder="YYYY-MM-DD"><br><br>

        <label for="details">Details:</label><br>
        <textarea id="details" name="details" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
