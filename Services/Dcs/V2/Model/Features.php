<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Features implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Features';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * supportAcl  是否支持acl - true：是 - false：否
    * supportTransparentClientIp  实例是否支持客户端ip透传 - true：是 - false：否
    * supportSsl  是否支持SSL - true：是 - false：否
    * supportAuditLog  是否支持审计日志 - true: 是 - false: 否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'supportAcl' => 'bool',
            'supportTransparentClientIp' => 'bool',
            'supportSsl' => 'bool',
            'supportAuditLog' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * supportAcl  是否支持acl - true：是 - false：否
    * supportTransparentClientIp  实例是否支持客户端ip透传 - true：是 - false：否
    * supportSsl  是否支持SSL - true：是 - false：否
    * supportAuditLog  是否支持审计日志 - true: 是 - false: 否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'supportAcl' => null,
        'supportTransparentClientIp' => null,
        'supportSsl' => null,
        'supportAuditLog' => null
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
    * supportAcl  是否支持acl - true：是 - false：否
    * supportTransparentClientIp  实例是否支持客户端ip透传 - true：是 - false：否
    * supportSsl  是否支持SSL - true：是 - false：否
    * supportAuditLog  是否支持审计日志 - true: 是 - false: 否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'supportAcl' => 'support_acl',
            'supportTransparentClientIp' => 'support_transparent_client_ip',
            'supportSsl' => 'support_ssl',
            'supportAuditLog' => 'support_audit_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * supportAcl  是否支持acl - true：是 - false：否
    * supportTransparentClientIp  实例是否支持客户端ip透传 - true：是 - false：否
    * supportSsl  是否支持SSL - true：是 - false：否
    * supportAuditLog  是否支持审计日志 - true: 是 - false: 否
    *
    * @var string[]
    */
    protected static $setters = [
            'supportAcl' => 'setSupportAcl',
            'supportTransparentClientIp' => 'setSupportTransparentClientIp',
            'supportSsl' => 'setSupportSsl',
            'supportAuditLog' => 'setSupportAuditLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * supportAcl  是否支持acl - true：是 - false：否
    * supportTransparentClientIp  实例是否支持客户端ip透传 - true：是 - false：否
    * supportSsl  是否支持SSL - true：是 - false：否
    * supportAuditLog  是否支持审计日志 - true: 是 - false: 否
    *
    * @var string[]
    */
    protected static $getters = [
            'supportAcl' => 'getSupportAcl',
            'supportTransparentClientIp' => 'getSupportTransparentClientIp',
            'supportSsl' => 'getSupportSsl',
            'supportAuditLog' => 'getSupportAuditLog'
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
        $this->container['supportAcl'] = isset($data['supportAcl']) ? $data['supportAcl'] : null;
        $this->container['supportTransparentClientIp'] = isset($data['supportTransparentClientIp']) ? $data['supportTransparentClientIp'] : null;
        $this->container['supportSsl'] = isset($data['supportSsl']) ? $data['supportSsl'] : null;
        $this->container['supportAuditLog'] = isset($data['supportAuditLog']) ? $data['supportAuditLog'] : null;
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
    * Gets supportAcl
    *  是否支持acl - true：是 - false：否
    *
    * @return bool|null
    */
    public function getSupportAcl()
    {
        return $this->container['supportAcl'];
    }

    /**
    * Sets supportAcl
    *
    * @param bool|null $supportAcl 是否支持acl - true：是 - false：否
    *
    * @return $this
    */
    public function setSupportAcl($supportAcl)
    {
        $this->container['supportAcl'] = $supportAcl;
        return $this;
    }

    /**
    * Gets supportTransparentClientIp
    *  实例是否支持客户端ip透传 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getSupportTransparentClientIp()
    {
        return $this->container['supportTransparentClientIp'];
    }

    /**
    * Sets supportTransparentClientIp
    *
    * @param bool|null $supportTransparentClientIp 实例是否支持客户端ip透传 - true：是 - false：否
    *
    * @return $this
    */
    public function setSupportTransparentClientIp($supportTransparentClientIp)
    {
        $this->container['supportTransparentClientIp'] = $supportTransparentClientIp;
        return $this;
    }

    /**
    * Gets supportSsl
    *  是否支持SSL - true：是 - false：否
    *
    * @return bool|null
    */
    public function getSupportSsl()
    {
        return $this->container['supportSsl'];
    }

    /**
    * Sets supportSsl
    *
    * @param bool|null $supportSsl 是否支持SSL - true：是 - false：否
    *
    * @return $this
    */
    public function setSupportSsl($supportSsl)
    {
        $this->container['supportSsl'] = $supportSsl;
        return $this;
    }

    /**
    * Gets supportAuditLog
    *  是否支持审计日志 - true: 是 - false: 否
    *
    * @return bool|null
    */
    public function getSupportAuditLog()
    {
        return $this->container['supportAuditLog'];
    }

    /**
    * Sets supportAuditLog
    *
    * @param bool|null $supportAuditLog 是否支持审计日志 - true: 是 - false: 否
    *
    * @return $this
    */
    public function setSupportAuditLog($supportAuditLog)
    {
        $this->container['supportAuditLog'] = $supportAuditLog;
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

