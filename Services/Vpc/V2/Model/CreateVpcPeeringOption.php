<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVpcPeeringOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVpcPeeringOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：对等连接名称 取值范围：支持1~64个字符
    * requestVpcInfo  requestVpcInfo
    * acceptVpcInfo  acceptVpcInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'requestVpcInfo' => '\HuaweiCloud\SDK\Vpc\V2\Model\VpcInfo',
            'acceptVpcInfo' => '\HuaweiCloud\SDK\Vpc\V2\Model\VpcInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：对等连接名称 取值范围：支持1~64个字符
    * requestVpcInfo  requestVpcInfo
    * acceptVpcInfo  acceptVpcInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'requestVpcInfo' => null,
        'acceptVpcInfo' => null
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
    * name  功能说明：对等连接名称 取值范围：支持1~64个字符
    * requestVpcInfo  requestVpcInfo
    * acceptVpcInfo  acceptVpcInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'requestVpcInfo' => 'request_vpc_info',
            'acceptVpcInfo' => 'accept_vpc_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：对等连接名称 取值范围：支持1~64个字符
    * requestVpcInfo  requestVpcInfo
    * acceptVpcInfo  acceptVpcInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'requestVpcInfo' => 'setRequestVpcInfo',
            'acceptVpcInfo' => 'setAcceptVpcInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：对等连接名称 取值范围：支持1~64个字符
    * requestVpcInfo  requestVpcInfo
    * acceptVpcInfo  acceptVpcInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'requestVpcInfo' => 'getRequestVpcInfo',
            'acceptVpcInfo' => 'getAcceptVpcInfo'
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
        $this->container['requestVpcInfo'] = isset($data['requestVpcInfo']) ? $data['requestVpcInfo'] : null;
        $this->container['acceptVpcInfo'] = isset($data['acceptVpcInfo']) ? $data['acceptVpcInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['requestVpcInfo'] === null) {
            $invalidProperties[] = "'requestVpcInfo' can't be null";
        }
        if ($this->container['acceptVpcInfo'] === null) {
            $invalidProperties[] = "'acceptVpcInfo' can't be null";
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
    *  功能说明：对等连接名称 取值范围：支持1~64个字符
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 功能说明：对等连接名称 取值范围：支持1~64个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets requestVpcInfo
    *  requestVpcInfo
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\VpcInfo
    */
    public function getRequestVpcInfo()
    {
        return $this->container['requestVpcInfo'];
    }

    /**
    * Sets requestVpcInfo
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\VpcInfo $requestVpcInfo requestVpcInfo
    *
    * @return $this
    */
    public function setRequestVpcInfo($requestVpcInfo)
    {
        $this->container['requestVpcInfo'] = $requestVpcInfo;
        return $this;
    }

    /**
    * Gets acceptVpcInfo
    *  acceptVpcInfo
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\VpcInfo
    */
    public function getAcceptVpcInfo()
    {
        return $this->container['acceptVpcInfo'];
    }

    /**
    * Sets acceptVpcInfo
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\VpcInfo $acceptVpcInfo acceptVpcInfo
    *
    * @return $this
    */
    public function setAcceptVpcInfo($acceptVpcInfo)
    {
        $this->container['acceptVpcInfo'] = $acceptVpcInfo;
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

