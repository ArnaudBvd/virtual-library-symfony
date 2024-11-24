<?php

namespace App\Entity;

use App\Entity\Trait\IdNameTrait;
use App\Repository\PublisherRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublisherRepository::class)]
class Publisher
{
    use IdNameTrait;
}
