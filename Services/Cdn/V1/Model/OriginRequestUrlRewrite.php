<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OriginRequestUrlRewrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OriginRequestUrlRewrite';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * priority  回源URL改写规则的优先级。 优先级设置具有唯一性，不支持多条回源URL改写规则设置同一优先级，且优先级不能输入为空。 多条规则下，不同规则中的相同资源内容，CDN按照优先级高的规则执行URL改写。 取值为1~100之间的整数，数值越大优先级越高。
    * matchType  匹配类型 all：所有文件 file_path：URL路径 wildcard：通配符
    * sourceUrl  需要替换的URL。 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过512个字符。 支持通配符\\*匹配，如：/test/\\*_/\\*.mp4。 匹配方式为“URL路径”时，不支持配置参数。
    * targetUrl  以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过256个字符。 通配符 * 可通过$n捕获（n=1,2,3...，例如：/newtest/$1/$2.jpg）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'priority' => 'int',
            'matchType' => 'string',
            'sourceUrl' => 'string',
            'targetUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * priority  回源URL改写规则的优先级。 优先级设置具有唯一性，不支持多条回源URL改写规则设置同一优先级，且优先级不能输入为空。 多条规则下，不同规则中的相同资源内容，CDN按照优先级高的规则执行URL改写。 取值为1~100之间的整数，数值越大优先级越高。
    * matchType  匹配类型 all：所有文件 file_path：URL路径 wildcard：通配符
    * sourceUrl  需要替换的URL。 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过512个字符。 支持通配符\\*匹配，如：/test/\\*_/\\*.mp4。 匹配方式为“URL路径”时，不支持配置参数。
    * targetUrl  以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过256个字符。 通配符 * 可通过$n捕获（n=1,2,3...，例如：/newtest/$1/$2.jpg）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'priority' => 'int32',
        'matchType' => null,
        'sourceUrl' => null,
        'targetUrl' => null
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
    * priority  回源URL改写规则的优先级。 优先级设置具有唯一性，不支持多条回源URL改写规则设置同一优先级，且优先级不能输入为空。 多条规则下，不同规则中的相同资源内容，CDN按照优先级高的规则执行URL改写。 取值为1~100之间的整数，数值越大优先级越高。
    * matchType  匹配类型 all：所有文件 file_path：URL路径 wildcard：通配符
    * sourceUrl  需要替换的URL。 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过512个字符。 支持通配符\\*匹配，如：/test/\\*_/\\*.mp4。 匹配方式为“URL路径”时，不支持配置参数。
    * targetUrl  以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过256个字符。 通配符 * 可通过$n捕获（n=1,2,3...，例如：/newtest/$1/$2.jpg）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'priority' => 'priority',
            'matchType' => 'match_type',
            'sourceUrl' => 'source_url',
            'targetUrl' => 'target_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * priority  回源URL改写规则的优先级。 优先级设置具有唯一性，不支持多条回源URL改写规则设置同一优先级，且优先级不能输入为空。 多条规则下，不同规则中的相同资源内容，CDN按照优先级高的规则执行URL改写。 取值为1~100之间的整数，数值越大优先级越高。
    * matchType  匹配类型 all：所有文件 file_path：URL路径 wildcard：通配符
    * sourceUrl  需要替换的URL。 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过512个字符。 支持通配符\\*匹配，如：/test/\\*_/\\*.mp4。 匹配方式为“URL路径”时，不支持配置参数。
    * targetUrl  以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过256个字符。 通配符 * 可通过$n捕获（n=1,2,3...，例如：/newtest/$1/$2.jpg）。
    *
    * @var string[]
    */
    protected static $setters = [
            'priority' => 'setPriority',
            'matchType' => 'setMatchType',
            'sourceUrl' => 'setSourceUrl',
            'targetUrl' => 'setTargetUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * priority  回源URL改写规则的优先级。 优先级设置具有唯一性，不支持多条回源URL改写规则设置同一优先级，且优先级不能输入为空。 多条规则下，不同规则中的相同资源内容，CDN按照优先级高的规则执行URL改写。 取值为1~100之间的整数，数值越大优先级越高。
    * matchType  匹配类型 all：所有文件 file_path：URL路径 wildcard：通配符
    * sourceUrl  需要替换的URL。 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过512个字符。 支持通配符\\*匹配，如：/test/\\*_/\\*.mp4。 匹配方式为“URL路径”时，不支持配置参数。
    * targetUrl  以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过256个字符。 通配符 * 可通过$n捕获（n=1,2,3...，例如：/newtest/$1/$2.jpg）。
    *
    * @var string[]
    */
    protected static $getters = [
            'priority' => 'getPriority',
            'matchType' => 'getMatchType',
            'sourceUrl' => 'getSourceUrl',
            'targetUrl' => 'getTargetUrl'
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['targetUrl'] = isset($data['targetUrl']) ? $data['targetUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['matchType'] === null) {
            $invalidProperties[] = "'matchType' can't be null";
        }
        if ($this->container['targetUrl'] === null) {
            $invalidProperties[] = "'targetUrl' can't be null";
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
    * Gets priority
    *  回源URL改写规则的优先级。 优先级设置具有唯一性，不支持多条回源URL改写规则设置同一优先级，且优先级不能输入为空。 多条规则下，不同规则中的相同资源内容，CDN按照优先级高的规则执行URL改写。 取值为1~100之间的整数，数值越大优先级越高。
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
    * @param int $priority 回源URL改写规则的优先级。 优先级设置具有唯一性，不支持多条回源URL改写规则设置同一优先级，且优先级不能输入为空。 多条规则下，不同规则中的相同资源内容，CDN按照优先级高的规则执行URL改写。 取值为1~100之间的整数，数值越大优先级越高。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets matchType
    *  匹配类型 all：所有文件 file_path：URL路径 wildcard：通配符
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
    * @param string $matchType 匹配类型 all：所有文件 file_path：URL路径 wildcard：通配符
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  需要替换的URL。 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过512个字符。 支持通配符\\*匹配，如：/test/\\*_/\\*.mp4。 匹配方式为“URL路径”时，不支持配置参数。
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl 需要替换的URL。 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过512个字符。 支持通配符\\*匹配，如：/test/\\*_/\\*.mp4。 匹配方式为“URL路径”时，不支持配置参数。
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets targetUrl
    *  以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过256个字符。 通配符 * 可通过$n捕获（n=1,2,3...，例如：/newtest/$1/$2.jpg）。
    *
    * @return string
    */
    public function getTargetUrl()
    {
        return $this->container['targetUrl'];
    }

    /**
    * Sets targetUrl
    *
    * @param string $targetUrl 以正斜线（/）开头的URL，不含http(s)://头及域名。 长度不超过256个字符。 通配符 * 可通过$n捕获（n=1,2,3...，例如：/newtest/$1/$2.jpg）。
    *
    * @return $this
    */
    public function setTargetUrl($targetUrl)
    {
        $this->container['targetUrl'] = $targetUrl;
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

