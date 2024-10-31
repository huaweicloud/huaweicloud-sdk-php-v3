<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EwProtectResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EwProtectResourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectedResourceType  防护资源类型：0 VPC，1 VGW，2 VPN，3 PEERING
    * protectedResourceName  防护资源名称
    * protectedResourceId  防护资源id
    * protectedResourceNatName  防护资源nat网关名称，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的名称。
    * protectedResourceNatId  防护资源nat网关id，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的id。
    * protectedResourceProjectId  防火墙支持跨账户防护，此处为防护资源租户id
    * protectedResourceMode  防护资源模式，为er
    * status  防护资源的防护状态，0表示已关联，1表示未关联。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectedResourceType' => 'int',
            'protectedResourceName' => 'string',
            'protectedResourceId' => 'string',
            'protectedResourceNatName' => 'string',
            'protectedResourceNatId' => 'string',
            'protectedResourceProjectId' => 'string',
            'protectedResourceMode' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectedResourceType  防护资源类型：0 VPC，1 VGW，2 VPN，3 PEERING
    * protectedResourceName  防护资源名称
    * protectedResourceId  防护资源id
    * protectedResourceNatName  防护资源nat网关名称，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的名称。
    * protectedResourceNatId  防护资源nat网关id，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的id。
    * protectedResourceProjectId  防火墙支持跨账户防护，此处为防护资源租户id
    * protectedResourceMode  防护资源模式，为er
    * status  防护资源的防护状态，0表示已关联，1表示未关联。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectedResourceType' => 'int32',
        'protectedResourceName' => null,
        'protectedResourceId' => null,
        'protectedResourceNatName' => null,
        'protectedResourceNatId' => null,
        'protectedResourceProjectId' => null,
        'protectedResourceMode' => null,
        'status' => 'int32'
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
    * protectedResourceType  防护资源类型：0 VPC，1 VGW，2 VPN，3 PEERING
    * protectedResourceName  防护资源名称
    * protectedResourceId  防护资源id
    * protectedResourceNatName  防护资源nat网关名称，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的名称。
    * protectedResourceNatId  防护资源nat网关id，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的id。
    * protectedResourceProjectId  防火墙支持跨账户防护，此处为防护资源租户id
    * protectedResourceMode  防护资源模式，为er
    * status  防护资源的防护状态，0表示已关联，1表示未关联。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectedResourceType' => 'protected_resource_type',
            'protectedResourceName' => 'protected_resource_name',
            'protectedResourceId' => 'protected_resource_id',
            'protectedResourceNatName' => 'protected_resource_nat_name',
            'protectedResourceNatId' => 'protected_resource_nat_id',
            'protectedResourceProjectId' => 'protected_resource_project_id',
            'protectedResourceMode' => 'protected_resource_mode',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectedResourceType  防护资源类型：0 VPC，1 VGW，2 VPN，3 PEERING
    * protectedResourceName  防护资源名称
    * protectedResourceId  防护资源id
    * protectedResourceNatName  防护资源nat网关名称，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的名称。
    * protectedResourceNatId  防护资源nat网关id，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的id。
    * protectedResourceProjectId  防火墙支持跨账户防护，此处为防护资源租户id
    * protectedResourceMode  防护资源模式，为er
    * status  防护资源的防护状态，0表示已关联，1表示未关联。
    *
    * @var string[]
    */
    protected static $setters = [
            'protectedResourceType' => 'setProtectedResourceType',
            'protectedResourceName' => 'setProtectedResourceName',
            'protectedResourceId' => 'setProtectedResourceId',
            'protectedResourceNatName' => 'setProtectedResourceNatName',
            'protectedResourceNatId' => 'setProtectedResourceNatId',
            'protectedResourceProjectId' => 'setProtectedResourceProjectId',
            'protectedResourceMode' => 'setProtectedResourceMode',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectedResourceType  防护资源类型：0 VPC，1 VGW，2 VPN，3 PEERING
    * protectedResourceName  防护资源名称
    * protectedResourceId  防护资源id
    * protectedResourceNatName  防护资源nat网关名称，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的名称。
    * protectedResourceNatId  防护资源nat网关id，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的id。
    * protectedResourceProjectId  防火墙支持跨账户防护，此处为防护资源租户id
    * protectedResourceMode  防护资源模式，为er
    * status  防护资源的防护状态，0表示已关联，1表示未关联。
    *
    * @var string[]
    */
    protected static $getters = [
            'protectedResourceType' => 'getProtectedResourceType',
            'protectedResourceName' => 'getProtectedResourceName',
            'protectedResourceId' => 'getProtectedResourceId',
            'protectedResourceNatName' => 'getProtectedResourceNatName',
            'protectedResourceNatId' => 'getProtectedResourceNatId',
            'protectedResourceProjectId' => 'getProtectedResourceProjectId',
            'protectedResourceMode' => 'getProtectedResourceMode',
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
        $this->container['protectedResourceType'] = isset($data['protectedResourceType']) ? $data['protectedResourceType'] : null;
        $this->container['protectedResourceName'] = isset($data['protectedResourceName']) ? $data['protectedResourceName'] : null;
        $this->container['protectedResourceId'] = isset($data['protectedResourceId']) ? $data['protectedResourceId'] : null;
        $this->container['protectedResourceNatName'] = isset($data['protectedResourceNatName']) ? $data['protectedResourceNatName'] : null;
        $this->container['protectedResourceNatId'] = isset($data['protectedResourceNatId']) ? $data['protectedResourceNatId'] : null;
        $this->container['protectedResourceProjectId'] = isset($data['protectedResourceProjectId']) ? $data['protectedResourceProjectId'] : null;
        $this->container['protectedResourceMode'] = isset($data['protectedResourceMode']) ? $data['protectedResourceMode'] : null;
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
        if ($this->container['protectedResourceType'] === null) {
            $invalidProperties[] = "'protectedResourceType' can't be null";
        }
        if ($this->container['protectedResourceName'] === null) {
            $invalidProperties[] = "'protectedResourceName' can't be null";
        }
        if ($this->container['protectedResourceId'] === null) {
            $invalidProperties[] = "'protectedResourceId' can't be null";
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
    * Gets protectedResourceType
    *  防护资源类型：0 VPC，1 VGW，2 VPN，3 PEERING
    *
    * @return int
    */
    public function getProtectedResourceType()
    {
        return $this->container['protectedResourceType'];
    }

    /**
    * Sets protectedResourceType
    *
    * @param int $protectedResourceType 防护资源类型：0 VPC，1 VGW，2 VPN，3 PEERING
    *
    * @return $this
    */
    public function setProtectedResourceType($protectedResourceType)
    {
        $this->container['protectedResourceType'] = $protectedResourceType;
        return $this;
    }

    /**
    * Gets protectedResourceName
    *  防护资源名称
    *
    * @return string
    */
    public function getProtectedResourceName()
    {
        return $this->container['protectedResourceName'];
    }

    /**
    * Sets protectedResourceName
    *
    * @param string $protectedResourceName 防护资源名称
    *
    * @return $this
    */
    public function setProtectedResourceName($protectedResourceName)
    {
        $this->container['protectedResourceName'] = $protectedResourceName;
        return $this;
    }

    /**
    * Gets protectedResourceId
    *  防护资源id
    *
    * @return string
    */
    public function getProtectedResourceId()
    {
        return $this->container['protectedResourceId'];
    }

    /**
    * Sets protectedResourceId
    *
    * @param string $protectedResourceId 防护资源id
    *
    * @return $this
    */
    public function setProtectedResourceId($protectedResourceId)
    {
        $this->container['protectedResourceId'] = $protectedResourceId;
        return $this;
    }

    /**
    * Gets protectedResourceNatName
    *  防护资源nat网关名称，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的名称。
    *
    * @return string|null
    */
    public function getProtectedResourceNatName()
    {
        return $this->container['protectedResourceNatName'];
    }

    /**
    * Sets protectedResourceNatName
    *
    * @param string|null $protectedResourceNatName 防护资源nat网关名称，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的名称。
    *
    * @return $this
    */
    public function setProtectedResourceNatName($protectedResourceNatName)
    {
        $this->container['protectedResourceNatName'] = $protectedResourceNatName;
        return $this;
    }

    /**
    * Gets protectedResourceNatId
    *  防护资源nat网关id，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的id。
    *
    * @return string|null
    */
    public function getProtectedResourceNatId()
    {
        return $this->container['protectedResourceNatId'];
    }

    /**
    * Sets protectedResourceNatId
    *
    * @param string|null $protectedResourceNatId 防护资源nat网关id，专业版防火墙支持NAT规则，此字段表示防护连接的NAT的id。
    *
    * @return $this
    */
    public function setProtectedResourceNatId($protectedResourceNatId)
    {
        $this->container['protectedResourceNatId'] = $protectedResourceNatId;
        return $this;
    }

    /**
    * Gets protectedResourceProjectId
    *  防火墙支持跨账户防护，此处为防护资源租户id
    *
    * @return string|null
    */
    public function getProtectedResourceProjectId()
    {
        return $this->container['protectedResourceProjectId'];
    }

    /**
    * Sets protectedResourceProjectId
    *
    * @param string|null $protectedResourceProjectId 防火墙支持跨账户防护，此处为防护资源租户id
    *
    * @return $this
    */
    public function setProtectedResourceProjectId($protectedResourceProjectId)
    {
        $this->container['protectedResourceProjectId'] = $protectedResourceProjectId;
        return $this;
    }

    /**
    * Gets protectedResourceMode
    *  防护资源模式，为er
    *
    * @return string|null
    */
    public function getProtectedResourceMode()
    {
        return $this->container['protectedResourceMode'];
    }

    /**
    * Sets protectedResourceMode
    *
    * @param string|null $protectedResourceMode 防护资源模式，为er
    *
    * @return $this
    */
    public function setProtectedResourceMode($protectedResourceMode)
    {
        $this->container['protectedResourceMode'] = $protectedResourceMode;
        return $this;
    }

    /**
    * Gets status
    *  防护资源的防护状态，0表示已关联，1表示未关联。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 防护资源的防护状态，0表示已关联，1表示未关联。
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

