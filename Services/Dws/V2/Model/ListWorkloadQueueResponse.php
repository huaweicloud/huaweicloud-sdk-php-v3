<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkloadQueueResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkloadQueueResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadQueueNameList  **参数解释**： 工作负载队列名称。 **取值范围**： 不涉及。
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadQueueNameList' => 'string[]',
            'workloadResCode' => 'int',
            'workloadResStr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadQueueNameList  **参数解释**： 工作负载队列名称。 **取值范围**： 不涉及。
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadQueueNameList' => null,
        'workloadResCode' => null,
        'workloadResStr' => null
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
    * workloadQueueNameList  **参数解释**： 工作负载队列名称。 **取值范围**： 不涉及。
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadQueueNameList' => 'workload_queue_name_list',
            'workloadResCode' => 'workload_res_code',
            'workloadResStr' => 'workload_res_str'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadQueueNameList  **参数解释**： 工作负载队列名称。 **取值范围**： 不涉及。
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadQueueNameList' => 'setWorkloadQueueNameList',
            'workloadResCode' => 'setWorkloadResCode',
            'workloadResStr' => 'setWorkloadResStr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadQueueNameList  **参数解释**： 工作负载队列名称。 **取值范围**： 不涉及。
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadQueueNameList' => 'getWorkloadQueueNameList',
            'workloadResCode' => 'getWorkloadResCode',
            'workloadResStr' => 'getWorkloadResStr'
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
        $this->container['workloadQueueNameList'] = isset($data['workloadQueueNameList']) ? $data['workloadQueueNameList'] : null;
        $this->container['workloadResCode'] = isset($data['workloadResCode']) ? $data['workloadResCode'] : null;
        $this->container['workloadResStr'] = isset($data['workloadResStr']) ? $data['workloadResStr'] : null;
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
    * Gets workloadQueueNameList
    *  **参数解释**： 工作负载队列名称。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getWorkloadQueueNameList()
    {
        return $this->container['workloadQueueNameList'];
    }

    /**
    * Sets workloadQueueNameList
    *
    * @param string[]|null $workloadQueueNameList **参数解释**： 工作负载队列名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkloadQueueNameList($workloadQueueNameList)
    {
        $this->container['workloadQueueNameList'] = $workloadQueueNameList;
        return $this;
    }

    /**
    * Gets workloadResCode
    *  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getWorkloadResCode()
    {
        return $this->container['workloadResCode'];
    }

    /**
    * Sets workloadResCode
    *
    * @param int|null $workloadResCode **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkloadResCode($workloadResCode)
    {
        $this->container['workloadResCode'] = $workloadResCode;
        return $this;
    }

    /**
    * Gets workloadResStr
    *  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWorkloadResStr()
    {
        return $this->container['workloadResStr'];
    }

    /**
    * Sets workloadResStr
    *
    * @param string|null $workloadResStr **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkloadResStr($workloadResStr)
    {
        $this->container['workloadResStr'] = $workloadResStr;
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

