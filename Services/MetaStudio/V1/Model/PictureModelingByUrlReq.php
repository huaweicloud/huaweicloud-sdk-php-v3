<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PictureModelingByUrlReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PictureModelingByUrlReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pictureUrl  图片URL
    * styleId  风格ID
    * name  模型名称
    * notifyUrl  照片建模任务结束的回调地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pictureUrl' => 'string',
            'styleId' => 'string',
            'name' => 'string',
            'notifyUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pictureUrl  图片URL
    * styleId  风格ID
    * name  模型名称
    * notifyUrl  照片建模任务结束的回调地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pictureUrl' => null,
        'styleId' => null,
        'name' => null,
        'notifyUrl' => null
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
    * pictureUrl  图片URL
    * styleId  风格ID
    * name  模型名称
    * notifyUrl  照片建模任务结束的回调地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pictureUrl' => 'picture_url',
            'styleId' => 'style_id',
            'name' => 'name',
            'notifyUrl' => 'notify_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pictureUrl  图片URL
    * styleId  风格ID
    * name  模型名称
    * notifyUrl  照片建模任务结束的回调地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'pictureUrl' => 'setPictureUrl',
            'styleId' => 'setStyleId',
            'name' => 'setName',
            'notifyUrl' => 'setNotifyUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pictureUrl  图片URL
    * styleId  风格ID
    * name  模型名称
    * notifyUrl  照片建模任务结束的回调地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'pictureUrl' => 'getPictureUrl',
            'styleId' => 'getStyleId',
            'name' => 'getName',
            'notifyUrl' => 'getNotifyUrl'
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
        $this->container['pictureUrl'] = isset($data['pictureUrl']) ? $data['pictureUrl'] : null;
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notifyUrl'] = isset($data['notifyUrl']) ? $data['notifyUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pictureUrl'] === null) {
            $invalidProperties[] = "'pictureUrl' can't be null";
        }
            if ((mb_strlen($this->container['pictureUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'pictureUrl', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['pictureUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'pictureUrl', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['styleId'] === null) {
            $invalidProperties[] = "'styleId' can't be null";
        }
            if ((mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['styleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notifyUrl']) && (mb_strlen($this->container['notifyUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'notifyUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['notifyUrl']) && (mb_strlen($this->container['notifyUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'notifyUrl', the character length must be bigger than or equal to 0.";
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
    * Gets pictureUrl
    *  图片URL
    *
    * @return string
    */
    public function getPictureUrl()
    {
        return $this->container['pictureUrl'];
    }

    /**
    * Sets pictureUrl
    *
    * @param string $pictureUrl 图片URL
    *
    * @return $this
    */
    public function setPictureUrl($pictureUrl)
    {
        $this->container['pictureUrl'] = $pictureUrl;
        return $this;
    }

    /**
    * Gets styleId
    *  风格ID
    *
    * @return string
    */
    public function getStyleId()
    {
        return $this->container['styleId'];
    }

    /**
    * Sets styleId
    *
    * @param string $styleId 风格ID
    *
    * @return $this
    */
    public function setStyleId($styleId)
    {
        $this->container['styleId'] = $styleId;
        return $this;
    }

    /**
    * Gets name
    *  模型名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 模型名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets notifyUrl
    *  照片建模任务结束的回调地址。
    *
    * @return string|null
    */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
    * Sets notifyUrl
    *
    * @param string|null $notifyUrl 照片建模任务结束的回调地址。
    *
    * @return $this
    */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;
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

