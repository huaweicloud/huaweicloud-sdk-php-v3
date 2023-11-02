<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstancePeriodRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstancePeriodRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  云服务器使用的规格ID
    * name  云服务器名称。 取值范围： • 只能由中文字符、英文字母、数字、下划线、中划线组成，且长度小于等于64个字符。 • 创建的云服务器数量大于1时，长度小于等于59个字符
    * vpcId  VPC的ID
    * availabilityZone  云服务器对应可用分区信息。(两个主备分区，中间用“,”分割，例如az1.dc1,az2.dc2)
    * enterpriseProjectId  企业项目ID
    * nics  云服务器对应的网卡信息
    * securityGroups  云服务器对应安全组信息
    * comment  备注信息
    * region  云服务器所在区域ID
    * cloudServiceType  服务类型： 默认hws.service.type.dbss
    * chargingMode  计费模式： • 0：包周期计费 • 1：按需计费
    * periodType  订购周期类型： • 0：天； • 1：周； • 2：月； • 3：年； • 4：小时； • 5：绝对时间
    * periodNum  订购周期数
    * subscriptionNum  订购数量： DBSS只支持订购1套，不支持多套
    * productInfos  产品信息列表
    * tags  资源标签
    * promotionInfo  折扣信息
    * isAutoRenew  自动续费 1表示自动续费，0表示不自动续费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'name' => 'string',
            'vpcId' => 'string',
            'availabilityZone' => 'string',
            'enterpriseProjectId' => 'string',
            'nics' => '\HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestNics[]',
            'securityGroups' => '\HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestSecurityGroups[]',
            'comment' => 'string',
            'region' => 'string',
            'cloudServiceType' => 'string',
            'chargingMode' => 'int',
            'periodType' => 'int',
            'periodNum' => 'int',
            'subscriptionNum' => 'int',
            'productInfos' => '\HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestProductInfos[]',
            'tags' => '\HuaweiCloud\SDK\Dbss\V1\Model\KeyValueBean[]',
            'promotionInfo' => 'string',
            'isAutoRenew' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  云服务器使用的规格ID
    * name  云服务器名称。 取值范围： • 只能由中文字符、英文字母、数字、下划线、中划线组成，且长度小于等于64个字符。 • 创建的云服务器数量大于1时，长度小于等于59个字符
    * vpcId  VPC的ID
    * availabilityZone  云服务器对应可用分区信息。(两个主备分区，中间用“,”分割，例如az1.dc1,az2.dc2)
    * enterpriseProjectId  企业项目ID
    * nics  云服务器对应的网卡信息
    * securityGroups  云服务器对应安全组信息
    * comment  备注信息
    * region  云服务器所在区域ID
    * cloudServiceType  服务类型： 默认hws.service.type.dbss
    * chargingMode  计费模式： • 0：包周期计费 • 1：按需计费
    * periodType  订购周期类型： • 0：天； • 1：周； • 2：月； • 3：年； • 4：小时； • 5：绝对时间
    * periodNum  订购周期数
    * subscriptionNum  订购数量： DBSS只支持订购1套，不支持多套
    * productInfos  产品信息列表
    * tags  资源标签
    * promotionInfo  折扣信息
    * isAutoRenew  自动续费 1表示自动续费，0表示不自动续费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'name' => null,
        'vpcId' => null,
        'availabilityZone' => null,
        'enterpriseProjectId' => null,
        'nics' => null,
        'securityGroups' => null,
        'comment' => null,
        'region' => null,
        'cloudServiceType' => null,
        'chargingMode' => 'int32',
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'subscriptionNum' => 'int32',
        'productInfos' => null,
        'tags' => null,
        'promotionInfo' => null,
        'isAutoRenew' => 'int32'
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
    * flavorRef  云服务器使用的规格ID
    * name  云服务器名称。 取值范围： • 只能由中文字符、英文字母、数字、下划线、中划线组成，且长度小于等于64个字符。 • 创建的云服务器数量大于1时，长度小于等于59个字符
    * vpcId  VPC的ID
    * availabilityZone  云服务器对应可用分区信息。(两个主备分区，中间用“,”分割，例如az1.dc1,az2.dc2)
    * enterpriseProjectId  企业项目ID
    * nics  云服务器对应的网卡信息
    * securityGroups  云服务器对应安全组信息
    * comment  备注信息
    * region  云服务器所在区域ID
    * cloudServiceType  服务类型： 默认hws.service.type.dbss
    * chargingMode  计费模式： • 0：包周期计费 • 1：按需计费
    * periodType  订购周期类型： • 0：天； • 1：周； • 2：月； • 3：年； • 4：小时； • 5：绝对时间
    * periodNum  订购周期数
    * subscriptionNum  订购数量： DBSS只支持订购1套，不支持多套
    * productInfos  产品信息列表
    * tags  资源标签
    * promotionInfo  折扣信息
    * isAutoRenew  自动续费 1表示自动续费，0表示不自动续费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavor_ref',
            'name' => 'name',
            'vpcId' => 'vpc_id',
            'availabilityZone' => 'availability_zone',
            'enterpriseProjectId' => 'enterprise_project_id',
            'nics' => 'nics',
            'securityGroups' => 'security_groups',
            'comment' => 'comment',
            'region' => 'region',
            'cloudServiceType' => 'cloud_service_type',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'subscriptionNum' => 'subscription_num',
            'productInfos' => 'product_infos',
            'tags' => 'tags',
            'promotionInfo' => 'promotion_info',
            'isAutoRenew' => 'is_auto_renew'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  云服务器使用的规格ID
    * name  云服务器名称。 取值范围： • 只能由中文字符、英文字母、数字、下划线、中划线组成，且长度小于等于64个字符。 • 创建的云服务器数量大于1时，长度小于等于59个字符
    * vpcId  VPC的ID
    * availabilityZone  云服务器对应可用分区信息。(两个主备分区，中间用“,”分割，例如az1.dc1,az2.dc2)
    * enterpriseProjectId  企业项目ID
    * nics  云服务器对应的网卡信息
    * securityGroups  云服务器对应安全组信息
    * comment  备注信息
    * region  云服务器所在区域ID
    * cloudServiceType  服务类型： 默认hws.service.type.dbss
    * chargingMode  计费模式： • 0：包周期计费 • 1：按需计费
    * periodType  订购周期类型： • 0：天； • 1：周； • 2：月； • 3：年； • 4：小时； • 5：绝对时间
    * periodNum  订购周期数
    * subscriptionNum  订购数量： DBSS只支持订购1套，不支持多套
    * productInfos  产品信息列表
    * tags  资源标签
    * promotionInfo  折扣信息
    * isAutoRenew  自动续费 1表示自动续费，0表示不自动续费
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'name' => 'setName',
            'vpcId' => 'setVpcId',
            'availabilityZone' => 'setAvailabilityZone',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'nics' => 'setNics',
            'securityGroups' => 'setSecurityGroups',
            'comment' => 'setComment',
            'region' => 'setRegion',
            'cloudServiceType' => 'setCloudServiceType',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'subscriptionNum' => 'setSubscriptionNum',
            'productInfos' => 'setProductInfos',
            'tags' => 'setTags',
            'promotionInfo' => 'setPromotionInfo',
            'isAutoRenew' => 'setIsAutoRenew'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  云服务器使用的规格ID
    * name  云服务器名称。 取值范围： • 只能由中文字符、英文字母、数字、下划线、中划线组成，且长度小于等于64个字符。 • 创建的云服务器数量大于1时，长度小于等于59个字符
    * vpcId  VPC的ID
    * availabilityZone  云服务器对应可用分区信息。(两个主备分区，中间用“,”分割，例如az1.dc1,az2.dc2)
    * enterpriseProjectId  企业项目ID
    * nics  云服务器对应的网卡信息
    * securityGroups  云服务器对应安全组信息
    * comment  备注信息
    * region  云服务器所在区域ID
    * cloudServiceType  服务类型： 默认hws.service.type.dbss
    * chargingMode  计费模式： • 0：包周期计费 • 1：按需计费
    * periodType  订购周期类型： • 0：天； • 1：周； • 2：月； • 3：年； • 4：小时； • 5：绝对时间
    * periodNum  订购周期数
    * subscriptionNum  订购数量： DBSS只支持订购1套，不支持多套
    * productInfos  产品信息列表
    * tags  资源标签
    * promotionInfo  折扣信息
    * isAutoRenew  自动续费 1表示自动续费，0表示不自动续费
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'name' => 'getName',
            'vpcId' => 'getVpcId',
            'availabilityZone' => 'getAvailabilityZone',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'nics' => 'getNics',
            'securityGroups' => 'getSecurityGroups',
            'comment' => 'getComment',
            'region' => 'getRegion',
            'cloudServiceType' => 'getCloudServiceType',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'subscriptionNum' => 'getSubscriptionNum',
            'productInfos' => 'getProductInfos',
            'tags' => 'getTags',
            'promotionInfo' => 'getPromotionInfo',
            'isAutoRenew' => 'getIsAutoRenew'
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
        $this->container['productInfos'] = isset($data['productInfos']) ? $data['productInfos'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
        if ($this->container['productInfos'] === null) {
            $invalidProperties[] = "'productInfos' can't be null";
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
    * Gets flavorRef
    *  云服务器使用的规格ID
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 云服务器使用的规格ID
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets name
    *  云服务器名称。 取值范围： • 只能由中文字符、英文字母、数字、下划线、中划线组成，且长度小于等于64个字符。 • 创建的云服务器数量大于1时，长度小于等于59个字符
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
    * @param string $name 云服务器名称。 取值范围： • 只能由中文字符、英文字母、数字、下划线、中划线组成，且长度小于等于64个字符。 • 创建的云服务器数量大于1时，长度小于等于59个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC的ID
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
    * @param string $vpcId VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  云服务器对应可用分区信息。(两个主备分区，中间用“,”分割，例如az1.dc1,az2.dc2)
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
    * @param string $availabilityZone 云服务器对应可用分区信息。(两个主备分区，中间用“,”分割，例如az1.dc1,az2.dc2)
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets nics
    *  云服务器对应的网卡信息
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestNics[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestNics[] $nics 云服务器对应的网卡信息
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets securityGroups
    *  云服务器对应安全组信息
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestSecurityGroups[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestSecurityGroups[] $securityGroups 云服务器对应安全组信息
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets comment
    *  备注信息
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 备注信息
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets region
    *  云服务器所在区域ID
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 云服务器所在区域ID
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  服务类型： 默认hws.service.type.dbss
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType 服务类型： 默认hws.service.type.dbss
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式： • 0：包周期计费 • 1：按需计费
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费模式： • 0：包周期计费 • 1：按需计费
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型： • 0：天； • 1：周； • 2：月； • 3：年； • 4：小时； • 5：绝对时间
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
    * @param int $periodType 订购周期类型： • 0：天； • 1：周； • 2：月； • 3：年； • 4：小时； • 5：绝对时间
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
    *  订购周期数
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
    * @param int $periodNum 订购周期数
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  订购数量： DBSS只支持订购1套，不支持多套
    *
    * @return int
    */
    public function getSubscriptionNum()
    {
        return $this->container['subscriptionNum'];
    }

    /**
    * Sets subscriptionNum
    *
    * @param int $subscriptionNum 订购数量： DBSS只支持订购1套，不支持多套
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
        return $this;
    }

    /**
    * Gets productInfos
    *  产品信息列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestProductInfos[]
    */
    public function getProductInfos()
    {
        return $this->container['productInfos'];
    }

    /**
    * Sets productInfos
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\CreateInstancePeriodRequestProductInfos[] $productInfos 产品信息列表
    *
    * @return $this
    */
    public function setProductInfos($productInfos)
    {
        $this->container['productInfos'] = $productInfos;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\KeyValueBean[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\KeyValueBean[]|null $tags 资源标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  折扣信息
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
    * @param string|null $promotionInfo 折扣信息
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  自动续费 1表示自动续费，0表示不自动续费
    *
    * @return int|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int|null $isAutoRenew 自动续费 1表示自动续费，0表示不自动续费
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
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

