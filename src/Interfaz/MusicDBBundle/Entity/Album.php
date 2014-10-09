<?php

namespace Interfaz\MusicDBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Album
 *
 * @ORM\Table(name="album", indexes={@ORM\Index(name="fk_album_artist_idx", columns={"artist_idartist"}), @ORM\Index(name="fk_album_genre1_idx", columns={"genre_idgenre"})})
 * @ORM\Entity
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idalbum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalbum;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     * @Assert\Length(
     *      min = 2,
     *      max = 5,
     *      minMessage = "mínimo 2 caracteres",
     *      maxMessage = "máximo 5 caracteres"
     * )
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer", nullable=true)
     */
    private $rate = '0';

    /**
     * @var \Artist
     *
     * @ORM\ManyToOne(targetEntity="Artist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artist_idartist", referencedColumnName="idartist")
     * })
     */
    private $artistartist;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genre_idgenre", referencedColumnName="idgenre")
     * })
     */
    private $genregenre;



    /**
     * Get idalbum
     *
     * @return integer 
     */
    public function getIdalbum()
    {
        return $this->idalbum;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Album
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
     * Set rate
     *
     * @param integer $rate
     * @return Album
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set artistartist
     *
     * @param \Interfaz\MusicDBBundle\Entity\Artist $artistartist
     * @return Album
     */
    public function setArtistartist(\Interfaz\MusicDBBundle\Entity\Artist $artistartist = null)
    {
        $this->artistartist = $artistartist;

        return $this;
    }

    /**
     * Get artistartist
     *
     * @return \Interfaz\MusicDBBundle\Entity\Artist 
     */
    public function getArtistartist()
    {
        return $this->artistartist;
    }

    /**
     * Set genregenre
     *
     * @param \Interfaz\MusicDBBundle\Entity\Genre $genregenre
     * @return Album
     */
    public function setGenregenre(\Interfaz\MusicDBBundle\Entity\Genre $genregenre = null)
    {
        $this->genregenre = $genregenre;

        return $this;
    }

    /**
     * Get genregenre
     *
     * @return \Interfaz\MusicDBBundle\Entity\Genre 
     */
    public function getGenregenre()
    {
        return $this->genregenre;
    }
}
