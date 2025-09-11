<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSlowSqlsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSlowSqlsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  **参数解释**: 总数。 **取值范围**: 不涉及。
    * slowSqlInfos  **参数解释**: 慢SQL列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'slowSqlInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SlowSQLInfoResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  **参数解释**: 总数。 **取值范围**: 不涉及。
    * slowSqlInfos  **参数解释**: 慢SQL列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'slowSqlInfos' => null
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
    * total  **参数解释**: 总数。 **取值范围**: 不涉及。
    * slowSqlInfos  **参数解释**: 慢SQL列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'slowSqlInfos' => 'slow_sql_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  **参数解释**: 总数。 **取值范围**: 不涉及。
    * slowSqlInfos  **参数解释**: 慢SQL列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'slowSqlInfos' => 'setSlowSqlInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  **参数解释**: 总数。 **取值范围**: 不涉及。
    * slowSqlInfos  **参数解释**: 慢SQL列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'slowSqlInfos' => 'getSlowSqlInfos'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['slowSqlInfos'] = isset($data['slowSqlInfos']) ? $data['slowSqlInfos'] : null;
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
    * Gets total
    *  **参数解释**: 总数。 **取值范围**: 不涉及。
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
    * @param int|null $total **参数解释**: 总数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets slowSqlInfos
    *  **参数解释**: 慢SQL列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SlowSQLInfoResult[]|null
    */
    public function getSlowSqlInfos()
    {
        return $this->container['slowSqlInfos'];
    }

    /**
    * Sets slowSqlInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SlowSQLInfoResult[]|null $slowSqlInfos **参数解释**: 慢SQL列表。
    *
    * @return $this
    */
    public function setSlowSqlInfos($slowSqlInfos)
    {
        $this->container['slowSqlInfos'] = $slowSqlInfos;
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

