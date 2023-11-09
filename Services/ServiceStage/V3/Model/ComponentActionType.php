<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ComponentActionType
{
    /**
     * Possible values of this enum
     */
    const START = 'start';
    const STOP = 'stop';
    const RESTART = 'restart';
    const SCALE = 'scale';
    const ROLLBACK = 'rollback';
    const CONTINUE_DEPLOY = 'continue_deploy';
    const CHECK_GRAY_RELEASE = 'check_gray_release';
    const MODIFY_GRAY_RULE = 'modify_gray_rule';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::START,
            self::STOP,
            self::RESTART,
            self::SCALE,
            self::ROLLBACK,
            self::CONTINUE_DEPLOY,
            self::CHECK_GRAY_RELEASE,
            self::MODIFY_GRAY_RULE,
        ];
    }
}

