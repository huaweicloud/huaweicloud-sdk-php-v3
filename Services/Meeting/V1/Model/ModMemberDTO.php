<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModMemberDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModMemberDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称。
    * englishName  英文名称。
    * signature  签名。
    * title  职位。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'englishName' => 'string',
            'signature' => 'string',
            'title' => 'string',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称。
    * englishName  英文名称。
    * signature  签名。
    * title  职位。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'englishName' => null,
        'signature' => null,
        'title' => null,
        'desc' => null
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
    * name  名称。
    * englishName  英文名称。
    * signature  签名。
    * title  职位。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'englishName' => 'englishName',
            'signature' => 'signature',
            'title' => 'title',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称。
    * englishName  英文名称。
    * signature  签名。
    * title  职位。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'englishName' => 'setEnglishName',
            'signature' => 'setSignature',
            'title' => 'setTitle',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称。
    * englishName  英文名称。
    * signature  签名。
    * title  职位。
    * desc  备注。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'englishName' => 'getEnglishName',
            'signature' => 'getSignature',
            'title' => 'getTitle',
            'desc' => 'getDesc'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['englishName'] = isset($data['englishName']) ? $data['englishName'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['englishName']) && (mb_strlen($this->container['englishName']) > 64)) {
                $invalidProperties[] = "invalid value for 'englishName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['englishName']) && (mb_strlen($this->container['englishName']) < 0)) {
                $invalidProperties[] = "invalid value for 'englishName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) > 512)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) < 0)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 32)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 128)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  名称。
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
    * @param string $name 名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets englishName
    *  英文名称。
    *
    * @return string|null
    */
    public function getEnglishName()
    {
        return $this->container['englishName'];
    }

    /**
    * Sets englishName
    *
    * @param string|null $englishName 英文名称。
    *
    * @return $this
    */
    public function setEnglishName($englishName)
    {
        $this->container['englishName'] = $englishName;
        return $this;
    }

    /**
    * Gets signature
    *  签名。
    *
    * @return string|null
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string|null $signature 签名。
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
        return $this;
    }

    /**
    * Gets title
    *  职位。
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
    * @param string|null $title 职位。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets desc
    *  备注。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 备注。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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

