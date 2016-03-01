<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Subscriber;

interface SubscriberGenderTitleInterface extends SubscriberInterface
{
    const
        GENDER_MALE = 'male',
        GENDER_FEMALE = 'female',
        GENDER_COMPANY = 'company',
        TITLE_FORMAL = 'formal',
        TITLE_INFORMAL = 'informal'
    ;

    /**
     * @return boolean
     */
    public function isFemale();

    /**
     * @return boolean
     */
    public function isMale();

    /**
     * @return boolean
     */
    public function isCompany();

    /**
     * @return boolean
     */
    public function isFormalTitle();

    /**
     * @return boolean
     */
    public function isInformalTitle();

    /**
     * @return string
     */
    public function getGender();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @return string
     */
    public function getCompanyname();
}
