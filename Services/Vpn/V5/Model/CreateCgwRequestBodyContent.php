<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCgwRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCgwRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  网关名称
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * bgpAsn  网关的bgp asn号，默认值为65000
    * caCertificate  caCertificate
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'idType' => 'string',
            'idValue' => 'string',
            'bgpAsn' => 'int',
            'caCertificate' => '\HuaweiCloud\SDK\Vpn\V5\Model\CaCertificateRequest',
            'tags' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  网关名称
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * bgpAsn  网关的bgp asn号，默认值为65000
    * caCertificate  caCertificate
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'idType' => null,
        'idValue' => null,
        'bgpAsn' => 'int64',
        'caCertificate' => null,
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
    * name  网关名称
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * bgpAsn  网关的bgp asn号，默认值为65000
    * caCertificate  caCertificate
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'idType' => 'id_type',
            'idValue' => 'id_value',
            'bgpAsn' => 'bgp_asn',
            'caCertificate' => 'ca_certificate',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  网关名称
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * bgpAsn  网关的bgp asn号，默认值为65000
    * caCertificate  caCertificate
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'idType' => 'setIdType',
            'idValue' => 'setIdValue',
            'bgpAsn' => 'setBgpAsn',
            'caCertificate' => 'setCaCertificate',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  网关名称
    * idType  对端网关标识类型
    * idValue  对端网关标识值
    * bgpAsn  网关的bgp asn号，默认值为65000
    * caCertificate  caCertificate
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'idType' => 'getIdType',
            'idValue' => 'getIdValue',
            'bgpAsn' => 'getBgpAsn',
            'caCertificate' => 'getCaCertificate',
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
    const ID_TYPE_IP = 'ip';
    const ID_TYPE_FQDN = 'fqdn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIdTypeAllowableValues()
    {
        return [
            self::ID_TYPE_IP,
            self::ID_TYPE_FQDN,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['idType'] = isset($data['idType']) ? $data['idType'] : null;
        $this->container['idValue'] = isset($data['idValue']) ? $data['idValue'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['caCertificate'] = isset($data['caCertificate']) ? $data['caCertificate'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[一-龥a-zA-Z0-9-_.]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥a-zA-Z0-9-_.]+/.";
            }
            $allowedValues = $this->getIdTypeAllowableValues();
                if (!is_null($this->container['idType']) && !in_array($this->container['idType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'idType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['idValue'] === null) {
            $invalidProperties[] = "'idValue' can't be null";
        }
            if ((mb_strlen($this->container['idValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'idValue', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['idValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'idValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 1)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 1.";
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
    * @return string
    */
    public function getIdValue()
    {
        return $this->container['idValue'];
    }

    /**
    * Sets idValue
    *
    * @param string $idValue 对端网关标识值
    *
    * @return $this
    */
    public function setIdValue($idValue)
    {
        $this->container['idValue'] = $idValue;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  网关的bgp asn号，默认值为65000
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
    * @param int|null $bgpAsn 网关的bgp asn号，默认值为65000
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets caCertificate
    *  caCertificate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CaCertificateRequest|null
    */
    public function getCaCertificate()
    {
        return $this->container['caCertificate'];
    }

    /**
    * Sets caCertificate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CaCertificateRequest|null $caCertificate caCertificate
    *
    * @return $this
    */
    public function setCaCertificate($caCertificate)
    {
        $this->container['caCertificate'] = $caCertificate;
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

