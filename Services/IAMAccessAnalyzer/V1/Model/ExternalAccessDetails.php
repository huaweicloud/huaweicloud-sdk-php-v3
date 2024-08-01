<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalAccessDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalAccessDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  允许外部主体使用的操作。
    * condition  分析的策略语句中导致访问分析结果的条件。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string[]',
            'condition' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[]',
            'isPublic' => 'bool',
            'principal' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal',
            'sources' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  允许外部主体使用的操作。
    * condition  分析的策略语句中导致访问分析结果的条件。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'condition' => null,
        'isPublic' => null,
        'principal' => null,
        'sources' => null
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
    * action  允许外部主体使用的操作。
    * condition  分析的策略语句中导致访问分析结果的条件。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'condition' => 'condition',
            'isPublic' => 'is_public',
            'principal' => 'principal',
            'sources' => 'sources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  允许外部主体使用的操作。
    * condition  分析的策略语句中导致访问分析结果的条件。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'condition' => 'setCondition',
            'isPublic' => 'setIsPublic',
            'principal' => 'setPrincipal',
            'sources' => 'setSources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  允许外部主体使用的操作。
    * condition  分析的策略语句中导致访问分析结果的条件。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'condition' => 'getCondition',
            'isPublic' => 'getIsPublic',
            'principal' => 'getPrincipal',
            'sources' => 'getSources'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['isPublic'] === null) {
            $invalidProperties[] = "'isPublic' can't be null";
        }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
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
    * Gets action
    *  允许外部主体使用的操作。
    *
    * @return string[]
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string[] $action 允许外部主体使用的操作。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets condition
    *  分析的策略语句中导致访问分析结果的条件。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[]
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[] $condition 分析的策略语句中导致访问分析结果的条件。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets isPublic
    *  表示生成访问分析结果的策略是否允许公共访问资源。
    *
    * @return bool
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool $isPublic 表示生成访问分析结果的策略是否允许公共访问资源。
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets principal
    *  principal
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal
    */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
    * Sets principal
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal $principal principal
    *
    * @return $this
    */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;
        return $this;
    }

    /**
    * Gets sources
    *  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]|null $sources 访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
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

