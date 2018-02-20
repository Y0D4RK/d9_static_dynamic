<?php


namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Announcement;
use UserBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $users = array(
                    [
                        "email" => "gauthier@gmail.com",
                        "username" => "gauthier",
                        "password" => "1234"
                    ],
                    [
                        "email" => "cyriaque@gmail.com",
                        "username" => "cyriaque",
                        "password" => "1234"
                    ],
                    [
                        "email" => "victor@gmail.com",
                        "username" => "victor",
                        "password" => "1234"
                    ],
                    [
                        "email" => "steven@gmail.com",
                        "username" => "steven",
                        "password" => "1234"
                    ],
                    [
                        "email" => "maxence@gmail.com",
                        "username" => "maxence",
                        "password" => "1234"
                    ]
        );


        foreach ($users as $user){
            $boolRand = mt_rand(0, 1);
            $userManager = $this->container->get('fos_user.user_manager');
            $account = $userManager->createUser();
            $account->setUsername($user['username']);
            $account->setEmail($user['email']);
            $account->setPlainPassword($user['password']);
            $account->setEnabled($boolRand);
            $userManager->updateUser($account, true);

            $this->addReference('user', $account);
            $manager->persist($account);
        }

        $manager->flush();


    }
}

class AnnouncemenentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $users = $manager->getRepository('UserBundle:User')->findAll();

//        $userManager = $this->container->get('fos_user.user_manager');
//        $account = $userManager->createUser();

        for ($i = 0; $i < 5; $i++) {
            $enabled = mt_rand(0, 1);
            $volume = mt_rand(1, 50);

            $userManager = $this->container->get('fos_user.user_manager');

            $announcement = new Announcement();
            $announcement->setLabel('announcement '.$i);
            $announcement->setDescription('description '.$i);
            $announcement->setUser($this->getReference('user'));
            $announcement->setEnabled($enabled);
            $announcement->setAddressOut('Address  out '.$i);
            $announcement->setVolumeOut($volume);
            $announcement->setVolumeScaleOut('L');
            $announcement->setParkingOut(0);
            $announcement->setElevatorOut(1);
            $announcement->setAddressIn('Address in '.$i);
            $announcement->setVolumeIn($volume);
            $announcement->setVolumeScaleIn('L');
            $announcement->setParkingIn(1);
            $announcement->setElevatorIn(1);
            $announcement->setDealDays('10/10/2018|10/05/2018');
            $announcement->setPricePerHourPerUser(mt_rand(5, 20));

            $manager->persist($announcement);
        }

        $manager->flush();
    }
}


