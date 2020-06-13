<?php

namespace App\Repository\Eloquent;

use App\Models\Service;
use App\Repository\ServiceRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
{
   /**
    * VideoRepository constructor.
    *
    * @param Video $model
    */
   public function __construct(Video $model)
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