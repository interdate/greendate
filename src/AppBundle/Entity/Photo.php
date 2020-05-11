<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="photos")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_valid", type="boolean")
     */
    private $isValid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_main", type="boolean")
     */
    private $isMain;





    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Photo
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Photo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isValid
     *
     * @param boolean $isValid
     * @return Photo
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;

        return $this;
    }

    /**
     * Get isValid
     *
     * @return boolean
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Set isMain
     *
     * @param boolean $isMain
     * @return Photo
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;

        return $this;
    }

    public function setCloudinary() {
        \Cloudinary::config(array(
            "cloud_name" => "greendate",
            "api_key" => "333193447586872",
            "api_secret" => "rT6Kccy2ZHThaBlFzlOeLKE085o"
        ));
    }

    public function getFaceWebPath() {
        $this->setCloudinary();
        return cloudinary_url($this->name, array(
            "width" => 150, "height" => 150, "crop" => "thumb", "gravity" => "face"//, "radius" => 20
        ));
    }

    public function getWebPath() {
        $this->setCloudinary();
        return cloudinary_url($this->name, array(
            "width" => 500, "height" => 500, "crop" => "fit"
        ));
    }

    /**
     * Get isMain
     *
     * @return boolean
     */
    public function getIsMain()
    {
        return $this->isMain;
    }
}
