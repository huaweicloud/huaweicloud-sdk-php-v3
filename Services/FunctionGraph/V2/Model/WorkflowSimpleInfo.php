<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowSimpleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowSimpleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableStreamResponse  函数流是否返回流式数据
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * name  流程定义名称
    * description  流程定义描述
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableStreamResponse' => 'bool',
            'id' => 'string',
            'workflowUrn' => 'string',
            'name' => 'string',
            'description' => 'string',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'createdBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableStreamResponse  函数流是否返回流式数据
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * name  流程定义名称
    * description  流程定义描述
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableStreamResponse' => null,
        'id' => null,
        'workflowUrn' => null,
        'name' => null,
        'description' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'createdBy' => null
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
    * enableStreamResponse  函数流是否返回流式数据
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * name  流程定义名称
    * description  流程定义描述
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableStreamResponse' => 'enable_stream_response',
            'id' => 'id',
            'workflowUrn' => 'workflow_urn',
            'name' => 'name',
            'description' => 'description',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'createdBy' => 'created_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableStreamResponse  函数流是否返回流式数据
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * name  流程定义名称
    * description  流程定义描述
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    *
    * @var string[]
    */
    protected static $setters = [
            'enableStreamResponse' => 'setEnableStreamResponse',
            'id' => 'setId',
            'workflowUrn' => 'setWorkflowUrn',
            'name' => 'setName',
            'description' => 'setDescription',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'createdBy' => 'setCreatedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableStreamResponse  函数流是否返回流式数据
    * id  唯一标识ID，流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * name  流程定义名称
    * description  流程定义描述
    * createdTime  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * updatedTime  流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程创建者
    *
    * @var string[]
    */
    protected static $getters = [
            'enableStreamResponse' => 'getEnableStreamResponse',
            'id' => 'getId',
            'workflowUrn' => 'getWorkflowUrn',
            'name' => 'getName',
            'description' => 'getDescription',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'createdBy' => 'getCreatedBy'
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
        $this->container['enableStreamResponse'] = isset($data['enableStreamResponse']) ? $data['enableStreamResponse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['workflowUrn'] = isset($data['workflowUrn']) ? $data['workflowUrn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableStreamResponse'] === null) {
            $invalidProperties[] = "'enableStreamResponse' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workflowUrn'] === null) {
            $invalidProperties[] = "'workflowUrn' can't be null";
        }
            if ((mb_strlen($this->container['workflowUrn']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workflowUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdTime'] === null) {
            $invalidProperties[] = "'createdTime' can't be null";
        }
            if ((mb_strlen($this->container['createdTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['createdTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['updatedTime'] === null) {
            $invalidProperties[] = "'updatedTime' can't be null";
        }
            if ((mb_strlen($this->container['updatedTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updatedTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['updatedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
            if ((mb_strlen($this->container['createdBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['createdBy']) < 0)) {
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
    * Gets enableStreamResponse
    *  函数流是否返回流式数据
    *
    * @return bool
    */
    public function getEnableStreamResponse()
    {
        return $this->container['enableStreamResponse'];
    }

    /**
    * Sets enableStreamResponse
    *
    * @param bool $enableStreamResponse 函数流是否返回流式数据
    *
    * @return $this
    */
    public function setEnableStreamResponse($enableStreamResponse)
    {
        $this->container['enableStreamResponse'] = $enableStreamResponse;
        return $this;
    }

    /**
    * Gets id
    *  唯一标识ID，流程定义ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 唯一标识ID，流程定义ID
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
    * @return string
    */
    public function getWorkflowUrn()
    {
        return $this->container['workflowUrn'];
    }

    /**
    * Sets workflowUrn
    *
    * @param string $workflowUrn 函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    *
    * @return $this
    */
    public function setWorkflowUrn($workflowUrn)
    {
        $this->container['workflowUrn'] = $workflowUrn;
        return $this;
    }

    /**
    * Gets name
    *  流程定义名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 流程定义名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  流程定义描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 流程定义描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdTime
    *  流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @return string
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string $createdTime 流程创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
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
    * @return string
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string $updatedTime 流程修改时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
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
    * @return string
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string $createdBy 流程创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
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

