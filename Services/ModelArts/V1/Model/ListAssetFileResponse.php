<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssetFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssetFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contents  **参数解释**：列举的对象内容。
    * isTruncated  **参数解释**：表明本次返回的结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。 **取值范围**：true,false。
    * marker  **参数解释**：列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表。 **取值范围**：长度大于0且不超过1024的字符串。
    * nextMarker  **参数解释**：如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象。后续请求可以指定Marker等于该值来列举剩余的对象。 **取值范围**：长度大于0且不超过1024的字符串。
    * maxKeys  **参数解释**：列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前max_keys个对象。 **取值范围**：1-1000。
    * bucketName  **参数解释**：本次请求的桶名。 **约束限制**：桶的名字需全局唯一，不能与已有的任何桶名称重复，包括其他用户创建的桶。   桶命名规则如下：   - 3～63个字符，数字或字母开头，支持小写字母、数字、“-”、“.”。   - 禁止使用IP地址。   - 禁止以“-”或“.”开头及结尾。   - 禁止两个“.”相邻（如：“my..bucket”）。   - 禁止“.”和“-”相邻（如：“my-.bucket”和“my.-bucket”）。   - 同一用户在同一个区域多次创建同名桶不会报错，创建的桶属性以第一次请求为准。 **取值范围**：不涉及。
    * prefix  **参数解释**：列举桶内对象列表时，指定一个前缀，限定返回的对象名必须带有prefix前缀。 **取值范围**：不涉及。
    * commonPrefixes  **参数解释**：列举桶内对象列表时，指定前缀列表，限定返回的对象名必须带有prefix前缀。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contents' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Content[]',
            'isTruncated' => 'bool',
            'marker' => 'string',
            'nextMarker' => 'string',
            'maxKeys' => 'int',
            'bucketName' => 'string',
            'prefix' => 'string',
            'commonPrefixes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contents  **参数解释**：列举的对象内容。
    * isTruncated  **参数解释**：表明本次返回的结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。 **取值范围**：true,false。
    * marker  **参数解释**：列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表。 **取值范围**：长度大于0且不超过1024的字符串。
    * nextMarker  **参数解释**：如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象。后续请求可以指定Marker等于该值来列举剩余的对象。 **取值范围**：长度大于0且不超过1024的字符串。
    * maxKeys  **参数解释**：列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前max_keys个对象。 **取值范围**：1-1000。
    * bucketName  **参数解释**：本次请求的桶名。 **约束限制**：桶的名字需全局唯一，不能与已有的任何桶名称重复，包括其他用户创建的桶。   桶命名规则如下：   - 3～63个字符，数字或字母开头，支持小写字母、数字、“-”、“.”。   - 禁止使用IP地址。   - 禁止以“-”或“.”开头及结尾。   - 禁止两个“.”相邻（如：“my..bucket”）。   - 禁止“.”和“-”相邻（如：“my-.bucket”和“my.-bucket”）。   - 同一用户在同一个区域多次创建同名桶不会报错，创建的桶属性以第一次请求为准。 **取值范围**：不涉及。
    * prefix  **参数解释**：列举桶内对象列表时，指定一个前缀，限定返回的对象名必须带有prefix前缀。 **取值范围**：不涉及。
    * commonPrefixes  **参数解释**：列举桶内对象列表时，指定前缀列表，限定返回的对象名必须带有prefix前缀。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contents' => null,
        'isTruncated' => null,
        'marker' => null,
        'nextMarker' => null,
        'maxKeys' => 'int32',
        'bucketName' => null,
        'prefix' => null,
        'commonPrefixes' => null
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
    * contents  **参数解释**：列举的对象内容。
    * isTruncated  **参数解释**：表明本次返回的结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。 **取值范围**：true,false。
    * marker  **参数解释**：列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表。 **取值范围**：长度大于0且不超过1024的字符串。
    * nextMarker  **参数解释**：如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象。后续请求可以指定Marker等于该值来列举剩余的对象。 **取值范围**：长度大于0且不超过1024的字符串。
    * maxKeys  **参数解释**：列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前max_keys个对象。 **取值范围**：1-1000。
    * bucketName  **参数解释**：本次请求的桶名。 **约束限制**：桶的名字需全局唯一，不能与已有的任何桶名称重复，包括其他用户创建的桶。   桶命名规则如下：   - 3～63个字符，数字或字母开头，支持小写字母、数字、“-”、“.”。   - 禁止使用IP地址。   - 禁止以“-”或“.”开头及结尾。   - 禁止两个“.”相邻（如：“my..bucket”）。   - 禁止“.”和“-”相邻（如：“my-.bucket”和“my.-bucket”）。   - 同一用户在同一个区域多次创建同名桶不会报错，创建的桶属性以第一次请求为准。 **取值范围**：不涉及。
    * prefix  **参数解释**：列举桶内对象列表时，指定一个前缀，限定返回的对象名必须带有prefix前缀。 **取值范围**：不涉及。
    * commonPrefixes  **参数解释**：列举桶内对象列表时，指定前缀列表，限定返回的对象名必须带有prefix前缀。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contents' => 'contents',
            'isTruncated' => 'is_truncated',
            'marker' => 'marker',
            'nextMarker' => 'next_marker',
            'maxKeys' => 'max_keys',
            'bucketName' => 'bucket_name',
            'prefix' => 'prefix',
            'commonPrefixes' => 'common_prefixes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contents  **参数解释**：列举的对象内容。
    * isTruncated  **参数解释**：表明本次返回的结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。 **取值范围**：true,false。
    * marker  **参数解释**：列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表。 **取值范围**：长度大于0且不超过1024的字符串。
    * nextMarker  **参数解释**：如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象。后续请求可以指定Marker等于该值来列举剩余的对象。 **取值范围**：长度大于0且不超过1024的字符串。
    * maxKeys  **参数解释**：列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前max_keys个对象。 **取值范围**：1-1000。
    * bucketName  **参数解释**：本次请求的桶名。 **约束限制**：桶的名字需全局唯一，不能与已有的任何桶名称重复，包括其他用户创建的桶。   桶命名规则如下：   - 3～63个字符，数字或字母开头，支持小写字母、数字、“-”、“.”。   - 禁止使用IP地址。   - 禁止以“-”或“.”开头及结尾。   - 禁止两个“.”相邻（如：“my..bucket”）。   - 禁止“.”和“-”相邻（如：“my-.bucket”和“my.-bucket”）。   - 同一用户在同一个区域多次创建同名桶不会报错，创建的桶属性以第一次请求为准。 **取值范围**：不涉及。
    * prefix  **参数解释**：列举桶内对象列表时，指定一个前缀，限定返回的对象名必须带有prefix前缀。 **取值范围**：不涉及。
    * commonPrefixes  **参数解释**：列举桶内对象列表时，指定前缀列表，限定返回的对象名必须带有prefix前缀。
    *
    * @var string[]
    */
    protected static $setters = [
            'contents' => 'setContents',
            'isTruncated' => 'setIsTruncated',
            'marker' => 'setMarker',
            'nextMarker' => 'setNextMarker',
            'maxKeys' => 'setMaxKeys',
            'bucketName' => 'setBucketName',
            'prefix' => 'setPrefix',
            'commonPrefixes' => 'setCommonPrefixes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contents  **参数解释**：列举的对象内容。
    * isTruncated  **参数解释**：表明本次返回的结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。 **取值范围**：true,false。
    * marker  **参数解释**：列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表。 **取值范围**：长度大于0且不超过1024的字符串。
    * nextMarker  **参数解释**：如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象。后续请求可以指定Marker等于该值来列举剩余的对象。 **取值范围**：长度大于0且不超过1024的字符串。
    * maxKeys  **参数解释**：列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前max_keys个对象。 **取值范围**：1-1000。
    * bucketName  **参数解释**：本次请求的桶名。 **约束限制**：桶的名字需全局唯一，不能与已有的任何桶名称重复，包括其他用户创建的桶。   桶命名规则如下：   - 3～63个字符，数字或字母开头，支持小写字母、数字、“-”、“.”。   - 禁止使用IP地址。   - 禁止以“-”或“.”开头及结尾。   - 禁止两个“.”相邻（如：“my..bucket”）。   - 禁止“.”和“-”相邻（如：“my-.bucket”和“my.-bucket”）。   - 同一用户在同一个区域多次创建同名桶不会报错，创建的桶属性以第一次请求为准。 **取值范围**：不涉及。
    * prefix  **参数解释**：列举桶内对象列表时，指定一个前缀，限定返回的对象名必须带有prefix前缀。 **取值范围**：不涉及。
    * commonPrefixes  **参数解释**：列举桶内对象列表时，指定前缀列表，限定返回的对象名必须带有prefix前缀。
    *
    * @var string[]
    */
    protected static $getters = [
            'contents' => 'getContents',
            'isTruncated' => 'getIsTruncated',
            'marker' => 'getMarker',
            'nextMarker' => 'getNextMarker',
            'maxKeys' => 'getMaxKeys',
            'bucketName' => 'getBucketName',
            'prefix' => 'getPrefix',
            'commonPrefixes' => 'getCommonPrefixes'
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
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['isTruncated'] = isset($data['isTruncated']) ? $data['isTruncated'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['maxKeys'] = isset($data['maxKeys']) ? $data['maxKeys'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['commonPrefixes'] = isset($data['commonPrefixes']) ? $data['commonPrefixes'] : null;
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
    * Gets contents
    *  **参数解释**：列举的对象内容。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Content[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Content[]|null $contents **参数解释**：列举的对象内容。
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets isTruncated
    *  **参数解释**：表明本次返回的结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。 **取值范围**：true,false。
    *
    * @return bool|null
    */
    public function getIsTruncated()
    {
        return $this->container['isTruncated'];
    }

    /**
    * Sets isTruncated
    *
    * @param bool|null $isTruncated **参数解释**：表明本次返回的结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。 **取值范围**：true,false。
    *
    * @return $this
    */
    public function setIsTruncated($isTruncated)
    {
        $this->container['isTruncated'] = $isTruncated;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释**：列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表。 **取值范围**：长度大于0且不超过1024的字符串。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释**：列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表。 **取值范围**：长度大于0且不超过1024的字符串。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets nextMarker
    *  **参数解释**：如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象。后续请求可以指定Marker等于该值来列举剩余的对象。 **取值范围**：长度大于0且不超过1024的字符串。
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker **参数解释**：如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象。后续请求可以指定Marker等于该值来列举剩余的对象。 **取值范围**：长度大于0且不超过1024的字符串。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets maxKeys
    *  **参数解释**：列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前max_keys个对象。 **取值范围**：1-1000。
    *
    * @return int|null
    */
    public function getMaxKeys()
    {
        return $this->container['maxKeys'];
    }

    /**
    * Sets maxKeys
    *
    * @param int|null $maxKeys **参数解释**：列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前max_keys个对象。 **取值范围**：1-1000。
    *
    * @return $this
    */
    public function setMaxKeys($maxKeys)
    {
        $this->container['maxKeys'] = $maxKeys;
        return $this;
    }

    /**
    * Gets bucketName
    *  **参数解释**：本次请求的桶名。 **约束限制**：桶的名字需全局唯一，不能与已有的任何桶名称重复，包括其他用户创建的桶。   桶命名规则如下：   - 3～63个字符，数字或字母开头，支持小写字母、数字、“-”、“.”。   - 禁止使用IP地址。   - 禁止以“-”或“.”开头及结尾。   - 禁止两个“.”相邻（如：“my..bucket”）。   - 禁止“.”和“-”相邻（如：“my-.bucket”和“my.-bucket”）。   - 同一用户在同一个区域多次创建同名桶不会报错，创建的桶属性以第一次请求为准。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName **参数解释**：本次请求的桶名。 **约束限制**：桶的名字需全局唯一，不能与已有的任何桶名称重复，包括其他用户创建的桶。   桶命名规则如下：   - 3～63个字符，数字或字母开头，支持小写字母、数字、“-”、“.”。   - 禁止使用IP地址。   - 禁止以“-”或“.”开头及结尾。   - 禁止两个“.”相邻（如：“my..bucket”）。   - 禁止“.”和“-”相邻（如：“my-.bucket”和“my.-bucket”）。   - 同一用户在同一个区域多次创建同名桶不会报错，创建的桶属性以第一次请求为准。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets prefix
    *  **参数解释**：列举桶内对象列表时，指定一个前缀，限定返回的对象名必须带有prefix前缀。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix **参数解释**：列举桶内对象列表时，指定一个前缀，限定返回的对象名必须带有prefix前缀。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets commonPrefixes
    *  **参数解释**：列举桶内对象列表时，指定前缀列表，限定返回的对象名必须带有prefix前缀。
    *
    * @return string[]|null
    */
    public function getCommonPrefixes()
    {
        return $this->container['commonPrefixes'];
    }

    /**
    * Sets commonPrefixes
    *
    * @param string[]|null $commonPrefixes **参数解释**：列举桶内对象列表时，指定前缀列表，限定返回的对象名必须带有prefix前缀。
    *
    * @return $this
    */
    public function setCommonPrefixes($commonPrefixes)
    {
        $this->container['commonPrefixes'] = $commonPrefixes;
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

