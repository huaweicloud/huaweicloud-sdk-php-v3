<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcChannelInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcChannelInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * createTime  VPC通道的创建时间
    * id  VPC通道的编号
    * status  VPC通道的状态。 - 1：正常 - 2：异常
    * memberGroups  后端云服务器组列表。
    * microserviceInfo  microserviceInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'port' => 'int',
            'balanceStrategy' => 'int',
            'memberType' => 'string',
            'type' => 'int',
            'dictCode' => 'string',
            'createTime' => '\DateTime',
            'id' => 'string',
            'status' => 'int',
            'memberGroups' => '\HuaweiCloud\SDK\Apig\V2\Model\MemberGroupInfo[]',
            'microserviceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * createTime  VPC通道的创建时间
    * id  VPC通道的编号
    * status  VPC通道的状态。 - 1：正常 - 2：异常
    * memberGroups  后端云服务器组列表。
    * microserviceInfo  microserviceInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'port' => 'int32',
        'balanceStrategy' => 'int32',
        'memberType' => null,
        'type' => null,
        'dictCode' => null,
        'createTime' => 'date-time',
        'id' => null,
        'status' => 'int32',
        'memberGroups' => null,
        'microserviceInfo' => null
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
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * createTime  VPC通道的创建时间
    * id  VPC通道的编号
    * status  VPC通道的状态。 - 1：正常 - 2：异常
    * memberGroups  后端云服务器组列表。
    * microserviceInfo  microserviceInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'port' => 'port',
            'balanceStrategy' => 'balance_strategy',
            'memberType' => 'member_type',
            'type' => 'type',
            'dictCode' => 'dict_code',
            'createTime' => 'create_time',
            'id' => 'id',
            'status' => 'status',
            'memberGroups' => 'member_groups',
            'microserviceInfo' => 'microservice_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * createTime  VPC通道的创建时间
    * id  VPC通道的编号
    * status  VPC通道的状态。 - 1：正常 - 2：异常
    * memberGroups  后端云服务器组列表。
    * microserviceInfo  microserviceInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'port' => 'setPort',
            'balanceStrategy' => 'setBalanceStrategy',
            'memberType' => 'setMemberType',
            'type' => 'setType',
            'dictCode' => 'setDictCode',
            'createTime' => 'setCreateTime',
            'id' => 'setId',
            'status' => 'setStatus',
            'memberGroups' => 'setMemberGroups',
            'microserviceInfo' => 'setMicroserviceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * createTime  VPC通道的创建时间
    * id  VPC通道的编号
    * status  VPC通道的状态。 - 1：正常 - 2：异常
    * memberGroups  后端云服务器组列表。
    * microserviceInfo  microserviceInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'port' => 'getPort',
            'balanceStrategy' => 'getBalanceStrategy',
            'memberType' => 'getMemberType',
            'type' => 'getType',
            'dictCode' => 'getDictCode',
            'createTime' => 'getCreateTime',
            'id' => 'getId',
            'status' => 'getStatus',
            'memberGroups' => 'getMemberGroups',
            'microserviceInfo' => 'getMicroserviceInfo'
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
    const BALANCE_STRATEGY_1 = 1;
    const BALANCE_STRATEGY_2 = 2;
    const BALANCE_STRATEGY_3 = 3;
    const BALANCE_STRATEGY_4 = 4;
    const MEMBER_TYPE_IP = 'ip';
    const MEMBER_TYPE_ECS = 'ecs';
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBalanceStrategyAllowableValues()
    {
        return [
            self::BALANCE_STRATEGY_1,
            self::BALANCE_STRATEGY_2,
            self::BALANCE_STRATEGY_3,
            self::BALANCE_STRATEGY_4,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMemberTypeAllowableValues()
    {
        return [
            self::MEMBER_TYPE_IP,
            self::MEMBER_TYPE_ECS,
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
            self::STATUS_1,
            self::STATUS_2,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['balanceStrategy'] = isset($data['balanceStrategy']) ? $data['balanceStrategy'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dictCode'] = isset($data['dictCode']) ? $data['dictCode'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['memberGroups'] = isset($data['memberGroups']) ? $data['memberGroups'] : null;
        $this->container['microserviceInfo'] = isset($data['microserviceInfo']) ? $data['microserviceInfo'] : null;
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
            if (!preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9-_.]|[\\u4e00-\\u9fa5]){2,63}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9-_.]|[\\u4e00-\\u9fa5]){2,63}$/.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['balanceStrategy'] === null) {
            $invalidProperties[] = "'balanceStrategy' can't be null";
        }
            $allowedValues = $this->getBalanceStrategyAllowableValues();
                if (!is_null($this->container['balanceStrategy']) && !in_array($this->container['balanceStrategy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'balanceStrategy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['memberType'] === null) {
            $invalidProperties[] = "'memberType' can't be null";
        }
            $allowedValues = $this->getMemberTypeAllowableValues();
                if (!is_null($this->container['memberType']) && !in_array($this->container['memberType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dictCode']) && (mb_strlen($this->container['dictCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictCode']) && (mb_strlen($this->container['dictCode']) < 3)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['dictCode']) && !preg_match("/([a-zA-Z0-9._-]){2,63}$/", $this->container['dictCode'])) {
                $invalidProperties[] = "invalid value for 'dictCode', must be conform to the pattern /([a-zA-Z0-9._-]){2,63}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets name
    *  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
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
    * @param string $name VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets port
    *  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port VPC通道中主机的端口号。  取值范围1 ~ 65535。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets balanceStrategy
    *  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    *
    * @return int
    */
    public function getBalanceStrategy()
    {
        return $this->container['balanceStrategy'];
    }

    /**
    * Sets balanceStrategy
    *
    * @param int $balanceStrategy 分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    *
    * @return $this
    */
    public function setBalanceStrategy($balanceStrategy)
    {
        $this->container['balanceStrategy'] = $balanceStrategy;
        return $this;
    }

    /**
    * Gets memberType
    *  VPC通道的成员类型。 - ip - ecs
    *
    * @return string
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string $memberType VPC通道的成员类型。 - ip - ecs
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
        return $this;
    }

    /**
    * Gets type
    *  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型
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
    * @param int|null $type vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dictCode
    *  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    *
    * @return string|null
    */
    public function getDictCode()
    {
        return $this->container['dictCode'];
    }

    /**
    * Sets dictCode
    *
    * @param string|null $dictCode VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    *
    * @return $this
    */
    public function setDictCode($dictCode)
    {
        $this->container['dictCode'] = $dictCode;
        return $this;
    }

    /**
    * Gets createTime
    *  VPC通道的创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime VPC通道的创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets id
    *  VPC通道的编号
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
    * @param string|null $id VPC通道的编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  VPC通道的状态。 - 1：正常 - 2：异常
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
    * @param int|null $status VPC通道的状态。 - 1：正常 - 2：异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets memberGroups
    *  后端云服务器组列表。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MemberGroupInfo[]|null
    */
    public function getMemberGroups()
    {
        return $this->container['memberGroups'];
    }

    /**
    * Sets memberGroups
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MemberGroupInfo[]|null $memberGroups 后端云服务器组列表。
    *
    * @return $this
    */
    public function setMemberGroups($memberGroups)
    {
        $this->container['memberGroups'] = $memberGroups;
        return $this;
    }

    /**
    * Gets microserviceInfo
    *  microserviceInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfo|null
    */
    public function getMicroserviceInfo()
    {
        return $this->container['microserviceInfo'];
    }

    /**
    * Sets microserviceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfo|null $microserviceInfo microserviceInfo
    *
    * @return $this
    */
    public function setMicroserviceInfo($microserviceInfo)
    {
        $this->container['microserviceInfo'] = $microserviceInfo;
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

