<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHyperNodesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHyperNodesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * limit  **参数解释**： 设置每页显示的数据条数 **约束限制**： 不涉及 **取值范围**： 1到1000之间（含1和1000）的整数 **默认取值**： 100
    * offset  **参数解释**： 设置从第几条数据开始显示（用于翻页），比如输入0表示从第一条数据开始，输入10表示跳过前10条，从第11条开始显示，不填时默认从第一条开始显示（即默认为0）。 **约束限制**： 不涉及 **取值范围**： 32 位非负整数 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * limit  **参数解释**： 设置每页显示的数据条数 **约束限制**： 不涉及 **取值范围**： 1到1000之间（含1和1000）的整数 **默认取值**： 100
    * offset  **参数解释**： 设置从第几条数据开始显示（用于翻页），比如输入0表示从第一条数据开始，输入10表示跳过前10条，从第11条开始显示，不填时默认从第一条开始显示（即默认为0）。 **约束限制**： 不涉及 **取值范围**： 32 位非负整数 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * limit  **参数解释**： 设置每页显示的数据条数 **约束限制**： 不涉及 **取值范围**： 1到1000之间（含1和1000）的整数 **默认取值**： 100
    * offset  **参数解释**： 设置从第几条数据开始显示（用于翻页），比如输入0表示从第一条数据开始，输入10表示跳过前10条，从第11条开始显示，不填时默认从第一条开始显示（即默认为0）。 **约束限制**： 不涉及 **取值范围**： 32 位非负整数 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * limit  **参数解释**： 设置每页显示的数据条数 **约束限制**： 不涉及 **取值范围**： 1到1000之间（含1和1000）的整数 **默认取值**： 100
    * offset  **参数解释**： 设置从第几条数据开始显示（用于翻页），比如输入0表示从第一条数据开始，输入10表示跳过前10条，从第11条开始显示，不填时默认从第一条开始显示（即默认为0）。 **约束限制**： 不涉及 **取值范围**： 32 位非负整数 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * limit  **参数解释**： 设置每页显示的数据条数 **约束限制**： 不涉及 **取值范围**： 1到1000之间（含1和1000）的整数 **默认取值**： 100
    * offset  **参数解释**： 设置从第几条数据开始显示（用于翻页），比如输入0表示从第一条数据开始，输入10表示跳过前10条，从第11条开始显示，不填时默认从第一条开始显示（即默认为0）。 **约束限制**： 不涉及 **取值范围**： 32 位非负整数 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'limit' => 'getLimit',
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    *  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
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
    * @param string $clusterId 集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 设置每页显示的数据条数 **约束限制**： 不涉及 **取值范围**： 1到1000之间（含1和1000）的整数 **默认取值**： 100
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
    * @param int|null $limit **参数解释**： 设置每页显示的数据条数 **约束限制**： 不涉及 **取值范围**： 1到1000之间（含1和1000）的整数 **默认取值**： 100
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
    *  **参数解释**： 设置从第几条数据开始显示（用于翻页），比如输入0表示从第一条数据开始，输入10表示跳过前10条，从第11条开始显示，不填时默认从第一条开始显示（即默认为0）。 **约束限制**： 不涉及 **取值范围**： 32 位非负整数 **默认取值**： 0
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
    * @param int|null $offset **参数解释**： 设置从第几条数据开始显示（用于翻页），比如输入0表示从第一条数据开始，输入10表示跳过前10条，从第11条开始显示，不填时默认从第一条开始显示（即默认为0）。 **约束限制**： 不涉及 **取值范围**： 32 位非负整数 **默认取值**： 0
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

