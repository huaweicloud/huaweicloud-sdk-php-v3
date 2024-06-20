<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  流水线名称
    * description  流水线描述
    * isPublish  是否为发布流水线
    * sources  流水线源
    * variables  流水线自定义全局变量
    * schedules  流水线定时执行配置
    * triggers  流水线代码事件触发配置
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * definition  流水线结构定义
    * projectName  项目名称
    * groupId  流水线组ID
    * id  若为复制场景，则为原流水线ID
    * concurrencyControl  concurrencyControl
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'isPublish' => 'bool',
            'sources' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]',
            'schedules' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]',
            'triggers' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]',
            'manifestVersion' => 'string',
            'definition' => 'string',
            'projectName' => 'string',
            'groupId' => 'string',
            'id' => 'string',
            'concurrencyControl' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineConcurrencyMgmt'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  流水线名称
    * description  流水线描述
    * isPublish  是否为发布流水线
    * sources  流水线源
    * variables  流水线自定义全局变量
    * schedules  流水线定时执行配置
    * triggers  流水线代码事件触发配置
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * definition  流水线结构定义
    * projectName  项目名称
    * groupId  流水线组ID
    * id  若为复制场景，则为原流水线ID
    * concurrencyControl  concurrencyControl
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'isPublish' => null,
        'sources' => null,
        'variables' => null,
        'schedules' => null,
        'triggers' => null,
        'manifestVersion' => null,
        'definition' => null,
        'projectName' => null,
        'groupId' => null,
        'id' => null,
        'concurrencyControl' => null
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
    * name  流水线名称
    * description  流水线描述
    * isPublish  是否为发布流水线
    * sources  流水线源
    * variables  流水线自定义全局变量
    * schedules  流水线定时执行配置
    * triggers  流水线代码事件触发配置
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * definition  流水线结构定义
    * projectName  项目名称
    * groupId  流水线组ID
    * id  若为复制场景，则为原流水线ID
    * concurrencyControl  concurrencyControl
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'isPublish' => 'is_publish',
            'sources' => 'sources',
            'variables' => 'variables',
            'schedules' => 'schedules',
            'triggers' => 'triggers',
            'manifestVersion' => 'manifest_version',
            'definition' => 'definition',
            'projectName' => 'project_name',
            'groupId' => 'group_id',
            'id' => 'id',
            'concurrencyControl' => 'concurrency_control'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  流水线名称
    * description  流水线描述
    * isPublish  是否为发布流水线
    * sources  流水线源
    * variables  流水线自定义全局变量
    * schedules  流水线定时执行配置
    * triggers  流水线代码事件触发配置
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * definition  流水线结构定义
    * projectName  项目名称
    * groupId  流水线组ID
    * id  若为复制场景，则为原流水线ID
    * concurrencyControl  concurrencyControl
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'isPublish' => 'setIsPublish',
            'sources' => 'setSources',
            'variables' => 'setVariables',
            'schedules' => 'setSchedules',
            'triggers' => 'setTriggers',
            'manifestVersion' => 'setManifestVersion',
            'definition' => 'setDefinition',
            'projectName' => 'setProjectName',
            'groupId' => 'setGroupId',
            'id' => 'setId',
            'concurrencyControl' => 'setConcurrencyControl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  流水线名称
    * description  流水线描述
    * isPublish  是否为发布流水线
    * sources  流水线源
    * variables  流水线自定义全局变量
    * schedules  流水线定时执行配置
    * triggers  流水线代码事件触发配置
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * definition  流水线结构定义
    * projectName  项目名称
    * groupId  流水线组ID
    * id  若为复制场景，则为原流水线ID
    * concurrencyControl  concurrencyControl
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'isPublish' => 'getIsPublish',
            'sources' => 'getSources',
            'variables' => 'getVariables',
            'schedules' => 'getSchedules',
            'triggers' => 'getTriggers',
            'manifestVersion' => 'getManifestVersion',
            'definition' => 'getDefinition',
            'projectName' => 'getProjectName',
            'groupId' => 'getGroupId',
            'id' => 'getId',
            'concurrencyControl' => 'getConcurrencyControl'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['schedules'] = isset($data['schedules']) ? $data['schedules'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['concurrencyControl'] = isset($data['concurrencyControl']) ? $data['concurrencyControl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['isPublish'] === null) {
            $invalidProperties[] = "'isPublish' can't be null";
        }
        if ($this->container['definition'] === null) {
            $invalidProperties[] = "'definition' can't be null";
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
    * Gets name
    *  流水线名称
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
    * @param string $name 流水线名称
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
    *  流水线描述
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
    * @param string|null $description 流水线描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isPublish
    *  是否为发布流水线
    *
    * @return bool
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool $isPublish 是否为发布流水线
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets sources
    *  流水线源
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]|null $sources 流水线源
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets variables
    *  流水线自定义全局变量
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]|null $variables 流水线自定义全局变量
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets schedules
    *  流水线定时执行配置
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]|null
    */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
    * Sets schedules
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]|null $schedules 流水线定时执行配置
    *
    * @return $this
    */
    public function setSchedules($schedules)
    {
        $this->container['schedules'] = $schedules;
        return $this;
    }

    /**
    * Gets triggers
    *  流水线代码事件触发配置
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]|null
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]|null $triggers 流水线代码事件触发配置
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  流水线结构定义版本，新版默认为3.0
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion 流水线结构定义版本，新版默认为3.0
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets definition
    *  流水线结构定义
    *
    * @return string
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string $definition 流水线结构定义
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets groupId
    *  流水线组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 流水线组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets id
    *  若为复制场景，则为原流水线ID
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
    * @param string|null $id 若为复制场景，则为原流水线ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets concurrencyControl
    *  concurrencyControl
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineConcurrencyMgmt|null
    */
    public function getConcurrencyControl()
    {
        return $this->container['concurrencyControl'];
    }

    /**
    * Sets concurrencyControl
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineConcurrencyMgmt|null $concurrencyControl concurrencyControl
    *
    * @return $this
    */
    public function setConcurrencyControl($concurrencyControl)
    {
        $this->container['concurrencyControl'] = $concurrencyControl;
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

