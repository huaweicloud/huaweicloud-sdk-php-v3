<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetHostListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetHostListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机ID
    * hostIp  主机IP
    * hostName  主机名称
    * hostStatus  主机状态。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostType  主机类型。linux:linux类型,windows:windows类型
    * hostVersion  主机版本
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostIp' => 'string',
            'hostName' => 'string',
            'hostStatus' => 'string',
            'hostType' => 'string',
            'hostVersion' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机ID
    * hostIp  主机IP
    * hostName  主机名称
    * hostStatus  主机状态。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostType  主机类型。linux:linux类型,windows:windows类型
    * hostVersion  主机版本
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostIp' => null,
        'hostName' => null,
        'hostStatus' => null,
        'hostType' => null,
        'hostVersion' => null,
        'updateTime' => 'int64'
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
    * hostId  主机ID
    * hostIp  主机IP
    * hostName  主机名称
    * hostStatus  主机状态。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostType  主机类型。linux:linux类型,windows:windows类型
    * hostVersion  主机版本
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostIp' => 'host_ip',
            'hostName' => 'host_name',
            'hostStatus' => 'host_status',
            'hostType' => 'host_type',
            'hostVersion' => 'host_version',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机ID
    * hostIp  主机IP
    * hostName  主机名称
    * hostStatus  主机状态。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostType  主机类型。linux:linux类型,windows:windows类型
    * hostVersion  主机版本
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostIp' => 'setHostIp',
            'hostName' => 'setHostName',
            'hostStatus' => 'setHostStatus',
            'hostType' => 'setHostType',
            'hostVersion' => 'setHostVersion',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机ID
    * hostIp  主机IP
    * hostName  主机名称
    * hostStatus  主机状态。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostType  主机类型。linux:linux类型,windows:windows类型
    * hostVersion  主机版本
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostIp' => 'getHostIp',
            'hostName' => 'getHostName',
            'hostStatus' => 'getHostStatus',
            'hostType' => 'getHostType',
            'hostVersion' => 'getHostVersion',
            'updateTime' => 'getUpdateTime'
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
    const HOST_STATUS_UNINSTALL = 'uninstall';
    const HOST_STATUS_RUNNING = 'running';
    const HOST_STATUS_OFFLINE = 'offline';
    const HOST_STATUS_ERROR = 'error';
    const HOST_STATUS_PLUGIN_ERROR = 'plugin error';
    const HOST_STATUS_INSTALLING = 'installing';
    const HOST_STATUS_INSTALL_FAIL = 'install-fail';
    const HOST_STATUS_UPGRADING = 'upgrading';
    const HOST_STATUS_UPGRADING_TRANSIENT = 'upgrading-transient';
    const HOST_STATUS_UPGRADE_FAILED = 'upgrade failed';
    const HOST_STATUS_UPGRADE_FAIL = 'upgrade-fail';
    const HOST_STATUS_UNINSTALLING = 'uninstalling';
    const HOST_STATUS_UNINSTALLING_TRANSIENT = 'uninstalling-transient';
    const HOST_STATUS_AUTHENTICATION_ERROR = 'authentication error';
    const HOST_TYPE_LINUX = 'linux';
    const HOST_TYPE_WINDOWS = 'windows';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostStatusAllowableValues()
    {
        return [
            self::HOST_STATUS_UNINSTALL,
            self::HOST_STATUS_RUNNING,
            self::HOST_STATUS_OFFLINE,
            self::HOST_STATUS_ERROR,
            self::HOST_STATUS_PLUGIN_ERROR,
            self::HOST_STATUS_INSTALLING,
            self::HOST_STATUS_INSTALL_FAIL,
            self::HOST_STATUS_UPGRADING,
            self::HOST_STATUS_UPGRADING_TRANSIENT,
            self::HOST_STATUS_UPGRADE_FAILED,
            self::HOST_STATUS_UPGRADE_FAIL,
            self::HOST_STATUS_UNINSTALLING,
            self::HOST_STATUS_UNINSTALLING_TRANSIENT,
            self::HOST_STATUS_AUTHENTICATION_ERROR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostTypeAllowableValues()
    {
        return [
            self::HOST_TYPE_LINUX,
            self::HOST_TYPE_WINDOWS,
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['hostVersion'] = isset($data['hostVersion']) ? $data['hostVersion'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 36)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 36)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 16)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getHostStatusAllowableValues();
                if (!is_null($this->container['hostStatus']) && !in_array($this->container['hostStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHostTypeAllowableValues();
                if (!is_null($this->container['hostType']) && !in_array($this->container['hostType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hostVersion']) && (mb_strlen($this->container['hostVersion']) > 16)) {
                $invalidProperties[] = "invalid value for 'hostVersion', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['hostVersion']) && (mb_strlen($this->container['hostVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostVersion', the character length must be bigger than or equal to 1.";
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
    * Gets hostId
    *  主机ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 主机ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIp
    *  主机IP
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 主机IP
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostStatus
    *  主机状态。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus 主机状态。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets hostType
    *  主机类型。linux:linux类型,windows:windows类型
    *
    * @return string|null
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string|null $hostType 主机类型。linux:linux类型,windows:windows类型
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets hostVersion
    *  主机版本
    *
    * @return string|null
    */
    public function getHostVersion()
    {
        return $this->container['hostVersion'];
    }

    /**
    * Sets hostVersion
    *
    * @param string|null $hostVersion 主机版本
    *
    * @return $this
    */
    public function setHostVersion($hostVersion)
    {
        $this->container['hostVersion'] = $hostVersion;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

