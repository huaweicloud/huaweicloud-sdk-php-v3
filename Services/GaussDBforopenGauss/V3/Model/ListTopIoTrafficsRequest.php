<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTopIoTrafficsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTopIoTrafficsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。节点应为CN或者非日志角色的DN节点，并且节点状态为正常。
    * componentId  组件ID。组件应为CN或者非日志角色的DN组件。 DN：Data Node，和CN对应的概念。负责实际执行表数据的存储、查询操作。 CN：Coordinator Node，负责数据库系统元数据存储、查询任务的分解和部分执行，以及将DN中查询结果汇聚在一起。
    * topIoNum  期望查询数据库进程下TOP IO线程数（默认值为20）。接口返回TOP IO线程与会话信息关联后的结果，数量最大不超过该值。
    * sortCondition  TOP IO排序条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'nodeId' => 'string',
            'componentId' => 'string',
            'topIoNum' => 'int',
            'sortCondition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。节点应为CN或者非日志角色的DN节点，并且节点状态为正常。
    * componentId  组件ID。组件应为CN或者非日志角色的DN组件。 DN：Data Node，和CN对应的概念。负责实际执行表数据的存储、查询操作。 CN：Coordinator Node，负责数据库系统元数据存储、查询任务的分解和部分执行，以及将DN中查询结果汇聚在一起。
    * topIoNum  期望查询数据库进程下TOP IO线程数（默认值为20）。接口返回TOP IO线程与会话信息关联后的结果，数量最大不超过该值。
    * sortCondition  TOP IO排序条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'nodeId' => null,
        'componentId' => null,
        'topIoNum' => null,
        'sortCondition' => null
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
    * xLanguage  语言
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。节点应为CN或者非日志角色的DN节点，并且节点状态为正常。
    * componentId  组件ID。组件应为CN或者非日志角色的DN组件。 DN：Data Node，和CN对应的概念。负责实际执行表数据的存储、查询操作。 CN：Coordinator Node，负责数据库系统元数据存储、查询任务的分解和部分执行，以及将DN中查询结果汇聚在一起。
    * topIoNum  期望查询数据库进程下TOP IO线程数（默认值为20）。接口返回TOP IO线程与会话信息关联后的结果，数量最大不超过该值。
    * sortCondition  TOP IO排序条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'componentId' => 'component_id',
            'topIoNum' => 'top_io_num',
            'sortCondition' => 'sort_condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。节点应为CN或者非日志角色的DN节点，并且节点状态为正常。
    * componentId  组件ID。组件应为CN或者非日志角色的DN组件。 DN：Data Node，和CN对应的概念。负责实际执行表数据的存储、查询操作。 CN：Coordinator Node，负责数据库系统元数据存储、查询任务的分解和部分执行，以及将DN中查询结果汇聚在一起。
    * topIoNum  期望查询数据库进程下TOP IO线程数（默认值为20）。接口返回TOP IO线程与会话信息关联后的结果，数量最大不超过该值。
    * sortCondition  TOP IO排序条件
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'componentId' => 'setComponentId',
            'topIoNum' => 'setTopIoNum',
            'sortCondition' => 'setSortCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。节点应为CN或者非日志角色的DN节点，并且节点状态为正常。
    * componentId  组件ID。组件应为CN或者非日志角色的DN组件。 DN：Data Node，和CN对应的概念。负责实际执行表数据的存储、查询操作。 CN：Coordinator Node，负责数据库系统元数据存储、查询任务的分解和部分执行，以及将DN中查询结果汇聚在一起。
    * topIoNum  期望查询数据库进程下TOP IO线程数（默认值为20）。接口返回TOP IO线程与会话信息关联后的结果，数量最大不超过该值。
    * sortCondition  TOP IO排序条件
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'componentId' => 'getComponentId',
            'topIoNum' => 'getTopIoNum',
            'sortCondition' => 'getSortCondition'
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
    const SORT_CONDITION_READ = 'read';
    const SORT_CONDITION_WRITE = 'write';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortConditionAllowableValues()
    {
        return [
            self::SORT_CONDITION_READ,
            self::SORT_CONDITION_WRITE,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['topIoNum'] = isset($data['topIoNum']) ? $data['topIoNum'] : null;
        $this->container['sortCondition'] = isset($data['sortCondition']) ? $data['sortCondition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
        }
            $allowedValues = $this->getSortConditionAllowableValues();
                if (!is_null($this->container['sortCondition']) && !in_array($this->container['sortCondition'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortCondition', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets xLanguage
    *  语言
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID，严格匹配UUID规则。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，严格匹配UUID规则。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。节点应为CN或者非日志角色的DN节点，并且节点状态为正常。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID。节点应为CN或者非日志角色的DN节点，并且节点状态为正常。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets componentId
    *  组件ID。组件应为CN或者非日志角色的DN组件。 DN：Data Node，和CN对应的概念。负责实际执行表数据的存储、查询操作。 CN：Coordinator Node，负责数据库系统元数据存储、查询任务的分解和部分执行，以及将DN中查询结果汇聚在一起。
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId 组件ID。组件应为CN或者非日志角色的DN组件。 DN：Data Node，和CN对应的概念。负责实际执行表数据的存储、查询操作。 CN：Coordinator Node，负责数据库系统元数据存储、查询任务的分解和部分执行，以及将DN中查询结果汇聚在一起。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets topIoNum
    *  期望查询数据库进程下TOP IO线程数（默认值为20）。接口返回TOP IO线程与会话信息关联后的结果，数量最大不超过该值。
    *
    * @return int|null
    */
    public function getTopIoNum()
    {
        return $this->container['topIoNum'];
    }

    /**
    * Sets topIoNum
    *
    * @param int|null $topIoNum 期望查询数据库进程下TOP IO线程数（默认值为20）。接口返回TOP IO线程与会话信息关联后的结果，数量最大不超过该值。
    *
    * @return $this
    */
    public function setTopIoNum($topIoNum)
    {
        $this->container['topIoNum'] = $topIoNum;
        return $this;
    }

    /**
    * Gets sortCondition
    *  TOP IO排序条件
    *
    * @return string|null
    */
    public function getSortCondition()
    {
        return $this->container['sortCondition'];
    }

    /**
    * Sets sortCondition
    *
    * @param string|null $sortCondition TOP IO排序条件
    *
    * @return $this
    */
    public function setSortCondition($sortCondition)
    {
        $this->container['sortCondition'] = $sortCondition;
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

