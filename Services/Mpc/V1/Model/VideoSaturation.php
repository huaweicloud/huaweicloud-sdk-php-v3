<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoSaturation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoSaturation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  饱和度算法名称\"“hw-saturation\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * saturation  饱和度调节的程度， 值越大， 饱和度越高。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'executionOrder' => 'int',
            'saturation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  饱和度算法名称\"“hw-saturation\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * saturation  饱和度调节的程度， 值越大， 饱和度越高。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'executionOrder' => null,
        'saturation' => null
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
    * name  饱和度算法名称\"“hw-saturation\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * saturation  饱和度调节的程度， 值越大， 饱和度越高。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'executionOrder' => 'execution_order',
            'saturation' => 'saturation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  饱和度算法名称\"“hw-saturation\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * saturation  饱和度调节的程度， 值越大， 饱和度越高。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'executionOrder' => 'setExecutionOrder',
            'saturation' => 'setSaturation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  饱和度算法名称\"“hw-saturation\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * saturation  饱和度调节的程度， 值越大， 饱和度越高。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'executionOrder' => 'getExecutionOrder',
            'saturation' => 'getSaturation'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['executionOrder'] = isset($data['executionOrder']) ? $data['executionOrder'] : null;
        $this->container['saturation'] = isset($data['saturation']) ? $data['saturation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executionOrder']) && ($this->container['executionOrder'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'executionOrder', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['executionOrder']) && ($this->container['executionOrder'] < 0)) {
                $invalidProperties[] = "invalid value for 'executionOrder', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['saturation']) && (mb_strlen($this->container['saturation']) > 64)) {
                $invalidProperties[] = "invalid value for 'saturation', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['saturation']) && (mb_strlen($this->container['saturation']) < 0)) {
                $invalidProperties[] = "invalid value for 'saturation', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  饱和度算法名称\"“hw-saturation\"。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 饱和度算法名称\"“hw-saturation\"。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets executionOrder
    *  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    *
    * @return int|null
    */
    public function getExecutionOrder()
    {
        return $this->container['executionOrder'];
    }

    /**
    * Sets executionOrder
    *
    * @param int|null $executionOrder 1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    *
    * @return $this
    */
    public function setExecutionOrder($executionOrder)
    {
        $this->container['executionOrder'] = $executionOrder;
        return $this;
    }

    /**
    * Gets saturation
    *  饱和度调节的程度， 值越大， 饱和度越高。
    *
    * @return string|null
    */
    public function getSaturation()
    {
        return $this->container['saturation'];
    }

    /**
    * Sets saturation
    *
    * @param string|null $saturation 饱和度调节的程度， 值越大， 饱和度越高。
    *
    * @return $this
    */
    public function setSaturation($saturation)
    {
        $this->container['saturation'] = $saturation;
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

