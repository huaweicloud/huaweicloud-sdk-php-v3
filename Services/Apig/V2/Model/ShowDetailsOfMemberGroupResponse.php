<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailsOfMemberGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailsOfMemberGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * memberGroupName  VPC通道后端服务器组名称。支持汉字、英文、数字、下划线、中划线、点，且只能以英文和汉字开头，3-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * memberGroupRemark  VPC通道后端服务器组描述。
    * memberGroupWeight  VPC通道后端服务器组权重值。  当前服务器组存在服务器且此权重值存在时，自动使用此权重值分配权重。
    * dictCode  VPC通道后端服务器组的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * microserviceVersion  VPC通道后端服务器组的版本，仅VPC通道类型为微服务时支持。
    * microservicePort  VPC通道后端服务器组的端口号，仅VPC通道类型为微服务时支持。端口号为0时后端服务器组下的所有地址沿用原来负载端口继承逻辑。
    * microserviceLabels  VPC通道后端服务器组的标签，仅VPC通道类型为微服务时支持。
    * memberGroupId  VPC通道后端服务器组编号
    * createTime  VPC通道后端服务器组创建时间
    * updateTime  VPC通道后端服务器组更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'memberGroupName' => 'string',
            'memberGroupRemark' => 'string',
            'memberGroupWeight' => 'int',
            'dictCode' => 'string',
            'microserviceVersion' => 'string',
            'microservicePort' => 'int',
            'microserviceLabels' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroserviceLabel[]',
            'memberGroupId' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * memberGroupName  VPC通道后端服务器组名称。支持汉字、英文、数字、下划线、中划线、点，且只能以英文和汉字开头，3-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * memberGroupRemark  VPC通道后端服务器组描述。
    * memberGroupWeight  VPC通道后端服务器组权重值。  当前服务器组存在服务器且此权重值存在时，自动使用此权重值分配权重。
    * dictCode  VPC通道后端服务器组的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * microserviceVersion  VPC通道后端服务器组的版本，仅VPC通道类型为微服务时支持。
    * microservicePort  VPC通道后端服务器组的端口号，仅VPC通道类型为微服务时支持。端口号为0时后端服务器组下的所有地址沿用原来负载端口继承逻辑。
    * microserviceLabels  VPC通道后端服务器组的标签，仅VPC通道类型为微服务时支持。
    * memberGroupId  VPC通道后端服务器组编号
    * createTime  VPC通道后端服务器组创建时间
    * updateTime  VPC通道后端服务器组更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'memberGroupName' => null,
        'memberGroupRemark' => null,
        'memberGroupWeight' => 'int32',
        'dictCode' => null,
        'microserviceVersion' => null,
        'microservicePort' => 'int32',
        'microserviceLabels' => null,
        'memberGroupId' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * memberGroupName  VPC通道后端服务器组名称。支持汉字、英文、数字、下划线、中划线、点，且只能以英文和汉字开头，3-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * memberGroupRemark  VPC通道后端服务器组描述。
    * memberGroupWeight  VPC通道后端服务器组权重值。  当前服务器组存在服务器且此权重值存在时，自动使用此权重值分配权重。
    * dictCode  VPC通道后端服务器组的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * microserviceVersion  VPC通道后端服务器组的版本，仅VPC通道类型为微服务时支持。
    * microservicePort  VPC通道后端服务器组的端口号，仅VPC通道类型为微服务时支持。端口号为0时后端服务器组下的所有地址沿用原来负载端口继承逻辑。
    * microserviceLabels  VPC通道后端服务器组的标签，仅VPC通道类型为微服务时支持。
    * memberGroupId  VPC通道后端服务器组编号
    * createTime  VPC通道后端服务器组创建时间
    * updateTime  VPC通道后端服务器组更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'memberGroupName' => 'member_group_name',
            'memberGroupRemark' => 'member_group_remark',
            'memberGroupWeight' => 'member_group_weight',
            'dictCode' => 'dict_code',
            'microserviceVersion' => 'microservice_version',
            'microservicePort' => 'microservice_port',
            'microserviceLabels' => 'microservice_labels',
            'memberGroupId' => 'member_group_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * memberGroupName  VPC通道后端服务器组名称。支持汉字、英文、数字、下划线、中划线、点，且只能以英文和汉字开头，3-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * memberGroupRemark  VPC通道后端服务器组描述。
    * memberGroupWeight  VPC通道后端服务器组权重值。  当前服务器组存在服务器且此权重值存在时，自动使用此权重值分配权重。
    * dictCode  VPC通道后端服务器组的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * microserviceVersion  VPC通道后端服务器组的版本，仅VPC通道类型为微服务时支持。
    * microservicePort  VPC通道后端服务器组的端口号，仅VPC通道类型为微服务时支持。端口号为0时后端服务器组下的所有地址沿用原来负载端口继承逻辑。
    * microserviceLabels  VPC通道后端服务器组的标签，仅VPC通道类型为微服务时支持。
    * memberGroupId  VPC通道后端服务器组编号
    * createTime  VPC通道后端服务器组创建时间
    * updateTime  VPC通道后端服务器组更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'memberGroupName' => 'setMemberGroupName',
            'memberGroupRemark' => 'setMemberGroupRemark',
            'memberGroupWeight' => 'setMemberGroupWeight',
            'dictCode' => 'setDictCode',
            'microserviceVersion' => 'setMicroserviceVersion',
            'microservicePort' => 'setMicroservicePort',
            'microserviceLabels' => 'setMicroserviceLabels',
            'memberGroupId' => 'setMemberGroupId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * memberGroupName  VPC通道后端服务器组名称。支持汉字、英文、数字、下划线、中划线、点，且只能以英文和汉字开头，3-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * memberGroupRemark  VPC通道后端服务器组描述。
    * memberGroupWeight  VPC通道后端服务器组权重值。  当前服务器组存在服务器且此权重值存在时，自动使用此权重值分配权重。
    * dictCode  VPC通道后端服务器组的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    * microserviceVersion  VPC通道后端服务器组的版本，仅VPC通道类型为微服务时支持。
    * microservicePort  VPC通道后端服务器组的端口号，仅VPC通道类型为微服务时支持。端口号为0时后端服务器组下的所有地址沿用原来负载端口继承逻辑。
    * microserviceLabels  VPC通道后端服务器组的标签，仅VPC通道类型为微服务时支持。
    * memberGroupId  VPC通道后端服务器组编号
    * createTime  VPC通道后端服务器组创建时间
    * updateTime  VPC通道后端服务器组更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'memberGroupName' => 'getMemberGroupName',
            'memberGroupRemark' => 'getMemberGroupRemark',
            'memberGroupWeight' => 'getMemberGroupWeight',
            'dictCode' => 'getDictCode',
            'microserviceVersion' => 'getMicroserviceVersion',
            'microservicePort' => 'getMicroservicePort',
            'microserviceLabels' => 'getMicroserviceLabels',
            'memberGroupId' => 'getMemberGroupId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['memberGroupName'] = isset($data['memberGroupName']) ? $data['memberGroupName'] : null;
        $this->container['memberGroupRemark'] = isset($data['memberGroupRemark']) ? $data['memberGroupRemark'] : null;
        $this->container['memberGroupWeight'] = isset($data['memberGroupWeight']) ? $data['memberGroupWeight'] : null;
        $this->container['dictCode'] = isset($data['dictCode']) ? $data['dictCode'] : null;
        $this->container['microserviceVersion'] = isset($data['microserviceVersion']) ? $data['microserviceVersion'] : null;
        $this->container['microservicePort'] = isset($data['microservicePort']) ? $data['microservicePort'] : null;
        $this->container['microserviceLabels'] = isset($data['microserviceLabels']) ? $data['microserviceLabels'] : null;
        $this->container['memberGroupId'] = isset($data['memberGroupId']) ? $data['memberGroupId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['memberGroupName'] === null) {
            $invalidProperties[] = "'memberGroupName' can't be null";
        }
            if (!is_null($this->container['memberGroupRemark']) && (mb_strlen($this->container['memberGroupRemark']) > 255)) {
                $invalidProperties[] = "invalid value for 'memberGroupRemark', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['memberGroupWeight']) && ($this->container['memberGroupWeight'] > 100)) {
                $invalidProperties[] = "invalid value for 'memberGroupWeight', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['memberGroupWeight']) && ($this->container['memberGroupWeight'] < 0)) {
                $invalidProperties[] = "invalid value for 'memberGroupWeight', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['microserviceVersion']) && (mb_strlen($this->container['microserviceVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'microserviceVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['microservicePort']) && ($this->container['microservicePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'microservicePort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['microservicePort']) && ($this->container['microservicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'microservicePort', must be bigger than or equal to 0.";
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
    * Gets memberGroupName
    *  VPC通道后端服务器组名称。支持汉字、英文、数字、下划线、中划线、点，且只能以英文和汉字开头，3-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getMemberGroupName()
    {
        return $this->container['memberGroupName'];
    }

    /**
    * Sets memberGroupName
    *
    * @param string $memberGroupName VPC通道后端服务器组名称。支持汉字、英文、数字、下划线、中划线、点，且只能以英文和汉字开头，3-64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setMemberGroupName($memberGroupName)
    {
        $this->container['memberGroupName'] = $memberGroupName;
        return $this;
    }

    /**
    * Gets memberGroupRemark
    *  VPC通道后端服务器组描述。
    *
    * @return string|null
    */
    public function getMemberGroupRemark()
    {
        return $this->container['memberGroupRemark'];
    }

    /**
    * Sets memberGroupRemark
    *
    * @param string|null $memberGroupRemark VPC通道后端服务器组描述。
    *
    * @return $this
    */
    public function setMemberGroupRemark($memberGroupRemark)
    {
        $this->container['memberGroupRemark'] = $memberGroupRemark;
        return $this;
    }

    /**
    * Gets memberGroupWeight
    *  VPC通道后端服务器组权重值。  当前服务器组存在服务器且此权重值存在时，自动使用此权重值分配权重。
    *
    * @return int|null
    */
    public function getMemberGroupWeight()
    {
        return $this->container['memberGroupWeight'];
    }

    /**
    * Sets memberGroupWeight
    *
    * @param int|null $memberGroupWeight VPC通道后端服务器组权重值。  当前服务器组存在服务器且此权重值存在时，自动使用此权重值分配权重。
    *
    * @return $this
    */
    public function setMemberGroupWeight($memberGroupWeight)
    {
        $this->container['memberGroupWeight'] = $memberGroupWeight;
        return $this;
    }

    /**
    * Gets dictCode
    *  VPC通道后端服务器组的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
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
    * @param string|null $dictCode VPC通道后端服务器组的字典编码  支持英文，数字，特殊字符（-_.）  暂不支持
    *
    * @return $this
    */
    public function setDictCode($dictCode)
    {
        $this->container['dictCode'] = $dictCode;
        return $this;
    }

    /**
    * Gets microserviceVersion
    *  VPC通道后端服务器组的版本，仅VPC通道类型为微服务时支持。
    *
    * @return string|null
    */
    public function getMicroserviceVersion()
    {
        return $this->container['microserviceVersion'];
    }

    /**
    * Sets microserviceVersion
    *
    * @param string|null $microserviceVersion VPC通道后端服务器组的版本，仅VPC通道类型为微服务时支持。
    *
    * @return $this
    */
    public function setMicroserviceVersion($microserviceVersion)
    {
        $this->container['microserviceVersion'] = $microserviceVersion;
        return $this;
    }

    /**
    * Gets microservicePort
    *  VPC通道后端服务器组的端口号，仅VPC通道类型为微服务时支持。端口号为0时后端服务器组下的所有地址沿用原来负载端口继承逻辑。
    *
    * @return int|null
    */
    public function getMicroservicePort()
    {
        return $this->container['microservicePort'];
    }

    /**
    * Sets microservicePort
    *
    * @param int|null $microservicePort VPC通道后端服务器组的端口号，仅VPC通道类型为微服务时支持。端口号为0时后端服务器组下的所有地址沿用原来负载端口继承逻辑。
    *
    * @return $this
    */
    public function setMicroservicePort($microservicePort)
    {
        $this->container['microservicePort'] = $microservicePort;
        return $this;
    }

    /**
    * Gets microserviceLabels
    *  VPC通道后端服务器组的标签，仅VPC通道类型为微服务时支持。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroserviceLabel[]|null
    */
    public function getMicroserviceLabels()
    {
        return $this->container['microserviceLabels'];
    }

    /**
    * Sets microserviceLabels
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroserviceLabel[]|null $microserviceLabels VPC通道后端服务器组的标签，仅VPC通道类型为微服务时支持。
    *
    * @return $this
    */
    public function setMicroserviceLabels($microserviceLabels)
    {
        $this->container['microserviceLabels'] = $microserviceLabels;
        return $this;
    }

    /**
    * Gets memberGroupId
    *  VPC通道后端服务器组编号
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
    * @param string|null $memberGroupId VPC通道后端服务器组编号
    *
    * @return $this
    */
    public function setMemberGroupId($memberGroupId)
    {
        $this->container['memberGroupId'] = $memberGroupId;
        return $this;
    }

    /**
    * Gets createTime
    *  VPC通道后端服务器组创建时间
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
    * @param \DateTime|null $createTime VPC通道后端服务器组创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  VPC通道后端服务器组更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime VPC通道后端服务器组更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

