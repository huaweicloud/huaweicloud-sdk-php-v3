<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRedistributionSchemaRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRedistributionSchemaRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dbName  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= :@!#-]{0,255}$ **默认取值**： null
    * limit  **参数解释**： 分页条数。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于1。 **默认取值**： 10
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于0。 **默认取值**： 0
    * schemaName  **参数解释**： schema名称。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= ,:@!#-]{0,2048}$ **默认取值**： null
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'dbName' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'schemaName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dbName  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= :@!#-]{0,255}$ **默认取值**： null
    * limit  **参数解释**： 分页条数。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于1。 **默认取值**： 10
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于0。 **默认取值**： 0
    * schemaName  **参数解释**： schema名称。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= ,:@!#-]{0,2048}$ **默认取值**： null
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'dbName' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'schemaName' => null
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
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dbName  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= :@!#-]{0,255}$ **默认取值**： null
    * limit  **参数解释**： 分页条数。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于1。 **默认取值**： 10
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于0。 **默认取值**： 0
    * schemaName  **参数解释**： schema名称。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= ,:@!#-]{0,2048}$ **默认取值**： null
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'dbName' => 'db_name',
            'limit' => 'limit',
            'offset' => 'offset',
            'schemaName' => 'schema_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dbName  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= :@!#-]{0,255}$ **默认取值**： null
    * limit  **参数解释**： 分页条数。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于1。 **默认取值**： 10
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于0。 **默认取值**： 0
    * schemaName  **参数解释**： schema名称。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= ,:@!#-]{0,2048}$ **默认取值**： null
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'dbName' => 'setDbName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'schemaName' => 'setSchemaName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dbName  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= :@!#-]{0,255}$ **默认取值**： null
    * limit  **参数解释**： 分页条数。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于1。 **默认取值**： 10
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于0。 **默认取值**： 0
    * schemaName  **参数解释**： schema名称。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= ,:@!#-]{0,2048}$ **默认取值**： null
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'dbName' => 'getDbName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'schemaName' => 'getSchemaName'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
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
    * Gets clusterId
    *  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets dbName
    *  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= :@!#-]{0,255}$ **默认取值**： null
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= :@!#-]{0,255}$ **默认取值**： null
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 分页条数。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于1。 **默认取值**： 10
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
    * @param int|null $limit **参数解释**： 分页条数。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于1。 **默认取值**： 10
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
    *  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于0。 **默认取值**： 0
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
    * @param int|null $offset **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 有效值：大于等于0。 **默认取值**： 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets schemaName
    *  **参数解释**： schema名称。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= ,:@!#-]{0,2048}$ **默认取值**： null
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName **参数解释**： schema名称。 **约束限制**： 不涉及。 **取值范围**： ^[a-zA-Z0-9\\u4e00-\\u9fa5_.+= ,:@!#-]{0,2048}$ **默认取值**： null
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
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

