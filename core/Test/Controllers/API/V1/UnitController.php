<?php

namespace Core\Test\Controllers\API\V1;

use Core\Test\Requests\UnitRequest as FormRequest;
use Core\Test\Models\Unit as Model;
use Core\Test\Resources\UnitResource as Resource;

class UnitController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     * @param FormRequest $request
     * @param Model       $model
     * @param string      $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }
}
