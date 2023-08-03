<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EniNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EniNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eniSubnetId  ENI所在子网的IPv4子网ID(暂不支持IPv6,废弃中)。获取方法如下：  - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找IPv4子网ID。 - 方法2：通过虚拟私有云服务的查询子网列表接口查询。   [链接请参见[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)   [链接请参见[查询子网列表](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)
    * eniSubnetCidr  ENI子网CIDR(废弃中)
    * subnets  IPv4子网ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eniSubnetId' => 'string',
            'eniSubnetCidr' => 'string',
            'subnets' => '\HuaweiCloud\SDK\Cce\V3\Model\NetworkSubnet[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eniSubnetId  ENI所在子网的IPv4子网ID(暂不支持IPv6,废弃中)。获取方法如下：  - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找IPv4子网ID。 - 方法2：通过虚拟私有云服务的查询子网列表接口查询。   [链接请参见[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)   [链接请参见[查询子网列表](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)
    * eniSubnetCidr  ENI子网CIDR(废弃中)
    * subnets  IPv4子网ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eniSubnetId' => null,
        'eniSubnetCidr' => null,
        'subnets' => null
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
    * eniSubnetId  ENI所在子网的IPv4子网ID(暂不支持IPv6,废弃中)。获取方法如下：  - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找IPv4子网ID。 - 方法2：通过虚拟私有云服务的查询子网列表接口查询。   [链接请参见[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)   [链接请参见[查询子网列表](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)
    * eniSubnetCidr  ENI子网CIDR(废弃中)
    * subnets  IPv4子网ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eniSubnetId' => 'eniSubnetId',
            'eniSubnetCidr' => 'eniSubnetCIDR',
            'subnets' => 'subnets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eniSubnetId  ENI所在子网的IPv4子网ID(暂不支持IPv6,废弃中)。获取方法如下：  - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找IPv4子网ID。 - 方法2：通过虚拟私有云服务的查询子网列表接口查询。   [链接请参见[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)   [链接请参见[查询子网列表](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)
    * eniSubnetCidr  ENI子网CIDR(废弃中)
    * subnets  IPv4子网ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'eniSubnetId' => 'setEniSubnetId',
            'eniSubnetCidr' => 'setEniSubnetCidr',
            'subnets' => 'setSubnets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eniSubnetId  ENI所在子网的IPv4子网ID(暂不支持IPv6,废弃中)。获取方法如下：  - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找IPv4子网ID。 - 方法2：通过虚拟私有云服务的查询子网列表接口查询。   [链接请参见[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)   [链接请参见[查询子网列表](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)
    * eniSubnetCidr  ENI子网CIDR(废弃中)
    * subnets  IPv4子网ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'eniSubnetId' => 'getEniSubnetId',
            'eniSubnetCidr' => 'getEniSubnetCidr',
            'subnets' => 'getSubnets'
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
        $this->container['eniSubnetId'] = isset($data['eniSubnetId']) ? $data['eniSubnetId'] : null;
        $this->container['eniSubnetCidr'] = isset($data['eniSubnetCidr']) ? $data['eniSubnetCidr'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eniSubnetId'] === null) {
            $invalidProperties[] = "'eniSubnetId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['eniSubnetId'])) {
                $invalidProperties[] = "invalid value for 'eniSubnetId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
        if ($this->container['eniSubnetCidr'] === null) {
            $invalidProperties[] = "'eniSubnetCidr' can't be null";
        }
        if ($this->container['subnets'] === null) {
            $invalidProperties[] = "'subnets' can't be null";
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
    * Gets eniSubnetId
    *  ENI所在子网的IPv4子网ID(暂不支持IPv6,废弃中)。获取方法如下：  - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找IPv4子网ID。 - 方法2：通过虚拟私有云服务的查询子网列表接口查询。   [链接请参见[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)   [链接请参见[查询子网列表](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)
    *
    * @return string
    */
    public function getEniSubnetId()
    {
        return $this->container['eniSubnetId'];
    }

    /**
    * Sets eniSubnetId
    *
    * @param string $eniSubnetId ENI所在子网的IPv4子网ID(暂不支持IPv6,废弃中)。获取方法如下：  - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找IPv4子网ID。 - 方法2：通过虚拟私有云服务的查询子网列表接口查询。   [链接请参见[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)   [链接请参见[查询子网列表](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)
    *
    * @return $this
    */
    public function setEniSubnetId($eniSubnetId)
    {
        $this->container['eniSubnetId'] = $eniSubnetId;
        return $this;
    }

    /**
    * Gets eniSubnetCidr
    *  ENI子网CIDR(废弃中)
    *
    * @return string
    */
    public function getEniSubnetCidr()
    {
        return $this->container['eniSubnetCidr'];
    }

    /**
    * Sets eniSubnetCidr
    *
    * @param string $eniSubnetCidr ENI子网CIDR(废弃中)
    *
    * @return $this
    */
    public function setEniSubnetCidr($eniSubnetCidr)
    {
        $this->container['eniSubnetCidr'] = $eniSubnetCidr;
        return $this;
    }

    /**
    * Gets subnets
    *  IPv4子网ID列表
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NetworkSubnet[]
    */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
    * Sets subnets
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NetworkSubnet[] $subnets IPv4子网ID列表
    *
    * @return $this
    */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;
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

