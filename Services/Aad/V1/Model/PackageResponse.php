<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageId  实例id
    * packageName  实例名
    * regionId  资源所属region
    * protectionType  防护类型
    * instanceType  实例类型。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    * resourceId  资源id
    * countDownCode  倒计时相关信息
    * countDownInfos  倒计时相关信息
    * countDownTips  倒计时相关信息
    * orderId  订单id
    * subscriptionId  续费用的id
    * ipNum  ip数
    * ipNumNow  当前IP数
    * protectionNumNow  当前防护次数
    * protectionNum  防护次数，9999为无限次
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * serviceBandwidth  业务带宽
    * cleanBandwidth  回源带宽
    * policyNum  策略模板数
    * isOld  是否旧实例（旧实例不支持升级规格）,默认不传为否
    * newFlag  专业版铂金版合并之后购买的专业版和铂金版均标识为true
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageId' => 'string',
            'packageName' => 'string',
            'regionId' => 'string',
            'protectionType' => 'int',
            'instanceType' => 'string',
            'resourceId' => 'string',
            'countDownCode' => 'string',
            'countDownInfos' => 'string',
            'countDownTips' => 'string',
            'orderId' => 'string',
            'subscriptionId' => 'string',
            'ipNum' => 'int',
            'ipNumNow' => 'int',
            'protectionNumNow' => 'int',
            'protectionNum' => 'int',
            'basicBandwidth' => 'int',
            'elasticBandwidth' => 'int',
            'serviceBandwidth' => 'int',
            'cleanBandwidth' => 'int',
            'policyNum' => 'int',
            'isOld' => 'bool',
            'newFlag' => 'bool',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageId  实例id
    * packageName  实例名
    * regionId  资源所属region
    * protectionType  防护类型
    * instanceType  实例类型。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    * resourceId  资源id
    * countDownCode  倒计时相关信息
    * countDownInfos  倒计时相关信息
    * countDownTips  倒计时相关信息
    * orderId  订单id
    * subscriptionId  续费用的id
    * ipNum  ip数
    * ipNumNow  当前IP数
    * protectionNumNow  当前防护次数
    * protectionNum  防护次数，9999为无限次
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * serviceBandwidth  业务带宽
    * cleanBandwidth  回源带宽
    * policyNum  策略模板数
    * isOld  是否旧实例（旧实例不支持升级规格）,默认不传为否
    * newFlag  专业版铂金版合并之后购买的专业版和铂金版均标识为true
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageId' => null,
        'packageName' => null,
        'regionId' => null,
        'protectionType' => 'int32',
        'instanceType' => null,
        'resourceId' => null,
        'countDownCode' => null,
        'countDownInfos' => null,
        'countDownTips' => null,
        'orderId' => null,
        'subscriptionId' => null,
        'ipNum' => 'int32',
        'ipNumNow' => 'int32',
        'protectionNumNow' => 'int32',
        'protectionNum' => 'int32',
        'basicBandwidth' => 'int32',
        'elasticBandwidth' => 'int32',
        'serviceBandwidth' => 'int32',
        'cleanBandwidth' => 'int32',
        'policyNum' => 'int32',
        'isOld' => null,
        'newFlag' => null,
        'createTime' => 'int64'
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
    * packageId  实例id
    * packageName  实例名
    * regionId  资源所属region
    * protectionType  防护类型
    * instanceType  实例类型。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    * resourceId  资源id
    * countDownCode  倒计时相关信息
    * countDownInfos  倒计时相关信息
    * countDownTips  倒计时相关信息
    * orderId  订单id
    * subscriptionId  续费用的id
    * ipNum  ip数
    * ipNumNow  当前IP数
    * protectionNumNow  当前防护次数
    * protectionNum  防护次数，9999为无限次
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * serviceBandwidth  业务带宽
    * cleanBandwidth  回源带宽
    * policyNum  策略模板数
    * isOld  是否旧实例（旧实例不支持升级规格）,默认不传为否
    * newFlag  专业版铂金版合并之后购买的专业版和铂金版均标识为true
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageId' => 'package_id',
            'packageName' => 'package_name',
            'regionId' => 'region_id',
            'protectionType' => 'protection_type',
            'instanceType' => 'instance_type',
            'resourceId' => 'resource_id',
            'countDownCode' => 'count_down_code',
            'countDownInfos' => 'count_down_infos',
            'countDownTips' => 'count_down_tips',
            'orderId' => 'order_id',
            'subscriptionId' => 'subscription_id',
            'ipNum' => 'ip_num',
            'ipNumNow' => 'ip_num_now',
            'protectionNumNow' => 'protection_num_now',
            'protectionNum' => 'protection_num',
            'basicBandwidth' => 'basic_bandwidth',
            'elasticBandwidth' => 'elastic_bandwidth',
            'serviceBandwidth' => 'service_bandwidth',
            'cleanBandwidth' => 'clean_bandwidth',
            'policyNum' => 'policy_num',
            'isOld' => 'is_old',
            'newFlag' => 'new_flag',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageId  实例id
    * packageName  实例名
    * regionId  资源所属region
    * protectionType  防护类型
    * instanceType  实例类型。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    * resourceId  资源id
    * countDownCode  倒计时相关信息
    * countDownInfos  倒计时相关信息
    * countDownTips  倒计时相关信息
    * orderId  订单id
    * subscriptionId  续费用的id
    * ipNum  ip数
    * ipNumNow  当前IP数
    * protectionNumNow  当前防护次数
    * protectionNum  防护次数，9999为无限次
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * serviceBandwidth  业务带宽
    * cleanBandwidth  回源带宽
    * policyNum  策略模板数
    * isOld  是否旧实例（旧实例不支持升级规格）,默认不传为否
    * newFlag  专业版铂金版合并之后购买的专业版和铂金版均标识为true
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'packageId' => 'setPackageId',
            'packageName' => 'setPackageName',
            'regionId' => 'setRegionId',
            'protectionType' => 'setProtectionType',
            'instanceType' => 'setInstanceType',
            'resourceId' => 'setResourceId',
            'countDownCode' => 'setCountDownCode',
            'countDownInfos' => 'setCountDownInfos',
            'countDownTips' => 'setCountDownTips',
            'orderId' => 'setOrderId',
            'subscriptionId' => 'setSubscriptionId',
            'ipNum' => 'setIpNum',
            'ipNumNow' => 'setIpNumNow',
            'protectionNumNow' => 'setProtectionNumNow',
            'protectionNum' => 'setProtectionNum',
            'basicBandwidth' => 'setBasicBandwidth',
            'elasticBandwidth' => 'setElasticBandwidth',
            'serviceBandwidth' => 'setServiceBandwidth',
            'cleanBandwidth' => 'setCleanBandwidth',
            'policyNum' => 'setPolicyNum',
            'isOld' => 'setIsOld',
            'newFlag' => 'setNewFlag',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageId  实例id
    * packageName  实例名
    * regionId  资源所属region
    * protectionType  防护类型
    * instanceType  实例类型。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    * resourceId  资源id
    * countDownCode  倒计时相关信息
    * countDownInfos  倒计时相关信息
    * countDownTips  倒计时相关信息
    * orderId  订单id
    * subscriptionId  续费用的id
    * ipNum  ip数
    * ipNumNow  当前IP数
    * protectionNumNow  当前防护次数
    * protectionNum  防护次数，9999为无限次
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * serviceBandwidth  业务带宽
    * cleanBandwidth  回源带宽
    * policyNum  策略模板数
    * isOld  是否旧实例（旧实例不支持升级规格）,默认不传为否
    * newFlag  专业版铂金版合并之后购买的专业版和铂金版均标识为true
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'packageId' => 'getPackageId',
            'packageName' => 'getPackageName',
            'regionId' => 'getRegionId',
            'protectionType' => 'getProtectionType',
            'instanceType' => 'getInstanceType',
            'resourceId' => 'getResourceId',
            'countDownCode' => 'getCountDownCode',
            'countDownInfos' => 'getCountDownInfos',
            'countDownTips' => 'getCountDownTips',
            'orderId' => 'getOrderId',
            'subscriptionId' => 'getSubscriptionId',
            'ipNum' => 'getIpNum',
            'ipNumNow' => 'getIpNumNow',
            'protectionNumNow' => 'getProtectionNumNow',
            'protectionNum' => 'getProtectionNum',
            'basicBandwidth' => 'getBasicBandwidth',
            'elasticBandwidth' => 'getElasticBandwidth',
            'serviceBandwidth' => 'getServiceBandwidth',
            'cleanBandwidth' => 'getCleanBandwidth',
            'policyNum' => 'getPolicyNum',
            'isOld' => 'getIsOld',
            'newFlag' => 'getNewFlag',
            'createTime' => 'getCreateTime'
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
    const INSTANCE_TYPE_CNAD_PRO = 'cnad_pro';
    const INSTANCE_TYPE_CNAD_IP = 'cnad_ip';
    const INSTANCE_TYPE_CNAD_EP = 'cnad_ep';
    const INSTANCE_TYPE_CNAD_FULL_HIGH = 'cnad_full_high';
    const INSTANCE_TYPE_CNAD_VIC = 'cnad_vic';
    const INSTANCE_TYPE_CNAD_INTL_EP = 'cnad_intl_ep';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTypeAllowableValues()
    {
        return [
            self::INSTANCE_TYPE_CNAD_PRO,
            self::INSTANCE_TYPE_CNAD_IP,
            self::INSTANCE_TYPE_CNAD_EP,
            self::INSTANCE_TYPE_CNAD_FULL_HIGH,
            self::INSTANCE_TYPE_CNAD_VIC,
            self::INSTANCE_TYPE_CNAD_INTL_EP,
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
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['protectionType'] = isset($data['protectionType']) ? $data['protectionType'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['countDownCode'] = isset($data['countDownCode']) ? $data['countDownCode'] : null;
        $this->container['countDownInfos'] = isset($data['countDownInfos']) ? $data['countDownInfos'] : null;
        $this->container['countDownTips'] = isset($data['countDownTips']) ? $data['countDownTips'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['ipNum'] = isset($data['ipNum']) ? $data['ipNum'] : null;
        $this->container['ipNumNow'] = isset($data['ipNumNow']) ? $data['ipNumNow'] : null;
        $this->container['protectionNumNow'] = isset($data['protectionNumNow']) ? $data['protectionNumNow'] : null;
        $this->container['protectionNum'] = isset($data['protectionNum']) ? $data['protectionNum'] : null;
        $this->container['basicBandwidth'] = isset($data['basicBandwidth']) ? $data['basicBandwidth'] : null;
        $this->container['elasticBandwidth'] = isset($data['elasticBandwidth']) ? $data['elasticBandwidth'] : null;
        $this->container['serviceBandwidth'] = isset($data['serviceBandwidth']) ? $data['serviceBandwidth'] : null;
        $this->container['cleanBandwidth'] = isset($data['cleanBandwidth']) ? $data['cleanBandwidth'] : null;
        $this->container['policyNum'] = isset($data['policyNum']) ? $data['policyNum'] : null;
        $this->container['isOld'] = isset($data['isOld']) ? $data['isOld'] : null;
        $this->container['newFlag'] = isset($data['newFlag']) ? $data['newFlag'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['packageId'] === null) {
            $invalidProperties[] = "'packageId' can't be null";
        }
            if ((mb_strlen($this->container['packageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['packageId']) < 32)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['packageName'] === null) {
            $invalidProperties[] = "'packageName' can't be null";
        }
            if ((mb_strlen($this->container['packageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['packageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['protectionType'] === null) {
            $invalidProperties[] = "'protectionType' can't be null";
        }
            if (($this->container['protectionType'] > 1)) {
                $invalidProperties[] = "invalid value for 'protectionType', must be smaller than or equal to 1.";
            }
            if (($this->container['protectionType'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectionType', must be bigger than or equal to 0.";
            }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
            $allowedValues = $this->getInstanceTypeAllowableValues();
                if (!is_null($this->container['instanceType']) && !in_array($this->container['instanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['countDownCode']) && (mb_strlen($this->container['countDownCode']) > 255)) {
                $invalidProperties[] = "invalid value for 'countDownCode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['countDownCode']) && (mb_strlen($this->container['countDownCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'countDownCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['countDownInfos']) && (mb_strlen($this->container['countDownInfos']) > 255)) {
                $invalidProperties[] = "invalid value for 'countDownInfos', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['countDownInfos']) && (mb_strlen($this->container['countDownInfos']) < 1)) {
                $invalidProperties[] = "invalid value for 'countDownInfos', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['countDownTips']) && (mb_strlen($this->container['countDownTips']) > 255)) {
                $invalidProperties[] = "invalid value for 'countDownTips', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['countDownTips']) && (mb_strlen($this->container['countDownTips']) < 1)) {
                $invalidProperties[] = "invalid value for 'countDownTips', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 17)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 17.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 17)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 17.";
            }
            if (!is_null($this->container['subscriptionId']) && (mb_strlen($this->container['subscriptionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'subscriptionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subscriptionId']) && (mb_strlen($this->container['subscriptionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'subscriptionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['ipNum']) && ($this->container['ipNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ipNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ipNum']) && ($this->container['ipNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'ipNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipNumNow']) && ($this->container['ipNumNow'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ipNumNow', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ipNumNow']) && ($this->container['ipNumNow'] < 0)) {
                $invalidProperties[] = "invalid value for 'ipNumNow', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectionNumNow']) && ($this->container['protectionNumNow'] > 9999)) {
                $invalidProperties[] = "invalid value for 'protectionNumNow', must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['protectionNumNow']) && ($this->container['protectionNumNow'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectionNumNow', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectionNum']) && ($this->container['protectionNum'] > 9999)) {
                $invalidProperties[] = "invalid value for 'protectionNum', must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['protectionNum']) && ($this->container['protectionNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectionNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['basicBandwidth']) && ($this->container['basicBandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'basicBandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['basicBandwidth']) && ($this->container['basicBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'basicBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['elasticBandwidth']) && ($this->container['elasticBandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'elasticBandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['elasticBandwidth']) && ($this->container['elasticBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'elasticBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceBandwidth']) && ($this->container['serviceBandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'serviceBandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['serviceBandwidth']) && ($this->container['serviceBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'serviceBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cleanBandwidth']) && ($this->container['cleanBandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cleanBandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cleanBandwidth']) && ($this->container['cleanBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'cleanBandwidth', must be bigger than or equal to 0.";
            }
        if ($this->container['policyNum'] === null) {
            $invalidProperties[] = "'policyNum' can't be null";
        }
            if (($this->container['policyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['policyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets packageId
    *  实例id
    *
    * @return string
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string $packageId 实例id
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets packageName
    *  实例名
    *
    * @return string
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string $packageName 实例名
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets regionId
    *  资源所属region
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
    * @param string $regionId 资源所属region
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets protectionType
    *  防护类型
    *
    * @return int
    */
    public function getProtectionType()
    {
        return $this->container['protectionType'];
    }

    /**
    * Sets protectionType
    *
    * @param int $protectionType 防护类型
    *
    * @return $this
    */
    public function setProtectionType($protectionType)
    {
        $this->container['protectionType'] = $protectionType;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 实例类型。cnad_pro：专业版；cnad_ip：标准版；cnad_ep：铂金版；cnad_full_high：全力防高级版；cnad_vic：按需版；cnad_intl_ep：国际站铂金版
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
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
    * @param string $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets countDownCode
    *  倒计时相关信息
    *
    * @return string|null
    */
    public function getCountDownCode()
    {
        return $this->container['countDownCode'];
    }

    /**
    * Sets countDownCode
    *
    * @param string|null $countDownCode 倒计时相关信息
    *
    * @return $this
    */
    public function setCountDownCode($countDownCode)
    {
        $this->container['countDownCode'] = $countDownCode;
        return $this;
    }

    /**
    * Gets countDownInfos
    *  倒计时相关信息
    *
    * @return string|null
    */
    public function getCountDownInfos()
    {
        return $this->container['countDownInfos'];
    }

    /**
    * Sets countDownInfos
    *
    * @param string|null $countDownInfos 倒计时相关信息
    *
    * @return $this
    */
    public function setCountDownInfos($countDownInfos)
    {
        $this->container['countDownInfos'] = $countDownInfos;
        return $this;
    }

    /**
    * Gets countDownTips
    *  倒计时相关信息
    *
    * @return string|null
    */
    public function getCountDownTips()
    {
        return $this->container['countDownTips'];
    }

    /**
    * Sets countDownTips
    *
    * @param string|null $countDownTips 倒计时相关信息
    *
    * @return $this
    */
    public function setCountDownTips($countDownTips)
    {
        $this->container['countDownTips'] = $countDownTips;
        return $this;
    }

    /**
    * Gets orderId
    *  订单id
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
    * @param string|null $orderId 订单id
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  续费用的id
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
    * @param string|null $subscriptionId 续费用的id
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets ipNum
    *  ip数
    *
    * @return int|null
    */
    public function getIpNum()
    {
        return $this->container['ipNum'];
    }

    /**
    * Sets ipNum
    *
    * @param int|null $ipNum ip数
    *
    * @return $this
    */
    public function setIpNum($ipNum)
    {
        $this->container['ipNum'] = $ipNum;
        return $this;
    }

    /**
    * Gets ipNumNow
    *  当前IP数
    *
    * @return int|null
    */
    public function getIpNumNow()
    {
        return $this->container['ipNumNow'];
    }

    /**
    * Sets ipNumNow
    *
    * @param int|null $ipNumNow 当前IP数
    *
    * @return $this
    */
    public function setIpNumNow($ipNumNow)
    {
        $this->container['ipNumNow'] = $ipNumNow;
        return $this;
    }

    /**
    * Gets protectionNumNow
    *  当前防护次数
    *
    * @return int|null
    */
    public function getProtectionNumNow()
    {
        return $this->container['protectionNumNow'];
    }

    /**
    * Sets protectionNumNow
    *
    * @param int|null $protectionNumNow 当前防护次数
    *
    * @return $this
    */
    public function setProtectionNumNow($protectionNumNow)
    {
        $this->container['protectionNumNow'] = $protectionNumNow;
        return $this;
    }

    /**
    * Gets protectionNum
    *  防护次数，9999为无限次
    *
    * @return int|null
    */
    public function getProtectionNum()
    {
        return $this->container['protectionNum'];
    }

    /**
    * Sets protectionNum
    *
    * @param int|null $protectionNum 防护次数，9999为无限次
    *
    * @return $this
    */
    public function setProtectionNum($protectionNum)
    {
        $this->container['protectionNum'] = $protectionNum;
        return $this;
    }

    /**
    * Gets basicBandwidth
    *  保底带宽
    *
    * @return int|null
    */
    public function getBasicBandwidth()
    {
        return $this->container['basicBandwidth'];
    }

    /**
    * Sets basicBandwidth
    *
    * @param int|null $basicBandwidth 保底带宽
    *
    * @return $this
    */
    public function setBasicBandwidth($basicBandwidth)
    {
        $this->container['basicBandwidth'] = $basicBandwidth;
        return $this;
    }

    /**
    * Gets elasticBandwidth
    *  弹性带宽
    *
    * @return int|null
    */
    public function getElasticBandwidth()
    {
        return $this->container['elasticBandwidth'];
    }

    /**
    * Sets elasticBandwidth
    *
    * @param int|null $elasticBandwidth 弹性带宽
    *
    * @return $this
    */
    public function setElasticBandwidth($elasticBandwidth)
    {
        $this->container['elasticBandwidth'] = $elasticBandwidth;
        return $this;
    }

    /**
    * Gets serviceBandwidth
    *  业务带宽
    *
    * @return int|null
    */
    public function getServiceBandwidth()
    {
        return $this->container['serviceBandwidth'];
    }

    /**
    * Sets serviceBandwidth
    *
    * @param int|null $serviceBandwidth 业务带宽
    *
    * @return $this
    */
    public function setServiceBandwidth($serviceBandwidth)
    {
        $this->container['serviceBandwidth'] = $serviceBandwidth;
        return $this;
    }

    /**
    * Gets cleanBandwidth
    *  回源带宽
    *
    * @return int|null
    */
    public function getCleanBandwidth()
    {
        return $this->container['cleanBandwidth'];
    }

    /**
    * Sets cleanBandwidth
    *
    * @param int|null $cleanBandwidth 回源带宽
    *
    * @return $this
    */
    public function setCleanBandwidth($cleanBandwidth)
    {
        $this->container['cleanBandwidth'] = $cleanBandwidth;
        return $this;
    }

    /**
    * Gets policyNum
    *  策略模板数
    *
    * @return int
    */
    public function getPolicyNum()
    {
        return $this->container['policyNum'];
    }

    /**
    * Sets policyNum
    *
    * @param int $policyNum 策略模板数
    *
    * @return $this
    */
    public function setPolicyNum($policyNum)
    {
        $this->container['policyNum'] = $policyNum;
        return $this;
    }

    /**
    * Gets isOld
    *  是否旧实例（旧实例不支持升级规格）,默认不传为否
    *
    * @return bool|null
    */
    public function getIsOld()
    {
        return $this->container['isOld'];
    }

    /**
    * Sets isOld
    *
    * @param bool|null $isOld 是否旧实例（旧实例不支持升级规格）,默认不传为否
    *
    * @return $this
    */
    public function setIsOld($isOld)
    {
        $this->container['isOld'] = $isOld;
        return $this;
    }

    /**
    * Gets newFlag
    *  专业版铂金版合并之后购买的专业版和铂金版均标识为true
    *
    * @return bool|null
    */
    public function getNewFlag()
    {
        return $this->container['newFlag'];
    }

    /**
    * Sets newFlag
    *
    * @param bool|null $newFlag 专业版铂金版合并之后购买的专业版和铂金版均标识为true
    *
    * @return $this
    */
    public function setNewFlag($newFlag)
    {
        $this->container['newFlag'] = $newFlag;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

