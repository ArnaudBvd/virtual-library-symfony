<?php

namespace App\Entity;

use App\Entity\Trait\IdNameTrait;
use App\Repository\AuthorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorRepository::class)]
class Author
{
    use IdNameTrait;
}
