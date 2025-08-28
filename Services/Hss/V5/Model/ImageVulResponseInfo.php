<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageVulResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageVulResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-512
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-512
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'imageName' => 'string',
            'vulId' => 'string',
            'vulName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-512
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-512
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'imageName' => null,
        'vulId' => null,
        'vulName' => null
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
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-512
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-512
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-512
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-512
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-512
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-512
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 512)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 512)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
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
    * Gets imageId
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-512
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-512
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-512
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞id **取值范围**: 字符长度0-512
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞id **取值范围**: 字符长度0-512
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
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

