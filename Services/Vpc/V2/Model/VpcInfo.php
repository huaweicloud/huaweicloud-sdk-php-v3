<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  对等连接其中一端vpc ID
    * tenantId  对等连接其中一端vpc所属的租户ID 约束：跨租户VPC创建对等连接时必选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'tenantId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  对等连接其中一端vpc ID
    * tenantId  对等连接其中一端vpc所属的租户ID 约束：跨租户VPC创建对等连接时必选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'tenantId' => null
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
    * vpcId  对等连接其中一端vpc ID
    * tenantId  对等连接其中一端vpc所属的租户ID 约束：跨租户VPC创建对等连接时必选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'tenantId' => 'tenant_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  对等连接其中一端vpc ID
    * tenantId  对等连接其中一端vpc所属的租户ID 约束：跨租户VPC创建对等连接时必选
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'tenantId' => 'setTenantId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  对等连接其中一端vpc ID
    * tenantId  对等连接其中一端vpc所属的租户ID 约束：跨租户VPC创建对等连接时必选
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'tenantId' => 'getTenantId'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets vpcId
    *  对等连接其中一端vpc ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 对等连接其中一端vpc ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets tenantId
    *  对等连接其中一端vpc所属的租户ID 约束：跨租户VPC创建对等连接时必选
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
    * @param string|null $tenantId 对等连接其中一端vpc所属的租户ID 约束：跨租户VPC创建对等连接时必选
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
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

