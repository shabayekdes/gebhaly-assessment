<?php

namespace App\Repository;

use App\Models\Order;
use Illuminate\Pagination\LengthAwarePaginator;

interface OrderRepositoryInterface
{
   public function paginate(): LengthAwarePaginator ;
}