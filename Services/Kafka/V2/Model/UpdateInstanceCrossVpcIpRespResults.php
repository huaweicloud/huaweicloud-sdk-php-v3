<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceCrossVpcIpRespResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceCrossVpcIpResp_results';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * advertisedIp  advertised.listeners IP/域名。
    * success  修改broker跨VPC访问的状态。
    * ip  listeners IP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'advertisedIp' => 'string',
            'success' => 'bool',
            'ip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * advertisedIp  advertised.listeners IP/域名。
    * success  修改broker跨VPC访问的状态。
    * ip  listeners IP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'advertisedIp' => null,
        'success' => null,
        'ip' => null
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
    * advertisedIp  advertised.listeners IP/域名。
    * success  修改broker跨VPC访问的状态。
    * ip  listeners IP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'advertisedIp' => 'advertised_ip',
            'success' => 'success',
            'ip' => 'ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * advertisedIp  advertised.listeners IP/域名。
    * success  修改broker跨VPC访问的状态。
    * ip  listeners IP。
    *
    * @var string[]
    */
    protected static $setters = [
            'advertisedIp' => 'setAdvertisedIp',
            'success' => 'setSuccess',
            'ip' => 'setIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * advertisedIp  advertised.listeners IP/域名。
    * success  修改broker跨VPC访问的状态。
    * ip  listeners IP。
    *
    * @var string[]
    */
    protected static $getters = [
            'advertisedIp' => 'getAdvertisedIp',
            'success' => 'getSuccess',
            'ip' => 'getIp'
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
        $this->container['advertisedIp'] = isset($data['advertisedIp']) ? $data['advertisedIp'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
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
    * Gets advertisedIp
    *  advertised.listeners IP/域名。
    *
    * @return string|null
    */
    public function getAdvertisedIp()
    {
        return $this->container['advertisedIp'];
    }

    /**
    * Sets advertisedIp
    *
    * @param string|null $advertisedIp advertised.listeners IP/域名。
    *
    * @return $this
    */
    public function setAdvertisedIp($advertisedIp)
    {
        $this->container['advertisedIp'] = $advertisedIp;
        return $this;
    }

    /**
    * Gets success
    *  修改broker跨VPC访问的状态。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 修改broker跨VPC访问的状态。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets ip
    *  listeners IP。
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
    * @param string|null $ip listeners IP。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
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

