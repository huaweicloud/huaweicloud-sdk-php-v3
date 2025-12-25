<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaDataResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaDataResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  **参数解释**： 当前返回结果条数。 **取值范围**: 0 - 2147483647
    * total  **参数解释**： 结果总条数。 **取值范围**： 0 - 2147483647
    * marker  **参数解释**： 下一个开始的标记，用于分页。如本次查询10条数据，第十条alarm_id为al1441967036681YkazZ0deN，下次start配置为al1441967036681YkazZ0deN可从该alarm_id开始查询。 **取值范围**： 1 - 9999
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'total' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  **参数解释**： 当前返回结果条数。 **取值范围**: 0 - 2147483647
    * total  **参数解释**： 结果总条数。 **取值范围**： 0 - 2147483647
    * marker  **参数解释**： 下一个开始的标记，用于分页。如本次查询10条数据，第十条alarm_id为al1441967036681YkazZ0deN，下次start配置为al1441967036681YkazZ0deN可从该alarm_id开始查询。 **取值范围**： 1 - 9999
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'total' => 'int32',
        'marker' => null
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
    * count  **参数解释**： 当前返回结果条数。 **取值范围**: 0 - 2147483647
    * total  **参数解释**： 结果总条数。 **取值范围**： 0 - 2147483647
    * marker  **参数解释**： 下一个开始的标记，用于分页。如本次查询10条数据，第十条alarm_id为al1441967036681YkazZ0deN，下次start配置为al1441967036681YkazZ0deN可从该alarm_id开始查询。 **取值范围**： 1 - 9999
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'total' => 'total',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  **参数解释**： 当前返回结果条数。 **取值范围**: 0 - 2147483647
    * total  **参数解释**： 结果总条数。 **取值范围**： 0 - 2147483647
    * marker  **参数解释**： 下一个开始的标记，用于分页。如本次查询10条数据，第十条alarm_id为al1441967036681YkazZ0deN，下次start配置为al1441967036681YkazZ0deN可从该alarm_id开始查询。 **取值范围**： 1 - 9999
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'total' => 'setTotal',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  **参数解释**： 当前返回结果条数。 **取值范围**: 0 - 2147483647
    * total  **参数解释**： 结果总条数。 **取值范围**： 0 - 2147483647
    * marker  **参数解释**： 下一个开始的标记，用于分页。如本次查询10条数据，第十条alarm_id为al1441967036681YkazZ0deN，下次start配置为al1441967036681YkazZ0deN可从该alarm_id开始查询。 **取值范围**： 1 - 9999
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'total' => 'getTotal',
            'marker' => 'getMarker'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 9999)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
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
    * Gets count
    *  **参数解释**： 当前返回结果条数。 **取值范围**: 0 - 2147483647
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
    * @param int|null $count **参数解释**： 当前返回结果条数。 **取值范围**: 0 - 2147483647
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 结果总条数。 **取值范围**： 0 - 2147483647
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
    * @param int|null $total **参数解释**： 结果总条数。 **取值范围**： 0 - 2147483647
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释**： 下一个开始的标记，用于分页。如本次查询10条数据，第十条alarm_id为al1441967036681YkazZ0deN，下次start配置为al1441967036681YkazZ0deN可从该alarm_id开始查询。 **取值范围**： 1 - 9999
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释**： 下一个开始的标记，用于分页。如本次查询10条数据，第十条alarm_id为al1441967036681YkazZ0deN，下次start配置为al1441967036681YkazZ0deN可从该alarm_id开始查询。 **取值范围**： 1 - 9999
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

