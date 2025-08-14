<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePinRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePinRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pinType  pin码的类型，默认为“CipherText”： - PlainText - CipherText
    * keystoreId  密钥库ID，指定密文pin时必选： 1：管理面manage_az集群（共享卡集群） 2：数据面共享集群(pod区) 其它：租户专属
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pinType' => 'string',
            'keystoreId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pinType  pin码的类型，默认为“CipherText”： - PlainText - CipherText
    * keystoreId  密钥库ID，指定密文pin时必选： 1：管理面manage_az集群（共享卡集群） 2：数据面共享集群(pod区) 其它：租户专属
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pinType' => null,
        'keystoreId' => null
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
    * pinType  pin码的类型，默认为“CipherText”： - PlainText - CipherText
    * keystoreId  密钥库ID，指定密文pin时必选： 1：管理面manage_az集群（共享卡集群） 2：数据面共享集群(pod区) 其它：租户专属
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pinType' => 'pin_type',
            'keystoreId' => 'keystore_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pinType  pin码的类型，默认为“CipherText”： - PlainText - CipherText
    * keystoreId  密钥库ID，指定密文pin时必选： 1：管理面manage_az集群（共享卡集群） 2：数据面共享集群(pod区) 其它：租户专属
    *
    * @var string[]
    */
    protected static $setters = [
            'pinType' => 'setPinType',
            'keystoreId' => 'setKeystoreId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pinType  pin码的类型，默认为“CipherText”： - PlainText - CipherText
    * keystoreId  密钥库ID，指定密文pin时必选： 1：管理面manage_az集群（共享卡集群） 2：数据面共享集群(pod区) 其它：租户专属
    *
    * @var string[]
    */
    protected static $getters = [
            'pinType' => 'getPinType',
            'keystoreId' => 'getKeystoreId'
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
    const PIN_TYPE_CIPHER_TEXT = 'CipherText';
    const PIN_TYPE_PLAIN_TEXT = 'PlainText';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPinTypeAllowableValues()
    {
        return [
            self::PIN_TYPE_CIPHER_TEXT,
            self::PIN_TYPE_PLAIN_TEXT,
        ];
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
        $this->container['pinType'] = isset($data['pinType']) ? $data['pinType'] : null;
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPinTypeAllowableValues();
                if (!is_null($this->container['pinType']) && !in_array($this->container['pinType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pinType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets pinType
    *  pin码的类型，默认为“CipherText”： - PlainText - CipherText
    *
    * @return string|null
    */
    public function getPinType()
    {
        return $this->container['pinType'];
    }

    /**
    * Sets pinType
    *
    * @param string|null $pinType pin码的类型，默认为“CipherText”： - PlainText - CipherText
    *
    * @return $this
    */
    public function setPinType($pinType)
    {
        $this->container['pinType'] = $pinType;
        return $this;
    }

    /**
    * Gets keystoreId
    *  密钥库ID，指定密文pin时必选： 1：管理面manage_az集群（共享卡集群） 2：数据面共享集群(pod区) 其它：租户专属
    *
    * @return string|null
    */
    public function getKeystoreId()
    {
        return $this->container['keystoreId'];
    }

    /**
    * Sets keystoreId
    *
    * @param string|null $keystoreId 密钥库ID，指定密文pin时必选： 1：管理面manage_az集群（共享卡集群） 2：数据面共享集群(pod区) 其它：租户专属
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
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

