<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PatchUserReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PatchUserReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemas  概要
    * operations  要执行的修改操作列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemas' => 'string[]',
            'operations' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\OperationItemDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemas  概要
    * operations  要执行的修改操作列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemas' => null,
        'operations' => null
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
    * schemas  概要
    * operations  要执行的修改操作列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemas' => 'schemas',
            'operations' => 'Operations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemas  概要
    * operations  要执行的修改操作列表
    *
    * @var string[]
    */
    protected static $setters = [
            'schemas' => 'setSchemas',
            'operations' => 'setOperations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemas  概要
    * operations  要执行的修改操作列表
    *
    * @var string[]
    */
    protected static $getters = [
            'schemas' => 'getSchemas',
            'operations' => 'getOperations'
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
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['schemas'] === null) {
            $invalidProperties[] = "'schemas' can't be null";
        }
        if ($this->container['operations'] === null) {
            $invalidProperties[] = "'operations' can't be null";
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
    * Gets schemas
    *  概要
    *
    * @return string[]
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param string[] $schemas 概要
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets operations
    *  要执行的修改操作列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\OperationItemDto[]
    */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
    * Sets operations
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\OperationItemDto[] $operations 要执行的修改操作列表
    *
    * @return $this
    */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;
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

