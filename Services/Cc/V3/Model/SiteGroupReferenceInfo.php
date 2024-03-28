<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SiteGroupReferenceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SiteGroupReferenceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源ID标识符。
    * description  实例描述。不支持 <>。
    * nameEn  功能说明：站点分组自定义的英文名字。 取值范围：1-255个字符。
    * nameCn  功能说明：站点分组自定义的中文名字。 取值范围：1-64个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'nameEn' => 'string',
            'nameCn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID标识符。
    * description  实例描述。不支持 <>。
    * nameEn  功能说明：站点分组自定义的英文名字。 取值范围：1-255个字符。
    * nameCn  功能说明：站点分组自定义的中文名字。 取值范围：1-64个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'nameEn' => null,
        'nameCn' => null
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
    * id  资源ID标识符。
    * description  实例描述。不支持 <>。
    * nameEn  功能说明：站点分组自定义的英文名字。 取值范围：1-255个字符。
    * nameCn  功能说明：站点分组自定义的中文名字。 取值范围：1-64个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'nameEn' => 'name_en',
            'nameCn' => 'name_cn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID标识符。
    * description  实例描述。不支持 <>。
    * nameEn  功能说明：站点分组自定义的英文名字。 取值范围：1-255个字符。
    * nameCn  功能说明：站点分组自定义的中文名字。 取值范围：1-64个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'nameEn' => 'setNameEn',
            'nameCn' => 'setNameCn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID标识符。
    * description  实例描述。不支持 <>。
    * nameEn  功能说明：站点分组自定义的英文名字。 取值范围：1-255个字符。
    * nameCn  功能说明：站点分组自定义的中文名字。 取值范围：1-64个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'nameEn' => 'getNameEn',
            'nameCn' => 'getNameCn'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
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
    *  资源ID标识符。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 资源ID标识符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets nameEn
    *  功能说明：站点分组自定义的英文名字。 取值范围：1-255个字符。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 功能说明：站点分组自定义的英文名字。 取值范围：1-255个字符。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nameCn
    *  功能说明：站点分组自定义的中文名字。 取值范围：1-64个字符。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn 功能说明：站点分组自定义的中文名字。 取值范围：1-64个字符。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
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

