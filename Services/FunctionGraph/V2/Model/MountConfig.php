<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MountConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MountConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mountUser  mountUser
    * funcMounts  函数挂载列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mountUser' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\MountUser',
            'funcMounts' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncMount[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mountUser  mountUser
    * funcMounts  函数挂载列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mountUser' => null,
        'funcMounts' => null
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
    * mountUser  mountUser
    * funcMounts  函数挂载列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mountUser' => 'mount_user',
            'funcMounts' => 'func_mounts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mountUser  mountUser
    * funcMounts  函数挂载列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'mountUser' => 'setMountUser',
            'funcMounts' => 'setFuncMounts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mountUser  mountUser
    * funcMounts  函数挂载列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'mountUser' => 'getMountUser',
            'funcMounts' => 'getFuncMounts'
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
        $this->container['mountUser'] = isset($data['mountUser']) ? $data['mountUser'] : null;
        $this->container['funcMounts'] = isset($data['funcMounts']) ? $data['funcMounts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mountUser'] === null) {
            $invalidProperties[] = "'mountUser' can't be null";
        }
        if ($this->container['funcMounts'] === null) {
            $invalidProperties[] = "'funcMounts' can't be null";
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
    * Gets mountUser
    *  mountUser
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\MountUser
    */
    public function getMountUser()
    {
        return $this->container['mountUser'];
    }

    /**
    * Sets mountUser
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\MountUser $mountUser mountUser
    *
    * @return $this
    */
    public function setMountUser($mountUser)
    {
        $this->container['mountUser'] = $mountUser;
        return $this;
    }

    /**
    * Gets funcMounts
    *  函数挂载列表。
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncMount[]
    */
    public function getFuncMounts()
    {
        return $this->container['funcMounts'];
    }

    /**
    * Sets funcMounts
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncMount[] $funcMounts 函数挂载列表。
    *
    * @return $this
    */
    public function setFuncMounts($funcMounts)
    {
        $this->container['funcMounts'] = $funcMounts;
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

