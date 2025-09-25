<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateP2cVgwRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateP2cVgwRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * vpcId  P2C VPN网关所连接的VPC的ID。标准UUID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID。标准的UUID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  不填时自动为P2C VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表
    * eip  eip
    * maxConnectionNumber  最大并发客户端连接数，且不超过规格的最大连接数
    * enterpriseProjectId  企业项目ID
    * tags  tags
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'vpcId' => 'string',
            'connectSubnet' => 'string',
            'flavor' => 'string',
            'availabilityZoneIds' => 'string[]',
            'eip' => '\HuaweiCloud\SDK\Vpn\V5\Model\CreateP2cRequestEip',
            'maxConnectionNumber' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * vpcId  P2C VPN网关所连接的VPC的ID。标准UUID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID。标准的UUID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  不填时自动为P2C VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表
    * eip  eip
    * maxConnectionNumber  最大并发客户端连接数，且不超过规格的最大连接数
    * enterpriseProjectId  企业项目ID
    * tags  tags
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'vpcId' => null,
        'connectSubnet' => null,
        'flavor' => null,
        'availabilityZoneIds' => null,
        'eip' => null,
        'maxConnectionNumber' => 'int32',
        'enterpriseProjectId' => null,
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
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * vpcId  P2C VPN网关所连接的VPC的ID。标准UUID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID。标准的UUID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  不填时自动为P2C VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表
    * eip  eip
    * maxConnectionNumber  最大并发客户端连接数，且不超过规格的最大连接数
    * enterpriseProjectId  企业项目ID
    * tags  tags
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'vpcId' => 'vpc_id',
            'connectSubnet' => 'connect_subnet',
            'flavor' => 'flavor',
            'availabilityZoneIds' => 'availability_zone_ids',
            'eip' => 'eip',
            'maxConnectionNumber' => 'max_connection_number',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * vpcId  P2C VPN网关所连接的VPC的ID。标准UUID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID。标准的UUID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  不填时自动为P2C VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表
    * eip  eip
    * maxConnectionNumber  最大并发客户端连接数，且不超过规格的最大连接数
    * enterpriseProjectId  企业项目ID
    * tags  tags
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'vpcId' => 'setVpcId',
            'connectSubnet' => 'setConnectSubnet',
            'flavor' => 'setFlavor',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'eip' => 'setEip',
            'maxConnectionNumber' => 'setMaxConnectionNumber',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    * vpcId  P2C VPN网关所连接的VPC的ID。标准UUID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID。标准的UUID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  不填时自动为P2C VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表
    * eip  eip
    * maxConnectionNumber  最大并发客户端连接数，且不超过规格的最大连接数
    * enterpriseProjectId  企业项目ID
    * tags  tags
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'vpcId' => 'getVpcId',
            'connectSubnet' => 'getConnectSubnet',
            'flavor' => 'getFlavor',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'eip' => 'getEip',
            'maxConnectionNumber' => 'getMaxConnectionNumber',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
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
    const FLAVOR_PROFESSIONAL1 = 'Professional1';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFlavorAllowableValues()
    {
        return [
            self::FLAVOR_PROFESSIONAL1,
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['connectSubnet'] = isset($data['connectSubnet']) ? $data['connectSubnet'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['maxConnectionNumber'] = isset($data['maxConnectionNumber']) ? $data['maxConnectionNumber'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
            if (!is_null($this->container['name']) && !preg_match("/[一-龥A-Za-z0-9_-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥A-Za-z0-9_-]+/.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
        if ($this->container['connectSubnet'] === null) {
            $invalidProperties[] = "'connectSubnet' can't be null";
        }
            if ((mb_strlen($this->container['connectSubnet']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectSubnet', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['connectSubnet'])) {
                $invalidProperties[] = "invalid value for 'connectSubnet', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
            $allowedValues = $this->getFlavorAllowableValues();
                if (!is_null($this->container['flavor']) && !in_array($this->container['flavor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'flavor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['eip'] === null) {
            $invalidProperties[] = "'eip' can't be null";
        }
            if (!is_null($this->container['maxConnectionNumber']) && ($this->container['maxConnectionNumber'] > 500)) {
                $invalidProperties[] = "invalid value for 'maxConnectionNumber', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['maxConnectionNumber']) && ($this->container['maxConnectionNumber'] < 10)) {
                $invalidProperties[] = "invalid value for 'maxConnectionNumber', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
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
    *  P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
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
    * @param string|null $name P2C VPN网关名称。1-64字符，中文、英文、数字包含下划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vpcId
    *  P2C VPN网关所连接的VPC的ID。标准UUID
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
    * @param string $vpcId P2C VPN网关所连接的VPC的ID。标准UUID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets connectSubnet
    *  P2C VPN网关所使用的VPC子网ID。标准的UUID
    *
    * @return string
    */
    public function getConnectSubnet()
    {
        return $this->container['connectSubnet'];
    }

    /**
    * Sets connectSubnet
    *
    * @param string $connectSubnet P2C VPN网关所使用的VPC子网ID。标准的UUID
    *
    * @return $this
    */
    public function setConnectSubnet($connectSubnet)
    {
        $this->container['connectSubnet'] = $connectSubnet;
        return $this;
    }

    /**
    * Gets flavor
    *  P2C VPN网关的规格类型
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor P2C VPN网关的规格类型
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets availabilityZoneIds
    *  不填时自动为P2C VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string[]|null $availabilityZoneIds 不填时自动为P2C VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets eip
    *  eip
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CreateP2cRequestEip
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CreateP2cRequestEip $eip eip
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets maxConnectionNumber
    *  最大并发客户端连接数，且不超过规格的最大连接数
    *
    * @return int|null
    */
    public function getMaxConnectionNumber()
    {
        return $this->container['maxConnectionNumber'];
    }

    /**
    * Sets maxConnectionNumber
    *
    * @param int|null $maxConnectionNumber 最大并发客户端连接数，且不超过规格的最大连接数
    *
    * @return $this
    */
    public function setMaxConnectionNumber($maxConnectionNumber)
    {
        $this->container['maxConnectionNumber'] = $maxConnectionNumber;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  tags
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
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]|null $tags tags
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

