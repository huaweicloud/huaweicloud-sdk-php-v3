<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddCopyDatabaseRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddCopyDatabaseRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * procedureName  操作名称(copy_database)
    * params  源库和目的库信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'procedureName' => 'string',
            'params' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * procedureName  操作名称(copy_database)
    * params  源库和目的库信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'procedureName' => null,
        'params' => null
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
    * procedureName  操作名称(copy_database)
    * params  源库和目的库信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'procedureName' => 'procedure_name',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * procedureName  操作名称(copy_database)
    * params  源库和目的库信息
    *
    * @var string[]
    */
    protected static $setters = [
            'procedureName' => 'setProcedureName',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * procedureName  操作名称(copy_database)
    * params  源库和目的库信息
    *
    * @var string[]
    */
    protected static $getters = [
            'procedureName' => 'getProcedureName',
            'params' => 'getParams'
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
        $this->container['procedureName'] = isset($data['procedureName']) ? $data['procedureName'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
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
    * Gets procedureName
    *  操作名称(copy_database)
    *
    * @return string|null
    */
    public function getProcedureName()
    {
        return $this->container['procedureName'];
    }

    /**
    * Sets procedureName
    *
    * @param string|null $procedureName 操作名称(copy_database)
    *
    * @return $this
    */
    public function setProcedureName($procedureName)
    {
        $this->container['procedureName'] = $procedureName;
        return $this;
    }

    /**
    * Gets params
    *  源库和目的库信息
    *
    * @return object|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param object|null $params 源库和目的库信息
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

