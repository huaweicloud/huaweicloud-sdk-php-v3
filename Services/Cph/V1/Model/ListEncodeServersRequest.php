<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEncodeServersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEncodeServersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  状态列表。 - 1：运行中 - 2：异常 - 3：重启中 - 4：冻结 - 5：关机 - 100、1014、0：创建中
    * serverId  云手机服务器的唯一标识。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'type' => 'int',
            'status' => 'int',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  状态列表。 - 1：运行中 - 2：异常 - 3：重启中 - 4：冻结 - 5：关机 - 100、1014、0：创建中
    * serverId  云手机服务器的唯一标识。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'type' => null,
        'status' => null,
        'serverId' => null
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
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  状态列表。 - 1：运行中 - 2：异常 - 3：重启中 - 4：冻结 - 5：关机 - 100、1014、0：创建中
    * serverId  云手机服务器的唯一标识。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'type' => 'type',
            'status' => 'status',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  状态列表。 - 1：运行中 - 2：异常 - 3：重启中 - 4：冻结 - 5：关机 - 100、1014、0：创建中
    * serverId  云手机服务器的唯一标识。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'type' => 'setType',
            'status' => 'setStatus',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  状态列表。 - 1：运行中 - 2：异常 - 3：重启中 - 4：冻结 - 5：关机 - 100、1014、0：创建中
    * serverId  云手机服务器的唯一标识。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'type' => 'getType',
            'status' => 'getStatus',
            'serverId' => 'getServerId'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 8096)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 8096)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 128)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < -128)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -128)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 32.";
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
    * Gets offset
    *  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
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
    * @param int|null $offset 偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
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
    *  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
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
    * @param int|null $limit 每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets type
    *  编码服务类型。 - 0：服务器 - 1：容器
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
    * @param int|null $type 编码服务类型。 - 0：服务器 - 1：容器
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  状态列表。 - 1：运行中 - 2：异常 - 3：重启中 - 4：冻结 - 5：关机 - 100、1014、0：创建中
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态列表。 - 1：运行中 - 2：异常 - 3：重启中 - 4：冻结 - 5：关机 - 100、1014、0：创建中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets serverId
    *  云手机服务器的唯一标识。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云手机服务器的唯一标识。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

