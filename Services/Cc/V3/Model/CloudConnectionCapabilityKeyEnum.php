<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class CloudConnectionCapabilityKeyEnum
{
    /**
     * Possible values of this enum
     */
    const V2 = 'v2';
    const V3 = 'v3';
    const BILLING_MODE_PERIOD_REDUCE = 'billing_mode_period_reduce';
    const BILLING_MODE_DEMAND = 'billing_mode_demand';
    const BWP95 = 'bwp95';
    const BWP95_AVG = 'bwp95Avg';
    const NETWORK_QUALITY = 'network-quality';
    const ER = 'er';
    const DOMAIN_BANDWIDTH = 'domain_bandwidth';
    const IPV6 = 'ipv6';
    const IPV6_SUPPORT_REGIONS = 'ipv6_support_regions';
    const ENTERPRISE_CLOUD_CONNECTION_IS_SUPPORT = 'enterprise-cloud-connection.is-support';
    const ENTERPRISE_CLOUD_CONNECTION_SUPPORT_SITES = 'enterprise-cloud-connection.support-sites';
    const ENTERPRISE_CLOUD_CONNECTION_SEGMENT_IS_SUPPORT = 'enterprise-cloud-connection-segment.is-support';
    const ENTERPRISE_CLOUD_CONNECTION_DC_ATTACHMENT_IS_SUPPORT = 'enterprise-cloud-connection-dc-attachment.is-support';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::V2,
            self::V3,
            self::BILLING_MODE_PERIOD_REDUCE,
            self::BILLING_MODE_DEMAND,
            self::BWP95,
            self::BWP95_AVG,
            self::NETWORK_QUALITY,
            self::ER,
            self::DOMAIN_BANDWIDTH,
            self::IPV6,
            self::IPV6_SUPPORT_REGIONS,
            self::ENTERPRISE_CLOUD_CONNECTION_IS_SUPPORT,
            self::ENTERPRISE_CLOUD_CONNECTION_SUPPORT_SITES,
            self::ENTERPRISE_CLOUD_CONNECTION_SEGMENT_IS_SUPPORT,
            self::ENTERPRISE_CLOUD_CONNECTION_DC_ATTACHMENT_IS_SUPPORT,
        ];
    }
}

