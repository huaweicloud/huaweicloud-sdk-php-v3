<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStarRocksDbParametersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStarRocksDbParametersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * addTaskScenario  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * mainTaskName  **参数解释**：  新增子任务相应的主任务名。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'xLanguage' => 'string',
            'addTaskScenario' => 'string',
            'mainTaskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * addTaskScenario  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * mainTaskName  **参数解释**：  新增子任务相应的主任务名。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'xLanguage' => null,
        'addTaskScenario' => null,
        'mainTaskName' => null
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
    * instanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * addTaskScenario  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * mainTaskName  **参数解释**：  新增子任务相应的主任务名。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'xLanguage' => 'X-Language',
            'addTaskScenario' => 'add_task_scenario',
            'mainTaskName' => 'main_task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * addTaskScenario  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * mainTaskName  **参数解释**：  新增子任务相应的主任务名。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'xLanguage' => 'setXLanguage',
            'addTaskScenario' => 'setAddTaskScenario',
            'mainTaskName' => 'setMainTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * addTaskScenario  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * mainTaskName  **参数解释**：  新增子任务相应的主任务名。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'xLanguage' => 'getXLanguage',
            'addTaskScenario' => 'getAddTaskScenario',
            'mainTaskName' => 'getMainTaskName'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['addTaskScenario'] = isset($data['addTaskScenario']) ? $data['addTaskScenario'] : null;
        $this->container['mainTaskName'] = isset($data['mainTaskName']) ? $data['mainTaskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['instanceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['xLanguage'] === null) {
            $invalidProperties[] = "'xLanguage' can't be null";
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
    * Gets instanceId
    *  StarRocks实例ID，严格匹配UUID规则。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId StarRocks实例ID，严格匹配UUID规则。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return string
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string $xLanguage 请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets addTaskScenario
    *  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @return string|null
    */
    public function getAddTaskScenario()
    {
        return $this->container['addTaskScenario'];
    }

    /**
    * Sets addTaskScenario
    *
    * @param string|null $addTaskScenario **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @return $this
    */
    public function setAddTaskScenario($addTaskScenario)
    {
        $this->container['addTaskScenario'] = $addTaskScenario;
        return $this;
    }

    /**
    * Gets mainTaskName
    *  **参数解释**：  新增子任务相应的主任务名。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @return string|null
    */
    public function getMainTaskName()
    {
        return $this->container['mainTaskName'];
    }

    /**
    * Sets mainTaskName
    *
    * @param string|null $mainTaskName **参数解释**：  新增子任务相应的主任务名。  **约束限制**：  非必填。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    *
    * @return $this
    */
    public function setMainTaskName($mainTaskName)
    {
        $this->container['mainTaskName'] = $mainTaskName;
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

