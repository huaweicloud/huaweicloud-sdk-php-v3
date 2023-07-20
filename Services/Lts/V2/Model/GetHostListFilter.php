<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetHostListFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetHostListFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostNameList  主机名称列表。可以根据主机名称列表，进行批量过滤。
    * hostIpList  主机ID列表。可以根据主机IP列表，进行批量过滤。
    * hostStatus  主机状态。可以根据主机状态进行过滤。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostVersion  主机版本。可以根据主机版本进行过滤。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostNameList' => 'string[]',
            'hostIpList' => 'string[]',
            'hostStatus' => 'string',
            'hostVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostNameList  主机名称列表。可以根据主机名称列表，进行批量过滤。
    * hostIpList  主机ID列表。可以根据主机IP列表，进行批量过滤。
    * hostStatus  主机状态。可以根据主机状态进行过滤。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostVersion  主机版本。可以根据主机版本进行过滤。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostNameList' => null,
        'hostIpList' => null,
        'hostStatus' => null,
        'hostVersion' => null
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
    * hostNameList  主机名称列表。可以根据主机名称列表，进行批量过滤。
    * hostIpList  主机ID列表。可以根据主机IP列表，进行批量过滤。
    * hostStatus  主机状态。可以根据主机状态进行过滤。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostVersion  主机版本。可以根据主机版本进行过滤。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostNameList' => 'host_name_list',
            'hostIpList' => 'host_ip_list',
            'hostStatus' => 'host_status',
            'hostVersion' => 'host_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostNameList  主机名称列表。可以根据主机名称列表，进行批量过滤。
    * hostIpList  主机ID列表。可以根据主机IP列表，进行批量过滤。
    * hostStatus  主机状态。可以根据主机状态进行过滤。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostVersion  主机版本。可以根据主机版本进行过滤。
    *
    * @var string[]
    */
    protected static $setters = [
            'hostNameList' => 'setHostNameList',
            'hostIpList' => 'setHostIpList',
            'hostStatus' => 'setHostStatus',
            'hostVersion' => 'setHostVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostNameList  主机名称列表。可以根据主机名称列表，进行批量过滤。
    * hostIpList  主机ID列表。可以根据主机IP列表，进行批量过滤。
    * hostStatus  主机状态。可以根据主机状态进行过滤。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    * hostVersion  主机版本。可以根据主机版本进行过滤。
    *
    * @var string[]
    */
    protected static $getters = [
            'hostNameList' => 'getHostNameList',
            'hostIpList' => 'getHostIpList',
            'hostStatus' => 'getHostStatus',
            'hostVersion' => 'getHostVersion'
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
        $this->container['hostNameList'] = isset($data['hostNameList']) ? $data['hostNameList'] : null;
        $this->container['hostIpList'] = isset($data['hostIpList']) ? $data['hostIpList'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['hostVersion'] = isset($data['hostVersion']) ? $data['hostVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getHostStatusAllowableValues();
                if (!is_null($this->container['hostStatus']) && !in_array($this->container['hostStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostStatus', must be one of '%s'",
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
    * Gets hostNameList
    *  主机名称列表。可以根据主机名称列表，进行批量过滤。
    *
    * @return string[]|null
    */
    public function getHostNameList()
    {
        return $this->container['hostNameList'];
    }

    /**
    * Sets hostNameList
    *
    * @param string[]|null $hostNameList 主机名称列表。可以根据主机名称列表，进行批量过滤。
    *
    * @return $this
    */
    public function setHostNameList($hostNameList)
    {
        $this->container['hostNameList'] = $hostNameList;
        return $this;
    }

    /**
    * Gets hostIpList
    *  主机ID列表。可以根据主机IP列表，进行批量过滤。
    *
    * @return string[]|null
    */
    public function getHostIpList()
    {
        return $this->container['hostIpList'];
    }

    /**
    * Sets hostIpList
    *
    * @param string[]|null $hostIpList 主机ID列表。可以根据主机IP列表，进行批量过滤。
    *
    * @return $this
    */
    public function setHostIpList($hostIpList)
    {
        $this->container['hostIpList'] = $hostIpList;
        return $this;
    }

    /**
    * Gets hostStatus
    *  主机状态。可以根据主机状态进行过滤。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
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
    * @param string|null $hostStatus 主机状态。可以根据主机状态进行过滤。 uninstall:未安装 running:运行 offline:离线 error:异常 plugin error:插件错误 installing:安装中 install-fail:安装失败 upgrading:升级中 upgrading-transient:升级中 upgrade failed:升级失败 upgrade-fail:升级失败 uninstalling:卸载中 uninstalling-transient:卸载中 authentication error:鉴权失败
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets hostVersion
    *  主机版本。可以根据主机版本进行过滤。
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
    * @param string|null $hostVersion 主机版本。可以根据主机版本进行过滤。
    *
    * @return $this
    */
    public function setHostVersion($hostVersion)
    {
        $this->container['hostVersion'] = $hostVersion;
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

