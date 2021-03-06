<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use App\Application\Actions\Action;
use App\Domain\User\UserRepository;
use Psr\Log\LoggerInterface;

abstract class UserAction extends Action
{
    /**
     * @var UserRepository
     */
    protected $employeeRepository;

    /**
     * @param LoggerInterface $logger
     * @param UserRepository  $employeeRepository
     */
    public function __construct(LoggerInterface $logger, UserRepository $employeeRepository)
    {
        parent::__construct($logger);
        $this->employeeRepository = $employeeRepository;
    }
}
