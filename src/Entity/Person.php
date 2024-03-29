<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Model\User as FoseUser;
/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person extends FoseUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cities;

    /**
     * @ORM\Column(type="integer")
     */
    private $codePostal;

    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCities(): ?string
    {
        return $this->cities;
    }

    public function setCities(string $cities): self
    {
        $this->cities = $cities;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }
}
