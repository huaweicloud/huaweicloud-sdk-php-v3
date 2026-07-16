<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SfsTurboConnectionStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SfsTurboConnectionStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：sfsTurbo实例的名称。 **取值范围**：不涉及。
    * sfsId  **参数解释**：sfsTurbo实例的ID。 **取值范围**：不涉及。
    * connectionType  **参数解释**：关联方式。 **取值范围**：可选值如下： - VpcPort：通过挂载网卡直通 - Peering：通过对等连接打通
    * ipAddr  **参数解释**：SFS Turbo的访问地址。 **取值范围**：不涉及。
    * status  **参数解释**：与SFS Turbo的连接状态信息。 **取值范围**：可选值如下： - Active：SFS连通状态正常 - Abnormal：SFS连通状态异常 - Creating：SFS连通状态创建关联中 - Deleting：SFS连通状态解除关联中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sfsId' => 'string',
            'connectionType' => 'string',
            'ipAddr' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：sfsTurbo实例的名称。 **取值范围**：不涉及。
    * sfsId  **参数解释**：sfsTurbo实例的ID。 **取值范围**：不涉及。
    * connectionType  **参数解释**：关联方式。 **取值范围**：可选值如下： - VpcPort：通过挂载网卡直通 - Peering：通过对等连接打通
    * ipAddr  **参数解释**：SFS Turbo的访问地址。 **取值范围**：不涉及。
    * status  **参数解释**：与SFS Turbo的连接状态信息。 **取值范围**：可选值如下： - Active：SFS连通状态正常 - Abnormal：SFS连通状态异常 - Creating：SFS连通状态创建关联中 - Deleting：SFS连通状态解除关联中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sfsId' => null,
        'connectionType' => null,
        'ipAddr' => null,
        'status' => null
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
    * name  **参数解释**：sfsTurbo实例的名称。 **取值范围**：不涉及。
    * sfsId  **参数解释**：sfsTurbo实例的ID。 **取值范围**：不涉及。
    * connectionType  **参数解释**：关联方式。 **取值范围**：可选值如下： - VpcPort：通过挂载网卡直通 - Peering：通过对等连接打通
    * ipAddr  **参数解释**：SFS Turbo的访问地址。 **取值范围**：不涉及。
    * status  **参数解释**：与SFS Turbo的连接状态信息。 **取值范围**：可选值如下： - Active：SFS连通状态正常 - Abnormal：SFS连通状态异常 - Creating：SFS连通状态创建关联中 - Deleting：SFS连通状态解除关联中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sfsId' => 'sfsId',
            'connectionType' => 'connectionType',
            'ipAddr' => 'ipAddr',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：sfsTurbo实例的名称。 **取值范围**：不涉及。
    * sfsId  **参数解释**：sfsTurbo实例的ID。 **取值范围**：不涉及。
    * connectionType  **参数解释**：关联方式。 **取值范围**：可选值如下： - VpcPort：通过挂载网卡直通 - Peering：通过对等连接打通
    * ipAddr  **参数解释**：SFS Turbo的访问地址。 **取值范围**：不涉及。
    * status  **参数解释**：与SFS Turbo的连接状态信息。 **取值范围**：可选值如下： - Active：SFS连通状态正常 - Abnormal：SFS连通状态异常 - Creating：SFS连通状态创建关联中 - Deleting：SFS连通状态解除关联中
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sfsId' => 'setSfsId',
            'connectionType' => 'setConnectionType',
            'ipAddr' => 'setIpAddr',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：sfsTurbo实例的名称。 **取值范围**：不涉及。
    * sfsId  **参数解释**：sfsTurbo实例的ID。 **取值范围**：不涉及。
    * connectionType  **参数解释**：关联方式。 **取值范围**：可选值如下： - VpcPort：通过挂载网卡直通 - Peering：通过对等连接打通
    * ipAddr  **参数解释**：SFS Turbo的访问地址。 **取值范围**：不涉及。
    * status  **参数解释**：与SFS Turbo的连接状态信息。 **取值范围**：可选值如下： - Active：SFS连通状态正常 - Abnormal：SFS连通状态异常 - Creating：SFS连通状态创建关联中 - Deleting：SFS连通状态解除关联中
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sfsId' => 'getSfsId',
            'connectionType' => 'getConnectionType',
            'ipAddr' => 'getIpAddr',
            'status' => 'getStatus'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sfsId'] = isset($data['sfsId']) ? $data['sfsId'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['ipAddr'] = isset($data['ipAddr']) ? $data['ipAddr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['sfsId'] === null) {
            $invalidProperties[] = "'sfsId' can't be null";
        }
        if ($this->container['connectionType'] === null) {
            $invalidProperties[] = "'connectionType' can't be null";
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
    * Gets name
    *  **参数解释**：sfsTurbo实例的名称。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：sfsTurbo实例的名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sfsId
    *  **参数解释**：sfsTurbo实例的ID。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getSfsId()
    {
        return $this->container['sfsId'];
    }

    /**
    * Sets sfsId
    *
    * @param string $sfsId **参数解释**：sfsTurbo实例的ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSfsId($sfsId)
    {
        $this->container['sfsId'] = $sfsId;
        return $this;
    }

    /**
    * Gets connectionType
    *  **参数解释**：关联方式。 **取值范围**：可选值如下： - VpcPort：通过挂载网卡直通 - Peering：通过对等连接打通
    *
    * @return string
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param string $connectionType **参数解释**：关联方式。 **取值范围**：可选值如下： - VpcPort：通过挂载网卡直通 - Peering：通过对等连接打通
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets ipAddr
    *  **参数解释**：SFS Turbo的访问地址。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getIpAddr()
    {
        return $this->container['ipAddr'];
    }

    /**
    * Sets ipAddr
    *
    * @param string|null $ipAddr **参数解释**：SFS Turbo的访问地址。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setIpAddr($ipAddr)
    {
        $this->container['ipAddr'] = $ipAddr;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：与SFS Turbo的连接状态信息。 **取值范围**：可选值如下： - Active：SFS连通状态正常 - Abnormal：SFS连通状态异常 - Creating：SFS连通状态创建关联中 - Deleting：SFS连通状态解除关联中
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
    * @param string|null $status **参数解释**：与SFS Turbo的连接状态信息。 **取值范围**：可选值如下： - Active：SFS连通状态正常 - Abnormal：SFS连通状态异常 - Creating：SFS连通状态创建关联中 - Deleting：SFS连通状态解除关联中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

