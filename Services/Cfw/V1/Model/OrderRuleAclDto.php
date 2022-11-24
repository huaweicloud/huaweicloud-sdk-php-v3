<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderRuleAclDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderRuleAclDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destRuleId  目标规则id，添加规则位于此规则之后，非置顶时不能为空，置顶时为空
    * top  是否置顶，0代表非置顶，1代表置顶
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destRuleId' => 'string',
            'top' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destRuleId  目标规则id，添加规则位于此规则之后，非置顶时不能为空，置顶时为空
    * top  是否置顶，0代表非置顶，1代表置顶
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destRuleId' => null,
        'top' => null
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
    * destRuleId  目标规则id，添加规则位于此规则之后，非置顶时不能为空，置顶时为空
    * top  是否置顶，0代表非置顶，1代表置顶
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destRuleId' => 'dest_rule_id',
            'top' => 'top'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destRuleId  目标规则id，添加规则位于此规则之后，非置顶时不能为空，置顶时为空
    * top  是否置顶，0代表非置顶，1代表置顶
    *
    * @var string[]
    */
    protected static $setters = [
            'destRuleId' => 'setDestRuleId',
            'top' => 'setTop'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destRuleId  目标规则id，添加规则位于此规则之后，非置顶时不能为空，置顶时为空
    * top  是否置顶，0代表非置顶，1代表置顶
    *
    * @var string[]
    */
    protected static $getters = [
            'destRuleId' => 'getDestRuleId',
            'top' => 'getTop'
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
        $this->container['destRuleId'] = isset($data['destRuleId']) ? $data['destRuleId'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
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
    * Gets destRuleId
    *  目标规则id，添加规则位于此规则之后，非置顶时不能为空，置顶时为空
    *
    * @return string|null
    */
    public function getDestRuleId()
    {
        return $this->container['destRuleId'];
    }

    /**
    * Sets destRuleId
    *
    * @param string|null $destRuleId 目标规则id，添加规则位于此规则之后，非置顶时不能为空，置顶时为空
    *
    * @return $this
    */
    public function setDestRuleId($destRuleId)
    {
        $this->container['destRuleId'] = $destRuleId;
        return $this;
    }

    /**
    * Gets top
    *  是否置顶，0代表非置顶，1代表置顶
    *
    * @return int|null
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param int|null $top 是否置顶，0代表非置顶，1代表置顶
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
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

