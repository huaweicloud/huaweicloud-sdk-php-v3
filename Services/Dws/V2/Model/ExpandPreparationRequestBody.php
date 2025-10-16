<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExpandPreparationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExpandPreparationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * numNode  **参数解释**： 扩容节点数。 **取值范围：** 大于等于3。
    * isRetry  **参数解释**： 是否是扩容准备重试。 **约束限制**： 不涉及。 **取值范围**： true：扩容准备重试； false：首次进行扩容准备； **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'numNode' => 'int',
            'isRetry' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * numNode  **参数解释**： 扩容节点数。 **取值范围：** 大于等于3。
    * isRetry  **参数解释**： 是否是扩容准备重试。 **约束限制**： 不涉及。 **取值范围**： true：扩容准备重试； false：首次进行扩容准备； **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'numNode' => 'int32',
        'isRetry' => null
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
    * numNode  **参数解释**： 扩容节点数。 **取值范围：** 大于等于3。
    * isRetry  **参数解释**： 是否是扩容准备重试。 **约束限制**： 不涉及。 **取值范围**： true：扩容准备重试； false：首次进行扩容准备； **默认取值**： false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'numNode' => 'num_node',
            'isRetry' => 'is_retry'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * numNode  **参数解释**： 扩容节点数。 **取值范围：** 大于等于3。
    * isRetry  **参数解释**： 是否是扩容准备重试。 **约束限制**： 不涉及。 **取值范围**： true：扩容准备重试； false：首次进行扩容准备； **默认取值**： false
    *
    * @var string[]
    */
    protected static $setters = [
            'numNode' => 'setNumNode',
            'isRetry' => 'setIsRetry'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * numNode  **参数解释**： 扩容节点数。 **取值范围：** 大于等于3。
    * isRetry  **参数解释**： 是否是扩容准备重试。 **约束限制**： 不涉及。 **取值范围**： true：扩容准备重试； false：首次进行扩容准备； **默认取值**： false
    *
    * @var string[]
    */
    protected static $getters = [
            'numNode' => 'getNumNode',
            'isRetry' => 'getIsRetry'
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
        $this->container['numNode'] = isset($data['numNode']) ? $data['numNode'] : null;
        $this->container['isRetry'] = isset($data['isRetry']) ? $data['isRetry'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['numNode'] === null) {
            $invalidProperties[] = "'numNode' can't be null";
        }
        if ($this->container['isRetry'] === null) {
            $invalidProperties[] = "'isRetry' can't be null";
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
    * Gets numNode
    *  **参数解释**： 扩容节点数。 **取值范围：** 大于等于3。
    *
    * @return int
    */
    public function getNumNode()
    {
        return $this->container['numNode'];
    }

    /**
    * Sets numNode
    *
    * @param int $numNode **参数解释**： 扩容节点数。 **取值范围：** 大于等于3。
    *
    * @return $this
    */
    public function setNumNode($numNode)
    {
        $this->container['numNode'] = $numNode;
        return $this;
    }

    /**
    * Gets isRetry
    *  **参数解释**： 是否是扩容准备重试。 **约束限制**： 不涉及。 **取值范围**： true：扩容准备重试； false：首次进行扩容准备； **默认取值**： false
    *
    * @return bool
    */
    public function getIsRetry()
    {
        return $this->container['isRetry'];
    }

    /**
    * Sets isRetry
    *
    * @param bool $isRetry **参数解释**： 是否是扩容准备重试。 **约束限制**： 不涉及。 **取值范围**： true：扩容准备重试； false：首次进行扩容准备； **默认取值**： false
    *
    * @return $this
    */
    public function setIsRetry($isRetry)
    {
        $this->container['isRetry'] = $isRetry;
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

