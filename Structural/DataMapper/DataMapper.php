<?php


namespace Structural\DataMapper;


class DataMapper
{
    /**
     * @var StorageManager
     */
    private $manager;

    public function __construct(StorageManager $manager)
    {
        $this->manager = $manager;
    }

    public function findById(string $id)
    {
        return $this->manager->find($id);
    }

    public function saveUser(User $user)
    {
        return $this->manager->save(
            [$user->getId() => ['userName' => $user->getUserName(), 'password' => $user
                ->getPassword()]]);
    }
}