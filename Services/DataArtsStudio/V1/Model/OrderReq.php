<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域Id
    * commodityId  订单Id
    * productId  产品Id
    * periodType  购买周期类型（日月年）
    * periodNum  购买周期数
    * availabilityZone  可用区
    * vpcId  虚拟网卡Id
    * securityGroupId  安全组Id
    * netId  子网Id
    * instanceName  实例名
    * epsId  企业项目Id
    * isAutoRenew  是否续订
    * promotionInfo  促销信息
    * extesionPackageType  实例附加增量包类型
    * bindingInstanceId  增量包绑定的实例id
    * cdmVersion  cdm版本号
    * resourceSpecCode  实例规格编码
    * cloudServiceType  云服务类型
    * resourceType  资源类型
    * tags  tms标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'commodityId' => 'string',
            'productId' => 'string',
            'periodType' => 'int',
            'periodNum' => 'int',
            'availabilityZone' => 'string',
            'vpcId' => 'string',
            'securityGroupId' => 'string',
            'netId' => 'string',
            'instanceName' => 'string',
            'epsId' => 'string',
            'isAutoRenew' => 'int',
            'promotionInfo' => 'string',
            'extesionPackageType' => 'string',
            'bindingInstanceId' => 'string',
            'cdmVersion' => 'string',
            'resourceSpecCode' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'tags' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TmsTagDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域Id
    * commodityId  订单Id
    * productId  产品Id
    * periodType  购买周期类型（日月年）
    * periodNum  购买周期数
    * availabilityZone  可用区
    * vpcId  虚拟网卡Id
    * securityGroupId  安全组Id
    * netId  子网Id
    * instanceName  实例名
    * epsId  企业项目Id
    * isAutoRenew  是否续订
    * promotionInfo  促销信息
    * extesionPackageType  实例附加增量包类型
    * bindingInstanceId  增量包绑定的实例id
    * cdmVersion  cdm版本号
    * resourceSpecCode  实例规格编码
    * cloudServiceType  云服务类型
    * resourceType  资源类型
    * tags  tms标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'commodityId' => null,
        'productId' => null,
        'periodType' => null,
        'periodNum' => null,
        'availabilityZone' => null,
        'vpcId' => null,
        'securityGroupId' => null,
        'netId' => null,
        'instanceName' => null,
        'epsId' => null,
        'isAutoRenew' => 'int32',
        'promotionInfo' => null,
        'extesionPackageType' => null,
        'bindingInstanceId' => null,
        'cdmVersion' => null,
        'resourceSpecCode' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
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
    * regionId  区域Id
    * commodityId  订单Id
    * productId  产品Id
    * periodType  购买周期类型（日月年）
    * periodNum  购买周期数
    * availabilityZone  可用区
    * vpcId  虚拟网卡Id
    * securityGroupId  安全组Id
    * netId  子网Id
    * instanceName  实例名
    * epsId  企业项目Id
    * isAutoRenew  是否续订
    * promotionInfo  促销信息
    * extesionPackageType  实例附加增量包类型
    * bindingInstanceId  增量包绑定的实例id
    * cdmVersion  cdm版本号
    * resourceSpecCode  实例规格编码
    * cloudServiceType  云服务类型
    * resourceType  资源类型
    * tags  tms标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'commodityId' => 'commodity_id',
            'productId' => 'product_id',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'availabilityZone' => 'availability_zone',
            'vpcId' => 'vpc_id',
            'securityGroupId' => 'security_group_id',
            'netId' => 'net_id',
            'instanceName' => 'instance_name',
            'epsId' => 'eps_id',
            'isAutoRenew' => 'is_auto_renew',
            'promotionInfo' => 'promotion_info',
            'extesionPackageType' => 'extesion_package_type',
            'bindingInstanceId' => 'binding_instance_id',
            'cdmVersion' => 'cdm_version',
            'resourceSpecCode' => 'resource_spec_code',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域Id
    * commodityId  订单Id
    * productId  产品Id
    * periodType  购买周期类型（日月年）
    * periodNum  购买周期数
    * availabilityZone  可用区
    * vpcId  虚拟网卡Id
    * securityGroupId  安全组Id
    * netId  子网Id
    * instanceName  实例名
    * epsId  企业项目Id
    * isAutoRenew  是否续订
    * promotionInfo  促销信息
    * extesionPackageType  实例附加增量包类型
    * bindingInstanceId  增量包绑定的实例id
    * cdmVersion  cdm版本号
    * resourceSpecCode  实例规格编码
    * cloudServiceType  云服务类型
    * resourceType  资源类型
    * tags  tms标签
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'commodityId' => 'setCommodityId',
            'productId' => 'setProductId',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcId' => 'setVpcId',
            'securityGroupId' => 'setSecurityGroupId',
            'netId' => 'setNetId',
            'instanceName' => 'setInstanceName',
            'epsId' => 'setEpsId',
            'isAutoRenew' => 'setIsAutoRenew',
            'promotionInfo' => 'setPromotionInfo',
            'extesionPackageType' => 'setExtesionPackageType',
            'bindingInstanceId' => 'setBindingInstanceId',
            'cdmVersion' => 'setCdmVersion',
            'resourceSpecCode' => 'setResourceSpecCode',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域Id
    * commodityId  订单Id
    * productId  产品Id
    * periodType  购买周期类型（日月年）
    * periodNum  购买周期数
    * availabilityZone  可用区
    * vpcId  虚拟网卡Id
    * securityGroupId  安全组Id
    * netId  子网Id
    * instanceName  实例名
    * epsId  企业项目Id
    * isAutoRenew  是否续订
    * promotionInfo  促销信息
    * extesionPackageType  实例附加增量包类型
    * bindingInstanceId  增量包绑定的实例id
    * cdmVersion  cdm版本号
    * resourceSpecCode  实例规格编码
    * cloudServiceType  云服务类型
    * resourceType  资源类型
    * tags  tms标签
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'commodityId' => 'getCommodityId',
            'productId' => 'getProductId',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcId' => 'getVpcId',
            'securityGroupId' => 'getSecurityGroupId',
            'netId' => 'getNetId',
            'instanceName' => 'getInstanceName',
            'epsId' => 'getEpsId',
            'isAutoRenew' => 'getIsAutoRenew',
            'promotionInfo' => 'getPromotionInfo',
            'extesionPackageType' => 'getExtesionPackageType',
            'bindingInstanceId' => 'getBindingInstanceId',
            'cdmVersion' => 'getCdmVersion',
            'resourceSpecCode' => 'getResourceSpecCode',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['commodityId'] = isset($data['commodityId']) ? $data['commodityId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['netId'] = isset($data['netId']) ? $data['netId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['extesionPackageType'] = isset($data['extesionPackageType']) ? $data['extesionPackageType'] : null;
        $this->container['bindingInstanceId'] = isset($data['bindingInstanceId']) ? $data['bindingInstanceId'] : null;
        $this->container['cdmVersion'] = isset($data['cdmVersion']) ? $data['cdmVersion'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
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
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commodityId']) && (mb_strlen($this->container['commodityId']) > 128)) {
                $invalidProperties[] = "invalid value for 'commodityId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['commodityId']) && (mb_strlen($this->container['commodityId']) < 1)) {
                $invalidProperties[] = "invalid value for 'commodityId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 128)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if (($this->container['periodType'] > 3)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 3.";
            }
            if (($this->container['periodType'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 1.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 120)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 120.";
            }
            if (($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
            }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 128)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['netId'] === null) {
            $invalidProperties[] = "'netId' can't be null";
        }
            if ((mb_strlen($this->container['netId']) > 128)) {
                $invalidProperties[] = "invalid value for 'netId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['netId']) < 1)) {
                $invalidProperties[] = "invalid value for 'netId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
            if ((mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['epsId'] === null) {
            $invalidProperties[] = "'epsId' can't be null";
        }
            if ((mb_strlen($this->container['epsId']) > 128)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['epsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['isAutoRenew'] === null) {
            $invalidProperties[] = "'isAutoRenew' can't be null";
        }
            if (($this->container['isAutoRenew'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be smaller than or equal to 1.";
            }
            if (($this->container['isAutoRenew'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['extesionPackageType']) && (mb_strlen($this->container['extesionPackageType']) > 128)) {
                $invalidProperties[] = "invalid value for 'extesionPackageType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['extesionPackageType']) && (mb_strlen($this->container['extesionPackageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'extesionPackageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bindingInstanceId']) && (mb_strlen($this->container['bindingInstanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'bindingInstanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bindingInstanceId']) && (mb_strlen($this->container['bindingInstanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'bindingInstanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cdmVersion']) && (mb_strlen($this->container['cdmVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'cdmVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cdmVersion']) && (mb_strlen($this->container['cdmVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'cdmVersion', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
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
    * Gets regionId
    *  区域Id
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 区域Id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets commodityId
    *  订单Id
    *
    * @return string|null
    */
    public function getCommodityId()
    {
        return $this->container['commodityId'];
    }

    /**
    * Sets commodityId
    *
    * @param string|null $commodityId 订单Id
    *
    * @return $this
    */
    public function setCommodityId($commodityId)
    {
        $this->container['commodityId'] = $commodityId;
        return $this;
    }

    /**
    * Gets productId
    *  产品Id
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
    * @param string|null $productId 产品Id
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets periodType
    *  购买周期类型（日月年）
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType 购买周期类型（日月年）
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  购买周期数
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 购买周期数
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 可用区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟网卡Id
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟网卡Id
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组Id
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 安全组Id
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets netId
    *  子网Id
    *
    * @return string
    */
    public function getNetId()
    {
        return $this->container['netId'];
    }

    /**
    * Sets netId
    *
    * @param string $netId 子网Id
    *
    * @return $this
    */
    public function setNetId($netId)
    {
        $this->container['netId'] = $netId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 实例名
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目Id
    *
    * @return string
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string $epsId 企业项目Id
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否续订
    *
    * @return int
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int $isAutoRenew 是否续订
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  促销信息
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 促销信息
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets extesionPackageType
    *  实例附加增量包类型
    *
    * @return string|null
    */
    public function getExtesionPackageType()
    {
        return $this->container['extesionPackageType'];
    }

    /**
    * Sets extesionPackageType
    *
    * @param string|null $extesionPackageType 实例附加增量包类型
    *
    * @return $this
    */
    public function setExtesionPackageType($extesionPackageType)
    {
        $this->container['extesionPackageType'] = $extesionPackageType;
        return $this;
    }

    /**
    * Gets bindingInstanceId
    *  增量包绑定的实例id
    *
    * @return string|null
    */
    public function getBindingInstanceId()
    {
        return $this->container['bindingInstanceId'];
    }

    /**
    * Sets bindingInstanceId
    *
    * @param string|null $bindingInstanceId 增量包绑定的实例id
    *
    * @return $this
    */
    public function setBindingInstanceId($bindingInstanceId)
    {
        $this->container['bindingInstanceId'] = $bindingInstanceId;
        return $this;
    }

    /**
    * Gets cdmVersion
    *  cdm版本号
    *
    * @return string|null
    */
    public function getCdmVersion()
    {
        return $this->container['cdmVersion'];
    }

    /**
    * Sets cdmVersion
    *
    * @param string|null $cdmVersion cdm版本号
    *
    * @return $this
    */
    public function setCdmVersion($cdmVersion)
    {
        $this->container['cdmVersion'] = $cdmVersion;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  实例规格编码
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 实例规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType 云服务类型
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
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
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets tags
    *  tms标签
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TmsTagDTO[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TmsTagDTO[]|null $tags tms标签
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

