<?php

namespace AppLas\AppLasSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Punkt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppLas\AppLasSiteBundle\Entity\PunktRepository")
 */
class Punkt
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
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="dat_aktual", type="string", length=40)
     */
    private $dat_aktual;

    /**
     * @var integer
     *
     * @ORM\Column(name="obiekt_id", type="bigint")
     */
    private $obiekt_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="kolejnosc", type="integer")
     */
    private $kolejnosc;


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
     * Set longitude
     *
     * @param float $longitude
     * @return Punkt
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Punkt
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set dat_aktual
     *
     * @param string $datAktual
     * @return Punkt
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
     * Set obiekt_id
     *
     * @param integer $obiektId
     * @return Punkt
     */
    public function setObiektId($obiektId)
    {
        $this->obiekt_id = $obiektId;

        return $this;
    }

    /**
     * Get obiekt_id
     *
     * @return integer 
     */
    public function getObiektId()
    {
        return $this->obiekt_id;
    }

    /**
     * Set kolejnosc
     *
     * @param integer $kolejnosc
     * @return Punkt
     */
    public function setKolejnosc($kolejnosc)
    {
        $this->kolejnosc = $kolejnosc;

        return $this;
    }

    /**
     * Get kolejnosc
     *
     * @return integer 
     */
    public function getKolejnosc()
    {
        return $this->kolejnosc;
    }
}
