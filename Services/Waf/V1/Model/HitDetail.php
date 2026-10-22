<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HitDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HitDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskType  威胁类型
    * subRiskType  子威胁类型
    * prob  置信度分数
    * segments  命中规则的片段
    * extraInfo  额外检测信息，不同风险类型下字段不固定
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskType' => 'string',
            'subRiskType' => 'string[]',
            'prob' => 'float',
            'segments' => '\HuaweiCloud\SDK\Waf\V1\Model\SegmentInfo[]',
            'extraInfo' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskType  威胁类型
    * subRiskType  子威胁类型
    * prob  置信度分数
    * segments  命中规则的片段
    * extraInfo  额外检测信息，不同风险类型下字段不固定
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskType' => null,
        'subRiskType' => null,
        'prob' => 'float',
        'segments' => null,
        'extraInfo' => null
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
    * riskType  威胁类型
    * subRiskType  子威胁类型
    * prob  置信度分数
    * segments  命中规则的片段
    * extraInfo  额外检测信息，不同风险类型下字段不固定
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskType' => 'risk_type',
            'subRiskType' => 'sub_risk_type',
            'prob' => 'prob',
            'segments' => 'segments',
            'extraInfo' => 'extra_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskType  威胁类型
    * subRiskType  子威胁类型
    * prob  置信度分数
    * segments  命中规则的片段
    * extraInfo  额外检测信息，不同风险类型下字段不固定
    *
    * @var string[]
    */
    protected static $setters = [
            'riskType' => 'setRiskType',
            'subRiskType' => 'setSubRiskType',
            'prob' => 'setProb',
            'segments' => 'setSegments',
            'extraInfo' => 'setExtraInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskType  威胁类型
    * subRiskType  子威胁类型
    * prob  置信度分数
    * segments  命中规则的片段
    * extraInfo  额外检测信息，不同风险类型下字段不固定
    *
    * @var string[]
    */
    protected static $getters = [
            'riskType' => 'getRiskType',
            'subRiskType' => 'getSubRiskType',
            'prob' => 'getProb',
            'segments' => 'getSegments',
            'extraInfo' => 'getExtraInfo'
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
        $this->container['riskType'] = isset($data['riskType']) ? $data['riskType'] : null;
        $this->container['subRiskType'] = isset($data['subRiskType']) ? $data['subRiskType'] : null;
        $this->container['prob'] = isset($data['prob']) ? $data['prob'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
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
    * Gets riskType
    *  威胁类型
    *
    * @return string|null
    */
    public function getRiskType()
    {
        return $this->container['riskType'];
    }

    /**
    * Sets riskType
    *
    * @param string|null $riskType 威胁类型
    *
    * @return $this
    */
    public function setRiskType($riskType)
    {
        $this->container['riskType'] = $riskType;
        return $this;
    }

    /**
    * Gets subRiskType
    *  子威胁类型
    *
    * @return string[]|null
    */
    public function getSubRiskType()
    {
        return $this->container['subRiskType'];
    }

    /**
    * Sets subRiskType
    *
    * @param string[]|null $subRiskType 子威胁类型
    *
    * @return $this
    */
    public function setSubRiskType($subRiskType)
    {
        $this->container['subRiskType'] = $subRiskType;
        return $this;
    }

    /**
    * Gets prob
    *  置信度分数
    *
    * @return float|null
    */
    public function getProb()
    {
        return $this->container['prob'];
    }

    /**
    * Sets prob
    *
    * @param float|null $prob 置信度分数
    *
    * @return $this
    */
    public function setProb($prob)
    {
        $this->container['prob'] = $prob;
        return $this;
    }

    /**
    * Gets segments
    *  命中规则的片段
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SegmentInfo[]|null
    */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
    * Sets segments
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SegmentInfo[]|null $segments 命中规则的片段
    *
    * @return $this
    */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;
        return $this;
    }

    /**
    * Gets extraInfo
    *  额外检测信息，不同风险类型下字段不固定
    *
    * @return object|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param object|null $extraInfo 额外检测信息，不同风险类型下字段不固定
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
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

