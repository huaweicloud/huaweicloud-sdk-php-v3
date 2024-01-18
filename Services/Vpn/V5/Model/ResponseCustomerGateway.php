<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseCustomerGateway implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseCustomerGateway';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  网关的ID
    * name  网关名称
    * bgpAsn  网关的bgp asn号
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * caCertificate  caCertificate
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'bgpAsn' => 'int',
            'idType' => 'string',
            'idValue' => 'string',
            'caCertificate' => '\HuaweiCloud\SDK\Vpn\V5\Model\CaCertificate',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  网关的ID
    * name  网关名称
    * bgpAsn  网关的bgp asn号
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * caCertificate  caCertificate
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'bgpAsn' => 'int64',
        'idType' => null,
        'idValue' => null,
        'caCertificate' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'tags' => null
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
    * id  网关的ID
    * name  网关名称
    * bgpAsn  网关的bgp asn号
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * caCertificate  caCertificate
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'bgpAsn' => 'bgp_asn',
            'idType' => 'id_type',
            'idValue' => 'id_value',
            'caCertificate' => 'ca_certificate',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  网关的ID
    * name  网关名称
    * bgpAsn  网关的bgp asn号
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * caCertificate  caCertificate
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'bgpAsn' => 'setBgpAsn',
            'idType' => 'setIdType',
            'idValue' => 'setIdValue',
            'caCertificate' => 'setCaCertificate',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  网关的ID
    * name  网关名称
    * bgpAsn  网关的bgp asn号
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * caCertificate  caCertificate
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'bgpAsn' => 'getBgpAsn',
            'idType' => 'getIdType',
            'idValue' => 'getIdValue',
            'caCertificate' => 'getCaCertificate',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'tags' => 'getTags'
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
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['idType'] = isset($data['idType']) ? $data['idType'] : null;
        $this->container['idValue'] = isset($data['idValue']) ? $data['idValue'] : null;
        $this->container['caCertificate'] = isset($data['caCertificate']) ? $data['caCertificate'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    *  网关的ID
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
    * @param string|null $id 网关的ID
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
    *  网关名称
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
    * @param string|null $name 网关名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  网关的bgp asn号
    *
    * @return int|null
    */
    public function getBgpAsn()
    {
        return $this->container['bgpAsn'];
    }

    /**
    * Sets bgpAsn
    *
    * @param int|null $bgpAsn 网关的bgp asn号
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets idType
    *  对端网关标识类型
    *
    * @return string|null
    */
    public function getIdType()
    {
        return $this->container['idType'];
    }

    /**
    * Sets idType
    *
    * @param string|null $idType 对端网关标识类型
    *
    * @return $this
    */
    public function setIdType($idType)
    {
        $this->container['idType'] = $idType;
        return $this;
    }

    /**
    * Gets idValue
    *  对端网关标识值
    *
    * @return string|null
    */
    public function getIdValue()
    {
        return $this->container['idValue'];
    }

    /**
    * Sets idValue
    *
    * @param string|null $idValue 对端网关标识值
    *
    * @return $this
    */
    public function setIdValue($idValue)
    {
        $this->container['idValue'] = $idValue;
        return $this;
    }

    /**
    * Gets caCertificate
    *  caCertificate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CaCertificate|null
    */
    public function getCaCertificate()
    {
        return $this->container['caCertificate'];
    }

    /**
    * Sets caCertificate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CaCertificate|null $caCertificate caCertificate
    *
    * @return $this
    */
    public function setCaCertificate($caCertificate)
    {
        $this->container['caCertificate'] = $caCertificate;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
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
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

