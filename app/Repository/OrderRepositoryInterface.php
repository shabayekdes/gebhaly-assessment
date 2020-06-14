<?php

namespace App\Repository;

use App\Models\Order;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface OrderRepositoryInterface
{
   public function paginate(): LengthAwarePaginator;

   public function all(): Collection;
}