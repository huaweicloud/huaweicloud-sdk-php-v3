<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEnhancedConnectionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEnhancedConnectionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * elasticResourcePools  弹性资源池列表。
    * queues  需要使用跨源的队列列表。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'destVpcId' => 'string',
            'destNetworkId' => 'string',
            'elasticResourcePools' => 'string[]',
            'queues' => 'string[]',
            'hosts' => '\HuaweiCloud\SDK\Dli\V1\Model\EnhancedConnectionHost[]',
            'routetableId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * elasticResourcePools  弹性资源池列表。
    * queues  需要使用跨源的队列列表。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'destVpcId' => null,
        'destNetworkId' => null,
        'elasticResourcePools' => null,
        'queues' => null,
        'hosts' => null,
        'routetableId' => null,
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
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * elasticResourcePools  弹性资源池列表。
    * queues  需要使用跨源的队列列表。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'destVpcId' => 'dest_vpc_id',
            'destNetworkId' => 'dest_network_id',
            'elasticResourcePools' => 'elastic_resource_pools',
            'queues' => 'queues',
            'hosts' => 'hosts',
            'routetableId' => 'routetable_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * elasticResourcePools  弹性资源池列表。
    * queues  需要使用跨源的队列列表。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'destVpcId' => 'setDestVpcId',
            'destNetworkId' => 'setDestNetworkId',
            'elasticResourcePools' => 'setElasticResourcePools',
            'queues' => 'setQueues',
            'hosts' => 'setHosts',
            'routetableId' => 'setRoutetableId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  连接名称。长度64，数字字母下划线组成。
    * destVpcId  对应服务的vpc的ID。
    * destNetworkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * elasticResourcePools  弹性资源池列表。
    * queues  需要使用跨源的队列列表。
    * hosts  用户自定义主机信息，最大支持2万条记录。
    * routetableId  对应服务的子网关联的路由表。
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'destVpcId' => 'getDestVpcId',
            'destNetworkId' => 'getDestNetworkId',
            'elasticResourcePools' => 'getElasticResourcePools',
            'queues' => 'getQueues',
            'hosts' => 'getHosts',
            'routetableId' => 'getRoutetableId',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['destVpcId'] = isset($data['destVpcId']) ? $data['destVpcId'] : null;
        $this->container['destNetworkId'] = isset($data['destNetworkId']) ? $data['destNetworkId'] : null;
        $this->container['elasticResourcePools'] = isset($data['elasticResourcePools']) ? $data['elasticResourcePools'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['routetableId'] = isset($data['routetableId']) ? $data['routetableId'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['destVpcId'] === null) {
            $invalidProperties[] = "'destVpcId' can't be null";
        }
        if ($this->container['destNetworkId'] === null) {
            $invalidProperties[] = "'destNetworkId' can't be null";
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
    * Gets elasticResourcePools
    *  弹性资源池列表。
    *
    * @return string[]|null
    */
    public function getElasticResourcePools()
    {
        return $this->container['elasticResourcePools'];
    }

    /**
    * Sets elasticResourcePools
    *
    * @param string[]|null $elasticResourcePools 弹性资源池列表。
    *
    * @return $this
    */
    public function setElasticResourcePools($elasticResourcePools)
    {
        $this->container['elasticResourcePools'] = $elasticResourcePools;
        return $this;
    }

    /**
    * Gets queues
    *  需要使用跨源的队列列表。
    *
    * @return string[]|null
    */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
    * Sets queues
    *
    * @param string[]|null $queues 需要使用跨源的队列列表。
    *
    * @return $this
    */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;
        return $this;
    }

    /**
    * Gets hosts
    *  用户自定义主机信息，最大支持2万条记录。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\EnhancedConnectionHost[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\EnhancedConnectionHost[]|null $hosts 用户自定义主机信息，最大支持2万条记录。
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
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 标签
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

