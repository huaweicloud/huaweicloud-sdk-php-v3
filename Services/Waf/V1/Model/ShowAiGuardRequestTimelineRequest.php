<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAiGuardRequestTimelineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAiGuardRequestTimelineRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳，默认当天时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 当天时间戳
    * appId  **参数解释：** 应用ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 分页偏移量，默认值为0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * limit  **参数解释：** 每页返回的最大数据量，默认值为2000，最大限制为2000 **约束限制：** 最大2000 **取值范围：** 0-2000 **默认取值：** 2000
    * detectType  **参数解释：** 检测内容类型筛选，不传则查询全部类型 **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 **默认取值：** 不涉及
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'from' => 'int',
            'to' => 'int',
            'appId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'detectType' => 'string',
            'contentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳，默认当天时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 当天时间戳
    * appId  **参数解释：** 应用ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 分页偏移量，默认值为0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * limit  **参数解释：** 每页返回的最大数据量，默认值为2000，最大限制为2000 **约束限制：** 最大2000 **取值范围：** 0-2000 **默认取值：** 2000
    * detectType  **参数解释：** 检测内容类型筛选，不传则查询全部类型 **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 **默认取值：** 不涉及
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'from' => 'int64',
        'to' => 'int64',
        'appId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'detectType' => null,
        'contentType' => null
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
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳，默认当天时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 当天时间戳
    * appId  **参数解释：** 应用ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 分页偏移量，默认值为0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * limit  **参数解释：** 每页返回的最大数据量，默认值为2000，最大限制为2000 **约束限制：** 最大2000 **取值范围：** 0-2000 **默认取值：** 2000
    * detectType  **参数解释：** 检测内容类型筛选，不传则查询全部类型 **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 **默认取值：** 不涉及
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'from' => 'from',
            'to' => 'to',
            'appId' => 'app_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'detectType' => 'detect_type',
            'contentType' => 'Content-Type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳，默认当天时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 当天时间戳
    * appId  **参数解释：** 应用ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 分页偏移量，默认值为0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * limit  **参数解释：** 每页返回的最大数据量，默认值为2000，最大限制为2000 **约束限制：** 最大2000 **取值范围：** 0-2000 **默认取值：** 2000
    * detectType  **参数解释：** 检测内容类型筛选，不传则查询全部类型 **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 **默认取值：** 不涉及
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @var string[]
    */
    protected static $setters = [
            'from' => 'setFrom',
            'to' => 'setTo',
            'appId' => 'setAppId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'detectType' => 'setDetectType',
            'contentType' => 'setContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳，默认当天时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 当天时间戳
    * appId  **参数解释：** 应用ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * offset  **参数解释：** 分页偏移量，默认值为0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * limit  **参数解释：** 每页返回的最大数据量，默认值为2000，最大限制为2000 **约束限制：** 最大2000 **取值范围：** 0-2000 **默认取值：** 2000
    * detectType  **参数解释：** 检测内容类型筛选，不传则查询全部类型 **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 **默认取值：** 不涉及
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @var string[]
    */
    protected static $getters = [
            'from' => 'getFrom',
            'to' => 'getTo',
            'appId' => 'getAppId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'detectType' => 'getDetectType',
            'contentType' => 'getContentType'
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
    const DETECT_TYPE_TEXT = 'text';
    const DETECT_TYPE_IMAGE = 'image';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDetectTypeAllowableValues()
    {
        return [
            self::DETECT_TYPE_TEXT,
            self::DETECT_TYPE_IMAGE,
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['detectType'] = isset($data['detectType']) ? $data['detectType'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['from']) && ($this->container['from'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 0)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 0)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 36)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDetectTypeAllowableValues();
                if (!is_null($this->container['detectType']) && !in_array($this->container['detectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'detectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 128)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['contentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 1.";
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
    * Gets from
    *  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释：** 截止时间，时间格式为毫秒时间戳，默认当天时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 当天时间戳
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to **参数解释：** 截止时间，时间格式为毫秒时间戳，默认当天时间戳 **约束限制：** 不涉及 **取值范围：** 0-9999999999999 **默认取值：** 当天时间戳
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets appId
    *  **参数解释：** 应用ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId **参数解释：** 应用ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 分页偏移量，默认值为0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
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
    * @param int|null $offset **参数解释：** 分页偏移量，默认值为0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
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
    *  **参数解释：** 每页返回的最大数据量，默认值为2000，最大限制为2000 **约束限制：** 最大2000 **取值范围：** 0-2000 **默认取值：** 2000
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
    * @param int|null $limit **参数解释：** 每页返回的最大数据量，默认值为2000，最大限制为2000 **约束限制：** 最大2000 **取值范围：** 0-2000 **默认取值：** 2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets detectType
    *  **参数解释：** 检测内容类型筛选，不传则查询全部类型 **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDetectType()
    {
        return $this->container['detectType'];
    }

    /**
    * Sets detectType
    *
    * @param string|null $detectType **参数解释：** 检测内容类型筛选，不传则查询全部类型 **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDetectType($detectType)
    {
        $this->container['detectType'] = $detectType;
        return $this;
    }

    /**
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
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

