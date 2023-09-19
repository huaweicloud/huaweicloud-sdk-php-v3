<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterPublicKibanaElbWhiteList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterPublicKibanaElbWhiteList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * whiteList  白名单。需要添加白名单的网段或ip，以逗号隔开，不可重复。
    * enableWhiteList  是否开启kibana访问控制。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'whiteList' => 'string',
            'enableWhiteList' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * whiteList  白名单。需要添加白名单的网段或ip，以逗号隔开，不可重复。
    * enableWhiteList  是否开启kibana访问控制。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'whiteList' => null,
        'enableWhiteList' => null
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
    * whiteList  白名单。需要添加白名单的网段或ip，以逗号隔开，不可重复。
    * enableWhiteList  是否开启kibana访问控制。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'whiteList' => 'whiteList',
            'enableWhiteList' => 'enableWhiteList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * whiteList  白名单。需要添加白名单的网段或ip，以逗号隔开，不可重复。
    * enableWhiteList  是否开启kibana访问控制。
    *
    * @var string[]
    */
    protected static $setters = [
            'whiteList' => 'setWhiteList',
            'enableWhiteList' => 'setEnableWhiteList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * whiteList  白名单。需要添加白名单的网段或ip，以逗号隔开，不可重复。
    * enableWhiteList  是否开启kibana访问控制。
    *
    * @var string[]
    */
    protected static $getters = [
            'whiteList' => 'getWhiteList',
            'enableWhiteList' => 'getEnableWhiteList'
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
        $this->container['whiteList'] = isset($data['whiteList']) ? $data['whiteList'] : null;
        $this->container['enableWhiteList'] = isset($data['enableWhiteList']) ? $data['enableWhiteList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['whiteList'] === null) {
            $invalidProperties[] = "'whiteList' can't be null";
        }
        if ($this->container['enableWhiteList'] === null) {
            $invalidProperties[] = "'enableWhiteList' can't be null";
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
    * Gets whiteList
    *  白名单。需要添加白名单的网段或ip，以逗号隔开，不可重复。
    *
    * @return string
    */
    public function getWhiteList()
    {
        return $this->container['whiteList'];
    }

    /**
    * Sets whiteList
    *
    * @param string $whiteList 白名单。需要添加白名单的网段或ip，以逗号隔开，不可重复。
    *
    * @return $this
    */
    public function setWhiteList($whiteList)
    {
        $this->container['whiteList'] = $whiteList;
        return $this;
    }

    /**
    * Gets enableWhiteList
    *  是否开启kibana访问控制。
    *
    * @return bool
    */
    public function getEnableWhiteList()
    {
        return $this->container['enableWhiteList'];
    }

    /**
    * Sets enableWhiteList
    *
    * @param bool $enableWhiteList 是否开启kibana访问控制。
    *
    * @return $this
    */
    public function setEnableWhiteList($enableWhiteList)
    {
        $this->container['enableWhiteList'] = $enableWhiteList;
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

