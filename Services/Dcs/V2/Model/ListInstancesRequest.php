<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * includeFailure  是否返回创建失败的实例数。 当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * includeDelete  是否返回已删除的实例数。 当参数值为“true”时，返回已删除的实例数。参数值为“false”或者其他值，不返回已删除的实例数。
    * name  实例名称。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * nameEqual  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * tags  根据实例标签键值对进行查询。{key}表示标签键，{value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。
    * ip  连接缓存实例的IP地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'includeFailure' => 'string',
            'includeDelete' => 'string',
            'name' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'status' => 'string',
            'nameEqual' => 'string',
            'tags' => 'string',
            'ip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * includeFailure  是否返回创建失败的实例数。 当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * includeDelete  是否返回已删除的实例数。 当参数值为“true”时，返回已删除的实例数。参数值为“false”或者其他值，不返回已删除的实例数。
    * name  实例名称。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * nameEqual  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * tags  根据实例标签键值对进行查询。{key}表示标签键，{value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。
    * ip  连接缓存实例的IP地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'includeFailure' => null,
        'includeDelete' => null,
        'name' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'status' => null,
        'nameEqual' => null,
        'tags' => null,
        'ip' => null
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
    * instanceId  实例ID。
    * includeFailure  是否返回创建失败的实例数。 当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * includeDelete  是否返回已删除的实例数。 当参数值为“true”时，返回已删除的实例数。参数值为“false”或者其他值，不返回已删除的实例数。
    * name  实例名称。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * nameEqual  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * tags  根据实例标签键值对进行查询。{key}表示标签键，{value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。
    * ip  连接缓存实例的IP地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'includeFailure' => 'include_failure',
            'includeDelete' => 'include_delete',
            'name' => 'name',
            'offset' => 'offset',
            'limit' => 'limit',
            'status' => 'status',
            'nameEqual' => 'name_equal',
            'tags' => 'tags',
            'ip' => 'ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * includeFailure  是否返回创建失败的实例数。 当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * includeDelete  是否返回已删除的实例数。 当参数值为“true”时，返回已删除的实例数。参数值为“false”或者其他值，不返回已删除的实例数。
    * name  实例名称。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * nameEqual  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * tags  根据实例标签键值对进行查询。{key}表示标签键，{value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。
    * ip  连接缓存实例的IP地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'includeFailure' => 'setIncludeFailure',
            'includeDelete' => 'setIncludeDelete',
            'name' => 'setName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'status' => 'setStatus',
            'nameEqual' => 'setNameEqual',
            'tags' => 'setTags',
            'ip' => 'setIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * includeFailure  是否返回创建失败的实例数。 当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * includeDelete  是否返回已删除的实例数。 当参数值为“true”时，返回已删除的实例数。参数值为“false”或者其他值，不返回已删除的实例数。
    * name  实例名称。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * nameEqual  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * tags  根据实例标签键值对进行查询。{key}表示标签键，{value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。
    * ip  连接缓存实例的IP地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'includeFailure' => 'getIncludeFailure',
            'includeDelete' => 'getIncludeDelete',
            'name' => 'getName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'status' => 'getStatus',
            'nameEqual' => 'getNameEqual',
            'tags' => 'getTags',
            'ip' => 'getIp'
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
        $this->container['includeFailure'] = isset($data['includeFailure']) ? $data['includeFailure'] : null;
        $this->container['includeDelete'] = isset($data['includeDelete']) ? $data['includeDelete'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['nameEqual'] = isset($data['nameEqual']) ? $data['nameEqual'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets includeFailure
    *  是否返回创建失败的实例数。 当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    *
    * @return string|null
    */
    public function getIncludeFailure()
    {
        return $this->container['includeFailure'];
    }

    /**
    * Sets includeFailure
    *
    * @param string|null $includeFailure 是否返回创建失败的实例数。 当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    *
    * @return $this
    */
    public function setIncludeFailure($includeFailure)
    {
        $this->container['includeFailure'] = $includeFailure;
        return $this;
    }

    /**
    * Gets includeDelete
    *  是否返回已删除的实例数。 当参数值为“true”时，返回已删除的实例数。参数值为“false”或者其他值，不返回已删除的实例数。
    *
    * @return string|null
    */
    public function getIncludeDelete()
    {
        return $this->container['includeDelete'];
    }

    /**
    * Sets includeDelete
    *
    * @param string|null $includeDelete 是否返回已删除的实例数。 当参数值为“true”时，返回已删除的实例数。参数值为“false”或者其他值，不返回已删除的实例数。
    *
    * @return $this
    */
    public function setIncludeDelete($includeDelete)
    {
        $this->container['includeDelete'] = $includeDelete;
        return $this;
    }

    /**
    * Gets name
    *  实例名称。
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
    * @param string|null $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询， offset大于等于0
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询， offset大于等于0
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
    *  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
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
    * @param int|null $limit 每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
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
    * @param string|null $status 实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets nameEqual
    *  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    *
    * @return string|null
    */
    public function getNameEqual()
    {
        return $this->container['nameEqual'];
    }

    /**
    * Sets nameEqual
    *
    * @param string|null $nameEqual 是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    *
    * @return $this
    */
    public function setNameEqual($nameEqual)
    {
        $this->container['nameEqual'] = $nameEqual;
        return $this;
    }

    /**
    * Gets tags
    *  根据实例标签键值对进行查询。{key}表示标签键，{value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。
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
    * @param string|null $tags 根据实例标签键值对进行查询。{key}表示标签键，{value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets ip
    *  连接缓存实例的IP地址。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 连接缓存实例的IP地址。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
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

