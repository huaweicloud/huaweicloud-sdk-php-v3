<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApisUnbindedToAppV2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApisUnbindedToAppV2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * appId  应用id
    * envId  环境id
    * groupId  API分组编号
    * apiId  API编号
    * apiName  API名称
    * tags  API标签，该参数可指定多个，多个不同的参数值为或关系；不指定或为空时，表示不筛选标签；指定为#no_tags#时，表示筛选无标签API。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'appId' => 'string',
            'envId' => 'string',
            'groupId' => 'string',
            'apiId' => 'string',
            'apiName' => 'string',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * appId  应用id
    * envId  环境id
    * groupId  API分组编号
    * apiId  API编号
    * apiName  API名称
    * tags  API标签，该参数可指定多个，多个不同的参数值为或关系；不指定或为空时，表示不筛选标签；指定为#no_tags#时，表示筛选无标签API。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'offset' => 'int64',
        'limit' => 'int32',
        'appId' => null,
        'envId' => null,
        'groupId' => null,
        'apiId' => null,
        'apiName' => null,
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
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * appId  应用id
    * envId  环境id
    * groupId  API分组编号
    * apiId  API编号
    * apiName  API名称
    * tags  API标签，该参数可指定多个，多个不同的参数值为或关系；不指定或为空时，表示不筛选标签；指定为#no_tags#时，表示筛选无标签API。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'appId' => 'app_id',
            'envId' => 'env_id',
            'groupId' => 'group_id',
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * appId  应用id
    * envId  环境id
    * groupId  API分组编号
    * apiId  API编号
    * apiName  API名称
    * tags  API标签，该参数可指定多个，多个不同的参数值为或关系；不指定或为空时，表示不筛选标签；指定为#no_tags#时，表示筛选无标签API。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'appId' => 'setAppId',
            'envId' => 'setEnvId',
            'groupId' => 'setGroupId',
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * appId  应用id
    * envId  环境id
    * groupId  API分组编号
    * apiId  API编号
    * apiName  API名称
    * tags  API标签，该参数可指定多个，多个不同的参数值为或关系；不指定或为空时，表示不筛选标签；指定为#no_tags#时，表示筛选无标签API。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'appId' => 'getAppId',
            'envId' => 'getEnvId',
            'groupId' => 'getGroupId',
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) > 128)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) < 0)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tags']) && !preg_match("/^$|^#no_tags#$|^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9]|[\\u4e00-\\u9fa5]|[-#%.:_]){0,127}$/", $this->container['tags'])) {
                $invalidProperties[] = "invalid value for 'tags', must be conform to the pattern /^$|^#no_tags#$|^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9]|[\\u4e00-\\u9fa5]|[-#%.:_]){0,127}$/.";
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
    * Gets appId
    *  应用id
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id
    *
    * @return string
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string $envId 环境id
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
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
    * Gets tags
    *  API标签，该参数可指定多个，多个不同的参数值为或关系；不指定或为空时，表示不筛选标签；指定为#no_tags#时，表示筛选无标签API。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags API标签，该参数可指定多个，多个不同的参数值为或关系；不指定或为空时，表示不筛选标签；指定为#no_tags#时，表示筛选无标签API。
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

