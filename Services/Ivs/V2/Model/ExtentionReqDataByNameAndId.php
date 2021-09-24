<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtentionReqDataByNameAndId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtentionReqDataByNameAndId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'verificationName' => 'string',
            'verificationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'verificationName' => null,
        'verificationId' => null
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
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'verificationName' => 'verification_name',
            'verificationId' => 'verification_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    *
    * @var string[]
    */
    protected static $setters = [
            'verificationName' => 'setVerificationName',
            'verificationId' => 'setVerificationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    *
    * @var string[]
    */
    protected static $getters = [
            'verificationName' => 'getVerificationName',
            'verificationId' => 'getVerificationId'
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
        $this->container['verificationName'] = isset($data['verificationName']) ? $data['verificationName'] : null;
        $this->container['verificationId'] = isset($data['verificationId']) ? $data['verificationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['verificationName'] === null) {
            $invalidProperties[] = "'verificationName' can't be null";
        }
        if ($this->container['verificationId'] === null) {
            $invalidProperties[] = "'verificationId' can't be null";
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
    * Gets verificationName
    *  被验证人的姓名。
    *
    * @return string
    */
    public function getVerificationName()
    {
        return $this->container['verificationName'];
    }

    /**
    * Sets verificationName
    *
    * @param string $verificationName 被验证人的姓名。
    *
    * @return $this
    */
    public function setVerificationName($verificationName)
    {
        $this->container['verificationName'] = $verificationName;
        return $this;
    }

    /**
    * Gets verificationId
    *  被验证人的身份证号码。
    *
    * @return string
    */
    public function getVerificationId()
    {
        return $this->container['verificationId'];
    }

    /**
    * Sets verificationId
    *
    * @param string $verificationId 被验证人的身份证号码。
    *
    * @return $this
    */
    public function setVerificationId($verificationId)
    {
        $this->container['verificationId'] = $verificationId;
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

