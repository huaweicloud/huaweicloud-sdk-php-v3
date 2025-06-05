<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateQueueRequestBodyProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateQueueRequestBody_properties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * computeEngineSparkNativeEnabled  是否使用DLI Native。当前只涉及开启两种算子：Scan 和 Filter。修改现有队列的本属性，需要重启队列才会生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'computeEngineSparkNativeEnabled' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * computeEngineSparkNativeEnabled  是否使用DLI Native。当前只涉及开启两种算子：Scan 和 Filter。修改现有队列的本属性，需要重启队列才会生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'computeEngineSparkNativeEnabled' => null
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
    * computeEngineSparkNativeEnabled  是否使用DLI Native。当前只涉及开启两种算子：Scan 和 Filter。修改现有队列的本属性，需要重启队列才会生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'computeEngineSparkNativeEnabled' => 'computeEngine.spark.nativeEnabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * computeEngineSparkNativeEnabled  是否使用DLI Native。当前只涉及开启两种算子：Scan 和 Filter。修改现有队列的本属性，需要重启队列才会生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'computeEngineSparkNativeEnabled' => 'setComputeEngineSparkNativeEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * computeEngineSparkNativeEnabled  是否使用DLI Native。当前只涉及开启两种算子：Scan 和 Filter。修改现有队列的本属性，需要重启队列才会生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'computeEngineSparkNativeEnabled' => 'getComputeEngineSparkNativeEnabled'
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
        $this->container['computeEngineSparkNativeEnabled'] = isset($data['computeEngineSparkNativeEnabled']) ? $data['computeEngineSparkNativeEnabled'] : null;
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
    * Gets computeEngineSparkNativeEnabled
    *  是否使用DLI Native。当前只涉及开启两种算子：Scan 和 Filter。修改现有队列的本属性，需要重启队列才会生效。
    *
    * @return string|null
    */
    public function getComputeEngineSparkNativeEnabled()
    {
        return $this->container['computeEngineSparkNativeEnabled'];
    }

    /**
    * Sets computeEngineSparkNativeEnabled
    *
    * @param string|null $computeEngineSparkNativeEnabled 是否使用DLI Native。当前只涉及开启两种算子：Scan 和 Filter。修改现有队列的本属性，需要重启队列才会生效。
    *
    * @return $this
    */
    public function setComputeEngineSparkNativeEnabled($computeEngineSparkNativeEnabled)
    {
        $this->container['computeEngineSparkNativeEnabled'] = $computeEngineSparkNativeEnabled;
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

