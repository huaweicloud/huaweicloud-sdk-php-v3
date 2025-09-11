<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChargeOrderDbssNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChargeOrderDbssNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  资源标签列表
    * assetNums  资产数量
    * availabilityZone  可用分区
    * chargingMode  计费模式
    * cloudServiceType  服务类型
    * comment  备注信息
    * compositeProductId  组合套餐
    * deployMode  实例部署方式，默认为云上 - CLOUD： 云上 - OUTSIDE：云外
    * discountId  折扣ID
    * enterpriseProjectId  企业项目ID
    * flavorRef  ECS规格ID
    * hxPassword  前端登录密码
    * imageBusinessType  镜像业务类型
    * isAutoRenew  自费续费  - 1：自动  - 0：不自动
    * name  实例名称
    * nics  网卡信息
    * outsideInsConfig  outsideInsConfig
    * periodNum  订购周期数目
    * periodType  订购周期类型
    * productInfos  产品列表
    * promotionActivityId  促销ID
    * promotionInfo  折扣信息
    * publicIp  publicIp
    * regionId  区域ID
    * securityGroups  安全组信息
    * subscriptionNum  订购数量，当前仅支持1台
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\HuaweiCloud\SDK\Dbss\V1\Model\ResourceTagInfoBean[]',
            'assetNums' => 'int',
            'availabilityZone' => 'string',
            'chargingMode' => 'int',
            'cloudServiceType' => 'string',
            'comment' => 'string',
            'compositeProductId' => 'string',
            'deployMode' => 'string',
            'discountId' => 'string',
            'enterpriseProjectId' => 'string',
            'flavorRef' => 'string',
            'hxPassword' => 'string',
            'imageBusinessType' => 'int',
            'isAutoRenew' => 'int',
            'name' => 'string',
            'nics' => '\HuaweiCloud\SDK\Dbss\V1\Model\Nic[]',
            'outsideInsConfig' => '\HuaweiCloud\SDK\Dbss\V1\Model\OutsideInsConfig',
            'periodNum' => 'int',
            'periodType' => 'int',
            'productInfos' => '\HuaweiCloud\SDK\Dbss\V1\Model\ProductInfoBeanNew[]',
            'promotionActivityId' => 'string',
            'promotionInfo' => 'string',
            'publicIp' => '\HuaweiCloud\SDK\Dbss\V1\Model\PublicIp',
            'regionId' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Dbss\V1\Model\SecurityGroup[]',
            'subscriptionNum' => 'int',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  资源标签列表
    * assetNums  资产数量
    * availabilityZone  可用分区
    * chargingMode  计费模式
    * cloudServiceType  服务类型
    * comment  备注信息
    * compositeProductId  组合套餐
    * deployMode  实例部署方式，默认为云上 - CLOUD： 云上 - OUTSIDE：云外
    * discountId  折扣ID
    * enterpriseProjectId  企业项目ID
    * flavorRef  ECS规格ID
    * hxPassword  前端登录密码
    * imageBusinessType  镜像业务类型
    * isAutoRenew  自费续费  - 1：自动  - 0：不自动
    * name  实例名称
    * nics  网卡信息
    * outsideInsConfig  outsideInsConfig
    * periodNum  订购周期数目
    * periodType  订购周期类型
    * productInfos  产品列表
    * promotionActivityId  促销ID
    * promotionInfo  折扣信息
    * publicIp  publicIp
    * regionId  区域ID
    * securityGroups  安全组信息
    * subscriptionNum  订购数量，当前仅支持1台
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'assetNums' => 'int32',
        'availabilityZone' => null,
        'chargingMode' => 'int32',
        'cloudServiceType' => null,
        'comment' => null,
        'compositeProductId' => null,
        'deployMode' => null,
        'discountId' => null,
        'enterpriseProjectId' => null,
        'flavorRef' => null,
        'hxPassword' => null,
        'imageBusinessType' => 'int32',
        'isAutoRenew' => 'int32',
        'name' => null,
        'nics' => null,
        'outsideInsConfig' => null,
        'periodNum' => 'int32',
        'periodType' => 'int32',
        'productInfos' => null,
        'promotionActivityId' => null,
        'promotionInfo' => null,
        'publicIp' => null,
        'regionId' => null,
        'securityGroups' => null,
        'subscriptionNum' => 'int32',
        'vpcId' => null
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
    * tags  资源标签列表
    * assetNums  资产数量
    * availabilityZone  可用分区
    * chargingMode  计费模式
    * cloudServiceType  服务类型
    * comment  备注信息
    * compositeProductId  组合套餐
    * deployMode  实例部署方式，默认为云上 - CLOUD： 云上 - OUTSIDE：云外
    * discountId  折扣ID
    * enterpriseProjectId  企业项目ID
    * flavorRef  ECS规格ID
    * hxPassword  前端登录密码
    * imageBusinessType  镜像业务类型
    * isAutoRenew  自费续费  - 1：自动  - 0：不自动
    * name  实例名称
    * nics  网卡信息
    * outsideInsConfig  outsideInsConfig
    * periodNum  订购周期数目
    * periodType  订购周期类型
    * productInfos  产品列表
    * promotionActivityId  促销ID
    * promotionInfo  折扣信息
    * publicIp  publicIp
    * regionId  区域ID
    * securityGroups  安全组信息
    * subscriptionNum  订购数量，当前仅支持1台
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'assetNums' => 'asset_nums',
            'availabilityZone' => 'availability_zone',
            'chargingMode' => 'charging_mode',
            'cloudServiceType' => 'cloud_service_type',
            'comment' => 'comment',
            'compositeProductId' => 'composite_product_id',
            'deployMode' => 'deploy_mode',
            'discountId' => 'discount_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'flavorRef' => 'flavor_ref',
            'hxPassword' => 'hx_password',
            'imageBusinessType' => 'image_business_type',
            'isAutoRenew' => 'is_auto_renew',
            'name' => 'name',
            'nics' => 'nics',
            'outsideInsConfig' => 'outside_ins_config',
            'periodNum' => 'period_num',
            'periodType' => 'period_type',
            'productInfos' => 'product_infos',
            'promotionActivityId' => 'promotion_activity_id',
            'promotionInfo' => 'promotion_info',
            'publicIp' => 'public_ip',
            'regionId' => 'region_id',
            'securityGroups' => 'security_groups',
            'subscriptionNum' => 'subscription_num',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  资源标签列表
    * assetNums  资产数量
    * availabilityZone  可用分区
    * chargingMode  计费模式
    * cloudServiceType  服务类型
    * comment  备注信息
    * compositeProductId  组合套餐
    * deployMode  实例部署方式，默认为云上 - CLOUD： 云上 - OUTSIDE：云外
    * discountId  折扣ID
    * enterpriseProjectId  企业项目ID
    * flavorRef  ECS规格ID
    * hxPassword  前端登录密码
    * imageBusinessType  镜像业务类型
    * isAutoRenew  自费续费  - 1：自动  - 0：不自动
    * name  实例名称
    * nics  网卡信息
    * outsideInsConfig  outsideInsConfig
    * periodNum  订购周期数目
    * periodType  订购周期类型
    * productInfos  产品列表
    * promotionActivityId  促销ID
    * promotionInfo  折扣信息
    * publicIp  publicIp
    * regionId  区域ID
    * securityGroups  安全组信息
    * subscriptionNum  订购数量，当前仅支持1台
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'assetNums' => 'setAssetNums',
            'availabilityZone' => 'setAvailabilityZone',
            'chargingMode' => 'setChargingMode',
            'cloudServiceType' => 'setCloudServiceType',
            'comment' => 'setComment',
            'compositeProductId' => 'setCompositeProductId',
            'deployMode' => 'setDeployMode',
            'discountId' => 'setDiscountId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'flavorRef' => 'setFlavorRef',
            'hxPassword' => 'setHxPassword',
            'imageBusinessType' => 'setImageBusinessType',
            'isAutoRenew' => 'setIsAutoRenew',
            'name' => 'setName',
            'nics' => 'setNics',
            'outsideInsConfig' => 'setOutsideInsConfig',
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType',
            'productInfos' => 'setProductInfos',
            'promotionActivityId' => 'setPromotionActivityId',
            'promotionInfo' => 'setPromotionInfo',
            'publicIp' => 'setPublicIp',
            'regionId' => 'setRegionId',
            'securityGroups' => 'setSecurityGroups',
            'subscriptionNum' => 'setSubscriptionNum',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  资源标签列表
    * assetNums  资产数量
    * availabilityZone  可用分区
    * chargingMode  计费模式
    * cloudServiceType  服务类型
    * comment  备注信息
    * compositeProductId  组合套餐
    * deployMode  实例部署方式，默认为云上 - CLOUD： 云上 - OUTSIDE：云外
    * discountId  折扣ID
    * enterpriseProjectId  企业项目ID
    * flavorRef  ECS规格ID
    * hxPassword  前端登录密码
    * imageBusinessType  镜像业务类型
    * isAutoRenew  自费续费  - 1：自动  - 0：不自动
    * name  实例名称
    * nics  网卡信息
    * outsideInsConfig  outsideInsConfig
    * periodNum  订购周期数目
    * periodType  订购周期类型
    * productInfos  产品列表
    * promotionActivityId  促销ID
    * promotionInfo  折扣信息
    * publicIp  publicIp
    * regionId  区域ID
    * securityGroups  安全组信息
    * subscriptionNum  订购数量，当前仅支持1台
    * vpcId  VPC ID
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'assetNums' => 'getAssetNums',
            'availabilityZone' => 'getAvailabilityZone',
            'chargingMode' => 'getChargingMode',
            'cloudServiceType' => 'getCloudServiceType',
            'comment' => 'getComment',
            'compositeProductId' => 'getCompositeProductId',
            'deployMode' => 'getDeployMode',
            'discountId' => 'getDiscountId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'flavorRef' => 'getFlavorRef',
            'hxPassword' => 'getHxPassword',
            'imageBusinessType' => 'getImageBusinessType',
            'isAutoRenew' => 'getIsAutoRenew',
            'name' => 'getName',
            'nics' => 'getNics',
            'outsideInsConfig' => 'getOutsideInsConfig',
            'periodNum' => 'getPeriodNum',
            'periodType' => 'getPeriodType',
            'productInfos' => 'getProductInfos',
            'promotionActivityId' => 'getPromotionActivityId',
            'promotionInfo' => 'getPromotionInfo',
            'publicIp' => 'getPublicIp',
            'regionId' => 'getRegionId',
            'securityGroups' => 'getSecurityGroups',
            'subscriptionNum' => 'getSubscriptionNum',
            'vpcId' => 'getVpcId'
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['assetNums'] = isset($data['assetNums']) ? $data['assetNums'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['compositeProductId'] = isset($data['compositeProductId']) ? $data['compositeProductId'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['discountId'] = isset($data['discountId']) ? $data['discountId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['hxPassword'] = isset($data['hxPassword']) ? $data['hxPassword'] : null;
        $this->container['imageBusinessType'] = isset($data['imageBusinessType']) ? $data['imageBusinessType'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['outsideInsConfig'] = isset($data['outsideInsConfig']) ? $data['outsideInsConfig'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['productInfos'] = isset($data['productInfos']) ? $data['productInfos'] : null;
        $this->container['promotionActivityId'] = isset($data['promotionActivityId']) ? $data['promotionActivityId'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetNums'] === null) {
            $invalidProperties[] = "'assetNums' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
        if ($this->container['deployMode'] === null) {
            $invalidProperties[] = "'deployMode' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['hxPassword'] === null) {
            $invalidProperties[] = "'hxPassword' can't be null";
        }
        if ($this->container['imageBusinessType'] === null) {
            $invalidProperties[] = "'imageBusinessType' can't be null";
        }
        if ($this->container['isAutoRenew'] === null) {
            $invalidProperties[] = "'isAutoRenew' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['productInfos'] === null) {
            $invalidProperties[] = "'productInfos' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
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
    * Gets tags
    *  资源标签列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\ResourceTagInfoBean[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\ResourceTagInfoBean[]|null $tags 资源标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets assetNums
    *  资产数量
    *
    * @return int
    */
    public function getAssetNums()
    {
        return $this->container['assetNums'];
    }

    /**
    * Sets assetNums
    *
    * @param int $assetNums 资产数量
    *
    * @return $this
    */
    public function setAssetNums($assetNums)
    {
        $this->container['assetNums'] = $assetNums;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用分区
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
    * @param string $availabilityZone 可用分区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式
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
    * @param int $chargingMode 计费模式
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  服务类型
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
    * @param string $cloudServiceType 服务类型
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
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
    * Gets compositeProductId
    *  组合套餐
    *
    * @return string|null
    */
    public function getCompositeProductId()
    {
        return $this->container['compositeProductId'];
    }

    /**
    * Sets compositeProductId
    *
    * @param string|null $compositeProductId 组合套餐
    *
    * @return $this
    */
    public function setCompositeProductId($compositeProductId)
    {
        $this->container['compositeProductId'] = $compositeProductId;
        return $this;
    }

    /**
    * Gets deployMode
    *  实例部署方式，默认为云上 - CLOUD： 云上 - OUTSIDE：云外
    *
    * @return string
    */
    public function getDeployMode()
    {
        return $this->container['deployMode'];
    }

    /**
    * Sets deployMode
    *
    * @param string $deployMode 实例部署方式，默认为云上 - CLOUD： 云上 - OUTSIDE：云外
    *
    * @return $this
    */
    public function setDeployMode($deployMode)
    {
        $this->container['deployMode'] = $deployMode;
        return $this;
    }

    /**
    * Gets discountId
    *  折扣ID
    *
    * @return string|null
    */
    public function getDiscountId()
    {
        return $this->container['discountId'];
    }

    /**
    * Sets discountId
    *
    * @param string|null $discountId 折扣ID
    *
    * @return $this
    */
    public function setDiscountId($discountId)
    {
        $this->container['discountId'] = $discountId;
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
    * Gets flavorRef
    *  ECS规格ID
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
    * @param string $flavorRef ECS规格ID
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets hxPassword
    *  前端登录密码
    *
    * @return string
    */
    public function getHxPassword()
    {
        return $this->container['hxPassword'];
    }

    /**
    * Sets hxPassword
    *
    * @param string $hxPassword 前端登录密码
    *
    * @return $this
    */
    public function setHxPassword($hxPassword)
    {
        $this->container['hxPassword'] = $hxPassword;
        return $this;
    }

    /**
    * Gets imageBusinessType
    *  镜像业务类型
    *
    * @return int
    */
    public function getImageBusinessType()
    {
        return $this->container['imageBusinessType'];
    }

    /**
    * Sets imageBusinessType
    *
    * @param int $imageBusinessType 镜像业务类型
    *
    * @return $this
    */
    public function setImageBusinessType($imageBusinessType)
    {
        $this->container['imageBusinessType'] = $imageBusinessType;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  自费续费  - 1：自动  - 0：不自动
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
    * @param int $isAutoRenew 自费续费  - 1：自动  - 0：不自动
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets name
    *  实例名称
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
    * @param string $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nics
    *  网卡信息
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\Nic[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\Nic[] $nics 网卡信息
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets outsideInsConfig
    *  outsideInsConfig
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\OutsideInsConfig|null
    */
    public function getOutsideInsConfig()
    {
        return $this->container['outsideInsConfig'];
    }

    /**
    * Sets outsideInsConfig
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\OutsideInsConfig|null $outsideInsConfig outsideInsConfig
    *
    * @return $this
    */
    public function setOutsideInsConfig($outsideInsConfig)
    {
        $this->container['outsideInsConfig'] = $outsideInsConfig;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数目
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
    * @param int $periodNum 订购周期数目
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型
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
    * @param int $periodType 订购周期类型
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets productInfos
    *  产品列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\ProductInfoBeanNew[]
    */
    public function getProductInfos()
    {
        return $this->container['productInfos'];
    }

    /**
    * Sets productInfos
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\ProductInfoBeanNew[] $productInfos 产品列表
    *
    * @return $this
    */
    public function setProductInfos($productInfos)
    {
        $this->container['productInfos'] = $productInfos;
        return $this;
    }

    /**
    * Gets promotionActivityId
    *  促销ID
    *
    * @return string|null
    */
    public function getPromotionActivityId()
    {
        return $this->container['promotionActivityId'];
    }

    /**
    * Sets promotionActivityId
    *
    * @param string|null $promotionActivityId 促销ID
    *
    * @return $this
    */
    public function setPromotionActivityId($promotionActivityId)
    {
        $this->container['promotionActivityId'] = $promotionActivityId;
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
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\PublicIp|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\PublicIp|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组信息
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\SecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\SecurityGroup[] $securityGroups 安全组信息
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  订购数量，当前仅支持1台
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
    * @param int $subscriptionNum 订购数量，当前仅支持1台
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID
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
    * @param string $vpcId VPC ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

