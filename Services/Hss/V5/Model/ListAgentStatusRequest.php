<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAgentStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAgentStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentId  **参数解释**: Agent的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * abnormalReason  **参数解释**: 异常原因 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'agentId' => 'string',
            'agentStatus' => 'string',
            'abnormalReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentId  **参数解释**: Agent的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * abnormalReason  **参数解释**: 异常原因 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'agentId' => null,
        'agentStatus' => null,
        'abnormalReason' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentId  **参数解释**: Agent的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * abnormalReason  **参数解释**: 异常原因 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'agentId' => 'agent_id',
            'agentStatus' => 'agent_status',
            'abnormalReason' => 'abnormal_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentId  **参数解释**: Agent的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * abnormalReason  **参数解释**: 异常原因 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'agentId' => 'setAgentId',
            'agentStatus' => 'setAgentStatus',
            'abnormalReason' => 'setAbnormalReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentId  **参数解释**: Agent的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * abnormalReason  **参数解释**: 异常原因 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'agentId' => 'getAgentId',
            'agentStatus' => 'getAgentStatus',
            'abnormalReason' => 'getAbnormalReason'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['abnormalReason'] = isset($data['abnormalReason']) ? $data['abnormalReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['agentId'] === null) {
            $invalidProperties[] = "'agentId' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['abnormalReason']) && (mb_strlen($this->container['abnormalReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'abnormalReason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['abnormalReason']) && (mb_strlen($this->container['abnormalReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalReason', the character length must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
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
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: Agent的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string $agentId **参数解释**: Agent的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets abnormalReason
    *  **参数解释**: 异常原因 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAbnormalReason()
    {
        return $this->container['abnormalReason'];
    }

    /**
    * Sets abnormalReason
    *
    * @param string|null $abnormalReason **参数解释**: 异常原因 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAbnormalReason($abnormalReason)
    {
        $this->container['abnormalReason'] = $abnormalReason;
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

