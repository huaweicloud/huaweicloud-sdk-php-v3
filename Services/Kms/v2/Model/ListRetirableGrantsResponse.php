<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRetirableGrantsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRetirableGrantsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * grants  grant列表，详情请参见grants字段数据结构说明。
    * nextMarker  获取下一页所需要传递的marker值。 当“truncated”为“false”时，“next_marker”为空。
    * total  可退役授权总条数。
    * truncated  是否还有下一页：  - “true”表示还有数据。  - “false”表示已经是最后一页。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'grants' => '\HuaweiCloud\SDK\Kms\v2\Model\Grants[]',
            'nextMarker' => 'string',
            'total' => 'int',
            'truncated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * grants  grant列表，详情请参见grants字段数据结构说明。
    * nextMarker  获取下一页所需要传递的marker值。 当“truncated”为“false”时，“next_marker”为空。
    * total  可退役授权总条数。
    * truncated  是否还有下一页：  - “true”表示还有数据。  - “false”表示已经是最后一页。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'grants' => null,
        'nextMarker' => null,
        'total' => 'int32',
        'truncated' => null
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
    * grants  grant列表，详情请参见grants字段数据结构说明。
    * nextMarker  获取下一页所需要传递的marker值。 当“truncated”为“false”时，“next_marker”为空。
    * total  可退役授权总条数。
    * truncated  是否还有下一页：  - “true”表示还有数据。  - “false”表示已经是最后一页。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'grants' => 'grants',
            'nextMarker' => 'next_marker',
            'total' => 'total',
            'truncated' => 'truncated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * grants  grant列表，详情请参见grants字段数据结构说明。
    * nextMarker  获取下一页所需要传递的marker值。 当“truncated”为“false”时，“next_marker”为空。
    * total  可退役授权总条数。
    * truncated  是否还有下一页：  - “true”表示还有数据。  - “false”表示已经是最后一页。
    *
    * @var string[]
    */
    protected static $setters = [
            'grants' => 'setGrants',
            'nextMarker' => 'setNextMarker',
            'total' => 'setTotal',
            'truncated' => 'setTruncated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * grants  grant列表，详情请参见grants字段数据结构说明。
    * nextMarker  获取下一页所需要传递的marker值。 当“truncated”为“false”时，“next_marker”为空。
    * total  可退役授权总条数。
    * truncated  是否还有下一页：  - “true”表示还有数据。  - “false”表示已经是最后一页。
    *
    * @var string[]
    */
    protected static $getters = [
            'grants' => 'getGrants',
            'nextMarker' => 'getNextMarker',
            'total' => 'getTotal',
            'truncated' => 'getTruncated'
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
        $this->container['grants'] = isset($data['grants']) ? $data['grants'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['truncated'] = isset($data['truncated']) ? $data['truncated'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) > 4)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) < 0)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 1000)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTruncatedAllowableValues();
                if (!is_null($this->container['truncated']) && !in_array($this->container['truncated'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'truncated', must be one of '%s'",
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
    * Gets grants
    *  grant列表，详情请参见grants字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Kms\v2\Model\Grants[]|null
    */
    public function getGrants()
    {
        return $this->container['grants'];
    }

    /**
    * Sets grants
    *
    * @param \HuaweiCloud\SDK\Kms\v2\Model\Grants[]|null $grants grant列表，详情请参见grants字段数据结构说明。
    *
    * @return $this
    */
    public function setGrants($grants)
    {
        $this->container['grants'] = $grants;
        return $this;
    }

    /**
    * Gets nextMarker
    *  获取下一页所需要传递的marker值。 当“truncated”为“false”时，“next_marker”为空。
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
    * @param string|null $nextMarker 获取下一页所需要传递的marker值。 当“truncated”为“false”时，“next_marker”为空。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets total
    *  可退役授权总条数。
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
    * @param int|null $total 可退役授权总条数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets truncated
    *  是否还有下一页：  - “true”表示还有数据。  - “false”表示已经是最后一页。
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
    * @param string|null $truncated 是否还有下一页：  - “true”表示还有数据。  - “false”表示已经是最后一页。
    *
    * @return $this
    */
    public function setTruncated($truncated)
    {
        $this->container['truncated'] = $truncated;
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

