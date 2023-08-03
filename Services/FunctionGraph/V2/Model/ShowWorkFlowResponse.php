<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWorkFlowResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWorkFlowResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    * ltsGroupId  快速函数流日志组ID，仅快速模式函数流且日志级别不为NONE时
    * ltsStreamId  快速函数流日志流ID，仅快速模式函数流且日志级别不为NONE时返回。
    * definition  definition
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'workflowUrn' => 'string',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'createdBy' => 'string',
            'ltsGroupId' => 'string',
            'ltsStreamId' => 'string',
            'definition' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\WorkflowCreateBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    * ltsGroupId  快速函数流日志组ID，仅快速模式函数流且日志级别不为NONE时
    * ltsStreamId  快速函数流日志流ID，仅快速模式函数流且日志级别不为NONE时返回。
    * definition  definition
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'workflowUrn' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'createdBy' => null,
        'ltsGroupId' => null,
        'ltsStreamId' => null,
        'definition' => null
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
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    * ltsGroupId  快速函数流日志组ID，仅快速模式函数流且日志级别不为NONE时
    * ltsStreamId  快速函数流日志流ID，仅快速模式函数流且日志级别不为NONE时返回。
    * definition  definition
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'workflowUrn' => 'workflow_urn',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'createdBy' => 'created_by',
            'ltsGroupId' => 'lts_group_id',
            'ltsStreamId' => 'lts_stream_id',
            'definition' => 'definition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    * ltsGroupId  快速函数流日志组ID，仅快速模式函数流且日志级别不为NONE时
    * ltsStreamId  快速函数流日志流ID，仅快速模式函数流且日志级别不为NONE时返回。
    * definition  definition
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'workflowUrn' => 'setWorkflowUrn',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'createdBy' => 'setCreatedBy',
            'ltsGroupId' => 'setLtsGroupId',
            'ltsStreamId' => 'setLtsStreamId',
            'definition' => 'setDefinition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    * ltsGroupId  快速函数流日志组ID，仅快速模式函数流且日志级别不为NONE时
    * ltsStreamId  快速函数流日志流ID，仅快速模式函数流且日志级别不为NONE时返回。
    * definition  definition
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'workflowUrn' => 'getWorkflowUrn',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'createdBy' => 'getCreatedBy',
            'ltsGroupId' => 'getLtsGroupId',
            'ltsStreamId' => 'getLtsStreamId',
            'definition' => 'getDefinition'
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
        $this->container['workflowUrn'] = isset($data['workflowUrn']) ? $data['workflowUrn'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['ltsGroupId'] = isset($data['ltsGroupId']) ? $data['ltsGroupId'] : null;
        $this->container['ltsStreamId'] = isset($data['ltsStreamId']) ? $data['ltsStreamId'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workflowUrn']) && (mb_strlen($this->container['workflowUrn']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowUrn']) && (mb_strlen($this->container['workflowUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedTime']) && (mb_strlen($this->container['updatedTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updatedTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updatedTime']) && (mb_strlen($this->container['updatedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 0.";
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
    *  唯一标识ID，流程定义ID
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
    * @param string|null $id 唯一标识ID，流程定义ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets workflowUrn
    *  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    *
    * @return string|null
    */
    public function getWorkflowUrn()
    {
        return $this->container['workflowUrn'];
    }

    /**
    * Sets workflowUrn
    *
    * @param string|null $workflowUrn 函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    *
    * @return $this
    */
    public function setWorkflowUrn($workflowUrn)
    {
        $this->container['workflowUrn'] = $workflowUrn;
        return $this;
    }

    /**
    * Gets createdTime
    *  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets createdBy
    *  流程创建者
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 流程创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets ltsGroupId
    *  快速函数流日志组ID，仅快速模式函数流且日志级别不为NONE时
    *
    * @return string|null
    */
    public function getLtsGroupId()
    {
        return $this->container['ltsGroupId'];
    }

    /**
    * Sets ltsGroupId
    *
    * @param string|null $ltsGroupId 快速函数流日志组ID，仅快速模式函数流且日志级别不为NONE时
    *
    * @return $this
    */
    public function setLtsGroupId($ltsGroupId)
    {
        $this->container['ltsGroupId'] = $ltsGroupId;
        return $this;
    }

    /**
    * Gets ltsStreamId
    *  快速函数流日志流ID，仅快速模式函数流且日志级别不为NONE时返回。
    *
    * @return string|null
    */
    public function getLtsStreamId()
    {
        return $this->container['ltsStreamId'];
    }

    /**
    * Sets ltsStreamId
    *
    * @param string|null $ltsStreamId 快速函数流日志流ID，仅快速模式函数流且日志级别不为NONE时返回。
    *
    * @return $this
    */
    public function setLtsStreamId($ltsStreamId)
    {
        $this->container['ltsStreamId'] = $ltsStreamId;
        return $this;
    }

    /**
    * Gets definition
    *  definition
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\WorkflowCreateBody|null
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\WorkflowCreateBody|null $definition definition
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
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

