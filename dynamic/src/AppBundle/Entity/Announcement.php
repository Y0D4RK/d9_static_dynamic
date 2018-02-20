<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Announcement
 *
 * @ORM\Table(name="announcement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnouncementRepository")
 */
class Announcement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", cascade={"persist"}, fetch="EAGER")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     *
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Participation", mappedBy="announcement", cascade={"persist"})
     */
    private $participations;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var float
     *
     * @ORM\Column(name="price_per_hour_per_user", type="float", nullable=true)
     */
    protected $pricePerHourPerUser;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="address_out", type="string", length=255)
     */
    private $addressOut;

    /**
     * @var bool
     *
     * @ORM\Column(name="elevator_out", type="boolean")
     */
    private $elevatorOut;

    /**
     * @var float
     *
     * @ORM\Column(name="volume_out", type="float")
     */
    private $volumeOut;

    /**
     * @var string
     *
     * @ORM\Column(name="volume_scale_out", type="string")
     */
    private $volumeScaleOut;
    /**
     * @var bool
     *
     * @ORM\Column(name="parking_out", type="boolean")
     */
    private $parkingOut;

    /**
     * @var string
     *
     * @ORM\Column(name="address_in", type="string", length=255)
     */
    private $addressIn;

    /**
     * @var bool
     *
     * @ORM\Column(name="elevator_in", type="boolean")
     */
    private $elevatorIn;

    /**
     * @var float
     *
     * @ORM\Column(name="volume_in", type="float")
     */
    private $volumeIn;

    /**
     * @var string
     *
     * @ORM\Column(name="volume_scale_in", type="string")
     */
    private $volumeScaleIn;

    /**
     * @var bool
     *
     * @ORM\Column(name="parking_in", type="boolean")
     */
    private $parkingIn;

    /**
     * @var string
     *
     * @ORM\Column(name="dealDays",  type="string")
     */
    private $dealDays;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at",  type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at",  type="datetime", nullable=true)
     */
    private $updatedAt;


    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
        $this->participations = new ArrayCollection();
    }

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
     * Set label
     *
     * @param string $label
     *
     * @return Announcement
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Announcement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Announcement
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set addressOut
     *
     * @param string $addressOut
     *
     * @return Announcement
     */
    public function setAddressOut($addressOut)
    {
        $this->addressOut = $addressOut;

        return $this;
    }

    /**
     * Get addressOut
     *
     * @return string
     */
    public function getAddressOut()
    {
        return $this->addressOut;
    }

    /**
     * Set elevatorOut
     *
     * @param boolean $elevatorOut
     *
     * @return Announcement
     */
    public function setElevatorOut($elevatorOut)
    {
        $this->elevatorOut = $elevatorOut;

        return $this;
    }

    /**
     * Get elevatorOut
     *
     * @return boolean
     */
    public function getElevatorOut()
    {
        return $this->elevatorOut;
    }

    /**
     * Set volumeOut
     *
     * @param float $volumeOut
     *
     * @return Announcement
     */
    public function setVolumeOut($volumeOut)
    {
        $this->volumeOut = $volumeOut;

        return $this;
    }

    /**
     * Get volumeOut
     *
     * @return float
     */
    public function getVolumeOut()
    {
        return $this->volumeOut;
    }

    /**
     * Set parkingOut
     *
     * @param boolean $parkingOut
     *
     * @return Announcement
     */
    public function setParkingOut($parkingOut)
    {
        $this->parkingOut = $parkingOut;

        return $this;
    }

    /**
     * Get parkingOut
     *
     * @return boolean
     */
    public function getParkingOut()
    {
        return $this->parkingOut;
    }

    /**
     * Set addressIn
     *
     * @param string $addressIn
     *
     * @return Announcement
     */
    public function setAddressIn($addressIn)
    {
        $this->addressIn = $addressIn;

        return $this;
    }

    /**
     * Get addressIn
     *
     * @return string
     */
    public function getAddressIn()
    {
        return $this->addressIn;
    }

    /**
     * Set elevatorIn
     *
     * @param boolean $elevatorIn
     *
     * @return Announcement
     */
    public function setElevatorIn($elevatorIn)
    {
        $this->elevatorIn = $elevatorIn;

        return $this;
    }

    /**
     * Get elevatorIn
     *
     * @return boolean
     */
    public function getElevatorIn()
    {
        return $this->elevatorIn;
    }

    /**
     * Set volumeIn
     *
     * @param float $volumeIn
     *
     * @return Announcement
     */
    public function setVolumeIn($volumeIn)
    {
        $this->volumeIn = $volumeIn;

        return $this;
    }

    /**
     * Get volumeIn
     *
     * @return float
     */
    public function getVolumeIn()
    {
        return $this->volumeIn;
    }

    /**
     * Set parkingIn
     *
     * @param boolean $parkingIn
     *
     * @return Announcement
     */
    public function setParkingIn($parkingIn)
    {
        $this->parkingIn = $parkingIn;

        return $this;
    }

    /**
     * Get parkingIn
     *
     * @return boolean
     */
    public function getParkingIn()
    {
        return $this->parkingIn;
    }

    /**
     * Set dealDays
     *
     * @param \DateTime $dealDays
     *
     * @return Announcement
     */
    public function setDealDays($dealDays)
    {
        $this->dealDays = $dealDays;

        return $this;
    }

    /**
     * Get dealDays
     *
     * @return \DateTime
     */
    public function getDealDays()
    {
        return $this->dealDays;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Announcement
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Announcement
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set User
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Announcement
     */
    public function setUser(\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getParticipations()
    {
        return $this->participations;
    }

    /**
     * @param mixed $participations
     */
    public function setParticipations($participations)
    {
        $this->participations = $participations;
    }



    /**
     * Add participation
     *
     * @param \AppBundle\Entity\Participation $participation
     *
     * @return Announcement
     */
    public function addParticipation(\AppBundle\Entity\Participation $participation)
    {
        $this->participations[] = $participation;

        return $this;
    }

    /**
     * Remove participation
     *
     * @param \AppBundle\Entity\Participation $participation
     */
    public function removeParticipation(\AppBundle\Entity\Participation $participation)
    {
        $this->participations->removeElement($participation);
    }

    /**
     * @return mixed
     */
    public function getVolumeScaleOut()
    {
        return $this->volumeScaleOut;
    }

    /**
     * @param mixed $volumeScaleOut
     */
    public function setVolumeScaleOut($volumeScaleOut)
    {
        $this->volumeScaleOut = $volumeScaleOut;
    }

    /**
     * @return mixed
     */
    public function getVolumeScaleIn()
    {
        return $this->volumeScaleIn;
    }

    /**
     * @param mixed $volumeScaleIn
     */
    public function setVolumeScaleIn($volumeScaleIn)
    {
        $this->volumeScaleIn = $volumeScaleIn;
    }

    /**
     * Set pricePerHourPerUser
     *
     * @param float $pricePerHourPerUser
     *
     * @return Announcement
     */
    public function setPricePerHourPerUser($pricePerHourPerUser)
    {
        $this->pricePerHourPerUser = $pricePerHourPerUser;

        return $this;
    }

    /**
     * Get pricePerHourPerUser
     *
     * @return float
     */
    public function getPricePerHourPerUser()
    {
        return $this->pricePerHourPerUser;
    }
}
