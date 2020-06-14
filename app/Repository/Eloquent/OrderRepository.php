<?php

namespace App\Repository\Eloquent;

use App\Models\Order;
use App\Repository\OrderRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
   /**
    * OrderRepository constructor.
    *
    * @param Order $model
    */
   public function __construct(Order $model)
   {
       parent::__construct($model);
   }

   /**
    * @return LengthAwarePaginator
    */
   public function paginate(): LengthAwarePaginator
   {
       return $this->model->orderBy('id', 'DESC')->paginate(10);    
   }

    /**
    * @return Collection
    */
    public function all(): Collection
    {
        return $this->model->all();    
    }

}