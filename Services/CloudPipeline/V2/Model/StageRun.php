<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StageRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StageRun';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  阶段ID
    * category  阶段类型
    * name  阶段名称
    * identifier  唯一标识
    * runAlways  是否总是运行
    * parallel  是否并行
    * isSelect  是否选中
    * sequence  序列号
    * dependsOn  依赖
    * condition  运行条件
    * status  状态
    * startTime  开始时间
    * endTime  结束时间
    * pre  阶段准入
    * post  阶段准出
    * jobs  任务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'category' => 'string',
            'name' => 'string',
            'identifier' => 'string',
            'runAlways' => 'bool',
            'parallel' => 'string',
            'isSelect' => 'bool',
            'sequence' => 'int',
            'dependsOn' => 'string[]',
            'condition' => 'string',
            'status' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'pre' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRun[]',
            'post' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRun[]',
            'jobs' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\JobRun[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  阶段ID
    * category  阶段类型
    * name  阶段名称
    * identifier  唯一标识
    * runAlways  是否总是运行
    * parallel  是否并行
    * isSelect  是否选中
    * sequence  序列号
    * dependsOn  依赖
    * condition  运行条件
    * status  状态
    * startTime  开始时间
    * endTime  结束时间
    * pre  阶段准入
    * post  阶段准出
    * jobs  任务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'category' => null,
        'name' => null,
        'identifier' => null,
        'runAlways' => null,
        'parallel' => null,
        'isSelect' => null,
        'sequence' => 'int32',
        'dependsOn' => null,
        'condition' => null,
        'status' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'pre' => null,
        'post' => null,
        'jobs' => null
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
    * id  阶段ID
    * category  阶段类型
    * name  阶段名称
    * identifier  唯一标识
    * runAlways  是否总是运行
    * parallel  是否并行
    * isSelect  是否选中
    * sequence  序列号
    * dependsOn  依赖
    * condition  运行条件
    * status  状态
    * startTime  开始时间
    * endTime  结束时间
    * pre  阶段准入
    * post  阶段准出
    * jobs  任务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'category' => 'category',
            'name' => 'name',
            'identifier' => 'identifier',
            'runAlways' => 'run_always',
            'parallel' => 'parallel',
            'isSelect' => 'is_select',
            'sequence' => 'sequence',
            'dependsOn' => 'depends_on',
            'condition' => 'condition',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'pre' => 'pre',
            'post' => 'post',
            'jobs' => 'jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  阶段ID
    * category  阶段类型
    * name  阶段名称
    * identifier  唯一标识
    * runAlways  是否总是运行
    * parallel  是否并行
    * isSelect  是否选中
    * sequence  序列号
    * dependsOn  依赖
    * condition  运行条件
    * status  状态
    * startTime  开始时间
    * endTime  结束时间
    * pre  阶段准入
    * post  阶段准出
    * jobs  任务
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'category' => 'setCategory',
            'name' => 'setName',
            'identifier' => 'setIdentifier',
            'runAlways' => 'setRunAlways',
            'parallel' => 'setParallel',
            'isSelect' => 'setIsSelect',
            'sequence' => 'setSequence',
            'dependsOn' => 'setDependsOn',
            'condition' => 'setCondition',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'pre' => 'setPre',
            'post' => 'setPost',
            'jobs' => 'setJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  阶段ID
    * category  阶段类型
    * name  阶段名称
    * identifier  唯一标识
    * runAlways  是否总是运行
    * parallel  是否并行
    * isSelect  是否选中
    * sequence  序列号
    * dependsOn  依赖
    * condition  运行条件
    * status  状态
    * startTime  开始时间
    * endTime  结束时间
    * pre  阶段准入
    * post  阶段准出
    * jobs  任务
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'category' => 'getCategory',
            'name' => 'getName',
            'identifier' => 'getIdentifier',
            'runAlways' => 'getRunAlways',
            'parallel' => 'getParallel',
            'isSelect' => 'getIsSelect',
            'sequence' => 'getSequence',
            'dependsOn' => 'getDependsOn',
            'condition' => 'getCondition',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'pre' => 'getPre',
            'post' => 'getPost',
            'jobs' => 'getJobs'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['runAlways'] = isset($data['runAlways']) ? $data['runAlways'] : null;
        $this->container['parallel'] = isset($data['parallel']) ? $data['parallel'] : null;
        $this->container['isSelect'] = isset($data['isSelect']) ? $data['isSelect'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['dependsOn'] = isset($data['dependsOn']) ? $data['dependsOn'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['pre'] = isset($data['pre']) ? $data['pre'] : null;
        $this->container['post'] = isset($data['post']) ? $data['post'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
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
    * Gets id
    *  阶段ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 阶段ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets category
    *  阶段类型
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 阶段类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets name
    *  阶段名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 阶段名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets identifier
    *  唯一标识
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier 唯一标识
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets runAlways
    *  是否总是运行
    *
    * @return bool|null
    */
    public function getRunAlways()
    {
        return $this->container['runAlways'];
    }

    /**
    * Sets runAlways
    *
    * @param bool|null $runAlways 是否总是运行
    *
    * @return $this
    */
    public function setRunAlways($runAlways)
    {
        $this->container['runAlways'] = $runAlways;
        return $this;
    }

    /**
    * Gets parallel
    *  是否并行
    *
    * @return string|null
    */
    public function getParallel()
    {
        return $this->container['parallel'];
    }

    /**
    * Sets parallel
    *
    * @param string|null $parallel 是否并行
    *
    * @return $this
    */
    public function setParallel($parallel)
    {
        $this->container['parallel'] = $parallel;
        return $this;
    }

    /**
    * Gets isSelect
    *  是否选中
    *
    * @return bool|null
    */
    public function getIsSelect()
    {
        return $this->container['isSelect'];
    }

    /**
    * Sets isSelect
    *
    * @param bool|null $isSelect 是否选中
    *
    * @return $this
    */
    public function setIsSelect($isSelect)
    {
        $this->container['isSelect'] = $isSelect;
        return $this;
    }

    /**
    * Gets sequence
    *  序列号
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 序列号
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets dependsOn
    *  依赖
    *
    * @return string[]|null
    */
    public function getDependsOn()
    {
        return $this->container['dependsOn'];
    }

    /**
    * Sets dependsOn
    *
    * @param string[]|null $dependsOn 依赖
    *
    * @return $this
    */
    public function setDependsOn($dependsOn)
    {
        $this->container['dependsOn'] = $dependsOn;
        return $this;
    }

    /**
    * Gets condition
    *  运行条件
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 运行条件
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets pre
    *  阶段准入
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRun[]|null
    */
    public function getPre()
    {
        return $this->container['pre'];
    }

    /**
    * Sets pre
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRun[]|null $pre 阶段准入
    *
    * @return $this
    */
    public function setPre($pre)
    {
        $this->container['pre'] = $pre;
        return $this;
    }

    /**
    * Gets post
    *  阶段准出
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRun[]|null
    */
    public function getPost()
    {
        return $this->container['post'];
    }

    /**
    * Sets post
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRun[]|null $post 阶段准出
    *
    * @return $this
    */
    public function setPost($post)
    {
        $this->container['post'] = $post;
        return $this;
    }

    /**
    * Gets jobs
    *  任务
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\JobRun[]|null
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\JobRun[]|null $jobs 任务
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
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

