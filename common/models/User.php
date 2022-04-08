<?php

namespace common\models;

use yii\filters\RateLimitInterface;
use yii\web\IdentityInterface;

class User implements IdentityInterface, RateLimitInterface
{
    private $id;

    public static function findIdentity($id)
    {
        return new self($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
    }

    public function validateAuthKey($authKey)
    {
    }

    public function getRateLimit($request, $action)
    {
        return [1, 3];
    }

    public function loadAllowance($request, $action)
    {
        $allowance = apcu_fetch('ratelimit:'.$this->id);
        if (false === $allowance) {
            $allowance = $this->getRateLimit($request, $action)[0];
        }

        $updateTime = apcu_fetch('ratelimit_update_time:'.$this->id);
        if (false === $updateTime) {
            $updateTime = time();
        }

        return [$allowance, $updateTime];
    }

    public function saveAllowance($request, $action, $allowance, $timestamp)
    {
        apcu_store('ratelimit:'.$this->id, $allowance);
        apcu_store('ratelimit_update_time:'.$this->id, $timestamp);
    }
}
