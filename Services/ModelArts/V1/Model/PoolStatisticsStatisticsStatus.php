<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolStatisticsStatisticsStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolStatistics_statistics_status';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creating  **参数描述**： 正在创建中的资源池统计信息。 **取值范围**： 不涉及。
    * created  **参数描述**： 创建成功的资源池数量。 **取值范围**： 不涉及。
    * failed  **参数描述**： 最近三天内创建失败的资源池数量，最大值为500。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的资源池数量，通常是未支付的包周期资源池。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creating' => 'int',
            'created' => 'int',
            'failed' => 'int',
            'pending' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creating  **参数描述**： 正在创建中的资源池统计信息。 **取值范围**： 不涉及。
    * created  **参数描述**： 创建成功的资源池数量。 **取值范围**： 不涉及。
    * failed  **参数描述**： 最近三天内创建失败的资源池数量，最大值为500。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的资源池数量，通常是未支付的包周期资源池。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creating' => 'int32',
        'created' => 'int32',
        'failed' => 'int32',
        'pending' => 'int32'
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
    * creating  **参数描述**： 正在创建中的资源池统计信息。 **取值范围**： 不涉及。
    * created  **参数描述**： 创建成功的资源池数量。 **取值范围**： 不涉及。
    * failed  **参数描述**： 最近三天内创建失败的资源池数量，最大值为500。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的资源池数量，通常是未支付的包周期资源池。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creating' => 'creating',
            'created' => 'created',
            'failed' => 'failed',
            'pending' => 'pending'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creating  **参数描述**： 正在创建中的资源池统计信息。 **取值范围**： 不涉及。
    * created  **参数描述**： 创建成功的资源池数量。 **取值范围**： 不涉及。
    * failed  **参数描述**： 最近三天内创建失败的资源池数量，最大值为500。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的资源池数量，通常是未支付的包周期资源池。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'creating' => 'setCreating',
            'created' => 'setCreated',
            'failed' => 'setFailed',
            'pending' => 'setPending'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creating  **参数描述**： 正在创建中的资源池统计信息。 **取值范围**： 不涉及。
    * created  **参数描述**： 创建成功的资源池数量。 **取值范围**： 不涉及。
    * failed  **参数描述**： 最近三天内创建失败的资源池数量，最大值为500。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的资源池数量，通常是未支付的包周期资源池。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'creating' => 'getCreating',
            'created' => 'getCreated',
            'failed' => 'getFailed',
            'pending' => 'getPending'
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
        $this->container['creating'] = isset($data['creating']) ? $data['creating'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['pending'] = isset($data['pending']) ? $data['pending'] : null;
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
    * Gets creating
    *  **参数描述**： 正在创建中的资源池统计信息。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreating()
    {
        return $this->container['creating'];
    }

    /**
    * Sets creating
    *
    * @param int|null $creating **参数描述**： 正在创建中的资源池统计信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreating($creating)
    {
        $this->container['creating'] = $creating;
        return $this;
    }

    /**
    * Gets created
    *  **参数描述**： 创建成功的资源池数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int|null $created **参数描述**： 创建成功的资源池数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets failed
    *  **参数描述**： 最近三天内创建失败的资源池数量，最大值为500。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param int|null $failed **参数描述**： 最近三天内创建失败的资源池数量，最大值为500。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
        return $this;
    }

    /**
    * Gets pending
    *  **参数描述**： 等待中的资源池数量，通常是未支付的包周期资源池。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPending()
    {
        return $this->container['pending'];
    }

    /**
    * Sets pending
    *
    * @param int|null $pending **参数描述**： 等待中的资源池数量，通常是未支付的包周期资源池。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPending($pending)
    {
        $this->container['pending'] = $pending;
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

