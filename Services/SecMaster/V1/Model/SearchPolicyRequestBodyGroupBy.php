<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchPolicyRequestBodyGroupBy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchPolicyRequestBody_group_by';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupByFields  聚合字段
    * groupByHit  groupByHit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupByFields' => 'string[]',
            'groupByHit' => '\HuaweiCloud\SDK\SecMaster\V1\Model\SearchPolicyRequestBodyGroupByGroupByHit'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupByFields  聚合字段
    * groupByHit  groupByHit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupByFields' => null,
        'groupByHit' => null
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
    * groupByFields  聚合字段
    * groupByHit  groupByHit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupByFields' => 'group_by_fields',
            'groupByHit' => 'group_by_hit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupByFields  聚合字段
    * groupByHit  groupByHit
    *
    * @var string[]
    */
    protected static $setters = [
            'groupByFields' => 'setGroupByFields',
            'groupByHit' => 'setGroupByHit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupByFields  聚合字段
    * groupByHit  groupByHit
    *
    * @var string[]
    */
    protected static $getters = [
            'groupByFields' => 'getGroupByFields',
            'groupByHit' => 'getGroupByHit'
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
        $this->container['groupByFields'] = isset($data['groupByFields']) ? $data['groupByFields'] : null;
        $this->container['groupByHit'] = isset($data['groupByHit']) ? $data['groupByHit'] : null;
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
    * Gets groupByFields
    *  聚合字段
    *
    * @return string[]|null
    */
    public function getGroupByFields()
    {
        return $this->container['groupByFields'];
    }

    /**
    * Sets groupByFields
    *
    * @param string[]|null $groupByFields 聚合字段
    *
    * @return $this
    */
    public function setGroupByFields($groupByFields)
    {
        $this->container['groupByFields'] = $groupByFields;
        return $this;
    }

    /**
    * Gets groupByHit
    *  groupByHit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\SearchPolicyRequestBodyGroupByGroupByHit|null
    */
    public function getGroupByHit()
    {
        return $this->container['groupByHit'];
    }

    /**
    * Sets groupByHit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\SearchPolicyRequestBodyGroupByGroupByHit|null $groupByHit groupByHit
    *
    * @return $this
    */
    public function setGroupByHit($groupByHit)
    {
        $this->container['groupByHit'] = $groupByHit;
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

