<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdsParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdsParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  ID列表
    * delTypes  删除物理表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'int[]',
            'delTypes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  ID列表
    * delTypes  删除物理表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => 'int64',
        'delTypes' => null
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
    * ids  ID列表
    * delTypes  删除物理表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'delTypes' => 'del_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  ID列表
    * delTypes  删除物理表
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'delTypes' => 'setDelTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  ID列表
    * delTypes  删除物理表
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'delTypes' => 'getDelTypes'
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
    const DEL_TYPES_PHYSICAL_TABLE = 'PHYSICAL_TABLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDelTypesAllowableValues()
    {
        return [
            self::DEL_TYPES_PHYSICAL_TABLE,
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['delTypes'] = isset($data['delTypes']) ? $data['delTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ids'] === null) {
            $invalidProperties[] = "'ids' can't be null";
        }
            $allowedValues = $this->getDelTypesAllowableValues();
                if (!is_null($this->container['delTypes']) && !in_array($this->container['delTypes'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'delTypes', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets ids
    *  ID列表
    *
    * @return int[]
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param int[] $ids ID列表
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets delTypes
    *  删除物理表
    *
    * @return string|null
    */
    public function getDelTypes()
    {
        return $this->container['delTypes'];
    }

    /**
    * Sets delTypes
    *
    * @param string|null $delTypes 删除物理表
    *
    * @return $this
    */
    public function setDelTypes($delTypes)
    {
        $this->container['delTypes'] = $delTypes;
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

