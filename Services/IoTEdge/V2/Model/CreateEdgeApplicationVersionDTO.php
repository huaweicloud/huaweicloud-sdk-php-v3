<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEdgeApplicationVersionDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEdgeApplicationVersionDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  应用版本
    * description  应用描述
    * sdkVersion  应用集成的边缘SDK版本
    * deployType  应用部署类型，分为docker容器部署类型和process进程部署类型，兼容之前数据，此字段可以为空，为空情况为docker类型
    * deployMultiInstance  是否允许部署多实例
    * containerSettings  containerSettings
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * arch  架构
    * command  启动命令
    * args  启动参数
    * outputs  应用输出路由端点
    * inputs  应用输入路由
    * services  应用实现的服务列表
    * supplier  驱动厂商
    * tplId  模板id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'description' => 'string',
            'sdkVersion' => 'string',
            'deployType' => 'string',
            'deployMultiInstance' => 'bool',
            'containerSettings' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerSettingsDTO',
            'livenessProbe' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ProbeDTO',
            'readinessProbe' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ProbeDTO',
            'arch' => 'object',
            'command' => 'object',
            'args' => 'object',
            'outputs' => 'object',
            'inputs' => 'object',
            'services' => 'object',
            'supplier' => 'string',
            'tplId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  应用版本
    * description  应用描述
    * sdkVersion  应用集成的边缘SDK版本
    * deployType  应用部署类型，分为docker容器部署类型和process进程部署类型，兼容之前数据，此字段可以为空，为空情况为docker类型
    * deployMultiInstance  是否允许部署多实例
    * containerSettings  containerSettings
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * arch  架构
    * command  启动命令
    * args  启动参数
    * outputs  应用输出路由端点
    * inputs  应用输入路由
    * services  应用实现的服务列表
    * supplier  驱动厂商
    * tplId  模板id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'description' => null,
        'sdkVersion' => null,
        'deployType' => null,
        'deployMultiInstance' => null,
        'containerSettings' => null,
        'livenessProbe' => null,
        'readinessProbe' => null,
        'arch' => null,
        'command' => null,
        'args' => null,
        'outputs' => null,
        'inputs' => null,
        'services' => null,
        'supplier' => null,
        'tplId' => null
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
    * version  应用版本
    * description  应用描述
    * sdkVersion  应用集成的边缘SDK版本
    * deployType  应用部署类型，分为docker容器部署类型和process进程部署类型，兼容之前数据，此字段可以为空，为空情况为docker类型
    * deployMultiInstance  是否允许部署多实例
    * containerSettings  containerSettings
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * arch  架构
    * command  启动命令
    * args  启动参数
    * outputs  应用输出路由端点
    * inputs  应用输入路由
    * services  应用实现的服务列表
    * supplier  驱动厂商
    * tplId  模板id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'description' => 'description',
            'sdkVersion' => 'sdk_version',
            'deployType' => 'deploy_type',
            'deployMultiInstance' => 'deploy_multi_instance',
            'containerSettings' => 'container_settings',
            'livenessProbe' => 'liveness_probe',
            'readinessProbe' => 'readiness_probe',
            'arch' => 'arch',
            'command' => 'command',
            'args' => 'args',
            'outputs' => 'outputs',
            'inputs' => 'inputs',
            'services' => 'services',
            'supplier' => 'supplier',
            'tplId' => 'tpl_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  应用版本
    * description  应用描述
    * sdkVersion  应用集成的边缘SDK版本
    * deployType  应用部署类型，分为docker容器部署类型和process进程部署类型，兼容之前数据，此字段可以为空，为空情况为docker类型
    * deployMultiInstance  是否允许部署多实例
    * containerSettings  containerSettings
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * arch  架构
    * command  启动命令
    * args  启动参数
    * outputs  应用输出路由端点
    * inputs  应用输入路由
    * services  应用实现的服务列表
    * supplier  驱动厂商
    * tplId  模板id
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'description' => 'setDescription',
            'sdkVersion' => 'setSdkVersion',
            'deployType' => 'setDeployType',
            'deployMultiInstance' => 'setDeployMultiInstance',
            'containerSettings' => 'setContainerSettings',
            'livenessProbe' => 'setLivenessProbe',
            'readinessProbe' => 'setReadinessProbe',
            'arch' => 'setArch',
            'command' => 'setCommand',
            'args' => 'setArgs',
            'outputs' => 'setOutputs',
            'inputs' => 'setInputs',
            'services' => 'setServices',
            'supplier' => 'setSupplier',
            'tplId' => 'setTplId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  应用版本
    * description  应用描述
    * sdkVersion  应用集成的边缘SDK版本
    * deployType  应用部署类型，分为docker容器部署类型和process进程部署类型，兼容之前数据，此字段可以为空，为空情况为docker类型
    * deployMultiInstance  是否允许部署多实例
    * containerSettings  containerSettings
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * arch  架构
    * command  启动命令
    * args  启动参数
    * outputs  应用输出路由端点
    * inputs  应用输入路由
    * services  应用实现的服务列表
    * supplier  驱动厂商
    * tplId  模板id
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'description' => 'getDescription',
            'sdkVersion' => 'getSdkVersion',
            'deployType' => 'getDeployType',
            'deployMultiInstance' => 'getDeployMultiInstance',
            'containerSettings' => 'getContainerSettings',
            'livenessProbe' => 'getLivenessProbe',
            'readinessProbe' => 'getReadinessProbe',
            'arch' => 'getArch',
            'command' => 'getCommand',
            'args' => 'getArgs',
            'outputs' => 'getOutputs',
            'inputs' => 'getInputs',
            'services' => 'getServices',
            'supplier' => 'getSupplier',
            'tplId' => 'getTplId'
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
    const DEPLOY_TYPE_DOCKER = 'docker';
    const DEPLOY_TYPE_PROCESS = 'process';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeployTypeAllowableValues()
    {
        return [
            self::DEPLOY_TYPE_DOCKER,
            self::DEPLOY_TYPE_PROCESS,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sdkVersion'] = isset($data['sdkVersion']) ? $data['sdkVersion'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['deployMultiInstance'] = isset($data['deployMultiInstance']) ? $data['deployMultiInstance'] : null;
        $this->container['containerSettings'] = isset($data['containerSettings']) ? $data['containerSettings'] : null;
        $this->container['livenessProbe'] = isset($data['livenessProbe']) ? $data['livenessProbe'] : null;
        $this->container['readinessProbe'] = isset($data['readinessProbe']) ? $data['readinessProbe'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['tplId'] = isset($data['tplId']) ? $data['tplId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_.]*$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^[A-Za-z0-9-_.]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['sdkVersion']) && (mb_strlen($this->container['sdkVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'sdkVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sdkVersion']) && (mb_strlen($this->container['sdkVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'sdkVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sdkVersion']) && !preg_match("/^[A-Za-z0-9-_.]*$/", $this->container['sdkVersion'])) {
                $invalidProperties[] = "invalid value for 'sdkVersion', must be conform to the pattern /^[A-Za-z0-9-_.]*$/.";
            }
            $allowedValues = $this->getDeployTypeAllowableValues();
                if (!is_null($this->container['deployType']) && !in_array($this->container['deployType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deployType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['deployType']) && (mb_strlen($this->container['deployType']) > 64)) {
                $invalidProperties[] = "invalid value for 'deployType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deployType']) && (mb_strlen($this->container['deployType']) < 0)) {
                $invalidProperties[] = "invalid value for 'deployType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['containerSettings'] === null) {
            $invalidProperties[] = "'containerSettings' can't be null";
        }
        if ($this->container['arch'] === null) {
            $invalidProperties[] = "'arch' can't be null";
        }
            if (!is_null($this->container['supplier']) && (mb_strlen($this->container['supplier']) > 128)) {
                $invalidProperties[] = "invalid value for 'supplier', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['supplier']) && (mb_strlen($this->container['supplier']) < 1)) {
                $invalidProperties[] = "invalid value for 'supplier', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['supplier']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['supplier'])) {
                $invalidProperties[] = "invalid value for 'supplier', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['tplId']) && (mb_strlen($this->container['tplId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tplId']) && (mb_strlen($this->container['tplId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tplId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['tplId'])) {
                $invalidProperties[] = "invalid value for 'tplId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
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
    * Gets version
    *  应用版本
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 应用版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets description
    *  应用描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sdkVersion
    *  应用集成的边缘SDK版本
    *
    * @return string|null
    */
    public function getSdkVersion()
    {
        return $this->container['sdkVersion'];
    }

    /**
    * Sets sdkVersion
    *
    * @param string|null $sdkVersion 应用集成的边缘SDK版本
    *
    * @return $this
    */
    public function setSdkVersion($sdkVersion)
    {
        $this->container['sdkVersion'] = $sdkVersion;
        return $this;
    }

    /**
    * Gets deployType
    *  应用部署类型，分为docker容器部署类型和process进程部署类型，兼容之前数据，此字段可以为空，为空情况为docker类型
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType 应用部署类型，分为docker容器部署类型和process进程部署类型，兼容之前数据，此字段可以为空，为空情况为docker类型
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets deployMultiInstance
    *  是否允许部署多实例
    *
    * @return bool|null
    */
    public function getDeployMultiInstance()
    {
        return $this->container['deployMultiInstance'];
    }

    /**
    * Sets deployMultiInstance
    *
    * @param bool|null $deployMultiInstance 是否允许部署多实例
    *
    * @return $this
    */
    public function setDeployMultiInstance($deployMultiInstance)
    {
        $this->container['deployMultiInstance'] = $deployMultiInstance;
        return $this;
    }

    /**
    * Gets containerSettings
    *  containerSettings
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerSettingsDTO
    */
    public function getContainerSettings()
    {
        return $this->container['containerSettings'];
    }

    /**
    * Sets containerSettings
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerSettingsDTO $containerSettings containerSettings
    *
    * @return $this
    */
    public function setContainerSettings($containerSettings)
    {
        $this->container['containerSettings'] = $containerSettings;
        return $this;
    }

    /**
    * Gets livenessProbe
    *  livenessProbe
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ProbeDTO|null
    */
    public function getLivenessProbe()
    {
        return $this->container['livenessProbe'];
    }

    /**
    * Sets livenessProbe
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ProbeDTO|null $livenessProbe livenessProbe
    *
    * @return $this
    */
    public function setLivenessProbe($livenessProbe)
    {
        $this->container['livenessProbe'] = $livenessProbe;
        return $this;
    }

    /**
    * Gets readinessProbe
    *  readinessProbe
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ProbeDTO|null
    */
    public function getReadinessProbe()
    {
        return $this->container['readinessProbe'];
    }

    /**
    * Sets readinessProbe
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ProbeDTO|null $readinessProbe readinessProbe
    *
    * @return $this
    */
    public function setReadinessProbe($readinessProbe)
    {
        $this->container['readinessProbe'] = $readinessProbe;
        return $this;
    }

    /**
    * Gets arch
    *  架构
    *
    * @return object
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param object $arch 架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets command
    *  启动命令
    *
    * @return object|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param object|null $command 启动命令
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets args
    *  启动参数
    *
    * @return object|null
    */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
    * Sets args
    *
    * @param object|null $args 启动参数
    *
    * @return $this
    */
    public function setArgs($args)
    {
        $this->container['args'] = $args;
        return $this;
    }

    /**
    * Gets outputs
    *  应用输出路由端点
    *
    * @return object|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param object|null $outputs 应用输出路由端点
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets inputs
    *  应用输入路由
    *
    * @return object|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param object|null $inputs 应用输入路由
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets services
    *  应用实现的服务列表
    *
    * @return object|null
    */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
    * Sets services
    *
    * @param object|null $services 应用实现的服务列表
    *
    * @return $this
    */
    public function setServices($services)
    {
        $this->container['services'] = $services;
        return $this;
    }

    /**
    * Gets supplier
    *  驱动厂商
    *
    * @return string|null
    */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
    * Sets supplier
    *
    * @param string|null $supplier 驱动厂商
    *
    * @return $this
    */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;
        return $this;
    }

    /**
    * Gets tplId
    *  模板id
    *
    * @return string|null
    */
    public function getTplId()
    {
        return $this->container['tplId'];
    }

    /**
    * Sets tplId
    *
    * @param string|null $tplId 模板id
    *
    * @return $this
    */
    public function setTplId($tplId)
    {
        $this->container['tplId'] = $tplId;
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

