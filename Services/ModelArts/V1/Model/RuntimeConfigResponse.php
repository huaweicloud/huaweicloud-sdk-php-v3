<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuntimeConfigResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuntimeConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceInvoke  serviceInvoke
    * serviceLimit  serviceLimit
    * serviceSecret  serviceSecret
    * serverTaskLimit  serverTaskLimit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceInvoke' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceInvokeResponse',
            'serviceLimit' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceLimitResponse',
            'serviceSecret' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecretResponse',
            'serverTaskLimit' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerTaskLimit'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceInvoke  serviceInvoke
    * serviceLimit  serviceLimit
    * serviceSecret  serviceSecret
    * serverTaskLimit  serverTaskLimit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceInvoke' => null,
        'serviceLimit' => null,
        'serviceSecret' => null,
        'serverTaskLimit' => null
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
    * serviceInvoke  serviceInvoke
    * serviceLimit  serviceLimit
    * serviceSecret  serviceSecret
    * serverTaskLimit  serverTaskLimit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceInvoke' => 'service_invoke',
            'serviceLimit' => 'service_limit',
            'serviceSecret' => 'service_secret',
            'serverTaskLimit' => 'server_task_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceInvoke  serviceInvoke
    * serviceLimit  serviceLimit
    * serviceSecret  serviceSecret
    * serverTaskLimit  serverTaskLimit
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceInvoke' => 'setServiceInvoke',
            'serviceLimit' => 'setServiceLimit',
            'serviceSecret' => 'setServiceSecret',
            'serverTaskLimit' => 'setServerTaskLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceInvoke  serviceInvoke
    * serviceLimit  serviceLimit
    * serviceSecret  serviceSecret
    * serverTaskLimit  serverTaskLimit
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceInvoke' => 'getServiceInvoke',
            'serviceLimit' => 'getServiceLimit',
            'serviceSecret' => 'getServiceSecret',
            'serverTaskLimit' => 'getServerTaskLimit'
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
        $this->container['serviceInvoke'] = isset($data['serviceInvoke']) ? $data['serviceInvoke'] : null;
        $this->container['serviceLimit'] = isset($data['serviceLimit']) ? $data['serviceLimit'] : null;
        $this->container['serviceSecret'] = isset($data['serviceSecret']) ? $data['serviceSecret'] : null;
        $this->container['serverTaskLimit'] = isset($data['serverTaskLimit']) ? $data['serverTaskLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceInvoke'] === null) {
            $invalidProperties[] = "'serviceInvoke' can't be null";
        }
        if ($this->container['serviceLimit'] === null) {
            $invalidProperties[] = "'serviceLimit' can't be null";
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
    * Gets serviceInvoke
    *  serviceInvoke
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceInvokeResponse
    */
    public function getServiceInvoke()
    {
        return $this->container['serviceInvoke'];
    }

    /**
    * Sets serviceInvoke
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceInvokeResponse $serviceInvoke serviceInvoke
    *
    * @return $this
    */
    public function setServiceInvoke($serviceInvoke)
    {
        $this->container['serviceInvoke'] = $serviceInvoke;
        return $this;
    }

    /**
    * Gets serviceLimit
    *  serviceLimit
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceLimitResponse
    */
    public function getServiceLimit()
    {
        return $this->container['serviceLimit'];
    }

    /**
    * Sets serviceLimit
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceLimitResponse $serviceLimit serviceLimit
    *
    * @return $this
    */
    public function setServiceLimit($serviceLimit)
    {
        $this->container['serviceLimit'] = $serviceLimit;
        return $this;
    }

    /**
    * Gets serviceSecret
    *  serviceSecret
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecretResponse|null
    */
    public function getServiceSecret()
    {
        return $this->container['serviceSecret'];
    }

    /**
    * Sets serviceSecret
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecretResponse|null $serviceSecret serviceSecret
    *
    * @return $this
    */
    public function setServiceSecret($serviceSecret)
    {
        $this->container['serviceSecret'] = $serviceSecret;
        return $this;
    }

    /**
    * Gets serverTaskLimit
    *  serverTaskLimit
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerTaskLimit|null
    */
    public function getServerTaskLimit()
    {
        return $this->container['serverTaskLimit'];
    }

    /**
    * Sets serverTaskLimit
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerTaskLimit|null $serverTaskLimit serverTaskLimit
    *
    * @return $this
    */
    public function setServerTaskLimit($serverTaskLimit)
    {
        $this->container['serverTaskLimit'] = $serverTaskLimit;
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

