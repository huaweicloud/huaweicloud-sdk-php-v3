<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnalyzerConfigurationUnusedAccess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnalyzerConfiguration_unused_access';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unusedAccessAge  生成分析结果的预设天数。
    * unusedAnalysisRule  unusedAnalysisRule
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unusedAccessAge' => 'int',
            'unusedAnalysisRule' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedAnalysisRule'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unusedAccessAge  生成分析结果的预设天数。
    * unusedAnalysisRule  unusedAnalysisRule
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unusedAccessAge' => 'int32',
        'unusedAnalysisRule' => null
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
    * unusedAccessAge  生成分析结果的预设天数。
    * unusedAnalysisRule  unusedAnalysisRule
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unusedAccessAge' => 'unused_access_age',
            'unusedAnalysisRule' => 'unused_analysis_rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unusedAccessAge  生成分析结果的预设天数。
    * unusedAnalysisRule  unusedAnalysisRule
    *
    * @var string[]
    */
    protected static $setters = [
            'unusedAccessAge' => 'setUnusedAccessAge',
            'unusedAnalysisRule' => 'setUnusedAnalysisRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unusedAccessAge  生成分析结果的预设天数。
    * unusedAnalysisRule  unusedAnalysisRule
    *
    * @var string[]
    */
    protected static $getters = [
            'unusedAccessAge' => 'getUnusedAccessAge',
            'unusedAnalysisRule' => 'getUnusedAnalysisRule'
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
        $this->container['unusedAccessAge'] = isset($data['unusedAccessAge']) ? $data['unusedAccessAge'] : null;
        $this->container['unusedAnalysisRule'] = isset($data['unusedAnalysisRule']) ? $data['unusedAnalysisRule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['unusedAccessAge']) && ($this->container['unusedAccessAge'] > 180)) {
                $invalidProperties[] = "invalid value for 'unusedAccessAge', must be smaller than or equal to 180.";
            }
            if (!is_null($this->container['unusedAccessAge']) && ($this->container['unusedAccessAge'] < 1)) {
                $invalidProperties[] = "invalid value for 'unusedAccessAge', must be bigger than or equal to 1.";
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
    * Gets unusedAccessAge
    *  生成分析结果的预设天数。
    *
    * @return int|null
    */
    public function getUnusedAccessAge()
    {
        return $this->container['unusedAccessAge'];
    }

    /**
    * Sets unusedAccessAge
    *
    * @param int|null $unusedAccessAge 生成分析结果的预设天数。
    *
    * @return $this
    */
    public function setUnusedAccessAge($unusedAccessAge)
    {
        $this->container['unusedAccessAge'] = $unusedAccessAge;
        return $this;
    }

    /**
    * Gets unusedAnalysisRule
    *  unusedAnalysisRule
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedAnalysisRule|null
    */
    public function getUnusedAnalysisRule()
    {
        return $this->container['unusedAnalysisRule'];
    }

    /**
    * Sets unusedAnalysisRule
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedAnalysisRule|null $unusedAnalysisRule unusedAnalysisRule
    *
    * @return $this
    */
    public function setUnusedAnalysisRule($unusedAnalysisRule)
    {
        $this->container['unusedAnalysisRule'] = $unusedAnalysisRule;
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

