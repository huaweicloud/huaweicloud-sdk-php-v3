<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchChangeInstanceSpecificationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchChangeInstanceSpecificationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobIds  **参数解释**：  批量规格变更的任务ID列表，仅变更按需实例时会返回该参数。  **取值范围**：  不涉及。
    * orderIds  **参数解释**：  批量规格变更订单ID列表，仅变更包年/包月实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobIds' => 'string[]',
            'orderIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobIds  **参数解释**：  批量规格变更的任务ID列表，仅变更按需实例时会返回该参数。  **取值范围**：  不涉及。
    * orderIds  **参数解释**：  批量规格变更订单ID列表，仅变更包年/包月实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobIds' => null,
        'orderIds' => null
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
    * jobIds  **参数解释**：  批量规格变更的任务ID列表，仅变更按需实例时会返回该参数。  **取值范围**：  不涉及。
    * orderIds  **参数解释**：  批量规格变更订单ID列表，仅变更包年/包月实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobIds' => 'job_ids',
            'orderIds' => 'order_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobIds  **参数解释**：  批量规格变更的任务ID列表，仅变更按需实例时会返回该参数。  **取值范围**：  不涉及。
    * orderIds  **参数解释**：  批量规格变更订单ID列表，仅变更包年/包月实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobIds' => 'setJobIds',
            'orderIds' => 'setOrderIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobIds  **参数解释**：  批量规格变更的任务ID列表，仅变更按需实例时会返回该参数。  **取值范围**：  不涉及。
    * orderIds  **参数解释**：  批量规格变更订单ID列表，仅变更包年/包月实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobIds' => 'getJobIds',
            'orderIds' => 'getOrderIds'
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
        $this->container['jobIds'] = isset($data['jobIds']) ? $data['jobIds'] : null;
        $this->container['orderIds'] = isset($data['orderIds']) ? $data['orderIds'] : null;
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
    * Gets jobIds
    *  **参数解释**：  批量规格变更的任务ID列表，仅变更按需实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @return string[]|null
    */
    public function getJobIds()
    {
        return $this->container['jobIds'];
    }

    /**
    * Sets jobIds
    *
    * @param string[]|null $jobIds **参数解释**：  批量规格变更的任务ID列表，仅变更按需实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setJobIds($jobIds)
    {
        $this->container['jobIds'] = $jobIds;
        return $this;
    }

    /**
    * Gets orderIds
    *  **参数解释**：  批量规格变更订单ID列表，仅变更包年/包月实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @return string[]|null
    */
    public function getOrderIds()
    {
        return $this->container['orderIds'];
    }

    /**
    * Sets orderIds
    *
    * @param string[]|null $orderIds **参数解释**：  批量规格变更订单ID列表，仅变更包年/包月实例时会返回该参数。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setOrderIds($orderIds)
    {
        $this->container['orderIds'] = $orderIds;
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

