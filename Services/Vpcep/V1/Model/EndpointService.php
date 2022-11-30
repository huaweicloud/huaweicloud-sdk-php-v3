<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointService';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  公共终端节点服务的ID，唯一标识。
    * owner  终端节点服务的所有者。
    * serviceName  公共终端节点服务的名称。
    * serviceType  终端节点服务类型。 ● gataway：由运维人员配置。用户无需创建，可直接使用。 ● interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYYMM-DDTHH:MM:SSZ
    * isCharge  连接该终端节点服务的终端节点是否计费。 ● true：计费 ● false：不计费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'owner' => 'string',
            'serviceName' => 'string',
            'serviceType' => 'string',
            'createdAt' => 'string',
            'isCharge' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  公共终端节点服务的ID，唯一标识。
    * owner  终端节点服务的所有者。
    * serviceName  公共终端节点服务的名称。
    * serviceType  终端节点服务类型。 ● gataway：由运维人员配置。用户无需创建，可直接使用。 ● interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYYMM-DDTHH:MM:SSZ
    * isCharge  连接该终端节点服务的终端节点是否计费。 ● true：计费 ● false：不计费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'owner' => null,
        'serviceName' => null,
        'serviceType' => null,
        'createdAt' => null,
        'isCharge' => null
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
    * id  公共终端节点服务的ID，唯一标识。
    * owner  终端节点服务的所有者。
    * serviceName  公共终端节点服务的名称。
    * serviceType  终端节点服务类型。 ● gataway：由运维人员配置。用户无需创建，可直接使用。 ● interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYYMM-DDTHH:MM:SSZ
    * isCharge  连接该终端节点服务的终端节点是否计费。 ● true：计费 ● false：不计费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'owner' => 'owner',
            'serviceName' => 'service_name',
            'serviceType' => 'service_type',
            'createdAt' => 'created_at',
            'isCharge' => 'is_charge'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  公共终端节点服务的ID，唯一标识。
    * owner  终端节点服务的所有者。
    * serviceName  公共终端节点服务的名称。
    * serviceType  终端节点服务类型。 ● gataway：由运维人员配置。用户无需创建，可直接使用。 ● interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYYMM-DDTHH:MM:SSZ
    * isCharge  连接该终端节点服务的终端节点是否计费。 ● true：计费 ● false：不计费
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'owner' => 'setOwner',
            'serviceName' => 'setServiceName',
            'serviceType' => 'setServiceType',
            'createdAt' => 'setCreatedAt',
            'isCharge' => 'setIsCharge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  公共终端节点服务的ID，唯一标识。
    * owner  终端节点服务的所有者。
    * serviceName  公共终端节点服务的名称。
    * serviceType  终端节点服务类型。 ● gataway：由运维人员配置。用户无需创建，可直接使用。 ● interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYYMM-DDTHH:MM:SSZ
    * isCharge  连接该终端节点服务的终端节点是否计费。 ● true：计费 ● false：不计费
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'owner' => 'getOwner',
            'serviceName' => 'getServiceName',
            'serviceType' => 'getServiceType',
            'createdAt' => 'getCreatedAt',
            'isCharge' => 'getIsCharge'
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
    const SERVICE_TYPE__INTERFACE = 'interface';
    const SERVICE_TYPE_GATEWAY = 'gateway';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE__INTERFACE,
            self::SERVICE_TYPE_GATEWAY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['isCharge'] = isset($data['isCharge']) ? $data['isCharge'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  公共终端节点服务的ID，唯一标识。
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
    * @param string|null $id 公共终端节点服务的ID，唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets owner
    *  终端节点服务的所有者。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 终端节点服务的所有者。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets serviceName
    *  公共终端节点服务的名称。
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 公共终端节点服务的名称。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets serviceType
    *  终端节点服务类型。 ● gataway：由运维人员配置。用户无需创建，可直接使用。 ● interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 终端节点服务类型。 ● gataway：由运维人员配置。用户无需创建，可直接使用。 ● interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets createdAt
    *  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYYMM-DDTHH:MM:SSZ
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
    * @param string|null $createdAt 终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYYMM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets isCharge
    *  连接该终端节点服务的终端节点是否计费。 ● true：计费 ● false：不计费
    *
    * @return bool|null
    */
    public function getIsCharge()
    {
        return $this->container['isCharge'];
    }

    /**
    * Sets isCharge
    *
    * @param bool|null $isCharge 连接该终端节点服务的终端节点是否计费。 ● true：计费 ● false：不计费
    *
    * @return $this
    */
    public function setIsCharge($isCharge)
    {
        $this->container['isCharge'] = $isCharge;
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

