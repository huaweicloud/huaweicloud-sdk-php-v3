<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCollectorParserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCollectorParserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelReferCount  数值
    * description  描述信息
    * modules  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelReferCount' => 'int',
            'description' => 'string',
            'modules' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]',
            'parserId' => 'string',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelReferCount  数值
    * description  描述信息
    * modules  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelReferCount' => 'int64',
        'description' => null,
        'modules' => null,
        'parserId' => null,
        'title' => null
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
    * channelReferCount  数值
    * description  描述信息
    * modules  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelReferCount' => 'channel_refer_count',
            'description' => 'description',
            'modules' => 'modules',
            'parserId' => 'parser_id',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelReferCount  数值
    * description  描述信息
    * modules  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $setters = [
            'channelReferCount' => 'setChannelReferCount',
            'description' => 'setDescription',
            'modules' => 'setModules',
            'parserId' => 'setParserId',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelReferCount  数值
    * description  描述信息
    * modules  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $getters = [
            'channelReferCount' => 'getChannelReferCount',
            'description' => 'getDescription',
            'modules' => 'getModules',
            'parserId' => 'getParserId',
            'title' => 'getTitle'
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
        $this->container['channelReferCount'] = isset($data['channelReferCount']) ? $data['channelReferCount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['parserId'] = isset($data['parserId']) ? $data['parserId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['channelReferCount']) && ($this->container['channelReferCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'channelReferCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['channelReferCount']) && ($this->container['channelReferCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'channelReferCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parserId']) && (mb_strlen($this->container['parserId']) > 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['parserId']) && (mb_strlen($this->container['parserId']) < 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 5)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 5.";
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
    * Gets channelReferCount
    *  数值
    *
    * @return int|null
    */
    public function getChannelReferCount()
    {
        return $this->container['channelReferCount'];
    }

    /**
    * Sets channelReferCount
    *
    * @param int|null $channelReferCount 数值
    *
    * @return $this
    */
    public function setChannelReferCount($channelReferCount)
    {
        $this->container['channelReferCount'] = $channelReferCount;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets modules
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]|null
    */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
    * Sets modules
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]|null $modules 相关描述信息
    *
    * @return $this
    */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;
        return $this;
    }

    /**
    * Gets parserId
    *  UUID
    *
    * @return string|null
    */
    public function getParserId()
    {
        return $this->container['parserId'];
    }

    /**
    * Sets parserId
    *
    * @param string|null $parserId UUID
    *
    * @return $this
    */
    public function setParserId($parserId)
    {
        $this->container['parserId'] = $parserId;
        return $this;
    }

    /**
    * Gets title
    *  相关标题
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
    * @param string|null $title 相关标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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

