<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  IP地址或域名。
    * port  端口号。
    * status  测试结果。 - 1：表示连接成功。 - 0：表示地址不可达。 - 2：表示端口不可达。 - 3：表示域名无法解析。 - -2：表示位置错误。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => 'string',
            'port' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  IP地址或域名。
    * port  端口号。
    * status  测试结果。 - 1：表示连接成功。 - 0：表示地址不可达。 - 2：表示端口不可达。 - 3：表示域名无法解析。 - -2：表示位置错误。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'port' => 'int32',
        'status' => null
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
    * address  IP地址或域名。
    * port  端口号。
    * status  测试结果。 - 1：表示连接成功。 - 0：表示地址不可达。 - 2：表示端口不可达。 - 3：表示域名无法解析。 - -2：表示位置错误。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'port' => 'port',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  IP地址或域名。
    * port  端口号。
    * status  测试结果。 - 1：表示连接成功。 - 0：表示地址不可达。 - 2：表示端口不可达。 - 3：表示域名无法解析。 - -2：表示位置错误。
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'port' => 'setPort',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  IP地址或域名。
    * port  端口号。
    * status  测试结果。 - 1：表示连接成功。 - 0：表示地址不可达。 - 2：表示端口不可达。 - 3：表示域名无法解析。 - -2：表示位置错误。
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'port' => 'getPort',
            'status' => 'getStatus'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets address
    *  IP地址或域名。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address IP地址或域名。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets port
    *  端口号。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets status
    *  测试结果。 - 1：表示连接成功。 - 0：表示地址不可达。 - 2：表示端口不可达。 - 3：表示域名无法解析。 - -2：表示位置错误。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 测试结果。 - 1：表示连接成功。 - 0：表示地址不可达。 - 2：表示端口不可达。 - 3：表示域名无法解析。 - -2：表示位置错误。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

