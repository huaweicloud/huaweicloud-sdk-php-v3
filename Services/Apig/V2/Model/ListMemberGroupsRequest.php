<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMemberGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMemberGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * vpcChannelId  VPC通道的编号
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * dictCode  字典编码。  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroupName  VPC通道后端云服务组的名称
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  当前支持member_group_name。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'vpcChannelId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'dictCode' => 'string',
            'memberGroupName' => 'string',
            'preciseSearch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * vpcChannelId  VPC通道的编号
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * dictCode  字典编码。  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroupName  VPC通道后端云服务组的名称
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  当前支持member_group_name。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'vpcChannelId' => null,
        'offset' => 'int64',
        'limit' => 'int32',
        'dictCode' => null,
        'memberGroupName' => null,
        'preciseSearch' => null
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
    * vpcChannelId  VPC通道的编号
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * dictCode  字典编码。  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroupName  VPC通道后端云服务组的名称
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  当前支持member_group_name。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'vpcChannelId' => 'vpc_channel_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'dictCode' => 'dict_code',
            'memberGroupName' => 'member_group_name',
            'preciseSearch' => 'precise_search'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * vpcChannelId  VPC通道的编号
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * dictCode  字典编码。  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroupName  VPC通道后端云服务组的名称
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  当前支持member_group_name。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'vpcChannelId' => 'setVpcChannelId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'dictCode' => 'setDictCode',
            'memberGroupName' => 'setMemberGroupName',
            'preciseSearch' => 'setPreciseSearch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * vpcChannelId  VPC通道的编号
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * dictCode  字典编码。  支持英文，数字，特殊字符（-_.）  暂不支持
    * memberGroupName  VPC通道后端云服务组的名称
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  当前支持member_group_name。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'vpcChannelId' => 'getVpcChannelId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'dictCode' => 'getDictCode',
            'memberGroupName' => 'getMemberGroupName',
            'preciseSearch' => 'getPreciseSearch'
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
        $this->container['vpcChannelId'] = isset($data['vpcChannelId']) ? $data['vpcChannelId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['dictCode'] = isset($data['dictCode']) ? $data['dictCode'] : null;
        $this->container['memberGroupName'] = isset($data['memberGroupName']) ? $data['memberGroupName'] : null;
        $this->container['preciseSearch'] = isset($data['preciseSearch']) ? $data['preciseSearch'] : null;
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
        if ($this->container['vpcChannelId'] === null) {
            $invalidProperties[] = "'vpcChannelId' can't be null";
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
    * Gets vpcChannelId
    *  VPC通道的编号
    *
    * @return string
    */
    public function getVpcChannelId()
    {
        return $this->container['vpcChannelId'];
    }

    /**
    * Sets vpcChannelId
    *
    * @param string $vpcChannelId VPC通道的编号
    *
    * @return $this
    */
    public function setVpcChannelId($vpcChannelId)
    {
        $this->container['vpcChannelId'] = $vpcChannelId;
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
    * Gets dictCode
    *  字典编码。  支持英文，数字，特殊字符（-_.）  暂不支持
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
    * @param string|null $dictCode 字典编码。  支持英文，数字，特殊字符（-_.）  暂不支持
    *
    * @return $this
    */
    public function setDictCode($dictCode)
    {
        $this->container['dictCode'] = $dictCode;
        return $this;
    }

    /**
    * Gets memberGroupName
    *  VPC通道后端云服务组的名称
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
    * @param string|null $memberGroupName VPC通道后端云服务组的名称
    *
    * @return $this
    */
    public function setMemberGroupName($memberGroupName)
    {
        $this->container['memberGroupName'] = $memberGroupName;
        return $this;
    }

    /**
    * Gets preciseSearch
    *  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  当前支持member_group_name。
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
    * @param string|null $preciseSearch 指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。  当前支持member_group_name。
    *
    * @return $this
    */
    public function setPreciseSearch($preciseSearch)
    {
        $this->container['preciseSearch'] = $preciseSearch;
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

