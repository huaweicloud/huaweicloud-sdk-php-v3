<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubscriptionResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubscriptionResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * sku  **参数解释**: SKU信息 - FLOW_DATA_BANDWIDTH 数据流量带宽 - CSS_CAPACITY CSS 存储容量 - PAIMON_CAPACITY Paimon 存储容量 - OBS_CAPACITY OBS 存储容量 - JOB_CAPACITY 作业处理容量 - AD_HOC_COUNT 即席查询次数  **约束限制** 不涉及 **取值范围**: - FLOW_DATA_BANDWIDTH - CSS_CAPACITY - PAIMON_CAPACITY - OBS_CAPACITY - JOB_CAPACITY - AD_HOC_COUNT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'sku' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * sku  **参数解释**: SKU信息 - FLOW_DATA_BANDWIDTH 数据流量带宽 - CSS_CAPACITY CSS 存储容量 - PAIMON_CAPACITY Paimon 存储容量 - OBS_CAPACITY OBS 存储容量 - JOB_CAPACITY 作业处理容量 - AD_HOC_COUNT 即席查询次数  **约束限制** 不涉及 **取值范围**: - FLOW_DATA_BANDWIDTH - CSS_CAPACITY - PAIMON_CAPACITY - OBS_CAPACITY - JOB_CAPACITY - AD_HOC_COUNT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'sku' => null
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
    * workspaceId  工作空间ID
    * sku  **参数解释**: SKU信息 - FLOW_DATA_BANDWIDTH 数据流量带宽 - CSS_CAPACITY CSS 存储容量 - PAIMON_CAPACITY Paimon 存储容量 - OBS_CAPACITY OBS 存储容量 - JOB_CAPACITY 作业处理容量 - AD_HOC_COUNT 即席查询次数  **约束限制** 不涉及 **取值范围**: - FLOW_DATA_BANDWIDTH - CSS_CAPACITY - PAIMON_CAPACITY - OBS_CAPACITY - JOB_CAPACITY - AD_HOC_COUNT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'sku' => 'sku'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID
    * sku  **参数解释**: SKU信息 - FLOW_DATA_BANDWIDTH 数据流量带宽 - CSS_CAPACITY CSS 存储容量 - PAIMON_CAPACITY Paimon 存储容量 - OBS_CAPACITY OBS 存储容量 - JOB_CAPACITY 作业处理容量 - AD_HOC_COUNT 即席查询次数  **约束限制** 不涉及 **取值范围**: - FLOW_DATA_BANDWIDTH - CSS_CAPACITY - PAIMON_CAPACITY - OBS_CAPACITY - JOB_CAPACITY - AD_HOC_COUNT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'sku' => 'setSku'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID
    * sku  **参数解释**: SKU信息 - FLOW_DATA_BANDWIDTH 数据流量带宽 - CSS_CAPACITY CSS 存储容量 - PAIMON_CAPACITY Paimon 存储容量 - OBS_CAPACITY OBS 存储容量 - JOB_CAPACITY 作业处理容量 - AD_HOC_COUNT 即席查询次数  **约束限制** 不涉及 **取值范围**: - FLOW_DATA_BANDWIDTH - CSS_CAPACITY - PAIMON_CAPACITY - OBS_CAPACITY - JOB_CAPACITY - AD_HOC_COUNT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'sku' => 'getSku'
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
    const SKU_FLOW_DATA_BANDWIDTH = 'FLOW_DATA_BANDWIDTH';
    const SKU_CSS_CAPACITY = 'CSS_CAPACITY';
    const SKU_PAIMON_CAPACITY = 'PAIMON_CAPACITY';
    const SKU_OBS_CAPACITY = 'OBS_CAPACITY';
    const SKU_JOB_CAPACITY = 'JOB_CAPACITY';
    const SKU_AD_HOC_COUNT = 'AD_HOC_COUNT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSkuAllowableValues()
    {
        return [
            self::SKU_FLOW_DATA_BANDWIDTH,
            self::SKU_CSS_CAPACITY,
            self::SKU_PAIMON_CAPACITY,
            self::SKU_OBS_CAPACITY,
            self::SKU_JOB_CAPACITY,
            self::SKU_AD_HOC_COUNT,
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
            $allowedValues = $this->getSkuAllowableValues();
                if (!is_null($this->container['sku']) && !in_array($this->container['sku'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sku', must be one of '%s'",
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
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets sku
    *  **参数解释**: SKU信息 - FLOW_DATA_BANDWIDTH 数据流量带宽 - CSS_CAPACITY CSS 存储容量 - PAIMON_CAPACITY Paimon 存储容量 - OBS_CAPACITY OBS 存储容量 - JOB_CAPACITY 作业处理容量 - AD_HOC_COUNT 即席查询次数  **约束限制** 不涉及 **取值范围**: - FLOW_DATA_BANDWIDTH - CSS_CAPACITY - PAIMON_CAPACITY - OBS_CAPACITY - JOB_CAPACITY - AD_HOC_COUNT  **默认值** 不涉及
    *
    * @return string
    */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
    * Sets sku
    *
    * @param string $sku **参数解释**: SKU信息 - FLOW_DATA_BANDWIDTH 数据流量带宽 - CSS_CAPACITY CSS 存储容量 - PAIMON_CAPACITY Paimon 存储容量 - OBS_CAPACITY OBS 存储容量 - JOB_CAPACITY 作业处理容量 - AD_HOC_COUNT 即席查询次数  **约束限制** 不涉及 **取值范围**: - FLOW_DATA_BANDWIDTH - CSS_CAPACITY - PAIMON_CAPACITY - OBS_CAPACITY - JOB_CAPACITY - AD_HOC_COUNT  **默认值** 不涉及
    *
    * @return $this
    */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;
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

