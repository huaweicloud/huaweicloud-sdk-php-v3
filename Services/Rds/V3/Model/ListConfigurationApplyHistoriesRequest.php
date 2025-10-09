<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigurationApplyHistoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigurationApplyHistoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  大于等于0  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  [1, 100]  **默认取值**：  10
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  大于等于0  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  [1, 100]  **默认取值**：  10
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configId' => null,
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
    * configId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  大于等于0  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  [1, 100]  **默认取值**：  10
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configId' => 'config_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  大于等于0  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  [1, 100]  **默认取值**：  10
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $setters = [
            'configId' => 'setConfigId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  大于等于0  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  [1, 100]  **默认取值**：  10
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn **默认取值**：  en-us。
    *
    * @var string[]
    */
    protected static $getters = [
            'configId' => 'getConfigId',
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
        $this->container['configId'] = isset($data['configId']) ? $data['configId'] : null;
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
        if ($this->container['configId'] === null) {
            $invalidProperties[] = "'configId' can't be null";
        }
            if ((mb_strlen($this->container['configId']) > 36)) {
                $invalidProperties[] = "invalid value for 'configId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['configId']) < 0)) {
                $invalidProperties[] = "invalid value for 'configId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
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
    * Gets configId
    *  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
    * Sets configId
    *
    * @param string $configId **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setConfigId($configId)
    {
        $this->container['configId'] = $configId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  大于等于0  **默认取值**：  0
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
    * @param int|null $offset **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  大于等于0  **默认取值**：  0
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
    *  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  [1, 100]  **默认取值**：  10
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
    * @param int|null $limit **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  [1, 100]  **默认取值**：  10
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

