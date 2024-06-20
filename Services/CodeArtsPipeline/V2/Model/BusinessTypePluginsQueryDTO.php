<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessTypePluginsQueryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessTypePluginsQueryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * useCondition  用于区分插件为流水线可使用/模板可使用, 可选pipeline/template
    * inputRepoType  用于区分源的代码仓类型codehub/gitlab/github等
    * inputSourceType  用于区分单源/多源的情况
    * businessType  业务类型
    * regexName  名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'useCondition' => 'string',
            'inputRepoType' => 'string',
            'inputSourceType' => 'string',
            'businessType' => 'string',
            'regexName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * useCondition  用于区分插件为流水线可使用/模板可使用, 可选pipeline/template
    * inputRepoType  用于区分源的代码仓类型codehub/gitlab/github等
    * inputSourceType  用于区分单源/多源的情况
    * businessType  业务类型
    * regexName  名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'useCondition' => null,
        'inputRepoType' => null,
        'inputSourceType' => null,
        'businessType' => null,
        'regexName' => null
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
    * useCondition  用于区分插件为流水线可使用/模板可使用, 可选pipeline/template
    * inputRepoType  用于区分源的代码仓类型codehub/gitlab/github等
    * inputSourceType  用于区分单源/多源的情况
    * businessType  业务类型
    * regexName  名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'useCondition' => 'use_condition',
            'inputRepoType' => 'input_repo_type',
            'inputSourceType' => 'input_source_type',
            'businessType' => 'business_type',
            'regexName' => 'regex_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * useCondition  用于区分插件为流水线可使用/模板可使用, 可选pipeline/template
    * inputRepoType  用于区分源的代码仓类型codehub/gitlab/github等
    * inputSourceType  用于区分单源/多源的情况
    * businessType  业务类型
    * regexName  名称
    *
    * @var string[]
    */
    protected static $setters = [
            'useCondition' => 'setUseCondition',
            'inputRepoType' => 'setInputRepoType',
            'inputSourceType' => 'setInputSourceType',
            'businessType' => 'setBusinessType',
            'regexName' => 'setRegexName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * useCondition  用于区分插件为流水线可使用/模板可使用, 可选pipeline/template
    * inputRepoType  用于区分源的代码仓类型codehub/gitlab/github等
    * inputSourceType  用于区分单源/多源的情况
    * businessType  业务类型
    * regexName  名称
    *
    * @var string[]
    */
    protected static $getters = [
            'useCondition' => 'getUseCondition',
            'inputRepoType' => 'getInputRepoType',
            'inputSourceType' => 'getInputSourceType',
            'businessType' => 'getBusinessType',
            'regexName' => 'getRegexName'
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
        $this->container['useCondition'] = isset($data['useCondition']) ? $data['useCondition'] : null;
        $this->container['inputRepoType'] = isset($data['inputRepoType']) ? $data['inputRepoType'] : null;
        $this->container['inputSourceType'] = isset($data['inputSourceType']) ? $data['inputSourceType'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['regexName'] = isset($data['regexName']) ? $data['regexName'] : null;
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
    * Gets useCondition
    *  用于区分插件为流水线可使用/模板可使用, 可选pipeline/template
    *
    * @return string|null
    */
    public function getUseCondition()
    {
        return $this->container['useCondition'];
    }

    /**
    * Sets useCondition
    *
    * @param string|null $useCondition 用于区分插件为流水线可使用/模板可使用, 可选pipeline/template
    *
    * @return $this
    */
    public function setUseCondition($useCondition)
    {
        $this->container['useCondition'] = $useCondition;
        return $this;
    }

    /**
    * Gets inputRepoType
    *  用于区分源的代码仓类型codehub/gitlab/github等
    *
    * @return string|null
    */
    public function getInputRepoType()
    {
        return $this->container['inputRepoType'];
    }

    /**
    * Sets inputRepoType
    *
    * @param string|null $inputRepoType 用于区分源的代码仓类型codehub/gitlab/github等
    *
    * @return $this
    */
    public function setInputRepoType($inputRepoType)
    {
        $this->container['inputRepoType'] = $inputRepoType;
        return $this;
    }

    /**
    * Gets inputSourceType
    *  用于区分单源/多源的情况
    *
    * @return string|null
    */
    public function getInputSourceType()
    {
        return $this->container['inputSourceType'];
    }

    /**
    * Sets inputSourceType
    *
    * @param string|null $inputSourceType 用于区分单源/多源的情况
    *
    * @return $this
    */
    public function setInputSourceType($inputSourceType)
    {
        $this->container['inputSourceType'] = $inputSourceType;
        return $this;
    }

    /**
    * Gets businessType
    *  业务类型
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 业务类型
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets regexName
    *  名称
    *
    * @return string|null
    */
    public function getRegexName()
    {
        return $this->container['regexName'];
    }

    /**
    * Sets regexName
    *
    * @param string|null $regexName 名称
    *
    * @return $this
    */
    public function setRegexName($regexName)
    {
        $this->container['regexName'] = $regexName;
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

