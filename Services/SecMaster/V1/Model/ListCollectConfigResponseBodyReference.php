<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponseBodyReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponseBody_reference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csvcDisplay  云产品名称
    * csvcHzzelp  云产品描述
    * link  链接
    * sourceDisplay  日志名称
    * sourceHelp  日志描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csvcDisplay' => 'string',
            'csvcHzzelp' => 'string',
            'link' => 'string',
            'sourceDisplay' => 'string',
            'sourceHelp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csvcDisplay  云产品名称
    * csvcHzzelp  云产品描述
    * link  链接
    * sourceDisplay  日志名称
    * sourceHelp  日志描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csvcDisplay' => null,
        'csvcHzzelp' => null,
        'link' => null,
        'sourceDisplay' => null,
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
    * csvcDisplay  云产品名称
    * csvcHzzelp  云产品描述
    * link  链接
    * sourceDisplay  日志名称
    * sourceHelp  日志描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csvcDisplay' => 'csvc_display',
            'csvcHzzelp' => 'csvc_hzzelp',
            'link' => 'link',
            'sourceDisplay' => 'source_display',
            'sourceHelp' => 'source_help'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csvcDisplay  云产品名称
    * csvcHzzelp  云产品描述
    * link  链接
    * sourceDisplay  日志名称
    * sourceHelp  日志描述
    *
    * @var string[]
    */
    protected static $setters = [
            'csvcDisplay' => 'setCsvcDisplay',
            'csvcHzzelp' => 'setCsvcHzzelp',
            'link' => 'setLink',
            'sourceDisplay' => 'setSourceDisplay',
            'sourceHelp' => 'setSourceHelp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csvcDisplay  云产品名称
    * csvcHzzelp  云产品描述
    * link  链接
    * sourceDisplay  日志名称
    * sourceHelp  日志描述
    *
    * @var string[]
    */
    protected static $getters = [
            'csvcDisplay' => 'getCsvcDisplay',
            'csvcHzzelp' => 'getCsvcHzzelp',
            'link' => 'getLink',
            'sourceDisplay' => 'getSourceDisplay',
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
        $this->container['csvcHzzelp'] = isset($data['csvcHzzelp']) ? $data['csvcHzzelp'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['sourceDisplay'] = isset($data['sourceDisplay']) ? $data['sourceDisplay'] : null;
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
            if (!is_null($this->container['csvcDisplay']) && (mb_strlen($this->container['csvcDisplay']) > 64)) {
                $invalidProperties[] = "invalid value for 'csvcDisplay', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['csvcDisplay']) && (mb_strlen($this->container['csvcDisplay']) < 0)) {
                $invalidProperties[] = "invalid value for 'csvcDisplay', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['csvcHzzelp']) && (mb_strlen($this->container['csvcHzzelp']) > 64)) {
                $invalidProperties[] = "invalid value for 'csvcHzzelp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['csvcHzzelp']) && (mb_strlen($this->container['csvcHzzelp']) < 0)) {
                $invalidProperties[] = "invalid value for 'csvcHzzelp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['link']) && (mb_strlen($this->container['link']) > 64)) {
                $invalidProperties[] = "invalid value for 'link', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['link']) && (mb_strlen($this->container['link']) < 0)) {
                $invalidProperties[] = "invalid value for 'link', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceDisplay']) && (mb_strlen($this->container['sourceDisplay']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceDisplay', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceDisplay']) && (mb_strlen($this->container['sourceDisplay']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceDisplay', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceHelp']) && (mb_strlen($this->container['sourceHelp']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceHelp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceHelp']) && (mb_strlen($this->container['sourceHelp']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceHelp', the character length must be bigger than or equal to 0.";
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
    *  云产品名称
    *
    * @return string|null
    */
    public function getCsvcDisplay()
    {
        return $this->container['csvcDisplay'];
    }

    /**
    * Sets csvcDisplay
    *
    * @param string|null $csvcDisplay 云产品名称
    *
    * @return $this
    */
    public function setCsvcDisplay($csvcDisplay)
    {
        $this->container['csvcDisplay'] = $csvcDisplay;
        return $this;
    }

    /**
    * Gets csvcHzzelp
    *  云产品描述
    *
    * @return string|null
    */
    public function getCsvcHzzelp()
    {
        return $this->container['csvcHzzelp'];
    }

    /**
    * Sets csvcHzzelp
    *
    * @param string|null $csvcHzzelp 云产品描述
    *
    * @return $this
    */
    public function setCsvcHzzelp($csvcHzzelp)
    {
        $this->container['csvcHzzelp'] = $csvcHzzelp;
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
    * Gets sourceDisplay
    *  日志名称
    *
    * @return string|null
    */
    public function getSourceDisplay()
    {
        return $this->container['sourceDisplay'];
    }

    /**
    * Sets sourceDisplay
    *
    * @param string|null $sourceDisplay 日志名称
    *
    * @return $this
    */
    public function setSourceDisplay($sourceDisplay)
    {
        $this->container['sourceDisplay'] = $sourceDisplay;
        return $this;
    }

    /**
    * Gets sourceHelp
    *  日志描述
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
    * @param string|null $sourceHelp 日志描述
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

