<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class CentralNetworkCapabilityEnum
{
    /**
     * Possible values of this enum
     */
    const CENTRAL_NETWORK_IS_SUPPORT = 'central-network.is-support';
    const CENTRAL_NETWORK_IS_SUPPORT_ENTERPRISE_PROJECT = 'central-network.is-support-enterprise-project';
    const CENTRAL_NETWORK_IS_SUPPORT_TAG = 'central-network.is-support-tag';
    const CONNECTION_BANDWIDTH_SIZE_RANGE = 'connection-bandwidth.size-range';
    const CONNECTION_BANDWIDTH_CHARGE_MODE = 'connection-bandwidth.charge-mode';
    const ER_INSTANCE_SUPPORT_REGIONS = 'er-instance.support-regions';
    const ER_INSTANCE_SUPPORT_IPV6_REGIONS = 'er-instance.support-ipv6-regions';
    const ER_INSTANCE_SUPPORT_DSCP_REGIONS = 'er-instance.support-dscp-regions';
    const ER_INSTANCE_SUPPORT_SITES = 'er-instance.support-sites';
    const GDGW_ATTACHMENT_IS_SUPPORT = 'gdgw-attachment.is-support';
    const GDGW_ATTACHMENT_SUPPORT_REGIONS = 'gdgw-attachment.support-regions';
    const GDGW_ATTACHMENT_SUPPORT_SITES = 'gdgw-attachment.support-sites';
    const ER_ROUTE_TABLE_ATTACHMENT_IS_SUPPORT = 'er-route-table-attachment.is-support';
    const ER_ROUTE_TABLE_ATTACHMENT_SUPPORT_REGIONS = 'er-route-table-attachment.support-regions';
    const ER_ROUTE_TABLE_ATTACHMENT_SUPPORT_SITES = 'er-route-table-attachment.support-sites';
    const CLOUD_ALLIANCE_SUPPORT_REGIONS = 'cloud-alliance.support-regions';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CENTRAL_NETWORK_IS_SUPPORT,
            self::CENTRAL_NETWORK_IS_SUPPORT_ENTERPRISE_PROJECT,
            self::CENTRAL_NETWORK_IS_SUPPORT_TAG,
            self::CONNECTION_BANDWIDTH_SIZE_RANGE,
            self::CONNECTION_BANDWIDTH_CHARGE_MODE,
            self::ER_INSTANCE_SUPPORT_REGIONS,
            self::ER_INSTANCE_SUPPORT_IPV6_REGIONS,
            self::ER_INSTANCE_SUPPORT_DSCP_REGIONS,
            self::ER_INSTANCE_SUPPORT_SITES,
            self::GDGW_ATTACHMENT_IS_SUPPORT,
            self::GDGW_ATTACHMENT_SUPPORT_REGIONS,
            self::GDGW_ATTACHMENT_SUPPORT_SITES,
            self::ER_ROUTE_TABLE_ATTACHMENT_IS_SUPPORT,
            self::ER_ROUTE_TABLE_ATTACHMENT_SUPPORT_REGIONS,
            self::ER_ROUTE_TABLE_ATTACHMENT_SUPPORT_SITES,
            self::CLOUD_ALLIANCE_SUPPORT_REGIONS,
        ];
    }
}

