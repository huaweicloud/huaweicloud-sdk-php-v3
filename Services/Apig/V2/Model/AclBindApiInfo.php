<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AclBindApiInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AclBindApiInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiId  API编号
    * apiName  API名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * groupName  API分组名称
    * bindTime  绑定时间
    * publishId  API发布记录编号
    * reqMethod  API请求方法
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiId' => 'string',
            'apiName' => 'string',
            'apiType' => 'int',
            'apiRemark' => 'string',
            'envId' => 'string',
            'envName' => 'string',
            'bindId' => 'string',
            'groupName' => 'string',
            'bindTime' => '\DateTime',
            'publishId' => 'string',
            'reqMethod' => 'string',
            'tags' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiId  API编号
    * apiName  API名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * groupName  API分组名称
    * bindTime  绑定时间
    * publishId  API发布记录编号
    * reqMethod  API请求方法
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiId' => null,
        'apiName' => null,
        'apiType' => 'int64',
        'apiRemark' => null,
        'envId' => null,
        'envName' => null,
        'bindId' => null,
        'groupName' => null,
        'bindTime' => 'date-time',
        'publishId' => null,
        'reqMethod' => null,
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
    * apiId  API编号
    * apiName  API名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * groupName  API分组名称
    * bindTime  绑定时间
    * publishId  API发布记录编号
    * reqMethod  API请求方法
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'apiType' => 'api_type',
            'apiRemark' => 'api_remark',
            'envId' => 'env_id',
            'envName' => 'env_name',
            'bindId' => 'bind_id',
            'groupName' => 'group_name',
            'bindTime' => 'bind_time',
            'publishId' => 'publish_id',
            'reqMethod' => 'req_method',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiId  API编号
    * apiName  API名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * groupName  API分组名称
    * bindTime  绑定时间
    * publishId  API发布记录编号
    * reqMethod  API请求方法
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'apiType' => 'setApiType',
            'apiRemark' => 'setApiRemark',
            'envId' => 'setEnvId',
            'envName' => 'setEnvName',
            'bindId' => 'setBindId',
            'groupName' => 'setGroupName',
            'bindTime' => 'setBindTime',
            'publishId' => 'setPublishId',
            'reqMethod' => 'setReqMethod',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiId  API编号
    * apiName  API名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * groupName  API分组名称
    * bindTime  绑定时间
    * publishId  API发布记录编号
    * reqMethod  API请求方法
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
            'apiType' => 'getApiType',
            'apiRemark' => 'getApiRemark',
            'envId' => 'getEnvId',
            'envName' => 'getEnvName',
            'bindId' => 'getBindId',
            'groupName' => 'getGroupName',
            'bindTime' => 'getBindTime',
            'publishId' => 'getPublishId',
            'reqMethod' => 'getReqMethod',
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
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
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
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['apiType'] = isset($data['apiType']) ? $data['apiType'] : null;
        $this->container['apiRemark'] = isset($data['apiRemark']) ? $data['apiRemark'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['bindId'] = isset($data['bindId']) ? $data['bindId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['bindTime'] = isset($data['bindTime']) ? $data['bindTime'] : null;
        $this->container['publishId'] = isset($data['publishId']) ? $data['publishId'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
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
            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
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
    * Gets apiId
    *  API编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId API编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  API名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName API名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets apiType
    *  API类型
    *
    * @return int|null
    */
    public function getApiType()
    {
        return $this->container['apiType'];
    }

    /**
    * Sets apiType
    *
    * @param int|null $apiType API类型
    *
    * @return $this
    */
    public function setApiType($apiType)
    {
        $this->container['apiType'] = $apiType;
        return $this;
    }

    /**
    * Gets apiRemark
    *  API的描述信息
    *
    * @return string|null
    */
    public function getApiRemark()
    {
        return $this->container['apiRemark'];
    }

    /**
    * Sets apiRemark
    *
    * @param string|null $apiRemark API的描述信息
    *
    * @return $this
    */
    public function setApiRemark($apiRemark)
    {
        $this->container['apiRemark'] = $apiRemark;
        return $this;
    }

    /**
    * Gets envId
    *  生效的环境编号
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
    * @param string|null $envId 生效的环境编号
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets envName
    *  生效的环境名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 生效的环境名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets bindId
    *  绑定关系编号
    *
    * @return string|null
    */
    public function getBindId()
    {
        return $this->container['bindId'];
    }

    /**
    * Sets bindId
    *
    * @param string|null $bindId 绑定关系编号
    *
    * @return $this
    */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;
        return $this;
    }

    /**
    * Gets groupName
    *  API分组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName API分组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets bindTime
    *  绑定时间
    *
    * @return \DateTime|null
    */
    public function getBindTime()
    {
        return $this->container['bindTime'];
    }

    /**
    * Sets bindTime
    *
    * @param \DateTime|null $bindTime 绑定时间
    *
    * @return $this
    */
    public function setBindTime($bindTime)
    {
        $this->container['bindTime'] = $bindTime;
        return $this;
    }

    /**
    * Gets publishId
    *  API发布记录编号
    *
    * @return string|null
    */
    public function getPublishId()
    {
        return $this->container['publishId'];
    }

    /**
    * Sets publishId
    *
    * @param string|null $publishId API发布记录编号
    *
    * @return $this
    */
    public function setPublishId($publishId)
    {
        $this->container['publishId'] = $publishId;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API请求方法
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
    * @param string|null $reqMethod API请求方法
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets tags
    *  API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags API绑定的标签，标签配额默认10条，可以联系技术调整。
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

