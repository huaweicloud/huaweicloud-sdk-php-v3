<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Authentification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Authentification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordName  域名校验值名字。
    * recordType  域名校验值类型。
    * recordValue  域名校验值。
    * domain  校验值对应的域名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordName' => 'string',
            'recordType' => 'string',
            'recordValue' => 'string',
            'domain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordName  域名校验值名字。
    * recordType  域名校验值类型。
    * recordValue  域名校验值。
    * domain  校验值对应的域名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordName' => null,
        'recordType' => null,
        'recordValue' => null,
        'domain' => null
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
    * recordName  域名校验值名字。
    * recordType  域名校验值类型。
    * recordValue  域名校验值。
    * domain  校验值对应的域名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordName' => 'record_name',
            'recordType' => 'record_type',
            'recordValue' => 'record_value',
            'domain' => 'domain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordName  域名校验值名字。
    * recordType  域名校验值类型。
    * recordValue  域名校验值。
    * domain  校验值对应的域名。
    *
    * @var string[]
    */
    protected static $setters = [
            'recordName' => 'setRecordName',
            'recordType' => 'setRecordType',
            'recordValue' => 'setRecordValue',
            'domain' => 'setDomain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordName  域名校验值名字。
    * recordType  域名校验值类型。
    * recordValue  域名校验值。
    * domain  校验值对应的域名。
    *
    * @var string[]
    */
    protected static $getters = [
            'recordName' => 'getRecordName',
            'recordType' => 'getRecordType',
            'recordValue' => 'getRecordValue',
            'domain' => 'getDomain'
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
        $this->container['recordName'] = isset($data['recordName']) ? $data['recordName'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['recordValue'] = isset($data['recordValue']) ? $data['recordValue'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['recordName']) && (mb_strlen($this->container['recordName']) > 255)) {
                $invalidProperties[] = "invalid value for 'recordName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['recordName']) && (mb_strlen($this->container['recordName']) < 0)) {
                $invalidProperties[] = "invalid value for 'recordName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordType']) && (mb_strlen($this->container['recordType']) > 255)) {
                $invalidProperties[] = "invalid value for 'recordType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['recordType']) && (mb_strlen($this->container['recordType']) < 0)) {
                $invalidProperties[] = "invalid value for 'recordType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordValue']) && (mb_strlen($this->container['recordValue']) > 255)) {
                $invalidProperties[] = "invalid value for 'recordValue', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['recordValue']) && (mb_strlen($this->container['recordValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'recordValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
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
    * Gets recordName
    *  域名校验值名字。
    *
    * @return string|null
    */
    public function getRecordName()
    {
        return $this->container['recordName'];
    }

    /**
    * Sets recordName
    *
    * @param string|null $recordName 域名校验值名字。
    *
    * @return $this
    */
    public function setRecordName($recordName)
    {
        $this->container['recordName'] = $recordName;
        return $this;
    }

    /**
    * Gets recordType
    *  域名校验值类型。
    *
    * @return string|null
    */
    public function getRecordType()
    {
        return $this->container['recordType'];
    }

    /**
    * Sets recordType
    *
    * @param string|null $recordType 域名校验值类型。
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets recordValue
    *  域名校验值。
    *
    * @return string|null
    */
    public function getRecordValue()
    {
        return $this->container['recordValue'];
    }

    /**
    * Sets recordValue
    *
    * @param string|null $recordValue 域名校验值。
    *
    * @return $this
    */
    public function setRecordValue($recordValue)
    {
        $this->container['recordValue'] = $recordValue;
        return $this;
    }

    /**
    * Gets domain
    *  校验值对应的域名。
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 校验值对应的域名。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
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

