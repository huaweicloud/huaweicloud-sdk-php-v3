<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronRemoveRouterInterfaceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronRemoveRouterInterfaceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portId  路由器添加的端口对应的ID
    * subnetId  路由器添加的子网对应的ID
    * tenantId  项目ID
    * projectId  项目ID
    * id  路由器的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portId' => 'string',
            'subnetId' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portId  路由器添加的端口对应的ID
    * subnetId  路由器添加的子网对应的ID
    * tenantId  项目ID
    * projectId  项目ID
    * id  路由器的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'portId' => null,
        'subnetId' => null,
        'tenantId' => null,
        'projectId' => null,
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
    * portId  路由器添加的端口对应的ID
    * subnetId  路由器添加的子网对应的ID
    * tenantId  项目ID
    * projectId  项目ID
    * id  路由器的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portId' => 'port_id',
            'subnetId' => 'subnet_id',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portId  路由器添加的端口对应的ID
    * subnetId  路由器添加的子网对应的ID
    * tenantId  项目ID
    * projectId  项目ID
    * id  路由器的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'portId' => 'setPortId',
            'subnetId' => 'setSubnetId',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portId  路由器添加的端口对应的ID
    * subnetId  路由器添加的子网对应的ID
    * tenantId  项目ID
    * projectId  项目ID
    * id  路由器的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'portId' => 'getPortId',
            'subnetId' => 'getSubnetId',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
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
    const SUBNET_ID__0_9A_F8__0_9A_F4__0_9A_F4__0_9A_F4__0_9A_F12 = '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubnetIdAllowableValues()
    {
        return [
            self::SUBNET_ID__0_9A_F8__0_9A_F4__0_9A_F4__0_9A_F4__0_9A_F12,
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
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
            if (!is_null($this->container['portId']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['portId'])) {
                $invalidProperties[] = "invalid value for 'portId', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            $allowedValues = $this->getSubnetIdAllowableValues();
                if (!is_null($this->container['subnetId']) && !in_array($this->container['subnetId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subnetId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['id']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
    * Gets portId
    *  路由器添加的端口对应的ID
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 路由器添加的端口对应的ID
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets subnetId
    *  路由器添加的子网对应的ID
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 路由器添加的子网对应的ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID
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
    * @param string|null $tenantId 项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  路由器的ID
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
    * @param string|null $id 路由器的ID
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

