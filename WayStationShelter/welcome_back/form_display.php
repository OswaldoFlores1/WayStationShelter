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
        <p class="instructions">Mark only one.</p>
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
        <p class="instructions">Mark only one.</p>
        <div id="breakfast">
            <label class="radio"><input type="radio" name="yes_no_breakfast" id="yes_breakfast">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_breakfast" id="no_breakfast">
                No</label>
        </div>

        <p>6. Will you be eating lunch at WayStation today?</p>
        <p class="instructions">Mark only one.</p>
        <div id="lunch">
            <label class="radio"><input type="radio" name="yes_no_lunch" id="yes_lunch">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_lunch" id="no_lunch">
                No</label>
        </div>

        <p>7. Will you be doing laundry today?</p>
        <p class="instructions">Mark only one.</p>
        <div id="laundry">
            <label class="radio"><input type="radio" name="yes_no_laundry" id="yes_laundry">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_laundry" id="no_laundry">
                No</label>
        </div>
<!--    *** Note: Some of these are different, will need to change them later.     -->
        <p>8. Today I would like some assistance with these things only (check what you would
            like to prioritize for today)</p>
        <p class="instructions">Check all that apply.</p>
        <div>
            <label for="misc_services_food_from_here"><input type="checkbox" id="help_with_food_here" name="misc_services" value="food_from_here" />
                Getting something to eat and drink now</label>
        </div>
        <div>
            <label for="misc_services_food_togo"><input type="checkbox" id="help_with_food_togo" name="misc_services" value="food_togo" />
                Taking some food and drink with me</label>
        </div>
        <div>
            <label for="misc_services_change_of_clothes"><input type="checkbox" id="misc_services_change_of_clothes" name="misc_services" value="change_of_clothes" />
                Getting a change of clothes</label>
        </div>
        <div>
            <label for="misc_services_change_of_clothes"><input type="checkbox" id="misc_services_change_of_clothes" name="misc_services" value="change_of_clothes" />
                Getting a change of clothes</label>
        </div>
        <div>
            <label for="misc_services_laundry"><input type="checkbox" id="misc_services_laundry" name="misc_services" value="laundry" />
                Doing a load of laundry</label>
        </div>
        <div>
            <label for="misc_services_getting_more_clothes"><input type="checkbox" id="misc_services_getting_more_clothes" name="misc_services" value="getting_more_clothes" />
                Getting more than just one change of clothes
            </label>
        </div>
        <div>
            <label for="misc_services_shelter_as_po_box"><input type="checkbox" id="misc_services_shelter_as_po_box" name="misc_services" value="shelter_as_po_box" />
                Using WayStation as my "home" address and/or phone number
            </label>
        </div>
        <div>
            <label for="misc_services_id"><input type="checkbox" id="misc_services_id" name="misc_services" value="id" />
                Getting help with obtaining my birth certificate and/or ID
            </label>
        </div>
        <div>
            <label for="misc_services_food_stamps"><input type="checkbox" id="misc_services_food_stamps" name="misc_services" value="food_stamps" />
                Getting signed up for food stamps
            </label>
        </div>
        <div>
            <label for="misc_services_phone"><input type="checkbox" id="misc_services_phone" name="misc_services" value="phone"/>
                Getting a free phone
            </label>
        </div>
        <div>
            <label for="misc_services_housing_options"><input type="checkbox" id="misc_services_housing_options" name="misc_services" value="housing_options" />
                Learning about housing options
            </label>
        </div>
        <div>
            <label for="misc_services_safe_sleep"><input type="checkbox" id="misc_services_safe_sleep" name="misc_services" value="safe_sleep" />
                Finding someplace safe to sleep even tonight
            </label>
        </div>
        <div>
            <label for="misc_services_shower"><input type="checkbox" id="misc_services_shower" name="misc_services" value="shower" />
                Finding a place to take a shower
            </label>
        </div>
        <div>
            <label for="misc_services_attorney"><input type="checkbox" id="misc_services_attorney" name="misc_services" value="attorney" />
                Meeting with an attorney who can help me to settle my debts, get a divorce or separation from an abusive spouse, help me get my kids back, help me resolve some other legal problem.
            </label>
        </div>
        <div>
            <label for="misc_services_locker"><input type="checkbox" id="misc_services_locker" name="misc_services" value="locker" />
                Putting my things in a locker so I can get some things done without carrying all my stuff.
            </label>
        </div>
        <div>
            <label for="misc_services_mental_health"><input type="checkbox" id="misc_services_mental_health" name="misc_services" value="mental_health"/>
                Mental health counseling, treatment or medication management.
            </label>
        </div>
        <div>
            <label for="misc_services_physical_health"><input type="checkbox" id="misc_services_physical_health" name="misc_services" value="physical_health" />
                Help with a physical health problem
            </label>
        </div>
        <div>
            <label for="misc_services_daycare"><input type="checkbox" id="misc_services_daycare" name="misc_services" value="daycare" />
                Getting my kids daycare so I can work
            </label>
        </div>
        <div>
            <label for="misc_services_child_resources"><input type="checkbox" id="misc_services_child_resources" name="misc_services" value="child_resources" />
                Resources for my children
            </label>
        </div>
        <div>
            <label for="misc_services_evicted"><input type="checkbox" id="misc_services_evicted" name="misc_services" value="evicted" />
                Help to prevent me from getting evicted
            </label>
        </div>
        <div>
            <label for="misc_services_utilities"><input type="checkbox" id="misc_services_utilities" name="misc_services" value="utilities" />
                Help getting my power/gas/water turned back on
            </label>
        </div>
        <div>
            <label for="misc_services_find_job"><input type="checkbox" id="misc_services_find_job" name="misc_services" value="find_job" />
                Help finding a job
            </label>
        </div>
        <div>
            <label for="misc_services_resume"><input type="checkbox" id="misc_services_resume" name="misc_services" value="resume"/>
                Help making a resume and signing up for online job search
            </label>
        </div>
        <div>
            <label for="misc_services_smoking"><input type="checkbox" id="misc_services_smoking" name="misc_services" value="smoking" />
                Help quitting smoking
            </label>
        </div>
        <div>
            <label for="misc_services_addiction"><input type="checkbox" id="misc_services_addiction" name="misc_services" value="addiction" />
                Help breaking out of an addiction
            </label>
        </div>
        <div>
            <!-- This is just a repeat of misc_services_mental_health ?? -->
            <label for="misc_services_thoughts"><input type="checkbox" id="misc_services_thoughts" name="misc_services" value="thoughts" />
                Someone to talk with to help me sort out my thoughts
            </label>
        </div>
        <div>
            <label for="misc_services_life_skills"><input type="checkbox" id="misc_services_life_skills" name="misc_services" value="life_skills"/>
                Learning life skills (for example: cook/eat more healthy, lose weight, how to manage money, file taxes,
                get a bank account, get a driver's license, make a will, car maintenance, and more)
            </label>
        </div>
        <div>
            <label for="misc_services_parenting_help"><input type="checkbox" id="misc_services_parenting_help" name="misc_services" value="parenting_help" />
                Parenting help
            </label>
        </div>
        <div>
            <!-- another mental health repeat? -->
            <label for="misc_services_counseling"><input type="checkbox" id="misc_services_counseling" name="misc_services" value="counseling" />
                Counseling
            </label>
        </div>
        <div>
            <label for="misc_services_bus_ticket"><input type="checkbox" id="misc_services_bus_ticket" name="misc_services" value="bus_ticket" />
                Getting a bus ticket to go to a friend/family member who has agreed to take me in
            </label>
        </div>
        <div>
            <label for="misc_services_transportation"><input type="checkbox" id="misc_services_transportation" name="misc_services" value="transportation" />
                Transportation to get to work or appointments
            </label>
        </div>
        <div>
            <label for="misc_services_disability"><input type="checkbox" id="misc_services_disability" name="misc_services" value="disability"/>
                Help getting on disability
            </label>
        </div>
        <div>
            <label for="misc_services_insurance"><input type="checkbox" id="misc_services_insurance" name="misc_services" value="insurance" />
                Help getting on Medicaid or some other insurance
            </label>
        </div>
        <div>
            <label for="misc_services_prescription"><input type="checkbox" id="misc_services_prescription" name="misc_services" value="prescription" />
                Getting my meds (I have a prescription but need help getting them)
            </label>
        </div>
        <div>
            <label for="misc_services_something_else"><input type="checkbox" id="misc_services_something_else" name="misc_services" value="something_else" />
                Something else (please specify below)
            </label>
        </div>

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
