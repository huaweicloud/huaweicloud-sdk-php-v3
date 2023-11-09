<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPlaybookInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPlaybookInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  剧本实例ID
    * name  剧本实例名称
    * projectId  项目ID
    * playbook  playbook
    * dataclass  dataclass
    * dataobject  dataobject
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * startTime  创建时间
    * endTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'playbook' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PlaybookInfoRef',
            'dataclass' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataclassInfoRef',
            'dataobject' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataobjectInfo',
            'status' => 'string',
            'triggerType' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  剧本实例ID
    * name  剧本实例名称
    * projectId  项目ID
    * playbook  playbook
    * dataclass  dataclass
    * dataobject  dataobject
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * startTime  创建时间
    * endTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'playbook' => null,
        'dataclass' => null,
        'dataobject' => null,
        'status' => null,
        'triggerType' => null,
        'startTime' => null,
        'endTime' => null,
        'xRequestId' => null
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
    * id  剧本实例ID
    * name  剧本实例名称
    * projectId  项目ID
    * playbook  playbook
    * dataclass  dataclass
    * dataobject  dataobject
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * startTime  创建时间
    * endTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'playbook' => 'playbook',
            'dataclass' => 'dataclass',
            'dataobject' => 'dataobject',
            'status' => 'status',
            'triggerType' => 'trigger_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  剧本实例ID
    * name  剧本实例名称
    * projectId  项目ID
    * playbook  playbook
    * dataclass  dataclass
    * dataobject  dataobject
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * startTime  创建时间
    * endTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'playbook' => 'setPlaybook',
            'dataclass' => 'setDataclass',
            'dataobject' => 'setDataobject',
            'status' => 'setStatus',
            'triggerType' => 'setTriggerType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  剧本实例ID
    * name  剧本实例名称
    * projectId  项目ID
    * playbook  playbook
    * dataclass  dataclass
    * dataobject  dataobject
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * startTime  创建时间
    * endTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'playbook' => 'getPlaybook',
            'dataclass' => 'getDataclass',
            'dataobject' => 'getDataobject',
            'status' => 'getStatus',
            'triggerType' => 'getTriggerType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'xRequestId' => 'getXRequestId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['playbook'] = isset($data['playbook']) ? $data['playbook'] : null;
        $this->container['dataclass'] = isset($data['dataclass']) ? $data['dataclass'] : null;
        $this->container['dataobject'] = isset($data['dataobject']) ? $data['dataobject'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
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
    *  剧本实例ID
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
    * @param string|null $id 剧本实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  剧本实例名称
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
    * @param string|null $name 剧本实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets playbook
    *  playbook
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PlaybookInfoRef|null
    */
    public function getPlaybook()
    {
        return $this->container['playbook'];
    }

    /**
    * Sets playbook
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PlaybookInfoRef|null $playbook playbook
    *
    * @return $this
    */
    public function setPlaybook($playbook)
    {
        $this->container['playbook'] = $playbook;
        return $this;
    }

    /**
    * Gets dataclass
    *  dataclass
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataclassInfoRef|null
    */
    public function getDataclass()
    {
        return $this->container['dataclass'];
    }

    /**
    * Sets dataclass
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataclassInfoRef|null $dataclass dataclass
    *
    * @return $this
    */
    public function setDataclass($dataclass)
    {
        $this->container['dataclass'] = $dataclass;
        return $this;
    }

    /**
    * Gets dataobject
    *  dataobject
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataobjectInfo|null
    */
    public function getDataobject()
    {
        return $this->container['dataobject'];
    }

    /**
    * Sets dataobject
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataobjectInfo|null $dataobject dataobject
    *
    * @return $this
    */
    public function setDataobject($dataobject)
    {
        $this->container['dataobject'] = $dataobject;
        return $this;
    }

    /**
    * Gets status
    *  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
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
    * @param string|null $status 剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets startTime
    *  创建时间
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
    * @param string|null $startTime 创建时间
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
    *  更新时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 更新时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

