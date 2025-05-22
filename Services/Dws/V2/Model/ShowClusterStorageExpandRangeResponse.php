<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterStorageExpandRangeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterStorageExpandRangeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minSize  **参数解释**： 扩容后单节点磁盘最小值（单位GB）。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 扩容后单节点磁盘最大值（单位GB）。 **取值范围**： 不涉及。
    * currentSize  **参数解释**： 磁盘当前值（单位GB）。 **取值范围**： 不涉及。
    * step  **参数解释**： 磁盘步长大小（单位GB）。比如当前单节点磁盘20GB，步长为20，则扩容后单节点磁盘大小至少为40GB。 **取值范围**： 大于等于10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minSize' => 'int',
            'maxSize' => 'int',
            'currentSize' => 'int',
            'step' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minSize  **参数解释**： 扩容后单节点磁盘最小值（单位GB）。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 扩容后单节点磁盘最大值（单位GB）。 **取值范围**： 不涉及。
    * currentSize  **参数解释**： 磁盘当前值（单位GB）。 **取值范围**： 不涉及。
    * step  **参数解释**： 磁盘步长大小（单位GB）。比如当前单节点磁盘20GB，步长为20，则扩容后单节点磁盘大小至少为40GB。 **取值范围**： 大于等于10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minSize' => 'int32',
        'maxSize' => 'int32',
        'currentSize' => 'int32',
        'step' => 'int32'
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
    * minSize  **参数解释**： 扩容后单节点磁盘最小值（单位GB）。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 扩容后单节点磁盘最大值（单位GB）。 **取值范围**： 不涉及。
    * currentSize  **参数解释**： 磁盘当前值（单位GB）。 **取值范围**： 不涉及。
    * step  **参数解释**： 磁盘步长大小（单位GB）。比如当前单节点磁盘20GB，步长为20，则扩容后单节点磁盘大小至少为40GB。 **取值范围**： 大于等于10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minSize' => 'min_size',
            'maxSize' => 'max_size',
            'currentSize' => 'current_size',
            'step' => 'step'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minSize  **参数解释**： 扩容后单节点磁盘最小值（单位GB）。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 扩容后单节点磁盘最大值（单位GB）。 **取值范围**： 不涉及。
    * currentSize  **参数解释**： 磁盘当前值（单位GB）。 **取值范围**： 不涉及。
    * step  **参数解释**： 磁盘步长大小（单位GB）。比如当前单节点磁盘20GB，步长为20，则扩容后单节点磁盘大小至少为40GB。 **取值范围**： 大于等于10。
    *
    * @var string[]
    */
    protected static $setters = [
            'minSize' => 'setMinSize',
            'maxSize' => 'setMaxSize',
            'currentSize' => 'setCurrentSize',
            'step' => 'setStep'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minSize  **参数解释**： 扩容后单节点磁盘最小值（单位GB）。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 扩容后单节点磁盘最大值（单位GB）。 **取值范围**： 不涉及。
    * currentSize  **参数解释**： 磁盘当前值（单位GB）。 **取值范围**： 不涉及。
    * step  **参数解释**： 磁盘步长大小（单位GB）。比如当前单节点磁盘20GB，步长为20，则扩容后单节点磁盘大小至少为40GB。 **取值范围**： 大于等于10。
    *
    * @var string[]
    */
    protected static $getters = [
            'minSize' => 'getMinSize',
            'maxSize' => 'getMaxSize',
            'currentSize' => 'getCurrentSize',
            'step' => 'getStep'
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
        $this->container['minSize'] = isset($data['minSize']) ? $data['minSize'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
        $this->container['currentSize'] = isset($data['currentSize']) ? $data['currentSize'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
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
    * Gets minSize
    *  **参数解释**： 扩容后单节点磁盘最小值（单位GB）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinSize()
    {
        return $this->container['minSize'];
    }

    /**
    * Sets minSize
    *
    * @param int|null $minSize **参数解释**： 扩容后单节点磁盘最小值（单位GB）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinSize($minSize)
    {
        $this->container['minSize'] = $minSize;
        return $this;
    }

    /**
    * Gets maxSize
    *  **参数解释**： 扩容后单节点磁盘最大值（单位GB）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
    * Sets maxSize
    *
    * @param int|null $maxSize **参数解释**： 扩容后单节点磁盘最大值（单位GB）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;
        return $this;
    }

    /**
    * Gets currentSize
    *  **参数解释**： 磁盘当前值（单位GB）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCurrentSize()
    {
        return $this->container['currentSize'];
    }

    /**
    * Sets currentSize
    *
    * @param int|null $currentSize **参数解释**： 磁盘当前值（单位GB）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrentSize($currentSize)
    {
        $this->container['currentSize'] = $currentSize;
        return $this;
    }

    /**
    * Gets step
    *  **参数解释**： 磁盘步长大小（单位GB）。比如当前单节点磁盘20GB，步长为20，则扩容后单节点磁盘大小至少为40GB。 **取值范围**： 大于等于10。
    *
    * @return int|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int|null $step **参数解释**： 磁盘步长大小（单位GB）。比如当前单节点磁盘20GB，步长为20，则扩容后单节点磁盘大小至少为40GB。 **取值范围**： 大于等于10。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
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

