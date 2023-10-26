<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDDosRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDDosRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * floatingIpId  用户EIP对应的ID
    * ip  ip
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'floatingIpId' => 'string',
            'ip' => 'string',
            'body' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\UpdateAntiDDosServiceRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * floatingIpId  用户EIP对应的ID
    * ip  ip
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'floatingIpId' => null,
        'ip' => null,
        'body' => null
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
    * floatingIpId  用户EIP对应的ID
    * ip  ip
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'floatingIpId' => 'floating_ip_id',
            'ip' => 'ip',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * floatingIpId  用户EIP对应的ID
    * ip  ip
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'floatingIpId' => 'setFloatingIpId',
            'ip' => 'setIp',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * floatingIpId  用户EIP对应的ID
    * ip  ip
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'floatingIpId' => 'getFloatingIpId',
            'ip' => 'getIp',
            'body' => 'getBody'
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
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['floatingIpId'] === null) {
            $invalidProperties[] = "'floatingIpId' can't be null";
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
    * Gets floatingIpId
    *  用户EIP对应的ID
    *
    * @return string
    */
    public function getFloatingIpId()
    {
        return $this->container['floatingIpId'];
    }

    /**
    * Sets floatingIpId
    *
    * @param string $floatingIpId 用户EIP对应的ID
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets ip
    *  ip
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\UpdateAntiDDosServiceRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\UpdateAntiDDosServiceRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

