<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnusedPermissionDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnusedPermissionDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * service  权限对应的云服务名称。
    * lastAccessed  用户使用云服务的最后访问时间。
    * actions  未使用的操作列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'service' => 'string',
            'lastAccessed' => '\DateTime',
            'actions' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedAction[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * service  权限对应的云服务名称。
    * lastAccessed  用户使用云服务的最后访问时间。
    * actions  未使用的操作列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'service' => null,
        'lastAccessed' => 'date-time',
        'actions' => null
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
    * service  权限对应的云服务名称。
    * lastAccessed  用户使用云服务的最后访问时间。
    * actions  未使用的操作列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'service' => 'service',
            'lastAccessed' => 'last_accessed',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * service  权限对应的云服务名称。
    * lastAccessed  用户使用云服务的最后访问时间。
    * actions  未使用的操作列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'service' => 'setService',
            'lastAccessed' => 'setLastAccessed',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * service  权限对应的云服务名称。
    * lastAccessed  用户使用云服务的最后访问时间。
    * actions  未使用的操作列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'service' => 'getService',
            'lastAccessed' => 'getLastAccessed',
            'actions' => 'getActions'
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
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['lastAccessed'] = isset($data['lastAccessed']) ? $data['lastAccessed'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
    * Gets service
    *  权限对应的云服务名称。
    *
    * @return string
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string $service 权限对应的云服务名称。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets lastAccessed
    *  用户使用云服务的最后访问时间。
    *
    * @return \DateTime|null
    */
    public function getLastAccessed()
    {
        return $this->container['lastAccessed'];
    }

    /**
    * Sets lastAccessed
    *
    * @param \DateTime|null $lastAccessed 用户使用云服务的最后访问时间。
    *
    * @return $this
    */
    public function setLastAccessed($lastAccessed)
    {
        $this->container['lastAccessed'] = $lastAccessed;
        return $this;
    }

    /**
    * Gets actions
    *  未使用的操作列表。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedAction[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedAction[] $actions 未使用的操作列表。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

