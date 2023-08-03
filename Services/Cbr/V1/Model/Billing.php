<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Billing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Billing';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allocated  已分配容量，单位GB
    * chargingMode  创建模式
    * cloudType  云平台
    * consistentLevel  崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * orderId  订单ID
    * productId  产品ID
    * protectType  保护类型
    * size  容量，单位GB
    * specCode  规格编码: 云服务备份存储库:vault.backup.server.normal;云硬盘备份存储库:vault.backup.volume.normal;文件备份存储库:vault.backup.turbo.normal;数据库备份存储库:vault.backup.database.normal;混合云备份存储库:vault.hybrid.server.normal;复制备份存储库:vault.replication.server.normal
    * status  存储库状态
    * storageUnit  存储库桶名
    * used  已使用容量，单位MB
    * frozenScene  冻结场景
    * isMultiAz  存储库多az属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allocated' => 'int',
            'chargingMode' => 'string',
            'cloudType' => 'string',
            'consistentLevel' => 'string',
            'objectType' => 'string',
            'orderId' => 'string',
            'productId' => 'string',
            'protectType' => 'string',
            'size' => 'int',
            'specCode' => 'string',
            'status' => 'string',
            'storageUnit' => 'string',
            'used' => 'int',
            'frozenScene' => 'string',
            'isMultiAz' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allocated  已分配容量，单位GB
    * chargingMode  创建模式
    * cloudType  云平台
    * consistentLevel  崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * orderId  订单ID
    * productId  产品ID
    * protectType  保护类型
    * size  容量，单位GB
    * specCode  规格编码: 云服务备份存储库:vault.backup.server.normal;云硬盘备份存储库:vault.backup.volume.normal;文件备份存储库:vault.backup.turbo.normal;数据库备份存储库:vault.backup.database.normal;混合云备份存储库:vault.hybrid.server.normal;复制备份存储库:vault.replication.server.normal
    * status  存储库状态
    * storageUnit  存储库桶名
    * used  已使用容量，单位MB
    * frozenScene  冻结场景
    * isMultiAz  存储库多az属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allocated' => 'int32',
        'chargingMode' => null,
        'cloudType' => null,
        'consistentLevel' => null,
        'objectType' => null,
        'orderId' => null,
        'productId' => null,
        'protectType' => null,
        'size' => 'int32',
        'specCode' => null,
        'status' => null,
        'storageUnit' => null,
        'used' => 'int32',
        'frozenScene' => null,
        'isMultiAz' => null
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
    * allocated  已分配容量，单位GB
    * chargingMode  创建模式
    * cloudType  云平台
    * consistentLevel  崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * orderId  订单ID
    * productId  产品ID
    * protectType  保护类型
    * size  容量，单位GB
    * specCode  规格编码: 云服务备份存储库:vault.backup.server.normal;云硬盘备份存储库:vault.backup.volume.normal;文件备份存储库:vault.backup.turbo.normal;数据库备份存储库:vault.backup.database.normal;混合云备份存储库:vault.hybrid.server.normal;复制备份存储库:vault.replication.server.normal
    * status  存储库状态
    * storageUnit  存储库桶名
    * used  已使用容量，单位MB
    * frozenScene  冻结场景
    * isMultiAz  存储库多az属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allocated' => 'allocated',
            'chargingMode' => 'charging_mode',
            'cloudType' => 'cloud_type',
            'consistentLevel' => 'consistent_level',
            'objectType' => 'object_type',
            'orderId' => 'order_id',
            'productId' => 'product_id',
            'protectType' => 'protect_type',
            'size' => 'size',
            'specCode' => 'spec_code',
            'status' => 'status',
            'storageUnit' => 'storage_unit',
            'used' => 'used',
            'frozenScene' => 'frozen_scene',
            'isMultiAz' => 'is_multi_az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allocated  已分配容量，单位GB
    * chargingMode  创建模式
    * cloudType  云平台
    * consistentLevel  崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * orderId  订单ID
    * productId  产品ID
    * protectType  保护类型
    * size  容量，单位GB
    * specCode  规格编码: 云服务备份存储库:vault.backup.server.normal;云硬盘备份存储库:vault.backup.volume.normal;文件备份存储库:vault.backup.turbo.normal;数据库备份存储库:vault.backup.database.normal;混合云备份存储库:vault.hybrid.server.normal;复制备份存储库:vault.replication.server.normal
    * status  存储库状态
    * storageUnit  存储库桶名
    * used  已使用容量，单位MB
    * frozenScene  冻结场景
    * isMultiAz  存储库多az属性
    *
    * @var string[]
    */
    protected static $setters = [
            'allocated' => 'setAllocated',
            'chargingMode' => 'setChargingMode',
            'cloudType' => 'setCloudType',
            'consistentLevel' => 'setConsistentLevel',
            'objectType' => 'setObjectType',
            'orderId' => 'setOrderId',
            'productId' => 'setProductId',
            'protectType' => 'setProtectType',
            'size' => 'setSize',
            'specCode' => 'setSpecCode',
            'status' => 'setStatus',
            'storageUnit' => 'setStorageUnit',
            'used' => 'setUsed',
            'frozenScene' => 'setFrozenScene',
            'isMultiAz' => 'setIsMultiAz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allocated  已分配容量，单位GB
    * chargingMode  创建模式
    * cloudType  云平台
    * consistentLevel  崩溃一致性（crash_consistent）或应用一致性（app_consistent）
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * orderId  订单ID
    * productId  产品ID
    * protectType  保护类型
    * size  容量，单位GB
    * specCode  规格编码: 云服务备份存储库:vault.backup.server.normal;云硬盘备份存储库:vault.backup.volume.normal;文件备份存储库:vault.backup.turbo.normal;数据库备份存储库:vault.backup.database.normal;混合云备份存储库:vault.hybrid.server.normal;复制备份存储库:vault.replication.server.normal
    * status  存储库状态
    * storageUnit  存储库桶名
    * used  已使用容量，单位MB
    * frozenScene  冻结场景
    * isMultiAz  存储库多az属性
    *
    * @var string[]
    */
    protected static $getters = [
            'allocated' => 'getAllocated',
            'chargingMode' => 'getChargingMode',
            'cloudType' => 'getCloudType',
            'consistentLevel' => 'getConsistentLevel',
            'objectType' => 'getObjectType',
            'orderId' => 'getOrderId',
            'productId' => 'getProductId',
            'protectType' => 'getProtectType',
            'size' => 'getSize',
            'specCode' => 'getSpecCode',
            'status' => 'getStatus',
            'storageUnit' => 'getStorageUnit',
            'used' => 'getUsed',
            'frozenScene' => 'getFrozenScene',
            'isMultiAz' => 'getIsMultiAz'
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
    const CHARGING_MODE_PRE_PAID = 'pre_paid';
    const CHARGING_MODE_POST_PAID = 'post_paid';
    const CLOUD_TYPE__PUBLIC = 'public';
    const CLOUD_TYPE_HYBRID = 'hybrid';
    const CONSISTENT_LEVEL_APP_CONSISTENT = 'app_consistent';
    const CONSISTENT_LEVEL_CRASH_CONSISTENT = 'crash_consistent';
    const OBJECT_TYPE_SERVER = 'server';
    const OBJECT_TYPE_DISK = 'disk';
    const OBJECT_TYPE_WORKSPACE = 'workspace';
    const OBJECT_TYPE_VMWARE = 'vmware';
    const OBJECT_TYPE_RDS = 'rds';
    const OBJECT_TYPE_FILE = 'file';
    const PROTECT_TYPE_BACKUP = 'backup';
    const PROTECT_TYPE_REPLICATION = 'replication';
    const PROTECT_TYPE_HYBRID = 'hybrid';
    const SPEC_CODE_VAULT_BACKUP_SERVER_NORMAL = 'vault.backup.server.normal';
    const SPEC_CODE_VAULT_BACKUP_VOLUME_NORMAL = 'vault.backup.volume.normal';
    const STATUS_AVAILABLE = 'available';
    const STATUS_LOCK = 'lock';
    const STATUS_FROZEN = 'frozen';
    const STATUS_DELETING = 'deleting';
    const STATUS_ERROR = 'error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PRE_PAID,
            self::CHARGING_MODE_POST_PAID,
        ];
    }

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
            self::PROTECT_TYPE_HYBRID,
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
            self::SPEC_CODE_VAULT_BACKUP_SERVER_NORMAL,
            self::SPEC_CODE_VAULT_BACKUP_VOLUME_NORMAL,
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
            self::STATUS_AVAILABLE,
            self::STATUS_LOCK,
            self::STATUS_FROZEN,
            self::STATUS_DELETING,
            self::STATUS_ERROR,
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
        $this->container['allocated'] = isset($data['allocated']) ? $data['allocated'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['consistentLevel'] = isset($data['consistentLevel']) ? $data['consistentLevel'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['storageUnit'] = isset($data['storageUnit']) ? $data['storageUnit'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['frozenScene'] = isset($data['frozenScene']) ? $data['frozenScene'] : null;
        $this->container['isMultiAz'] = isset($data['isMultiAz']) ? $data['isMultiAz'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allocated'] === null) {
            $invalidProperties[] = "'allocated' can't be null";
        }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
            if (($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
            }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
            $allowedValues = $this->getSpecCodeAllowableValues();
                if (!is_null($this->container['specCode']) && !in_array($this->container['specCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
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
    * Gets allocated
    *  已分配容量，单位GB
    *
    * @return int
    */
    public function getAllocated()
    {
        return $this->container['allocated'];
    }

    /**
    * Sets allocated
    *
    * @param int $allocated 已分配容量，单位GB
    *
    * @return $this
    */
    public function setAllocated($allocated)
    {
        $this->container['allocated'] = $allocated;
        return $this;
    }

    /**
    * Gets chargingMode
    *  创建模式
    *
    * @return string
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string $chargingMode 创建模式
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets cloudType
    *  云平台
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
    * @param string|null $cloudType 云平台
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
    *  崩溃一致性（crash_consistent）或应用一致性（app_consistent）
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
    * @param string $consistentLevel 崩溃一致性（crash_consistent）或应用一致性（app_consistent）
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
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID
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
    * @param string|null $orderId 订单ID
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
    *  产品ID
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
    * @param string|null $productId 产品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets protectType
    *  保护类型
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
    * @param string $protectType 保护类型
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
    * Gets specCode
    *  规格编码: 云服务备份存储库:vault.backup.server.normal;云硬盘备份存储库:vault.backup.volume.normal;文件备份存储库:vault.backup.turbo.normal;数据库备份存储库:vault.backup.database.normal;混合云备份存储库:vault.hybrid.server.normal;复制备份存储库:vault.replication.server.normal
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
    * @param string $specCode 规格编码: 云服务备份存储库:vault.backup.server.normal;云硬盘备份存储库:vault.backup.volume.normal;文件备份存储库:vault.backup.turbo.normal;数据库备份存储库:vault.backup.database.normal;混合云备份存储库:vault.hybrid.server.normal;复制备份存储库:vault.replication.server.normal
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets status
    *  存储库状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 存储库状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets storageUnit
    *  存储库桶名
    *
    * @return string|null
    */
    public function getStorageUnit()
    {
        return $this->container['storageUnit'];
    }

    /**
    * Sets storageUnit
    *
    * @param string|null $storageUnit 存储库桶名
    *
    * @return $this
    */
    public function setStorageUnit($storageUnit)
    {
        $this->container['storageUnit'] = $storageUnit;
        return $this;
    }

    /**
    * Gets used
    *  已使用容量，单位MB
    *
    * @return int
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int $used 已使用容量，单位MB
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets frozenScene
    *  冻结场景
    *
    * @return string|null
    */
    public function getFrozenScene()
    {
        return $this->container['frozenScene'];
    }

    /**
    * Sets frozenScene
    *
    * @param string|null $frozenScene 冻结场景
    *
    * @return $this
    */
    public function setFrozenScene($frozenScene)
    {
        $this->container['frozenScene'] = $frozenScene;
        return $this;
    }

    /**
    * Gets isMultiAz
    *  存储库多az属性
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
    * @param bool|null $isMultiAz 存储库多az属性
    *
    * @return $this
    */
    public function setIsMultiAz($isMultiAz)
    {
        $this->container['isMultiAz'] = $isMultiAz;
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

