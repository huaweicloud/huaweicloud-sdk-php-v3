<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerRoceNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerRoceNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：RoCE网络id。 **取值范围**：不涉及。
    * name  **参数解释**：RoCE网络名称。 **取值范围**：不涉及。
    * projectId  **参数解释**：项目ID。 **取值范围**：不涉及。
    * status  **参数解释**：状态。 **参数解释**：不涉及。
    * tenantId  **参数解释**：租户id。 **取值范围**：不涉及。
    * subnets  **参数解释**：子网。 **取值范围**：不涉及。
    * providernetworkType  **参数解释**：RoCE网络类型。 **取值范围**：不涉及。
    * providerphysicalNetwork  **参数解释**：实际物理网络。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'subnets' => 'string',
            'providernetworkType' => 'string',
            'providerphysicalNetwork' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：RoCE网络id。 **取值范围**：不涉及。
    * name  **参数解释**：RoCE网络名称。 **取值范围**：不涉及。
    * projectId  **参数解释**：项目ID。 **取值范围**：不涉及。
    * status  **参数解释**：状态。 **参数解释**：不涉及。
    * tenantId  **参数解释**：租户id。 **取值范围**：不涉及。
    * subnets  **参数解释**：子网。 **取值范围**：不涉及。
    * providernetworkType  **参数解释**：RoCE网络类型。 **取值范围**：不涉及。
    * providerphysicalNetwork  **参数解释**：实际物理网络。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'status' => null,
        'tenantId' => null,
        'subnets' => null,
        'providernetworkType' => null,
        'providerphysicalNetwork' => null
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
    * id  **参数解释**：RoCE网络id。 **取值范围**：不涉及。
    * name  **参数解释**：RoCE网络名称。 **取值范围**：不涉及。
    * projectId  **参数解释**：项目ID。 **取值范围**：不涉及。
    * status  **参数解释**：状态。 **参数解释**：不涉及。
    * tenantId  **参数解释**：租户id。 **取值范围**：不涉及。
    * subnets  **参数解释**：子网。 **取值范围**：不涉及。
    * providernetworkType  **参数解释**：RoCE网络类型。 **取值范围**：不涉及。
    * providerphysicalNetwork  **参数解释**：实际物理网络。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'subnets' => 'subnets',
            'providernetworkType' => 'provider:network_type',
            'providerphysicalNetwork' => 'provider:physical_network'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：RoCE网络id。 **取值范围**：不涉及。
    * name  **参数解释**：RoCE网络名称。 **取值范围**：不涉及。
    * projectId  **参数解释**：项目ID。 **取值范围**：不涉及。
    * status  **参数解释**：状态。 **参数解释**：不涉及。
    * tenantId  **参数解释**：租户id。 **取值范围**：不涉及。
    * subnets  **参数解释**：子网。 **取值范围**：不涉及。
    * providernetworkType  **参数解释**：RoCE网络类型。 **取值范围**：不涉及。
    * providerphysicalNetwork  **参数解释**：实际物理网络。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'subnets' => 'setSubnets',
            'providernetworkType' => 'setProvidernetworkType',
            'providerphysicalNetwork' => 'setProviderphysicalNetwork'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：RoCE网络id。 **取值范围**：不涉及。
    * name  **参数解释**：RoCE网络名称。 **取值范围**：不涉及。
    * projectId  **参数解释**：项目ID。 **取值范围**：不涉及。
    * status  **参数解释**：状态。 **参数解释**：不涉及。
    * tenantId  **参数解释**：租户id。 **取值范围**：不涉及。
    * subnets  **参数解释**：子网。 **取值范围**：不涉及。
    * providernetworkType  **参数解释**：RoCE网络类型。 **取值范围**：不涉及。
    * providerphysicalNetwork  **参数解释**：实际物理网络。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'subnets' => 'getSubnets',
            'providernetworkType' => 'getProvidernetworkType',
            'providerphysicalNetwork' => 'getProviderphysicalNetwork'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
        $this->container['providernetworkType'] = isset($data['providernetworkType']) ? $data['providernetworkType'] : null;
        $this->container['providerphysicalNetwork'] = isset($data['providerphysicalNetwork']) ? $data['providerphysicalNetwork'] : null;
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
    *  **参数解释**：RoCE网络id。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：RoCE网络id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：RoCE网络名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**：RoCE网络名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：项目ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**：项目ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：状态。 **参数解释**：不涉及。
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
    * @param string|null $status **参数解释**：状态。 **参数解释**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释**：租户id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释**：租户id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets subnets
    *  **参数解释**：子网。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
    * Sets subnets
    *
    * @param string|null $subnets **参数解释**：子网。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;
        return $this;
    }

    /**
    * Gets providernetworkType
    *  **参数解释**：RoCE网络类型。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getProvidernetworkType()
    {
        return $this->container['providernetworkType'];
    }

    /**
    * Sets providernetworkType
    *
    * @param string|null $providernetworkType **参数解释**：RoCE网络类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setProvidernetworkType($providernetworkType)
    {
        $this->container['providernetworkType'] = $providernetworkType;
        return $this;
    }

    /**
    * Gets providerphysicalNetwork
    *  **参数解释**：实际物理网络。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getProviderphysicalNetwork()
    {
        return $this->container['providerphysicalNetwork'];
    }

    /**
    * Sets providerphysicalNetwork
    *
    * @param string|null $providerphysicalNetwork **参数解释**：实际物理网络。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setProviderphysicalNetwork($providerphysicalNetwork)
    {
        $this->container['providerphysicalNetwork'] = $providerphysicalNetwork;
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

