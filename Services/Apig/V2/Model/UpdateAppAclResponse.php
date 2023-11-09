<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAppAclResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAppAclResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  APP编号
    * appAclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * appAclValues  ACL策略值，支持IP、IP范围和CIDR方式。IP范围以英文中划线分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appAclType' => 'string',
            'appAclValues' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  APP编号
    * appAclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * appAclValues  ACL策略值，支持IP、IP范围和CIDR方式。IP范围以英文中划线分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appAclType' => null,
        'appAclValues' => null
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
    * appId  APP编号
    * appAclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * appAclValues  ACL策略值，支持IP、IP范围和CIDR方式。IP范围以英文中划线分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appAclType' => 'app_acl_type',
            'appAclValues' => 'app_acl_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  APP编号
    * appAclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * appAclValues  ACL策略值，支持IP、IP范围和CIDR方式。IP范围以英文中划线分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appAclType' => 'setAppAclType',
            'appAclValues' => 'setAppAclValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  APP编号
    * appAclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * appAclValues  ACL策略值，支持IP、IP范围和CIDR方式。IP范围以英文中划线分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appAclType' => 'getAppAclType',
            'appAclValues' => 'getAppAclValues'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appAclType'] = isset($data['appAclType']) ? $data['appAclType'] : null;
        $this->container['appAclValues'] = isset($data['appAclValues']) ? $data['appAclValues'] : null;
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
    * Gets appId
    *  APP编号
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId APP编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appAclType
    *  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    *
    * @return string|null
    */
    public function getAppAclType()
    {
        return $this->container['appAclType'];
    }

    /**
    * Sets appAclType
    *
    * @param string|null $appAclType 类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    *
    * @return $this
    */
    public function setAppAclType($appAclType)
    {
        $this->container['appAclType'] = $appAclType;
        return $this;
    }

    /**
    * Gets appAclValues
    *  ACL策略值，支持IP、IP范围和CIDR方式。IP范围以英文中划线分隔。
    *
    * @return string[]|null
    */
    public function getAppAclValues()
    {
        return $this->container['appAclValues'];
    }

    /**
    * Sets appAclValues
    *
    * @param string[]|null $appAclValues ACL策略值，支持IP、IP范围和CIDR方式。IP范围以英文中划线分隔。
    *
    * @return $this
    */
    public function setAppAclValues($appAclValues)
    {
        $this->container['appAclValues'] = $appAclValues;
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

