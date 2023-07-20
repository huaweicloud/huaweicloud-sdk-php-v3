<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditlogPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditlogPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keepDays  审计日志保存天数，审计日志策略关闭时为0。
    * auditScope  审计范围。
    * auditTypes  审计类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepDays' => 'int',
            'auditScope' => 'string',
            'auditTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepDays  审计日志保存天数，审计日志策略关闭时为0。
    * auditScope  审计范围。
    * auditTypes  审计类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepDays' => null,
        'auditScope' => null,
        'auditTypes' => null
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
    * keepDays  审计日志保存天数，审计日志策略关闭时为0。
    * auditScope  审计范围。
    * auditTypes  审计类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepDays' => 'keep_days',
            'auditScope' => 'audit_scope',
            'auditTypes' => 'audit_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepDays  审计日志保存天数，审计日志策略关闭时为0。
    * auditScope  审计范围。
    * auditTypes  审计类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'keepDays' => 'setKeepDays',
            'auditScope' => 'setAuditScope',
            'auditTypes' => 'setAuditTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepDays  审计日志保存天数，审计日志策略关闭时为0。
    * auditScope  审计范围。
    * auditTypes  审计类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'keepDays' => 'getKeepDays',
            'auditScope' => 'getAuditScope',
            'auditTypes' => 'getAuditTypes'
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
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['auditScope'] = isset($data['auditScope']) ? $data['auditScope'] : null;
        $this->container['auditTypes'] = isset($data['auditTypes']) ? $data['auditTypes'] : null;
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
    * Gets keepDays
    *  审计日志保存天数，审计日志策略关闭时为0。
    *
    * @return int|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int|null $keepDays 审计日志保存天数，审计日志策略关闭时为0。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets auditScope
    *  审计范围。
    *
    * @return string|null
    */
    public function getAuditScope()
    {
        return $this->container['auditScope'];
    }

    /**
    * Sets auditScope
    *
    * @param string|null $auditScope 审计范围。
    *
    * @return $this
    */
    public function setAuditScope($auditScope)
    {
        $this->container['auditScope'] = $auditScope;
        return $this;
    }

    /**
    * Gets auditTypes
    *  审计类型。
    *
    * @return string[]|null
    */
    public function getAuditTypes()
    {
        return $this->container['auditTypes'];
    }

    /**
    * Sets auditTypes
    *
    * @param string[]|null $auditTypes 审计类型。
    *
    * @return $this
    */
    public function setAuditTypes($auditTypes)
    {
        $this->container['auditTypes'] = $auditTypes;
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

