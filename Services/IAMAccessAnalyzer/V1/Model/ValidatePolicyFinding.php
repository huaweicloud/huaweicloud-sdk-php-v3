<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidatePolicyFinding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidatePolicyFinding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * findingDetails  一条本地化消息提供了如何解决该问题的指导。
    * findingType  影响级别。  安全警告：策略允许的范围过大。  错误：策略不符合策略语法规则。  警告：非安全问题，策略不符合策略编写最佳实践。  建议：改进策略，不影响访问范围。
    * issueCode  问题码提供了与此查找结果关联的问题的标识符。
    * learnMoreLink  指向与此查找结果关联的相关文档的链接。
    * locations  策略文档中与查找结果相关的位置列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'findingDetails' => 'string',
            'findingType' => 'string',
            'issueCode' => 'string',
            'learnMoreLink' => 'string',
            'locations' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Location[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * findingDetails  一条本地化消息提供了如何解决该问题的指导。
    * findingType  影响级别。  安全警告：策略允许的范围过大。  错误：策略不符合策略语法规则。  警告：非安全问题，策略不符合策略编写最佳实践。  建议：改进策略，不影响访问范围。
    * issueCode  问题码提供了与此查找结果关联的问题的标识符。
    * learnMoreLink  指向与此查找结果关联的相关文档的链接。
    * locations  策略文档中与查找结果相关的位置列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'findingDetails' => null,
        'findingType' => null,
        'issueCode' => null,
        'learnMoreLink' => null,
        'locations' => null
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
    * findingDetails  一条本地化消息提供了如何解决该问题的指导。
    * findingType  影响级别。  安全警告：策略允许的范围过大。  错误：策略不符合策略语法规则。  警告：非安全问题，策略不符合策略编写最佳实践。  建议：改进策略，不影响访问范围。
    * issueCode  问题码提供了与此查找结果关联的问题的标识符。
    * learnMoreLink  指向与此查找结果关联的相关文档的链接。
    * locations  策略文档中与查找结果相关的位置列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'findingDetails' => 'finding_details',
            'findingType' => 'finding_type',
            'issueCode' => 'issue_code',
            'learnMoreLink' => 'learn_more_link',
            'locations' => 'locations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * findingDetails  一条本地化消息提供了如何解决该问题的指导。
    * findingType  影响级别。  安全警告：策略允许的范围过大。  错误：策略不符合策略语法规则。  警告：非安全问题，策略不符合策略编写最佳实践。  建议：改进策略，不影响访问范围。
    * issueCode  问题码提供了与此查找结果关联的问题的标识符。
    * learnMoreLink  指向与此查找结果关联的相关文档的链接。
    * locations  策略文档中与查找结果相关的位置列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'findingDetails' => 'setFindingDetails',
            'findingType' => 'setFindingType',
            'issueCode' => 'setIssueCode',
            'learnMoreLink' => 'setLearnMoreLink',
            'locations' => 'setLocations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * findingDetails  一条本地化消息提供了如何解决该问题的指导。
    * findingType  影响级别。  安全警告：策略允许的范围过大。  错误：策略不符合策略语法规则。  警告：非安全问题，策略不符合策略编写最佳实践。  建议：改进策略，不影响访问范围。
    * issueCode  问题码提供了与此查找结果关联的问题的标识符。
    * learnMoreLink  指向与此查找结果关联的相关文档的链接。
    * locations  策略文档中与查找结果相关的位置列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'findingDetails' => 'getFindingDetails',
            'findingType' => 'getFindingType',
            'issueCode' => 'getIssueCode',
            'learnMoreLink' => 'getLearnMoreLink',
            'locations' => 'getLocations'
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
    const FINDING_TYPE_SECURITY_WARNING = 'security_warning';
    const FINDING_TYPE_ERROR = 'error';
    const FINDING_TYPE_WARNING = 'warning';
    const FINDING_TYPE_SUGGESTION = 'suggestion';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFindingTypeAllowableValues()
    {
        return [
            self::FINDING_TYPE_SECURITY_WARNING,
            self::FINDING_TYPE_ERROR,
            self::FINDING_TYPE_WARNING,
            self::FINDING_TYPE_SUGGESTION,
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
        $this->container['findingDetails'] = isset($data['findingDetails']) ? $data['findingDetails'] : null;
        $this->container['findingType'] = isset($data['findingType']) ? $data['findingType'] : null;
        $this->container['issueCode'] = isset($data['issueCode']) ? $data['issueCode'] : null;
        $this->container['learnMoreLink'] = isset($data['learnMoreLink']) ? $data['learnMoreLink'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['findingDetails'] === null) {
            $invalidProperties[] = "'findingDetails' can't be null";
        }
        if ($this->container['findingType'] === null) {
            $invalidProperties[] = "'findingType' can't be null";
        }
            $allowedValues = $this->getFindingTypeAllowableValues();
                if (!is_null($this->container['findingType']) && !in_array($this->container['findingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'findingType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['issueCode'] === null) {
            $invalidProperties[] = "'issueCode' can't be null";
        }
        if ($this->container['learnMoreLink'] === null) {
            $invalidProperties[] = "'learnMoreLink' can't be null";
        }
        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
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
    * Gets findingDetails
    *  一条本地化消息提供了如何解决该问题的指导。
    *
    * @return string
    */
    public function getFindingDetails()
    {
        return $this->container['findingDetails'];
    }

    /**
    * Sets findingDetails
    *
    * @param string $findingDetails 一条本地化消息提供了如何解决该问题的指导。
    *
    * @return $this
    */
    public function setFindingDetails($findingDetails)
    {
        $this->container['findingDetails'] = $findingDetails;
        return $this;
    }

    /**
    * Gets findingType
    *  影响级别。  安全警告：策略允许的范围过大。  错误：策略不符合策略语法规则。  警告：非安全问题，策略不符合策略编写最佳实践。  建议：改进策略，不影响访问范围。
    *
    * @return string
    */
    public function getFindingType()
    {
        return $this->container['findingType'];
    }

    /**
    * Sets findingType
    *
    * @param string $findingType 影响级别。  安全警告：策略允许的范围过大。  错误：策略不符合策略语法规则。  警告：非安全问题，策略不符合策略编写最佳实践。  建议：改进策略，不影响访问范围。
    *
    * @return $this
    */
    public function setFindingType($findingType)
    {
        $this->container['findingType'] = $findingType;
        return $this;
    }

    /**
    * Gets issueCode
    *  问题码提供了与此查找结果关联的问题的标识符。
    *
    * @return string
    */
    public function getIssueCode()
    {
        return $this->container['issueCode'];
    }

    /**
    * Sets issueCode
    *
    * @param string $issueCode 问题码提供了与此查找结果关联的问题的标识符。
    *
    * @return $this
    */
    public function setIssueCode($issueCode)
    {
        $this->container['issueCode'] = $issueCode;
        return $this;
    }

    /**
    * Gets learnMoreLink
    *  指向与此查找结果关联的相关文档的链接。
    *
    * @return string
    */
    public function getLearnMoreLink()
    {
        return $this->container['learnMoreLink'];
    }

    /**
    * Sets learnMoreLink
    *
    * @param string $learnMoreLink 指向与此查找结果关联的相关文档的链接。
    *
    * @return $this
    */
    public function setLearnMoreLink($learnMoreLink)
    {
        $this->container['learnMoreLink'] = $learnMoreLink;
        return $this;
    }

    /**
    * Gets locations
    *  策略文档中与查找结果相关的位置列表。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Location[]
    */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
    * Sets locations
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Location[] $locations 策略文档中与查找结果相关的位置列表。
    *
    * @return $this
    */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;
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

