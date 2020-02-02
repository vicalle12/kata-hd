<?php
declare(strict_types=1);

namespace App\Application\Actions\Employee;

use Psr\Http\Message\ResponseInterface as Response;

class ViewEmployeeAction extends EmployeeAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $userId = (int) $this->resolveArg('id');
        $user = $this->employeeRepository->findUserOfId($userId);

        $this->logger->info("User of id `${userId}` was viewed.");

        return $this->respondWithData($user);
    }
}
