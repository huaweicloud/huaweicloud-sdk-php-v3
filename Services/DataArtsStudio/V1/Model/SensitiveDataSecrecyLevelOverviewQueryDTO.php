<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SensitiveDataSecrecyLevelOverviewQueryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SensitiveDataSecrecyLevelOverviewQueryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secrecyLevelId  密级ID
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级的等级
    * count  当前密级下的敏感字段数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secrecyLevelId' => 'string',
            'secrecyLevelName' => 'string',
            'secrecyLevelNumber' => 'int',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secrecyLevelId  密级ID
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级的等级
    * count  当前密级下的敏感字段数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secrecyLevelId' => null,
        'secrecyLevelName' => null,
        'secrecyLevelNumber' => 'int64',
        'count' => 'int64'
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
    * secrecyLevelId  密级ID
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级的等级
    * count  当前密级下的敏感字段数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secrecyLevelId' => 'secrecy_level_id',
            'secrecyLevelName' => 'secrecy_level_name',
            'secrecyLevelNumber' => 'secrecy_level_number',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secrecyLevelId  密级ID
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级的等级
    * count  当前密级下的敏感字段数量
    *
    * @var string[]
    */
    protected static $setters = [
            'secrecyLevelId' => 'setSecrecyLevelId',
            'secrecyLevelName' => 'setSecrecyLevelName',
            'secrecyLevelNumber' => 'setSecrecyLevelNumber',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secrecyLevelId  密级ID
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级的等级
    * count  当前密级下的敏感字段数量
    *
    * @var string[]
    */
    protected static $getters = [
            'secrecyLevelId' => 'getSecrecyLevelId',
            'secrecyLevelName' => 'getSecrecyLevelName',
            'secrecyLevelNumber' => 'getSecrecyLevelNumber',
            'count' => 'getCount'
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
        $this->container['secrecyLevelId'] = isset($data['secrecyLevelId']) ? $data['secrecyLevelId'] : null;
        $this->container['secrecyLevelName'] = isset($data['secrecyLevelName']) ? $data['secrecyLevelName'] : null;
        $this->container['secrecyLevelNumber'] = isset($data['secrecyLevelNumber']) ? $data['secrecyLevelNumber'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secrecyLevelName']) && (mb_strlen($this->container['secrecyLevelName']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelName']) && (mb_strlen($this->container['secrecyLevelName']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secrecyLevelNumber']) && ($this->container['secrecyLevelNumber'] > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelNumber', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelNumber']) && ($this->container['secrecyLevelNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelNumber', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets secrecyLevelId
    *  密级ID
    *
    * @return string|null
    */
    public function getSecrecyLevelId()
    {
        return $this->container['secrecyLevelId'];
    }

    /**
    * Sets secrecyLevelId
    *
    * @param string|null $secrecyLevelId 密级ID
    *
    * @return $this
    */
    public function setSecrecyLevelId($secrecyLevelId)
    {
        $this->container['secrecyLevelId'] = $secrecyLevelId;
        return $this;
    }

    /**
    * Gets secrecyLevelName
    *  密级名称
    *
    * @return string|null
    */
    public function getSecrecyLevelName()
    {
        return $this->container['secrecyLevelName'];
    }

    /**
    * Sets secrecyLevelName
    *
    * @param string|null $secrecyLevelName 密级名称
    *
    * @return $this
    */
    public function setSecrecyLevelName($secrecyLevelName)
    {
        $this->container['secrecyLevelName'] = $secrecyLevelName;
        return $this;
    }

    /**
    * Gets secrecyLevelNumber
    *  密级的等级
    *
    * @return int|null
    */
    public function getSecrecyLevelNumber()
    {
        return $this->container['secrecyLevelNumber'];
    }

    /**
    * Sets secrecyLevelNumber
    *
    * @param int|null $secrecyLevelNumber 密级的等级
    *
    * @return $this
    */
    public function setSecrecyLevelNumber($secrecyLevelNumber)
    {
        $this->container['secrecyLevelNumber'] = $secrecyLevelNumber;
        return $this;
    }

    /**
    * Gets count
    *  当前密级下的敏感字段数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 当前密级下的敏感字段数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

