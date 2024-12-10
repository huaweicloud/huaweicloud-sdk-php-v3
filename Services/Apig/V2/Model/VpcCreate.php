<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型  当vpc_channel_type字段为空时，负载通道类型由type字段控制： 当type不为3或microservice_info为空，VCP通道类型默认为服务器类型。 当type=3，microservice_info不为空，VPC通道类型为微服务类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。  此字段待废弃，请使用vpc_channel_type字段指定负载通道类型。
    * vpcChannelType  vpc通道类型。 - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型  当vpc_channel_type为空时，负载通道类型取决于type字段的取值。 当vpc_channel_type不为空，但type字段非空或不为0时，当vpc_channel_type的指定类型与type字段指定的类型冲突时会校验报错。 当vpc_channel_type不为空，且type字段为空或等于0时，直接使用vpc_channel_type字段的值指定负载通道类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroups  VPC通道后端服务器组列表。当microservice_info中service_type为NACOS类型时，服务器组的权重不支持手动设置。
    * members  VPC后端实例列表。  对于引用负载通道类型的负载通道，不会使用此字段新增或更新后端实例。
    * vpcHealthConfig  vpcHealthConfig
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
            'vpcChannelType' => 'string',
            'dictCode' => 'string',
            'memberGroups' => '\HuaweiCloud\SDK\Apig\V2\Model\MemberGroupCreate[]',
            'members' => '\HuaweiCloud\SDK\Apig\V2\Model\MemberInfo[]',
            'vpcHealthConfig' => '\HuaweiCloud\SDK\Apig\V2\Model\VpcHealthConfig',
            'microserviceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceCreate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型  当vpc_channel_type字段为空时，负载通道类型由type字段控制： 当type不为3或microservice_info为空，VCP通道类型默认为服务器类型。 当type=3，microservice_info不为空，VPC通道类型为微服务类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。  此字段待废弃，请使用vpc_channel_type字段指定负载通道类型。
    * vpcChannelType  vpc通道类型。 - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型  当vpc_channel_type为空时，负载通道类型取决于type字段的取值。 当vpc_channel_type不为空，但type字段非空或不为0时，当vpc_channel_type的指定类型与type字段指定的类型冲突时会校验报错。 当vpc_channel_type不为空，且type字段为空或等于0时，直接使用vpc_channel_type字段的值指定负载通道类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroups  VPC通道后端服务器组列表。当microservice_info中service_type为NACOS类型时，服务器组的权重不支持手动设置。
    * members  VPC后端实例列表。  对于引用负载通道类型的负载通道，不会使用此字段新增或更新后端实例。
    * vpcHealthConfig  vpcHealthConfig
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
        'vpcChannelType' => null,
        'dictCode' => null,
        'memberGroups' => null,
        'members' => null,
        'vpcHealthConfig' => null,
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
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型  当vpc_channel_type字段为空时，负载通道类型由type字段控制： 当type不为3或microservice_info为空，VCP通道类型默认为服务器类型。 当type=3，microservice_info不为空，VPC通道类型为微服务类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。  此字段待废弃，请使用vpc_channel_type字段指定负载通道类型。
    * vpcChannelType  vpc通道类型。 - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型  当vpc_channel_type为空时，负载通道类型取决于type字段的取值。 当vpc_channel_type不为空，但type字段非空或不为0时，当vpc_channel_type的指定类型与type字段指定的类型冲突时会校验报错。 当vpc_channel_type不为空，且type字段为空或等于0时，直接使用vpc_channel_type字段的值指定负载通道类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroups  VPC通道后端服务器组列表。当microservice_info中service_type为NACOS类型时，服务器组的权重不支持手动设置。
    * members  VPC后端实例列表。  对于引用负载通道类型的负载通道，不会使用此字段新增或更新后端实例。
    * vpcHealthConfig  vpcHealthConfig
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
            'vpcChannelType' => 'vpc_channel_type',
            'dictCode' => 'dict_code',
            'memberGroups' => 'member_groups',
            'members' => 'members',
            'vpcHealthConfig' => 'vpc_health_config',
            'microserviceInfo' => 'microservice_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型  当vpc_channel_type字段为空时，负载通道类型由type字段控制： 当type不为3或microservice_info为空，VCP通道类型默认为服务器类型。 当type=3，microservice_info不为空，VPC通道类型为微服务类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。  此字段待废弃，请使用vpc_channel_type字段指定负载通道类型。
    * vpcChannelType  vpc通道类型。 - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型  当vpc_channel_type为空时，负载通道类型取决于type字段的取值。 当vpc_channel_type不为空，但type字段非空或不为0时，当vpc_channel_type的指定类型与type字段指定的类型冲突时会校验报错。 当vpc_channel_type不为空，且type字段为空或等于0时，直接使用vpc_channel_type字段的值指定负载通道类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroups  VPC通道后端服务器组列表。当microservice_info中service_type为NACOS类型时，服务器组的权重不支持手动设置。
    * members  VPC后端实例列表。  对于引用负载通道类型的负载通道，不会使用此字段新增或更新后端实例。
    * vpcHealthConfig  vpcHealthConfig
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
            'vpcChannelType' => 'setVpcChannelType',
            'dictCode' => 'setDictCode',
            'memberGroups' => 'setMemberGroups',
            'members' => 'setMembers',
            'vpcHealthConfig' => 'setVpcHealthConfig',
            'microserviceInfo' => 'setMicroserviceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  VPC通道的名称。  长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、中划线、下划线、点组成，且只能以英文或中文开头。 > 中文字符必须为UTF-8或者unicode编码。
    * port  VPC通道中主机的端口号。  取值范围1 ~ 65535。
    * balanceStrategy  分发算法。 - 1：加权轮询（wrr） - 2：加权最少连接（wleastconn） - 3：源地址哈希（source） - 4：URI哈希（uri）
    * memberType  VPC通道的成员类型。 - ip - ecs
    * type  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型  当vpc_channel_type字段为空时，负载通道类型由type字段控制： 当type不为3或microservice_info为空，VCP通道类型默认为服务器类型。 当type=3，microservice_info不为空，VPC通道类型为微服务类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。  此字段待废弃，请使用vpc_channel_type字段指定负载通道类型。
    * vpcChannelType  vpc通道类型。 - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型  当vpc_channel_type为空时，负载通道类型取决于type字段的取值。 当vpc_channel_type不为空，但type字段非空或不为0时，当vpc_channel_type的指定类型与type字段指定的类型冲突时会校验报错。 当vpc_channel_type不为空，且type字段为空或等于0时，直接使用vpc_channel_type字段的值指定负载通道类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroups  VPC通道后端服务器组列表。当microservice_info中service_type为NACOS类型时，服务器组的权重不支持手动设置。
    * members  VPC后端实例列表。  对于引用负载通道类型的负载通道，不会使用此字段新增或更新后端实例。
    * vpcHealthConfig  vpcHealthConfig
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
            'vpcChannelType' => 'getVpcChannelType',
            'dictCode' => 'getDictCode',
            'memberGroups' => 'getMemberGroups',
            'members' => 'getMembers',
            'vpcHealthConfig' => 'getVpcHealthConfig',
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
    const VPC_CHANNEL_TYPE_BUILTIN = 'builtin';
    const VPC_CHANNEL_TYPE_MICROSERVICE = 'microservice';
    const VPC_CHANNEL_TYPE_REFERENCE = 'reference';
    

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
    public function getVpcChannelTypeAllowableValues()
    {
        return [
            self::VPC_CHANNEL_TYPE_BUILTIN,
            self::VPC_CHANNEL_TYPE_MICROSERVICE,
            self::VPC_CHANNEL_TYPE_REFERENCE,
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
        $this->container['vpcChannelType'] = isset($data['vpcChannelType']) ? $data['vpcChannelType'] : null;
        $this->container['dictCode'] = isset($data['dictCode']) ? $data['dictCode'] : null;
        $this->container['memberGroups'] = isset($data['memberGroups']) ? $data['memberGroups'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['vpcHealthConfig'] = isset($data['vpcHealthConfig']) ? $data['vpcHealthConfig'] : null;
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

            $allowedValues = $this->getVpcChannelTypeAllowableValues();
                if (!is_null($this->container['vpcChannelType']) && !in_array($this->container['vpcChannelType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vpcChannelType', must be one of '%s'",
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
    *  vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型  当vpc_channel_type字段为空时，负载通道类型由type字段控制： 当type不为3或microservice_info为空，VCP通道类型默认为服务器类型。 当type=3，microservice_info不为空，VPC通道类型为微服务类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。  此字段待废弃，请使用vpc_channel_type字段指定负载通道类型。
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
    * @param int|null $type vpc通道类型，默认为服务器类型。 - 2：服务器类型 - 3：微服务类型  当vpc_channel_type字段为空时，负载通道类型由type字段控制： 当type不为3或microservice_info为空，VCP通道类型默认为服务器类型。 当type=3，microservice_info不为空，VPC通道类型为微服务类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。  此字段待废弃，请使用vpc_channel_type字段指定负载通道类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vpcChannelType
    *  vpc通道类型。 - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型  当vpc_channel_type为空时，负载通道类型取决于type字段的取值。 当vpc_channel_type不为空，但type字段非空或不为0时，当vpc_channel_type的指定类型与type字段指定的类型冲突时会校验报错。 当vpc_channel_type不为空，且type字段为空或等于0时，直接使用vpc_channel_type字段的值指定负载通道类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。
    *
    * @return string|null
    */
    public function getVpcChannelType()
    {
        return $this->container['vpcChannelType'];
    }

    /**
    * Sets vpcChannelType
    *
    * @param string|null $vpcChannelType vpc通道类型。 - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型  当vpc_channel_type为空时，负载通道类型取决于type字段的取值。 当vpc_channel_type不为空，但type字段非空或不为0时，当vpc_channel_type的指定类型与type字段指定的类型冲突时会校验报错。 当vpc_channel_type不为空，且type字段为空或等于0时，直接使用vpc_channel_type字段的值指定负载通道类型。  修改负载通道时vpc通道类型不会修改，直接使用原有的vpc通道类型。
    *
    * @return $this
    */
    public function setVpcChannelType($vpcChannelType)
    {
        $this->container['vpcChannelType'] = $vpcChannelType;
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
    * Gets memberGroups
    *  VPC通道后端服务器组列表。当microservice_info中service_type为NACOS类型时，服务器组的权重不支持手动设置。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MemberGroupCreate[]|null
    */
    public function getMemberGroups()
    {
        return $this->container['memberGroups'];
    }

    /**
    * Sets memberGroups
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MemberGroupCreate[]|null $memberGroups VPC通道后端服务器组列表。当microservice_info中service_type为NACOS类型时，服务器组的权重不支持手动设置。
    *
    * @return $this
    */
    public function setMemberGroups($memberGroups)
    {
        $this->container['memberGroups'] = $memberGroups;
        return $this;
    }

    /**
    * Gets members
    *  VPC后端实例列表。  对于引用负载通道类型的负载通道，不会使用此字段新增或更新后端实例。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MemberInfo[]|null
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MemberInfo[]|null $members VPC后端实例列表。  对于引用负载通道类型的负载通道，不会使用此字段新增或更新后端实例。
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets vpcHealthConfig
    *  vpcHealthConfig
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\VpcHealthConfig|null
    */
    public function getVpcHealthConfig()
    {
        return $this->container['vpcHealthConfig'];
    }

    /**
    * Sets vpcHealthConfig
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\VpcHealthConfig|null $vpcHealthConfig vpcHealthConfig
    *
    * @return $this
    */
    public function setVpcHealthConfig($vpcHealthConfig)
    {
        $this->container['vpcHealthConfig'] = $vpcHealthConfig;
        return $this;
    }

    /**
    * Gets microserviceInfo
    *  microserviceInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceCreate|null
    */
    public function getMicroserviceInfo()
    {
        return $this->container['microserviceInfo'];
    }

    /**
    * Sets microserviceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceCreate|null $microserviceInfo microserviceInfo
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

