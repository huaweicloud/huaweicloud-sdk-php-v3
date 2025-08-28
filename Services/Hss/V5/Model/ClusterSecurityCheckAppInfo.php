<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSecurityCheckAppInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSecurityCheckAppInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * recentScanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'appVersion' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'updateTime' => 'int',
            'recentScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * recentScanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'appVersion' => null,
        'containerId' => null,
        'containerName' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'updateTime' => 'int64',
        'recentScanTime' => 'int64'
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
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * recentScanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'appVersion' => 'app_version',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'updateTime' => 'update_time',
            'recentScanTime' => 'recent_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * recentScanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'appVersion' => 'setAppVersion',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'updateTime' => 'setUpdateTime',
            'recentScanTime' => 'setRecentScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * recentScanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'appVersion' => 'getAppVersion',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'updateTime' => 'getUpdateTime',
            'recentScanTime' => 'getRecentScanTime'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['recentScanTime'] = isset($data['recentScanTime']) ? $data['recentScanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
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
    * Gets appName
    *  **参数解释**： 软件名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**： 软件名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**： 软件版本 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion **参数解释**： 软件版本 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**： 容器ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId **参数解释**： 容器ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 节点名称 **取值范围**： 不涉及
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
    * @param string|null $hostName **参数解释**： 节点名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 私有IP地址 **取值范围**： 不涉及
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
    * @param string|null $privateIp **参数解释**： 私有IP地址 **取值范围**： 不涉及
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
    *  **参数解释**： 公有IP地址 **取值范围**： 不涉及
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
    * @param string|null $publicIp **参数解释**： 公有IP地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 更新时间 **取值范围**： 不涉及
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
    * @param int|null $updateTime **参数解释**： 更新时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets recentScanTime
    *  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRecentScanTime()
    {
        return $this->container['recentScanTime'];
    }

    /**
    * Sets recentScanTime
    *
    * @param int|null $recentScanTime **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecentScanTime($recentScanTime)
    {
        $this->container['recentScanTime'] = $recentScanTime;
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

