<!-- WayStationShelter    Blue Lights Team -->
<?php
require('../views/header.php');
?>
<main>
    <form action="index.php" method="get" >
        <h2>Welcome Back to WayStation</h2>
        <p>Welcome back! Please sign in and select the services you are interested in learning about or
            accessing today. Please note, visits with case managers and other visiting professionals
            may have to be scheduled for another date.</p>

        <p>1. First Name</p>
        <label>
            <input type="text" name="<?php echo BACK_FIRST_NAME ?>" />
        </label>

        <p>2. Last Name</p>
        <label>
            <input type="text" name="<?php echo BACK_LAST_NAME ?>" />
        </label>

        <p>3. Date of Birth</p>
        <label>
            <input type="text" name="<?php echo BACK_BIRTH_DATE ?>">
        </label>

        <p>4. How many other family members came with you today? (Spouse, children, etc.)</p>
        <p>Mark only one.</p>
        <div id="family_amount">
            <label class="radio"><input type="radio" name="amount_family" id="one_family">
                1</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="two_family">
                2</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="three_family">
                3</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="four_family">
                4</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="five_family">
                5</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="six_family">
                6</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="seven_family">
                7</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="eight_family">
                8</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="nine_family">
                9</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="ten_family">
                10</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="eleven_family">
                11</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="twelve_family">
                12</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="thirteen_family">
                13</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="fourteen_family">
                14</label>
            <br>
            <label class="radio"><input type="radio" name="amount_family" id="fifteen_family">
                15</label>
        </div>

        <p>5. Will you be eating breakfast at WayStation today?</p>
        <p>Mark only one.</p>
        <div id="breakfast">
            <label class="radio"><input type="radio" name="yes_no_breakfast" id="yes_breakfast">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_breakfast" id="no_breakfast">
                No</label>
        </div>

        <p>6. Will you be eating lunch at WayStation today?</p>
        <p>Mark only one.</p>
        <div id="lunch">
            <label class="radio"><input type="radio" name="yes_no_lunch" id="yes_lunch">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_lunch" id="no_lunch">
                No</label>
        </div>

        <p>7. Will you be doing laundry today?</p>
        <p>Mark only one.</p>
        <div id="laundry">
            <label class="radio"><input type="radio" name="yes_no_laundry" id="yes_laundry">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_laundry" id="no_laundry">
                No</label>
        </div>

        <p>8. Today I would like some assistance with these things only (check what you would
            like to prioritize for today)</p>
        <p>Check all that apply.</p>

        <p>9. I need this service that wasn't mentioned above</p>
        <label>
            <input type="text" name="<?php echo BACK_NEED_SERVICE ?>">
        </label>

        <br>
        <br>
        <input type="submit" id="submit">

    </form>
</main>

<?php
require('../views/footer.php');
?>
