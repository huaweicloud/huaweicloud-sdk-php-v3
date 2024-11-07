<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SiteNetworkSpecificationEnum
{
    /**
     * Possible values of this enum
     */
    const SITE_NETWORK_IS_SUPPORT = 'site-network.is-support';
    const SITE_NETWORK_IS_SUPPORT_ENTERPRISE_PROJECT = 'site-network.is-support-enterprise-project';
    const SITE_NETWORK_IS_SUPPORT_TAG = 'site-network.is-support-tag';
    const SITE_NETWORK_IS_SUPPORT_INTRA_REGION = 'site-network.is-support-intra-region';
    const SITE_NETWORK_SUPPORT_TOPOLOGIES = 'site-network.support-topologies';
    const SITE_NETWORK_SUPPORT_REGIONS = 'site-network.support-regions';
    const SITE_NETWORK_SUPPORT_DSCP_REGIONS = 'site-network.support-dscp-regions';
    const SITE_NETWORK_SUPPORT_FREEZE_REGIONS = 'site-network.support-freeze-regions';
    const SITE_NETWORK_SUPPORT_LOCATIONS = 'site-network.support-locations';
    const SITE_CONNECTION_BANDWIDTH_SIZE_RANGE = 'site-connection-bandwidth.size-range';
    const SITE_CONNECTION_BANDWIDTH_CHARGE_MODE = 'site-connection-bandwidth.charge-mode';
    const SITE_CONNECTION_BANDWIDTH_FREE_LINE = 'site-connection-bandwidth.free-line';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SITE_NETWORK_IS_SUPPORT,
            self::SITE_NETWORK_IS_SUPPORT_ENTERPRISE_PROJECT,
            self::SITE_NETWORK_IS_SUPPORT_TAG,
            self::SITE_NETWORK_IS_SUPPORT_INTRA_REGION,
            self::SITE_NETWORK_SUPPORT_TOPOLOGIES,
            self::SITE_NETWORK_SUPPORT_REGIONS,
            self::SITE_NETWORK_SUPPORT_DSCP_REGIONS,
            self::SITE_NETWORK_SUPPORT_FREEZE_REGIONS,
            self::SITE_NETWORK_SUPPORT_LOCATIONS,
            self::SITE_CONNECTION_BANDWIDTH_SIZE_RANGE,
            self::SITE_CONNECTION_BANDWIDTH_CHARGE_MODE,
            self::SITE_CONNECTION_BANDWIDTH_FREE_LINE,
        ];
    }
}

