<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowModuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowModuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  应用ID
    * appVersion  应用版本
    * state  模块运行状态
    * controlStatus  模块管控状态
    * nodeId  边缘节点（同deviceID）ID
    * moduleName  模块名称
    * moduleId  模块ID
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * appType  应用类型
    * functionType  功能类型
    * containerSettings  containerSettings
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'appVersion' => 'string',
            'state' => 'string',
            'controlStatus' => 'string',
            'nodeId' => 'string',
            'moduleName' => 'string',
            'moduleId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'appType' => 'string',
            'functionType' => 'string',
            'containerSettings' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ModuleContainerSettingsResDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  应用ID
    * appVersion  应用版本
    * state  模块运行状态
    * controlStatus  模块管控状态
    * nodeId  边缘节点（同deviceID）ID
    * moduleName  模块名称
    * moduleId  模块ID
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * appType  应用类型
    * functionType  功能类型
    * containerSettings  containerSettings
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'appVersion' => null,
        'state' => null,
        'controlStatus' => null,
        'nodeId' => null,
        'moduleName' => null,
        'moduleId' => null,
        'createTime' => null,
        'updateTime' => null,
        'appType' => null,
        'functionType' => null,
        'containerSettings' => null
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
    * edgeAppId  应用ID
    * appVersion  应用版本
    * state  模块运行状态
    * controlStatus  模块管控状态
    * nodeId  边缘节点（同deviceID）ID
    * moduleName  模块名称
    * moduleId  模块ID
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * appType  应用类型
    * functionType  功能类型
    * containerSettings  containerSettings
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'appVersion' => 'app_version',
            'state' => 'state',
            'controlStatus' => 'control_status',
            'nodeId' => 'node_id',
            'moduleName' => 'module_name',
            'moduleId' => 'module_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'appType' => 'app_type',
            'functionType' => 'function_type',
            'containerSettings' => 'container_settings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  应用ID
    * appVersion  应用版本
    * state  模块运行状态
    * controlStatus  模块管控状态
    * nodeId  边缘节点（同deviceID）ID
    * moduleName  模块名称
    * moduleId  模块ID
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * appType  应用类型
    * functionType  功能类型
    * containerSettings  containerSettings
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'appVersion' => 'setAppVersion',
            'state' => 'setState',
            'controlStatus' => 'setControlStatus',
            'nodeId' => 'setNodeId',
            'moduleName' => 'setModuleName',
            'moduleId' => 'setModuleId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'appType' => 'setAppType',
            'functionType' => 'setFunctionType',
            'containerSettings' => 'setContainerSettings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  应用ID
    * appVersion  应用版本
    * state  模块运行状态
    * controlStatus  模块管控状态
    * nodeId  边缘节点（同deviceID）ID
    * moduleName  模块名称
    * moduleId  模块ID
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * appType  应用类型
    * functionType  功能类型
    * containerSettings  containerSettings
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'appVersion' => 'getAppVersion',
            'state' => 'getState',
            'controlStatus' => 'getControlStatus',
            'nodeId' => 'getNodeId',
            'moduleName' => 'getModuleName',
            'moduleId' => 'getModuleId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'appType' => 'getAppType',
            'functionType' => 'getFunctionType',
            'containerSettings' => 'getContainerSettings'
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
    const STATE_PENDING = 'PENDING';
    const STATE_PENDING_DELETE = 'PENDING_DELETE';
    const STATE_DELETE_FAILED = 'DELETE_FAILED';
    const STATE_RUNNING = 'RUNNING';
    const STATE_FAILED = 'FAILED';
    const STATE_SUCCEEDED = 'SUCCEEDED';
    const STATE_UNKNOWN = 'UNKNOWN';
    const STATE_DELETE_SUCCESS = 'DELETE_SUCCESS';
    const STATE_STOPPED = 'STOPPED';
    const APP_TYPE_SYSTEM_REQUIRED = 'SYSTEM_REQUIRED';
    const APP_TYPE_SYSTEM_OPTIONAL = 'SYSTEM_OPTIONAL';
    const APP_TYPE_USER = 'USER';
    const FUNCTION_TYPE_DATA_PROCESSING = 'DATA_PROCESSING';
    const FUNCTION_TYPE_PROTOCOL_PARSING = 'PROTOCOL_PARSING';
    const FUNCTION_TYPE_ON_PREMISE_INTEGRATION = 'ON_PREMISE_INTEGRATION';
    const FUNCTION_TYPE_GATEWAY_MANAGER = 'GATEWAY_MANAGER';
    const FUNCTION_TYPE_COMPOSITE_APPLICATION = 'COMPOSITE_APPLICATION';
    const FUNCTION_TYPE_DATA_COLLECTION = 'DATA_COLLECTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_PENDING_DELETE,
            self::STATE_DELETE_FAILED,
            self::STATE_RUNNING,
            self::STATE_FAILED,
            self::STATE_SUCCEEDED,
            self::STATE_UNKNOWN,
            self::STATE_DELETE_SUCCESS,
            self::STATE_STOPPED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppTypeAllowableValues()
    {
        return [
            self::APP_TYPE_SYSTEM_REQUIRED,
            self::APP_TYPE_SYSTEM_OPTIONAL,
            self::APP_TYPE_USER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFunctionTypeAllowableValues()
    {
        return [
            self::FUNCTION_TYPE_DATA_PROCESSING,
            self::FUNCTION_TYPE_PROTOCOL_PARSING,
            self::FUNCTION_TYPE_ON_PREMISE_INTEGRATION,
            self::FUNCTION_TYPE_GATEWAY_MANAGER,
            self::FUNCTION_TYPE_COMPOSITE_APPLICATION,
            self::FUNCTION_TYPE_DATA_COLLECTION,
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
        $this->container['edgeAppId'] = isset($data['edgeAppId']) ? $data['edgeAppId'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['controlStatus'] = isset($data['controlStatus']) ? $data['controlStatus'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['functionType'] = isset($data['functionType']) ? $data['functionType'] : null;
        $this->container['containerSettings'] = isset($data['containerSettings']) ? $data['containerSettings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) < 0)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleName']) && (mb_strlen($this->container['moduleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'moduleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['moduleName']) && (mb_strlen($this->container['moduleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAppTypeAllowableValues();
                if (!is_null($this->container['appType']) && !in_array($this->container['appType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFunctionTypeAllowableValues();
                if (!is_null($this->container['functionType']) && !in_array($this->container['functionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'functionType', must be one of '%s'",
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
    * Gets edgeAppId
    *  应用ID
    *
    * @return string|null
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string|null $edgeAppId 应用ID
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets appVersion
    *  应用版本
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 应用版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets state
    *  模块运行状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 模块运行状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets controlStatus
    *  模块管控状态
    *
    * @return string|null
    */
    public function getControlStatus()
    {
        return $this->container['controlStatus'];
    }

    /**
    * Sets controlStatus
    *
    * @param string|null $controlStatus 模块管控状态
    *
    * @return $this
    */
    public function setControlStatus($controlStatus)
    {
        $this->container['controlStatus'] = $controlStatus;
        return $this;
    }

    /**
    * Gets nodeId
    *  边缘节点（同deviceID）ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 边缘节点（同deviceID）ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets moduleName
    *  模块名称
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName 模块名称
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块ID
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块ID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后一次修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 最后一次修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets appType
    *  应用类型
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType 应用类型
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets functionType
    *  功能类型
    *
    * @return string|null
    */
    public function getFunctionType()
    {
        return $this->container['functionType'];
    }

    /**
    * Sets functionType
    *
    * @param string|null $functionType 功能类型
    *
    * @return $this
    */
    public function setFunctionType($functionType)
    {
        $this->container['functionType'] = $functionType;
        return $this;
    }

    /**
    * Gets containerSettings
    *  containerSettings
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ModuleContainerSettingsResDTO|null
    */
    public function getContainerSettings()
    {
        return $this->container['containerSettings'];
    }

    /**
    * Sets containerSettings
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ModuleContainerSettingsResDTO|null $containerSettings containerSettings
    *
    * @return $this
    */
    public function setContainerSettings($containerSettings)
    {
        $this->container['containerSettings'] = $containerSettings;
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

