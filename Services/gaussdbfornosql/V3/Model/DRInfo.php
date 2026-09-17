<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DRInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DRInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  **参数解释：** 容灾源实例ID。可以调用查询实例列表和详情-QueryingInstancesandDetails接口获取。 **约束限制：** - 创建容灾实例时该参数必传，表示为该源实例创建容灾实例。 - 源实例为GeminiDB Cassandra实例。 - 源实例状态为正常。 - 传该参数时，Datastore的type参数的值必须为“cassandra”。 - 一个源实例只能有一个容灾实例。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  **参数解释：** 容灾源实例ID。可以调用查询实例列表和详情-QueryingInstancesandDetails接口获取。 **约束限制：** - 创建容灾实例时该参数必传，表示为该源实例创建容灾实例。 - 源实例为GeminiDB Cassandra实例。 - 源实例状态为正常。 - 传该参数时，Datastore的type参数的值必须为“cassandra”。 - 一个源实例只能有一个容灾实例。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceInstanceId' => null
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
    * sourceInstanceId  **参数解释：** 容灾源实例ID。可以调用查询实例列表和详情-QueryingInstancesandDetails接口获取。 **约束限制：** - 创建容灾实例时该参数必传，表示为该源实例创建容灾实例。 - 源实例为GeminiDB Cassandra实例。 - 源实例状态为正常。 - 传该参数时，Datastore的type参数的值必须为“cassandra”。 - 一个源实例只能有一个容灾实例。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceInstanceId' => 'source_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  **参数解释：** 容灾源实例ID。可以调用查询实例列表和详情-QueryingInstancesandDetails接口获取。 **约束限制：** - 创建容灾实例时该参数必传，表示为该源实例创建容灾实例。 - 源实例为GeminiDB Cassandra实例。 - 源实例状态为正常。 - 传该参数时，Datastore的type参数的值必须为“cassandra”。 - 一个源实例只能有一个容灾实例。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceInstanceId' => 'setSourceInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  **参数解释：** 容灾源实例ID。可以调用查询实例列表和详情-QueryingInstancesandDetails接口获取。 **约束限制：** - 创建容灾实例时该参数必传，表示为该源实例创建容灾实例。 - 源实例为GeminiDB Cassandra实例。 - 源实例状态为正常。 - 传该参数时，Datastore的type参数的值必须为“cassandra”。 - 一个源实例只能有一个容灾实例。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceInstanceId' => 'getSourceInstanceId'
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
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
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
    * Gets sourceInstanceId
    *  **参数解释：** 容灾源实例ID。可以调用查询实例列表和详情-QueryingInstancesandDetails接口获取。 **约束限制：** - 创建容灾实例时该参数必传，表示为该源实例创建容灾实例。 - 源实例为GeminiDB Cassandra实例。 - 源实例状态为正常。 - 传该参数时，Datastore的type参数的值必须为“cassandra”。 - 一个源实例只能有一个容灾实例。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string|null $sourceInstanceId **参数解释：** 容灾源实例ID。可以调用查询实例列表和详情-QueryingInstancesandDetails接口获取。 **约束限制：** - 创建容灾实例时该参数必传，表示为该源实例创建容灾实例。 - 源实例为GeminiDB Cassandra实例。 - 源实例状态为正常。 - 传该参数时，Datastore的type参数的值必须为“cassandra”。 - 一个源实例只能有一个容灾实例。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
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

