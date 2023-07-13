<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartDeployTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartDeployTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  部署记录id
    * taskId  部署任务id
    * jobName  执行任务名称
    * appComponentList  应用和AOM应用组件对应关系
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'taskId' => 'string',
            'jobName' => 'string',
            'appComponentList' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  部署记录id
    * taskId  部署任务id
    * jobName  执行任务名称
    * appComponentList  应用和AOM应用组件对应关系
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'taskId' => null,
        'jobName' => null,
        'appComponentList' => null
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
    * id  部署记录id
    * taskId  部署任务id
    * jobName  执行任务名称
    * appComponentList  应用和AOM应用组件对应关系
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'taskId' => 'task_id',
            'jobName' => 'job_name',
            'appComponentList' => 'app_component_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  部署记录id
    * taskId  部署任务id
    * jobName  执行任务名称
    * appComponentList  应用和AOM应用组件对应关系
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'taskId' => 'setTaskId',
            'jobName' => 'setJobName',
            'appComponentList' => 'setAppComponentList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  部署记录id
    * taskId  部署任务id
    * jobName  执行任务名称
    * appComponentList  应用和AOM应用组件对应关系
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'taskId' => 'getTaskId',
            'jobName' => 'getJobName',
            'appComponentList' => 'getAppComponentList'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['appComponentList'] = isset($data['appComponentList']) ? $data['appComponentList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 55)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 55.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 45)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 45.";
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
    * Gets id
    *  部署记录id
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
    * @param string|null $id 部署记录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets taskId
    *  部署任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 部署任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets jobName
    *  执行任务名称
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 执行任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets appComponentList
    *  应用和AOM应用组件对应关系
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]|null
    */
    public function getAppComponentList()
    {
        return $this->container['appComponentList'];
    }

    /**
    * Sets appComponentList
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]|null $appComponentList 应用和AOM应用组件对应关系
    *
    * @return $this
    */
    public function setAppComponentList($appComponentList)
    {
        $this->container['appComponentList'] = $appComponentList;
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

