<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupsRespGroupMembers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupsResp_group_members';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * host  **参数解释**： 消费组consumer地址。 **取值范围**： 不涉及。
    * assignment  **参数解释**： consumer分配到的分区信息。
    * memberId  **参数解释**： 消费组consumer的ID。 **取值范围**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'host' => 'string',
            'assignment' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupAssignment[]',
            'memberId' => 'string',
            'clientId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * host  **参数解释**： 消费组consumer地址。 **取值范围**： 不涉及。
    * assignment  **参数解释**： consumer分配到的分区信息。
    * memberId  **参数解释**： 消费组consumer的ID。 **取值范围**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'host' => null,
        'assignment' => null,
        'memberId' => null,
        'clientId' => null
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
    * host  **参数解释**： 消费组consumer地址。 **取值范围**： 不涉及。
    * assignment  **参数解释**： consumer分配到的分区信息。
    * memberId  **参数解释**： 消费组consumer的ID。 **取值范围**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'host' => 'host',
            'assignment' => 'assignment',
            'memberId' => 'member_id',
            'clientId' => 'client_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * host  **参数解释**： 消费组consumer地址。 **取值范围**： 不涉及。
    * assignment  **参数解释**： consumer分配到的分区信息。
    * memberId  **参数解释**： 消费组consumer的ID。 **取值范围**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'host' => 'setHost',
            'assignment' => 'setAssignment',
            'memberId' => 'setMemberId',
            'clientId' => 'setClientId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * host  **参数解释**： 消费组consumer地址。 **取值范围**： 不涉及。
    * assignment  **参数解释**： consumer分配到的分区信息。
    * memberId  **参数解释**： 消费组consumer的ID。 **取值范围**： 不涉及。
    * clientId  **参数解释**： 客户端ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'host' => 'getHost',
            'assignment' => 'getAssignment',
            'memberId' => 'getMemberId',
            'clientId' => 'getClientId'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['assignment'] = isset($data['assignment']) ? $data['assignment'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
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
    * Gets host
    *  **参数解释**： 消费组consumer地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host **参数解释**： 消费组consumer地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets assignment
    *  **参数解释**： consumer分配到的分区信息。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupAssignment[]|null
    */
    public function getAssignment()
    {
        return $this->container['assignment'];
    }

    /**
    * Sets assignment
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupAssignment[]|null $assignment **参数解释**： consumer分配到的分区信息。
    *
    * @return $this
    */
    public function setAssignment($assignment)
    {
        $this->container['assignment'] = $assignment;
        return $this;
    }

    /**
    * Gets memberId
    *  **参数解释**： 消费组consumer的ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string|null $memberId **参数解释**： 消费组consumer的ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
        return $this;
    }

    /**
    * Gets clientId
    *  **参数解释**： 客户端ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId **参数解释**： 客户端ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
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

