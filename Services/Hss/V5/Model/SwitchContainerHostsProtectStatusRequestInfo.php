<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchContainerHostsProtectStatusRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchContainerHostsProtectStatusRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  开通的版本，包含如下：   - hss.version.null：无   - hss.version.container.enterprise：容器版
    * chargingMode  付费模式，包含如下：  - packet_cycle：包周期  - on_demand：按需
    * resourceId  资源实例ID
    * hostIdList  服务器列表
    * tags  资源标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'chargingMode' => 'string',
            'resourceId' => 'string',
            'hostIdList' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  开通的版本，包含如下：   - hss.version.null：无   - hss.version.container.enterprise：容器版
    * chargingMode  付费模式，包含如下：  - packet_cycle：包周期  - on_demand：按需
    * resourceId  资源实例ID
    * hostIdList  服务器列表
    * tags  资源标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'chargingMode' => null,
        'resourceId' => null,
        'hostIdList' => null,
        'tags' => null
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
    * version  开通的版本，包含如下：   - hss.version.null：无   - hss.version.container.enterprise：容器版
    * chargingMode  付费模式，包含如下：  - packet_cycle：包周期  - on_demand：按需
    * resourceId  资源实例ID
    * hostIdList  服务器列表
    * tags  资源标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id',
            'hostIdList' => 'host_id_list',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  开通的版本，包含如下：   - hss.version.null：无   - hss.version.container.enterprise：容器版
    * chargingMode  付费模式，包含如下：  - packet_cycle：包周期  - on_demand：按需
    * resourceId  资源实例ID
    * hostIdList  服务器列表
    * tags  资源标签
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'hostIdList' => 'setHostIdList',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  开通的版本，包含如下：   - hss.version.null：无   - hss.version.container.enterprise：容器版
    * chargingMode  付费模式，包含如下：  - packet_cycle：包周期  - on_demand：按需
    * resourceId  资源实例ID
    * hostIdList  服务器列表
    * tags  资源标签
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'hostIdList' => 'getHostIdList',
            'tags' => 'getTags'
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
    const VERSION_HSS_VERSION_NULL = 'hss.version.null';
    const VERSION_HSS_VERSION_CONTAINER_ENTERPRISE = 'hss.version.container.enterprise';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_HSS_VERSION_NULL,
            self::VERSION_HSS_VERSION_CONTAINER_ENTERPRISE,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            $allowedValues = $this->getVersionAllowableValues();
                if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'version', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            if ((mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^packet_cycle|on_demand$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^packet_cycle|on_demand$/.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/^.*$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
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
    * Gets version
    *  开通的版本，包含如下：   - hss.version.null：无   - hss.version.container.enterprise：容器版
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 开通的版本，包含如下：   - hss.version.null：无   - hss.version.container.enterprise：容器版
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets chargingMode
    *  付费模式，包含如下：  - packet_cycle：包周期  - on_demand：按需
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
    * @param string $chargingMode 付费模式，包含如下：  - packet_cycle：包周期  - on_demand：按需
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源实例ID
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
    * @param string|null $resourceId 资源实例ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets hostIdList
    *  服务器列表
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList 服务器列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]|null $tags 资源标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

