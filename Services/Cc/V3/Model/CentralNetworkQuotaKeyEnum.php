<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class CentralNetworkQuotaKeyEnum
{
    /**
     * Possible values of this enum
     */
    const CENTRAL_NETWORKS_PER_ACCOUNT = 'central_networks_per_account';
    const POLICY_VERSIONS_PER_CENTRAL_NETWORK = 'policy_versions_per_central_network';
    const SIZE_OF_DOCUMENT_PER_CENTRAL_NETWORK_POLICY_VERSION = 'size_of_document_per_central_network_policy_version';
    const PLANES_PER_CENTRAL_NETWORK = 'planes_per_central_network';
    const ER_INSTANCES_PER_REGION_PER_CENTRAL_NETWORK = 'er_instances_per_region_per_central_network';
    const CONNECTIONS_PER_CENTRAL_NETWORK = 'connections_per_central_network';
    const ATTACHMENTS_PER_CENTRAL_NETWORK = 'attachments_per_central_network';
    const GDGW_ATTACHMENTS_PER_REGION_PER_CENTRAL_NETWORK = 'GDGW_attachments_per_region_per_central_network';
    const ER_ROUTE_TABLE_ATTACHMENTS_PER_REGION_PER_CENTRAL_NETWORK = 'ER_ROUTE_TABLE_attachments_per_region_per_central_network';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CENTRAL_NETWORKS_PER_ACCOUNT,
            self::POLICY_VERSIONS_PER_CENTRAL_NETWORK,
            self::SIZE_OF_DOCUMENT_PER_CENTRAL_NETWORK_POLICY_VERSION,
            self::PLANES_PER_CENTRAL_NETWORK,
            self::ER_INSTANCES_PER_REGION_PER_CENTRAL_NETWORK,
            self::CONNECTIONS_PER_CENTRAL_NETWORK,
            self::ATTACHMENTS_PER_CENTRAL_NETWORK,
            self::GDGW_ATTACHMENTS_PER_REGION_PER_CENTRAL_NETWORK,
            self::ER_ROUTE_TABLE_ATTACHMENTS_PER_REGION_PER_CENTRAL_NETWORK,
        ];
    }
}

