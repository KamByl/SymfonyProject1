<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $adressStreet;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $adressSuite;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     */
    private $adressCity;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     */
    private $adressZipcode;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank
     */
    private $adressGeoLat;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank
     */
    private $adressGeoLng;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $companyName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $companyCatchPhrase;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $companyBs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdressStreet(): ?string
    {
        return $this->adressStreet;
    }

    public function setAdressStreet(string $adressStreet): self
    {
        $this->adressStreet = $adressStreet;

        return $this;
    }

    public function getAdressSuite(): ?string
    {
        return $this->adressSuite;
    }

    public function setAdressSuite(string $adressSuite): self
    {
        $this->adressSuite = $adressSuite;

        return $this;
    }

    public function getAdressCity(): ?string
    {
        return $this->adressCity;
    }

    public function setAdressCity(string $adressCity): self
    {
        $this->adressCity = $adressCity;

        return $this;
    }

    public function getAdressZipcode(): ?string
    {
        return $this->adressZipcode;
    }

    public function setAdressZipcode(string $adressZipcode): self
    {
        $this->adressZipcode = $adressZipcode;

        return $this;
    }

    public function getAdressGeoLat(): ?string
    {
        return $this->adressGeoLat;
    }

    public function setAdressGeoLat(string $adressGeoLat): self
    {
        $this->adressGeoLat = $adressGeoLat;

        return $this;
    }

    public function getAdressGeoLng(): ?string
    {
        return $this->adressGeoLng;
    }

    public function setAdressGeoLng(string $adressGeoLng): self
    {
        $this->adressGeoLng = $adressGeoLng;

        return $this;
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

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyCatchPhrase(): ?string
    {
        return $this->companyCatchPhrase;
    }

    public function setCompanyCatchPhrase(string $companyCatchPhrase): self
    {
        $this->companyCatchPhrase = $companyCatchPhrase;

        return $this;
    }

    public function getCompanyBs(): ?string
    {
        return $this->companyBs;
    }

    public function setCompanyBs(string $companyBs): self
    {
        $this->companyBs = $companyBs;

        return $this;
    }
}
