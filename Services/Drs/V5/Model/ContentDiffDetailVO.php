<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContentDiffDetailVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContentDiffDetailVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceKeyValue  源库KEY值。
    * targetKeyValue  目标库KEY值。
    * sourceSelectSql  查询源库SQL。
    * targetSelectSql  查询目标库SQL。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceKeyValue' => 'string[]',
            'targetKeyValue' => 'string[]',
            'sourceSelectSql' => 'string',
            'targetSelectSql' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceKeyValue  源库KEY值。
    * targetKeyValue  目标库KEY值。
    * sourceSelectSql  查询源库SQL。
    * targetSelectSql  查询目标库SQL。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceKeyValue' => null,
        'targetKeyValue' => null,
        'sourceSelectSql' => null,
        'targetSelectSql' => null
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
    * sourceKeyValue  源库KEY值。
    * targetKeyValue  目标库KEY值。
    * sourceSelectSql  查询源库SQL。
    * targetSelectSql  查询目标库SQL。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceKeyValue' => 'source_key_value',
            'targetKeyValue' => 'target_key_value',
            'sourceSelectSql' => 'source_select_sql',
            'targetSelectSql' => 'target_select_sql'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceKeyValue  源库KEY值。
    * targetKeyValue  目标库KEY值。
    * sourceSelectSql  查询源库SQL。
    * targetSelectSql  查询目标库SQL。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceKeyValue' => 'setSourceKeyValue',
            'targetKeyValue' => 'setTargetKeyValue',
            'sourceSelectSql' => 'setSourceSelectSql',
            'targetSelectSql' => 'setTargetSelectSql'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceKeyValue  源库KEY值。
    * targetKeyValue  目标库KEY值。
    * sourceSelectSql  查询源库SQL。
    * targetSelectSql  查询目标库SQL。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceKeyValue' => 'getSourceKeyValue',
            'targetKeyValue' => 'getTargetKeyValue',
            'sourceSelectSql' => 'getSourceSelectSql',
            'targetSelectSql' => 'getTargetSelectSql'
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
        $this->container['sourceKeyValue'] = isset($data['sourceKeyValue']) ? $data['sourceKeyValue'] : null;
        $this->container['targetKeyValue'] = isset($data['targetKeyValue']) ? $data['targetKeyValue'] : null;
        $this->container['sourceSelectSql'] = isset($data['sourceSelectSql']) ? $data['sourceSelectSql'] : null;
        $this->container['targetSelectSql'] = isset($data['targetSelectSql']) ? $data['targetSelectSql'] : null;
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
    * Gets sourceKeyValue
    *  源库KEY值。
    *
    * @return string[]|null
    */
    public function getSourceKeyValue()
    {
        return $this->container['sourceKeyValue'];
    }

    /**
    * Sets sourceKeyValue
    *
    * @param string[]|null $sourceKeyValue 源库KEY值。
    *
    * @return $this
    */
    public function setSourceKeyValue($sourceKeyValue)
    {
        $this->container['sourceKeyValue'] = $sourceKeyValue;
        return $this;
    }

    /**
    * Gets targetKeyValue
    *  目标库KEY值。
    *
    * @return string[]|null
    */
    public function getTargetKeyValue()
    {
        return $this->container['targetKeyValue'];
    }

    /**
    * Sets targetKeyValue
    *
    * @param string[]|null $targetKeyValue 目标库KEY值。
    *
    * @return $this
    */
    public function setTargetKeyValue($targetKeyValue)
    {
        $this->container['targetKeyValue'] = $targetKeyValue;
        return $this;
    }

    /**
    * Gets sourceSelectSql
    *  查询源库SQL。
    *
    * @return string|null
    */
    public function getSourceSelectSql()
    {
        return $this->container['sourceSelectSql'];
    }

    /**
    * Sets sourceSelectSql
    *
    * @param string|null $sourceSelectSql 查询源库SQL。
    *
    * @return $this
    */
    public function setSourceSelectSql($sourceSelectSql)
    {
        $this->container['sourceSelectSql'] = $sourceSelectSql;
        return $this;
    }

    /**
    * Gets targetSelectSql
    *  查询目标库SQL。
    *
    * @return string|null
    */
    public function getTargetSelectSql()
    {
        return $this->container['targetSelectSql'];
    }

    /**
    * Sets targetSelectSql
    *
    * @param string|null $targetSelectSql 查询目标库SQL。
    *
    * @return $this
    */
    public function setTargetSelectSql($targetSelectSql)
    {
        $this->container['targetSelectSql'] = $targetSelectSql;
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

