<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * Participation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParticipationRepository")
 * @UniqueEntity(
 *     fields={"announcement", "user"},
 *     errorPath="user",
 *     message="This user is already in use on that announcement"
 * )
 *
 */
class Participation
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Announcement", cascade={"all"}, fetch="EAGER")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $announcement;

    /**
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", cascade={"all"}, fetch="EAGER")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="to_hire", type="boolean")
     */
    private $toHire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }

    /**
     * @return mixed
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * @param mixed $announcement
     */
    public function setAnnouncement($announcement)
    {
        $this->announcement = $announcement;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return bool
     */
    public function isToHire()
    {
        return $this->toHire;
    }

    /**
     * @param bool $toHire
     */
    public function setToHire($toHire)
    {
        $this->toHire = $toHire;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }


    /**
     * Get toHire
     *
     * @return boolean
     */
    public function getToHire()
    {
        return $this->toHire;
    }
}
