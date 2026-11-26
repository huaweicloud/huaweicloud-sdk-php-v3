<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlexibleOrigins implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'flexibleOrigins';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * matchType  **参数解释：** URI的匹配方式 **约束限制：** 不涉及 **取值范围：** - file_extension: 文件后缀匹配 - file_path: 目录路径 - all: 匹配所有文件  **默认取值：** 不涉及
    * matchPattern  **参数解释：** URI的匹配规则 **约束限制：** match_type为file_extension时：   - 支持所有格式的文件类型   - 输入首字符为“.”，以“;”进行分隔   - 输入的文件后缀名总数不能超过20个  match_type为file_path时：   - 要求以“/”作为首字符   - 以“;”进行分隔   - 输入的目录路径总数不能超过20个  match_type为all时：置空  > 文件名后缀英文字符大、小写代表不同资源  **取值范围：** 1-512个字符 **默认取值：** 不涉及
    * priority  **参数解释：** 优先级 > 数值越大优先级越高  **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * backSources  **参数解释：** 配置客户端请求匹配当前规则时，CDN节点回源访问的源站 **约束限制：** 每条规则的回源源站数量不超过1个 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'matchType' => 'string',
            'matchPattern' => 'string',
            'priority' => 'int',
            'backSources' => '\HuaweiCloud\SDK\Cdn\V2\Model\BackSources[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * matchType  **参数解释：** URI的匹配方式 **约束限制：** 不涉及 **取值范围：** - file_extension: 文件后缀匹配 - file_path: 目录路径 - all: 匹配所有文件  **默认取值：** 不涉及
    * matchPattern  **参数解释：** URI的匹配规则 **约束限制：** match_type为file_extension时：   - 支持所有格式的文件类型   - 输入首字符为“.”，以“;”进行分隔   - 输入的文件后缀名总数不能超过20个  match_type为file_path时：   - 要求以“/”作为首字符   - 以“;”进行分隔   - 输入的目录路径总数不能超过20个  match_type为all时：置空  > 文件名后缀英文字符大、小写代表不同资源  **取值范围：** 1-512个字符 **默认取值：** 不涉及
    * priority  **参数解释：** 优先级 > 数值越大优先级越高  **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * backSources  **参数解释：** 配置客户端请求匹配当前规则时，CDN节点回源访问的源站 **约束限制：** 每条规则的回源源站数量不超过1个 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'matchType' => null,
        'matchPattern' => null,
        'priority' => 'int32',
        'backSources' => null
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
    * matchType  **参数解释：** URI的匹配方式 **约束限制：** 不涉及 **取值范围：** - file_extension: 文件后缀匹配 - file_path: 目录路径 - all: 匹配所有文件  **默认取值：** 不涉及
    * matchPattern  **参数解释：** URI的匹配规则 **约束限制：** match_type为file_extension时：   - 支持所有格式的文件类型   - 输入首字符为“.”，以“;”进行分隔   - 输入的文件后缀名总数不能超过20个  match_type为file_path时：   - 要求以“/”作为首字符   - 以“;”进行分隔   - 输入的目录路径总数不能超过20个  match_type为all时：置空  > 文件名后缀英文字符大、小写代表不同资源  **取值范围：** 1-512个字符 **默认取值：** 不涉及
    * priority  **参数解释：** 优先级 > 数值越大优先级越高  **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * backSources  **参数解释：** 配置客户端请求匹配当前规则时，CDN节点回源访问的源站 **约束限制：** 每条规则的回源源站数量不超过1个 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'matchType' => 'match_type',
            'matchPattern' => 'match_pattern',
            'priority' => 'priority',
            'backSources' => 'back_sources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * matchType  **参数解释：** URI的匹配方式 **约束限制：** 不涉及 **取值范围：** - file_extension: 文件后缀匹配 - file_path: 目录路径 - all: 匹配所有文件  **默认取值：** 不涉及
    * matchPattern  **参数解释：** URI的匹配规则 **约束限制：** match_type为file_extension时：   - 支持所有格式的文件类型   - 输入首字符为“.”，以“;”进行分隔   - 输入的文件后缀名总数不能超过20个  match_type为file_path时：   - 要求以“/”作为首字符   - 以“;”进行分隔   - 输入的目录路径总数不能超过20个  match_type为all时：置空  > 文件名后缀英文字符大、小写代表不同资源  **取值范围：** 1-512个字符 **默认取值：** 不涉及
    * priority  **参数解释：** 优先级 > 数值越大优先级越高  **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * backSources  **参数解释：** 配置客户端请求匹配当前规则时，CDN节点回源访问的源站 **约束限制：** 每条规则的回源源站数量不超过1个 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'matchType' => 'setMatchType',
            'matchPattern' => 'setMatchPattern',
            'priority' => 'setPriority',
            'backSources' => 'setBackSources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * matchType  **参数解释：** URI的匹配方式 **约束限制：** 不涉及 **取值范围：** - file_extension: 文件后缀匹配 - file_path: 目录路径 - all: 匹配所有文件  **默认取值：** 不涉及
    * matchPattern  **参数解释：** URI的匹配规则 **约束限制：** match_type为file_extension时：   - 支持所有格式的文件类型   - 输入首字符为“.”，以“;”进行分隔   - 输入的文件后缀名总数不能超过20个  match_type为file_path时：   - 要求以“/”作为首字符   - 以“;”进行分隔   - 输入的目录路径总数不能超过20个  match_type为all时：置空  > 文件名后缀英文字符大、小写代表不同资源  **取值范围：** 1-512个字符 **默认取值：** 不涉及
    * priority  **参数解释：** 优先级 > 数值越大优先级越高  **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * backSources  **参数解释：** 配置客户端请求匹配当前规则时，CDN节点回源访问的源站 **约束限制：** 每条规则的回源源站数量不超过1个 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'matchType' => 'getMatchType',
            'matchPattern' => 'getMatchPattern',
            'priority' => 'getPriority',
            'backSources' => 'getBackSources'
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
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['matchPattern'] = isset($data['matchPattern']) ? $data['matchPattern'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['backSources'] = isset($data['backSources']) ? $data['backSources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['matchType'] === null) {
            $invalidProperties[] = "'matchType' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['backSources'] === null) {
            $invalidProperties[] = "'backSources' can't be null";
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
    * Gets matchType
    *  **参数解释：** URI的匹配方式 **约束限制：** 不涉及 **取值范围：** - file_extension: 文件后缀匹配 - file_path: 目录路径 - all: 匹配所有文件  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string $matchType **参数解释：** URI的匹配方式 **约束限制：** 不涉及 **取值范围：** - file_extension: 文件后缀匹配 - file_path: 目录路径 - all: 匹配所有文件  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets matchPattern
    *  **参数解释：** URI的匹配规则 **约束限制：** match_type为file_extension时：   - 支持所有格式的文件类型   - 输入首字符为“.”，以“;”进行分隔   - 输入的文件后缀名总数不能超过20个  match_type为file_path时：   - 要求以“/”作为首字符   - 以“;”进行分隔   - 输入的目录路径总数不能超过20个  match_type为all时：置空  > 文件名后缀英文字符大、小写代表不同资源  **取值范围：** 1-512个字符 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMatchPattern()
    {
        return $this->container['matchPattern'];
    }

    /**
    * Sets matchPattern
    *
    * @param string|null $matchPattern **参数解释：** URI的匹配规则 **约束限制：** match_type为file_extension时：   - 支持所有格式的文件类型   - 输入首字符为“.”，以“;”进行分隔   - 输入的文件后缀名总数不能超过20个  match_type为file_path时：   - 要求以“/”作为首字符   - 以“;”进行分隔   - 输入的目录路径总数不能超过20个  match_type为all时：置空  > 文件名后缀英文字符大、小写代表不同资源  **取值范围：** 1-512个字符 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchPattern($matchPattern)
    {
        $this->container['matchPattern'] = $matchPattern;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 优先级 > 数值越大优先级越高  **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority **参数解释：** 优先级 > 数值越大优先级越高  **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets backSources
    *  **参数解释：** 配置客户端请求匹配当前规则时，CDN节点回源访问的源站 **约束限制：** 每条规则的回源源站数量不超过1个 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\BackSources[]
    */
    public function getBackSources()
    {
        return $this->container['backSources'];
    }

    /**
    * Sets backSources
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\BackSources[] $backSources **参数解释：** 配置客户端请求匹配当前规则时，CDN节点回源访问的源站 **约束限制：** 每条规则的回源源站数量不超过1个 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBackSources($backSources)
    {
        $this->container['backSources'] = $backSources;
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

