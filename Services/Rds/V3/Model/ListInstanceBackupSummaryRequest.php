<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceBackupSummaryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceBackupSummaryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  **参数解释**：  引擎类型。只支持筛选RDS for MySQL,RDS for MariaDB, TaurusDB标准版引擎  **约束限制**：  不涉及。  **取值范围**：  - mysql - mariadb - taurusdb  **默认取值**：  不涉及。
    * orderField  **参数解释**：  排序字段。 根据指定字段排序查询结果。  **约束限制**：  不涉及。  **取值范围**： - backup_used_space:根据备份数据总量排序 - obs ：根据日志备份用量排序  **默认取值**：  不涉及。
    * orderRule  **参数解释**：  排序规则。  **约束限制**：  不涉及。  **取值范围**：  - ASC ： 根据排序字段升序 - DESC ：根据排序字段降序  **默认取值**：  DESC
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为数字，不能为负数。  **取值范围**：  大于等于0的整数。  **默认取值**：  0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  不涉及。  **取值范围**：  默认为10，不能为负数，最小值为1，最大值为50。  **默认取值**：  10。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'orderField' => 'string',
            'orderRule' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  **参数解释**：  引擎类型。只支持筛选RDS for MySQL,RDS for MariaDB, TaurusDB标准版引擎  **约束限制**：  不涉及。  **取值范围**：  - mysql - mariadb - taurusdb  **默认取值**：  不涉及。
    * orderField  **参数解释**：  排序字段。 根据指定字段排序查询结果。  **约束限制**：  不涉及。  **取值范围**： - backup_used_space:根据备份数据总量排序 - obs ：根据日志备份用量排序  **默认取值**：  不涉及。
    * orderRule  **参数解释**：  排序规则。  **约束限制**：  不涉及。  **取值范围**：  - ASC ： 根据排序字段升序 - DESC ：根据排序字段降序  **默认取值**：  DESC
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为数字，不能为负数。  **取值范围**：  大于等于0的整数。  **默认取值**：  0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  不涉及。  **取值范围**：  默认为10，不能为负数，最小值为1，最大值为50。  **默认取值**：  10。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'orderField' => null,
        'orderRule' => null,
        'instanceId' => null,
        'instanceName' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'xLanguage' => null
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
    * engine  **参数解释**：  引擎类型。只支持筛选RDS for MySQL,RDS for MariaDB, TaurusDB标准版引擎  **约束限制**：  不涉及。  **取值范围**：  - mysql - mariadb - taurusdb  **默认取值**：  不涉及。
    * orderField  **参数解释**：  排序字段。 根据指定字段排序查询结果。  **约束限制**：  不涉及。  **取值范围**： - backup_used_space:根据备份数据总量排序 - obs ：根据日志备份用量排序  **默认取值**：  不涉及。
    * orderRule  **参数解释**：  排序规则。  **约束限制**：  不涉及。  **取值范围**：  - ASC ： 根据排序字段升序 - DESC ：根据排序字段降序  **默认取值**：  DESC
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为数字，不能为负数。  **取值范围**：  大于等于0的整数。  **默认取值**：  0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  不涉及。  **取值范围**：  默认为10，不能为负数，最小值为1，最大值为50。  **默认取值**：  10。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'orderField' => 'order_field',
            'orderRule' => 'order_rule',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'offset' => 'offset',
            'limit' => 'limit',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  **参数解释**：  引擎类型。只支持筛选RDS for MySQL,RDS for MariaDB, TaurusDB标准版引擎  **约束限制**：  不涉及。  **取值范围**：  - mysql - mariadb - taurusdb  **默认取值**：  不涉及。
    * orderField  **参数解释**：  排序字段。 根据指定字段排序查询结果。  **约束限制**：  不涉及。  **取值范围**： - backup_used_space:根据备份数据总量排序 - obs ：根据日志备份用量排序  **默认取值**：  不涉及。
    * orderRule  **参数解释**：  排序规则。  **约束限制**：  不涉及。  **取值范围**：  - ASC ： 根据排序字段升序 - DESC ：根据排序字段降序  **默认取值**：  DESC
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为数字，不能为负数。  **取值范围**：  大于等于0的整数。  **默认取值**：  0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  不涉及。  **取值范围**：  默认为10，不能为负数，最小值为1，最大值为50。  **默认取值**：  10。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'orderField' => 'setOrderField',
            'orderRule' => 'setOrderRule',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  **参数解释**：  引擎类型。只支持筛选RDS for MySQL,RDS for MariaDB, TaurusDB标准版引擎  **约束限制**：  不涉及。  **取值范围**：  - mysql - mariadb - taurusdb  **默认取值**：  不涉及。
    * orderField  **参数解释**：  排序字段。 根据指定字段排序查询结果。  **约束限制**：  不涉及。  **取值范围**： - backup_used_space:根据备份数据总量排序 - obs ：根据日志备份用量排序  **默认取值**：  不涉及。
    * orderRule  **参数解释**：  排序规则。  **约束限制**：  不涉及。  **取值范围**：  - ASC ： 根据排序字段升序 - DESC ：根据排序字段降序  **默认取值**：  DESC
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为数字，不能为负数。  **取值范围**：  大于等于0的整数。  **默认取值**：  0。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  不涉及。  **取值范围**：  默认为10，不能为负数，最小值为1，最大值为50。  **默认取值**：  10。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'orderField' => 'getOrderField',
            'orderRule' => 'getOrderRule',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'xLanguage' => 'getXLanguage'
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['orderField'] = isset($data['orderField']) ? $data['orderField'] : null;
        $this->container['orderRule'] = isset($data['orderRule']) ? $data['orderRule'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 36)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 1.";
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
    * Gets engine
    *  **参数解释**：  引擎类型。只支持筛选RDS for MySQL,RDS for MariaDB, TaurusDB标准版引擎  **约束限制**：  不涉及。  **取值范围**：  - mysql - mariadb - taurusdb  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine **参数解释**：  引擎类型。只支持筛选RDS for MySQL,RDS for MariaDB, TaurusDB标准版引擎  **约束限制**：  不涉及。  **取值范围**：  - mysql - mariadb - taurusdb  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets orderField
    *  **参数解释**：  排序字段。 根据指定字段排序查询结果。  **约束限制**：  不涉及。  **取值范围**： - backup_used_space:根据备份数据总量排序 - obs ：根据日志备份用量排序  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getOrderField()
    {
        return $this->container['orderField'];
    }

    /**
    * Sets orderField
    *
    * @param string|null $orderField **参数解释**：  排序字段。 根据指定字段排序查询结果。  **约束限制**：  不涉及。  **取值范围**： - backup_used_space:根据备份数据总量排序 - obs ：根据日志备份用量排序  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setOrderField($orderField)
    {
        $this->container['orderField'] = $orderField;
        return $this;
    }

    /**
    * Gets orderRule
    *  **参数解释**：  排序规则。  **约束限制**：  不涉及。  **取值范围**：  - ASC ： 根据排序字段升序 - DESC ：根据排序字段降序  **默认取值**：  DESC
    *
    * @return string|null
    */
    public function getOrderRule()
    {
        return $this->container['orderRule'];
    }

    /**
    * Sets orderRule
    *
    * @param string|null $orderRule **参数解释**：  排序规则。  **约束限制**：  不涉及。  **取值范围**：  - ASC ： 根据排序字段升序 - DESC ：根据排序字段降序  **默认取值**：  DESC
    *
    * @return $this
    */
    public function setOrderRule($orderRule)
    {
        $this->container['orderRule'] = $orderRule;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $instanceId **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**：  实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**：  实例名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为数字，不能为负数。  **取值范围**：  大于等于0的整数。  **默认取值**：  0。
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
    * @param int|null $offset **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。  **约束限制**：  必须为数字，不能为负数。  **取值范围**：  大于等于0的整数。  **默认取值**：  0。
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
    *  **参数解释**：  查询记录数。  **约束限制**：  不涉及。  **取值范围**：  默认为10，不能为负数，最小值为1，最大值为50。  **默认取值**：  10。
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
    * @param int|null $limit **参数解释**：  查询记录数。  **约束限制**：  不涉及。  **取值范围**：  默认为10，不能为负数，最小值为1，最大值为50。  **默认取值**：  10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets xLanguage
    *  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

