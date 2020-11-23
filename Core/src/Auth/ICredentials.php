<?php


namespace HuaweiCloud\SDK\Core\Auth;

use HuaweiCloud\SDK\Core\SdkRequest;

interface ICredentials
{
    public static function setters();
    public static function getters();
    public function getUpdatePathParams();
    public function processAuthRequest(SdkRequest $request);
}