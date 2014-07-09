<?php

namespace AppLas\AppLasSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warstwa
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppLas\AppLasSiteBundle\Entity\WarstwaRepository")
 */
class Warstwa
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
     * @ORM\Column(name="typ_obiektow", type="string", length=40)
     */
    private $typ_obiektow;

    /**
     * @var string
     *
     * @ORM\Column(name="dat_aktual", type="string", length=40)
     */
    private $dat_aktual;

    /**
     * @var integer
     *
     * @ORM\Column(name="uzytkownik_id", type="integer")
     */
    private $uzytkownik_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="czy_wyswietlany", type="integer")
     */
    private $czy_wyswietlany;

    /**
     * @var integer
     *
     * @ORM\Column(name="z_index", type="integer")
     */
    private $z_index;

    /**
     * @var integer
     *
     * @ORM\Column(name="ilosc_obiektow", type="integer")
     */
    private $ilosc_obiektow;


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
     * @return Warstwa
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
     * Set typ_obiektow
     *
     * @param string $typObiektow
     * @return Warstwa
     */
    public function setTypObiektow($typObiektow)
    {
        $this->typ_obiektow = $typObiektow;

        return $this;
    }

    /**
     * Get typ_obiektow
     *
     * @return string 
     */
    public function getTypObiektow()
    {
        return $this->typ_obiektow;
    }

    /**
     * Set dat_aktual
     *
     * @param string $datAktual
     * @return Warstwa
     */
    public function setDatAktual($datAktual)
    {
        $this->dat_aktual = $datAktual;

        return $this;
    }

    /**
     * Get dat_aktual
     *
     * @return string 
     */
    public function getDatAktual()
    {
        return $this->dat_aktual;
    }

    /**
     * Set uzytkownik_id
     *
     * @param integer $uzytkownikId
     * @return Warstwa
     */
    public function setUzytkownikId($uzytkownikId)
    {
        $this->uzytkownik_id = $uzytkownikId;

        return $this;
    }

    /**
     * Get uzytkownik_id
     *
     * @return integer 
     */
    public function getUzytkownikId()
    {
        return $this->uzytkownik_id;
    }

    /**
     * Set czy_wyswietlany
     *
     * @param integer $czyWyswietlany
     * @return Warstwa
     */
    public function setCzyWyswietlany($czyWyswietlany)
    {
        $this->czy_wyswietlany = $czyWyswietlany;

        return $this;
    }

    /**
     * Get czy_wyswietlany
     *
     * @return integer 
     */
    public function getCzyWyswietlany()
    {
        return $this->czy_wyswietlany;
    }

    /**
     * Set z_index
     *
     * @param integer $zIndex
     * @return Warstwa
     */
    public function setZIndex($zIndex)
    {
        $this->z_index = $zIndex;

        return $this;
    }

    /**
     * Get z_index
     *
     * @return integer 
     */
    public function getZIndex()
    {
        return $this->z_index;
    }

    /**
     * Set ilosc_obiektow
     *
     * @param integer $iloscObiektow
     * @return Warstwa
     */
    public function setIloscObiektow($iloscObiektow)
    {
        $this->ilosc_obiektow = $iloscObiektow;

        return $this;
    }

    /**
     * Get ilosc_obiektow
     *
     * @return integer 
     */
    public function getIloscObiektow()
    {
        return $this->ilosc_obiektow;
    }
}
