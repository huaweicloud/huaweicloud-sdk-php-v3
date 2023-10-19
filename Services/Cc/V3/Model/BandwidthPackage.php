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
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  billingMode
    * tags  实例标签。
    * status  带宽包实例的状态。ACTIVE表示状态
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'localAreaId' => '\HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef',
            'remoteAreaId' => '\HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef',
            'specCode' => 'string',
            'billingMode' => '\HuaweiCloud\SDK\Cc\V3\Model\BillingModeEnum',
            'tags' => '\HuaweiCloud\SDK\Cc\V3\Model\Tag[]',
            'status' => 'string',
            'adminStateUp' => 'bool',
            'orderId' => 'string',
            'productId' => 'string',
            'chargeMode' => 'string',
            'bandwidth' => 'int',
            'interflowMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  billingMode
    * tags  实例标签。
    * status  带宽包实例的状态。ACTIVE表示状态
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'enterpriseProjectId' => null,
        'projectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'resourceId' => null,
        'resourceType' => null,
        'localAreaId' => null,
        'remoteAreaId' => null,
        'specCode' => null,
        'billingMode' => null,
        'tags' => null,
        'status' => null,
        'adminStateUp' => null,
        'orderId' => null,
        'productId' => null,
        'chargeMode' => null,
        'bandwidth' => 'int32',
        'interflowMode' => null
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
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  billingMode
    * tags  实例标签。
    * status  带宽包实例的状态。ACTIVE表示状态
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'localAreaId' => 'local_area_id',
            'remoteAreaId' => 'remote_area_id',
            'specCode' => 'spec_code',
            'billingMode' => 'billing_mode',
            'tags' => 'tags',
            'status' => 'status',
            'adminStateUp' => 'admin_state_up',
            'orderId' => 'order_id',
            'productId' => 'product_id',
            'chargeMode' => 'charge_mode',
            'bandwidth' => 'bandwidth',
            'interflowMode' => 'interflow_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  billingMode
    * tags  实例标签。
    * status  带宽包实例的状态。ACTIVE表示状态
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'localAreaId' => 'setLocalAreaId',
            'remoteAreaId' => 'setRemoteAreaId',
            'specCode' => 'setSpecCode',
            'billingMode' => 'setBillingMode',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'adminStateUp' => 'setAdminStateUp',
            'orderId' => 'setOrderId',
            'productId' => 'setProductId',
            'chargeMode' => 'setChargeMode',
            'bandwidth' => 'setBandwidth',
            'interflowMode' => 'setInterflowMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * billingMode  billingMode
    * tags  实例标签。
    * status  带宽包实例的状态。ACTIVE表示状态
    * adminStateUp  带宽包实例的管理状态。
    * orderId  带宽包实例的订单ID。
    * productId  带宽包实例的产品ID。
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * bandwidth  带宽包实例中的带宽值。
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'localAreaId' => 'getLocalAreaId',
            'remoteAreaId' => 'getRemoteAreaId',
            'specCode' => 'getSpecCode',
            'billingMode' => 'getBillingMode',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'adminStateUp' => 'getAdminStateUp',
            'orderId' => 'getOrderId',
            'productId' => 'getProductId',
            'chargeMode' => 'getChargeMode',
            'bandwidth' => 'getBandwidth',
            'interflowMode' => 'getInterflowMode'
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
    const RESOURCE_TYPE_CLOUD_CONNECTION = 'cloud_connection';
    const STATUS_ACTIVE = 'ACTIVE';
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const INTERFLOW_MODE_AREA = 'Area';
    const INTERFLOW_MODE_REGION = 'Region';
    

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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['localAreaId'] = isset($data['localAreaId']) ? $data['localAreaId'] : null;
        $this->container['remoteAreaId'] = isset($data['remoteAreaId']) ? $data['remoteAreaId'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['interflowMode'] = isset($data['interflowMode']) ? $data['interflowMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['resourceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['localAreaId'] === null) {
            $invalidProperties[] = "'localAreaId' can't be null";
        }
        if ($this->container['remoteAreaId'] === null) {
            $invalidProperties[] = "'remoteAreaId' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
            if ((mb_strlen($this->container['specCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['specCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['billingMode'] === null) {
            $invalidProperties[] = "'billingMode' can't be null";
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
    *  资源ID标识符。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 资源ID标识符。
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
    *  实例名字。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名字。
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
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
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
    *  实例所属帐号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属帐号ID。
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
    *  实例所属企业项目ID。
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
    * @param string|null $enterpriseProjectId 实例所属企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets projectId
    *  实例所属项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 实例所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets resourceId
    *  带宽包实例绑定的资源ID。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 带宽包实例绑定的资源ID。
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
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 带宽包实例绑定的资源类型。 cloud_connection: 云连接实例。
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
    *  localAreaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef
    */
    public function getLocalAreaId()
    {
        return $this->container['localAreaId'];
    }

    /**
    * Sets localAreaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef $localAreaId localAreaId
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
    *  remoteAreaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef
    */
    public function getRemoteAreaId()
    {
        return $this->container['remoteAreaId'];
    }

    /**
    * Sets remoteAreaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef $remoteAreaId remoteAreaId
    *
    * @return $this
    */
    public function setRemoteAreaId($remoteAreaId)
    {
        $this->container['remoteAreaId'] = $remoteAreaId;
        return $this;
    }

    /**
    * Gets specCode
    *  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
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
    *  billingMode
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\BillingModeEnum
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\BillingModeEnum $billingMode billingMode
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets tags
    *  实例标签。
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
    * @param \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null $tags 实例标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

