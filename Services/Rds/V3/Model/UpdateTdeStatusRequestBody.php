<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTdeStatusRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTdeStatusRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rotateDay  轮转天数
    * secretId  密钥ID
    * secretName  密钥名称
    * secretVersion  密钥版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rotateDay' => 'int',
            'secretId' => 'string',
            'secretName' => 'string',
            'secretVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rotateDay  轮转天数
    * secretId  密钥ID
    * secretName  密钥名称
    * secretVersion  密钥版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rotateDay' => null,
        'secretId' => null,
        'secretName' => null,
        'secretVersion' => null
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
    * rotateDay  轮转天数
    * secretId  密钥ID
    * secretName  密钥名称
    * secretVersion  密钥版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rotateDay' => 'rotate_day',
            'secretId' => 'secret_id',
            'secretName' => 'secret_name',
            'secretVersion' => 'secret_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rotateDay  轮转天数
    * secretId  密钥ID
    * secretName  密钥名称
    * secretVersion  密钥版本
    *
    * @var string[]
    */
    protected static $setters = [
            'rotateDay' => 'setRotateDay',
            'secretId' => 'setSecretId',
            'secretName' => 'setSecretName',
            'secretVersion' => 'setSecretVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rotateDay  轮转天数
    * secretId  密钥ID
    * secretName  密钥名称
    * secretVersion  密钥版本
    *
    * @var string[]
    */
    protected static $getters = [
            'rotateDay' => 'getRotateDay',
            'secretId' => 'getSecretId',
            'secretName' => 'getSecretName',
            'secretVersion' => 'getSecretVersion'
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
        $this->container['rotateDay'] = isset($data['rotateDay']) ? $data['rotateDay'] : null;
        $this->container['secretId'] = isset($data['secretId']) ? $data['secretId'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['secretVersion'] = isset($data['secretVersion']) ? $data['secretVersion'] : null;
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
    * Gets rotateDay
    *  轮转天数
    *
    * @return int|null
    */
    public function getRotateDay()
    {
        return $this->container['rotateDay'];
    }

    /**
    * Sets rotateDay
    *
    * @param int|null $rotateDay 轮转天数
    *
    * @return $this
    */
    public function setRotateDay($rotateDay)
    {
        $this->container['rotateDay'] = $rotateDay;
        return $this;
    }

    /**
    * Gets secretId
    *  密钥ID
    *
    * @return string|null
    */
    public function getSecretId()
    {
        return $this->container['secretId'];
    }

    /**
    * Sets secretId
    *
    * @param string|null $secretId 密钥ID
    *
    * @return $this
    */
    public function setSecretId($secretId)
    {
        $this->container['secretId'] = $secretId;
        return $this;
    }

    /**
    * Gets secretName
    *  密钥名称
    *
    * @return string|null
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string|null $secretName 密钥名称
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets secretVersion
    *  密钥版本
    *
    * @return string|null
    */
    public function getSecretVersion()
    {
        return $this->container['secretVersion'];
    }

    /**
    * Sets secretVersion
    *
    * @param string|null $secretVersion 密钥版本
    *
    * @return $this
    */
    public function setSecretVersion($secretVersion)
    {
        $this->container['secretVersion'] = $secretVersion;
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

