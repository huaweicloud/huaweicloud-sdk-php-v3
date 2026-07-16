<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRealNameAuthStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRealNameAuthStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * verifiedStatus  实名认证状态。enum:-1,0,1,2。 -1未实名认证、0实名认证审核中、1实名认证不通过、2已实名认证
    * verifiedType  实名认证类型。实名认证状态为-1未实名认证返回null。enum:0,1。 0个人实名认证、1企业实名认证
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'verifiedStatus' => 'int',
            'verifiedType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * verifiedStatus  实名认证状态。enum:-1,0,1,2。 -1未实名认证、0实名认证审核中、1实名认证不通过、2已实名认证
    * verifiedType  实名认证类型。实名认证状态为-1未实名认证返回null。enum:0,1。 0个人实名认证、1企业实名认证
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'verifiedStatus' => 'int32',
        'verifiedType' => 'int32'
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
    * verifiedStatus  实名认证状态。enum:-1,0,1,2。 -1未实名认证、0实名认证审核中、1实名认证不通过、2已实名认证
    * verifiedType  实名认证类型。实名认证状态为-1未实名认证返回null。enum:0,1。 0个人实名认证、1企业实名认证
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'verifiedStatus' => 'verified_status',
            'verifiedType' => 'verified_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * verifiedStatus  实名认证状态。enum:-1,0,1,2。 -1未实名认证、0实名认证审核中、1实名认证不通过、2已实名认证
    * verifiedType  实名认证类型。实名认证状态为-1未实名认证返回null。enum:0,1。 0个人实名认证、1企业实名认证
    *
    * @var string[]
    */
    protected static $setters = [
            'verifiedStatus' => 'setVerifiedStatus',
            'verifiedType' => 'setVerifiedType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * verifiedStatus  实名认证状态。enum:-1,0,1,2。 -1未实名认证、0实名认证审核中、1实名认证不通过、2已实名认证
    * verifiedType  实名认证类型。实名认证状态为-1未实名认证返回null。enum:0,1。 0个人实名认证、1企业实名认证
    *
    * @var string[]
    */
    protected static $getters = [
            'verifiedStatus' => 'getVerifiedStatus',
            'verifiedType' => 'getVerifiedType'
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
        $this->container['verifiedStatus'] = isset($data['verifiedStatus']) ? $data['verifiedStatus'] : null;
        $this->container['verifiedType'] = isset($data['verifiedType']) ? $data['verifiedType'] : null;
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
    * Gets verifiedStatus
    *  实名认证状态。enum:-1,0,1,2。 -1未实名认证、0实名认证审核中、1实名认证不通过、2已实名认证
    *
    * @return int|null
    */
    public function getVerifiedStatus()
    {
        return $this->container['verifiedStatus'];
    }

    /**
    * Sets verifiedStatus
    *
    * @param int|null $verifiedStatus 实名认证状态。enum:-1,0,1,2。 -1未实名认证、0实名认证审核中、1实名认证不通过、2已实名认证
    *
    * @return $this
    */
    public function setVerifiedStatus($verifiedStatus)
    {
        $this->container['verifiedStatus'] = $verifiedStatus;
        return $this;
    }

    /**
    * Gets verifiedType
    *  实名认证类型。实名认证状态为-1未实名认证返回null。enum:0,1。 0个人实名认证、1企业实名认证
    *
    * @return int|null
    */
    public function getVerifiedType()
    {
        return $this->container['verifiedType'];
    }

    /**
    * Sets verifiedType
    *
    * @param int|null $verifiedType 实名认证类型。实名认证状态为-1未实名认证返回null。enum:0,1。 0个人实名认证、1企业实名认证
    *
    * @return $this
    */
    public function setVerifiedType($verifiedType)
    {
        $this->container['verifiedType'] = $verifiedType;
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

