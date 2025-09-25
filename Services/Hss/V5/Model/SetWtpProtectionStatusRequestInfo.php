<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetWtpProtectionStatusRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetWtpProtectionStatusRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: - True ：开启防护，必须填写charging_mode。 - False ：关闭防护，无需填写charging_mode。  **默认取值**: False
    * hostIdList  **参数解释**: 需要开启或关闭防护的服务器ID列表。 **约束限制** : 开启防护时，需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，protect_status 等于 closed 且 agent_status 等于 online 的 host_id 是符合开启防护的服务器ID。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'bool',
            'hostIdList' => 'string[]',
            'chargingMode' => 'string',
            'resourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: - True ：开启防护，必须填写charging_mode。 - False ：关闭防护，无需填写charging_mode。  **默认取值**: False
    * hostIdList  **参数解释**: 需要开启或关闭防护的服务器ID列表。 **约束限制** : 开启防护时，需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，protect_status 等于 closed 且 agent_status 等于 online 的 host_id 是符合开启防护的服务器ID。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'hostIdList' => null,
        'chargingMode' => null,
        'resourceId' => null
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
    * status  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: - True ：开启防护，必须填写charging_mode。 - False ：关闭防护，无需填写charging_mode。  **默认取值**: False
    * hostIdList  **参数解释**: 需要开启或关闭防护的服务器ID列表。 **约束限制** : 开启防护时，需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，protect_status 等于 closed 且 agent_status 等于 online 的 host_id 是符合开启防护的服务器ID。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'hostIdList' => 'host_id_list',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: - True ：开启防护，必须填写charging_mode。 - False ：关闭防护，无需填写charging_mode。  **默认取值**: False
    * hostIdList  **参数解释**: 需要开启或关闭防护的服务器ID列表。 **约束限制** : 开启防护时，需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，protect_status 等于 closed 且 agent_status 等于 online 的 host_id 是符合开启防护的服务器ID。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'hostIdList' => 'setHostIdList',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: - True ：开启防护，必须填写charging_mode。 - False ：关闭防护，无需填写charging_mode。  **默认取值**: False
    * hostIdList  **参数解释**: 需要开启或关闭防护的服务器ID列表。 **约束限制** : 开启防护时，需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，protect_status 等于 closed 且 agent_status 等于 online 的 host_id 是符合开启防护的服务器ID。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'hostIdList' => 'getHostIdList',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
        }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
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
    * Gets status
    *  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: - True ：开启防护，必须填写charging_mode。 - False ：关闭防护，无需填写charging_mode。  **默认取值**: False
    *
    * @return bool
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool $status **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: - True ：开启防护，必须填写charging_mode。 - False ：关闭防护，无需填写charging_mode。  **默认取值**: False
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 需要开启或关闭防护的服务器ID列表。 **约束限制** : 开启防护时，需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，protect_status 等于 closed 且 agent_status 等于 online 的 host_id 是符合开启防护的服务器ID。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList **参数解释**: 需要开启或关闭防护的服务器ID列表。 **约束限制** : 开启防护时，需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，protect_status 等于 closed 且 agent_status 等于 online 的 host_id 是符合开启防护的服务器ID。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
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

