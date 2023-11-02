<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigCommodityOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigCommodityOrder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  实例所属项目id
    * orderId  CBC订单id
    * regionId  当前所属region Id
    * resourceId  实例id
    * resourceName  实例名称
    * subscriptionId  CBC订购id
    * resourceType  资源类型，hws.resource.type.dayu
    * resourceSpecCode  产品规格编码，例如dayu.starter，dayu.basic，dayu.advanced等
    * productId  CBC产品id，未安装CBC的环境无需这个值
    * orderType  订单类型标识符
    * chargeType  支付选项，留空
    * isAutoRenew  自动续费标识，当前实例为按需支付时必填，0代表不续费，1代表自动续费
    * status  实例状态,1未生效2生效中3已删除=退订4保留期=冻结5宽限期6删除中
    * vpcId  虚拟私有云id
    * securityGroupId  安全组id
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * effectiveTime  生效时间点，包周期实例有效
    * expireDays  过期时间天数，包周期实例有效
    * expireTime  过期时间点，包周期有效
    * lockCheckEndpoint  CBC锁定节点
    * createUser  创建用户
    * createTime  创建时间点
    * domainId  用户domain id
    * isTrialOrder  是否试用订单
    * workSpaceMode  工作空间模式说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'orderId' => 'string',
            'regionId' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'subscriptionId' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'productId' => 'string',
            'orderType' => 'string',
            'chargeType' => 'string',
            'isAutoRenew' => 'int',
            'status' => 'int',
            'vpcId' => 'string',
            'securityGroupId' => 'string',
            'epsId' => 'string',
            'effectiveTime' => 'float',
            'expireDays' => 'string',
            'expireTime' => 'float',
            'lockCheckEndpoint' => 'string',
            'createUser' => 'string',
            'createTime' => 'float',
            'domainId' => 'string',
            'isTrialOrder' => 'int',
            'workSpaceMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  实例所属项目id
    * orderId  CBC订单id
    * regionId  当前所属region Id
    * resourceId  实例id
    * resourceName  实例名称
    * subscriptionId  CBC订购id
    * resourceType  资源类型，hws.resource.type.dayu
    * resourceSpecCode  产品规格编码，例如dayu.starter，dayu.basic，dayu.advanced等
    * productId  CBC产品id，未安装CBC的环境无需这个值
    * orderType  订单类型标识符
    * chargeType  支付选项，留空
    * isAutoRenew  自动续费标识，当前实例为按需支付时必填，0代表不续费，1代表自动续费
    * status  实例状态,1未生效2生效中3已删除=退订4保留期=冻结5宽限期6删除中
    * vpcId  虚拟私有云id
    * securityGroupId  安全组id
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * effectiveTime  生效时间点，包周期实例有效
    * expireDays  过期时间天数，包周期实例有效
    * expireTime  过期时间点，包周期有效
    * lockCheckEndpoint  CBC锁定节点
    * createUser  创建用户
    * createTime  创建时间点
    * domainId  用户domain id
    * isTrialOrder  是否试用订单
    * workSpaceMode  工作空间模式说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'orderId' => null,
        'regionId' => null,
        'resourceId' => null,
        'resourceName' => null,
        'subscriptionId' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'productId' => null,
        'orderType' => null,
        'chargeType' => null,
        'isAutoRenew' => null,
        'status' => null,
        'vpcId' => null,
        'securityGroupId' => null,
        'epsId' => null,
        'effectiveTime' => null,
        'expireDays' => null,
        'expireTime' => null,
        'lockCheckEndpoint' => null,
        'createUser' => null,
        'createTime' => null,
        'domainId' => null,
        'isTrialOrder' => null,
        'workSpaceMode' => null
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
    * projectId  实例所属项目id
    * orderId  CBC订单id
    * regionId  当前所属region Id
    * resourceId  实例id
    * resourceName  实例名称
    * subscriptionId  CBC订购id
    * resourceType  资源类型，hws.resource.type.dayu
    * resourceSpecCode  产品规格编码，例如dayu.starter，dayu.basic，dayu.advanced等
    * productId  CBC产品id，未安装CBC的环境无需这个值
    * orderType  订单类型标识符
    * chargeType  支付选项，留空
    * isAutoRenew  自动续费标识，当前实例为按需支付时必填，0代表不续费，1代表自动续费
    * status  实例状态,1未生效2生效中3已删除=退订4保留期=冻结5宽限期6删除中
    * vpcId  虚拟私有云id
    * securityGroupId  安全组id
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * effectiveTime  生效时间点，包周期实例有效
    * expireDays  过期时间天数，包周期实例有效
    * expireTime  过期时间点，包周期有效
    * lockCheckEndpoint  CBC锁定节点
    * createUser  创建用户
    * createTime  创建时间点
    * domainId  用户domain id
    * isTrialOrder  是否试用订单
    * workSpaceMode  工作空间模式说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'orderId' => 'order_id',
            'regionId' => 'region_id',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'subscriptionId' => 'subscription_id',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'productId' => 'product_id',
            'orderType' => 'order_type',
            'chargeType' => 'charge_type',
            'isAutoRenew' => 'is_auto_renew',
            'status' => 'status',
            'vpcId' => 'vpc_id',
            'securityGroupId' => 'security_group_id',
            'epsId' => 'eps_id',
            'effectiveTime' => 'effective_time',
            'expireDays' => 'expire_days',
            'expireTime' => 'expire_time',
            'lockCheckEndpoint' => 'lock_check_endpoint',
            'createUser' => 'create_user',
            'createTime' => 'create_time',
            'domainId' => 'domain_id',
            'isTrialOrder' => 'is_trial_order',
            'workSpaceMode' => 'work_space_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  实例所属项目id
    * orderId  CBC订单id
    * regionId  当前所属region Id
    * resourceId  实例id
    * resourceName  实例名称
    * subscriptionId  CBC订购id
    * resourceType  资源类型，hws.resource.type.dayu
    * resourceSpecCode  产品规格编码，例如dayu.starter，dayu.basic，dayu.advanced等
    * productId  CBC产品id，未安装CBC的环境无需这个值
    * orderType  订单类型标识符
    * chargeType  支付选项，留空
    * isAutoRenew  自动续费标识，当前实例为按需支付时必填，0代表不续费，1代表自动续费
    * status  实例状态,1未生效2生效中3已删除=退订4保留期=冻结5宽限期6删除中
    * vpcId  虚拟私有云id
    * securityGroupId  安全组id
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * effectiveTime  生效时间点，包周期实例有效
    * expireDays  过期时间天数，包周期实例有效
    * expireTime  过期时间点，包周期有效
    * lockCheckEndpoint  CBC锁定节点
    * createUser  创建用户
    * createTime  创建时间点
    * domainId  用户domain id
    * isTrialOrder  是否试用订单
    * workSpaceMode  工作空间模式说明
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'orderId' => 'setOrderId',
            'regionId' => 'setRegionId',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'subscriptionId' => 'setSubscriptionId',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'productId' => 'setProductId',
            'orderType' => 'setOrderType',
            'chargeType' => 'setChargeType',
            'isAutoRenew' => 'setIsAutoRenew',
            'status' => 'setStatus',
            'vpcId' => 'setVpcId',
            'securityGroupId' => 'setSecurityGroupId',
            'epsId' => 'setEpsId',
            'effectiveTime' => 'setEffectiveTime',
            'expireDays' => 'setExpireDays',
            'expireTime' => 'setExpireTime',
            'lockCheckEndpoint' => 'setLockCheckEndpoint',
            'createUser' => 'setCreateUser',
            'createTime' => 'setCreateTime',
            'domainId' => 'setDomainId',
            'isTrialOrder' => 'setIsTrialOrder',
            'workSpaceMode' => 'setWorkSpaceMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  实例所属项目id
    * orderId  CBC订单id
    * regionId  当前所属region Id
    * resourceId  实例id
    * resourceName  实例名称
    * subscriptionId  CBC订购id
    * resourceType  资源类型，hws.resource.type.dayu
    * resourceSpecCode  产品规格编码，例如dayu.starter，dayu.basic，dayu.advanced等
    * productId  CBC产品id，未安装CBC的环境无需这个值
    * orderType  订单类型标识符
    * chargeType  支付选项，留空
    * isAutoRenew  自动续费标识，当前实例为按需支付时必填，0代表不续费，1代表自动续费
    * status  实例状态,1未生效2生效中3已删除=退订4保留期=冻结5宽限期6删除中
    * vpcId  虚拟私有云id
    * securityGroupId  安全组id
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * effectiveTime  生效时间点，包周期实例有效
    * expireDays  过期时间天数，包周期实例有效
    * expireTime  过期时间点，包周期有效
    * lockCheckEndpoint  CBC锁定节点
    * createUser  创建用户
    * createTime  创建时间点
    * domainId  用户domain id
    * isTrialOrder  是否试用订单
    * workSpaceMode  工作空间模式说明
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'orderId' => 'getOrderId',
            'regionId' => 'getRegionId',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'subscriptionId' => 'getSubscriptionId',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'productId' => 'getProductId',
            'orderType' => 'getOrderType',
            'chargeType' => 'getChargeType',
            'isAutoRenew' => 'getIsAutoRenew',
            'status' => 'getStatus',
            'vpcId' => 'getVpcId',
            'securityGroupId' => 'getSecurityGroupId',
            'epsId' => 'getEpsId',
            'effectiveTime' => 'getEffectiveTime',
            'expireDays' => 'getExpireDays',
            'expireTime' => 'getExpireTime',
            'lockCheckEndpoint' => 'getLockCheckEndpoint',
            'createUser' => 'getCreateUser',
            'createTime' => 'getCreateTime',
            'domainId' => 'getDomainId',
            'isTrialOrder' => 'getIsTrialOrder',
            'workSpaceMode' => 'getWorkSpaceMode'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['chargeType'] = isset($data['chargeType']) ? $data['chargeType'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireDays'] = isset($data['expireDays']) ? $data['expireDays'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['lockCheckEndpoint'] = isset($data['lockCheckEndpoint']) ? $data['lockCheckEndpoint'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['isTrialOrder'] = isset($data['isTrialOrder']) ? $data['isTrialOrder'] : null;
        $this->container['workSpaceMode'] = isset($data['workSpaceMode']) ? $data['workSpaceMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 128)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subscriptionId']) && (mb_strlen($this->container['subscriptionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'subscriptionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['subscriptionId']) && (mb_strlen($this->container['subscriptionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subscriptionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 128)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orderType']) && (mb_strlen($this->container['orderType']) > 128)) {
                $invalidProperties[] = "invalid value for 'orderType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['orderType']) && (mb_strlen($this->container['orderType']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargeType']) && (mb_strlen($this->container['chargeType']) > 128)) {
                $invalidProperties[] = "invalid value for 'chargeType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chargeType']) && (mb_strlen($this->container['chargeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 6)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['securityGroupId']) && (mb_strlen($this->container['securityGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['securityGroupId']) && (mb_strlen($this->container['securityGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['epsId']) && (mb_strlen($this->container['epsId']) > 128)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['epsId']) && (mb_strlen($this->container['epsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effectiveTime']) && ($this->container['effectiveTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['effectiveTime']) && ($this->container['effectiveTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireDays']) && (mb_strlen($this->container['expireDays']) > 128)) {
                $invalidProperties[] = "invalid value for 'expireDays', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['expireDays']) && (mb_strlen($this->container['expireDays']) < 1)) {
                $invalidProperties[] = "invalid value for 'expireDays', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lockCheckEndpoint']) && (mb_strlen($this->container['lockCheckEndpoint']) > 128)) {
                $invalidProperties[] = "invalid value for 'lockCheckEndpoint', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['lockCheckEndpoint']) && (mb_strlen($this->container['lockCheckEndpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'lockCheckEndpoint', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isTrialOrder']) && ($this->container['isTrialOrder'] > 1)) {
                $invalidProperties[] = "invalid value for 'isTrialOrder', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isTrialOrder']) && ($this->container['isTrialOrder'] < 0)) {
                $invalidProperties[] = "invalid value for 'isTrialOrder', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workSpaceMode']) && (mb_strlen($this->container['workSpaceMode']) > 16)) {
                $invalidProperties[] = "invalid value for 'workSpaceMode', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['workSpaceMode']) && (mb_strlen($this->container['workSpaceMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'workSpaceMode', the character length must be bigger than or equal to 1.";
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
    * Gets projectId
    *  实例所属项目id
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
    * @param string|null $projectId 实例所属项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets orderId
    *  CBC订单id
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
    * @param string|null $orderId CBC订单id
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets regionId
    *  当前所属region Id
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
    * @param string|null $regionId 当前所属region Id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets resourceId
    *  实例id
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
    * @param string|null $resourceId 实例id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  实例名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 实例名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  CBC订购id
    *
    * @return string|null
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string|null $subscriptionId CBC订购id
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型，hws.resource.type.dayu
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
    * @param string|null $resourceType 资源类型，hws.resource.type.dayu
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  产品规格编码，例如dayu.starter，dayu.basic，dayu.advanced等
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 产品规格编码，例如dayu.starter，dayu.basic，dayu.advanced等
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets productId
    *  CBC产品id，未安装CBC的环境无需这个值
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
    * @param string|null $productId CBC产品id，未安装CBC的环境无需这个值
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets orderType
    *  订单类型标识符
    *
    * @return string|null
    */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
    * Sets orderType
    *
    * @param string|null $orderType 订单类型标识符
    *
    * @return $this
    */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;
        return $this;
    }

    /**
    * Gets chargeType
    *  支付选项，留空
    *
    * @return string|null
    */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
    * Sets chargeType
    *
    * @param string|null $chargeType 支付选项，留空
    *
    * @return $this
    */
    public function setChargeType($chargeType)
    {
        $this->container['chargeType'] = $chargeType;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  自动续费标识，当前实例为按需支付时必填，0代表不续费，1代表自动续费
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
    * @param int|null $isAutoRenew 自动续费标识，当前实例为按需支付时必填，0代表不续费，1代表自动续费
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets status
    *  实例状态,1未生效2生效中3已删除=退订4保留期=冻结5宽限期6删除中
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 实例状态,1未生效2生效中3已删除=退订4保留期=冻结5宽限期6删除中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云id
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云id
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
    *  安全组id
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组id
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  生效时间点，包周期实例有效
    *
    * @return float|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param float|null $effectiveTime 生效时间点，包周期实例有效
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireDays
    *  过期时间天数，包周期实例有效
    *
    * @return string|null
    */
    public function getExpireDays()
    {
        return $this->container['expireDays'];
    }

    /**
    * Sets expireDays
    *
    * @param string|null $expireDays 过期时间天数，包周期实例有效
    *
    * @return $this
    */
    public function setExpireDays($expireDays)
    {
        $this->container['expireDays'] = $expireDays;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间点，包周期有效
    *
    * @return float|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param float|null $expireTime 过期时间点，包周期有效
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets lockCheckEndpoint
    *  CBC锁定节点
    *
    * @return string|null
    */
    public function getLockCheckEndpoint()
    {
        return $this->container['lockCheckEndpoint'];
    }

    /**
    * Sets lockCheckEndpoint
    *
    * @param string|null $lockCheckEndpoint CBC锁定节点
    *
    * @return $this
    */
    public function setLockCheckEndpoint($lockCheckEndpoint)
    {
        $this->container['lockCheckEndpoint'] = $lockCheckEndpoint;
        return $this;
    }

    /**
    * Gets createUser
    *  创建用户
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建用户
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间点
    *
    * @return float|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param float|null $createTime 创建时间点
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets domainId
    *  用户domain id
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
    * @param string|null $domainId 用户domain id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets isTrialOrder
    *  是否试用订单
    *
    * @return int|null
    */
    public function getIsTrialOrder()
    {
        return $this->container['isTrialOrder'];
    }

    /**
    * Sets isTrialOrder
    *
    * @param int|null $isTrialOrder 是否试用订单
    *
    * @return $this
    */
    public function setIsTrialOrder($isTrialOrder)
    {
        $this->container['isTrialOrder'] = $isTrialOrder;
        return $this;
    }

    /**
    * Gets workSpaceMode
    *  工作空间模式说明
    *
    * @return string|null
    */
    public function getWorkSpaceMode()
    {
        return $this->container['workSpaceMode'];
    }

    /**
    * Sets workSpaceMode
    *
    * @param string|null $workSpaceMode 工作空间模式说明
    *
    * @return $this
    */
    public function setWorkSpaceMode($workSpaceMode)
    {
        $this->container['workSpaceMode'] = $workSpaceMode;
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

