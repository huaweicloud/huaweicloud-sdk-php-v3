<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsCustomerBatchDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsCustomerBatchDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionType  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * ipsIds  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionType' => 'int',
            'ipsIds' => 'string[]',
            'fwInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionType  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * ipsIds  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionType' => 'int32',
        'ipsIds' => null,
        'fwInstanceId' => null
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
    * actionType  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * ipsIds  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionType' => 'action_type',
            'ipsIds' => 'ips_ids',
            'fwInstanceId' => 'fw_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionType  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * ipsIds  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'actionType' => 'setActionType',
            'ipsIds' => 'setIpsIds',
            'fwInstanceId' => 'setFwInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionType  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * ipsIds  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'actionType' => 'getActionType',
            'ipsIds' => 'getIpsIds',
            'fwInstanceId' => 'getFwInstanceId'
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
    const ACTION_TYPE_0 = 0;
    const ACTION_TYPE_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_0,
            self::ACTION_TYPE_1,
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
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['ipsIds'] = isset($data['ipsIds']) ? $data['ipsIds'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionTypeAllowableValues();
                if (!is_null($this->container['actionType']) && !in_array($this->container['actionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ipsIds'] === null) {
            $invalidProperties[] = "'ipsIds' can't be null";
        }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['fwInstanceId'])) {
                $invalidProperties[] = "invalid value for 'fwInstanceId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
    * Gets actionType
    *  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param int|null $actionType **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets ipsIds
    *  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]
    */
    public function getIpsIds()
    {
        return $this->container['ipsIds'];
    }

    /**
    * Sets ipsIds
    *
    * @param string[] $ipsIds **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setIpsIds($ipsIds)
    {
        $this->container['ipsIds'] = $ipsIds;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
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

