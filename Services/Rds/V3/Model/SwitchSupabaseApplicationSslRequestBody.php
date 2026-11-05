<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchSupabaseApplicationSslRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchSupabaseApplicationSslRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableSsl  是否开启SSL。false时cert_id必须为空；true时cert_id必填。
    * certId  证书ID。enable_ssl=true时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableSsl' => 'bool',
            'certId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableSsl  是否开启SSL。false时cert_id必须为空；true时cert_id必填。
    * certId  证书ID。enable_ssl=true时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableSsl' => null,
        'certId' => null
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
    * enableSsl  是否开启SSL。false时cert_id必须为空；true时cert_id必填。
    * certId  证书ID。enable_ssl=true时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableSsl' => 'enable_ssl',
            'certId' => 'cert_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableSsl  是否开启SSL。false时cert_id必须为空；true时cert_id必填。
    * certId  证书ID。enable_ssl=true时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'enableSsl' => 'setEnableSsl',
            'certId' => 'setCertId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableSsl  是否开启SSL。false时cert_id必须为空；true时cert_id必填。
    * certId  证书ID。enable_ssl=true时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'enableSsl' => 'getEnableSsl',
            'certId' => 'getCertId'
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
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableSsl'] === null) {
            $invalidProperties[] = "'enableSsl' can't be null";
        }
            if (!is_null($this->container['certId']) && !preg_match("/^[a-zA-Z0-9_-]{3,64}$/", $this->container['certId'])) {
                $invalidProperties[] = "invalid value for 'certId', must be conform to the pattern /^[a-zA-Z0-9_-]{3,64}$/.";
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
    * Gets enableSsl
    *  是否开启SSL。false时cert_id必须为空；true时cert_id必填。
    *
    * @return bool
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool $enableSsl 是否开启SSL。false时cert_id必须为空；true时cert_id必填。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets certId
    *  证书ID。enable_ssl=true时必填。
    *
    * @return string|null
    */
    public function getCertId()
    {
        return $this->container['certId'];
    }

    /**
    * Sets certId
    *
    * @param string|null $certId 证书ID。enable_ssl=true时必填。
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
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

