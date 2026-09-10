<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConnectionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConnectionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * clusters  需要使用连接的集群ID列表。单条最大长度128字符。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'destVpcId' => 'string',
            'destNetworkId' => 'string',
            'clusters' => 'string[]',
            'hosts' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsHost[]',
            'routetableId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * clusters  需要使用连接的集群ID列表。单条最大长度128字符。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'destVpcId' => null,
        'destNetworkId' => null,
        'clusters' => null,
        'hosts' => null,
        'routetableId' => null
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
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * clusters  需要使用连接的集群ID列表。单条最大长度128字符。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'destVpcId' => 'dest_vpc_id',
            'destNetworkId' => 'dest_network_id',
            'clusters' => 'clusters',
            'hosts' => 'hosts',
            'routetableId' => 'routetable_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * clusters  需要使用连接的集群ID列表。单条最大长度128字符。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'destVpcId' => 'setDestVpcId',
            'destNetworkId' => 'setDestNetworkId',
            'clusters' => 'setClusters',
            'hosts' => 'setHosts',
            'routetableId' => 'setRoutetableId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * clusters  需要使用连接的集群ID列表。单条最大长度128字符。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'destVpcId' => 'getDestVpcId',
            'destNetworkId' => 'getDestNetworkId',
            'clusters' => 'getClusters',
            'hosts' => 'getHosts',
            'routetableId' => 'getRoutetableId'
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
        $this->container['destVpcId'] = isset($data['destVpcId']) ? $data['destVpcId'] : null;
        $this->container['destNetworkId'] = isset($data['destNetworkId']) ? $data['destNetworkId'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['routetableId'] = isset($data['routetableId']) ? $data['routetableId'] : null;
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
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_]+$/.";
            }
        if ($this->container['destVpcId'] === null) {
            $invalidProperties[] = "'destVpcId' can't be null";
        }
            if ((mb_strlen($this->container['destVpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'destVpcId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['destVpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'destVpcId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-]+$/", $this->container['destVpcId'])) {
                $invalidProperties[] = "invalid value for 'destVpcId', must be conform to the pattern /^[a-zA-Z0-9\\-]+$/.";
            }
        if ($this->container['destNetworkId'] === null) {
            $invalidProperties[] = "'destNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['destNetworkId']) > 64)) {
                $invalidProperties[] = "invalid value for 'destNetworkId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['destNetworkId']) < 1)) {
                $invalidProperties[] = "invalid value for 'destNetworkId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-]+$/", $this->container['destNetworkId'])) {
                $invalidProperties[] = "invalid value for 'destNetworkId', must be conform to the pattern /^[a-zA-Z0-9\\-]+$/.";
            }
            if (!is_null($this->container['routetableId']) && (mb_strlen($this->container['routetableId']) > 64)) {
                $invalidProperties[] = "invalid value for 'routetableId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['routetableId']) && !preg_match("/^[a-zA-Z0-9\\-]+$/", $this->container['routetableId'])) {
                $invalidProperties[] = "invalid value for 'routetableId', must be conform to the pattern /^[a-zA-Z0-9\\-]+$/.";
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
    *  连接名称。长度64，数字字母下划线组成。
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
    * @param string $name 连接名称。长度64，数字字母下划线组成。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets destVpcId
    *  对应服务的vpc的ID。
    *
    * @return string
    */
    public function getDestVpcId()
    {
        return $this->container['destVpcId'];
    }

    /**
    * Sets destVpcId
    *
    * @param string $destVpcId 对应服务的vpc的ID。
    *
    * @return $this
    */
    public function setDestVpcId($destVpcId)
    {
        $this->container['destVpcId'] = $destVpcId;
        return $this;
    }

    /**
    * Gets destNetworkId
    *  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    *
    * @return string
    */
    public function getDestNetworkId()
    {
        return $this->container['destNetworkId'];
    }

    /**
    * Sets destNetworkId
    *
    * @param string $destNetworkId 对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    *
    * @return $this
    */
    public function setDestNetworkId($destNetworkId)
    {
        $this->container['destNetworkId'] = $destNetworkId;
        return $this;
    }

    /**
    * Gets clusters
    *  需要使用连接的集群ID列表。单条最大长度128字符。
    *
    * @return string[]|null
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param string[]|null $clusters 需要使用连接的集群ID列表。单条最大长度128字符。
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
        return $this;
    }

    /**
    * Gets hosts
    *  用户自定义主机信息，最大支持2万条记录。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsHost[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsHost[]|null $hosts 用户自定义主机信息，最大支持2万条记录。
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets routetableId
    *  对应服务的子网关联的路由表。
    *
    * @return string|null
    */
    public function getRoutetableId()
    {
        return $this->container['routetableId'];
    }

    /**
    * Sets routetableId
    *
    * @param string|null $routetableId 对应服务的子网关联的路由表。
    *
    * @return $this
    */
    public function setRoutetableId($routetableId)
    {
        $this->container['routetableId'] = $routetableId;
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

