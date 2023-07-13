<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConfTokenResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConfTokenResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  data
    * addressToken  企业通讯录查询临时Token。
    * gloablPublicIp  华为云会议Portal地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => '\HuaweiCloud\SDK\Meeting\V1\Model\TokenInfo',
            'addressToken' => 'string',
            'gloablPublicIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  data
    * addressToken  企业通讯录查询临时Token。
    * gloablPublicIp  华为云会议Portal地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'addressToken' => null,
        'gloablPublicIp' => null
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
    * data  data
    * addressToken  企业通讯录查询临时Token。
    * gloablPublicIp  华为云会议Portal地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'addressToken' => 'addressToken',
            'gloablPublicIp' => 'gloablPublicIP'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  data
    * addressToken  企业通讯录查询临时Token。
    * gloablPublicIp  华为云会议Portal地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'addressToken' => 'setAddressToken',
            'gloablPublicIp' => 'setGloablPublicIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  data
    * addressToken  企业通讯录查询临时Token。
    * gloablPublicIp  华为云会议Portal地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'addressToken' => 'getAddressToken',
            'gloablPublicIp' => 'getGloablPublicIp'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['addressToken'] = isset($data['addressToken']) ? $data['addressToken'] : null;
        $this->container['gloablPublicIp'] = isset($data['gloablPublicIp']) ? $data['gloablPublicIp'] : null;
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
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\TokenInfo|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\TokenInfo|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets addressToken
    *  企业通讯录查询临时Token。
    *
    * @return string|null
    */
    public function getAddressToken()
    {
        return $this->container['addressToken'];
    }

    /**
    * Sets addressToken
    *
    * @param string|null $addressToken 企业通讯录查询临时Token。
    *
    * @return $this
    */
    public function setAddressToken($addressToken)
    {
        $this->container['addressToken'] = $addressToken;
        return $this;
    }

    /**
    * Gets gloablPublicIp
    *  华为云会议Portal地址。
    *
    * @return string|null
    */
    public function getGloablPublicIp()
    {
        return $this->container['gloablPublicIp'];
    }

    /**
    * Sets gloablPublicIp
    *
    * @param string|null $gloablPublicIp 华为云会议Portal地址。
    *
    * @return $this
    */
    public function setGloablPublicIp($gloablPublicIp)
    {
        $this->container['gloablPublicIp'] = $gloablPublicIp;
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

