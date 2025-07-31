<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddBaselineWhiteListRequestBodyRuleList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddBaselineWhiteListRequestBody_rule_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indexVersion' => 'string',
            'checkType' => 'string',
            'standard' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indexVersion' => null,
        'checkType' => null,
        'standard' => null
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
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indexVersion' => 'index_version',
            'checkType' => 'check_type',
            'standard' => 'standard'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @var string[]
    */
    protected static $setters = [
            'indexVersion' => 'setIndexVersion',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indexVersion  基线检查的检查项标识
    * checkType  基线检查的基线名称
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @var string[]
    */
    protected static $getters = [
            'indexVersion' => 'getIndexVersion',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard'
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
        $this->container['indexVersion'] = isset($data['indexVersion']) ? $data['indexVersion'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['indexVersion']) && (mb_strlen($this->container['indexVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'indexVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['indexVersion']) && (mb_strlen($this->container['indexVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'indexVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indexVersion']) && !preg_match("/^.*$/", $this->container['indexVersion'])) {
                $invalidProperties[] = "invalid value for 'indexVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 255)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && !preg_match("/^.*$/", $this->container['checkType'])) {
                $invalidProperties[] = "invalid value for 'checkType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && !preg_match("/^.*$/", $this->container['standard'])) {
                $invalidProperties[] = "invalid value for 'standard', must be conform to the pattern /^.*$/.";
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
    * Gets indexVersion
    *  基线检查的检查项标识
    *
    * @return string|null
    */
    public function getIndexVersion()
    {
        return $this->container['indexVersion'];
    }

    /**
    * Sets indexVersion
    *
    * @param string|null $indexVersion 基线检查的检查项标识
    *
    * @return $this
    */
    public function setIndexVersion($indexVersion)
    {
        $this->container['indexVersion'] = $indexVersion;
        return $this;
    }

    /**
    * Gets checkType
    *  基线检查的基线名称
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType 基线检查的基线名称
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets standard
    *  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard 标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
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

