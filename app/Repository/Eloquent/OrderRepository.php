<?php

namespace App\Repository\Eloquent;

use App\Models\Order;
use App\Repository\ServiceRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;


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
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

}