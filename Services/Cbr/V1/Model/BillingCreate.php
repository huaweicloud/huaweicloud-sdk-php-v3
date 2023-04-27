<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BillingCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BillingCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudType  云平台，公有云或者混合云
    * consistentLevel  规格，崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * protectType  保护类型：备份（backup）、复制(replication)
    * size  容量，单位GB
    * chargingMode  创建模式，按需：post_paid，包周期：pre_paid，默认为post_paid
    * periodType  创建类型，charging_mode为pre_paid必填，按年(year)或者按月(month)
    * periodNum  创建类型的数量，charging_mode为pre_paid必填
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * extraInfo  extraInfo
    * isMultiAz  存储库多az属性，默认为false
    * promotionInfo  促销信息，包周期时可选参数
    * purchaseMode  购买模式，包周期时可选参数
    * orderId  订单 ID，包周期时可选参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudType' => 'string',
            'consistentLevel' => 'string',
            'objectType' => 'string',
            'protectType' => 'string',
            'size' => 'int',
            'chargingMode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'bool',
            'isAutoPay' => 'bool',
            'consoleUrl' => 'string',
            'extraInfo' => '\HuaweiCloud\SDK\Cbr\V1\Model\BillbingCreateExtraInfo',
            'isMultiAz' => 'bool',
            'promotionInfo' => 'string',
            'purchaseMode' => 'string',
            'orderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudType  云平台，公有云或者混合云
    * consistentLevel  规格，崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * protectType  保护类型：备份（backup）、复制(replication)
    * size  容量，单位GB
    * chargingMode  创建模式，按需：post_paid，包周期：pre_paid，默认为post_paid
    * periodType  创建类型，charging_mode为pre_paid必填，按年(year)或者按月(month)
    * periodNum  创建类型的数量，charging_mode为pre_paid必填
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * extraInfo  extraInfo
    * isMultiAz  存储库多az属性，默认为false
    * promotionInfo  促销信息，包周期时可选参数
    * purchaseMode  购买模式，包周期时可选参数
    * orderId  订单 ID，包周期时可选参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudType' => null,
        'consistentLevel' => null,
        'objectType' => null,
        'protectType' => null,
        'size' => 'int32',
        'chargingMode' => null,
        'periodType' => null,
        'periodNum' => 'int32',
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'consoleUrl' => null,
        'extraInfo' => null,
        'isMultiAz' => null,
        'promotionInfo' => null,
        'purchaseMode' => null,
        'orderId' => null
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
    * cloudType  云平台，公有云或者混合云
    * consistentLevel  规格，崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * protectType  保护类型：备份（backup）、复制(replication)
    * size  容量，单位GB
    * chargingMode  创建模式，按需：post_paid，包周期：pre_paid，默认为post_paid
    * periodType  创建类型，charging_mode为pre_paid必填，按年(year)或者按月(month)
    * periodNum  创建类型的数量，charging_mode为pre_paid必填
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * extraInfo  extraInfo
    * isMultiAz  存储库多az属性，默认为false
    * promotionInfo  促销信息，包周期时可选参数
    * purchaseMode  购买模式，包周期时可选参数
    * orderId  订单 ID，包周期时可选参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudType' => 'cloud_type',
            'consistentLevel' => 'consistent_level',
            'objectType' => 'object_type',
            'protectType' => 'protect_type',
            'size' => 'size',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'isAutoPay' => 'is_auto_pay',
            'consoleUrl' => 'console_url',
            'extraInfo' => 'extra_info',
            'isMultiAz' => 'is_multi_az',
            'promotionInfo' => 'promotion_info',
            'purchaseMode' => 'purchase_mode',
            'orderId' => 'order_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudType  云平台，公有云或者混合云
    * consistentLevel  规格，崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * protectType  保护类型：备份（backup）、复制(replication)
    * size  容量，单位GB
    * chargingMode  创建模式，按需：post_paid，包周期：pre_paid，默认为post_paid
    * periodType  创建类型，charging_mode为pre_paid必填，按年(year)或者按月(month)
    * periodNum  创建类型的数量，charging_mode为pre_paid必填
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * extraInfo  extraInfo
    * isMultiAz  存储库多az属性，默认为false
    * promotionInfo  促销信息，包周期时可选参数
    * purchaseMode  购买模式，包周期时可选参数
    * orderId  订单 ID，包周期时可选参数
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudType' => 'setCloudType',
            'consistentLevel' => 'setConsistentLevel',
            'objectType' => 'setObjectType',
            'protectType' => 'setProtectType',
            'size' => 'setSize',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'consoleUrl' => 'setConsoleUrl',
            'extraInfo' => 'setExtraInfo',
            'isMultiAz' => 'setIsMultiAz',
            'promotionInfo' => 'setPromotionInfo',
            'purchaseMode' => 'setPurchaseMode',
            'orderId' => 'setOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudType  云平台，公有云或者混合云
    * consistentLevel  规格，崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * protectType  保护类型：备份（backup）、复制(replication)
    * size  容量，单位GB
    * chargingMode  创建模式，按需：post_paid，包周期：pre_paid，默认为post_paid
    * periodType  创建类型，charging_mode为pre_paid必填，按年(year)或者按月(month)
    * periodNum  创建类型的数量，charging_mode为pre_paid必填
    * isAutoRenew  到期后是否自动续期，默认不续期
    * isAutoPay  是否自动付费，默认为不自动付费
    * consoleUrl  跳转URL
    * extraInfo  extraInfo
    * isMultiAz  存储库多az属性，默认为false
    * promotionInfo  促销信息，包周期时可选参数
    * purchaseMode  购买模式，包周期时可选参数
    * orderId  订单 ID，包周期时可选参数
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudType' => 'getCloudType',
            'consistentLevel' => 'getConsistentLevel',
            'objectType' => 'getObjectType',
            'protectType' => 'getProtectType',
            'size' => 'getSize',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'consoleUrl' => 'getConsoleUrl',
            'extraInfo' => 'getExtraInfo',
            'isMultiAz' => 'getIsMultiAz',
            'promotionInfo' => 'getPromotionInfo',
            'purchaseMode' => 'getPurchaseMode',
            'orderId' => 'getOrderId'
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
    const CLOUD_TYPE__PUBLIC = 'public';
    const CLOUD_TYPE_HYBRID = 'hybrid';
    const CONSISTENT_LEVEL_APP_CONSISTENT = 'app_consistent';
    const CONSISTENT_LEVEL_CRASH_CONSISTENT = 'crash_consistent';
    const OBJECT_TYPE_SERVER = 'server';
    const OBJECT_TYPE_DISK = 'disk';
    const OBJECT_TYPE_TURBO = 'turbo';
    const OBJECT_TYPE_WORKSPACE = 'workspace';
    const OBJECT_TYPE_VMWARE = 'vmware';
    const OBJECT_TYPE_RDS = 'rds';
    const OBJECT_TYPE_FILE = 'file';
    const PROTECT_TYPE_BACKUP = 'backup';
    const PROTECT_TYPE_REPLICATION = 'replication';
    const CHARGING_MODE_POST_PAID = 'post_paid';
    const CHARGING_MODE_PRE_PAID = 'pre_paid';
    const PERIOD_TYPE_YEAR = 'year';
    const PERIOD_TYPE_MONTH = 'month';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCloudTypeAllowableValues()
    {
        return [
            self::CLOUD_TYPE__PUBLIC,
            self::CLOUD_TYPE_HYBRID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConsistentLevelAllowableValues()
    {
        return [
            self::CONSISTENT_LEVEL_APP_CONSISTENT,
            self::CONSISTENT_LEVEL_CRASH_CONSISTENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_SERVER,
            self::OBJECT_TYPE_DISK,
            self::OBJECT_TYPE_TURBO,
            self::OBJECT_TYPE_WORKSPACE,
            self::OBJECT_TYPE_VMWARE,
            self::OBJECT_TYPE_RDS,
            self::OBJECT_TYPE_FILE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectTypeAllowableValues()
    {
        return [
            self::PROTECT_TYPE_BACKUP,
            self::PROTECT_TYPE_REPLICATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_POST_PAID,
            self::CHARGING_MODE_PRE_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_YEAR,
            self::PERIOD_TYPE_MONTH,
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
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['consistentLevel'] = isset($data['consistentLevel']) ? $data['consistentLevel'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : 'post_paid';
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : false;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : false;
        $this->container['consoleUrl'] = isset($data['consoleUrl']) ? $data['consoleUrl'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['isMultiAz'] = isset($data['isMultiAz']) ? $data['isMultiAz'] : false;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['purchaseMode'] = isset($data['purchaseMode']) ? $data['purchaseMode'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCloudTypeAllowableValues();
                if (!is_null($this->container['cloudType']) && !in_array($this->container['cloudType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cloudType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['consistentLevel'] === null) {
            $invalidProperties[] = "'consistentLevel' can't be null";
        }
            $allowedValues = $this->getConsistentLevelAllowableValues();
                if (!is_null($this->container['consistentLevel']) && !in_array($this->container['consistentLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'consistentLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['objectType'] === null) {
            $invalidProperties[] = "'objectType' can't be null";
        }
            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['protectType'] === null) {
            $invalidProperties[] = "'protectType' can't be null";
        }
            $allowedValues = $this->getProtectTypeAllowableValues();
                if (!is_null($this->container['protectType']) && !in_array($this->container['protectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 10485760)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 10485760.";
            }
            if (($this->container['size'] < 10)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 10.";
            }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['consoleUrl']) && (mb_strlen($this->container['consoleUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'consoleUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['consoleUrl']) && (mb_strlen($this->container['consoleUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'consoleUrl', the character length must be bigger than or equal to 1.";
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
    * Gets cloudType
    *  云平台，公有云或者混合云
    *
    * @return string|null
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string|null $cloudType 云平台，公有云或者混合云
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets consistentLevel
    *  规格，崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    *
    * @return string
    */
    public function getConsistentLevel()
    {
        return $this->container['consistentLevel'];
    }

    /**
    * Sets consistentLevel
    *
    * @param string $consistentLevel 规格，崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    *
    * @return $this
    */
    public function setConsistentLevel($consistentLevel)
    {
        $this->container['consistentLevel'] = $consistentLevel;
        return $this;
    }

    /**
    * Gets objectType
    *  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    *
    * @return string
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string $objectType 对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets protectType
    *  保护类型：备份（backup）、复制(replication)
    *
    * @return string
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string $protectType 保护类型：备份（backup）、复制(replication)
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets size
    *  容量，单位GB
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 容量，单位GB
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets chargingMode
    *  创建模式，按需：post_paid，包周期：pre_paid，默认为post_paid
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 创建模式，按需：post_paid，包周期：pre_paid，默认为post_paid
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
    *  创建类型，charging_mode为pre_paid必填，按年(year)或者按月(month)
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType 创建类型，charging_mode为pre_paid必填，按年(year)或者按月(month)
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
    *  创建类型的数量，charging_mode为pre_paid必填
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 创建类型的数量，charging_mode为pre_paid必填
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  到期后是否自动续期，默认不续期
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew 到期后是否自动续期，默认不续期
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动付费，默认为不自动付费
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 是否自动付费，默认为不自动付费
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets consoleUrl
    *  跳转URL
    *
    * @return string|null
    */
    public function getConsoleUrl()
    {
        return $this->container['consoleUrl'];
    }

    /**
    * Sets consoleUrl
    *
    * @param string|null $consoleUrl 跳转URL
    *
    * @return $this
    */
    public function setConsoleUrl($consoleUrl)
    {
        $this->container['consoleUrl'] = $consoleUrl;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\BillbingCreateExtraInfo|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\BillbingCreateExtraInfo|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets isMultiAz
    *  存储库多az属性，默认为false
    *
    * @return bool|null
    */
    public function getIsMultiAz()
    {
        return $this->container['isMultiAz'];
    }

    /**
    * Sets isMultiAz
    *
    * @param bool|null $isMultiAz 存储库多az属性，默认为false
    *
    * @return $this
    */
    public function setIsMultiAz($isMultiAz)
    {
        $this->container['isMultiAz'] = $isMultiAz;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  促销信息，包周期时可选参数
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
    * @param string|null $promotionInfo 促销信息，包周期时可选参数
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets purchaseMode
    *  购买模式，包周期时可选参数
    *
    * @return string|null
    */
    public function getPurchaseMode()
    {
        return $this->container['purchaseMode'];
    }

    /**
    * Sets purchaseMode
    *
    * @param string|null $purchaseMode 购买模式，包周期时可选参数
    *
    * @return $this
    */
    public function setPurchaseMode($purchaseMode)
    {
        $this->container['purchaseMode'] = $purchaseMode;
        return $this;
    }

    /**
    * Gets orderId
    *  订单 ID，包周期时可选参数
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
    * @param string|null $orderId 订单 ID，包周期时可选参数
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
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

