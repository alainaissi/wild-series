<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{

    // const PROGRAMS = [
    //     [
    //         "title" => "Ozark",
    //         "synopsis" => "Après qu'une opération de blanchiment d'argent pour un cartel mexicain de la drogue a mal tourné, le conseiller financier Marty Byrde, propose de faire amende honorable en mettant en place une opération de blanchiment plus importante dans la région du lac des Ozarks, au centre du Missouri.",
    //         "category" => "category_Action",
    //     ],
    //     [
    //         "title" => "Euphoria",
    //         "synopsis" => "",
    //         "category" => "category_Action",
    //     ],
    //     [
    //         "title" => 'Breaking Bad',
    //         "synopsis" => "",
    //         "category" => "category_Fantastique",
    //     ],
    //     [
    //         "title" => 'Black Mirror',
    //         "synopsis" => "",
    //         "category" => "category_Horreur",
    //     ],
    //     [
    //         "title" => 'Succesion',
    //         "synopsis" => "",
    //         "category" => "category_Aventure",
    //     ]
    // ];

    // public function load(ObjectManager $manager)
    // {
    //     foreach (self::PROGRAMS ." (title, synopsis, category_id) VALUES (:title, :synopsis, :category_id)") {
    //     $program = new Program();
    //     $program->setTitle($programName);
    //     $program->setSynopsis("Après qu'une opération de blanchiment d'argent pour un cartel mexicain de la drogue a mal tourné, le conseiller financier Marty Byrde, propose de faire amende honorable en mettant en place une opération de blanchiment plus importante dans la région du lac des Ozarks, au centre du Missouri.");
    //     $program->setCategory($this->getReference('category_Action'));
    //     $manager->persist($program);
    //     }
    //     $manager->flush();
    // }

    public function load(ObjectManager $manager)
    {
        $program1 = new Program();
        $program1->setTitle('Ozark');
        $program1->setSynopsis("Après qu'une opération de blanchiment d'argent pour un cartel mexicain de la drogue a mal tourné, le conseiller financier Marty Byrde, propose de faire amende honorable en mettant en place une opération de blanchiment plus importante dans la région du lac des Ozarks, au centre du Missouri.");
        $program1->setCategory($this->getReference('category_Action'));
        $manager->persist($program1);
        $program2 = new Program();
        $program2->setTitle('Euphoria');
        $program2->setSynopsis("Euphoria explore le quotidien d'un groupe de lycéens américains qui noient leurs problèmes dans le sexe, l'alcool et la drogue.");
        $program2->setCategory($this->getReference('category_Action'));
        $manager->persist($program2);
        $program3 = new Program();
        $program3->setTitle('Breaking Bad');
        $program3->setSynopsis("Walter White, un professeur de chimie surqualifié et père de famille, qui, ayant appris qu'il est atteint d'un cancer du poumon en phase terminale, sombre dans le crime pour assurer l'avenir financier de sa famille.");
        $program3->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program3);
        $program4 = new Program();
        $program4->setTitle('Black Mirror');
        $program4->setSynopsis("Black Mirror envisage un futur proche, voire immédiat, et interroge les conséquences inattendues que pourraient avoir les nouvelles technologies. Comment ces dernières influent sur la nature humaine de ses utilisateurs et inversement.");
        $program4->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program4);
        $program5 = new Program();
        $program5->setTitle('Succession');
        $program5->setSynopsis("La riche et puissante famille Roy, composée du patriarche Logan et de ses quatres enfants, contrôle l'un des plus gros conglomérats de médias du monde.");
        $program5->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program5);
        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
