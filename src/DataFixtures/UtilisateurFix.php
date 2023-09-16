<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $user1 = new Utilisateur();  
        $plaintextPassword = '123456';
        $user1->setEmail('testAdmin@mail.com');
        $user1->setRoles(['ROLE_ADMIN']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user1,
            $plaintextPassword
        );
        $user1->setPassword($hashedPassword);
        $manager->persist($user1);

        $user2 = new Utilisateur();  
        $plaintextPassword = '123456';
        $user2->setEmail('testVendeur@mail.com');
        $user2->setRoles(['ROLE_VENDEUR']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user2,
            $plaintextPassword
        );
        $user2->setPassword($hashedPassword);
        $manager->persist($user2);

        $user3 = new Utilisateur();  
        $plaintextPassword = '123456';
        $user3->setEmail('testModo@mail.com');
        $user3->setRoles(['ROLE_MODERATEUR']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user3,
            $plaintextPassword
        );
        $user3->setPassword($hashedPassword);
        $manager->persist($user3);

        $manager->flush();
    }
}