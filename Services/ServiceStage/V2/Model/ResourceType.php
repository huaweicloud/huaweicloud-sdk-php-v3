<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ResourceType
{
    /**
     * Possible values of this enum
     */
    const SECURITY_GROUP = 'security_group';
    const EIP = 'eip';
    const ELB = 'elb';
    const CCE = 'cce';
    const CCI = 'cci';
    const ECS = 'ecs';
    const _AS = 'as';
    const CSE = 'cse';
    const DCS = 'dcs';
    const RDS = 'rds';
    const PVC = 'pvc';
    const APM = 'apm';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SECURITY_GROUP,
            self::EIP,
            self::ELB,
            self::CCE,
            self::CCI,
            self::ECS,
            self::_AS,
            self::CSE,
            self::DCS,
            self::RDS,
            self::PVC,
            self::APM,
        ];
    }
}

