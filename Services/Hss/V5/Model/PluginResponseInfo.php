<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  服务器名称
    * hostId  服务器ID
    * privateIp  私有IP地址
    * publicIp  公有IP地址
    * osType  系统类型
    * pluginName  插件名称
    * pluginVersion  插件版本
    * pluginStatus  插件状态
    * upgradeStatus  插件升级状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'osType' => 'string',
            'pluginName' => 'string',
            'pluginVersion' => 'string',
            'pluginStatus' => 'string',
            'upgradeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  服务器名称
    * hostId  服务器ID
    * privateIp  私有IP地址
    * publicIp  公有IP地址
    * osType  系统类型
    * pluginName  插件名称
    * pluginVersion  插件版本
    * pluginStatus  插件状态
    * upgradeStatus  插件升级状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'osType' => null,
        'pluginName' => null,
        'pluginVersion' => null,
        'pluginStatus' => null,
        'upgradeStatus' => null
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
    * hostName  服务器名称
    * hostId  服务器ID
    * privateIp  私有IP地址
    * publicIp  公有IP地址
    * osType  系统类型
    * pluginName  插件名称
    * pluginVersion  插件版本
    * pluginStatus  插件状态
    * upgradeStatus  插件升级状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'osType' => 'os_type',
            'pluginName' => 'plugin_name',
            'pluginVersion' => 'plugin_version',
            'pluginStatus' => 'plugin_status',
            'upgradeStatus' => 'upgrade_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  服务器名称
    * hostId  服务器ID
    * privateIp  私有IP地址
    * publicIp  公有IP地址
    * osType  系统类型
    * pluginName  插件名称
    * pluginVersion  插件版本
    * pluginStatus  插件状态
    * upgradeStatus  插件升级状态
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'osType' => 'setOsType',
            'pluginName' => 'setPluginName',
            'pluginVersion' => 'setPluginVersion',
            'pluginStatus' => 'setPluginStatus',
            'upgradeStatus' => 'setUpgradeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  服务器名称
    * hostId  服务器ID
    * privateIp  私有IP地址
    * publicIp  公有IP地址
    * osType  系统类型
    * pluginName  插件名称
    * pluginVersion  插件版本
    * pluginStatus  插件状态
    * upgradeStatus  插件升级状态
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'osType' => 'getOsType',
            'pluginName' => 'getPluginName',
            'pluginVersion' => 'getPluginVersion',
            'pluginStatus' => 'getPluginStatus',
            'upgradeStatus' => 'getUpgradeStatus'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['pluginStatus'] = isset($data['pluginStatus']) ? $data['pluginStatus'] : null;
        $this->container['upgradeStatus'] = isset($data['upgradeStatus']) ? $data['upgradeStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 256)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 1)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pluginName']) && (mb_strlen($this->container['pluginName']) > 256)) {
                $invalidProperties[] = "invalid value for 'pluginName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pluginName']) && (mb_strlen($this->container['pluginName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pluginName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pluginStatus']) && (mb_strlen($this->container['pluginStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'pluginStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pluginStatus']) && (mb_strlen($this->container['pluginStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'pluginStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['upgradeStatus']) && (mb_strlen($this->container['upgradeStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'upgradeStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['upgradeStatus']) && (mb_strlen($this->container['upgradeStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'upgradeStatus', the character length must be bigger than or equal to 1.";
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
    * Gets hostName
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  服务器ID
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
    * @param string|null $hostId 服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有IP地址
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 私有IP地址
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  公有IP地址
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 公有IP地址
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets osType
    *  系统类型
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets pluginName
    *  插件名称
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName 插件名称
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets pluginVersion
    *  插件版本
    *
    * @return string|null
    */
    public function getPluginVersion()
    {
        return $this->container['pluginVersion'];
    }

    /**
    * Sets pluginVersion
    *
    * @param string|null $pluginVersion 插件版本
    *
    * @return $this
    */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;
        return $this;
    }

    /**
    * Gets pluginStatus
    *  插件状态
    *
    * @return string|null
    */
    public function getPluginStatus()
    {
        return $this->container['pluginStatus'];
    }

    /**
    * Sets pluginStatus
    *
    * @param string|null $pluginStatus 插件状态
    *
    * @return $this
    */
    public function setPluginStatus($pluginStatus)
    {
        $this->container['pluginStatus'] = $pluginStatus;
        return $this;
    }

    /**
    * Gets upgradeStatus
    *  插件升级状态
    *
    * @return string|null
    */
    public function getUpgradeStatus()
    {
        return $this->container['upgradeStatus'];
    }

    /**
    * Sets upgradeStatus
    *
    * @param string|null $upgradeStatus 插件升级状态
    *
    * @return $this
    */
    public function setUpgradeStatus($upgradeStatus)
    {
        $this->container['upgradeStatus'] = $upgradeStatus;
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

