<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SourceRepoType
{
    /**
     * Possible values of this enum
     */
    const GIT_HUB = 'GitHub';
    const GIT_LAB = 'GitLab';
    const GITEE = 'Gitee';
    const BITBUCKET = 'Bitbucket';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GIT_HUB,
            self::GIT_LAB,
            self::GITEE,
            self::BITBUCKET,
        ];
    }
}

