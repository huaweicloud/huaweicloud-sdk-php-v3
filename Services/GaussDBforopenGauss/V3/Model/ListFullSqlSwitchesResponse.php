<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFullSqlSwitchesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFullSqlSwitchesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  **参数解释**: 总记录数量。 **取值范围**: 不涉及。
    * fullSqlSwitchs  **参数解释**: 开关记录列表。
    * allowedSqlTypes  **参数解释**: 可选择的SQL采集类别清单列表。供开启全量SQL时做配置下发参考。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'fullSqlSwitchs' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\FullSqlSwitchResult[]',
            'allowedSqlTypes' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeRangeConfigResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  **参数解释**: 总记录数量。 **取值范围**: 不涉及。
    * fullSqlSwitchs  **参数解释**: 开关记录列表。
    * allowedSqlTypes  **参数解释**: 可选择的SQL采集类别清单列表。供开启全量SQL时做配置下发参考。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int64',
        'fullSqlSwitchs' => null,
        'allowedSqlTypes' => null
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
    * totalCount  **参数解释**: 总记录数量。 **取值范围**: 不涉及。
    * fullSqlSwitchs  **参数解释**: 开关记录列表。
    * allowedSqlTypes  **参数解释**: 可选择的SQL采集类别清单列表。供开启全量SQL时做配置下发参考。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'fullSqlSwitchs' => 'full_sql_switchs',
            'allowedSqlTypes' => 'allowed_sql_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  **参数解释**: 总记录数量。 **取值范围**: 不涉及。
    * fullSqlSwitchs  **参数解释**: 开关记录列表。
    * allowedSqlTypes  **参数解释**: 可选择的SQL采集类别清单列表。供开启全量SQL时做配置下发参考。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'fullSqlSwitchs' => 'setFullSqlSwitchs',
            'allowedSqlTypes' => 'setAllowedSqlTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  **参数解释**: 总记录数量。 **取值范围**: 不涉及。
    * fullSqlSwitchs  **参数解释**: 开关记录列表。
    * allowedSqlTypes  **参数解释**: 可选择的SQL采集类别清单列表。供开启全量SQL时做配置下发参考。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'fullSqlSwitchs' => 'getFullSqlSwitchs',
            'allowedSqlTypes' => 'getAllowedSqlTypes'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['fullSqlSwitchs'] = isset($data['fullSqlSwitchs']) ? $data['fullSqlSwitchs'] : null;
        $this->container['allowedSqlTypes'] = isset($data['allowedSqlTypes']) ? $data['allowedSqlTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets totalCount
    *  **参数解释**: 总记录数量。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**: 总记录数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets fullSqlSwitchs
    *  **参数解释**: 开关记录列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\FullSqlSwitchResult[]|null
    */
    public function getFullSqlSwitchs()
    {
        return $this->container['fullSqlSwitchs'];
    }

    /**
    * Sets fullSqlSwitchs
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\FullSqlSwitchResult[]|null $fullSqlSwitchs **参数解释**: 开关记录列表。
    *
    * @return $this
    */
    public function setFullSqlSwitchs($fullSqlSwitchs)
    {
        $this->container['fullSqlSwitchs'] = $fullSqlSwitchs;
        return $this;
    }

    /**
    * Gets allowedSqlTypes
    *  **参数解释**: 可选择的SQL采集类别清单列表。供开启全量SQL时做配置下发参考。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeRangeConfigResult[]|null
    */
    public function getAllowedSqlTypes()
    {
        return $this->container['allowedSqlTypes'];
    }

    /**
    * Sets allowedSqlTypes
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeRangeConfigResult[]|null $allowedSqlTypes **参数解释**: 可选择的SQL采集类别清单列表。供开启全量SQL时做配置下发参考。
    *
    * @return $this
    */
    public function setAllowedSqlTypes($allowedSqlTypes)
    {
        $this->container['allowedSqlTypes'] = $allowedSqlTypes;
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

