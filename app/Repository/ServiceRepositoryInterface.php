<?php

namespace App\Repository;

use App\Models\Service;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ServiceRepositoryInterface
{
   public function paginate(): LengthAwarePaginator ;

   public function all(): Collection;
}