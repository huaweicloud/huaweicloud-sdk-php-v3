<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunModerationAudioRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunModerationAudioRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  与url二选一  语音文件Base64编码字符串。要求base64编码后大小不超过4M。语音时长不超过1分钟。
    * url  与data二选一  语音的URL路径，目前支持对服务授权访问华为云上OBS的URL，华为云上OBS提供的临时授权访问的URL和匿名公开授权的URL。 OBS服务的访问权限设置请参见配置OBS访问权限。 出于安全的考虑，当前服务不支持从公网上任意URL读取数据。
    * config  config
    * categories  审核场景。 当前支持的场景有默认场景和用户自定义场景： ● 默认场景为：   – politics：涉政   – porn：涉黄   – ad：广告   – abuse：辱骂   – contraband：违禁品 ● 用户自定义场景为：自定义词库。 说明 自定义词库的创建和使用请参见配置自定义词库。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => 'string',
            'url' => 'string',
            'config' => '\HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioRequestBodyConfig',
            'categories' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  与url二选一  语音文件Base64编码字符串。要求base64编码后大小不超过4M。语音时长不超过1分钟。
    * url  与data二选一  语音的URL路径，目前支持对服务授权访问华为云上OBS的URL，华为云上OBS提供的临时授权访问的URL和匿名公开授权的URL。 OBS服务的访问权限设置请参见配置OBS访问权限。 出于安全的考虑，当前服务不支持从公网上任意URL读取数据。
    * config  config
    * categories  审核场景。 当前支持的场景有默认场景和用户自定义场景： ● 默认场景为：   – politics：涉政   – porn：涉黄   – ad：广告   – abuse：辱骂   – contraband：违禁品 ● 用户自定义场景为：自定义词库。 说明 自定义词库的创建和使用请参见配置自定义词库。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'url' => null,
        'config' => null,
        'categories' => null
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
    * data  与url二选一  语音文件Base64编码字符串。要求base64编码后大小不超过4M。语音时长不超过1分钟。
    * url  与data二选一  语音的URL路径，目前支持对服务授权访问华为云上OBS的URL，华为云上OBS提供的临时授权访问的URL和匿名公开授权的URL。 OBS服务的访问权限设置请参见配置OBS访问权限。 出于安全的考虑，当前服务不支持从公网上任意URL读取数据。
    * config  config
    * categories  审核场景。 当前支持的场景有默认场景和用户自定义场景： ● 默认场景为：   – politics：涉政   – porn：涉黄   – ad：广告   – abuse：辱骂   – contraband：违禁品 ● 用户自定义场景为：自定义词库。 说明 自定义词库的创建和使用请参见配置自定义词库。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'url' => 'url',
            'config' => 'config',
            'categories' => 'categories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  与url二选一  语音文件Base64编码字符串。要求base64编码后大小不超过4M。语音时长不超过1分钟。
    * url  与data二选一  语音的URL路径，目前支持对服务授权访问华为云上OBS的URL，华为云上OBS提供的临时授权访问的URL和匿名公开授权的URL。 OBS服务的访问权限设置请参见配置OBS访问权限。 出于安全的考虑，当前服务不支持从公网上任意URL读取数据。
    * config  config
    * categories  审核场景。 当前支持的场景有默认场景和用户自定义场景： ● 默认场景为：   – politics：涉政   – porn：涉黄   – ad：广告   – abuse：辱骂   – contraband：违禁品 ● 用户自定义场景为：自定义词库。 说明 自定义词库的创建和使用请参见配置自定义词库。
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'url' => 'setUrl',
            'config' => 'setConfig',
            'categories' => 'setCategories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  与url二选一  语音文件Base64编码字符串。要求base64编码后大小不超过4M。语音时长不超过1分钟。
    * url  与data二选一  语音的URL路径，目前支持对服务授权访问华为云上OBS的URL，华为云上OBS提供的临时授权访问的URL和匿名公开授权的URL。 OBS服务的访问权限设置请参见配置OBS访问权限。 出于安全的考虑，当前服务不支持从公网上任意URL读取数据。
    * config  config
    * categories  审核场景。 当前支持的场景有默认场景和用户自定义场景： ● 默认场景为：   – politics：涉政   – porn：涉黄   – ad：广告   – abuse：辱骂   – contraband：违禁品 ● 用户自定义场景为：自定义词库。 说明 自定义词库的创建和使用请参见配置自定义词库。
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'url' => 'getUrl',
            'config' => 'getConfig',
            'categories' => 'getCategories'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
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
    * Gets data
    *  与url二选一  语音文件Base64编码字符串。要求base64编码后大小不超过4M。语音时长不超过1分钟。
    *
    * @return string|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string|null $data 与url二选一  语音文件Base64编码字符串。要求base64编码后大小不超过4M。语音时长不超过1分钟。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets url
    *  与data二选一  语音的URL路径，目前支持对服务授权访问华为云上OBS的URL，华为云上OBS提供的临时授权访问的URL和匿名公开授权的URL。 OBS服务的访问权限设置请参见配置OBS访问权限。 出于安全的考虑，当前服务不支持从公网上任意URL读取数据。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 与data二选一  语音的URL路径，目前支持对服务授权访问华为云上OBS的URL，华为云上OBS提供的临时授权访问的URL和匿名公开授权的URL。 OBS服务的访问权限设置请参见配置OBS访问权限。 出于安全的考虑，当前服务不支持从公网上任意URL读取数据。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioRequestBodyConfig
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioRequestBodyConfig $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets categories
    *  审核场景。 当前支持的场景有默认场景和用户自定义场景： ● 默认场景为：   – politics：涉政   – porn：涉黄   – ad：广告   – abuse：辱骂   – contraband：违禁品 ● 用户自定义场景为：自定义词库。 说明 自定义词库的创建和使用请参见配置自定义词库。
    *
    * @return string[]|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string[]|null $categories 审核场景。 当前支持的场景有默认场景和用户自定义场景： ● 默认场景为：   – politics：涉政   – porn：涉黄   – ad：广告   – abuse：辱骂   – contraband：违禁品 ● 用户自定义场景为：自定义词库。 说明 自定义词库的创建和使用请参见配置自定义词库。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
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

