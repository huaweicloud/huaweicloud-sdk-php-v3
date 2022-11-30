<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRuleAclsUsingGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRuleAclsUsingGetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  租户项目id
    * objectId  防护对象Id
    * type  规则Type0：互联网规则,1：vpc规则, 2:nat规则
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1
    * ip  ip地址
    * name  名称
    * direction  方向0：外到内1：内到外
    * status  规则下发状态 0：禁用,1：启用
    * actionType  动作0：permit,1：deny
    * addressType  地址类型0 ipv4,1 ipv6,2 domain
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'objectId' => 'string',
            'type' => 'int',
            'protocol' => 'int',
            'ip' => 'string',
            'name' => 'string',
            'direction' => 'int',
            'status' => 'int',
            'actionType' => 'int',
            'addressType' => 'int',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  租户项目id
    * objectId  防护对象Id
    * type  规则Type0：互联网规则,1：vpc规则, 2:nat规则
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1
    * ip  ip地址
    * name  名称
    * direction  方向0：外到内1：内到外
    * status  规则下发状态 0：禁用,1：启用
    * actionType  动作0：permit,1：deny
    * addressType  地址类型0 ipv4,1 ipv6,2 domain
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'objectId' => null,
        'type' => 'int32',
        'protocol' => null,
        'ip' => null,
        'name' => null,
        'direction' => 'int32',
        'status' => 'int32',
        'actionType' => 'int32',
        'addressType' => 'int32',
        'limit' => null,
        'offset' => null
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
    * projectId  租户项目id
    * objectId  防护对象Id
    * type  规则Type0：互联网规则,1：vpc规则, 2:nat规则
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1
    * ip  ip地址
    * name  名称
    * direction  方向0：外到内1：内到外
    * status  规则下发状态 0：禁用,1：启用
    * actionType  动作0：permit,1：deny
    * addressType  地址类型0 ipv4,1 ipv6,2 domain
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'objectId' => 'object_id',
            'type' => 'type',
            'protocol' => 'protocol',
            'ip' => 'ip',
            'name' => 'name',
            'direction' => 'direction',
            'status' => 'status',
            'actionType' => 'action_type',
            'addressType' => 'address_type',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  租户项目id
    * objectId  防护对象Id
    * type  规则Type0：互联网规则,1：vpc规则, 2:nat规则
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1
    * ip  ip地址
    * name  名称
    * direction  方向0：外到内1：内到外
    * status  规则下发状态 0：禁用,1：启用
    * actionType  动作0：permit,1：deny
    * addressType  地址类型0 ipv4,1 ipv6,2 domain
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'objectId' => 'setObjectId',
            'type' => 'setType',
            'protocol' => 'setProtocol',
            'ip' => 'setIp',
            'name' => 'setName',
            'direction' => 'setDirection',
            'status' => 'setStatus',
            'actionType' => 'setActionType',
            'addressType' => 'setAddressType',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  租户项目id
    * objectId  防护对象Id
    * type  规则Type0：互联网规则,1：vpc规则, 2:nat规则
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1
    * ip  ip地址
    * name  名称
    * direction  方向0：外到内1：内到外
    * status  规则下发状态 0：禁用,1：启用
    * actionType  动作0：permit,1：deny
    * addressType  地址类型0 ipv4,1 ipv6,2 domain
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'objectId' => 'getObjectId',
            'type' => 'getType',
            'protocol' => 'getProtocol',
            'ip' => 'getIp',
            'name' => 'getName',
            'direction' => 'getDirection',
            'status' => 'getStatus',
            'actionType' => 'getActionType',
            'addressType' => 'getAddressType',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    const TYPE_0 = 0;
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const PROTOCOL_6 = 6;
    const PROTOCOL_17 = 17;
    const PROTOCOL_1 = 1;
    const PROTOCOL_58 = 58;
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const ACTION_TYPE_0 = 0;
    const ACTION_TYPE_1 = 1;
    const ADDRESS_TYPE_0 = 0;
    const ADDRESS_TYPE_1 = 1;
    const ADDRESS_TYPE_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_0,
            self::TYPE_1,
            self::TYPE_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_6,
            self::PROTOCOL_17,
            self::PROTOCOL_1,
            self::PROTOCOL_58,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_0,
            self::ACTION_TYPE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_0,
            self::ADDRESS_TYPE_1,
            self::ADDRESS_TYPE_2,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getActionTypeAllowableValues();
                if (!is_null($this->container['actionType']) && !in_array($this->container['actionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAddressTypeAllowableValues();
                if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addressType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
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
    * Gets projectId
    *  租户项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象Id
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象Id
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets type
    *  规则Type0：互联网规则,1：vpc规则, 2:nat规则
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
    * @param int|null $type 规则Type0：互联网规则,1：vpc规则, 2:nat规则
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1
    *
    * @return int|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int|null $protocol 协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets ip
    *  ip地址
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
    * @param string|null $ip ip地址
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets direction
    *  方向0：外到内1：内到外
    *
    * @return int|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param int|null $direction 方向0：外到内1：内到外
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets status
    *  规则下发状态 0：禁用,1：启用
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
    * @param int|null $status 规则下发状态 0：禁用,1：启用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets actionType
    *  动作0：permit,1：deny
    *
    * @return int|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param int|null $actionType 动作0：permit,1：deny
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets addressType
    *  地址类型0 ipv4,1 ipv6,2 domain
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType 地址类型0 ipv4,1 ipv6,2 domain
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

