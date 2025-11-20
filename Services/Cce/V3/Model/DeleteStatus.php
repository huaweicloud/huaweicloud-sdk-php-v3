<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * previousTotal  **参数解释**： 集群删除时已经存在的集群资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentTotal  **参数解释**： 基于当前集群资源记录信息，生成实际最新资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updated  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * added  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * deleted  **参数解释**： 集群删除时删除的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'previousTotal' => 'int',
            'currentTotal' => 'int',
            'updated' => 'int',
            'added' => 'int',
            'deleted' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * previousTotal  **参数解释**： 集群删除时已经存在的集群资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentTotal  **参数解释**： 基于当前集群资源记录信息，生成实际最新资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updated  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * added  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * deleted  **参数解释**： 集群删除时删除的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'previousTotal' => null,
        'currentTotal' => null,
        'updated' => null,
        'added' => null,
        'deleted' => null
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
    * previousTotal  **参数解释**： 集群删除时已经存在的集群资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentTotal  **参数解释**： 基于当前集群资源记录信息，生成实际最新资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updated  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * added  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * deleted  **参数解释**： 集群删除时删除的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'previousTotal' => 'previous_total',
            'currentTotal' => 'current_total',
            'updated' => 'updated',
            'added' => 'added',
            'deleted' => 'deleted'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * previousTotal  **参数解释**： 集群删除时已经存在的集群资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentTotal  **参数解释**： 基于当前集群资源记录信息，生成实际最新资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updated  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * added  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * deleted  **参数解释**： 集群删除时删除的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'previousTotal' => 'setPreviousTotal',
            'currentTotal' => 'setCurrentTotal',
            'updated' => 'setUpdated',
            'added' => 'setAdded',
            'deleted' => 'setDeleted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * previousTotal  **参数解释**： 集群删除时已经存在的集群资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentTotal  **参数解释**： 基于当前集群资源记录信息，生成实际最新资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updated  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * added  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * deleted  **参数解释**： 集群删除时删除的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'previousTotal' => 'getPreviousTotal',
            'currentTotal' => 'getCurrentTotal',
            'updated' => 'getUpdated',
            'added' => 'getAdded',
            'deleted' => 'getDeleted'
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
        $this->container['previousTotal'] = isset($data['previousTotal']) ? $data['previousTotal'] : null;
        $this->container['currentTotal'] = isset($data['currentTotal']) ? $data['currentTotal'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['added'] = isset($data['added']) ? $data['added'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
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
    * Gets previousTotal
    *  **参数解释**： 集群删除时已经存在的集群资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getPreviousTotal()
    {
        return $this->container['previousTotal'];
    }

    /**
    * Sets previousTotal
    *
    * @param int|null $previousTotal **参数解释**： 集群删除时已经存在的集群资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPreviousTotal($previousTotal)
    {
        $this->container['previousTotal'] = $previousTotal;
        return $this;
    }

    /**
    * Gets currentTotal
    *  **参数解释**： 基于当前集群资源记录信息，生成实际最新资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getCurrentTotal()
    {
        return $this->container['currentTotal'];
    }

    /**
    * Sets currentTotal
    *
    * @param int|null $currentTotal **参数解释**： 基于当前集群资源记录信息，生成实际最新资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCurrentTotal($currentTotal)
    {
        $this->container['currentTotal'] = $currentTotal;
        return $this;
    }

    /**
    * Gets updated
    *  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param int|null $updated **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets added
    *  **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAdded()
    {
        return $this->container['added'];
    }

    /**
    * Sets added
    *
    * @param int|null $added **参数解释**： 集群删除时更新的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAdded($added)
    {
        $this->container['added'] = $added;
        return $this;
    }

    /**
    * Gets deleted
    *  **参数解释**： 集群删除时删除的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param int|null $deleted **参数解释**： 集群删除时删除的资源记录总数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
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

