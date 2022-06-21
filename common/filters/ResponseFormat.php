<?php

namespace common\filters;

use yii\base\ActionFilter;
use yii\data\DataProviderInterface;

class ResponseFormat extends ActionFilter
{
    public function afterAction($action, $result)
    {
        if (!$result instanceof DataProviderInterface) {
            return $result;
        }

        $pager = $result->getPagination();

        return [
            'items' => $result->getModels(),
            'pager' => [
                'page' => $pager->getPage() + 1,
                'pageSize' => $pager->getPageSize(),
            ],
        ];
    }
}
