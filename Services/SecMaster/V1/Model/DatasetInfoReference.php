<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatasetInfoReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatasetInfo_reference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csvcDisplay  云服务描述
    * sourceDisplay  数据源描述
    * link  链接
    * csvcHelp  云服务帮助说明
    * sourceHelp  数据源帮助说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csvcDisplay' => 'string',
            'sourceDisplay' => 'string',
            'link' => 'string',
            'csvcHelp' => 'string',
            'sourceHelp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csvcDisplay  云服务描述
    * sourceDisplay  数据源描述
    * link  链接
    * csvcHelp  云服务帮助说明
    * sourceHelp  数据源帮助说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csvcDisplay' => null,
        'sourceDisplay' => null,
        'link' => null,
        'csvcHelp' => null,
        'sourceHelp' => null
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
    * csvcDisplay  云服务描述
    * sourceDisplay  数据源描述
    * link  链接
    * csvcHelp  云服务帮助说明
    * sourceHelp  数据源帮助说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csvcDisplay' => 'csvc_display',
            'sourceDisplay' => 'source_display',
            'link' => 'link',
            'csvcHelp' => 'csvc_help',
            'sourceHelp' => 'source_help'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csvcDisplay  云服务描述
    * sourceDisplay  数据源描述
    * link  链接
    * csvcHelp  云服务帮助说明
    * sourceHelp  数据源帮助说明
    *
    * @var string[]
    */
    protected static $setters = [
            'csvcDisplay' => 'setCsvcDisplay',
            'sourceDisplay' => 'setSourceDisplay',
            'link' => 'setLink',
            'csvcHelp' => 'setCsvcHelp',
            'sourceHelp' => 'setSourceHelp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csvcDisplay  云服务描述
    * sourceDisplay  数据源描述
    * link  链接
    * csvcHelp  云服务帮助说明
    * sourceHelp  数据源帮助说明
    *
    * @var string[]
    */
    protected static $getters = [
            'csvcDisplay' => 'getCsvcDisplay',
            'sourceDisplay' => 'getSourceDisplay',
            'link' => 'getLink',
            'csvcHelp' => 'getCsvcHelp',
            'sourceHelp' => 'getSourceHelp'
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
        $this->container['csvcDisplay'] = isset($data['csvcDisplay']) ? $data['csvcDisplay'] : null;
        $this->container['sourceDisplay'] = isset($data['sourceDisplay']) ? $data['sourceDisplay'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['csvcHelp'] = isset($data['csvcHelp']) ? $data['csvcHelp'] : null;
        $this->container['sourceHelp'] = isset($data['sourceHelp']) ? $data['sourceHelp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['csvcDisplay'] === null) {
            $invalidProperties[] = "'csvcDisplay' can't be null";
        }
        if ($this->container['sourceDisplay'] === null) {
            $invalidProperties[] = "'sourceDisplay' can't be null";
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
    * Gets csvcDisplay
    *  云服务描述
    *
    * @return string
    */
    public function getCsvcDisplay()
    {
        return $this->container['csvcDisplay'];
    }

    /**
    * Sets csvcDisplay
    *
    * @param string $csvcDisplay 云服务描述
    *
    * @return $this
    */
    public function setCsvcDisplay($csvcDisplay)
    {
        $this->container['csvcDisplay'] = $csvcDisplay;
        return $this;
    }

    /**
    * Gets sourceDisplay
    *  数据源描述
    *
    * @return string
    */
    public function getSourceDisplay()
    {
        return $this->container['sourceDisplay'];
    }

    /**
    * Sets sourceDisplay
    *
    * @param string $sourceDisplay 数据源描述
    *
    * @return $this
    */
    public function setSourceDisplay($sourceDisplay)
    {
        $this->container['sourceDisplay'] = $sourceDisplay;
        return $this;
    }

    /**
    * Gets link
    *  链接
    *
    * @return string|null
    */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
    * Sets link
    *
    * @param string|null $link 链接
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets csvcHelp
    *  云服务帮助说明
    *
    * @return string|null
    */
    public function getCsvcHelp()
    {
        return $this->container['csvcHelp'];
    }

    /**
    * Sets csvcHelp
    *
    * @param string|null $csvcHelp 云服务帮助说明
    *
    * @return $this
    */
    public function setCsvcHelp($csvcHelp)
    {
        $this->container['csvcHelp'] = $csvcHelp;
        return $this;
    }

    /**
    * Gets sourceHelp
    *  数据源帮助说明
    *
    * @return string|null
    */
    public function getSourceHelp()
    {
        return $this->container['sourceHelp'];
    }

    /**
    * Sets sourceHelp
    *
    * @param string|null $sourceHelp 数据源帮助说明
    *
    * @return $this
    */
    public function setSourceHelp($sourceHelp)
    {
        $this->container['sourceHelp'] = $sourceHelp;
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

