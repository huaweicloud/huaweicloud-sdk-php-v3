<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDynamicServerlessPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDynamicServerlessPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minVcpus  **参数解释**：   最小动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且小于等于max_vcpus。
    * maxVcpus  **参数解释**：   最大动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且大于等于min_vcpus。
    * needUpdateNodesComputeAbility  **参数解释**：  节点算力同步，修改算力范围的同时，是否将小于最小算力的节点的当前算力同步至最小算力。  **约束限制**：  不涉及。  **取值范围**： - true: 节点算力同步。 - false: 节点算力不同步。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minVcpus' => 'string',
            'maxVcpus' => 'string',
            'needUpdateNodesComputeAbility' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minVcpus  **参数解释**：   最小动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且小于等于max_vcpus。
    * maxVcpus  **参数解释**：   最大动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且大于等于min_vcpus。
    * needUpdateNodesComputeAbility  **参数解释**：  节点算力同步，修改算力范围的同时，是否将小于最小算力的节点的当前算力同步至最小算力。  **约束限制**：  不涉及。  **取值范围**： - true: 节点算力同步。 - false: 节点算力不同步。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minVcpus' => null,
        'maxVcpus' => null,
        'needUpdateNodesComputeAbility' => null
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
    * minVcpus  **参数解释**：   最小动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且小于等于max_vcpus。
    * maxVcpus  **参数解释**：   最大动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且大于等于min_vcpus。
    * needUpdateNodesComputeAbility  **参数解释**：  节点算力同步，修改算力范围的同时，是否将小于最小算力的节点的当前算力同步至最小算力。  **约束限制**：  不涉及。  **取值范围**： - true: 节点算力同步。 - false: 节点算力不同步。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minVcpus' => 'min_vcpus',
            'maxVcpus' => 'max_vcpus',
            'needUpdateNodesComputeAbility' => 'need_update_nodes_compute_ability'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minVcpus  **参数解释**：   最小动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且小于等于max_vcpus。
    * maxVcpus  **参数解释**：   最大动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且大于等于min_vcpus。
    * needUpdateNodesComputeAbility  **参数解释**：  节点算力同步，修改算力范围的同时，是否将小于最小算力的节点的当前算力同步至最小算力。  **约束限制**：  不涉及。  **取值范围**： - true: 节点算力同步。 - false: 节点算力不同步。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $setters = [
            'minVcpus' => 'setMinVcpus',
            'maxVcpus' => 'setMaxVcpus',
            'needUpdateNodesComputeAbility' => 'setNeedUpdateNodesComputeAbility'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minVcpus  **参数解释**：   最小动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且小于等于max_vcpus。
    * maxVcpus  **参数解释**：   最大动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且大于等于min_vcpus。
    * needUpdateNodesComputeAbility  **参数解释**：  节点算力同步，修改算力范围的同时，是否将小于最小算力的节点的当前算力同步至最小算力。  **约束限制**：  不涉及。  **取值范围**： - true: 节点算力同步。 - false: 节点算力不同步。  **默认取值**：  false。
    *
    * @var string[]
    */
    protected static $getters = [
            'minVcpus' => 'getMinVcpus',
            'maxVcpus' => 'getMaxVcpus',
            'needUpdateNodesComputeAbility' => 'getNeedUpdateNodesComputeAbility'
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
        $this->container['minVcpus'] = isset($data['minVcpus']) ? $data['minVcpus'] : null;
        $this->container['maxVcpus'] = isset($data['maxVcpus']) ? $data['maxVcpus'] : null;
        $this->container['needUpdateNodesComputeAbility'] = isset($data['needUpdateNodesComputeAbility']) ? $data['needUpdateNodesComputeAbility'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['minVcpus'] === null) {
            $invalidProperties[] = "'minVcpus' can't be null";
        }
            if ((mb_strlen($this->container['minVcpus']) > 2)) {
                $invalidProperties[] = "invalid value for 'minVcpus', the character length must be smaller than or equal to 2.";
            }
            if ((mb_strlen($this->container['minVcpus']) < 1)) {
                $invalidProperties[] = "invalid value for 'minVcpus', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['maxVcpus'] === null) {
            $invalidProperties[] = "'maxVcpus' can't be null";
        }
            if ((mb_strlen($this->container['maxVcpus']) > 2)) {
                $invalidProperties[] = "invalid value for 'maxVcpus', the character length must be smaller than or equal to 2.";
            }
            if ((mb_strlen($this->container['maxVcpus']) < 1)) {
                $invalidProperties[] = "invalid value for 'maxVcpus', the character length must be bigger than or equal to 1.";
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
    * Gets minVcpus
    *  **参数解释**：   最小动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且小于等于max_vcpus。
    *
    * @return string
    */
    public function getMinVcpus()
    {
        return $this->container['minVcpus'];
    }

    /**
    * Sets minVcpus
    *
    * @param string $minVcpus **参数解释**：   最小动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且小于等于max_vcpus。
    *
    * @return $this
    */
    public function setMinVcpus($minVcpus)
    {
        $this->container['minVcpus'] = $minVcpus;
        return $this;
    }

    /**
    * Gets maxVcpus
    *  **参数解释**：   最大动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且大于等于min_vcpus。
    *
    * @return string
    */
    public function getMaxVcpus()
    {
        return $this->container['maxVcpus'];
    }

    /**
    * Sets maxVcpus
    *
    * @param string $maxVcpus **参数解释**：   最大动态Serverless算力。  **取值范围**：  取值范围可根据[查询动态Serverless算力策略](https://support.huaweicloud.com/api-taurusdb/ShowDynamicServerlessPolicy.html)接口获取，并且大于等于min_vcpus。
    *
    * @return $this
    */
    public function setMaxVcpus($maxVcpus)
    {
        $this->container['maxVcpus'] = $maxVcpus;
        return $this;
    }

    /**
    * Gets needUpdateNodesComputeAbility
    *  **参数解释**：  节点算力同步，修改算力范围的同时，是否将小于最小算力的节点的当前算力同步至最小算力。  **约束限制**：  不涉及。  **取值范围**： - true: 节点算力同步。 - false: 节点算力不同步。  **默认取值**：  false。
    *
    * @return bool|null
    */
    public function getNeedUpdateNodesComputeAbility()
    {
        return $this->container['needUpdateNodesComputeAbility'];
    }

    /**
    * Sets needUpdateNodesComputeAbility
    *
    * @param bool|null $needUpdateNodesComputeAbility **参数解释**：  节点算力同步，修改算力范围的同时，是否将小于最小算力的节点的当前算力同步至最小算力。  **约束限制**：  不涉及。  **取值范围**： - true: 节点算力同步。 - false: 节点算力不同步。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setNeedUpdateNodesComputeAbility($needUpdateNodesComputeAbility)
    {
        $this->container['needUpdateNodesComputeAbility'] = $needUpdateNodesComputeAbility;
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

