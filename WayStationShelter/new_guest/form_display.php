<!-- WayStationShelter    Blue Lights Team -->
<!-- Question 1,8,9,10,11,12,13,14,15,16,17,19 needs const -->
<?php
require('../views/header.php');
?>
<main>
    <form action="index.php" method="get">
        <h2>First Time Guests</h2>
        <p>We want every guest to have a positive experience at WayStation which is why we need your
            agreement on the following guidelines in order to provide an orderly, productive, and positive
            environment.</p>
        <p>1. I agree not to bring weapons into the facility. A complete list of weapons is available at the
            reception desk.</p>
        <p>2. I agree to refrain from using threatening or abusive language and behaviors towards other
            guests, staff, and volunteers. Such behaviors include intimidation, slapping, hitting, spitting,
            pushing, throwing objects, or other behaviors which create an unsafe environment for our
            guests.</p>
        <p>3. I agree to refrain from using discriminatory speech that targets race, ethnicity, national
            origin, sexual orientation, gender, gender identity, religious affiliation, age, and disability.</p>
        <p>4. I agree to care for and treat WayStation property with respect.</p>
        <p>5. I understand WayStation is not responsible for any stolen items while on the premises,
            including personal items in an assigned locker.</p>
        <p>6. I understand that if I leave WayStation without clearing out my locker, WayStation staff is
            required to clear it out and hold it for 3 days. After, the items will be donated.</p>
        <p>7. I agree to comply with federal, state, and local laws while on WayStation property.</p>
        <p>8. I agree to smoke in WayStation’s outdoor designated smoking area only.</p>
        <p>9. I agree to keep WayStation drug and alcohol-free.</p>
        <p>10. I understand I am solely responsible for my children at all times.</p>
        <p>11. I understand staff are not allowed to transport guests in their vehicles.</p>
        <p>12. I understand that my presence on WayStation property outside of operating hours could
            constitute trespassing. Guests are allowed on the property when we are open. Our hours of
            operation are 8:30 a.m. to 4 p.m., Monday through Friday and we are closed for all federal
            holidays. We appreciate your cooperation.</p>
        <p>13. I understand that failure to comply with WayStation policy, procedures, or staff’s
            instruction, could result in denial of services.</p>
        <p>14. I agree to indemnify and hold harmless WayStation and Micah 6:8 Initiative staff,
            volunteers and board of directors for any loss, harm or injury resulting from use of
            WayStation and its services.</p>
        <p>15. I agree to respect the confidentiality of other guests by refraining from taking video or
            photo of other guests while on WayStation premises.</p>
        <p>I want to use WayStation services and agree and have read and had the chance to ask
            questions about all of the above, and I agree to abide by these guidelines</p>

        <p>1. Optional Photo Release: I consent and authorize WayStation and Micah 6:8
            Initiative to use my likeness in any photograph, video, or other digital (photos) taken
            at WayStation or any of its events in any and all of its publications, including print,
            social media, or video. I irrevocably authorize WayStation and Micah 6:8 Initiative to
            copy, edit, enhance, crop, or otherwise alter any photo to use in publications. I also
            waive any right for approval or inspection of any photo or video. I understand and
            agree that all photos or videos are the property of WayStation and Micah 6:8
            Initiative and are not entitled to me. I understand and acknowledge that I am not
            entitled to any compensation or royalties with respect to the use of the photo or
            video.</p>
        <p>Mark only one.</p>
        <div id="photo">
            <label class="radio"><input type="radio" name="yes_no_photo" id="yes_photo">
                I agree to this photo release</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_photo" id="no_photo">
                I do not agree to this photo release</label>
        </div>

        <p>2. First Name</p>
        <label>
            <input type="text" name="<?php echo FIRST_NAME ?>" />
        </label>

        <p>3. Last Name</p>
        <label>
            <input type="text" name="<?php echo LAST_NAME ?>">
        </label>

        <p>4. Last 4 of my SSN</p>
        <label>
            <input type="text" name="<?php echo LAST_FOUR_SSN ?>">
        </label>

        <p>5. What is your phone number?</p>
        <label>
            <input type="text" name="<?php echo PHONE_NUMBER ?>">
        </label>

        <p>6. Date of Birth</p>
        <label>
            <input type="text" name="<?php echo BIRTH_DATE ?>">
        </label>

        <p>7. What is your email address?</p>
        <label>
            <input type="text" name="<?php echo EMAIL ?>">
        </label>

        <p>8. Are you a veteran?</p>
        <p>Mark only one.</p>
        <div id="veteran">
            <label class="radio"><input type="radio" name="yes_no_veteran" id="yes_veteran">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_veteran" id="no_veteran">
                No</label>
        </div>

        <p>9. What is your race?</p>
        <p>Mark only one.</p>
        <div id="race">
            <label class="radio"><input type="radio" name="race_option" id="asian">
                Asian</label>
            <br>
            <label class="radio"><input type="radio" name="race_option" id="black_African_American">
                Black or African American</label>
            <br>
            <label class="radio"><input type="radio" name="race_option" id="caucasian_white">
                Caucasian or White</label>
            <br>
            <label class="radio"><input type="radio" name="race_option" id="hispanic">
                Hispanic</label>
            <br>
            <label class="radio"><input type="radio" name="race_option" id="middle_eastern">
                Middle Eastern</label>
            <br>
            <label class="radio"><input type="radio" name="race_option" id="hawaiian_pacific_islander">
                Native Hawaiian or Pacific Islander</label>
            <br>
            <label class="radio"><input type="radio" name="race_option" id="mixed_race">
                Bi-racial or Mixed</label>
            <br>
            <label class="radio"><input type="radio" name="race_option" id="other_race">
                Other</label>
        </div>

        <p>10. How many other family members came with you today? (Spouse, children, etc.)</p>
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

        <p>11. Will you be eating breakfast at WayStation today?</p>
        <p>Mark only one.</p>
        <div id="breakfast">
            <label class="radio"><input type="radio" name="yes_no_breakfast" id="yes_breakfast">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_breakfast" id="no_breakfast">
                No</label>
        </div>

        <p>12. Will you be eating lunch at WayStation today?</p>
        <p>Mark only one.</p>
        <div id="lunch">
            <label class="radio"><input type="radio" name="yes_no_lunch" id="yes_lunch">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_lunch" id="no_lunch">
                No</label>
        </div>

        <p>13. Will you be doing laundry today?</p>
        <p>Mark only one.</p>
        <div id="laundry">
            <label class="radio"><input type="radio" name="yes_no_laundry" id="yes_laundry">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_laundry" id="no_laundry">
                No</label>
        </div>

        <p>14. Do you need a bicycle?</p>
        <p>Mark only one.</p>
        <div id="bicycle">
            <label class="radio"><input type="radio" name="yes_no_bicycle" id="yes_bicycle">
                Yes</label>
            <br>
            <label class="radio"><input type="radio" name="yes_no_bicycle" id="no_bicycle">
                No</label>
        </div>

        <p>15. I found out about WayStation...</p>
        <p>Check all that apply.</p>
        <div>
            <label for="from_flyer"><input type="checkbox" id="from_flyer" name="found_out" value="from_flyer" />
                From a flyer someone gave me</label>
        </div>
        <div>
            <label for="from_friend"><input type="checkbox" id="from_friend" name="found_out" value="from_friend" />
                From a friend</label>
        </div>
        <div>
            <label for="from_church"><input type="checkbox" id="from_church" name="found_out" value="from_church" />
                From a local church</label>
        </div>
        <div>
            <label for="from_school"><input type="checkbox" id="from_school" name="found_out" value="from_school" />
                From my student's school</label>
        </div>
        <div>
            <label for="from_services">
                <input type="checkbox" id="from_services" name="found_out" value="from_services" />
                From another social services organization</label>
        </div>
        <div>
            <label for="from_online"><input type="checkbox" id="from_online" name="found_out" value="from_online" />
                I found it online</label>
        </div>
        <div>
            <label for="from_211"><input type="checkbox" id="from_211" name="found_out" value="from_211" />
                I called 211</label>
        </div>
        <div>
            <label for="from_other"><input type="checkbox" id="from_other" name="found_out" value="from_other" />
                Other: <input type="text" name="from_other_text"</label>
        </div>

        <p>16. Over the last few nights, I have been...</p>
        <p>Mark only one.</p>
        <div id="sleep">
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_shelter">
                Staying at homeless shelter</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_vehicle">
                Sleeping in a vehicle</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_hotel">
                Staying at a hotel/Airbnb, etc., that I pay for</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_hotel_paid_for">
                Staying at a hotel/Airbnb, etc., that a church or other organization paid for</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_someone_home">
                Staying in someone else's home</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_tent">
                Sleeping in a tent</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_abandoned_home">
                Sleeping in an abandoned house or building</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_outside">
                Sleeping outside</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_other">
                Sleeping in some other place not mentioned above that is not my permanent home</label>
            <br>
            <label class="radio"><input type="radio" name="sleep_location" id="sleep_home">
                Sleeping in my home</label>
        </div>

        <p>17. If you answered the above "Sleeping in my home," check any that apply</p>
        <p>Check all that apply.</p>
        <div>
            <label for="eviction_notice">
                <input type="checkbox" id="eviction_notice" name="sleep_my_home" value="eviction_notice" />
                I have received an eviction notice</label>
        </div>
        <div>
            <label for="no_utility">
                <input type="checkbox" id="no_utility" name="sleep_my_home" value="no_utility" />
                My water, gas or electricity has been cut off</label>
        </div>
        <div>
            <label for="overcrowded">
                <input type="checkbox" id="overcrowded" name="sleep_my_home" value="overcrowded" />
                My home is overcrowded (ex. 10 people living in a 2-bedroom house)</label>
        </div>
        <div>
            <label for="not_safe_home">
                <input type="checkbox" id="not_safe_home" name="sleep_my_home" value="not_safe_home" />
                I am not safe in my own home (I have suffered abuse in my home)</label>
        </div>

        <p>18. I consider myself homeless because...</p>
        <label>
            <input type="text" name="<?php echo CONSIDER_HOMELESS ?>">
        </label>

        <p>19. Of all of the services that WayStation can offer me, I am interested in these (check
            all that apply)</p>
        <p class="instructions">Check all that apply.</p>

        <!-- *** Not super familiar with HTML and if I'm naming the variables in for=, id=, name=, value= correctly. *** -->
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

        <p>20. I need this service that wasn't mentioned above</p>
        <label>
            <input type="text" name="<?php echo NEED_SERVICE ?>">
        </label>
        <br>
        <br>
        <input type="submit" id="submit">

    </form>
</main>
<?php
require('../views/footer.php');
?>
