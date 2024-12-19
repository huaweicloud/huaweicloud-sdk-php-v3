<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePublicIpRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePublicIpRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicipId  公网访问绑定的ELB的EIP的ID，当Redis版本为3.0时，该参数为必填参数。
    * enableSsl  是否开启SSL，仅在开启SSL时有值，当Redis版本为3.0时，该参数为必填参数。
    * elbId  公网访问绑定的ELB ID，当Redis版本为4.0，5.0，6.0和企业版时，该参数为必填参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicipId' => 'string',
            'enableSsl' => 'bool',
            'elbId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicipId  公网访问绑定的ELB的EIP的ID，当Redis版本为3.0时，该参数为必填参数。
    * enableSsl  是否开启SSL，仅在开启SSL时有值，当Redis版本为3.0时，该参数为必填参数。
    * elbId  公网访问绑定的ELB ID，当Redis版本为4.0，5.0，6.0和企业版时，该参数为必填参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicipId' => null,
        'enableSsl' => null,
        'elbId' => null
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
    * publicipId  公网访问绑定的ELB的EIP的ID，当Redis版本为3.0时，该参数为必填参数。
    * enableSsl  是否开启SSL，仅在开启SSL时有值，当Redis版本为3.0时，该参数为必填参数。
    * elbId  公网访问绑定的ELB ID，当Redis版本为4.0，5.0，6.0和企业版时，该参数为必填参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicipId' => 'publicip_id',
            'enableSsl' => 'enable_ssl',
            'elbId' => 'elb_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicipId  公网访问绑定的ELB的EIP的ID，当Redis版本为3.0时，该参数为必填参数。
    * enableSsl  是否开启SSL，仅在开启SSL时有值，当Redis版本为3.0时，该参数为必填参数。
    * elbId  公网访问绑定的ELB ID，当Redis版本为4.0，5.0，6.0和企业版时，该参数为必填参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicipId' => 'setPublicipId',
            'enableSsl' => 'setEnableSsl',
            'elbId' => 'setElbId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicipId  公网访问绑定的ELB的EIP的ID，当Redis版本为3.0时，该参数为必填参数。
    * enableSsl  是否开启SSL，仅在开启SSL时有值，当Redis版本为3.0时，该参数为必填参数。
    * elbId  公网访问绑定的ELB ID，当Redis版本为4.0，5.0，6.0和企业版时，该参数为必填参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicipId' => 'getPublicipId',
            'enableSsl' => 'getEnableSsl',
            'elbId' => 'getElbId'
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
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['elbId'] = isset($data['elbId']) ? $data['elbId'] : null;
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
    * Gets publicipId
    *  公网访问绑定的ELB的EIP的ID，当Redis版本为3.0时，该参数为必填参数。
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId 公网访问绑定的ELB的EIP的ID，当Redis版本为3.0时，该参数为必填参数。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets enableSsl
    *  是否开启SSL，仅在开启SSL时有值，当Redis版本为3.0时，该参数为必填参数。
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl 是否开启SSL，仅在开启SSL时有值，当Redis版本为3.0时，该参数为必填参数。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets elbId
    *  公网访问绑定的ELB ID，当Redis版本为4.0，5.0，6.0和企业版时，该参数为必填参数。
    *
    * @return string|null
    */
    public function getElbId()
    {
        return $this->container['elbId'];
    }

    /**
    * Sets elbId
    *
    * @param string|null $elbId 公网访问绑定的ELB ID，当Redis版本为4.0，5.0，6.0和企业版时，该参数为必填参数。
    *
    * @return $this
    */
    public function setElbId($elbId)
    {
        $this->container['elbId'] = $elbId;
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

