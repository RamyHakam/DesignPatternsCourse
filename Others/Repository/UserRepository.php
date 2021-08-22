<?php

namespace Others\Repository;

class UserRepository extends EntityRepository implements UserRepositoryInterface
{
    private PersistenceInterface $persistence;
    private UserDataMapper $dataMapper;

    public function __construct(PersistenceInterface $persistence,UserDataMapper $dataMapper)
    {
        parent::__construct(User::class);
        $this->persistence = $persistence;
        $this->dataMapper = $dataMapper;
    }

    public function find(int $id): User
    {
      return $this->dataMapper::dataToDomain($this->persistence->retrieve($id));
    }

    public function save(User $user): bool
    {
        $userData = $this->dataMapper::domainToData($user);
        $this->persistence->persist($userData);
        return true;
    }

    public function remove(int $id): bool
    {
        $this->persistence->delete($id);
        return  true;
    }

}