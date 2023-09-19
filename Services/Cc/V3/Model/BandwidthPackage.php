<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthPackage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthPackage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  带宽包实例的ID。
    * name  带宽包实例的名字。
    * description  带宽包实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  带宽包实例的企业项目ID。
    * status  带宽包实例的状态。ACTIVE表示状态
    * createdAt  带宽包实例的创建时间。
    * updatedAt  带宽包实例的更新时间。
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  带宽包实例在大陆站或国际站的计费方式。 1：大陆站包周期 2：国际站包周期 3：大陆站按需计费 4：国际站按需计费 5：大陆站按95方式计费 6：国际站按95方式计费
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  本端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * remoteAreaId  远端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * projectId  项目ID。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'enterpriseProjectId' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'adminStateUp' => 'bool',
            'orderId' => 'string',
            'productId' => 'string',
            'specCode' => 'string',
            'billingMode' => 'string',
            'chargeMode' => 'string',
            'bandwidth' => 'int',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'localAreaId' => 'string',
            'remoteAreaId' => 'string',
            'projectId' => 'string',
            'interflowMode' => 'string',
            'tags' => '\HuaweiCloud\SDK\Cc\V3\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  带宽包实例的ID。
    * name  带宽包实例的名字。
    * description  带宽包实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  带宽包实例的企业项目ID。
    * status  带宽包实例的状态。ACTIVE表示状态
    * createdAt  带宽包实例的创建时间。
    * updatedAt  带宽包实例的更新时间。
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  带宽包实例在大陆站或国际站的计费方式。 1：大陆站包周期 2：国际站包周期 3：大陆站按需计费 4：国际站按需计费 5：大陆站按95方式计费 6：国际站按95方式计费
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  本端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * remoteAreaId  远端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * projectId  项目ID。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'enterpriseProjectId' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'adminStateUp' => null,
        'orderId' => null,
        'productId' => null,
        'specCode' => null,
        'billingMode' => null,
        'chargeMode' => null,
        'bandwidth' => 'int32',
        'resourceId' => null,
        'resourceType' => null,
        'localAreaId' => null,
        'remoteAreaId' => null,
        'projectId' => null,
        'interflowMode' => null,
        'tags' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * id  带宽包实例的ID。
    * name  带宽包实例的名字。
    * description  带宽包实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  带宽包实例的企业项目ID。
    * status  带宽包实例的状态。ACTIVE表示状态
    * createdAt  带宽包实例的创建时间。
    * updatedAt  带宽包实例的更新时间。
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  带宽包实例在大陆站或国际站的计费方式。 1：大陆站包周期 2：国际站包周期 3：大陆站按需计费 4：国际站按需计费 5：大陆站按95方式计费 6：国际站按95方式计费
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  本端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * remoteAreaId  远端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * projectId  项目ID。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'adminStateUp' => 'admin_state_up',
            'orderId' => 'order_id',
            'productId' => 'product_id',
            'specCode' => 'spec_code',
            'billingMode' => 'billing_mode',
            'chargeMode' => 'charge_mode',
            'bandwidth' => 'bandwidth',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'localAreaId' => 'local_area_id',
            'remoteAreaId' => 'remote_area_id',
            'projectId' => 'project_id',
            'interflowMode' => 'interflow_mode',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  带宽包实例的ID。
    * name  带宽包实例的名字。
    * description  带宽包实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  带宽包实例的企业项目ID。
    * status  带宽包实例的状态。ACTIVE表示状态
    * createdAt  带宽包实例的创建时间。
    * updatedAt  带宽包实例的更新时间。
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  带宽包实例在大陆站或国际站的计费方式。 1：大陆站包周期 2：国际站包周期 3：大陆站按需计费 4：国际站按需计费 5：大陆站按95方式计费 6：国际站按95方式计费
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  本端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * remoteAreaId  远端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * projectId  项目ID。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'adminStateUp' => 'setAdminStateUp',
            'orderId' => 'setOrderId',
            'productId' => 'setProductId',
            'specCode' => 'setSpecCode',
            'billingMode' => 'setBillingMode',
            'chargeMode' => 'setChargeMode',
            'bandwidth' => 'setBandwidth',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'localAreaId' => 'setLocalAreaId',
            'remoteAreaId' => 'setRemoteAreaId',
            'projectId' => 'setProjectId',
            'interflowMode' => 'setInterflowMode',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  带宽包实例的ID。
    * name  带宽包实例的名字。
    * description  带宽包实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  带宽包实例的企业项目ID。
    * status  带宽包实例的状态。ACTIVE表示状态
    * createdAt  带宽包实例的创建时间。
    * updatedAt  带宽包实例的更新时间。
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  带宽包实例在大陆站或国际站的计费方式。 1：大陆站包周期 2：国际站包周期 3：大陆站按需计费 4：国际站按需计费 5：大陆站按95方式计费 6：国际站按95方式计费
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  本端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * remoteAreaId  远端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    * projectId  项目ID。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'adminStateUp' => 'getAdminStateUp',
            'orderId' => 'getOrderId',
            'productId' => 'getProductId',
            'specCode' => 'getSpecCode',
            'billingMode' => 'getBillingMode',
            'chargeMode' => 'getChargeMode',
            'bandwidth' => 'getBandwidth',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'localAreaId' => 'getLocalAreaId',
            'remoteAreaId' => 'getRemoteAreaId',
            'projectId' => 'getProjectId',
            'interflowMode' => 'getInterflowMode',
            'tags' => 'getTags'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const STATUS_ACTIVE = 'ACTIVE';
    const SPEC_CODE_BANDWIDTH_AFTOELA = 'bandwidth.aftoela';
    const SPEC_CODE_BANDWIDTH_AFTONLA = 'bandwidth.aftonla';
    const SPEC_CODE_BANDWIDTH_AFTOWLA = 'bandwidth.aftowla';
    const SPEC_CODE_BANDWIDTH_APTOAF = 'bandwidth.aptoaf';
    const SPEC_CODE_BANDWIDTH_APTOAP = 'bandwidth.aptoap';
    const SPEC_CODE_BANDWIDTH_APTOELA = 'bandwidth.aptoela';
    const SPEC_CODE_BANDWIDTH_APTONLA = 'bandwidth.aptonla';
    const SPEC_CODE_BANDWIDTH_APTOWLA = 'bandwidth.aptowla';
    const SPEC_CODE_BANDWIDTH_CMTOAF = 'bandwidth.cmtoaf';
    const SPEC_CODE_BANDWIDTH_CMTOAP = 'bandwidth.cmtoap';
    const SPEC_CODE_BANDWIDTH_CMTOCM = 'bandwidth.cmtocm';
    const SPEC_CODE_BANDWIDTH_CMTOELA = 'bandwidth.cmtoela';
    const SPEC_CODE_BANDWIDTH_CMTONLA = 'bandwidth.cmtonla';
    const SPEC_CODE_BANDWIDTH_CMTOWLA = 'bandwidth.cmtowla';
    const SPEC_CODE_BANDWIDTH_ELATOELA = 'bandwidth.elatoela';
    const SPEC_CODE_BANDWIDTH_ELATONLA = 'bandwidth.elatonla';
    const SPEC_CODE_BANDWIDTH_WLATOELA = 'bandwidth.wlatoela';
    const SPEC_CODE_BANDWIDTH_WLATONLA = 'bandwidth.wlatonla';
    const SPEC_CODE_BANDWIDTH_WLATOWLA = 'bandwidth.wlatowla';
    const BILLING_MODE__1 = '1';
    const BILLING_MODE__2 = '2';
    const BILLING_MODE__3 = '3';
    const BILLING_MODE__4 = '4';
    const BILLING_MODE__5 = '5';
    const BILLING_MODE__6 = '6';
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const RESOURCE_TYPE_CLOUD_CONNECTION = 'cloud_connection';
    const LOCAL_AREA_ID_CHINESE_MAINLAND = 'Chinese-Mainland';
    const LOCAL_AREA_ID_ASIA_PACIFIC = 'Asia-Pacific';
    const LOCAL_AREA_ID_AFRICA = 'Africa';
    const LOCAL_AREA_ID_WESTERN_LATIN_AMERICA = 'Western-Latin-America';
    const LOCAL_AREA_ID_EASTERN_LATIN_AMERICA = 'Eastern-Latin-America';
    const LOCAL_AREA_ID_NORTHERN_LATIN_AMERICA = 'Northern-Latin-America';
    const REMOTE_AREA_ID_CHINESE_MAINLAND = 'Chinese-Mainland';
    const REMOTE_AREA_ID_ASIA_PACIFIC = 'Asia-Pacific';
    const REMOTE_AREA_ID_AFRICA = 'Africa';
    const REMOTE_AREA_ID_WESTERN_LATIN_AMERICA = 'Western-Latin-America';
    const REMOTE_AREA_ID_EASTERN_LATIN_AMERICA = 'Eastern-Latin-America';
    const REMOTE_AREA_ID_NORTHERN_LATIN_AMERICA = 'Northern-Latin-America';
    const INTERFLOW_MODE_AREA = 'Area';
    const INTERFLOW_MODE_REGION = 'Region';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecCodeAllowableValues()
    {
        return [
            self::SPEC_CODE_BANDWIDTH_AFTOELA,
            self::SPEC_CODE_BANDWIDTH_AFTONLA,
            self::SPEC_CODE_BANDWIDTH_AFTOWLA,
            self::SPEC_CODE_BANDWIDTH_APTOAF,
            self::SPEC_CODE_BANDWIDTH_APTOAP,
            self::SPEC_CODE_BANDWIDTH_APTOELA,
            self::SPEC_CODE_BANDWIDTH_APTONLA,
            self::SPEC_CODE_BANDWIDTH_APTOWLA,
            self::SPEC_CODE_BANDWIDTH_CMTOAF,
            self::SPEC_CODE_BANDWIDTH_CMTOAP,
            self::SPEC_CODE_BANDWIDTH_CMTOCM,
            self::SPEC_CODE_BANDWIDTH_CMTOELA,
            self::SPEC_CODE_BANDWIDTH_CMTONLA,
            self::SPEC_CODE_BANDWIDTH_CMTOWLA,
            self::SPEC_CODE_BANDWIDTH_ELATOELA,
            self::SPEC_CODE_BANDWIDTH_ELATONLA,
            self::SPEC_CODE_BANDWIDTH_WLATOELA,
            self::SPEC_CODE_BANDWIDTH_WLATONLA,
            self::SPEC_CODE_BANDWIDTH_WLATOWLA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingModeAllowableValues()
    {
        return [
            self::BILLING_MODE__1,
            self::BILLING_MODE__2,
            self::BILLING_MODE__3,
            self::BILLING_MODE__4,
            self::BILLING_MODE__5,
            self::BILLING_MODE__6,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_CLOUD_CONNECTION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocalAreaIdAllowableValues()
    {
        return [
            self::LOCAL_AREA_ID_CHINESE_MAINLAND,
            self::LOCAL_AREA_ID_ASIA_PACIFIC,
            self::LOCAL_AREA_ID_AFRICA,
            self::LOCAL_AREA_ID_WESTERN_LATIN_AMERICA,
            self::LOCAL_AREA_ID_EASTERN_LATIN_AMERICA,
            self::LOCAL_AREA_ID_NORTHERN_LATIN_AMERICA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRemoteAreaIdAllowableValues()
    {
        return [
            self::REMOTE_AREA_ID_CHINESE_MAINLAND,
            self::REMOTE_AREA_ID_ASIA_PACIFIC,
            self::REMOTE_AREA_ID_AFRICA,
            self::REMOTE_AREA_ID_WESTERN_LATIN_AMERICA,
            self::REMOTE_AREA_ID_EASTERN_LATIN_AMERICA,
            self::REMOTE_AREA_ID_NORTHERN_LATIN_AMERICA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInterflowModeAllowableValues()
    {
        return [
            self::INTERFLOW_MODE_AREA,
            self::INTERFLOW_MODE_REGION,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['localAreaId'] = isset($data['localAreaId']) ? $data['localAreaId'] : null;
        $this->container['remoteAreaId'] = isset($data['remoteAreaId']) ? $data['remoteAreaId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['interflowMode'] = isset($data['interflowMode']) ? $data['interflowMode'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 85)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 85.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 32)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 36)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 0)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSpecCodeAllowableValues();
                if (!is_null($this->container['specCode']) && !in_array($this->container['specCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBillingModeAllowableValues();
                if (!is_null($this->container['billingMode']) && !in_array($this->container['billingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'billingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 999999)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLocalAreaIdAllowableValues();
                if (!is_null($this->container['localAreaId']) && !in_array($this->container['localAreaId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'localAreaId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['localAreaId']) && (mb_strlen($this->container['localAreaId']) > 32)) {
                $invalidProperties[] = "invalid value for 'localAreaId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['localAreaId']) && (mb_strlen($this->container['localAreaId']) < 0)) {
                $invalidProperties[] = "invalid value for 'localAreaId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRemoteAreaIdAllowableValues();
                if (!is_null($this->container['remoteAreaId']) && !in_array($this->container['remoteAreaId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'remoteAreaId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['remoteAreaId']) && (mb_strlen($this->container['remoteAreaId']) > 32)) {
                $invalidProperties[] = "invalid value for 'remoteAreaId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['remoteAreaId']) && (mb_strlen($this->container['remoteAreaId']) < 0)) {
                $invalidProperties[] = "invalid value for 'remoteAreaId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getInterflowModeAllowableValues();
                if (!is_null($this->container['interflowMode']) && !in_array($this->container['interflowMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'interflowMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['interflowMode']) && (mb_strlen($this->container['interflowMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'interflowMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['interflowMode']) && (mb_strlen($this->container['interflowMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'interflowMode', the character length must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets id
    *  带宽包实例的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 带宽包实例的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  带宽包实例的名字。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 带宽包实例的名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  带宽包实例的描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 带宽包实例的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  帐号ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  带宽包实例的企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 带宽包实例的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets status
    *  带宽包实例的状态。ACTIVE表示状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 带宽包实例的状态。ACTIVE表示状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  带宽包实例的创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 带宽包实例的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  带宽包实例的更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 带宽包实例的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  带宽包实例的管理状态。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 带宽包实例的管理状态。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets orderId
    *  带宽包实例的订单ID。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 带宽包实例的订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets productId
    *  带宽包实例的产品ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 带宽包实例的产品ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets specCode
    *  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets billingMode
    *  带宽包实例在大陆站或国际站的计费方式。 1：大陆站包周期 2：国际站包周期 3：大陆站按需计费 4：国际站按需计费 5：大陆站按95方式计费 6：国际站按95方式计费
    *
    * @return string|null
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param string|null $billingMode 带宽包实例在大陆站或国际站的计费方式。 1：大陆站包周期 2：国际站包周期 3：大陆站按需计费 4：国际站按需计费 5：大陆站按95方式计费 6：国际站按95方式计费
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets chargeMode
    *  带宽包实例的计费方式。 bandwidth是按带宽计费。
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 带宽包实例的计费方式。 bandwidth是按带宽计费。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets bandwidth
    *  带宽包实例中的带宽值。
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 带宽包实例中的带宽值。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets resourceId
    *  带宽包实例绑定的资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 带宽包实例绑定的资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets localAreaId
    *  本端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    *
    * @return string|null
    */
    public function getLocalAreaId()
    {
        return $this->container['localAreaId'];
    }

    /**
    * Sets localAreaId
    *
    * @param string|null $localAreaId 本端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    *
    * @return $this
    */
    public function setLocalAreaId($localAreaId)
    {
        $this->container['localAreaId'] = $localAreaId;
        return $this;
    }

    /**
    * Gets remoteAreaId
    *  远端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    *
    * @return string|null
    */
    public function getRemoteAreaId()
    {
        return $this->container['remoteAreaId'];
    }

    /**
    * Sets remoteAreaId
    *
    * @param string|null $remoteAreaId 远端大区。 云连接支持的大区有： | Chinese-Mainland | 中国大陆 | | Asia-Pacific | 亚太 | | Africa | 非洲 | | Western-Latin-America | 拉美西 | | Eastern-Latin-America | 拉美东 | | Northern-Latin-America | 拉美北 |
    *
    * @return $this
    */
    public function setRemoteAreaId($remoteAreaId)
    {
        $this->container['remoteAreaId'] = $remoteAreaId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets interflowMode
    *  互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @return string|null
    */
    public function getInterflowMode()
    {
        return $this->container['interflowMode'];
    }

    /**
    * Sets interflowMode
    *
    * @param string|null $interflowMode 互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @return $this
    */
    public function setInterflowMode($interflowMode)
    {
        $this->container['interflowMode'] = $interflowMode;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

