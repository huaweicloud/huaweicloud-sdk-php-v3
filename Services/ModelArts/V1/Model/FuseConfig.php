<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FuseConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FuseConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorRateFuseEnable  **参数解释：** 错误率熔断开关。 **约束限制：** 不涉及。 **取值范围：** * true：开启错误率熔断。 * false：不打开错误率熔断。 **默认取值：** false：不打开错误率熔断。
    * errorRateThreshold  **参数解释：** 错误率熔断阈值。 **约束限制：** 不涉及。 **取值范围：** (0, 1]（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorRateFuseEnable' => 'bool',
            'errorRateThreshold' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorRateFuseEnable  **参数解释：** 错误率熔断开关。 **约束限制：** 不涉及。 **取值范围：** * true：开启错误率熔断。 * false：不打开错误率熔断。 **默认取值：** false：不打开错误率熔断。
    * errorRateThreshold  **参数解释：** 错误率熔断阈值。 **约束限制：** 不涉及。 **取值范围：** (0, 1]（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorRateFuseEnable' => null,
        'errorRateThreshold' => 'float'
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
    * errorRateFuseEnable  **参数解释：** 错误率熔断开关。 **约束限制：** 不涉及。 **取值范围：** * true：开启错误率熔断。 * false：不打开错误率熔断。 **默认取值：** false：不打开错误率熔断。
    * errorRateThreshold  **参数解释：** 错误率熔断阈值。 **约束限制：** 不涉及。 **取值范围：** (0, 1]（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorRateFuseEnable' => 'error_rate_fuse_enable',
            'errorRateThreshold' => 'error_rate_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorRateFuseEnable  **参数解释：** 错误率熔断开关。 **约束限制：** 不涉及。 **取值范围：** * true：开启错误率熔断。 * false：不打开错误率熔断。 **默认取值：** false：不打开错误率熔断。
    * errorRateThreshold  **参数解释：** 错误率熔断阈值。 **约束限制：** 不涉及。 **取值范围：** (0, 1]（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorRateFuseEnable' => 'setErrorRateFuseEnable',
            'errorRateThreshold' => 'setErrorRateThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorRateFuseEnable  **参数解释：** 错误率熔断开关。 **约束限制：** 不涉及。 **取值范围：** * true：开启错误率熔断。 * false：不打开错误率熔断。 **默认取值：** false：不打开错误率熔断。
    * errorRateThreshold  **参数解释：** 错误率熔断阈值。 **约束限制：** 不涉及。 **取值范围：** (0, 1]（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorRateFuseEnable' => 'getErrorRateFuseEnable',
            'errorRateThreshold' => 'getErrorRateThreshold'
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
        $this->container['errorRateFuseEnable'] = isset($data['errorRateFuseEnable']) ? $data['errorRateFuseEnable'] : null;
        $this->container['errorRateThreshold'] = isset($data['errorRateThreshold']) ? $data['errorRateThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['errorRateThreshold']) && ($this->container['errorRateThreshold'] > 1)) {
                $invalidProperties[] = "invalid value for 'errorRateThreshold', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['errorRateThreshold']) && ($this->container['errorRateThreshold'] < 0)) {
                $invalidProperties[] = "invalid value for 'errorRateThreshold', must be bigger than or equal to 0.";
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
    * Gets errorRateFuseEnable
    *  **参数解释：** 错误率熔断开关。 **约束限制：** 不涉及。 **取值范围：** * true：开启错误率熔断。 * false：不打开错误率熔断。 **默认取值：** false：不打开错误率熔断。
    *
    * @return bool|null
    */
    public function getErrorRateFuseEnable()
    {
        return $this->container['errorRateFuseEnable'];
    }

    /**
    * Sets errorRateFuseEnable
    *
    * @param bool|null $errorRateFuseEnable **参数解释：** 错误率熔断开关。 **约束限制：** 不涉及。 **取值范围：** * true：开启错误率熔断。 * false：不打开错误率熔断。 **默认取值：** false：不打开错误率熔断。
    *
    * @return $this
    */
    public function setErrorRateFuseEnable($errorRateFuseEnable)
    {
        $this->container['errorRateFuseEnable'] = $errorRateFuseEnable;
        return $this;
    }

    /**
    * Gets errorRateThreshold
    *  **参数解释：** 错误率熔断阈值。 **约束限制：** 不涉及。 **取值范围：** (0, 1]（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @return float|null
    */
    public function getErrorRateThreshold()
    {
        return $this->container['errorRateThreshold'];
    }

    /**
    * Sets errorRateThreshold
    *
    * @param float|null $errorRateThreshold **参数解释：** 错误率熔断阈值。 **约束限制：** 不涉及。 **取值范围：** (0, 1]（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setErrorRateThreshold($errorRateThreshold)
    {
        $this->container['errorRateThreshold'] = $errorRateThreshold;
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

