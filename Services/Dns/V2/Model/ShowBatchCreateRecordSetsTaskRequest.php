<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBatchCreateRecordSetsTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBatchCreateRecordSetsTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneId  **参数解释：** 域名ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * errorItemLimit  **参数解释：** 分页查询时配置每页返回的失败条目个数。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 2000
    * errorItemOffset  **参数解释：** 分页查询起始偏移量，表示从偏移量的下一个失败条目开始查询。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneId' => 'string',
            'errorItemLimit' => 'int',
            'errorItemOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneId  **参数解释：** 域名ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * errorItemLimit  **参数解释：** 分页查询时配置每页返回的失败条目个数。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 2000
    * errorItemOffset  **参数解释：** 分页查询起始偏移量，表示从偏移量的下一个失败条目开始查询。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneId' => null,
        'errorItemLimit' => 'int32',
        'errorItemOffset' => 'int32'
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
    * zoneId  **参数解释：** 域名ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * errorItemLimit  **参数解释：** 分页查询时配置每页返回的失败条目个数。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 2000
    * errorItemOffset  **参数解释：** 分页查询起始偏移量，表示从偏移量的下一个失败条目开始查询。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneId' => 'zone_id',
            'errorItemLimit' => 'error_item_limit',
            'errorItemOffset' => 'error_item_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneId  **参数解释：** 域名ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * errorItemLimit  **参数解释：** 分页查询时配置每页返回的失败条目个数。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 2000
    * errorItemOffset  **参数解释：** 分页查询起始偏移量，表示从偏移量的下一个失败条目开始查询。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneId' => 'setZoneId',
            'errorItemLimit' => 'setErrorItemLimit',
            'errorItemOffset' => 'setErrorItemOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneId  **参数解释：** 域名ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * errorItemLimit  **参数解释：** 分页查询时配置每页返回的失败条目个数。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 2000
    * errorItemOffset  **参数解释：** 分页查询起始偏移量，表示从偏移量的下一个失败条目开始查询。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneId' => 'getZoneId',
            'errorItemLimit' => 'getErrorItemLimit',
            'errorItemOffset' => 'getErrorItemOffset'
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
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['errorItemLimit'] = isset($data['errorItemLimit']) ? $data['errorItemLimit'] : null;
        $this->container['errorItemOffset'] = isset($data['errorItemOffset']) ? $data['errorItemOffset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zoneId'] === null) {
            $invalidProperties[] = "'zoneId' can't be null";
        }
            if ((mb_strlen($this->container['zoneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'zoneId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['zoneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'zoneId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['errorItemLimit']) && ($this->container['errorItemLimit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'errorItemLimit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['errorItemLimit']) && ($this->container['errorItemLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'errorItemLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorItemOffset']) && ($this->container['errorItemOffset'] > 2000)) {
                $invalidProperties[] = "invalid value for 'errorItemOffset', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['errorItemOffset']) && ($this->container['errorItemOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'errorItemOffset', must be bigger than or equal to 0.";
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
    * Gets zoneId
    *  **参数解释：** 域名ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getZoneId()
    {
        return $this->container['zoneId'];
    }

    /**
    * Sets zoneId
    *
    * @param string $zoneId **参数解释：** 域名ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets errorItemLimit
    *  **参数解释：** 分页查询时配置每页返回的失败条目个数。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 2000
    *
    * @return int|null
    */
    public function getErrorItemLimit()
    {
        return $this->container['errorItemLimit'];
    }

    /**
    * Sets errorItemLimit
    *
    * @param int|null $errorItemLimit **参数解释：** 分页查询时配置每页返回的失败条目个数。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 2000
    *
    * @return $this
    */
    public function setErrorItemLimit($errorItemLimit)
    {
        $this->container['errorItemLimit'] = $errorItemLimit;
        return $this;
    }

    /**
    * Gets errorItemOffset
    *  **参数解释：** 分页查询起始偏移量，表示从偏移量的下一个失败条目开始查询。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 0
    *
    * @return int|null
    */
    public function getErrorItemOffset()
    {
        return $this->container['errorItemOffset'];
    }

    /**
    * Sets errorItemOffset
    *
    * @param int|null $errorItemOffset **参数解释：** 分页查询起始偏移量，表示从偏移量的下一个失败条目开始查询。 **约束限制：** 不涉及。 **取值范围：** 0~2000。 **默认取值：** 0
    *
    * @return $this
    */
    public function setErrorItemOffset($errorItemOffset)
    {
        $this->container['errorItemOffset'] = $errorItemOffset;
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

