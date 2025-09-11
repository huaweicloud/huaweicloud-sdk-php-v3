<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnSupportAuditInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnSupportAuditInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * auditInfos  审计信息
    * supportVersion  支持的版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'auditInfos' => '\HuaweiCloud\SDK\Dbss\V1\Model\UnSupportAuditInfo[]',
            'supportVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * auditInfos  审计信息
    * supportVersion  支持的版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'auditInfos' => null,
        'supportVersion' => null
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
    * auditInfos  审计信息
    * supportVersion  支持的版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'auditInfos' => 'audit_infos',
            'supportVersion' => 'support_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * auditInfos  审计信息
    * supportVersion  支持的版本
    *
    * @var string[]
    */
    protected static $setters = [
            'auditInfos' => 'setAuditInfos',
            'supportVersion' => 'setSupportVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * auditInfos  审计信息
    * supportVersion  支持的版本
    *
    * @var string[]
    */
    protected static $getters = [
            'auditInfos' => 'getAuditInfos',
            'supportVersion' => 'getSupportVersion'
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
        $this->container['auditInfos'] = isset($data['auditInfos']) ? $data['auditInfos'] : null;
        $this->container['supportVersion'] = isset($data['supportVersion']) ? $data['supportVersion'] : null;
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
    * Gets auditInfos
    *  审计信息
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\UnSupportAuditInfo[]|null
    */
    public function getAuditInfos()
    {
        return $this->container['auditInfos'];
    }

    /**
    * Sets auditInfos
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\UnSupportAuditInfo[]|null $auditInfos 审计信息
    *
    * @return $this
    */
    public function setAuditInfos($auditInfos)
    {
        $this->container['auditInfos'] = $auditInfos;
        return $this;
    }

    /**
    * Gets supportVersion
    *  支持的版本
    *
    * @return string|null
    */
    public function getSupportVersion()
    {
        return $this->container['supportVersion'];
    }

    /**
    * Sets supportVersion
    *
    * @param string|null $supportVersion 支持的版本
    *
    * @return $this
    */
    public function setSupportVersion($supportVersion)
    {
        $this->container['supportVersion'] = $supportVersion;
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

