<?php

namespace AppLas\AppLasSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uzytkownik
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppLas\AppLasSiteBundle\Entity\UzytkownikRepository")
 */
class Uzytkownik
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
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=255)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=40)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="haslo", type="string", length=40)
     */
    private $haslo;


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
     * Set nazwa
     *
     * @param string $nazwa
     * @return Uzytkownik
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string 
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Uzytkownik
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     * @return Uzytkownik
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Get haslo
     *
     * @return string 
     */
    public function getHaslo()
    {
        return $this->haslo;
    }
}
