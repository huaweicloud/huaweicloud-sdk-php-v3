<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckTaskMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckTaskMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释：** 插件检查类型 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查
    * taskId  **参数解释：** 插件检查任务ID，用于任务检查结果查询 **取值范围：** 不涉及
    * addonTemplateName  **参数解释：** 插件模板名称 **取值范围：** cce服务提供的插件模板，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].metadata.name字段获取
    * addonInstanceName  **参数解释：** 插件实例名称 **取值范围：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID **取值范围：** 不涉及
    * createTimeStamp  **参数解释：** 插件检查任务创建时间 **取值范围：** 不涉及
    * expireTimeStamp  **参数解释：** 插件检查任务超时时间，仅终态（Failed/Success）任务存在此字段 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'taskId' => 'string',
            'addonTemplateName' => 'string',
            'addonInstanceName' => 'string',
            'addonInstanceId' => 'string',
            'createTimeStamp' => 'string',
            'expireTimeStamp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释：** 插件检查类型 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查
    * taskId  **参数解释：** 插件检查任务ID，用于任务检查结果查询 **取值范围：** 不涉及
    * addonTemplateName  **参数解释：** 插件模板名称 **取值范围：** cce服务提供的插件模板，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].metadata.name字段获取
    * addonInstanceName  **参数解释：** 插件实例名称 **取值范围：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID **取值范围：** 不涉及
    * createTimeStamp  **参数解释：** 插件检查任务创建时间 **取值范围：** 不涉及
    * expireTimeStamp  **参数解释：** 插件检查任务超时时间，仅终态（Failed/Success）任务存在此字段 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'taskId' => null,
        'addonTemplateName' => null,
        'addonInstanceName' => null,
        'addonInstanceId' => null,
        'createTimeStamp' => null,
        'expireTimeStamp' => null
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
    * type  **参数解释：** 插件检查类型 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查
    * taskId  **参数解释：** 插件检查任务ID，用于任务检查结果查询 **取值范围：** 不涉及
    * addonTemplateName  **参数解释：** 插件模板名称 **取值范围：** cce服务提供的插件模板，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].metadata.name字段获取
    * addonInstanceName  **参数解释：** 插件实例名称 **取值范围：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID **取值范围：** 不涉及
    * createTimeStamp  **参数解释：** 插件检查任务创建时间 **取值范围：** 不涉及
    * expireTimeStamp  **参数解释：** 插件检查任务超时时间，仅终态（Failed/Success）任务存在此字段 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'taskId' => 'taskID',
            'addonTemplateName' => 'addonTemplateName',
            'addonInstanceName' => 'addonInstanceName',
            'addonInstanceId' => 'addonInstanceID',
            'createTimeStamp' => 'createTimeStamp',
            'expireTimeStamp' => 'expireTimeStamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释：** 插件检查类型 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查
    * taskId  **参数解释：** 插件检查任务ID，用于任务检查结果查询 **取值范围：** 不涉及
    * addonTemplateName  **参数解释：** 插件模板名称 **取值范围：** cce服务提供的插件模板，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].metadata.name字段获取
    * addonInstanceName  **参数解释：** 插件实例名称 **取值范围：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID **取值范围：** 不涉及
    * createTimeStamp  **参数解释：** 插件检查任务创建时间 **取值范围：** 不涉及
    * expireTimeStamp  **参数解释：** 插件检查任务超时时间，仅终态（Failed/Success）任务存在此字段 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'taskId' => 'setTaskId',
            'addonTemplateName' => 'setAddonTemplateName',
            'addonInstanceName' => 'setAddonInstanceName',
            'addonInstanceId' => 'setAddonInstanceId',
            'createTimeStamp' => 'setCreateTimeStamp',
            'expireTimeStamp' => 'setExpireTimeStamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释：** 插件检查类型 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查
    * taskId  **参数解释：** 插件检查任务ID，用于任务检查结果查询 **取值范围：** 不涉及
    * addonTemplateName  **参数解释：** 插件模板名称 **取值范围：** cce服务提供的插件模板，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].metadata.name字段获取
    * addonInstanceName  **参数解释：** 插件实例名称 **取值范围：** 不涉及
    * addonInstanceId  **参数解释：** 插件实例ID **取值范围：** 不涉及
    * createTimeStamp  **参数解释：** 插件检查任务创建时间 **取值范围：** 不涉及
    * expireTimeStamp  **参数解释：** 插件检查任务超时时间，仅终态（Failed/Success）任务存在此字段 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'taskId' => 'getTaskId',
            'addonTemplateName' => 'getAddonTemplateName',
            'addonInstanceName' => 'getAddonInstanceName',
            'addonInstanceId' => 'getAddonInstanceId',
            'createTimeStamp' => 'getCreateTimeStamp',
            'expireTimeStamp' => 'getExpireTimeStamp'
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
    const TYPE_ADDON_STATIC = 'addonStatic';
    const TYPE_ADDON_UPGRADE = 'addonUpgrade';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ADDON_STATIC,
            self::TYPE_ADDON_UPGRADE,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
        $this->container['addonInstanceName'] = isset($data['addonInstanceName']) ? $data['addonInstanceName'] : null;
        $this->container['addonInstanceId'] = isset($data['addonInstanceId']) ? $data['addonInstanceId'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['expireTimeStamp'] = isset($data['expireTimeStamp']) ? $data['expireTimeStamp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
        if ($this->container['addonTemplateName'] === null) {
            $invalidProperties[] = "'addonTemplateName' can't be null";
        }
        if ($this->container['createTimeStamp'] === null) {
            $invalidProperties[] = "'createTimeStamp' can't be null";
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
    * Gets type
    *  **参数解释：** 插件检查类型 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 插件检查类型 **取值范围：** - addonStatic: 运行中插件巡检 - addonUpgrade: 插件升级前检查
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释：** 插件检查任务ID，用于任务检查结果查询 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId **参数解释：** 插件检查任务ID，用于任务检查结果查询 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets addonTemplateName
    *  **参数解释：** 插件模板名称 **取值范围：** cce服务提供的插件模板，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].metadata.name字段获取
    *
    * @return string
    */
    public function getAddonTemplateName()
    {
        return $this->container['addonTemplateName'];
    }

    /**
    * Sets addonTemplateName
    *
    * @param string $addonTemplateName **参数解释：** 插件模板名称 **取值范围：** cce服务提供的插件模板，可以通过[查询AddonTemplates列表](cce_02_0321.xml)中的items[].metadata.name字段获取
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
        return $this;
    }

    /**
    * Gets addonInstanceName
    *  **参数解释：** 插件实例名称 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getAddonInstanceName()
    {
        return $this->container['addonInstanceName'];
    }

    /**
    * Sets addonInstanceName
    *
    * @param string|null $addonInstanceName **参数解释：** 插件实例名称 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setAddonInstanceName($addonInstanceName)
    {
        $this->container['addonInstanceName'] = $addonInstanceName;
        return $this;
    }

    /**
    * Gets addonInstanceId
    *  **参数解释：** 插件实例ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getAddonInstanceId()
    {
        return $this->container['addonInstanceId'];
    }

    /**
    * Sets addonInstanceId
    *
    * @param string|null $addonInstanceId **参数解释：** 插件实例ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setAddonInstanceId($addonInstanceId)
    {
        $this->container['addonInstanceId'] = $addonInstanceId;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  **参数解释：** 插件检查任务创建时间 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param string $createTimeStamp **参数解释：** 插件检查任务创建时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets expireTimeStamp
    *  **参数解释：** 插件检查任务超时时间，仅终态（Failed/Success）任务存在此字段 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getExpireTimeStamp()
    {
        return $this->container['expireTimeStamp'];
    }

    /**
    * Sets expireTimeStamp
    *
    * @param string|null $expireTimeStamp **参数解释：** 插件检查任务超时时间，仅终态（Failed/Success）任务存在此字段 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setExpireTimeStamp($expireTimeStamp)
    {
        $this->container['expireTimeStamp'] = $expireTimeStamp;
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

