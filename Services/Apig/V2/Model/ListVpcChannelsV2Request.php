<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpcChannelsV2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpcChannelsV2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  VPC通道的编号
    * name  VPC通道的名称
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  目前支持name，member_group_name。
    * memberHost  后端服务地址。默认精确查询，不支持模糊查询。
    * memberPort  后端服务器端口
    * memberGroupName  后端服务器组名称
    * memberGroupId  后端服务器组编号
    * vpcChannelType  vpc通道类型： - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'id' => 'string',
            'name' => 'string',
            'dictCode' => 'string',
            'preciseSearch' => 'string',
            'memberHost' => 'string',
            'memberPort' => 'int',
            'memberGroupName' => 'string',
            'memberGroupId' => 'string',
            'vpcChannelType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  VPC通道的编号
    * name  VPC通道的名称
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  目前支持name，member_group_name。
    * memberHost  后端服务地址。默认精确查询，不支持模糊查询。
    * memberPort  后端服务器端口
    * memberGroupName  后端服务器组名称
    * memberGroupId  后端服务器组编号
    * vpcChannelType  vpc通道类型： - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'offset' => 'int64',
        'limit' => 'int32',
        'id' => null,
        'name' => null,
        'dictCode' => null,
        'preciseSearch' => null,
        'memberHost' => null,
        'memberPort' => null,
        'memberGroupName' => null,
        'memberGroupId' => null,
        'vpcChannelType' => null
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
    * id  VPC通道的编号
    * name  VPC通道的名称
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  目前支持name，member_group_name。
    * memberHost  后端服务地址。默认精确查询，不支持模糊查询。
    * memberPort  后端服务器端口
    * memberGroupName  后端服务器组名称
    * memberGroupId  后端服务器组编号
    * vpcChannelType  vpc通道类型： - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'id' => 'id',
            'name' => 'name',
            'dictCode' => 'dict_code',
            'preciseSearch' => 'precise_search',
            'memberHost' => 'member_host',
            'memberPort' => 'member_port',
            'memberGroupName' => 'member_group_name',
            'memberGroupId' => 'member_group_id',
            'vpcChannelType' => 'vpc_channel_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  VPC通道的编号
    * name  VPC通道的名称
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  目前支持name，member_group_name。
    * memberHost  后端服务地址。默认精确查询，不支持模糊查询。
    * memberPort  后端服务器端口
    * memberGroupName  后端服务器组名称
    * memberGroupId  后端服务器组编号
    * vpcChannelType  vpc通道类型： - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'id' => 'setId',
            'name' => 'setName',
            'dictCode' => 'setDictCode',
            'preciseSearch' => 'setPreciseSearch',
            'memberHost' => 'setMemberHost',
            'memberPort' => 'setMemberPort',
            'memberGroupName' => 'setMemberGroupName',
            'memberGroupId' => 'setMemberGroupId',
            'vpcChannelType' => 'setVpcChannelType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * id  VPC通道的编号
    * name  VPC通道的名称
    * dictCode  VPC通道的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  目前支持name，member_group_name。
    * memberHost  后端服务地址。默认精确查询，不支持模糊查询。
    * memberPort  后端服务器端口
    * memberGroupName  后端服务器组名称
    * memberGroupId  后端服务器组编号
    * vpcChannelType  vpc通道类型： - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'id' => 'getId',
            'name' => 'getName',
            'dictCode' => 'getDictCode',
            'preciseSearch' => 'getPreciseSearch',
            'memberHost' => 'getMemberHost',
            'memberPort' => 'getMemberPort',
            'memberGroupName' => 'getMemberGroupName',
            'memberGroupId' => 'getMemberGroupId',
            'vpcChannelType' => 'getVpcChannelType'
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
    const VPC_CHANNEL_TYPE_BUILTIN = 'builtin';
    const VPC_CHANNEL_TYPE_MICROSERVICE = 'microservice';
    const VPC_CHANNEL_TYPE_REFERENCE = 'reference';
    

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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dictCode'] = isset($data['dictCode']) ? $data['dictCode'] : null;
        $this->container['preciseSearch'] = isset($data['preciseSearch']) ? $data['preciseSearch'] : null;
        $this->container['memberHost'] = isset($data['memberHost']) ? $data['memberHost'] : null;
        $this->container['memberPort'] = isset($data['memberPort']) ? $data['memberPort'] : null;
        $this->container['memberGroupName'] = isset($data['memberGroupName']) ? $data['memberGroupName'] : null;
        $this->container['memberGroupId'] = isset($data['memberGroupId']) ? $data['memberGroupId'] : null;
        $this->container['vpcChannelType'] = isset($data['vpcChannelType']) ? $data['vpcChannelType'] : null;
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
            if (!is_null($this->container['dictCode']) && (mb_strlen($this->container['dictCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictCode']) && (mb_strlen($this->container['dictCode']) < 3)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['dictCode']) && !preg_match("/([a-zA-Z0-9._-]){2,63}$/", $this->container['dictCode'])) {
                $invalidProperties[] = "invalid value for 'dictCode', must be conform to the pattern /([a-zA-Z0-9._-]){2,63}$/.";
            }
            if (!is_null($this->container['memberPort']) && ($this->container['memberPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'memberPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['memberPort']) && ($this->container['memberPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'memberPort', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVpcChannelTypeAllowableValues();
                if (!is_null($this->container['vpcChannelType']) && !in_array($this->container['vpcChannelType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vpcChannelType', must be one of '%s'",
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
    * Gets name
    *  VPC通道的名称
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
    * @param string|null $name VPC通道的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets preciseSearch
    *  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  目前支持name，member_group_name。
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
    * @param string|null $preciseSearch 指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  目前支持name，member_group_name。
    *
    * @return $this
    */
    public function setPreciseSearch($preciseSearch)
    {
        $this->container['preciseSearch'] = $preciseSearch;
        return $this;
    }

    /**
    * Gets memberHost
    *  后端服务地址。默认精确查询，不支持模糊查询。
    *
    * @return string|null
    */
    public function getMemberHost()
    {
        return $this->container['memberHost'];
    }

    /**
    * Sets memberHost
    *
    * @param string|null $memberHost 后端服务地址。默认精确查询，不支持模糊查询。
    *
    * @return $this
    */
    public function setMemberHost($memberHost)
    {
        $this->container['memberHost'] = $memberHost;
        return $this;
    }

    /**
    * Gets memberPort
    *  后端服务器端口
    *
    * @return int|null
    */
    public function getMemberPort()
    {
        return $this->container['memberPort'];
    }

    /**
    * Sets memberPort
    *
    * @param int|null $memberPort 后端服务器端口
    *
    * @return $this
    */
    public function setMemberPort($memberPort)
    {
        $this->container['memberPort'] = $memberPort;
        return $this;
    }

    /**
    * Gets memberGroupName
    *  后端服务器组名称
    *
    * @return string|null
    */
    public function getMemberGroupName()
    {
        return $this->container['memberGroupName'];
    }

    /**
    * Sets memberGroupName
    *
    * @param string|null $memberGroupName 后端服务器组名称
    *
    * @return $this
    */
    public function setMemberGroupName($memberGroupName)
    {
        $this->container['memberGroupName'] = $memberGroupName;
        return $this;
    }

    /**
    * Gets memberGroupId
    *  后端服务器组编号
    *
    * @return string|null
    */
    public function getMemberGroupId()
    {
        return $this->container['memberGroupId'];
    }

    /**
    * Sets memberGroupId
    *
    * @param string|null $memberGroupId 后端服务器组编号
    *
    * @return $this
    */
    public function setMemberGroupId($memberGroupId)
    {
        $this->container['memberGroupId'] = $memberGroupId;
        return $this;
    }

    /**
    * Gets vpcChannelType
    *  vpc通道类型： - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型
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
    * @param string|null $vpcChannelType vpc通道类型： - builtin：服务器类型 - microservice： 微服务类型 - reference：引用负载通道类型
    *
    * @return $this
    */
    public function setVpcChannelType($vpcChannelType)
    {
        $this->container['vpcChannelType'] = $vpcChannelType;
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

