<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfirmTrainingSegmentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfirmTrainingSegmentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confirmResult  是否确认成功。
    * unmatchedIndexHit  讲解不匹配的文本索引。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confirmResult' => 'bool',
            'unmatchedIndexHit' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confirmResult  是否确认成功。
    * unmatchedIndexHit  讲解不匹配的文本索引。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confirmResult' => null,
        'unmatchedIndexHit' => null
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
    * confirmResult  是否确认成功。
    * unmatchedIndexHit  讲解不匹配的文本索引。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confirmResult' => 'confirm_result',
            'unmatchedIndexHit' => 'unmatched_index_hit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confirmResult  是否确认成功。
    * unmatchedIndexHit  讲解不匹配的文本索引。
    *
    * @var string[]
    */
    protected static $setters = [
            'confirmResult' => 'setConfirmResult',
            'unmatchedIndexHit' => 'setUnmatchedIndexHit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confirmResult  是否确认成功。
    * unmatchedIndexHit  讲解不匹配的文本索引。
    *
    * @var string[]
    */
    protected static $getters = [
            'confirmResult' => 'getConfirmResult',
            'unmatchedIndexHit' => 'getUnmatchedIndexHit'
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
        $this->container['confirmResult'] = isset($data['confirmResult']) ? $data['confirmResult'] : null;
        $this->container['unmatchedIndexHit'] = isset($data['unmatchedIndexHit']) ? $data['unmatchedIndexHit'] : null;
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
    * Gets confirmResult
    *  是否确认成功。
    *
    * @return bool|null
    */
    public function getConfirmResult()
    {
        return $this->container['confirmResult'];
    }

    /**
    * Sets confirmResult
    *
    * @param bool|null $confirmResult 是否确认成功。
    *
    * @return $this
    */
    public function setConfirmResult($confirmResult)
    {
        $this->container['confirmResult'] = $confirmResult;
        return $this;
    }

    /**
    * Gets unmatchedIndexHit
    *  讲解不匹配的文本索引。
    *
    * @return int[]|null
    */
    public function getUnmatchedIndexHit()
    {
        return $this->container['unmatchedIndexHit'];
    }

    /**
    * Sets unmatchedIndexHit
    *
    * @param int[]|null $unmatchedIndexHit 讲解不匹配的文本索引。
    *
    * @return $this
    */
    public function setUnmatchedIndexHit($unmatchedIndexHit)
    {
        $this->container['unmatchedIndexHit'] = $unmatchedIndexHit;
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

