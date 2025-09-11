<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetAuditAlarmLogStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetAuditAlarmLogStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * id  **参数解释**： 告警记录ID。可通过[查询审计告警信息]接口的ID字段获取。 **约束限制**： 不涉及 **取值范围**： 以查询审计告警信息接口值为准，字符长度16-64。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * id  **参数解释**： 告警记录ID。可通过[查询审计告警信息]接口的ID字段获取。 **约束限制**： 不涉及 **取值范围**： 以查询审计告警信息接口值为准，字符长度16-64。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'id' => null
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
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * id  **参数解释**： 告警记录ID。可通过[查询审计告警信息]接口的ID字段获取。 **约束限制**： 不涉及 **取值范围**： 以查询审计告警信息接口值为准，字符长度16-64。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * id  **参数解释**： 告警记录ID。可通过[查询审计告警信息]接口的ID字段获取。 **约束限制**： 不涉及 **取值范围**： 以查询审计告警信息接口值为准，字符长度16-64。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * id  **参数解释**： 告警记录ID。可通过[查询审计告警信息]接口的ID字段获取。 **约束限制**： 不涉及 **取值范围**： 以查询审计告警信息接口值为准，字符长度16-64。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'id' => 'getId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 16.";
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
    * Gets instanceId
    *  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 告警记录ID。可通过[查询审计告警信息]接口的ID字段获取。 **约束限制**： 不涉及 **取值范围**： 以查询审计告警信息接口值为准，字符长度16-64。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： 告警记录ID。可通过[查询审计告警信息]接口的ID字段获取。 **约束限制**： 不涉及 **取值范围**： 以查询审计告警信息接口值为准，字符长度16-64。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

