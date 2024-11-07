<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SiteNetworkQuotaKeyEnum
{
    /**
     * Possible values of this enum
     */
    const SITE_NETWORKS_PER_ACCOUNT = 'site_networks_per_account';
    const SITES_PER_MESH_SITE_NETWORK = 'sites_per_mesh_site_network';
    const SPOKE_SITES_PER_STAR_SITE_NETWORK = 'spoke_sites_per_star_site_network';
    const SITES_PER_HYBRID_SITE_NETWORK = 'sites_per_hybrid_site_network';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SITE_NETWORKS_PER_ACCOUNT,
            self::SITES_PER_MESH_SITE_NETWORK,
            self::SPOKE_SITES_PER_STAR_SITE_NETWORK,
            self::SITES_PER_HYBRID_SITE_NETWORK,
        ];
    }
}

