<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecCheckitemModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecCheckitemModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkitemUuid  检查项的uuid
    * createTime  遵从包创建时间戳
    * language  遵从包创建的语言环境
    * name  遵从包名称
    * removeTime  遵从包删除时间戳
    * specificationUuid  遵从包的uuid
    * uuid  uuid
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkitemUuid' => 'string',
            'createTime' => 'string',
            'language' => 'string',
            'name' => 'string',
            'removeTime' => 'string',
            'specificationUuid' => 'string',
            'uuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkitemUuid  检查项的uuid
    * createTime  遵从包创建时间戳
    * language  遵从包创建的语言环境
    * name  遵从包名称
    * removeTime  遵从包删除时间戳
    * specificationUuid  遵从包的uuid
    * uuid  uuid
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkitemUuid' => null,
        'createTime' => null,
        'language' => null,
        'name' => null,
        'removeTime' => null,
        'specificationUuid' => null,
        'uuid' => null
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
    * checkitemUuid  检查项的uuid
    * createTime  遵从包创建时间戳
    * language  遵从包创建的语言环境
    * name  遵从包名称
    * removeTime  遵从包删除时间戳
    * specificationUuid  遵从包的uuid
    * uuid  uuid
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkitemUuid' => 'checkitem_uuid',
            'createTime' => 'create_time',
            'language' => 'language',
            'name' => 'name',
            'removeTime' => 'remove_time',
            'specificationUuid' => 'specification_uuid',
            'uuid' => 'uuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkitemUuid  检查项的uuid
    * createTime  遵从包创建时间戳
    * language  遵从包创建的语言环境
    * name  遵从包名称
    * removeTime  遵从包删除时间戳
    * specificationUuid  遵从包的uuid
    * uuid  uuid
    *
    * @var string[]
    */
    protected static $setters = [
            'checkitemUuid' => 'setCheckitemUuid',
            'createTime' => 'setCreateTime',
            'language' => 'setLanguage',
            'name' => 'setName',
            'removeTime' => 'setRemoveTime',
            'specificationUuid' => 'setSpecificationUuid',
            'uuid' => 'setUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkitemUuid  检查项的uuid
    * createTime  遵从包创建时间戳
    * language  遵从包创建的语言环境
    * name  遵从包名称
    * removeTime  遵从包删除时间戳
    * specificationUuid  遵从包的uuid
    * uuid  uuid
    *
    * @var string[]
    */
    protected static $getters = [
            'checkitemUuid' => 'getCheckitemUuid',
            'createTime' => 'getCreateTime',
            'language' => 'getLanguage',
            'name' => 'getName',
            'removeTime' => 'getRemoveTime',
            'specificationUuid' => 'getSpecificationUuid',
            'uuid' => 'getUuid'
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
        $this->container['checkitemUuid'] = isset($data['checkitemUuid']) ? $data['checkitemUuid'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['removeTime'] = isset($data['removeTime']) ? $data['removeTime'] : null;
        $this->container['specificationUuid'] = isset($data['specificationUuid']) ? $data['specificationUuid'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['checkitemUuid']) && (mb_strlen($this->container['checkitemUuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'checkitemUuid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['checkitemUuid']) && (mb_strlen($this->container['checkitemUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkitemUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 64)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 0)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['removeTime']) && (mb_strlen($this->container['removeTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'removeTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['removeTime']) && (mb_strlen($this->container['removeTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'removeTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specificationUuid']) && (mb_strlen($this->container['specificationUuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'specificationUuid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['specificationUuid']) && (mb_strlen($this->container['specificationUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'specificationUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
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
    * Gets checkitemUuid
    *  检查项的uuid
    *
    * @return string|null
    */
    public function getCheckitemUuid()
    {
        return $this->container['checkitemUuid'];
    }

    /**
    * Sets checkitemUuid
    *
    * @param string|null $checkitemUuid 检查项的uuid
    *
    * @return $this
    */
    public function setCheckitemUuid($checkitemUuid)
    {
        $this->container['checkitemUuid'] = $checkitemUuid;
        return $this;
    }

    /**
    * Gets createTime
    *  遵从包创建时间戳
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 遵从包创建时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets language
    *  遵从包创建的语言环境
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 遵从包创建的语言环境
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets name
    *  遵从包名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 遵从包名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets removeTime
    *  遵从包删除时间戳
    *
    * @return string|null
    */
    public function getRemoveTime()
    {
        return $this->container['removeTime'];
    }

    /**
    * Sets removeTime
    *
    * @param string|null $removeTime 遵从包删除时间戳
    *
    * @return $this
    */
    public function setRemoveTime($removeTime)
    {
        $this->container['removeTime'] = $removeTime;
        return $this;
    }

    /**
    * Gets specificationUuid
    *  遵从包的uuid
    *
    * @return string|null
    */
    public function getSpecificationUuid()
    {
        return $this->container['specificationUuid'];
    }

    /**
    * Sets specificationUuid
    *
    * @param string|null $specificationUuid 遵从包的uuid
    *
    * @return $this
    */
    public function setSpecificationUuid($specificationUuid)
    {
        $this->container['specificationUuid'] = $specificationUuid;
        return $this;
    }

    /**
    * Gets uuid
    *  uuid
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
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

