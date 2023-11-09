<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ResourceType
{
    /**
     * Possible values of this enum
     */
    const VPC = 'vpc';
    const EIP = 'eip';
    const ELB = 'elb';
    const CCE = 'cce';
    const ECS = 'ecs';
    const _AS = 'as';
    const CSE = 'cse';
    const DCS = 'dcs';
    const RDS = 'rds';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VPC,
            self::EIP,
            self::ELB,
            self::CCE,
            self::ECS,
            self::_AS,
            self::CSE,
            self::DCS,
            self::RDS,
        ];
    }
}

