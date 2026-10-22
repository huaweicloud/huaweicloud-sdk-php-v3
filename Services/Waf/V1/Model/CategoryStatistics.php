<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CategoryStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CategoryStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryType  防护类型
    * totalCount  累计检测数
    * riskCount  检出风险数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryType' => 'string',
            'totalCount' => 'int',
            'riskCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryType  防护类型
    * totalCount  累计检测数
    * riskCount  检出风险数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryType' => null,
        'totalCount' => 'int64',
        'riskCount' => 'int64'
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
    * categoryType  防护类型
    * totalCount  累计检测数
    * riskCount  检出风险数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryType' => 'category_type',
            'totalCount' => 'total_count',
            'riskCount' => 'risk_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryType  防护类型
    * totalCount  累计检测数
    * riskCount  检出风险数
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryType' => 'setCategoryType',
            'totalCount' => 'setTotalCount',
            'riskCount' => 'setRiskCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryType  防护类型
    * totalCount  累计检测数
    * riskCount  检出风险数
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryType' => 'getCategoryType',
            'totalCount' => 'getTotalCount',
            'riskCount' => 'getRiskCount'
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
    const CATEGORY_TYPE_CONTENT_COMPLIANCE = 'CONTENT_COMPLIANCE';
    const CATEGORY_TYPE_PROMPT_INJECTION = 'PROMPT_INJECTION';
    const CATEGORY_TYPE_SENSITIVE_CONTENT = 'SENSITIVE_CONTENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryTypeAllowableValues()
    {
        return [
            self::CATEGORY_TYPE_CONTENT_COMPLIANCE,
            self::CATEGORY_TYPE_PROMPT_INJECTION,
            self::CATEGORY_TYPE_SENSITIVE_CONTENT,
        ];
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
        $this->container['categoryType'] = isset($data['categoryType']) ? $data['categoryType'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['riskCount'] = isset($data['riskCount']) ? $data['riskCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['categoryType'] === null) {
            $invalidProperties[] = "'categoryType' can't be null";
        }
            $allowedValues = $this->getCategoryTypeAllowableValues();
                if (!is_null($this->container['categoryType']) && !in_array($this->container['categoryType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'categoryType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['totalCount'] === null) {
            $invalidProperties[] = "'totalCount' can't be null";
        }
        if ($this->container['riskCount'] === null) {
            $invalidProperties[] = "'riskCount' can't be null";
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
    * Gets categoryType
    *  防护类型
    *
    * @return string
    */
    public function getCategoryType()
    {
        return $this->container['categoryType'];
    }

    /**
    * Sets categoryType
    *
    * @param string $categoryType 防护类型
    *
    * @return $this
    */
    public function setCategoryType($categoryType)
    {
        $this->container['categoryType'] = $categoryType;
        return $this;
    }

    /**
    * Gets totalCount
    *  累计检测数
    *
    * @return int
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int $totalCount 累计检测数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets riskCount
    *  检出风险数
    *
    * @return int
    */
    public function getRiskCount()
    {
        return $this->container['riskCount'];
    }

    /**
    * Sets riskCount
    *
    * @param int $riskCount 检出风险数
    *
    * @return $this
    */
    public function setRiskCount($riskCount)
    {
        $this->container['riskCount'] = $riskCount;
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

