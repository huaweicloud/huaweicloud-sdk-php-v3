<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryInstanceSimplify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryInstanceSimplify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - TRADING: 实例正在进行交易 - MODIFYING：实例正在变更规格 - MODIFY_FAILED: 实例变更失败 - FAILED：实例创建失败
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z。
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z。
    * enterpriseProjectId  **参数说明**：企业项目Id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceType' => 'string',
            'instanceId' => 'string',
            'name' => 'string',
            'chargeMode' => 'string',
            'flavor' => '\HuaweiCloud\SDK\IoTDM\V5\Model\Flavor',
            'status' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - TRADING: 实例正在进行交易 - MODIFYING：实例正在变更规格 - MODIFY_FAILED: 实例变更失败 - FAILED：实例创建失败
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z。
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z。
    * enterpriseProjectId  **参数说明**：企业项目Id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceType' => null,
        'instanceId' => null,
        'name' => null,
        'chargeMode' => null,
        'flavor' => null,
        'status' => null,
        'createTime' => null,
        'updateTime' => null,
        'enterpriseProjectId' => null
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
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - TRADING: 实例正在进行交易 - MODIFYING：实例正在变更规格 - MODIFY_FAILED: 实例变更失败 - FAILED：实例创建失败
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z。
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z。
    * enterpriseProjectId  **参数说明**：企业项目Id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceType' => 'instance_type',
            'instanceId' => 'instance_id',
            'name' => 'name',
            'chargeMode' => 'charge_mode',
            'flavor' => 'flavor',
            'status' => 'status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - TRADING: 实例正在进行交易 - MODIFYING：实例正在变更规格 - MODIFY_FAILED: 实例变更失败 - FAILED：实例创建失败
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z。
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z。
    * enterpriseProjectId  **参数说明**：企业项目Id。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceType' => 'setInstanceType',
            'instanceId' => 'setInstanceId',
            'name' => 'setName',
            'chargeMode' => 'setChargeMode',
            'flavor' => 'setFlavor',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - TRADING: 实例正在进行交易 - MODIFYING：实例正在变更规格 - MODIFY_FAILED: 实例变更失败 - FAILED：实例创建失败
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z。
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z。
    * enterpriseProjectId  **参数说明**：企业项目Id。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceType' => 'getInstanceType',
            'instanceId' => 'getInstanceId',
            'name' => 'getName',
            'chargeMode' => 'getChargeMode',
            'flavor' => 'getFlavor',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceType']) && !preg_match("/(standard|basic|enterprise|valueaddedservice)/", $this->container['instanceType'])) {
                $invalidProperties[] = "invalid value for 'instanceType', must be conform to the pattern /(standard|basic|enterprise|valueaddedservice)/.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-f-]{1,36}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-f-]{1,36}/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/.";
            }
            if (!is_null($this->container['chargeMode']) && !preg_match("/prePaid|postPaid/", $this->container['chargeMode'])) {
                $invalidProperties[] = "invalid value for 'chargeMode', must be conform to the pattern /prePaid|postPaid/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[0-9a-f-]{1,36}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[0-9a-f-]{1,36}/.";
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
    * Gets instanceType
    *  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
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
    * @param string|null $instanceId **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets name
    *  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
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
    * @param string|null $name **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets chargeMode
    *  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\Flavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\Flavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets status
    *  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - TRADING: 实例正在进行交易 - MODIFYING：实例正在变更规格 - MODIFY_FAILED: 实例变更失败 - FAILED：实例创建失败
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
    * @param string|null $status **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - TRADING: 实例正在进行交易 - MODIFYING：实例正在变更规格 - MODIFY_FAILED: 实例变更失败 - FAILED：实例创建失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z。
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
    *  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数说明**：企业项目Id。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数说明**：企业项目Id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

