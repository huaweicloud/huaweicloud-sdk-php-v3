<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTopTableVolumesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTopTableVolumesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableVolumes  **参数解释**: 数据库表占用空间列表。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    * state  **参数解释**: 任务状态。 **取值范围**: - RUNNING：运行中。 - ERROR：运行异常。 - FINISHED： 运行结束。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableVolumes' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\TableVolumeResult[]',
            'totalCount' => 'int',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableVolumes  **参数解释**: 数据库表占用空间列表。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    * state  **参数解释**: 任务状态。 **取值范围**: - RUNNING：运行中。 - ERROR：运行异常。 - FINISHED： 运行结束。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableVolumes' => null,
        'totalCount' => null,
        'state' => null
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
    * tableVolumes  **参数解释**: 数据库表占用空间列表。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    * state  **参数解释**: 任务状态。 **取值范围**: - RUNNING：运行中。 - ERROR：运行异常。 - FINISHED： 运行结束。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableVolumes' => 'table_volumes',
            'totalCount' => 'total_count',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableVolumes  **参数解释**: 数据库表占用空间列表。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    * state  **参数解释**: 任务状态。 **取值范围**: - RUNNING：运行中。 - ERROR：运行异常。 - FINISHED： 运行结束。
    *
    * @var string[]
    */
    protected static $setters = [
            'tableVolumes' => 'setTableVolumes',
            'totalCount' => 'setTotalCount',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableVolumes  **参数解释**: 数据库表占用空间列表。
    * totalCount  **参数解释**: 总数。 **取值范围**: 不涉及。
    * state  **参数解释**: 任务状态。 **取值范围**: - RUNNING：运行中。 - ERROR：运行异常。 - FINISHED： 运行结束。
    *
    * @var string[]
    */
    protected static $getters = [
            'tableVolumes' => 'getTableVolumes',
            'totalCount' => 'getTotalCount',
            'state' => 'getState'
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
    const STATE_RUNNING = 'RUNNING';
    const STATE_ERROR = 'ERROR';
    const STATE_FINISHED = 'FINISHED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_RUNNING,
            self::STATE_ERROR,
            self::STATE_FINISHED,
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
        $this->container['tableVolumes'] = isset($data['tableVolumes']) ? $data['tableVolumes'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    * Gets tableVolumes
    *  **参数解释**: 数据库表占用空间列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\TableVolumeResult[]|null
    */
    public function getTableVolumes()
    {
        return $this->container['tableVolumes'];
    }

    /**
    * Sets tableVolumes
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\TableVolumeResult[]|null $tableVolumes **参数解释**: 数据库表占用空间列表。
    *
    * @return $this
    */
    public function setTableVolumes($tableVolumes)
    {
        $this->container['tableVolumes'] = $tableVolumes;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**: 总数。 **取值范围**: 不涉及。
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
    * @param int|null $totalCount **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**: 任务状态。 **取值范围**: - RUNNING：运行中。 - ERROR：运行异常。 - FINISHED： 运行结束。
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
    * @param string|null $state **参数解释**: 任务状态。 **取值范围**: - RUNNING：运行中。 - ERROR：运行异常。 - FINISHED： 运行结束。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

