<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class UserRoleCriteria.
 *
 * @package namespace App\Criteria;
 */
class UserRoleCriteria implements CriteriaInterface
{
    private $userRole;

    public function setUserRole($userRole): void
    {
        $this->userRole = $userRole;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        if ($this->userRole){
            $model = $model->where('role', '=', $this->userRole);
        }
        return $model;
    }
}
