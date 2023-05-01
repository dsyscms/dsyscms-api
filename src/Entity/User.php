<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $user_name = null;

    #[ORM\Column(length: 255)]
    private ?string $user_password = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $login_ip;

    #[ORM\Column(length: 25, nullable: false, options: ['default' => ''])]
    private string $nickname;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->user_password;
    }

    public function setUserPassword(string $user_password): self
    {
        $this->user_password = $user_password;

        return $this;
    }

    public function getLoginIp()
    {
        return $this->login_ip;
    }

    public function setLoginIp($login_ip): self
    {
        $this->login_ip = $login_ip;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname($nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }
}
