<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MarginInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MarginInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * top  安全报告的上边距
    * left  安全报告的左边距
    * bottom  安全报告的下边距
    * right  安全报告的右边距
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'top' => 'int',
            'left' => 'int',
            'bottom' => 'int',
            'right' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * top  安全报告的上边距
    * left  安全报告的左边距
    * bottom  安全报告的下边距
    * right  安全报告的右边距
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'top' => 'int32',
        'left' => 'int32',
        'bottom' => 'int32',
        'right' => 'int32'
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
    * top  安全报告的上边距
    * left  安全报告的左边距
    * bottom  安全报告的下边距
    * right  安全报告的右边距
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'top' => 'top',
            'left' => 'left',
            'bottom' => 'bottom',
            'right' => 'right'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * top  安全报告的上边距
    * left  安全报告的左边距
    * bottom  安全报告的下边距
    * right  安全报告的右边距
    *
    * @var string[]
    */
    protected static $setters = [
            'top' => 'setTop',
            'left' => 'setLeft',
            'bottom' => 'setBottom',
            'right' => 'setRight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * top  安全报告的上边距
    * left  安全报告的左边距
    * bottom  安全报告的下边距
    * right  安全报告的右边距
    *
    * @var string[]
    */
    protected static $getters = [
            'top' => 'getTop',
            'left' => 'getLeft',
            'bottom' => 'getBottom',
            'right' => 'getRight'
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
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['bottom'] = isset($data['bottom']) ? $data['bottom'] : null;
        $this->container['right'] = isset($data['right']) ? $data['right'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['top']) && ($this->container['top'] > 3344)) {
                $invalidProperties[] = "invalid value for 'top', must be smaller than or equal to 3344.";
            }
            if (!is_null($this->container['top']) && ($this->container['top'] < 0)) {
                $invalidProperties[] = "invalid value for 'top', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['left']) && ($this->container['left'] > 3344)) {
                $invalidProperties[] = "invalid value for 'left', must be smaller than or equal to 3344.";
            }
            if (!is_null($this->container['left']) && ($this->container['left'] < 1)) {
                $invalidProperties[] = "invalid value for 'left', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bottom']) && ($this->container['bottom'] > 3344)) {
                $invalidProperties[] = "invalid value for 'bottom', must be smaller than or equal to 3344.";
            }
            if (!is_null($this->container['bottom']) && ($this->container['bottom'] < 0)) {
                $invalidProperties[] = "invalid value for 'bottom', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['right']) && ($this->container['right'] > 3344)) {
                $invalidProperties[] = "invalid value for 'right', must be smaller than or equal to 3344.";
            }
            if (!is_null($this->container['right']) && ($this->container['right'] < 1)) {
                $invalidProperties[] = "invalid value for 'right', must be bigger than or equal to 1.";
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
    * Gets top
    *  安全报告的上边距
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
    * @param int|null $top 安全报告的上边距
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets left
    *  安全报告的左边距
    *
    * @return int|null
    */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
    * Sets left
    *
    * @param int|null $left 安全报告的左边距
    *
    * @return $this
    */
    public function setLeft($left)
    {
        $this->container['left'] = $left;
        return $this;
    }

    /**
    * Gets bottom
    *  安全报告的下边距
    *
    * @return int|null
    */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
    * Sets bottom
    *
    * @param int|null $bottom 安全报告的下边距
    *
    * @return $this
    */
    public function setBottom($bottom)
    {
        $this->container['bottom'] = $bottom;
        return $this;
    }

    /**
    * Gets right
    *  安全报告的右边距
    *
    * @return int|null
    */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
    * Sets right
    *
    * @param int|null $right 安全报告的右边距
    *
    * @return $this
    */
    public function setRight($right)
    {
        $this->container['right'] = $right;
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

