<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApisV2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApisV2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  API编号
    * name  API名称
    * groupId  API分组编号
    * reqProtocol  请求协议
    * reqMethod  请求方法
    * reqUri  请求路径
    * authType  授权类型
    * envId  发布的环境编号
    * type  API类型
    * preciseSearch  指定需要精确匹配查找的参数名称，目前仅支持name、req_uri
    * vpcChannelName  负载通道名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'id' => 'string',
            'name' => 'string',
            'groupId' => 'string',
            'reqProtocol' => 'string',
            'reqMethod' => 'string',
            'reqUri' => 'string',
            'authType' => 'string',
            'envId' => 'string',
            'type' => 'int',
            'preciseSearch' => 'string',
            'vpcChannelName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  API编号
    * name  API名称
    * groupId  API分组编号
    * reqProtocol  请求协议
    * reqMethod  请求方法
    * reqUri  请求路径
    * authType  授权类型
    * envId  发布的环境编号
    * type  API类型
    * preciseSearch  指定需要精确匹配查找的参数名称，目前仅支持name、req_uri
    * vpcChannelName  负载通道名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'offset' => 'int64',
        'limit' => 'int32',
        'id' => null,
        'name' => null,
        'groupId' => null,
        'reqProtocol' => null,
        'reqMethod' => null,
        'reqUri' => null,
        'authType' => null,
        'envId' => null,
        'type' => null,
        'preciseSearch' => null,
        'vpcChannelName' => null
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
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  API编号
    * name  API名称
    * groupId  API分组编号
    * reqProtocol  请求协议
    * reqMethod  请求方法
    * reqUri  请求路径
    * authType  授权类型
    * envId  发布的环境编号
    * type  API类型
    * preciseSearch  指定需要精确匹配查找的参数名称，目前仅支持name、req_uri
    * vpcChannelName  负载通道名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'id' => 'id',
            'name' => 'name',
            'groupId' => 'group_id',
            'reqProtocol' => 'req_protocol',
            'reqMethod' => 'req_method',
            'reqUri' => 'req_uri',
            'authType' => 'auth_type',
            'envId' => 'env_id',
            'type' => 'type',
            'preciseSearch' => 'precise_search',
            'vpcChannelName' => 'vpc_channel_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  API编号
    * name  API名称
    * groupId  API分组编号
    * reqProtocol  请求协议
    * reqMethod  请求方法
    * reqUri  请求路径
    * authType  授权类型
    * envId  发布的环境编号
    * type  API类型
    * preciseSearch  指定需要精确匹配查找的参数名称，目前仅支持name、req_uri
    * vpcChannelName  负载通道名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'id' => 'setId',
            'name' => 'setName',
            'groupId' => 'setGroupId',
            'reqProtocol' => 'setReqProtocol',
            'reqMethod' => 'setReqMethod',
            'reqUri' => 'setReqUri',
            'authType' => 'setAuthType',
            'envId' => 'setEnvId',
            'type' => 'setType',
            'preciseSearch' => 'setPreciseSearch',
            'vpcChannelName' => 'setVpcChannelName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  API编号
    * name  API名称
    * groupId  API分组编号
    * reqProtocol  请求协议
    * reqMethod  请求方法
    * reqUri  请求路径
    * authType  授权类型
    * envId  发布的环境编号
    * type  API类型
    * preciseSearch  指定需要精确匹配查找的参数名称，目前仅支持name、req_uri
    * vpcChannelName  负载通道名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'id' => 'getId',
            'name' => 'getName',
            'groupId' => 'getGroupId',
            'reqProtocol' => 'getReqProtocol',
            'reqMethod' => 'getReqMethod',
            'reqUri' => 'getReqUri',
            'authType' => 'getAuthType',
            'envId' => 'getEnvId',
            'type' => 'getType',
            'preciseSearch' => 'getPreciseSearch',
            'vpcChannelName' => 'getVpcChannelName'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['preciseSearch'] = isset($data['preciseSearch']) ? $data['preciseSearch'] : null;
        $this->container['vpcChannelName'] = isset($data['vpcChannelName']) ? $data['vpcChannelName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets id
    *  API编号
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
    * @param string|null $id API编号
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
    *  API名称
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
    * @param string|null $name API名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets groupId
    *  API分组编号
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API分组编号
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  请求协议
    *
    * @return string|null
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string|null $reqProtocol 请求协议
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets reqMethod
    *  请求方法
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod 请求方法
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets reqUri
    *  请求路径
    *
    * @return string|null
    */
    public function getReqUri()
    {
        return $this->container['reqUri'];
    }

    /**
    * Sets reqUri
    *
    * @param string|null $reqUri 请求路径
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
        return $this;
    }

    /**
    * Gets authType
    *  授权类型
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 授权类型
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets envId
    *  发布的环境编号
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId 发布的环境编号
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets type
    *  API类型
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type API类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets preciseSearch
    *  指定需要精确匹配查找的参数名称，目前仅支持name、req_uri
    *
    * @return string|null
    */
    public function getPreciseSearch()
    {
        return $this->container['preciseSearch'];
    }

    /**
    * Sets preciseSearch
    *
    * @param string|null $preciseSearch 指定需要精确匹配查找的参数名称，目前仅支持name、req_uri
    *
    * @return $this
    */
    public function setPreciseSearch($preciseSearch)
    {
        $this->container['preciseSearch'] = $preciseSearch;
        return $this;
    }

    /**
    * Gets vpcChannelName
    *  负载通道名称。
    *
    * @return string|null
    */
    public function getVpcChannelName()
    {
        return $this->container['vpcChannelName'];
    }

    /**
    * Sets vpcChannelName
    *
    * @param string|null $vpcChannelName 负载通道名称。
    *
    * @return $this
    */
    public function setVpcChannelName($vpcChannelName)
    {
        $this->container['vpcChannelName'] = $vpcChannelName;
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

