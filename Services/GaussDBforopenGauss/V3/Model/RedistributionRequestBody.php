<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedistributionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedistributionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisJoinTables  **参数解释**: 具有JOIN关系的表，指定该参数则启用多表扩容模式，扩容前设置生效。 如果指定过该参数，后续调用可以传入空数组清除多表扩容配置。 按照“database名称、schema1名称、table1名称、schema2名称、table2名称...”的格式指定，带有大小写或特殊字符的表名需要加\"\"转义。 多个数组则表示存在多个join group。 **约束限制**: 本次扩容结束后自动清除该配置，下次扩容需要重新设置。
    * redisParallelJobs  **参数解释**: 重分布并发数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * redisResourceLevel  **参数解释**: 重分布资源管控级别。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisJoinTables' => 'string[][]',
            'redisParallelJobs' => 'int',
            'redisResourceLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisJoinTables  **参数解释**: 具有JOIN关系的表，指定该参数则启用多表扩容模式，扩容前设置生效。 如果指定过该参数，后续调用可以传入空数组清除多表扩容配置。 按照“database名称、schema1名称、table1名称、schema2名称、table2名称...”的格式指定，带有大小写或特殊字符的表名需要加\"\"转义。 多个数组则表示存在多个join group。 **约束限制**: 本次扩容结束后自动清除该配置，下次扩容需要重新设置。
    * redisParallelJobs  **参数解释**: 重分布并发数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * redisResourceLevel  **参数解释**: 重分布资源管控级别。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisJoinTables' => null,
        'redisParallelJobs' => null,
        'redisResourceLevel' => null
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
    * redisJoinTables  **参数解释**: 具有JOIN关系的表，指定该参数则启用多表扩容模式，扩容前设置生效。 如果指定过该参数，后续调用可以传入空数组清除多表扩容配置。 按照“database名称、schema1名称、table1名称、schema2名称、table2名称...”的格式指定，带有大小写或特殊字符的表名需要加\"\"转义。 多个数组则表示存在多个join group。 **约束限制**: 本次扩容结束后自动清除该配置，下次扩容需要重新设置。
    * redisParallelJobs  **参数解释**: 重分布并发数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * redisResourceLevel  **参数解释**: 重分布资源管控级别。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisJoinTables' => 'redis_join_tables',
            'redisParallelJobs' => 'redis_parallel_jobs',
            'redisResourceLevel' => 'redis_resource_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisJoinTables  **参数解释**: 具有JOIN关系的表，指定该参数则启用多表扩容模式，扩容前设置生效。 如果指定过该参数，后续调用可以传入空数组清除多表扩容配置。 按照“database名称、schema1名称、table1名称、schema2名称、table2名称...”的格式指定，带有大小写或特殊字符的表名需要加\"\"转义。 多个数组则表示存在多个join group。 **约束限制**: 本次扩容结束后自动清除该配置，下次扩容需要重新设置。
    * redisParallelJobs  **参数解释**: 重分布并发数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * redisResourceLevel  **参数解释**: 重分布资源管控级别。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'redisJoinTables' => 'setRedisJoinTables',
            'redisParallelJobs' => 'setRedisParallelJobs',
            'redisResourceLevel' => 'setRedisResourceLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisJoinTables  **参数解释**: 具有JOIN关系的表，指定该参数则启用多表扩容模式，扩容前设置生效。 如果指定过该参数，后续调用可以传入空数组清除多表扩容配置。 按照“database名称、schema1名称、table1名称、schema2名称、table2名称...”的格式指定，带有大小写或特殊字符的表名需要加\"\"转义。 多个数组则表示存在多个join group。 **约束限制**: 本次扩容结束后自动清除该配置，下次扩容需要重新设置。
    * redisParallelJobs  **参数解释**: 重分布并发数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * redisResourceLevel  **参数解释**: 重分布资源管控级别。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'redisJoinTables' => 'getRedisJoinTables',
            'redisParallelJobs' => 'getRedisParallelJobs',
            'redisResourceLevel' => 'getRedisResourceLevel'
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
        $this->container['redisJoinTables'] = isset($data['redisJoinTables']) ? $data['redisJoinTables'] : null;
        $this->container['redisParallelJobs'] = isset($data['redisParallelJobs']) ? $data['redisParallelJobs'] : null;
        $this->container['redisResourceLevel'] = isset($data['redisResourceLevel']) ? $data['redisResourceLevel'] : null;
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
    * Gets redisJoinTables
    *  **参数解释**: 具有JOIN关系的表，指定该参数则启用多表扩容模式，扩容前设置生效。 如果指定过该参数，后续调用可以传入空数组清除多表扩容配置。 按照“database名称、schema1名称、table1名称、schema2名称、table2名称...”的格式指定，带有大小写或特殊字符的表名需要加\"\"转义。 多个数组则表示存在多个join group。 **约束限制**: 本次扩容结束后自动清除该配置，下次扩容需要重新设置。
    *
    * @return string[][]|null
    */
    public function getRedisJoinTables()
    {
        return $this->container['redisJoinTables'];
    }

    /**
    * Sets redisJoinTables
    *
    * @param string[][]|null $redisJoinTables **参数解释**: 具有JOIN关系的表，指定该参数则启用多表扩容模式，扩容前设置生效。 如果指定过该参数，后续调用可以传入空数组清除多表扩容配置。 按照“database名称、schema1名称、table1名称、schema2名称、table2名称...”的格式指定，带有大小写或特殊字符的表名需要加\"\"转义。 多个数组则表示存在多个join group。 **约束限制**: 本次扩容结束后自动清除该配置，下次扩容需要重新设置。
    *
    * @return $this
    */
    public function setRedisJoinTables($redisJoinTables)
    {
        $this->container['redisJoinTables'] = $redisJoinTables;
        return $this;
    }

    /**
    * Gets redisParallelJobs
    *  **参数解释**: 重分布并发数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getRedisParallelJobs()
    {
        return $this->container['redisParallelJobs'];
    }

    /**
    * Sets redisParallelJobs
    *
    * @param int|null $redisParallelJobs **参数解释**: 重分布并发数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setRedisParallelJobs($redisParallelJobs)
    {
        $this->container['redisParallelJobs'] = $redisParallelJobs;
        return $this;
    }

    /**
    * Gets redisResourceLevel
    *  **参数解释**: 重分布资源管控级别。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getRedisResourceLevel()
    {
        return $this->container['redisResourceLevel'];
    }

    /**
    * Sets redisResourceLevel
    *
    * @param string|null $redisResourceLevel **参数解释**: 重分布资源管控级别。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setRedisResourceLevel($redisResourceLevel)
    {
        $this->container['redisResourceLevel'] = $redisResourceLevel;
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

