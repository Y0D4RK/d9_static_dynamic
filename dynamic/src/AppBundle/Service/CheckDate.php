<?php

namespace AppBundle\Service;

use AppBundle\Entity\Announcement;

/**
 * CheckDate - Service
 *
 */
class CheckDate{

    public function diff($object)
    {
        /** @var Announcement $object **/
        $announcementCreatedAt = new \DateTime($object->getCreatedAt());
        $now = new \DateTime('now');

        $interval = $announcementCreatedAt->diff($now);

        $diff = $interval->format("M");

        dump($diff); exit();

        return $diff;
    }
}