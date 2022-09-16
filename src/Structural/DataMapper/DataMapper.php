<?php

namespace Structural\DataMapper;

class DataMapper
{
    public function __construct(private StorageManager $manager)
    {
    }

    public function findById(int $id): User
    {
        $user = $this->manager->find($id);

        return new User($user);
    }

    public function create(User $user): User
    {
        $user = $this->manager->save([
            "id" => $user->getId(),
            "name" => $user->getName(),
            "password" => $user->getPassword()
        ]);

        return new User($user);
    }
}
