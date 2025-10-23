<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuerySqlPlanStateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuerySqlPlanStateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlId  **参数解释**: 归一化的SQL ID **约束限制**: 不涉及。
    * pageSize  **参数解释**: SQL执行计划每页显示数量。 **约束限制**: 不涉及。 **取值范围**: 整数，1~100。 **默认取值**: 不涉及。
    * offset  **参数解释**: SQL执行计划起始页码。 **约束限制**: 不涉及。 **取值范围**: 大于等于0的整数。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlId' => 'string',
            'pageSize' => 'string',
            'offset' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlId  **参数解释**: 归一化的SQL ID **约束限制**: 不涉及。
    * pageSize  **参数解释**: SQL执行计划每页显示数量。 **约束限制**: 不涉及。 **取值范围**: 整数，1~100。 **默认取值**: 不涉及。
    * offset  **参数解释**: SQL执行计划起始页码。 **约束限制**: 不涉及。 **取值范围**: 大于等于0的整数。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlId' => null,
        'pageSize' => null,
        'offset' => null
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
    * sqlId  **参数解释**: 归一化的SQL ID **约束限制**: 不涉及。
    * pageSize  **参数解释**: SQL执行计划每页显示数量。 **约束限制**: 不涉及。 **取值范围**: 整数，1~100。 **默认取值**: 不涉及。
    * offset  **参数解释**: SQL执行计划起始页码。 **约束限制**: 不涉及。 **取值范围**: 大于等于0的整数。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlId' => 'sql_id',
            'pageSize' => 'page_size',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlId  **参数解释**: 归一化的SQL ID **约束限制**: 不涉及。
    * pageSize  **参数解释**: SQL执行计划每页显示数量。 **约束限制**: 不涉及。 **取值范围**: 整数，1~100。 **默认取值**: 不涉及。
    * offset  **参数解释**: SQL执行计划起始页码。 **约束限制**: 不涉及。 **取值范围**: 大于等于0的整数。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlId' => 'setSqlId',
            'pageSize' => 'setPageSize',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlId  **参数解释**: 归一化的SQL ID **约束限制**: 不涉及。
    * pageSize  **参数解释**: SQL执行计划每页显示数量。 **约束限制**: 不涉及。 **取值范围**: 整数，1~100。 **默认取值**: 不涉及。
    * offset  **参数解释**: SQL执行计划起始页码。 **约束限制**: 不涉及。 **取值范围**: 大于等于0的整数。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlId' => 'getSqlId',
            'pageSize' => 'getPageSize',
            'offset' => 'getOffset'
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
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlId'] === null) {
            $invalidProperties[] = "'sqlId' can't be null";
        }
            if (!preg_match("/^([1-9]\\d*|[0]{1,1})$/", $this->container['sqlId'])) {
                $invalidProperties[] = "invalid value for 'sqlId', must be conform to the pattern /^([1-9]\\d*|[0]{1,1})$/.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (!preg_match("/^[0-9]+$/", $this->container['pageSize'])) {
                $invalidProperties[] = "invalid value for 'pageSize', must be conform to the pattern /^[0-9]+$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (!preg_match("/^[0-9]+$/", $this->container['offset'])) {
                $invalidProperties[] = "invalid value for 'offset', must be conform to the pattern /^[0-9]+$/.";
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
    * Gets sqlId
    *  **参数解释**: 归一化的SQL ID **约束限制**: 不涉及。
    *
    * @return string
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string $sqlId **参数解释**: 归一化的SQL ID **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释**: SQL执行计划每页显示数量。 **约束限制**: 不涉及。 **取值范围**: 整数，1~100。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param string $pageSize **参数解释**: SQL执行计划每页显示数量。 **约束限制**: 不涉及。 **取值范围**: 整数，1~100。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: SQL执行计划起始页码。 **约束限制**: 不涉及。 **取值范围**: 大于等于0的整数。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string $offset **参数解释**: SQL执行计划起始页码。 **约束限制**: 不涉及。 **取值范围**: 大于等于0的整数。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

