<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDatasourceConnectionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDatasourceConnectionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * id  连接ID，用于标识资源组网络连接的UUID。
    * name  创建连接时，用户自定义的连接名称。
    * status  连接状态，包括以下两种状态： ACTIVE：已激活 DELETED：已删除
    * availableClusterInfo  各个集群创建对等连接的信息。
    * destVpcId  对应服务的虚拟私有云标识。
    * destNetworkId  对应服务的子网网络标识。
    * createTime  创建连接的时间。为UTC的时间戳。
    * hosts  用户自定义主机信息。
    * routes  用户添加的路由信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'availableClusterInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionClusterInfo[]',
            'destVpcId' => 'string',
            'destNetworkId' => 'string',
            'createTime' => 'int',
            'hosts' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsHost[]',
            'routes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsRoute[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * id  连接ID，用于标识资源组网络连接的UUID。
    * name  创建连接时，用户自定义的连接名称。
    * status  连接状态，包括以下两种状态： ACTIVE：已激活 DELETED：已删除
    * availableClusterInfo  各个集群创建对等连接的信息。
    * destVpcId  对应服务的虚拟私有云标识。
    * destNetworkId  对应服务的子网网络标识。
    * createTime  创建连接的时间。为UTC的时间戳。
    * hosts  用户自定义主机信息。
    * routes  用户添加的路由信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'id' => null,
        'name' => null,
        'status' => null,
        'availableClusterInfo' => null,
        'destVpcId' => null,
        'destNetworkId' => null,
        'createTime' => 'int64',
        'hosts' => null,
        'routes' => null
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
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * id  连接ID，用于标识资源组网络连接的UUID。
    * name  创建连接时，用户自定义的连接名称。
    * status  连接状态，包括以下两种状态： ACTIVE：已激活 DELETED：已删除
    * availableClusterInfo  各个集群创建对等连接的信息。
    * destVpcId  对应服务的虚拟私有云标识。
    * destNetworkId  对应服务的子网网络标识。
    * createTime  创建连接的时间。为UTC的时间戳。
    * hosts  用户自定义主机信息。
    * routes  用户添加的路由信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'availableClusterInfo' => 'available_cluster_info',
            'destVpcId' => 'dest_vpc_id',
            'destNetworkId' => 'dest_network_id',
            'createTime' => 'create_time',
            'hosts' => 'hosts',
            'routes' => 'routes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * id  连接ID，用于标识资源组网络连接的UUID。
    * name  创建连接时，用户自定义的连接名称。
    * status  连接状态，包括以下两种状态： ACTIVE：已激活 DELETED：已删除
    * availableClusterInfo  各个集群创建对等连接的信息。
    * destVpcId  对应服务的虚拟私有云标识。
    * destNetworkId  对应服务的子网网络标识。
    * createTime  创建连接的时间。为UTC的时间戳。
    * hosts  用户自定义主机信息。
    * routes  用户添加的路由信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'availableClusterInfo' => 'setAvailableClusterInfo',
            'destVpcId' => 'setDestVpcId',
            'destNetworkId' => 'setDestNetworkId',
            'createTime' => 'setCreateTime',
            'hosts' => 'setHosts',
            'routes' => 'setRoutes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * id  连接ID，用于标识资源组网络连接的UUID。
    * name  创建连接时，用户自定义的连接名称。
    * status  连接状态，包括以下两种状态： ACTIVE：已激活 DELETED：已删除
    * availableClusterInfo  各个集群创建对等连接的信息。
    * destVpcId  对应服务的虚拟私有云标识。
    * destNetworkId  对应服务的子网网络标识。
    * createTime  创建连接的时间。为UTC的时间戳。
    * hosts  用户自定义主机信息。
    * routes  用户添加的路由信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'availableClusterInfo' => 'getAvailableClusterInfo',
            'destVpcId' => 'getDestVpcId',
            'destNetworkId' => 'getDestNetworkId',
            'createTime' => 'getCreateTime',
            'hosts' => 'getHosts',
            'routes' => 'getRoutes'
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['availableClusterInfo'] = isset($data['availableClusterInfo']) ? $data['availableClusterInfo'] : null;
        $this->container['destVpcId'] = isset($data['destVpcId']) ? $data['destVpcId'] : null;
        $this->container['destNetworkId'] = isset($data['destNetworkId']) ? $data['destNetworkId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['routes'] = isset($data['routes']) ? $data['routes'] : null;
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
    * Gets isSuccess
    *  执行请求是否成功。“true”表示请求执行成功。
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 执行请求是否成功。“true”表示请求执行成功。
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  系统提示信息，执行成功时，信息为空。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 系统提示信息，执行成功时，信息为空。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets id
    *  连接ID，用于标识资源组网络连接的UUID。
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
    * @param string|null $id 连接ID，用于标识资源组网络连接的UUID。
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
    *  创建连接时，用户自定义的连接名称。
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
    * @param string|null $name 创建连接时，用户自定义的连接名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  连接状态，包括以下两种状态： ACTIVE：已激活 DELETED：已删除
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 连接状态，包括以下两种状态： ACTIVE：已激活 DELETED：已删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets availableClusterInfo
    *  各个集群创建对等连接的信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionClusterInfo[]|null
    */
    public function getAvailableClusterInfo()
    {
        return $this->container['availableClusterInfo'];
    }

    /**
    * Sets availableClusterInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionClusterInfo[]|null $availableClusterInfo 各个集群创建对等连接的信息。
    *
    * @return $this
    */
    public function setAvailableClusterInfo($availableClusterInfo)
    {
        $this->container['availableClusterInfo'] = $availableClusterInfo;
        return $this;
    }

    /**
    * Gets destVpcId
    *  对应服务的虚拟私有云标识。
    *
    * @return string|null
    */
    public function getDestVpcId()
    {
        return $this->container['destVpcId'];
    }

    /**
    * Sets destVpcId
    *
    * @param string|null $destVpcId 对应服务的虚拟私有云标识。
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
    *  对应服务的子网网络标识。
    *
    * @return string|null
    */
    public function getDestNetworkId()
    {
        return $this->container['destNetworkId'];
    }

    /**
    * Sets destNetworkId
    *
    * @param string|null $destNetworkId 对应服务的子网网络标识。
    *
    * @return $this
    */
    public function setDestNetworkId($destNetworkId)
    {
        $this->container['destNetworkId'] = $destNetworkId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建连接的时间。为UTC的时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建连接的时间。为UTC的时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets hosts
    *  用户自定义主机信息。
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
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsHost[]|null $hosts 用户自定义主机信息。
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets routes
    *  用户添加的路由信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsRoute[]|null
    */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
    * Sets routes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ConnectionsRoute[]|null $routes 用户添加的路由信息。
    *
    * @return $this
    */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;
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

