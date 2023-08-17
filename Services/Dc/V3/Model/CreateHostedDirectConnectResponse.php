<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHostedDirectConnectResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHostedDirectConnectResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  操作请求ID
    * hostedConnect  hostedConnect
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'hostedConnect' => '\HuaweiCloud\SDK\Dc\V3\Model\HostedDirectConnect'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  操作请求ID
    * hostedConnect  hostedConnect
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'hostedConnect' => null
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
    * requestId  操作请求ID
    * hostedConnect  hostedConnect
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'hostedConnect' => 'hosted_connect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  操作请求ID
    * hostedConnect  hostedConnect
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'hostedConnect' => 'setHostedConnect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  操作请求ID
    * hostedConnect  hostedConnect
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'hostedConnect' => 'getHostedConnect'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['hostedConnect'] = isset($data['hostedConnect']) ? $data['hostedConnect'] : null;
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
    * Gets requestId
    *  操作请求ID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 操作请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets hostedConnect
    *  hostedConnect
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\HostedDirectConnect|null
    */
    public function getHostedConnect()
    {
        return $this->container['hostedConnect'];
    }

    /**
    * Sets hostedConnect
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\HostedDirectConnect|null $hostedConnect hostedConnect
    *
    * @return $this
    */
    public function setHostedConnect($hostedConnect)
    {
        $this->container['hostedConnect'] = $hostedConnect;
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

