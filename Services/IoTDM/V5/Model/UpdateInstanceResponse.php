<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - MODIFYING：实例正在变更规格 - FAILED：实例创建失败
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：由中文，字母，数字，句号，逗号，下划线（“_”），中划线（“-”），空格组成，且长度为[1-256]个字符。
    * accessInfos  **参数说明**：设备接入实例的接入信息
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z
    * enterpriseProjectId  **参数说明**：企业项目Id。
    * tags  **参数说明**: 设备接入实例的标签信息。如果实例有标签，则会有该字段，否则该字段为空。
    * orderId  **参数说明**：订单号，仅包年包月实例返回该参数。[查看订单详情请参考[[查询订单详情](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0075746564.html)。]](tag:hws)
    * operateWindow  operateWindow
    * additionalParams  additionalParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceType' => 'string',
            'instanceId' => 'string',
            'chargeMode' => 'string',
            'name' => 'string',
            'flavor' => '\HuaweiCloud\SDK\IoTDM\V5\Model\Flavor',
            'status' => 'string',
            'description' => 'string',
            'accessInfos' => '\HuaweiCloud\SDK\IoTDM\V5\Model\AccessInfo[]',
            'createTime' => 'string',
            'updateTime' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\IoTDM\V5\Model\Tag[]',
            'orderId' => 'string',
            'operateWindow' => '\HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow',
            'additionalParams' => '\HuaweiCloud\SDK\IoTDM\V5\Model\AdditionalParamsResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - MODIFYING：实例正在变更规格 - FAILED：实例创建失败
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：由中文，字母，数字，句号，逗号，下划线（“_”），中划线（“-”），空格组成，且长度为[1-256]个字符。
    * accessInfos  **参数说明**：设备接入实例的接入信息
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z
    * enterpriseProjectId  **参数说明**：企业项目Id。
    * tags  **参数说明**: 设备接入实例的标签信息。如果实例有标签，则会有该字段，否则该字段为空。
    * orderId  **参数说明**：订单号，仅包年包月实例返回该参数。[查看订单详情请参考[[查询订单详情](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0075746564.html)。]](tag:hws)
    * operateWindow  operateWindow
    * additionalParams  additionalParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceType' => null,
        'instanceId' => null,
        'chargeMode' => null,
        'name' => null,
        'flavor' => null,
        'status' => null,
        'description' => null,
        'accessInfos' => null,
        'createTime' => null,
        'updateTime' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'orderId' => null,
        'operateWindow' => null,
        'additionalParams' => null
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
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - MODIFYING：实例正在变更规格 - FAILED：实例创建失败
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：由中文，字母，数字，句号，逗号，下划线（“_”），中划线（“-”），空格组成，且长度为[1-256]个字符。
    * accessInfos  **参数说明**：设备接入实例的接入信息
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z
    * enterpriseProjectId  **参数说明**：企业项目Id。
    * tags  **参数说明**: 设备接入实例的标签信息。如果实例有标签，则会有该字段，否则该字段为空。
    * orderId  **参数说明**：订单号，仅包年包月实例返回该参数。[查看订单详情请参考[[查询订单详情](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0075746564.html)。]](tag:hws)
    * operateWindow  operateWindow
    * additionalParams  additionalParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceType' => 'instance_type',
            'instanceId' => 'instance_id',
            'chargeMode' => 'charge_mode',
            'name' => 'name',
            'flavor' => 'flavor',
            'status' => 'status',
            'description' => 'description',
            'accessInfos' => 'access_infos',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'orderId' => 'order_id',
            'operateWindow' => 'operate_window',
            'additionalParams' => 'additional_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - MODIFYING：实例正在变更规格 - FAILED：实例创建失败
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：由中文，字母，数字，句号，逗号，下划线（“_”），中划线（“-”），空格组成，且长度为[1-256]个字符。
    * accessInfos  **参数说明**：设备接入实例的接入信息
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z
    * enterpriseProjectId  **参数说明**：企业项目Id。
    * tags  **参数说明**: 设备接入实例的标签信息。如果实例有标签，则会有该字段，否则该字段为空。
    * orderId  **参数说明**：订单号，仅包年包月实例返回该参数。[查看订单详情请参考[[查询订单详情](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0075746564.html)。]](tag:hws)
    * operateWindow  operateWindow
    * additionalParams  additionalParams
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceType' => 'setInstanceType',
            'instanceId' => 'setInstanceId',
            'chargeMode' => 'setChargeMode',
            'name' => 'setName',
            'flavor' => 'setFlavor',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'accessInfos' => 'setAccessInfos',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'orderId' => 'setOrderId',
            'operateWindow' => 'setOperateWindow',
            'additionalParams' => 'setAdditionalParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceType  **参数说明**：实例类型。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * instanceId  **参数说明**：实例ID。 **取值范围**：长度不超过36，由小写字母[a-f]、数字、连接符（-）的组成。
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * name  **参数说明**：实例名称 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * flavor  flavor
    * status  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - MODIFYING：实例正在变更规格 - FAILED：实例创建失败
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：由中文，字母，数字，句号，逗号，下划线（“_”），中划线（“-”），空格组成，且长度为[1-256]个字符。
    * accessInfos  **参数说明**：设备接入实例的接入信息
    * createTime  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z
    * updateTime  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z
    * enterpriseProjectId  **参数说明**：企业项目Id。
    * tags  **参数说明**: 设备接入实例的标签信息。如果实例有标签，则会有该字段，否则该字段为空。
    * orderId  **参数说明**：订单号，仅包年包月实例返回该参数。[查看订单详情请参考[[查询订单详情](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0075746564.html)。]](tag:hws)
    * operateWindow  operateWindow
    * additionalParams  additionalParams
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceType' => 'getInstanceType',
            'instanceId' => 'getInstanceId',
            'chargeMode' => 'getChargeMode',
            'name' => 'getName',
            'flavor' => 'getFlavor',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'accessInfos' => 'getAccessInfos',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'orderId' => 'getOrderId',
            'operateWindow' => 'getOperateWindow',
            'additionalParams' => 'getAdditionalParams'
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['accessInfos'] = isset($data['accessInfos']) ? $data['accessInfos'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['operateWindow'] = isset($data['operateWindow']) ? $data['operateWindow'] : null;
        $this->container['additionalParams'] = isset($data['additionalParams']) ? $data['additionalParams'] : null;
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
            if (!is_null($this->container['chargeMode']) && !preg_match("/prePaid|postPaid/", $this->container['chargeMode'])) {
                $invalidProperties[] = "invalid value for 'chargeMode', must be conform to the pattern /prePaid|postPaid/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
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
    *  **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - MODIFYING：实例正在变更规格 - FAILED：实例创建失败
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
    * @param string|null $status **参数说明**：实例状态。 **取值范围**： - CREATING：实例正在创建 - ACTIVE：实例正常 - FROZEN：实例冻结 - MODIFYING：实例正在变更规格 - FAILED：实例创建失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：设备接入实例的描述信息。 **取值范围**：由中文，字母，数字，句号，逗号，下划线（“_”），中划线（“-”），空格组成，且长度为[1-256]个字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数说明**：设备接入实例的描述信息。 **取值范围**：由中文，字母，数字，句号，逗号，下划线（“_”），中划线（“-”），空格组成，且长度为[1-256]个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets accessInfos
    *  **参数说明**：设备接入实例的接入信息
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\AccessInfo[]|null
    */
    public function getAccessInfos()
    {
        return $this->container['accessInfos'];
    }

    /**
    * Sets accessInfos
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\AccessInfo[]|null $accessInfos **参数说明**：设备接入实例的接入信息
    *
    * @return $this
    */
    public function setAccessInfos($accessInfos)
    {
        $this->container['accessInfos'] = $accessInfos;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z
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
    * @param string|null $createTime **参数说明**：实例的创建时间。时间格式例如：2023-01-28T06:57:52Z
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
    *  **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z
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
    * @param string|null $updateTime **参数说明**：实例的最近一次更新的时间。时间格式例如：2023-01-28T06:57:52Z
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
    * Gets tags
    *  **参数说明**: 设备接入实例的标签信息。如果实例有标签，则会有该字段，否则该字段为空。
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\Tag[]|null $tags **参数说明**: 设备接入实例的标签信息。如果实例有标签，则会有该字段，否则该字段为空。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets orderId
    *  **参数说明**：订单号，仅包年包月实例返回该参数。[查看订单详情请参考[[查询订单详情](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0075746564.html)。]](tag:hws)
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
    * @param string|null $orderId **参数说明**：订单号，仅包年包月实例返回该参数。[查看订单详情请参考[[查询订单详情](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0075746564.html)。]](tag:hws)
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets operateWindow
    *  operateWindow
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow|null
    */
    public function getOperateWindow()
    {
        return $this->container['operateWindow'];
    }

    /**
    * Sets operateWindow
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow|null $operateWindow operateWindow
    *
    * @return $this
    */
    public function setOperateWindow($operateWindow)
    {
        $this->container['operateWindow'] = $operateWindow;
        return $this;
    }

    /**
    * Gets additionalParams
    *  additionalParams
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\AdditionalParamsResp|null
    */
    public function getAdditionalParams()
    {
        return $this->container['additionalParams'];
    }

    /**
    * Sets additionalParams
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\AdditionalParamsResp|null $additionalParams additionalParams
    *
    * @return $this
    */
    public function setAdditionalParams($additionalParams)
    {
        $this->container['additionalParams'] = $additionalParams;
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

