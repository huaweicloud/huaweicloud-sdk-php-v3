<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeTypeDatastoresAttachments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeTypeDatastores_attachments';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minCn  **参数解释**： 内核版本支持的最小CN。 **取值范围**： 大于0的正整数。
    * maxCn  **参数解释**： 内核版本支持的最大CN。 **取值范围**： 大于0的正整数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minCn' => 'int',
            'maxCn' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minCn  **参数解释**： 内核版本支持的最小CN。 **取值范围**： 大于0的正整数。
    * maxCn  **参数解释**： 内核版本支持的最大CN。 **取值范围**： 大于0的正整数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minCn' => 'int32',
        'maxCn' => 'int32'
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
    * minCn  **参数解释**： 内核版本支持的最小CN。 **取值范围**： 大于0的正整数。
    * maxCn  **参数解释**： 内核版本支持的最大CN。 **取值范围**： 大于0的正整数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minCn' => 'min_cn',
            'maxCn' => 'max_cn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minCn  **参数解释**： 内核版本支持的最小CN。 **取值范围**： 大于0的正整数。
    * maxCn  **参数解释**： 内核版本支持的最大CN。 **取值范围**： 大于0的正整数。
    *
    * @var string[]
    */
    protected static $setters = [
            'minCn' => 'setMinCn',
            'maxCn' => 'setMaxCn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minCn  **参数解释**： 内核版本支持的最小CN。 **取值范围**： 大于0的正整数。
    * maxCn  **参数解释**： 内核版本支持的最大CN。 **取值范围**： 大于0的正整数。
    *
    * @var string[]
    */
    protected static $getters = [
            'minCn' => 'getMinCn',
            'maxCn' => 'getMaxCn'
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
        $this->container['minCn'] = isset($data['minCn']) ? $data['minCn'] : null;
        $this->container['maxCn'] = isset($data['maxCn']) ? $data['maxCn'] : null;
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
    * Gets minCn
    *  **参数解释**： 内核版本支持的最小CN。 **取值范围**： 大于0的正整数。
    *
    * @return int|null
    */
    public function getMinCn()
    {
        return $this->container['minCn'];
    }

    /**
    * Sets minCn
    *
    * @param int|null $minCn **参数解释**： 内核版本支持的最小CN。 **取值范围**： 大于0的正整数。
    *
    * @return $this
    */
    public function setMinCn($minCn)
    {
        $this->container['minCn'] = $minCn;
        return $this;
    }

    /**
    * Gets maxCn
    *  **参数解释**： 内核版本支持的最大CN。 **取值范围**： 大于0的正整数。
    *
    * @return int|null
    */
    public function getMaxCn()
    {
        return $this->container['maxCn'];
    }

    /**
    * Sets maxCn
    *
    * @param int|null $maxCn **参数解释**： 内核版本支持的最大CN。 **取值范围**： 大于0的正整数。
    *
    * @return $this
    */
    public function setMaxCn($maxCn)
    {
        $this->container['maxCn'] = $maxCn;
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

