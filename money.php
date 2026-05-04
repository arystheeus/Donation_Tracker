<?php 
$drive = $_GET['drive'] ?? 'education';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Money Donation</title>
    <link rel="stylesheet" href="money.css">
</head>
<body>

<div class="container">
    <div class="amount-box">

        <h2>How much would you like to give?</h2>

        <form action="actions/insert_money.php" method="POST">

            <!-- DRIVE -->
            <input type="hidden" name="drive" value="<?php echo htmlspecialchars($drive); ?>">

            <!-- AMOUNT -->
            <label>Enter Amount: ₱</label>
            <input type="number" name="amount" min="1" step="0.01" required>

            <h3>Your Information</h3>

            <div class="row">
                <div class="input-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" required>
                </div>

                <div class="input-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" required>
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="input-group">
                    <label>Contact Number</label>
                    <input type="text" name="contact" required>
                </div>
            </div>

            <div class="input-group">
                <label>Address</label>
                <input type="text" name="address" required>
            </div>

            <!-- AGREEMENT -->
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" required>
                    I declare that all information provided is correct.
                </label>
            </div>

            <!-- BUTTONS -->
            <div class="buttons">
                <button type="button" class="cancel" onclick="window.location.href='index.php'">
                    CANCEL
                </button>

                <button type="submit" class="submit">
                    SUBMIT
                </button>
            </div>

        </form>

    </div>
</div>

</body>
</html>