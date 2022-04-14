<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnfreezeSubCustomersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnfreezeSubCustomersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorDetails  错误原因，只有部分失败的时候才返回。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorDetails' => '\HuaweiCloud\SDK\Bssintl\V2\Model\CustomerErrorDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorDetails  错误原因，只有部分失败的时候才返回。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorDetails' => null
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
    * errorDetails  错误原因，只有部分失败的时候才返回。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorDetails' => 'error_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorDetails  错误原因，只有部分失败的时候才返回。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorDetails' => 'setErrorDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorDetails  错误原因，只有部分失败的时候才返回。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorDetails' => 'getErrorDetails'
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
        $this->container['errorDetails'] = isset($data['errorDetails']) ? $data['errorDetails'] : null;
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
    * Gets errorDetails
    *  错误原因，只有部分失败的时候才返回。 具体请参见表1。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\CustomerErrorDetail[]|null
    */
    public function getErrorDetails()
    {
        return $this->container['errorDetails'];
    }

    /**
    * Sets errorDetails
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\CustomerErrorDetail[]|null $errorDetails 错误原因，只有部分失败的时候才返回。 具体请参见表1。
    *
    * @return $this
    */
    public function setErrorDetails($errorDetails)
    {
        $this->container['errorDetails'] = $errorDetails;
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

