<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareTaskParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareTaskParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareTaskId  取消对比任务必填。
    * type  对比任务模式。取值： - object：对象对比。 - lines：行数对比。 - contents：内容对比。
    * startTime  定时启动时间，时间戳格式。
    * option  对比策略。
    * dbObject  对比选择对象。
    * dataProcessInfo  更新数据加工规则请求体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareTaskId' => 'string',
            'type' => 'string',
            'startTime' => 'string',
            'option' => 'map[string,string]',
            'dbObject' => 'map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]',
            'dataProcessInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\DataProcessInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareTaskId  取消对比任务必填。
    * type  对比任务模式。取值： - object：对象对比。 - lines：行数对比。 - contents：内容对比。
    * startTime  定时启动时间，时间戳格式。
    * option  对比策略。
    * dbObject  对比选择对象。
    * dataProcessInfo  更新数据加工规则请求体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareTaskId' => null,
        'type' => null,
        'startTime' => null,
        'option' => null,
        'dbObject' => null,
        'dataProcessInfo' => null
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
    * compareTaskId  取消对比任务必填。
    * type  对比任务模式。取值： - object：对象对比。 - lines：行数对比。 - contents：内容对比。
    * startTime  定时启动时间，时间戳格式。
    * option  对比策略。
    * dbObject  对比选择对象。
    * dataProcessInfo  更新数据加工规则请求体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareTaskId' => 'compare_task_id',
            'type' => 'type',
            'startTime' => 'start_time',
            'option' => 'option',
            'dbObject' => 'db_object',
            'dataProcessInfo' => 'data_process_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareTaskId  取消对比任务必填。
    * type  对比任务模式。取值： - object：对象对比。 - lines：行数对比。 - contents：内容对比。
    * startTime  定时启动时间，时间戳格式。
    * option  对比策略。
    * dbObject  对比选择对象。
    * dataProcessInfo  更新数据加工规则请求体
    *
    * @var string[]
    */
    protected static $setters = [
            'compareTaskId' => 'setCompareTaskId',
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'option' => 'setOption',
            'dbObject' => 'setDbObject',
            'dataProcessInfo' => 'setDataProcessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareTaskId  取消对比任务必填。
    * type  对比任务模式。取值： - object：对象对比。 - lines：行数对比。 - contents：内容对比。
    * startTime  定时启动时间，时间戳格式。
    * option  对比策略。
    * dbObject  对比选择对象。
    * dataProcessInfo  更新数据加工规则请求体
    *
    * @var string[]
    */
    protected static $getters = [
            'compareTaskId' => 'getCompareTaskId',
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'option' => 'getOption',
            'dbObject' => 'getDbObject',
            'dataProcessInfo' => 'getDataProcessInfo'
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
    const TYPE_OBJECT = 'object';
    const TYPE_LINES = 'lines';
    const TYPE_CONTENTS = 'contents';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OBJECT,
            self::TYPE_LINES,
            self::TYPE_CONTENTS,
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
        $this->container['compareTaskId'] = isset($data['compareTaskId']) ? $data['compareTaskId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['dbObject'] = isset($data['dbObject']) ? $data['dbObject'] : null;
        $this->container['dataProcessInfo'] = isset($data['dataProcessInfo']) ? $data['dataProcessInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets compareTaskId
    *  取消对比任务必填。
    *
    * @return string|null
    */
    public function getCompareTaskId()
    {
        return $this->container['compareTaskId'];
    }

    /**
    * Sets compareTaskId
    *
    * @param string|null $compareTaskId 取消对比任务必填。
    *
    * @return $this
    */
    public function setCompareTaskId($compareTaskId)
    {
        $this->container['compareTaskId'] = $compareTaskId;
        return $this;
    }

    /**
    * Gets type
    *  对比任务模式。取值： - object：对象对比。 - lines：行数对比。 - contents：内容对比。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 对比任务模式。取值： - object：对象对比。 - lines：行数对比。 - contents：内容对比。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  定时启动时间，时间戳格式。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 定时启动时间，时间戳格式。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets option
    *  对比策略。
    *
    * @return map[string,string]|null
    */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
    * Sets option
    *
    * @param map[string,string]|null $option 对比策略。
    *
    * @return $this
    */
    public function setOption($option)
    {
        $this->container['option'] = $option;
        return $this;
    }

    /**
    * Gets dbObject
    *  对比选择对象。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]|null
    */
    public function getDbObject()
    {
        return $this->container['dbObject'];
    }

    /**
    * Sets dbObject
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]|null $dbObject 对比选择对象。
    *
    * @return $this
    */
    public function setDbObject($dbObject)
    {
        $this->container['dbObject'] = $dbObject;
        return $this;
    }

    /**
    * Gets dataProcessInfo
    *  更新数据加工规则请求体
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DataProcessInfo[]|null
    */
    public function getDataProcessInfo()
    {
        return $this->container['dataProcessInfo'];
    }

    /**
    * Sets dataProcessInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DataProcessInfo[]|null $dataProcessInfo 更新数据加工规则请求体
    *
    * @return $this
    */
    public function setDataProcessInfo($dataProcessInfo)
    {
        $this->container['dataProcessInfo'] = $dataProcessInfo;
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

