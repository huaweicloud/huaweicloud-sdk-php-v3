<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAuthorizeTxtRecordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAuthorizeTxtRecordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 授权请求ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 待创建的子域名。 **取值范围：** 不涉及。
    * record  record
    * status  **参数解释：** 授权状态。 **取值范围：** - CREATED：已创建 - VERIFIED：已验证
    * secondLevelZoneName  **参数解释：** 子域名所属的二级域名。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'zoneName' => 'string',
            'record' => '\HuaweiCloud\SDK\Dns\V2\Model\RecordInfo',
            'status' => 'string',
            'secondLevelZoneName' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 授权请求ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 待创建的子域名。 **取值范围：** 不涉及。
    * record  record
    * status  **参数解释：** 授权状态。 **取值范围：** - CREATED：已创建 - VERIFIED：已验证
    * secondLevelZoneName  **参数解释：** 子域名所属的二级域名。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'zoneName' => null,
        'record' => null,
        'status' => null,
        'secondLevelZoneName' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  **参数解释：** 授权请求ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 待创建的子域名。 **取值范围：** 不涉及。
    * record  record
    * status  **参数解释：** 授权状态。 **取值范围：** - CREATED：已创建 - VERIFIED：已验证
    * secondLevelZoneName  **参数解释：** 子域名所属的二级域名。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'zoneName' => 'zone_name',
            'record' => 'record',
            'status' => 'status',
            'secondLevelZoneName' => 'second_level_zone_name',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 授权请求ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 待创建的子域名。 **取值范围：** 不涉及。
    * record  record
    * status  **参数解释：** 授权状态。 **取值范围：** - CREATED：已创建 - VERIFIED：已验证
    * secondLevelZoneName  **参数解释：** 子域名所属的二级域名。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'zoneName' => 'setZoneName',
            'record' => 'setRecord',
            'status' => 'setStatus',
            'secondLevelZoneName' => 'setSecondLevelZoneName',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 授权请求ID。 **取值范围：** 不涉及。
    * zoneName  **参数解释：** 待创建的子域名。 **取值范围：** 不涉及。
    * record  record
    * status  **参数解释：** 授权状态。 **取值范围：** - CREATED：已创建 - VERIFIED：已验证
    * secondLevelZoneName  **参数解释：** 子域名所属的二级域名。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'zoneName' => 'getZoneName',
            'record' => 'getRecord',
            'status' => 'getStatus',
            'secondLevelZoneName' => 'getSecondLevelZoneName',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['secondLevelZoneName'] = isset($data['secondLevelZoneName']) ? $data['secondLevelZoneName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    *  **参数解释：** 授权请求ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 授权请求ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets zoneName
    *  **参数解释：** 待创建的子域名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string|null $zoneName **参数解释：** 待创建的子域名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets record
    *  record
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\RecordInfo|null
    */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
    * Sets record
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\RecordInfo|null $record record
    *
    * @return $this
    */
    public function setRecord($record)
    {
        $this->container['record'] = $record;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 授权状态。 **取值范围：** - CREATED：已创建 - VERIFIED：已验证
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
    * @param string|null $status **参数解释：** 授权状态。 **取值范围：** - CREATED：已创建 - VERIFIED：已验证
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets secondLevelZoneName
    *  **参数解释：** 子域名所属的二级域名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getSecondLevelZoneName()
    {
        return $this->container['secondLevelZoneName'];
    }

    /**
    * Sets secondLevelZoneName
    *
    * @param string|null $secondLevelZoneName **参数解释：** 子域名所属的二级域名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSecondLevelZoneName($secondLevelZoneName)
    {
        $this->container['secondLevelZoneName'] = $secondLevelZoneName;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

