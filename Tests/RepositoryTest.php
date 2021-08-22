<?php

namespace Tests;

use Others\Repository\ArrayEntityManager;
use Others\Repository\PersistenceInterface;
use Others\Repository\User;
use Others\Repository\UserDataMapper;
use Others\Repository\UserRepository;
use Others\Repository\UserRepositoryInterface;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    private PersistenceInterface $persistence;
    private UserRepositoryInterface $userRepository;

    public function testCanFindUserById()
    {
        $user = $this->userRepository->find(1);
        self::assertInstanceOf(User::class, $user);
        self::assertEquals('ahmed', $user->getName());
    }

    public function testCanSaveUserById()
    {
        $newUser = new User();
        $newUser->setName('ramy')
            ->setEmail('ramy@test.com')
            ->setPassword('$)$(R(R');
        self::assertTrue($this->userRepository->save($newUser));

        $user = $this->userRepository->find(4);
        self::assertInstanceOf(User::class, $user);
        self::assertEquals('ramy', $user->getName());
    }

    protected function setUp(): void
    {
        $dataSource = [
            1 => ['name' => 'ahmed', 'email' => 'ahmed@test.com', 'password' => '####'],
            2 => ['name' => 'mohamed', 'email' => 'mohamed@test.com', 'password' => '#)$(2S##'],
            3 => ['name' => 'Mona', 'email' => 'mona@test.com', 'password' => '#$#@$']];
        $this->persistence = new ArrayEntityManager($dataSource);
        $this->userRepository = new UserRepository($this->persistence, new UserDataMapper());
    }


}