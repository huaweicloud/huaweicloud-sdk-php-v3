<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateInvocationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateInvocationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  **参数解释**: 主机id列表（INSTALL和UPDATE时必须） **取值范围**: 数组长度范围为[1,100]
    * invocationType  **参数解释**: 任务类型 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回滚 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装
    * invocationTarget  **参数解释**: 任务对象，目前仅支持telescope **取值范围**: - telescope：主机监控插件telescope
    * invocationIds  **参数解释**: 任务ID列表（ROLLBACK和RETRY时必须） **取值范围**: 数组长度范围为[1,100]
    * versionType  **参数解释**: 插件升级时需要选择升级“基础版本”还是“增强版本” **取值范围**: - BASIC_VERSION: 升级成基础版本 - ADVANCE_VERSION: 升级成增强版本
    * origin  **参数解释**: Agent任务接口调用源 **取值范围**: - CES: 由Console调用 - APICOM_BMS: 由裸金属服务器调用 - ADMIN_SERVER: 由运维平台调用
    * version  **参数解释**: 版本号 **取值范围**: 数组长度范围为[0,64]
    * remoteInstallMeta  **参数解释**: 创建远程安装任务时需要下发的被安装主机相关信息 **取值范围**: 数组长度范围为[0,100]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'invocationType' => 'string',
            'invocationTarget' => 'string',
            'invocationIds' => 'string[]',
            'versionType' => 'string',
            'origin' => 'string',
            'version' => 'string',
            'remoteInstallMeta' => '\HuaweiCloud\SDK\Ces\V3\Model\RemoteInstallHostInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  **参数解释**: 主机id列表（INSTALL和UPDATE时必须） **取值范围**: 数组长度范围为[1,100]
    * invocationType  **参数解释**: 任务类型 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回滚 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装
    * invocationTarget  **参数解释**: 任务对象，目前仅支持telescope **取值范围**: - telescope：主机监控插件telescope
    * invocationIds  **参数解释**: 任务ID列表（ROLLBACK和RETRY时必须） **取值范围**: 数组长度范围为[1,100]
    * versionType  **参数解释**: 插件升级时需要选择升级“基础版本”还是“增强版本” **取值范围**: - BASIC_VERSION: 升级成基础版本 - ADVANCE_VERSION: 升级成增强版本
    * origin  **参数解释**: Agent任务接口调用源 **取值范围**: - CES: 由Console调用 - APICOM_BMS: 由裸金属服务器调用 - ADMIN_SERVER: 由运维平台调用
    * version  **参数解释**: 版本号 **取值范围**: 数组长度范围为[0,64]
    * remoteInstallMeta  **参数解释**: 创建远程安装任务时需要下发的被安装主机相关信息 **取值范围**: 数组长度范围为[0,100]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'invocationType' => null,
        'invocationTarget' => null,
        'invocationIds' => null,
        'versionType' => null,
        'origin' => null,
        'version' => null,
        'remoteInstallMeta' => null
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
    * instanceIds  **参数解释**: 主机id列表（INSTALL和UPDATE时必须） **取值范围**: 数组长度范围为[1,100]
    * invocationType  **参数解释**: 任务类型 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回滚 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装
    * invocationTarget  **参数解释**: 任务对象，目前仅支持telescope **取值范围**: - telescope：主机监控插件telescope
    * invocationIds  **参数解释**: 任务ID列表（ROLLBACK和RETRY时必须） **取值范围**: 数组长度范围为[1,100]
    * versionType  **参数解释**: 插件升级时需要选择升级“基础版本”还是“增强版本” **取值范围**: - BASIC_VERSION: 升级成基础版本 - ADVANCE_VERSION: 升级成增强版本
    * origin  **参数解释**: Agent任务接口调用源 **取值范围**: - CES: 由Console调用 - APICOM_BMS: 由裸金属服务器调用 - ADMIN_SERVER: 由运维平台调用
    * version  **参数解释**: 版本号 **取值范围**: 数组长度范围为[0,64]
    * remoteInstallMeta  **参数解释**: 创建远程安装任务时需要下发的被安装主机相关信息 **取值范围**: 数组长度范围为[0,100]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'invocationType' => 'invocation_type',
            'invocationTarget' => 'invocation_target',
            'invocationIds' => 'invocation_ids',
            'versionType' => 'version_type',
            'origin' => 'origin',
            'version' => 'version',
            'remoteInstallMeta' => 'remote_install_meta'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  **参数解释**: 主机id列表（INSTALL和UPDATE时必须） **取值范围**: 数组长度范围为[1,100]
    * invocationType  **参数解释**: 任务类型 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回滚 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装
    * invocationTarget  **参数解释**: 任务对象，目前仅支持telescope **取值范围**: - telescope：主机监控插件telescope
    * invocationIds  **参数解释**: 任务ID列表（ROLLBACK和RETRY时必须） **取值范围**: 数组长度范围为[1,100]
    * versionType  **参数解释**: 插件升级时需要选择升级“基础版本”还是“增强版本” **取值范围**: - BASIC_VERSION: 升级成基础版本 - ADVANCE_VERSION: 升级成增强版本
    * origin  **参数解释**: Agent任务接口调用源 **取值范围**: - CES: 由Console调用 - APICOM_BMS: 由裸金属服务器调用 - ADMIN_SERVER: 由运维平台调用
    * version  **参数解释**: 版本号 **取值范围**: 数组长度范围为[0,64]
    * remoteInstallMeta  **参数解释**: 创建远程安装任务时需要下发的被安装主机相关信息 **取值范围**: 数组长度范围为[0,100]
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'invocationType' => 'setInvocationType',
            'invocationTarget' => 'setInvocationTarget',
            'invocationIds' => 'setInvocationIds',
            'versionType' => 'setVersionType',
            'origin' => 'setOrigin',
            'version' => 'setVersion',
            'remoteInstallMeta' => 'setRemoteInstallMeta'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  **参数解释**: 主机id列表（INSTALL和UPDATE时必须） **取值范围**: 数组长度范围为[1,100]
    * invocationType  **参数解释**: 任务类型 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回滚 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装
    * invocationTarget  **参数解释**: 任务对象，目前仅支持telescope **取值范围**: - telescope：主机监控插件telescope
    * invocationIds  **参数解释**: 任务ID列表（ROLLBACK和RETRY时必须） **取值范围**: 数组长度范围为[1,100]
    * versionType  **参数解释**: 插件升级时需要选择升级“基础版本”还是“增强版本” **取值范围**: - BASIC_VERSION: 升级成基础版本 - ADVANCE_VERSION: 升级成增强版本
    * origin  **参数解释**: Agent任务接口调用源 **取值范围**: - CES: 由Console调用 - APICOM_BMS: 由裸金属服务器调用 - ADMIN_SERVER: 由运维平台调用
    * version  **参数解释**: 版本号 **取值范围**: 数组长度范围为[0,64]
    * remoteInstallMeta  **参数解释**: 创建远程安装任务时需要下发的被安装主机相关信息 **取值范围**: 数组长度范围为[0,100]
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'invocationType' => 'getInvocationType',
            'invocationTarget' => 'getInvocationTarget',
            'invocationIds' => 'getInvocationIds',
            'versionType' => 'getVersionType',
            'origin' => 'getOrigin',
            'version' => 'getVersion',
            'remoteInstallMeta' => 'getRemoteInstallMeta'
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
    const INVOCATION_TYPE_INSTALL = 'INSTALL';
    const INVOCATION_TYPE_UPDATE = 'UPDATE';
    const INVOCATION_TYPE_ROLLBACK = 'ROLLBACK';
    const INVOCATION_TYPE_RETRY = 'RETRY';
    const INVOCATION_TYPE_SET_REMOTE_INSTALLER = 'SET_REMOTE_INSTALLER';
    const INVOCATION_TYPE_REMOTE_INSTALL = 'REMOTE_INSTALL';
    const INVOCATION_TARGET_TELESCOPE = 'telescope';
    const VERSION_TYPE_BASIC_VERSION = 'BASIC_VERSION';
    const VERSION_TYPE_ADVANCE_VERSION = 'ADVANCE_VERSION';
    const ORIGIN_CES = 'CES';
    const ORIGIN_APICOM_BMS = 'APICOM_BMS';
    const ORIGIN_ADMIN_SERVER = 'ADMIN_SERVER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTypeAllowableValues()
    {
        return [
            self::INVOCATION_TYPE_INSTALL,
            self::INVOCATION_TYPE_UPDATE,
            self::INVOCATION_TYPE_ROLLBACK,
            self::INVOCATION_TYPE_RETRY,
            self::INVOCATION_TYPE_SET_REMOTE_INSTALLER,
            self::INVOCATION_TYPE_REMOTE_INSTALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTargetAllowableValues()
    {
        return [
            self::INVOCATION_TARGET_TELESCOPE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVersionTypeAllowableValues()
    {
        return [
            self::VERSION_TYPE_BASIC_VERSION,
            self::VERSION_TYPE_ADVANCE_VERSION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_CES,
            self::ORIGIN_APICOM_BMS,
            self::ORIGIN_ADMIN_SERVER,
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['invocationType'] = isset($data['invocationType']) ? $data['invocationType'] : null;
        $this->container['invocationTarget'] = isset($data['invocationTarget']) ? $data['invocationTarget'] : null;
        $this->container['invocationIds'] = isset($data['invocationIds']) ? $data['invocationIds'] : null;
        $this->container['versionType'] = isset($data['versionType']) ? $data['versionType'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['remoteInstallMeta'] = isset($data['remoteInstallMeta']) ? $data['remoteInstallMeta'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['invocationType'] === null) {
            $invalidProperties[] = "'invocationType' can't be null";
        }
            $allowedValues = $this->getInvocationTypeAllowableValues();
                if (!is_null($this->container['invocationType']) && !in_array($this->container['invocationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInvocationTargetAllowableValues();
                if (!is_null($this->container['invocationTarget']) && !in_array($this->container['invocationTarget'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationTarget', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVersionTypeAllowableValues();
                if (!is_null($this->container['versionType']) && !in_array($this->container['versionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'versionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOriginAllowableValues();
                if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && !preg_match("/^([0-9A-Za-z]|_|-|\\.)+$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^([0-9A-Za-z]|_|-|\\.)+$/.";
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
    * Gets instanceIds
    *  **参数解释**: 主机id列表（INSTALL和UPDATE时必须） **取值范围**: 数组长度范围为[1,100]
    *
    * @return string[]|null
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[]|null $instanceIds **参数解释**: 主机id列表（INSTALL和UPDATE时必须） **取值范围**: 数组长度范围为[1,100]
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets invocationType
    *  **参数解释**: 任务类型 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回滚 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装
    *
    * @return string
    */
    public function getInvocationType()
    {
        return $this->container['invocationType'];
    }

    /**
    * Sets invocationType
    *
    * @param string $invocationType **参数解释**: 任务类型 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回滚 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装
    *
    * @return $this
    */
    public function setInvocationType($invocationType)
    {
        $this->container['invocationType'] = $invocationType;
        return $this;
    }

    /**
    * Gets invocationTarget
    *  **参数解释**: 任务对象，目前仅支持telescope **取值范围**: - telescope：主机监控插件telescope
    *
    * @return string|null
    */
    public function getInvocationTarget()
    {
        return $this->container['invocationTarget'];
    }

    /**
    * Sets invocationTarget
    *
    * @param string|null $invocationTarget **参数解释**: 任务对象，目前仅支持telescope **取值范围**: - telescope：主机监控插件telescope
    *
    * @return $this
    */
    public function setInvocationTarget($invocationTarget)
    {
        $this->container['invocationTarget'] = $invocationTarget;
        return $this;
    }

    /**
    * Gets invocationIds
    *  **参数解释**: 任务ID列表（ROLLBACK和RETRY时必须） **取值范围**: 数组长度范围为[1,100]
    *
    * @return string[]|null
    */
    public function getInvocationIds()
    {
        return $this->container['invocationIds'];
    }

    /**
    * Sets invocationIds
    *
    * @param string[]|null $invocationIds **参数解释**: 任务ID列表（ROLLBACK和RETRY时必须） **取值范围**: 数组长度范围为[1,100]
    *
    * @return $this
    */
    public function setInvocationIds($invocationIds)
    {
        $this->container['invocationIds'] = $invocationIds;
        return $this;
    }

    /**
    * Gets versionType
    *  **参数解释**: 插件升级时需要选择升级“基础版本”还是“增强版本” **取值范围**: - BASIC_VERSION: 升级成基础版本 - ADVANCE_VERSION: 升级成增强版本
    *
    * @return string|null
    */
    public function getVersionType()
    {
        return $this->container['versionType'];
    }

    /**
    * Sets versionType
    *
    * @param string|null $versionType **参数解释**: 插件升级时需要选择升级“基础版本”还是“增强版本” **取值范围**: - BASIC_VERSION: 升级成基础版本 - ADVANCE_VERSION: 升级成增强版本
    *
    * @return $this
    */
    public function setVersionType($versionType)
    {
        $this->container['versionType'] = $versionType;
        return $this;
    }

    /**
    * Gets origin
    *  **参数解释**: Agent任务接口调用源 **取值范围**: - CES: 由Console调用 - APICOM_BMS: 由裸金属服务器调用 - ADMIN_SERVER: 由运维平台调用
    *
    * @return string|null
    */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
    * Sets origin
    *
    * @param string|null $origin **参数解释**: Agent任务接口调用源 **取值范围**: - CES: 由Console调用 - APICOM_BMS: 由裸金属服务器调用 - ADMIN_SERVER: 由运维平台调用
    *
    * @return $this
    */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 版本号 **取值范围**: 数组长度范围为[0,64]
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 版本号 **取值范围**: 数组长度范围为[0,64]
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets remoteInstallMeta
    *  **参数解释**: 创建远程安装任务时需要下发的被安装主机相关信息 **取值范围**: 数组长度范围为[0,100]
    *
    * @return \HuaweiCloud\SDK\Ces\V3\Model\RemoteInstallHostInfo[]|null
    */
    public function getRemoteInstallMeta()
    {
        return $this->container['remoteInstallMeta'];
    }

    /**
    * Sets remoteInstallMeta
    *
    * @param \HuaweiCloud\SDK\Ces\V3\Model\RemoteInstallHostInfo[]|null $remoteInstallMeta **参数解释**: 创建远程安装任务时需要下发的被安装主机相关信息 **取值范围**: 数组长度范围为[0,100]
    *
    * @return $this
    */
    public function setRemoteInstallMeta($remoteInstallMeta)
    {
        $this->container['remoteInstallMeta'] = $remoteInstallMeta;
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

