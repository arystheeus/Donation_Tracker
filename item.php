<?php 
$drive = $_GET['drive'] ?? 'education';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item Donation</title>
    <link rel="stylesheet" href="itempage.css">
</head>

<body>

<div class="container">
    <div class="RequestForm">

        <h2>What would you like to give?</h2>

        <form action="actions/insert_item.php" method="POST">

            <!-- DRIVE -->
            <input type="hidden" name="drive" value="<?php echo htmlspecialchars($drive); ?>">

            <!-- ITEM TYPES -->
            <div class="line">
                <label><i>Select item type</i></label>
            </div>

            <div class="checkbox2">

                <label>
                    <input type="checkbox" name="item_types[]" value="food">
                    Food
                </label>

                <label>
                    <input type="checkbox" name="item_types[]" value="clothes">
                    Clothes
                </label>

                <label>
                    <input type="checkbox" name="item_types[]" value="footwear">
                    Footwear
                </label>

                <label>
                    <input type="checkbox" name="item_types[]" value="materials">
                    Learning Materials
                </label>

            </div>

            <!-- ITEM DETAILS -->
            <div class="row">
                <div class="input-group">
                    <label>Enter Item Name</label>
                    <input type="text" name="item_name" required>
                </div>

                <div class="input-group2">
                    <label>Quantity</label>
                    <input type="number" name="quantity" min="1" required>
                </div>
            </div>

            <h2>Your Information</h2>

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

            <div class="input-group3">
                <label>Address</label>
                <input type="text" name="address" required>
            </div>

            <!-- AGREEMENT -->
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" required>
                    I declare that the information provided is correct.
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