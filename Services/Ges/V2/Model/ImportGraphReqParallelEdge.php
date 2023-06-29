<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportGraphReqParallelEdge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportGraphReq_parallel_edge';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  处理方式，取值为allow，ignore和override，默认为allow。  - allow表示允许重复边。 - ignore表示忽略之后的重复边。 - override表示覆盖之前的重复边。 图规格为（一千亿边）的图暂不支持该参数。
    * ignoreLabel  重复边的定义，是否忽略Label。取值为true或者false，默认取true。  - true 表示重复边定义不包含Label，即用<源点，终点>标记一条边，不包含Label。 - false 表示重复边定义包含Label，即用<源点，终点，Label>标记一条边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'ignoreLabel' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  处理方式，取值为allow，ignore和override，默认为allow。  - allow表示允许重复边。 - ignore表示忽略之后的重复边。 - override表示覆盖之前的重复边。 图规格为（一千亿边）的图暂不支持该参数。
    * ignoreLabel  重复边的定义，是否忽略Label。取值为true或者false，默认取true。  - true 表示重复边定义不包含Label，即用<源点，终点>标记一条边，不包含Label。 - false 表示重复边定义包含Label，即用<源点，终点，Label>标记一条边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'ignoreLabel' => null
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
    * action  处理方式，取值为allow，ignore和override，默认为allow。  - allow表示允许重复边。 - ignore表示忽略之后的重复边。 - override表示覆盖之前的重复边。 图规格为（一千亿边）的图暂不支持该参数。
    * ignoreLabel  重复边的定义，是否忽略Label。取值为true或者false，默认取true。  - true 表示重复边定义不包含Label，即用<源点，终点>标记一条边，不包含Label。 - false 表示重复边定义包含Label，即用<源点，终点，Label>标记一条边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'ignoreLabel' => 'ignore_label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  处理方式，取值为allow，ignore和override，默认为allow。  - allow表示允许重复边。 - ignore表示忽略之后的重复边。 - override表示覆盖之前的重复边。 图规格为（一千亿边）的图暂不支持该参数。
    * ignoreLabel  重复边的定义，是否忽略Label。取值为true或者false，默认取true。  - true 表示重复边定义不包含Label，即用<源点，终点>标记一条边，不包含Label。 - false 表示重复边定义包含Label，即用<源点，终点，Label>标记一条边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'ignoreLabel' => 'setIgnoreLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  处理方式，取值为allow，ignore和override，默认为allow。  - allow表示允许重复边。 - ignore表示忽略之后的重复边。 - override表示覆盖之前的重复边。 图规格为（一千亿边）的图暂不支持该参数。
    * ignoreLabel  重复边的定义，是否忽略Label。取值为true或者false，默认取true。  - true 表示重复边定义不包含Label，即用<源点，终点>标记一条边，不包含Label。 - false 表示重复边定义包含Label，即用<源点，终点，Label>标记一条边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'ignoreLabel' => 'getIgnoreLabel'
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
        $this->container['ignoreLabel'] = isset($data['ignoreLabel']) ? $data['ignoreLabel'] : null;
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
    * Gets action
    *  处理方式，取值为allow，ignore和override，默认为allow。  - allow表示允许重复边。 - ignore表示忽略之后的重复边。 - override表示覆盖之前的重复边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 处理方式，取值为allow，ignore和override，默认为allow。  - allow表示允许重复边。 - ignore表示忽略之后的重复边。 - override表示覆盖之前的重复边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets ignoreLabel
    *  重复边的定义，是否忽略Label。取值为true或者false，默认取true。  - true 表示重复边定义不包含Label，即用<源点，终点>标记一条边，不包含Label。 - false 表示重复边定义包含Label，即用<源点，终点，Label>标记一条边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @return bool|null
    */
    public function getIgnoreLabel()
    {
        return $this->container['ignoreLabel'];
    }

    /**
    * Sets ignoreLabel
    *
    * @param bool|null $ignoreLabel 重复边的定义，是否忽略Label。取值为true或者false，默认取true。  - true 表示重复边定义不包含Label，即用<源点，终点>标记一条边，不包含Label。 - false 表示重复边定义包含Label，即用<源点，终点，Label>标记一条边。 图规格为（一千亿边）的图暂不支持该参数。
    *
    * @return $this
    */
    public function setIgnoreLabel($ignoreLabel)
    {
        $this->container['ignoreLabel'] = $ignoreLabel;
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

