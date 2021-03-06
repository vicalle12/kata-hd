<?php
declare(strict_types=1);

namespace App\Domain\Company;

use App\Domain\DomainException\DomainRecordNotFoundException;

class CompanyNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The company you requested does not exist.';
}
