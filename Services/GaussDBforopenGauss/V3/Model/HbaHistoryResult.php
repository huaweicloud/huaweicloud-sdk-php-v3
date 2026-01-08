<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HbaHistoryResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HbaHistoryResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 客户端接入认证修改记录的ID。 **取值范围**: 不涉及。
    * status  **参数解释**: 修改结果。 **取值范围**:  - success：已生效。  - failed：未生效。  - etting：设置中。
    * time  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * failReason  **参数解释**: 修改失败原因。 **取值范围**: 不涉及。
    * beforeConfs  **参数解释**: 修改之前的值。
    * afterConfs  **参数解释**: 修改之后的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'time' => '\DateTime',
            'failReason' => 'string',
            'beforeConfs' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfResult[]',
            'afterConfs' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 客户端接入认证修改记录的ID。 **取值范围**: 不涉及。
    * status  **参数解释**: 修改结果。 **取值范围**:  - success：已生效。  - failed：未生效。  - etting：设置中。
    * time  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * failReason  **参数解释**: 修改失败原因。 **取值范围**: 不涉及。
    * beforeConfs  **参数解释**: 修改之前的值。
    * afterConfs  **参数解释**: 修改之后的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'time' => 'date-time',
        'failReason' => null,
        'beforeConfs' => null,
        'afterConfs' => null
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
    * id  **参数解释**: 客户端接入认证修改记录的ID。 **取值范围**: 不涉及。
    * status  **参数解释**: 修改结果。 **取值范围**:  - success：已生效。  - failed：未生效。  - etting：设置中。
    * time  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * failReason  **参数解释**: 修改失败原因。 **取值范围**: 不涉及。
    * beforeConfs  **参数解释**: 修改之前的值。
    * afterConfs  **参数解释**: 修改之后的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'time' => 'time',
            'failReason' => 'fail_reason',
            'beforeConfs' => 'before_confs',
            'afterConfs' => 'after_confs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 客户端接入认证修改记录的ID。 **取值范围**: 不涉及。
    * status  **参数解释**: 修改结果。 **取值范围**:  - success：已生效。  - failed：未生效。  - etting：设置中。
    * time  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * failReason  **参数解释**: 修改失败原因。 **取值范围**: 不涉及。
    * beforeConfs  **参数解释**: 修改之前的值。
    * afterConfs  **参数解释**: 修改之后的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'time' => 'setTime',
            'failReason' => 'setFailReason',
            'beforeConfs' => 'setBeforeConfs',
            'afterConfs' => 'setAfterConfs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 客户端接入认证修改记录的ID。 **取值范围**: 不涉及。
    * status  **参数解释**: 修改结果。 **取值范围**:  - success：已生效。  - failed：未生效。  - etting：设置中。
    * time  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * failReason  **参数解释**: 修改失败原因。 **取值范围**: 不涉及。
    * beforeConfs  **参数解释**: 修改之前的值。
    * afterConfs  **参数解释**: 修改之后的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'time' => 'getTime',
            'failReason' => 'getFailReason',
            'beforeConfs' => 'getBeforeConfs',
            'afterConfs' => 'getAfterConfs'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['beforeConfs'] = isset($data['beforeConfs']) ? $data['beforeConfs'] : null;
        $this->container['afterConfs'] = isset($data['afterConfs']) ? $data['afterConfs'] : null;
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
    * Gets id
    *  **参数解释**: 客户端接入认证修改记录的ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**: 客户端接入认证修改记录的ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 修改结果。 **取值范围**:  - success：已生效。  - failed：未生效。  - etting：设置中。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**: 修改结果。 **取值范围**:  - success：已生效。  - failed：未生效。  - etting：设置中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    *
    * @return \DateTime|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param \DateTime|null $time **参数解释**: 修改时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets failReason
    *  **参数解释**: 修改失败原因。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason **参数解释**: 修改失败原因。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets beforeConfs
    *  **参数解释**: 修改之前的值。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfResult[]|null
    */
    public function getBeforeConfs()
    {
        return $this->container['beforeConfs'];
    }

    /**
    * Sets beforeConfs
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfResult[]|null $beforeConfs **参数解释**: 修改之前的值。
    *
    * @return $this
    */
    public function setBeforeConfs($beforeConfs)
    {
        $this->container['beforeConfs'] = $beforeConfs;
        return $this;
    }

    /**
    * Gets afterConfs
    *  **参数解释**: 修改之后的值。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfResult[]|null
    */
    public function getAfterConfs()
    {
        return $this->container['afterConfs'];
    }

    /**
    * Sets afterConfs
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfResult[]|null $afterConfs **参数解释**: 修改之后的值。
    *
    * @return $this
    */
    public function setAfterConfs($afterConfs)
    {
        $this->container['afterConfs'] = $afterConfs;
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

