<?php

namespace AdminBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements UserInterface, \Serializable {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $levelEducation;

    /**
     * @var string
     */
    private $yearBirth;
    
    /**
     * @var string
     */
    private $image;
    
    public function getUserName(){
        return $this->email;
    }

    public function getSalt() {
        return null;
    }

    public function getRoles() {
        return array('ROLE_USER, ROLE_ADMIN');
    }

    public function eraseCredentials() {
        
    }

    public function __toString() {
        return $this->name;
    }
    
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password
        ));
    }
    
    public function unserialize($serialized) {
        list(
                $this->id,
                $this->email,
                $this->password
            ) = unserialize($serialized);
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname) {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return User
     */
    public function setNickname($nickname) {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname() {
        return $this->nickname;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city) {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set levelEducation
     *
     * @param string $levelEducation
     *
     * @return User
     */
    public function setLevelEducation($levelEducation) {
        $this->levelEducation = $levelEducation;

        return $this;
    }

    /**
     * Get levelEducation
     *
     * @return string
     */
    public function getLevelEducation() {
        return $this->levelEducation;
    }

    /**
     * Set yearBirth
     *
     * @param string $yearBirth
     *
     * @return User
     */
    public function setYearBirth($yearBirth) {
        $this->yearBirth = $yearBirth;

        return $this;
    }

    /**
     * Get yearBirth
     *
     * @return string
     */
    public function getYearBirth() {
        return $this->yearBirth;
    }

    


    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @var string
     */
    private $role;


    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
