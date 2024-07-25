<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrchestrationMap implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrchestrationMap';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mapParamList  用于映射编排后参数的列表配置，当orchestration_strategy=list时必填，列表长度范围为0-3000。  列表的取值只支持英文，数字，中划线和下划线，1-128个字符。
    * mapParamRange  mapParamRange
    * mappedParamValue  编排后的参数取值，只支持英文和数字，1-128个字符。 当orchestration_strategy为hash、head_n、tail_n，或者is_preprocessing为false时，非必填，其他情况必填。
    * interceptLength  截取长度，取值范围为1-100，当策略类型为head_n和tail_n时必填，当截取长度大于参数长度时，截取参数的结果为完整参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mapParamList' => 'string[]',
            'mapParamRange' => '\HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMapParamRange',
            'mappedParamValue' => 'string',
            'interceptLength' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mapParamList  用于映射编排后参数的列表配置，当orchestration_strategy=list时必填，列表长度范围为0-3000。  列表的取值只支持英文，数字，中划线和下划线，1-128个字符。
    * mapParamRange  mapParamRange
    * mappedParamValue  编排后的参数取值，只支持英文和数字，1-128个字符。 当orchestration_strategy为hash、head_n、tail_n，或者is_preprocessing为false时，非必填，其他情况必填。
    * interceptLength  截取长度，取值范围为1-100，当策略类型为head_n和tail_n时必填，当截取长度大于参数长度时，截取参数的结果为完整参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mapParamList' => null,
        'mapParamRange' => null,
        'mappedParamValue' => null,
        'interceptLength' => null
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
    * mapParamList  用于映射编排后参数的列表配置，当orchestration_strategy=list时必填，列表长度范围为0-3000。  列表的取值只支持英文，数字，中划线和下划线，1-128个字符。
    * mapParamRange  mapParamRange
    * mappedParamValue  编排后的参数取值，只支持英文和数字，1-128个字符。 当orchestration_strategy为hash、head_n、tail_n，或者is_preprocessing为false时，非必填，其他情况必填。
    * interceptLength  截取长度，取值范围为1-100，当策略类型为head_n和tail_n时必填，当截取长度大于参数长度时，截取参数的结果为完整参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mapParamList' => 'map_param_list',
            'mapParamRange' => 'map_param_range',
            'mappedParamValue' => 'mapped_param_value',
            'interceptLength' => 'intercept_length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mapParamList  用于映射编排后参数的列表配置，当orchestration_strategy=list时必填，列表长度范围为0-3000。  列表的取值只支持英文，数字，中划线和下划线，1-128个字符。
    * mapParamRange  mapParamRange
    * mappedParamValue  编排后的参数取值，只支持英文和数字，1-128个字符。 当orchestration_strategy为hash、head_n、tail_n，或者is_preprocessing为false时，非必填，其他情况必填。
    * interceptLength  截取长度，取值范围为1-100，当策略类型为head_n和tail_n时必填，当截取长度大于参数长度时，截取参数的结果为完整参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'mapParamList' => 'setMapParamList',
            'mapParamRange' => 'setMapParamRange',
            'mappedParamValue' => 'setMappedParamValue',
            'interceptLength' => 'setInterceptLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mapParamList  用于映射编排后参数的列表配置，当orchestration_strategy=list时必填，列表长度范围为0-3000。  列表的取值只支持英文，数字，中划线和下划线，1-128个字符。
    * mapParamRange  mapParamRange
    * mappedParamValue  编排后的参数取值，只支持英文和数字，1-128个字符。 当orchestration_strategy为hash、head_n、tail_n，或者is_preprocessing为false时，非必填，其他情况必填。
    * interceptLength  截取长度，取值范围为1-100，当策略类型为head_n和tail_n时必填，当截取长度大于参数长度时，截取参数的结果为完整参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'mapParamList' => 'getMapParamList',
            'mapParamRange' => 'getMapParamRange',
            'mappedParamValue' => 'getMappedParamValue',
            'interceptLength' => 'getInterceptLength'
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
        $this->container['mapParamList'] = isset($data['mapParamList']) ? $data['mapParamList'] : null;
        $this->container['mapParamRange'] = isset($data['mapParamRange']) ? $data['mapParamRange'] : null;
        $this->container['mappedParamValue'] = isset($data['mappedParamValue']) ? $data['mappedParamValue'] : null;
        $this->container['interceptLength'] = isset($data['interceptLength']) ? $data['interceptLength'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['mappedParamValue']) && (mb_strlen($this->container['mappedParamValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'mappedParamValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['mappedParamValue']) && (mb_strlen($this->container['mappedParamValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'mappedParamValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mappedParamValue']) && !preg_match("/^[a-zA-Z0-9]{1,128}$/", $this->container['mappedParamValue'])) {
                $invalidProperties[] = "invalid value for 'mappedParamValue', must be conform to the pattern /^[a-zA-Z0-9]{1,128}$/.";
            }
            if (!is_null($this->container['interceptLength']) && ($this->container['interceptLength'] > 100)) {
                $invalidProperties[] = "invalid value for 'interceptLength', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['interceptLength']) && ($this->container['interceptLength'] < 1)) {
                $invalidProperties[] = "invalid value for 'interceptLength', must be bigger than or equal to 1.";
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
    * Gets mapParamList
    *  用于映射编排后参数的列表配置，当orchestration_strategy=list时必填，列表长度范围为0-3000。  列表的取值只支持英文，数字，中划线和下划线，1-128个字符。
    *
    * @return string[]|null
    */
    public function getMapParamList()
    {
        return $this->container['mapParamList'];
    }

    /**
    * Sets mapParamList
    *
    * @param string[]|null $mapParamList 用于映射编排后参数的列表配置，当orchestration_strategy=list时必填，列表长度范围为0-3000。  列表的取值只支持英文，数字，中划线和下划线，1-128个字符。
    *
    * @return $this
    */
    public function setMapParamList($mapParamList)
    {
        $this->container['mapParamList'] = $mapParamList;
        return $this;
    }

    /**
    * Gets mapParamRange
    *  mapParamRange
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMapParamRange|null
    */
    public function getMapParamRange()
    {
        return $this->container['mapParamRange'];
    }

    /**
    * Sets mapParamRange
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationMapParamRange|null $mapParamRange mapParamRange
    *
    * @return $this
    */
    public function setMapParamRange($mapParamRange)
    {
        $this->container['mapParamRange'] = $mapParamRange;
        return $this;
    }

    /**
    * Gets mappedParamValue
    *  编排后的参数取值，只支持英文和数字，1-128个字符。 当orchestration_strategy为hash、head_n、tail_n，或者is_preprocessing为false时，非必填，其他情况必填。
    *
    * @return string|null
    */
    public function getMappedParamValue()
    {
        return $this->container['mappedParamValue'];
    }

    /**
    * Sets mappedParamValue
    *
    * @param string|null $mappedParamValue 编排后的参数取值，只支持英文和数字，1-128个字符。 当orchestration_strategy为hash、head_n、tail_n，或者is_preprocessing为false时，非必填，其他情况必填。
    *
    * @return $this
    */
    public function setMappedParamValue($mappedParamValue)
    {
        $this->container['mappedParamValue'] = $mappedParamValue;
        return $this;
    }

    /**
    * Gets interceptLength
    *  截取长度，取值范围为1-100，当策略类型为head_n和tail_n时必填，当截取长度大于参数长度时，截取参数的结果为完整参数。
    *
    * @return int|null
    */
    public function getInterceptLength()
    {
        return $this->container['interceptLength'];
    }

    /**
    * Sets interceptLength
    *
    * @param int|null $interceptLength 截取长度，取值范围为1-100，当策略类型为head_n和tail_n时必填，当截取长度大于参数长度时，截取参数的结果为完整参数。
    *
    * @return $this
    */
    public function setInterceptLength($interceptLength)
    {
        $this->container['interceptLength'] = $interceptLength;
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

