<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoSuperresolution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoSuperresolution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  超分算法名称\"hw-sr\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * scale  超分倍数，取值范围是[2,8]，默认2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'executionOrder' => 'int',
            'scale' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  超分算法名称\"hw-sr\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * scale  超分倍数，取值范围是[2,8]，默认2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'executionOrder' => null,
        'scale' => null
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
    * name  超分算法名称\"hw-sr\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * scale  超分倍数，取值范围是[2,8]，默认2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'executionOrder' => 'execution_order',
            'scale' => 'scale'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  超分算法名称\"hw-sr\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * scale  超分倍数，取值范围是[2,8]，默认2。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'executionOrder' => 'setExecutionOrder',
            'scale' => 'setScale'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  超分算法名称\"hw-sr\"。
    * executionOrder  1 表示视频处理时第一个执行，2表示第二个执行，以此类推；除不执行，各视频处理算法的执行次序不可相同。
    * scale  超分倍数，取值范围是[2,8]，默认2。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'executionOrder' => 'getExecutionOrder',
            'scale' => 'getScale'
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
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
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
            if (!is_null($this->container['scale']) && (mb_strlen($this->container['scale']) > 16)) {
                $invalidProperties[] = "invalid value for 'scale', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['scale']) && (mb_strlen($this->container['scale']) < 0)) {
                $invalidProperties[] = "invalid value for 'scale', the character length must be bigger than or equal to 0.";
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
    *  超分算法名称\"hw-sr\"。
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
    * @param string|null $name 超分算法名称\"hw-sr\"。
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
    * Gets scale
    *  超分倍数，取值范围是[2,8]，默认2。
    *
    * @return string|null
    */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
    * Sets scale
    *
    * @param string|null $scale 超分倍数，取值范围是[2,8]，默认2。
    *
    * @return $this
    */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;
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

