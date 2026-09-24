<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlRecommendRulesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlRecommendRulesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recommendType  **参数解释**: 推荐类型。 **约束限制**: 不涉及。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间  **默认取值**: all
    * recommendCount  **参数解释**: 推荐规则返回条数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * useOpsTunnel  **参数解释**: 是否使用紧急通道。 **约束限制**: 不涉及。 **取值范围**: - true：开启紧急通道 - false：关闭紧急通道  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recommendType' => 'string',
            'recommendCount' => 'int',
            'useOpsTunnel' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recommendType  **参数解释**: 推荐类型。 **约束限制**: 不涉及。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间  **默认取值**: all
    * recommendCount  **参数解释**: 推荐规则返回条数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * useOpsTunnel  **参数解释**: 是否使用紧急通道。 **约束限制**: 不涉及。 **取值范围**: - true：开启紧急通道 - false：关闭紧急通道  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recommendType' => null,
        'recommendCount' => null,
        'useOpsTunnel' => null
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
    * recommendType  **参数解释**: 推荐类型。 **约束限制**: 不涉及。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间  **默认取值**: all
    * recommendCount  **参数解释**: 推荐规则返回条数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * useOpsTunnel  **参数解释**: 是否使用紧急通道。 **约束限制**: 不涉及。 **取值范围**: - true：开启紧急通道 - false：关闭紧急通道  **默认取值**: false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recommendType' => 'recommend_type',
            'recommendCount' => 'recommend_count',
            'useOpsTunnel' => 'use_ops_tunnel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recommendType  **参数解释**: 推荐类型。 **约束限制**: 不涉及。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间  **默认取值**: all
    * recommendCount  **参数解释**: 推荐规则返回条数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * useOpsTunnel  **参数解释**: 是否使用紧急通道。 **约束限制**: 不涉及。 **取值范围**: - true：开启紧急通道 - false：关闭紧急通道  **默认取值**: false
    *
    * @var string[]
    */
    protected static $setters = [
            'recommendType' => 'setRecommendType',
            'recommendCount' => 'setRecommendCount',
            'useOpsTunnel' => 'setUseOpsTunnel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recommendType  **参数解释**: 推荐类型。 **约束限制**: 不涉及。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间  **默认取值**: all
    * recommendCount  **参数解释**: 推荐规则返回条数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * useOpsTunnel  **参数解释**: 是否使用紧急通道。 **约束限制**: 不涉及。 **取值范围**: - true：开启紧急通道 - false：关闭紧急通道  **默认取值**: false
    *
    * @var string[]
    */
    protected static $getters = [
            'recommendType' => 'getRecommendType',
            'recommendCount' => 'getRecommendCount',
            'useOpsTunnel' => 'getUseOpsTunnel'
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
    const RECOMMEND_TYPE_ALL = 'all';
    const RECOMMEND_TYPE_EXEC_COUNT = 'exec_count';
    const RECOMMEND_TYPE_AVG_EXEC_TIME = 'avg_exec_time';
    const RECOMMEND_TYPE_MAX_EXEC_TIME = 'max_exec_time';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecommendTypeAllowableValues()
    {
        return [
            self::RECOMMEND_TYPE_ALL,
            self::RECOMMEND_TYPE_EXEC_COUNT,
            self::RECOMMEND_TYPE_AVG_EXEC_TIME,
            self::RECOMMEND_TYPE_MAX_EXEC_TIME,
        ];
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
        $this->container['recommendType'] = isset($data['recommendType']) ? $data['recommendType'] : null;
        $this->container['recommendCount'] = isset($data['recommendCount']) ? $data['recommendCount'] : null;
        $this->container['useOpsTunnel'] = isset($data['useOpsTunnel']) ? $data['useOpsTunnel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRecommendTypeAllowableValues();
                if (!is_null($this->container['recommendType']) && !in_array($this->container['recommendType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recommendType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets recommendType
    *  **参数解释**: 推荐类型。 **约束限制**: 不涉及。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间  **默认取值**: all
    *
    * @return string|null
    */
    public function getRecommendType()
    {
        return $this->container['recommendType'];
    }

    /**
    * Sets recommendType
    *
    * @param string|null $recommendType **参数解释**: 推荐类型。 **约束限制**: 不涉及。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间  **默认取值**: all
    *
    * @return $this
    */
    public function setRecommendType($recommendType)
    {
        $this->container['recommendType'] = $recommendType;
        return $this;
    }

    /**
    * Gets recommendCount
    *  **参数解释**: 推荐规则返回条数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getRecommendCount()
    {
        return $this->container['recommendCount'];
    }

    /**
    * Sets recommendCount
    *
    * @param int|null $recommendCount **参数解释**: 推荐规则返回条数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setRecommendCount($recommendCount)
    {
        $this->container['recommendCount'] = $recommendCount;
        return $this;
    }

    /**
    * Gets useOpsTunnel
    *  **参数解释**: 是否使用紧急通道。 **约束限制**: 不涉及。 **取值范围**: - true：开启紧急通道 - false：关闭紧急通道  **默认取值**: false
    *
    * @return bool|null
    */
    public function getUseOpsTunnel()
    {
        return $this->container['useOpsTunnel'];
    }

    /**
    * Sets useOpsTunnel
    *
    * @param bool|null $useOpsTunnel **参数解释**: 是否使用紧急通道。 **约束限制**: 不涉及。 **取值范围**: - true：开启紧急通道 - false：关闭紧急通道  **默认取值**: false
    *
    * @return $this
    */
    public function setUseOpsTunnel($useOpsTunnel)
    {
        $this->container['useOpsTunnel'] = $useOpsTunnel;
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

