<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleAclListResponseDTOData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleAclListResponseDTO_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 查询规则列表总条数 **取值范围**： 大于0
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得  **取值范围**：  32位UUID
    * upRulesCount  **参数解释**： 顶部规则数量 **取值范围**： 不涉及
    * records  **参数解释**： 查询规则列表记录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'total' => 'int',
            'objectId' => 'string',
            'upRulesCount' => 'int',
            'records' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleAclListResponseDTODataRecords[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 查询规则列表总条数 **取值范围**： 大于0
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得  **取值范围**：  32位UUID
    * upRulesCount  **参数解释**： 顶部规则数量 **取值范围**： 不涉及
    * records  **参数解释**： 查询规则列表记录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'total' => null,
        'objectId' => null,
        'upRulesCount' => 'int32',
        'records' => null
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
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 查询规则列表总条数 **取值范围**： 大于0
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得  **取值范围**：  32位UUID
    * upRulesCount  **参数解释**： 顶部规则数量 **取值范围**： 不涉及
    * records  **参数解释**： 查询规则列表记录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'total' => 'total',
            'objectId' => 'object_id',
            'upRulesCount' => 'up_rules_count',
            'records' => 'records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 查询规则列表总条数 **取值范围**： 大于0
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得  **取值范围**：  32位UUID
    * upRulesCount  **参数解释**： 顶部规则数量 **取值范围**： 不涉及
    * records  **参数解释**： 查询规则列表记录
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'total' => 'setTotal',
            'objectId' => 'setObjectId',
            'upRulesCount' => 'setUpRulesCount',
            'records' => 'setRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
    * limit  **参数解释**： 每页显示个数 **取值范围**： 1-1024
    * total  **参数解释**： 查询规则列表总条数 **取值范围**： 大于0
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得  **取值范围**：  32位UUID
    * upRulesCount  **参数解释**： 顶部规则数量 **取值范围**： 不涉及
    * records  **参数解释**： 查询规则列表记录
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'total' => 'getTotal',
            'objectId' => 'getObjectId',
            'upRulesCount' => 'getUpRulesCount',
            'records' => 'getRecords'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['upRulesCount'] = isset($data['upRulesCount']) ? $data['upRulesCount'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
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
    * Gets offset
    *  **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
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
    * @param int|null $offset **参数解释**： 偏移量：指定返回记录的开始位置 **取值范围**： 大于或等于0
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
    *  **参数解释**： 每页显示个数 **取值范围**： 1-1024
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
    * @param int|null $limit **参数解释**： 每页显示个数 **取值范围**： 1-1024
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 查询规则列表总条数 **取值范围**： 大于0
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 查询规则列表总条数 **取值范围**： 大于0
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets objectId
    *  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得  **取值范围**：  32位UUID
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得  **取值范围**：  32位UUID
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets upRulesCount
    *  **参数解释**： 顶部规则数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getUpRulesCount()
    {
        return $this->container['upRulesCount'];
    }

    /**
    * Sets upRulesCount
    *
    * @param int|null $upRulesCount **参数解释**： 顶部规则数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUpRulesCount($upRulesCount)
    {
        $this->container['upRulesCount'] = $upRulesCount;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释**： 查询规则列表记录
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleAclListResponseDTODataRecords[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleAclListResponseDTODataRecords[]|null $records **参数解释**： 查询规则列表记录
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
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

