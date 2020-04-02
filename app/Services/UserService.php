<?php


namespace App\Services;

use App\Criteria\UserRoleCriteria;
use App\Repositories\UserRepositoryEloquent;

class UserService
{
    /**
     * @param UserRepositoryEloquent $repo
     */
    public function __construct(UserRepositoryEloquent $repo)
    {
        $this->repo = $repo;
    }

    public function findByRole($userRole)
    {
        $criteria = new UserRoleCriteria();
        $criteria->setUserRole($userRole);
        $result = $this->repo->pushCriteria($criteria);
        $result=collect($result->get())->map(function ($value) {
            return collect($value)->only(['id', 'role']);
        });
        return $result;
    }
}
