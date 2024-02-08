<?php

/**
 * Class New_Guest
 * <p>The class represent a new guest. This class should validate the guest given information.</p>
 */

class New_Guest
{
    /*
     * @var bool Consent into taking pictures.
     */
    private bool $wantPhoto;
//
//    /*
//     * @var string Guest first name.
//     */
//    private string $firstName;
//
//    /*
//     * @var string Guest last name.
//     */
//    private string $lastName;
//
//    /*
//     * @var string Last four of Social Security Number
//     */
//    private string $ssn;
//
//    /*
//     * @var int Guest phone number.
//     */
//    private int $phoneNumber;
//
//    /*
//     * @var string Guest date of birth.
//     */
//    private string $birthDate;
//
//    /*
//     * @var string Guest email account.
//     */
//    private string $email;
//
//    /*
//     * @var bool Is guest a veteran.
//     */
//    private bool $isVeteran;
//
//    /*
//     * @var string Race of a guest.
//     */
//    private string $race;
//
//    /*
//     * @var int Number of family members did Guest bring.
//     */
//    private int $numberFamily;
//
//    /*
//     * @var bool To determine if the guest need breakfast.
//     */
//    private bool $needBreakfast;
//
//    /*
//     * @var bool To determine if the guest need lunch.
//     */
//    private bool $needLunch;
//
//    /*
//     * @var bool To determine if the guest will do laundry.
//     */
//    private bool $needLaundry;
//
//    /*
//     * @var bool To determine if the guest needs a bike.
//     */
//    private bool $needBicycle;
//
//    /*
//     * @var string How the guest found out about WayStation.
//     */
//    private string $foundOutWay;
//
//    /*
//     * @var string Where the guest has been sleeping.
//     */
//    private string $stayingSleeping; # Question 1-16 are require
//
//    /*
//     * @var string The guest is sleeping at their house.
//     */
//    private string $sleepHome;
//
//    /*
//     * @var string Why the guest consider themselves homeless.
//     */
//    private string $considerHomeless;
//
//    /*
//     * @var string What services the guest are interested in.
//     */
//    private string $interestedChoices; #question 19 require
//
//    /*
//     * @var string What service they are interested in that was not mention.
//     */
//    private string $serviceNeed;

    public function __construct(
        bool $wantPhoto
    )
    {
        $this->wantPhoto = $wantPhoto;
    }

    public static function validateWantPhoto(mixed $photo): bool{
        if ($photo !== null){
            return True;
        }
        return False;
    }

}
