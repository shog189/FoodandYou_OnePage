<?php
/**
 * Created by PhpStorm.
 * User: criss
 * Date: 07/02/17
 * Time: 15:24
 */

namespace FY\ValentineBundle\Entity;


class Form
{

    protected $firstName;
    protected $lastName;
    protected $authorEmail;
    protected $authorPhone;
    protected $city;
    protected $comment;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }

    public function getAuthorPhone()
    {
        return $this->authorPhone;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setAuthorEmail($authorEmail)
    {
        $this->authorEmail = $authorEmail;
    }

    public function setAuthorPhone($authorPhone)
    {
        $this->authorPhone = $authorPhone;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

}