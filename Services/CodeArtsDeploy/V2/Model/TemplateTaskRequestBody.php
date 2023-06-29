<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * projectName  项目名称
    * templateId  部署模板id
    * taskName  应用名称
    * slaveClusterId  自定义slave资源池id
    * configs  部署参数类
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'projectName' => 'string',
            'templateId' => 'string',
            'taskName' => 'string',
            'slaveClusterId' => 'string',
            'configs' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ConfigInfoDO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * projectName  项目名称
    * templateId  部署模板id
    * taskName  应用名称
    * slaveClusterId  自定义slave资源池id
    * configs  部署参数类
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'projectName' => null,
        'templateId' => null,
        'taskName' => null,
        'slaveClusterId' => null,
        'configs' => null
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
    * projectId  项目ID
    * projectName  项目名称
    * templateId  部署模板id
    * taskName  应用名称
    * slaveClusterId  自定义slave资源池id
    * configs  部署参数类
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'templateId' => 'template_id',
            'taskName' => 'task_name',
            'slaveClusterId' => 'slave_cluster_id',
            'configs' => 'configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * projectName  项目名称
    * templateId  部署模板id
    * taskName  应用名称
    * slaveClusterId  自定义slave资源池id
    * configs  部署参数类
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'templateId' => 'setTemplateId',
            'taskName' => 'setTaskName',
            'slaveClusterId' => 'setSlaveClusterId',
            'configs' => 'setConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * projectName  项目名称
    * templateId  部署模板id
    * taskName  应用名称
    * slaveClusterId  自定义slave资源池id
    * configs  部署参数类
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'templateId' => 'getTemplateId',
            'taskName' => 'getTaskName',
            'slaveClusterId' => 'getSlaveClusterId',
            'configs' => 'getConfigs'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
            if ((mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['projectName']) < 3)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
            if ((mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['taskName']) < 3)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/.";
            }
            if (!is_null($this->container['slaveClusterId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['slaveClusterId'])) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets templateId
    *  部署模板id
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 部署模板id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets taskName
    *  应用名称
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 应用名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  自定义slave资源池id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId 自定义slave资源池id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets configs
    *  部署参数类
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ConfigInfoDO[]|null
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ConfigInfoDO[]|null $configs 部署参数类
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
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

