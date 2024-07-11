<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvironmentBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvironmentBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  环境名称
    * os  操作系统：windows|linux
    * uuid  环境id
    * groupId  主机集群id
    * hostCount  环境下主机数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'os' => 'string',
            'uuid' => 'string',
            'groupId' => 'string',
            'hostCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  环境名称
    * os  操作系统：windows|linux
    * uuid  环境id
    * groupId  主机集群id
    * hostCount  环境下主机数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'os' => null,
        'uuid' => null,
        'groupId' => null,
        'hostCount' => null
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
    * name  环境名称
    * os  操作系统：windows|linux
    * uuid  环境id
    * groupId  主机集群id
    * hostCount  环境下主机数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'os' => 'os',
            'uuid' => 'uuid',
            'groupId' => 'group_id',
            'hostCount' => 'host_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  环境名称
    * os  操作系统：windows|linux
    * uuid  环境id
    * groupId  主机集群id
    * hostCount  环境下主机数量
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'os' => 'setOs',
            'uuid' => 'setUuid',
            'groupId' => 'setGroupId',
            'hostCount' => 'setHostCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  环境名称
    * os  操作系统：windows|linux
    * uuid  环境id
    * groupId  主机集群id
    * hostCount  环境下主机数量
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'os' => 'getOs',
            'uuid' => 'getUuid',
            'groupId' => 'getGroupId',
            'hostCount' => 'getHostCount'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['hostCount'] = isset($data['hostCount']) ? $data['hostCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets name
    *  环境名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 环境名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets os
    *  操作系统：windows|linux
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统：windows|linux
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets uuid
    *  环境id
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 环境id
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets groupId
    *  主机集群id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 主机集群id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets hostCount
    *  环境下主机数量
    *
    * @return int|null
    */
    public function getHostCount()
    {
        return $this->container['hostCount'];
    }

    /**
    * Sets hostCount
    *
    * @param int|null $hostCount 环境下主机数量
    *
    * @return $this
    */
    public function setHostCount($hostCount)
    {
        $this->container['hostCount'] = $hostCount;
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

