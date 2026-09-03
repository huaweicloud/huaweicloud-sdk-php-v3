<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskActionParamsV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskActionParamsV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionId  启停、调试动作（1为启动，0为停止，2为调试）
    * environmentGroupId  环境Id
    * planId  测试计划Id
    * taskIds  任务id列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionId' => 'int',
            'environmentGroupId' => 'string',
            'planId' => 'string',
            'taskIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionId  启停、调试动作（1为启动，0为停止，2为调试）
    * environmentGroupId  环境Id
    * planId  测试计划Id
    * taskIds  任务id列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionId' => 'int32',
        'environmentGroupId' => null,
        'planId' => null,
        'taskIds' => null
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
    * actionId  启停、调试动作（1为启动，0为停止，2为调试）
    * environmentGroupId  环境Id
    * planId  测试计划Id
    * taskIds  任务id列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionId' => 'action_id',
            'environmentGroupId' => 'environment_group_id',
            'planId' => 'plan_id',
            'taskIds' => 'taskIds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionId  启停、调试动作（1为启动，0为停止，2为调试）
    * environmentGroupId  环境Id
    * planId  测试计划Id
    * taskIds  任务id列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'actionId' => 'setActionId',
            'environmentGroupId' => 'setEnvironmentGroupId',
            'planId' => 'setPlanId',
            'taskIds' => 'setTaskIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionId  启停、调试动作（1为启动，0为停止，2为调试）
    * environmentGroupId  环境Id
    * planId  测试计划Id
    * taskIds  任务id列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'actionId' => 'getActionId',
            'environmentGroupId' => 'getEnvironmentGroupId',
            'planId' => 'getPlanId',
            'taskIds' => 'getTaskIds'
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
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['environmentGroupId'] = isset($data['environmentGroupId']) ? $data['environmentGroupId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['taskIds'] = isset($data['taskIds']) ? $data['taskIds'] : null;
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
    * Gets actionId
    *  启停、调试动作（1为启动，0为停止，2为调试）
    *
    * @return int|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param int|null $actionId 启停、调试动作（1为启动，0为停止，2为调试）
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets environmentGroupId
    *  环境Id
    *
    * @return string|null
    */
    public function getEnvironmentGroupId()
    {
        return $this->container['environmentGroupId'];
    }

    /**
    * Sets environmentGroupId
    *
    * @param string|null $environmentGroupId 环境Id
    *
    * @return $this
    */
    public function setEnvironmentGroupId($environmentGroupId)
    {
        $this->container['environmentGroupId'] = $environmentGroupId;
        return $this;
    }

    /**
    * Gets planId
    *  测试计划Id
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 测试计划Id
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets taskIds
    *  任务id列表信息
    *
    * @return string[]|null
    */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
    * Sets taskIds
    *
    * @param string[]|null $taskIds 任务id列表信息
    *
    * @return $this
    */
    public function setTaskIds($taskIds)
    {
        $this->container['taskIds'] = $taskIds;
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

