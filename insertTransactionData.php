<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Transaction Data</title>
</head>
<body>
    <form action="transactionEntryCon.php" method="post">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Transaction Number:</label>
                <input class="input--style-4" type="number" name="txtTRNo">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Transaction Date:</label>
                <input class="input--style-4" type="date" name="txtTDate">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Subtotal:</label>
                <input class="input--style-4" type="number" name="txtSubTotal">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Processing Fee:</label>
                <input class="input--style-4" type="number" name="txtProFee">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">VAT</label>
                <input class="input--style-4" type="number" name="txteVAT">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Net Cost</label>
                <input class="input--style-4" type="number" name="txtNetCost">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Car Engine Number:</label>
                <input class="input--style-4" type="number" name="txtCENo">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Customer ID:</label>
                <input class="input--style-4" type="number" name="txtCLID">
            </div>
        </div>
        <div class="p-t-15">
            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
        </div>
    </form>
</body>
</html>