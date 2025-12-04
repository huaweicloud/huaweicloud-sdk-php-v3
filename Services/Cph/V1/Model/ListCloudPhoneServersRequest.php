<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCloudPhoneServersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCloudPhoneServersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * serverName  云手机服务器名称，支持模糊查询。
    * serverId  云手机服务器的唯一标识。
    * networkVersion  云手机服务器是否为自定义网络标识。 - v1：系统定义网络的云手机服务器 - v2：自定义网络的云手机服务器
    * phoneModelName  手机规格名称。
    * createSince  查询的起始时间戳。
    * createUntil  查询的结束时间戳。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'serverName' => 'string',
            'serverId' => 'string',
            'networkVersion' => 'string',
            'phoneModelName' => 'string',
            'createSince' => 'int',
            'createUntil' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * serverName  云手机服务器名称，支持模糊查询。
    * serverId  云手机服务器的唯一标识。
    * networkVersion  云手机服务器是否为自定义网络标识。 - v1：系统定义网络的云手机服务器 - v2：自定义网络的云手机服务器
    * phoneModelName  手机规格名称。
    * createSince  查询的起始时间戳。
    * createUntil  查询的结束时间戳。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'serverName' => null,
        'serverId' => null,
        'networkVersion' => null,
        'phoneModelName' => null,
        'createSince' => 'int64',
        'createUntil' => 'int64',
        'status' => 'int32'
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
    * serverName  云手机服务器名称，支持模糊查询。
    * serverId  云手机服务器的唯一标识。
    * networkVersion  云手机服务器是否为自定义网络标识。 - v1：系统定义网络的云手机服务器 - v2：自定义网络的云手机服务器
    * phoneModelName  手机规格名称。
    * createSince  查询的起始时间戳。
    * createUntil  查询的结束时间戳。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'serverName' => 'server_name',
            'serverId' => 'server_id',
            'networkVersion' => 'network_version',
            'phoneModelName' => 'phone_model_name',
            'createSince' => 'create_since',
            'createUntil' => 'create_until',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * serverName  云手机服务器名称，支持模糊查询。
    * serverId  云手机服务器的唯一标识。
    * networkVersion  云手机服务器是否为自定义网络标识。 - v1：系统定义网络的云手机服务器 - v2：自定义网络的云手机服务器
    * phoneModelName  手机规格名称。
    * createSince  查询的起始时间戳。
    * createUntil  查询的结束时间戳。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'serverName' => 'setServerName',
            'serverId' => 'setServerId',
            'networkVersion' => 'setNetworkVersion',
            'phoneModelName' => 'setPhoneModelName',
            'createSince' => 'setCreateSince',
            'createUntil' => 'setCreateUntil',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * serverName  云手机服务器名称，支持模糊查询。
    * serverId  云手机服务器的唯一标识。
    * networkVersion  云手机服务器是否为自定义网络标识。 - v1：系统定义网络的云手机服务器 - v2：自定义网络的云手机服务器
    * phoneModelName  手机规格名称。
    * createSince  查询的起始时间戳。
    * createUntil  查询的结束时间戳。
    * status  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'serverName' => 'getServerName',
            'serverId' => 'getServerId',
            'networkVersion' => 'getNetworkVersion',
            'phoneModelName' => 'getPhoneModelName',
            'createSince' => 'getCreateSince',
            'createUntil' => 'getCreateUntil',
            'status' => 'getStatus'
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
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['networkVersion'] = isset($data['networkVersion']) ? $data['networkVersion'] : null;
        $this->container['phoneModelName'] = isset($data['phoneModelName']) ? $data['phoneModelName'] : null;
        $this->container['createSince'] = isset($data['createSince']) ? $data['createSince'] : null;
        $this->container['createUntil'] = isset($data['createUntil']) ? $data['createUntil'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['networkVersion']) && (mb_strlen($this->container['networkVersion']) > 1024)) {
                $invalidProperties[] = "invalid value for 'networkVersion', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['networkVersion']) && (mb_strlen($this->container['networkVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'networkVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createSince']) && ($this->container['createSince'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'createSince', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['createSince']) && ($this->container['createSince'] < 0)) {
                $invalidProperties[] = "invalid value for 'createSince', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUntil']) && ($this->container['createUntil'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'createUntil', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['createUntil']) && ($this->container['createUntil'] < 0)) {
                $invalidProperties[] = "invalid value for 'createUntil', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
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
    * Gets serverName
    *  云手机服务器名称，支持模糊查询。
    *
    * @return string|null
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string|null $serverName 云手机服务器名称，支持模糊查询。
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
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
    * Gets networkVersion
    *  云手机服务器是否为自定义网络标识。 - v1：系统定义网络的云手机服务器 - v2：自定义网络的云手机服务器
    *
    * @return string|null
    */
    public function getNetworkVersion()
    {
        return $this->container['networkVersion'];
    }

    /**
    * Sets networkVersion
    *
    * @param string|null $networkVersion 云手机服务器是否为自定义网络标识。 - v1：系统定义网络的云手机服务器 - v2：自定义网络的云手机服务器
    *
    * @return $this
    */
    public function setNetworkVersion($networkVersion)
    {
        $this->container['networkVersion'] = $networkVersion;
        return $this;
    }

    /**
    * Gets phoneModelName
    *  手机规格名称。
    *
    * @return string|null
    */
    public function getPhoneModelName()
    {
        return $this->container['phoneModelName'];
    }

    /**
    * Sets phoneModelName
    *
    * @param string|null $phoneModelName 手机规格名称。
    *
    * @return $this
    */
    public function setPhoneModelName($phoneModelName)
    {
        $this->container['phoneModelName'] = $phoneModelName;
        return $this;
    }

    /**
    * Gets createSince
    *  查询的起始时间戳。
    *
    * @return int|null
    */
    public function getCreateSince()
    {
        return $this->container['createSince'];
    }

    /**
    * Sets createSince
    *
    * @param int|null $createSince 查询的起始时间戳。
    *
    * @return $this
    */
    public function setCreateSince($createSince)
    {
        $this->container['createSince'] = $createSince;
        return $this;
    }

    /**
    * Gets createUntil
    *  查询的结束时间戳。
    *
    * @return int|null
    */
    public function getCreateUntil()
    {
        return $this->container['createUntil'];
    }

    /**
    * Sets createUntil
    *
    * @param int|null $createUntil 查询的结束时间戳。
    *
    * @return $this
    */
    public function setCreateUntil($createUntil)
    {
        $this->container['createUntil'] = $createUntil;
        return $this;
    }

    /**
    * Gets status
    *  服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
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
    * @param int|null $status 服务器状态。 - 0、1、3、4：创建中 - 2：异常 - 5：正常 - 8：冻结 - 10：关机 - 11：关机中 - 12：关机失败 - 13：开机中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

