<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListKeysResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListKeysResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keys  key_id列表。
    * keyDetails  密钥详情列表。详情参见KeyDetails
    * nextMarker  获取下一页所需要传递的“marker”值。当“truncated”为“false”时，“next_marker”为空。
    * truncated  是否还有下一页： - “true”表示还有数据。 - “false”表示已经是最后一页。
    * total  密钥总条数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keys' => 'string[]',
            'keyDetails' => '\HuaweiCloud\SDK\Kms\v2\Model\KeyDetails[]',
            'nextMarker' => 'string',
            'truncated' => 'string',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keys  key_id列表。
    * keyDetails  密钥详情列表。详情参见KeyDetails
    * nextMarker  获取下一页所需要传递的“marker”值。当“truncated”为“false”时，“next_marker”为空。
    * truncated  是否还有下一页： - “true”表示还有数据。 - “false”表示已经是最后一页。
    * total  密钥总条数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keys' => null,
        'keyDetails' => null,
        'nextMarker' => null,
        'truncated' => null,
        'total' => 'int32'
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
    * keys  key_id列表。
    * keyDetails  密钥详情列表。详情参见KeyDetails
    * nextMarker  获取下一页所需要传递的“marker”值。当“truncated”为“false”时，“next_marker”为空。
    * truncated  是否还有下一页： - “true”表示还有数据。 - “false”表示已经是最后一页。
    * total  密钥总条数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keys' => 'keys',
            'keyDetails' => 'key_details',
            'nextMarker' => 'next_marker',
            'truncated' => 'truncated',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keys  key_id列表。
    * keyDetails  密钥详情列表。详情参见KeyDetails
    * nextMarker  获取下一页所需要传递的“marker”值。当“truncated”为“false”时，“next_marker”为空。
    * truncated  是否还有下一页： - “true”表示还有数据。 - “false”表示已经是最后一页。
    * total  密钥总条数。
    *
    * @var string[]
    */
    protected static $setters = [
            'keys' => 'setKeys',
            'keyDetails' => 'setKeyDetails',
            'nextMarker' => 'setNextMarker',
            'truncated' => 'setTruncated',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keys  key_id列表。
    * keyDetails  密钥详情列表。详情参见KeyDetails
    * nextMarker  获取下一页所需要传递的“marker”值。当“truncated”为“false”时，“next_marker”为空。
    * truncated  是否还有下一页： - “true”表示还有数据。 - “false”表示已经是最后一页。
    * total  密钥总条数。
    *
    * @var string[]
    */
    protected static $getters = [
            'keys' => 'getKeys',
            'keyDetails' => 'getKeyDetails',
            'nextMarker' => 'getNextMarker',
            'truncated' => 'getTruncated',
            'total' => 'getTotal'
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
    const TRUNCATED_TRUE = 'true';
    const TRUNCATED_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTruncatedAllowableValues()
    {
        return [
            self::TRUNCATED_TRUE,
            self::TRUNCATED_FALSE,
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
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['keyDetails'] = isset($data['keyDetails']) ? $data['keyDetails'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['truncated'] = isset($data['truncated']) ? $data['truncated'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) > 1000)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) < 0)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTruncatedAllowableValues();
                if (!is_null($this->container['truncated']) && !in_array($this->container['truncated'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'truncated', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['total']) && ($this->container['total'] > 1000)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets keys
    *  key_id列表。
    *
    * @return string[]|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param string[]|null $keys key_id列表。
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
        return $this;
    }

    /**
    * Gets keyDetails
    *  密钥详情列表。详情参见KeyDetails
    *
    * @return \HuaweiCloud\SDK\Kms\v2\Model\KeyDetails[]|null
    */
    public function getKeyDetails()
    {
        return $this->container['keyDetails'];
    }

    /**
    * Sets keyDetails
    *
    * @param \HuaweiCloud\SDK\Kms\v2\Model\KeyDetails[]|null $keyDetails 密钥详情列表。详情参见KeyDetails
    *
    * @return $this
    */
    public function setKeyDetails($keyDetails)
    {
        $this->container['keyDetails'] = $keyDetails;
        return $this;
    }

    /**
    * Gets nextMarker
    *  获取下一页所需要传递的“marker”值。当“truncated”为“false”时，“next_marker”为空。
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 获取下一页所需要传递的“marker”值。当“truncated”为“false”时，“next_marker”为空。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets truncated
    *  是否还有下一页： - “true”表示还有数据。 - “false”表示已经是最后一页。
    *
    * @return string|null
    */
    public function getTruncated()
    {
        return $this->container['truncated'];
    }

    /**
    * Sets truncated
    *
    * @param string|null $truncated 是否还有下一页： - “true”表示还有数据。 - “false”表示已经是最后一页。
    *
    * @return $this
    */
    public function setTruncated($truncated)
    {
        $this->container['truncated'] = $truncated;
        return $this;
    }

    /**
    * Gets total
    *  密钥总条数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 密钥总条数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

