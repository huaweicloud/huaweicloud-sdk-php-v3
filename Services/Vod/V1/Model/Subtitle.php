<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Subtitle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Subtitle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  字幕id。  取值范围：[1,8]。
    * type  字幕文件类型，目前暂只支持“SRT”。
    * language  字幕语音类型。  取值如下： - CN：表示中文字幕。 - EN：表示英文字幕。
    * md5  字幕文件的MD5值。
    * description  字幕描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'type' => 'string',
            'language' => 'string',
            'md5' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  字幕id。  取值范围：[1,8]。
    * type  字幕文件类型，目前暂只支持“SRT”。
    * language  字幕语音类型。  取值如下： - CN：表示中文字幕。 - EN：表示英文字幕。
    * md5  字幕文件的MD5值。
    * description  字幕描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'language' => null,
        'md5' => null,
        'description' => null
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
    * id  字幕id。  取值范围：[1,8]。
    * type  字幕文件类型，目前暂只支持“SRT”。
    * language  字幕语音类型。  取值如下： - CN：表示中文字幕。 - EN：表示英文字幕。
    * md5  字幕文件的MD5值。
    * description  字幕描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'language' => 'language',
            'md5' => 'md5',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  字幕id。  取值范围：[1,8]。
    * type  字幕文件类型，目前暂只支持“SRT”。
    * language  字幕语音类型。  取值如下： - CN：表示中文字幕。 - EN：表示英文字幕。
    * md5  字幕文件的MD5值。
    * description  字幕描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'language' => 'setLanguage',
            'md5' => 'setMd5',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  字幕id。  取值范围：[1,8]。
    * type  字幕文件类型，目前暂只支持“SRT”。
    * language  字幕语音类型。  取值如下： - CN：表示中文字幕。 - EN：表示英文字幕。
    * md5  字幕文件的MD5值。
    * description  字幕描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'language' => 'getLanguage',
            'md5' => 'getMd5',
            'description' => 'getDescription'
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
    const TYPE_SRT = 'SRT';
    const LANGUAGE_CN = 'CN';
    const LANGUAGE_EN = 'EN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SRT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_CN,
            self::LANGUAGE_EN,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  字幕id。  取值范围：[1,8]。
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 字幕id。  取值范围：[1,8]。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  字幕文件类型，目前暂只支持“SRT”。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 字幕文件类型，目前暂只支持“SRT”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets language
    *  字幕语音类型。  取值如下： - CN：表示中文字幕。 - EN：表示英文字幕。
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 字幕语音类型。  取值如下： - CN：表示中文字幕。 - EN：表示英文字幕。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets md5
    *  字幕文件的MD5值。
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 字幕文件的MD5值。
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
        return $this;
    }

    /**
    * Gets description
    *  字幕描述。
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
    * @param string|null $description 字幕描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

