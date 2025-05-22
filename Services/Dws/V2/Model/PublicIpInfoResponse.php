<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicIpInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicIpInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * address  **参数解释**： 公网IP。 **取值范围**： 合法的公网IPV4地址。
    * status  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 绑定的DWS集群的节点ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 绑定的DWS集群的节点名称。 **取值范围**： 不涉及。
    * bandwidthSize  **参数解释**： 公网IP带宽信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'address' => 'string',
            'status' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'bandwidthSize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * address  **参数解释**： 公网IP。 **取值范围**： 合法的公网IPV4地址。
    * status  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 绑定的DWS集群的节点ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 绑定的DWS集群的节点名称。 **取值范围**： 不涉及。
    * bandwidthSize  **参数解释**： 公网IP带宽信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'address' => null,
        'status' => null,
        'instanceId' => null,
        'instanceName' => null,
        'bandwidthSize' => null
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
    * id  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * address  **参数解释**： 公网IP。 **取值范围**： 合法的公网IPV4地址。
    * status  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 绑定的DWS集群的节点ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 绑定的DWS集群的节点名称。 **取值范围**： 不涉及。
    * bandwidthSize  **参数解释**： 公网IP带宽信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'address' => 'address',
            'status' => 'status',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'bandwidthSize' => 'bandwidth_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * address  **参数解释**： 公网IP。 **取值范围**： 合法的公网IPV4地址。
    * status  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 绑定的DWS集群的节点ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 绑定的DWS集群的节点名称。 **取值范围**： 不涉及。
    * bandwidthSize  **参数解释**： 公网IP带宽信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'address' => 'setAddress',
            'status' => 'setStatus',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'bandwidthSize' => 'setBandwidthSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * address  **参数解释**： 公网IP。 **取值范围**： 合法的公网IPV4地址。
    * status  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 绑定的DWS集群的节点ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 绑定的DWS集群的节点名称。 **取值范围**： 不涉及。
    * bandwidthSize  **参数解释**： 公网IP带宽信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'address' => 'getAddress',
            'status' => 'getStatus',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'bandwidthSize' => 'getBandwidthSize'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
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
    *  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets address
    *  **参数解释**： 公网IP。 **取值范围**： 合法的公网IPV4地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address **参数解释**： 公网IP。 **取值范围**： 合法的公网IPV4地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 绑定的DWS集群的节点ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**： 绑定的DWS集群的节点ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**： 绑定的DWS集群的节点名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**： 绑定的DWS集群的节点名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  **参数解释**： 公网IP带宽信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param string|null $bandwidthSize **参数解释**： 公网IP带宽信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
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

