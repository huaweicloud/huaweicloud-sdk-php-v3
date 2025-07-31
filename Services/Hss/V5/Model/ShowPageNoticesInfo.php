<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPageNoticesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPageNoticesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageLocation  页面位置
    * type  通知类型，包含如下两种。 - links :超链接 - text  :文本
    * content  通知内容
    * title  通知标题
    * url  超链接
    * level  通知等级，包含如下3种。 - error :紧急 - warn :重要 - prompt :提示
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageLocation' => 'string',
            'type' => 'string',
            'content' => 'string',
            'title' => 'string',
            'url' => 'string',
            'level' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageLocation  页面位置
    * type  通知类型，包含如下两种。 - links :超链接 - text  :文本
    * content  通知内容
    * title  通知标题
    * url  超链接
    * level  通知等级，包含如下3种。 - error :紧急 - warn :重要 - prompt :提示
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageLocation' => null,
        'type' => null,
        'content' => null,
        'title' => null,
        'url' => null,
        'level' => null
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
    * pageLocation  页面位置
    * type  通知类型，包含如下两种。 - links :超链接 - text  :文本
    * content  通知内容
    * title  通知标题
    * url  超链接
    * level  通知等级，包含如下3种。 - error :紧急 - warn :重要 - prompt :提示
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageLocation' => 'page_location',
            'type' => 'type',
            'content' => 'content',
            'title' => 'title',
            'url' => 'url',
            'level' => 'level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageLocation  页面位置
    * type  通知类型，包含如下两种。 - links :超链接 - text  :文本
    * content  通知内容
    * title  通知标题
    * url  超链接
    * level  通知等级，包含如下3种。 - error :紧急 - warn :重要 - prompt :提示
    *
    * @var string[]
    */
    protected static $setters = [
            'pageLocation' => 'setPageLocation',
            'type' => 'setType',
            'content' => 'setContent',
            'title' => 'setTitle',
            'url' => 'setUrl',
            'level' => 'setLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageLocation  页面位置
    * type  通知类型，包含如下两种。 - links :超链接 - text  :文本
    * content  通知内容
    * title  通知标题
    * url  超链接
    * level  通知等级，包含如下3种。 - error :紧急 - warn :重要 - prompt :提示
    *
    * @var string[]
    */
    protected static $getters = [
            'pageLocation' => 'getPageLocation',
            'type' => 'getType',
            'content' => 'getContent',
            'title' => 'getTitle',
            'url' => 'getUrl',
            'level' => 'getLevel'
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
        $this->container['pageLocation'] = isset($data['pageLocation']) ? $data['pageLocation'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageLocation']) && (mb_strlen($this->container['pageLocation']) > 32)) {
                $invalidProperties[] = "invalid value for 'pageLocation', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['pageLocation']) && (mb_strlen($this->container['pageLocation']) < 1)) {
                $invalidProperties[] = "invalid value for 'pageLocation', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 32768)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 128)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 32)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 1)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 1.";
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
    * Gets pageLocation
    *  页面位置
    *
    * @return string|null
    */
    public function getPageLocation()
    {
        return $this->container['pageLocation'];
    }

    /**
    * Sets pageLocation
    *
    * @param string|null $pageLocation 页面位置
    *
    * @return $this
    */
    public function setPageLocation($pageLocation)
    {
        $this->container['pageLocation'] = $pageLocation;
        return $this;
    }

    /**
    * Gets type
    *  通知类型，包含如下两种。 - links :超链接 - text  :文本
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 通知类型，包含如下两种。 - links :超链接 - text  :文本
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  通知内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 通知内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets title
    *  通知标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 通知标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets url
    *  超链接
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
    * @param string|null $url 超链接
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets level
    *  通知等级，包含如下3种。 - error :紧急 - warn :重要 - prompt :提示
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 通知等级，包含如下3种。 - error :紧急 - warn :重要 - prompt :提示
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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

