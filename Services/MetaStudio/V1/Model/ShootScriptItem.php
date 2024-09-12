<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShootScriptItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShootScriptItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 同一个剧本序号不重复。 **默认取值**： 不涉及。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sequenceNo' => 'int',
            'shootScript' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScript'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 同一个剧本序号不重复。 **默认取值**： 不涉及。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sequenceNo' => 'int32',
        'shootScript' => null
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
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 同一个剧本序号不重复。 **默认取值**： 不涉及。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sequenceNo' => 'sequence_no',
            'shootScript' => 'shoot_script'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 同一个剧本序号不重复。 **默认取值**： 不涉及。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $setters = [
            'sequenceNo' => 'setSequenceNo',
            'shootScript' => 'setShootScript'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 同一个剧本序号不重复。 **默认取值**： 不涉及。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $getters = [
            'sequenceNo' => 'getSequenceNo',
            'shootScript' => 'getShootScript'
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
        $this->container['sequenceNo'] = isset($data['sequenceNo']) ? $data['sequenceNo'] : null;
        $this->container['shootScript'] = isset($data['shootScript']) ? $data['shootScript'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be bigger than or equal to 0.";
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
    * Gets sequenceNo
    *  **参数解释**： 剧本序号。 **约束限制**： 同一个剧本序号不重复。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
    * Sets sequenceNo
    *
    * @param int|null $sequenceNo **参数解释**： 剧本序号。 **约束限制**： 同一个剧本序号不重复。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSequenceNo($sequenceNo)
    {
        $this->container['sequenceNo'] = $sequenceNo;
        return $this;
    }

    /**
    * Gets shootScript
    *  shootScript
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScript|null
    */
    public function getShootScript()
    {
        return $this->container['shootScript'];
    }

    /**
    * Sets shootScript
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScript|null $shootScript shootScript
    *
    * @return $this
    */
    public function setShootScript($shootScript)
    {
        $this->container['shootScript'] = $shootScript;
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

