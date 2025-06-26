<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetControl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetControl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manageAccountId  管理纳管账号ID。
    * controlIdentifier  控制策略标识。
    * state  控制策略启用状态。
    * version  控制策略当前版本号。
    * name  控制策略名称。
    * description  控制策略描述信息。
    * controlObjective  控制策略目标。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * regionalPreference  区域选项，取值有两种分别是：区域的regional和全局的global。
    * guidance  控制策略必须性。
    * service  控制策略所属服务。
    * implementation  服务控制策略（SCP），配置规则。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manageAccountId' => 'string',
            'controlIdentifier' => 'string',
            'state' => 'string',
            'version' => 'string',
            'name' => 'string',
            'description' => 'string',
            'controlObjective' => 'string',
            'behavior' => 'string',
            'owner' => 'string',
            'regionalPreference' => 'string',
            'guidance' => 'string',
            'service' => 'string',
            'implementation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manageAccountId  管理纳管账号ID。
    * controlIdentifier  控制策略标识。
    * state  控制策略启用状态。
    * version  控制策略当前版本号。
    * name  控制策略名称。
    * description  控制策略描述信息。
    * controlObjective  控制策略目标。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * regionalPreference  区域选项，取值有两种分别是：区域的regional和全局的global。
    * guidance  控制策略必须性。
    * service  控制策略所属服务。
    * implementation  服务控制策略（SCP），配置规则。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manageAccountId' => null,
        'controlIdentifier' => null,
        'state' => null,
        'version' => null,
        'name' => null,
        'description' => null,
        'controlObjective' => null,
        'behavior' => null,
        'owner' => null,
        'regionalPreference' => null,
        'guidance' => null,
        'service' => null,
        'implementation' => null
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
    * manageAccountId  管理纳管账号ID。
    * controlIdentifier  控制策略标识。
    * state  控制策略启用状态。
    * version  控制策略当前版本号。
    * name  控制策略名称。
    * description  控制策略描述信息。
    * controlObjective  控制策略目标。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * regionalPreference  区域选项，取值有两种分别是：区域的regional和全局的global。
    * guidance  控制策略必须性。
    * service  控制策略所属服务。
    * implementation  服务控制策略（SCP），配置规则。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manageAccountId' => 'manage_account_id',
            'controlIdentifier' => 'control_identifier',
            'state' => 'state',
            'version' => 'version',
            'name' => 'name',
            'description' => 'description',
            'controlObjective' => 'control_objective',
            'behavior' => 'behavior',
            'owner' => 'owner',
            'regionalPreference' => 'regional_preference',
            'guidance' => 'guidance',
            'service' => 'service',
            'implementation' => 'implementation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manageAccountId  管理纳管账号ID。
    * controlIdentifier  控制策略标识。
    * state  控制策略启用状态。
    * version  控制策略当前版本号。
    * name  控制策略名称。
    * description  控制策略描述信息。
    * controlObjective  控制策略目标。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * regionalPreference  区域选项，取值有两种分别是：区域的regional和全局的global。
    * guidance  控制策略必须性。
    * service  控制策略所属服务。
    * implementation  服务控制策略（SCP），配置规则。
    *
    * @var string[]
    */
    protected static $setters = [
            'manageAccountId' => 'setManageAccountId',
            'controlIdentifier' => 'setControlIdentifier',
            'state' => 'setState',
            'version' => 'setVersion',
            'name' => 'setName',
            'description' => 'setDescription',
            'controlObjective' => 'setControlObjective',
            'behavior' => 'setBehavior',
            'owner' => 'setOwner',
            'regionalPreference' => 'setRegionalPreference',
            'guidance' => 'setGuidance',
            'service' => 'setService',
            'implementation' => 'setImplementation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manageAccountId  管理纳管账号ID。
    * controlIdentifier  控制策略标识。
    * state  控制策略启用状态。
    * version  控制策略当前版本号。
    * name  控制策略名称。
    * description  控制策略描述信息。
    * controlObjective  控制策略目标。
    * behavior  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * regionalPreference  区域选项，取值有两种分别是：区域的regional和全局的global。
    * guidance  控制策略必须性。
    * service  控制策略所属服务。
    * implementation  服务控制策略（SCP），配置规则。
    *
    * @var string[]
    */
    protected static $getters = [
            'manageAccountId' => 'getManageAccountId',
            'controlIdentifier' => 'getControlIdentifier',
            'state' => 'getState',
            'version' => 'getVersion',
            'name' => 'getName',
            'description' => 'getDescription',
            'controlObjective' => 'getControlObjective',
            'behavior' => 'getBehavior',
            'owner' => 'getOwner',
            'regionalPreference' => 'getRegionalPreference',
            'guidance' => 'getGuidance',
            'service' => 'getService',
            'implementation' => 'getImplementation'
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
        $this->container['manageAccountId'] = isset($data['manageAccountId']) ? $data['manageAccountId'] : null;
        $this->container['controlIdentifier'] = isset($data['controlIdentifier']) ? $data['controlIdentifier'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['controlObjective'] = isset($data['controlObjective']) ? $data['controlObjective'] : null;
        $this->container['behavior'] = isset($data['behavior']) ? $data['behavior'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['regionalPreference'] = isset($data['regionalPreference']) ? $data['regionalPreference'] : null;
        $this->container['guidance'] = isset($data['guidance']) ? $data['guidance'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['implementation'] = isset($data['implementation']) ? $data['implementation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['manageAccountId']) && (mb_strlen($this->container['manageAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'manageAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['manageAccountId']) && (mb_strlen($this->container['manageAccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'manageAccountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['controlIdentifier']) && (mb_strlen($this->container['controlIdentifier']) > 128)) {
                $invalidProperties[] = "invalid value for 'controlIdentifier', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['controlIdentifier']) && (mb_strlen($this->container['controlIdentifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'controlIdentifier', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['controlObjective']) && (mb_strlen($this->container['controlObjective']) > 128)) {
                $invalidProperties[] = "invalid value for 'controlObjective', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['controlObjective']) && (mb_strlen($this->container['controlObjective']) < 1)) {
                $invalidProperties[] = "invalid value for 'controlObjective', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['behavior']) && (mb_strlen($this->container['behavior']) > 64)) {
                $invalidProperties[] = "invalid value for 'behavior', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['behavior']) && (mb_strlen($this->container['behavior']) < 1)) {
                $invalidProperties[] = "invalid value for 'behavior', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 128)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 1)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionalPreference']) && (mb_strlen($this->container['regionalPreference']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionalPreference', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['regionalPreference']) && (mb_strlen($this->container['regionalPreference']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionalPreference', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['guidance']) && (mb_strlen($this->container['guidance']) > 64)) {
                $invalidProperties[] = "invalid value for 'guidance', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['guidance']) && (mb_strlen($this->container['guidance']) < 1)) {
                $invalidProperties[] = "invalid value for 'guidance', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['service']) && (mb_strlen($this->container['service']) > 64)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['service']) && (mb_strlen($this->container['service']) < 1)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['implementation']) && (mb_strlen($this->container['implementation']) > 64)) {
                $invalidProperties[] = "invalid value for 'implementation', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['implementation']) && (mb_strlen($this->container['implementation']) < 1)) {
                $invalidProperties[] = "invalid value for 'implementation', the character length must be bigger than or equal to 1.";
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
    * Gets manageAccountId
    *  管理纳管账号ID。
    *
    * @return string|null
    */
    public function getManageAccountId()
    {
        return $this->container['manageAccountId'];
    }

    /**
    * Sets manageAccountId
    *
    * @param string|null $manageAccountId 管理纳管账号ID。
    *
    * @return $this
    */
    public function setManageAccountId($manageAccountId)
    {
        $this->container['manageAccountId'] = $manageAccountId;
        return $this;
    }

    /**
    * Gets controlIdentifier
    *  控制策略标识。
    *
    * @return string|null
    */
    public function getControlIdentifier()
    {
        return $this->container['controlIdentifier'];
    }

    /**
    * Sets controlIdentifier
    *
    * @param string|null $controlIdentifier 控制策略标识。
    *
    * @return $this
    */
    public function setControlIdentifier($controlIdentifier)
    {
        $this->container['controlIdentifier'] = $controlIdentifier;
        return $this;
    }

    /**
    * Gets state
    *  控制策略启用状态。
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
    * @param string|null $state 控制策略启用状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets version
    *  控制策略当前版本号。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 控制策略当前版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets name
    *  控制策略名称。
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
    * @param string|null $name 控制策略名称。
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
    *  控制策略描述信息。
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
    * @param string|null $description 控制策略描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets controlObjective
    *  控制策略目标。
    *
    * @return string|null
    */
    public function getControlObjective()
    {
        return $this->container['controlObjective'];
    }

    /**
    * Sets controlObjective
    *
    * @param string|null $controlObjective 控制策略目标。
    *
    * @return $this
    */
    public function setControlObjective($controlObjective)
    {
        $this->container['controlObjective'] = $controlObjective;
        return $this;
    }

    /**
    * Gets behavior
    *  控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    *
    * @return string|null
    */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
    * Sets behavior
    *
    * @param string|null $behavior 控制策略类型。包括主动性控制策略Proactive、检测性控制策略Detective、预防性控制策略Preventive。
    *
    * @return $this
    */
    public function setBehavior($behavior)
    {
        $this->container['behavior'] = $behavior;
        return $this;
    }

    /**
    * Gets owner
    *  纳管账号的创建来源，包括CUSTOM和RGC。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 纳管账号的创建来源，包括CUSTOM和RGC。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets regionalPreference
    *  区域选项，取值有两种分别是：区域的regional和全局的global。
    *
    * @return string|null
    */
    public function getRegionalPreference()
    {
        return $this->container['regionalPreference'];
    }

    /**
    * Sets regionalPreference
    *
    * @param string|null $regionalPreference 区域选项，取值有两种分别是：区域的regional和全局的global。
    *
    * @return $this
    */
    public function setRegionalPreference($regionalPreference)
    {
        $this->container['regionalPreference'] = $regionalPreference;
        return $this;
    }

    /**
    * Gets guidance
    *  控制策略必须性。
    *
    * @return string|null
    */
    public function getGuidance()
    {
        return $this->container['guidance'];
    }

    /**
    * Sets guidance
    *
    * @param string|null $guidance 控制策略必须性。
    *
    * @return $this
    */
    public function setGuidance($guidance)
    {
        $this->container['guidance'] = $guidance;
        return $this;
    }

    /**
    * Gets service
    *  控制策略所属服务。
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service 控制策略所属服务。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets implementation
    *  服务控制策略（SCP），配置规则。
    *
    * @return string|null
    */
    public function getImplementation()
    {
        return $this->container['implementation'];
    }

    /**
    * Sets implementation
    *
    * @param string|null $implementation 服务控制策略（SCP），配置规则。
    *
    * @return $this
    */
    public function setImplementation($implementation)
    {
        $this->container['implementation'] = $implementation;
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

