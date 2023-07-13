<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryResourceResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryResourceResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识若携带则以携带为准，企业内保证唯一，否则后台自动生成UUID。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 - IDEA_HUB   - ideahub
    * typeId  资源标识，比如资源类型为VMR，则该参数为vmrPkgId。
    * typeDesc  资源标识对应的回显描述,比如资源类型为VMR，则该参数为vmrPkgName。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1：云会议室 - 2：网络研讨会
    * count  资源数量。
    * expireDate  到期时间,utc时间戳。
    * orderId  资源对应的订单id。
    * status  资源状态: - 0：正常 - 1：到期 - 2：停用
    * editable  标识资源是否可以编辑或删除。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'typeId' => 'string',
            'typeDesc' => 'string',
            'vmrMode' => 'int',
            'count' => 'int',
            'expireDate' => 'int',
            'orderId' => 'string',
            'status' => 'int',
            'editable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识若携带则以携带为准，企业内保证唯一，否则后台自动生成UUID。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 - IDEA_HUB   - ideahub
    * typeId  资源标识，比如资源类型为VMR，则该参数为vmrPkgId。
    * typeDesc  资源标识对应的回显描述,比如资源类型为VMR，则该参数为vmrPkgName。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1：云会议室 - 2：网络研讨会
    * count  资源数量。
    * expireDate  到期时间,utc时间戳。
    * orderId  资源对应的订单id。
    * status  资源状态: - 0：正常 - 1：到期 - 2：停用
    * editable  标识资源是否可以编辑或删除。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'typeId' => null,
        'typeDesc' => null,
        'vmrMode' => null,
        'count' => null,
        'expireDate' => 'int64',
        'orderId' => null,
        'status' => null,
        'editable' => null
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
    * id  唯一标识若携带则以携带为准，企业内保证唯一，否则后台自动生成UUID。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 - IDEA_HUB   - ideahub
    * typeId  资源标识，比如资源类型为VMR，则该参数为vmrPkgId。
    * typeDesc  资源标识对应的回显描述,比如资源类型为VMR，则该参数为vmrPkgName。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1：云会议室 - 2：网络研讨会
    * count  资源数量。
    * expireDate  到期时间,utc时间戳。
    * orderId  资源对应的订单id。
    * status  资源状态: - 0：正常 - 1：到期 - 2：停用
    * editable  标识资源是否可以编辑或删除。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'typeId' => 'typeId',
            'typeDesc' => 'typeDesc',
            'vmrMode' => 'vmrMode',
            'count' => 'count',
            'expireDate' => 'expireDate',
            'orderId' => 'orderId',
            'status' => 'status',
            'editable' => 'editable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识若携带则以携带为准，企业内保证唯一，否则后台自动生成UUID。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 - IDEA_HUB   - ideahub
    * typeId  资源标识，比如资源类型为VMR，则该参数为vmrPkgId。
    * typeDesc  资源标识对应的回显描述,比如资源类型为VMR，则该参数为vmrPkgName。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1：云会议室 - 2：网络研讨会
    * count  资源数量。
    * expireDate  到期时间,utc时间戳。
    * orderId  资源对应的订单id。
    * status  资源状态: - 0：正常 - 1：到期 - 2：停用
    * editable  标识资源是否可以编辑或删除。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'typeId' => 'setTypeId',
            'typeDesc' => 'setTypeDesc',
            'vmrMode' => 'setVmrMode',
            'count' => 'setCount',
            'expireDate' => 'setExpireDate',
            'orderId' => 'setOrderId',
            'status' => 'setStatus',
            'editable' => 'setEditable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识若携带则以携带为准，企业内保证唯一，否则后台自动生成UUID。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 - IDEA_HUB   - ideahub
    * typeId  资源标识，比如资源类型为VMR，则该参数为vmrPkgId。
    * typeDesc  资源标识对应的回显描述,比如资源类型为VMR，则该参数为vmrPkgName。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1：云会议室 - 2：网络研讨会
    * count  资源数量。
    * expireDate  到期时间,utc时间戳。
    * orderId  资源对应的订单id。
    * status  资源状态: - 0：正常 - 1：到期 - 2：停用
    * editable  标识资源是否可以编辑或删除。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'typeId' => 'getTypeId',
            'typeDesc' => 'getTypeDesc',
            'vmrMode' => 'getVmrMode',
            'count' => 'getCount',
            'expireDate' => 'getExpireDate',
            'orderId' => 'getOrderId',
            'status' => 'getStatus',
            'editable' => 'getEditable'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['typeDesc'] = isset($data['typeDesc']) ? $data['typeDesc'] : null;
        $this->container['vmrMode'] = isset($data['vmrMode']) ? $data['vmrMode'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['expireDate'] = isset($data['expireDate']) ? $data['expireDate'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
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
    * Gets id
    *  唯一标识若携带则以携带为准，企业内保证唯一，否则后台自动生成UUID。
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
    * @param string|null $id 唯一标识若携带则以携带为准，企业内保证唯一，否则后台自动生成UUID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 - IDEA_HUB   - ideahub
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 - IDEA_HUB   - ideahub
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets typeId
    *  资源标识，比如资源类型为VMR，则该参数为vmrPkgId。
    *
    * @return string|null
    */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
    * Sets typeId
    *
    * @param string|null $typeId 资源标识，比如资源类型为VMR，则该参数为vmrPkgId。
    *
    * @return $this
    */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;
        return $this;
    }

    /**
    * Gets typeDesc
    *  资源标识对应的回显描述,比如资源类型为VMR，则该参数为vmrPkgName。
    *
    * @return string|null
    */
    public function getTypeDesc()
    {
        return $this->container['typeDesc'];
    }

    /**
    * Sets typeDesc
    *
    * @param string|null $typeDesc 资源标识对应的回显描述,比如资源类型为VMR，则该参数为vmrPkgName。
    *
    * @return $this
    */
    public function setTypeDesc($typeDesc)
    {
        $this->container['typeDesc'] = $typeDesc;
        return $this;
    }

    /**
    * Gets vmrMode
    *  VMR模式。 - 0：个人会议ID - 1：云会议室 - 2：网络研讨会
    *
    * @return int|null
    */
    public function getVmrMode()
    {
        return $this->container['vmrMode'];
    }

    /**
    * Sets vmrMode
    *
    * @param int|null $vmrMode VMR模式。 - 0：个人会议ID - 1：云会议室 - 2：网络研讨会
    *
    * @return $this
    */
    public function setVmrMode($vmrMode)
    {
        $this->container['vmrMode'] = $vmrMode;
        return $this;
    }

    /**
    * Gets count
    *  资源数量。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 资源数量。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets expireDate
    *  到期时间,utc时间戳。
    *
    * @return int|null
    */
    public function getExpireDate()
    {
        return $this->container['expireDate'];
    }

    /**
    * Sets expireDate
    *
    * @param int|null $expireDate 到期时间,utc时间戳。
    *
    * @return $this
    */
    public function setExpireDate($expireDate)
    {
        $this->container['expireDate'] = $expireDate;
        return $this;
    }

    /**
    * Gets orderId
    *  资源对应的订单id。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 资源对应的订单id。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets status
    *  资源状态: - 0：正常 - 1：到期 - 2：停用
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
    * @param int|null $status 资源状态: - 0：正常 - 1：到期 - 2：停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets editable
    *  标识资源是否可以编辑或删除。
    *
    * @return bool|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param bool|null $editable 标识资源是否可以编辑或删除。
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
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

