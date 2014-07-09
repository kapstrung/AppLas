<?php

namespace AppLas\AppLasSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obiekt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppLas\AppLasSiteBundle\Entity\ObiektRepository")
 */
class Obiekt
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
     * @var integer
     *
     * @ORM\Column(name="warstwa_id", type="integer")
     */
    private $warstwa_id;

    /**
     * @var string
     *
     * @ORM\Column(name="dat_aktual", type="string", length=40)
     */
    private $dat_aktual;

    /**
     * @var string
     *
     * @ORM\Column(name="typ", type="string", length=40)
     */
    private $typ;

    /**
     * @var integer
     *
     * @ORM\Column(name="czy_wyswietlany", type="integer")
     */
    private $czy_wyswietlany;

    /**
     * @var integer
     *
     * @ORM\Column(name="ilosc_pkt", type="integer")
     */
    private $ilosc_pkt;


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
     * @return Obiekt
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
     * Set warstwa_id
     *
     * @param integer $warstwaId
     * @return Obiekt
     */
    public function setWarstwaId($warstwaId)
    {
        $this->warstwa_id = $warstwaId;

        return $this;
    }

    /**
     * Get warstwa_id
     *
     * @return integer 
     */
    public function getWarstwaId()
    {
        return $this->warstwa_id;
    }

    /**
     * Set dat_aktual
     *
     * @param string $datAktual
     * @return Obiekt
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
     * Set typ
     *
     * @param string $typ
     * @return Obiekt
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get typ
     *
     * @return string 
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set czy_wyswietlany
     *
     * @param integer $czyWyswietlany
     * @return Obiekt
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
     * Set ilosc_pkt
     *
     * @param integer $iloscPkt
     * @return Obiekt
     */
    public function setIloscPkt($iloscPkt)
    {
        $this->ilosc_pkt = $iloscPkt;

        return $this;
    }

    /**
     * Get ilosc_pkt
     *
     * @return integer 
     */
    public function getIloscPkt()
    {
        return $this->ilosc_pkt;
    }
}
