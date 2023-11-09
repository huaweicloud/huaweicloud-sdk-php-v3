<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThreatIntel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThreatIntel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  情报Id。
    * indicatorType  威胁情报类型，Domain、Email_Address、Hash_MD5、Hash_SHA1、Hash_SHA256、 Hash_SHA512、IPv4_Address、IPv6_Address、URL。
    * labels  标签，如'矿池','外联'等，\"Directory Scan|Directory Traversal\"。
    * confidence  置信度，不同来源目前置信度分值定义不一样（分数）。
    * informationSource  威胁情报源，最大64个字符。
    * severity  严重程度，不同渠道定义值不一样（分数）。
    * description  威胁情报描述。
    * modified  威胁情报的更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * validFrom  有效期开始（可读字符串）。
    * validUntil  有效期结束（可读字符串）。
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'indicatorType' => 'string',
            'labels' => 'string',
            'confidence' => 'int',
            'informationSource' => 'string',
            'severity' => 'int',
            'description' => 'string',
            'modified' => '\DateTime',
            'validFrom' => 'string',
            'validUntil' => 'string',
            'properties' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ThreatIntelProperties'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  情报Id。
    * indicatorType  威胁情报类型，Domain、Email_Address、Hash_MD5、Hash_SHA1、Hash_SHA256、 Hash_SHA512、IPv4_Address、IPv6_Address、URL。
    * labels  标签，如'矿池','外联'等，\"Directory Scan|Directory Traversal\"。
    * confidence  置信度，不同来源目前置信度分值定义不一样（分数）。
    * informationSource  威胁情报源，最大64个字符。
    * severity  严重程度，不同渠道定义值不一样（分数）。
    * description  威胁情报描述。
    * modified  威胁情报的更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * validFrom  有效期开始（可读字符串）。
    * validUntil  有效期结束（可读字符串）。
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'indicatorType' => null,
        'labels' => null,
        'confidence' => null,
        'informationSource' => null,
        'severity' => null,
        'description' => null,
        'modified' => 'date-time',
        'validFrom' => null,
        'validUntil' => null,
        'properties' => null
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
    * id  情报Id。
    * indicatorType  威胁情报类型，Domain、Email_Address、Hash_MD5、Hash_SHA1、Hash_SHA256、 Hash_SHA512、IPv4_Address、IPv6_Address、URL。
    * labels  标签，如'矿池','外联'等，\"Directory Scan|Directory Traversal\"。
    * confidence  置信度，不同来源目前置信度分值定义不一样（分数）。
    * informationSource  威胁情报源，最大64个字符。
    * severity  严重程度，不同渠道定义值不一样（分数）。
    * description  威胁情报描述。
    * modified  威胁情报的更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * validFrom  有效期开始（可读字符串）。
    * validUntil  有效期结束（可读字符串）。
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'indicatorType' => 'indicator_type',
            'labels' => 'labels',
            'confidence' => 'confidence',
            'informationSource' => 'information_source',
            'severity' => 'severity',
            'description' => 'description',
            'modified' => 'modified',
            'validFrom' => 'valid_from',
            'validUntil' => 'valid_until',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  情报Id。
    * indicatorType  威胁情报类型，Domain、Email_Address、Hash_MD5、Hash_SHA1、Hash_SHA256、 Hash_SHA512、IPv4_Address、IPv6_Address、URL。
    * labels  标签，如'矿池','外联'等，\"Directory Scan|Directory Traversal\"。
    * confidence  置信度，不同来源目前置信度分值定义不一样（分数）。
    * informationSource  威胁情报源，最大64个字符。
    * severity  严重程度，不同渠道定义值不一样（分数）。
    * description  威胁情报描述。
    * modified  威胁情报的更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * validFrom  有效期开始（可读字符串）。
    * validUntil  有效期结束（可读字符串）。
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'indicatorType' => 'setIndicatorType',
            'labels' => 'setLabels',
            'confidence' => 'setConfidence',
            'informationSource' => 'setInformationSource',
            'severity' => 'setSeverity',
            'description' => 'setDescription',
            'modified' => 'setModified',
            'validFrom' => 'setValidFrom',
            'validUntil' => 'setValidUntil',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  情报Id。
    * indicatorType  威胁情报类型，Domain、Email_Address、Hash_MD5、Hash_SHA1、Hash_SHA256、 Hash_SHA512、IPv4_Address、IPv6_Address、URL。
    * labels  标签，如'矿池','外联'等，\"Directory Scan|Directory Traversal\"。
    * confidence  置信度，不同来源目前置信度分值定义不一样（分数）。
    * informationSource  威胁情报源，最大64个字符。
    * severity  严重程度，不同渠道定义值不一样（分数）。
    * description  威胁情报描述。
    * modified  威胁情报的更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * validFrom  有效期开始（可读字符串）。
    * validUntil  有效期结束（可读字符串）。
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'indicatorType' => 'getIndicatorType',
            'labels' => 'getLabels',
            'confidence' => 'getConfidence',
            'informationSource' => 'getInformationSource',
            'severity' => 'getSeverity',
            'description' => 'getDescription',
            'modified' => 'getModified',
            'validFrom' => 'getValidFrom',
            'validUntil' => 'getValidUntil',
            'properties' => 'getProperties'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['indicatorType'] = isset($data['indicatorType']) ? $data['indicatorType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['informationSource'] = isset($data['informationSource']) ? $data['informationSource'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validUntil'] = isset($data['validUntil']) ? $data['validUntil'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indicatorType']) && (mb_strlen($this->container['indicatorType']) > 64)) {
                $invalidProperties[] = "invalid value for 'indicatorType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indicatorType']) && (mb_strlen($this->container['indicatorType']) < 0)) {
                $invalidProperties[] = "invalid value for 'indicatorType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) > 512)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) < 0)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0)) {
                $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.";
            }
        if ($this->container['informationSource'] === null) {
            $invalidProperties[] = "'informationSource' can't be null";
        }
            if ((mb_strlen($this->container['informationSource']) > 64)) {
                $invalidProperties[] = "invalid value for 'informationSource', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['informationSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'informationSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && ($this->container['severity'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'severity', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['severity']) && ($this->container['severity'] < 0)) {
                $invalidProperties[] = "invalid value for 'severity', must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['validFrom']) && (mb_strlen($this->container['validFrom']) > 32)) {
                $invalidProperties[] = "invalid value for 'validFrom', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['validFrom']) && (mb_strlen($this->container['validFrom']) < 0)) {
                $invalidProperties[] = "invalid value for 'validFrom', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['validUntil']) && (mb_strlen($this->container['validUntil']) > 32)) {
                $invalidProperties[] = "invalid value for 'validUntil', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['validUntil']) && (mb_strlen($this->container['validUntil']) < 0)) {
                $invalidProperties[] = "invalid value for 'validUntil', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  情报Id。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 情报Id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets indicatorType
    *  威胁情报类型，Domain、Email_Address、Hash_MD5、Hash_SHA1、Hash_SHA256、 Hash_SHA512、IPv4_Address、IPv6_Address、URL。
    *
    * @return string|null
    */
    public function getIndicatorType()
    {
        return $this->container['indicatorType'];
    }

    /**
    * Sets indicatorType
    *
    * @param string|null $indicatorType 威胁情报类型，Domain、Email_Address、Hash_MD5、Hash_SHA1、Hash_SHA256、 Hash_SHA512、IPv4_Address、IPv6_Address、URL。
    *
    * @return $this
    */
    public function setIndicatorType($indicatorType)
    {
        $this->container['indicatorType'] = $indicatorType;
        return $this;
    }

    /**
    * Gets labels
    *  标签，如'矿池','外联'等，\"Directory Scan|Directory Traversal\"。
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 标签，如'矿池','外联'等，\"Directory Scan|Directory Traversal\"。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets confidence
    *  置信度，不同来源目前置信度分值定义不一样（分数）。
    *
    * @return int|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param int|null $confidence 置信度，不同来源目前置信度分值定义不一样（分数）。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets informationSource
    *  威胁情报源，最大64个字符。
    *
    * @return string
    */
    public function getInformationSource()
    {
        return $this->container['informationSource'];
    }

    /**
    * Sets informationSource
    *
    * @param string $informationSource 威胁情报源，最大64个字符。
    *
    * @return $this
    */
    public function setInformationSource($informationSource)
    {
        $this->container['informationSource'] = $informationSource;
        return $this;
    }

    /**
    * Gets severity
    *  严重程度，不同渠道定义值不一样（分数）。
    *
    * @return int|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param int|null $severity 严重程度，不同渠道定义值不一样（分数）。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets description
    *  威胁情报描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 威胁情报描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets modified
    *  威胁情报的更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return \DateTime|null
    */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
    * Sets modified
    *
    * @param \DateTime|null $modified 威胁情报的更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return $this
    */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;
        return $this;
    }

    /**
    * Gets validFrom
    *  有效期开始（可读字符串）。
    *
    * @return string|null
    */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
    * Sets validFrom
    *
    * @param string|null $validFrom 有效期开始（可读字符串）。
    *
    * @return $this
    */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;
        return $this;
    }

    /**
    * Gets validUntil
    *  有效期结束（可读字符串）。
    *
    * @return string|null
    */
    public function getValidUntil()
    {
        return $this->container['validUntil'];
    }

    /**
    * Sets validUntil
    *
    * @param string|null $validUntil 有效期结束（可读字符串）。
    *
    * @return $this
    */
    public function setValidUntil($validUntil)
    {
        $this->container['validUntil'] = $validUntil;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ThreatIntelProperties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ThreatIntelProperties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

