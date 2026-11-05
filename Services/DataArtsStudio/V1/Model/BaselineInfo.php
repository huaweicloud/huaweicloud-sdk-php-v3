<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaselineInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaselineInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baselineId  **参数解释**： 基线ID。 **取值范围**： 长度为1~64个字符。
    * baselineName  **参数解释**： 基线名称。 **取值范围**： 长度为1~1024个字符。
    * slaTime  **参数解释**： 基线承诺时间，单位毫秒。 **取值范围**： 不涉及。
    * expTime  **参数解释**： 基线预警时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baselineId' => 'string',
            'baselineName' => 'string',
            'slaTime' => 'int',
            'expTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baselineId  **参数解释**： 基线ID。 **取值范围**： 长度为1~64个字符。
    * baselineName  **参数解释**： 基线名称。 **取值范围**： 长度为1~1024个字符。
    * slaTime  **参数解释**： 基线承诺时间，单位毫秒。 **取值范围**： 不涉及。
    * expTime  **参数解释**： 基线预警时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baselineId' => null,
        'baselineName' => null,
        'slaTime' => 'int64',
        'expTime' => 'int64'
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
    * baselineId  **参数解释**： 基线ID。 **取值范围**： 长度为1~64个字符。
    * baselineName  **参数解释**： 基线名称。 **取值范围**： 长度为1~1024个字符。
    * slaTime  **参数解释**： 基线承诺时间，单位毫秒。 **取值范围**： 不涉及。
    * expTime  **参数解释**： 基线预警时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baselineId' => 'baseline_id',
            'baselineName' => 'baseline_name',
            'slaTime' => 'sla_time',
            'expTime' => 'exp_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baselineId  **参数解释**： 基线ID。 **取值范围**： 长度为1~64个字符。
    * baselineName  **参数解释**： 基线名称。 **取值范围**： 长度为1~1024个字符。
    * slaTime  **参数解释**： 基线承诺时间，单位毫秒。 **取值范围**： 不涉及。
    * expTime  **参数解释**： 基线预警时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'baselineId' => 'setBaselineId',
            'baselineName' => 'setBaselineName',
            'slaTime' => 'setSlaTime',
            'expTime' => 'setExpTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baselineId  **参数解释**： 基线ID。 **取值范围**： 长度为1~64个字符。
    * baselineName  **参数解释**： 基线名称。 **取值范围**： 长度为1~1024个字符。
    * slaTime  **参数解释**： 基线承诺时间，单位毫秒。 **取值范围**： 不涉及。
    * expTime  **参数解释**： 基线预警时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'baselineId' => 'getBaselineId',
            'baselineName' => 'getBaselineName',
            'slaTime' => 'getSlaTime',
            'expTime' => 'getExpTime'
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
        $this->container['baselineId'] = isset($data['baselineId']) ? $data['baselineId'] : null;
        $this->container['baselineName'] = isset($data['baselineName']) ? $data['baselineName'] : null;
        $this->container['slaTime'] = isset($data['slaTime']) ? $data['slaTime'] : null;
        $this->container['expTime'] = isset($data['expTime']) ? $data['expTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['baselineId']) && (mb_strlen($this->container['baselineId']) > 64)) {
                $invalidProperties[] = "invalid value for 'baselineId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['baselineId']) && (mb_strlen($this->container['baselineId']) < 1)) {
                $invalidProperties[] = "invalid value for 'baselineId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['baselineName']) && (mb_strlen($this->container['baselineName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'baselineName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['baselineName']) && (mb_strlen($this->container['baselineName']) < 1)) {
                $invalidProperties[] = "invalid value for 'baselineName', the character length must be bigger than or equal to 1.";
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
    * Gets baselineId
    *  **参数解释**： 基线ID。 **取值范围**： 长度为1~64个字符。
    *
    * @return string|null
    */
    public function getBaselineId()
    {
        return $this->container['baselineId'];
    }

    /**
    * Sets baselineId
    *
    * @param string|null $baselineId **参数解释**： 基线ID。 **取值范围**： 长度为1~64个字符。
    *
    * @return $this
    */
    public function setBaselineId($baselineId)
    {
        $this->container['baselineId'] = $baselineId;
        return $this;
    }

    /**
    * Gets baselineName
    *  **参数解释**： 基线名称。 **取值范围**： 长度为1~1024个字符。
    *
    * @return string|null
    */
    public function getBaselineName()
    {
        return $this->container['baselineName'];
    }

    /**
    * Sets baselineName
    *
    * @param string|null $baselineName **参数解释**： 基线名称。 **取值范围**： 长度为1~1024个字符。
    *
    * @return $this
    */
    public function setBaselineName($baselineName)
    {
        $this->container['baselineName'] = $baselineName;
        return $this;
    }

    /**
    * Gets slaTime
    *  **参数解释**： 基线承诺时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSlaTime()
    {
        return $this->container['slaTime'];
    }

    /**
    * Sets slaTime
    *
    * @param int|null $slaTime **参数解释**： 基线承诺时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSlaTime($slaTime)
    {
        $this->container['slaTime'] = $slaTime;
        return $this;
    }

    /**
    * Gets expTime
    *  **参数解释**： 基线预警时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getExpTime()
    {
        return $this->container['expTime'];
    }

    /**
    * Sets expTime
    *
    * @param int|null $expTime **参数解释**： 基线预警时间，单位毫秒。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExpTime($expTime)
    {
        $this->container['expTime'] = $expTime;
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

