<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthPackageLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthPackageLevel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * level  带宽包等级
    * nameCn  实例名字。
    * nameEn  实例名字。
    * displayPriority  展示优先级，数值越低，优先级越高。 铂金系列优先级范围：1-50 金牌系列优先级范围：51-100 银牌系列优先级范围：101-150 其他：大于151
    * description  描述。不支持 <>。
    * createdAt  创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'level' => 'string',
            'nameCn' => 'string',
            'nameEn' => 'string',
            'displayPriority' => 'int',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * level  带宽包等级
    * nameCn  实例名字。
    * nameEn  实例名字。
    * displayPriority  展示优先级，数值越低，优先级越高。 铂金系列优先级范围：1-50 金牌系列优先级范围：51-100 银牌系列优先级范围：101-150 其他：大于151
    * description  描述。不支持 <>。
    * createdAt  创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'level' => null,
        'nameCn' => null,
        'nameEn' => null,
        'displayPriority' => 'int32',
        'description' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  实例ID。
    * level  带宽包等级
    * nameCn  实例名字。
    * nameEn  实例名字。
    * displayPriority  展示优先级，数值越低，优先级越高。 铂金系列优先级范围：1-50 金牌系列优先级范围：51-100 银牌系列优先级范围：101-150 其他：大于151
    * description  描述。不支持 <>。
    * createdAt  创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'level' => 'level',
            'nameCn' => 'name_cn',
            'nameEn' => 'name_en',
            'displayPriority' => 'display_priority',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * level  带宽包等级
    * nameCn  实例名字。
    * nameEn  实例名字。
    * displayPriority  展示优先级，数值越低，优先级越高。 铂金系列优先级范围：1-50 金牌系列优先级范围：51-100 银牌系列优先级范围：101-150 其他：大于151
    * description  描述。不支持 <>。
    * createdAt  创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'level' => 'setLevel',
            'nameCn' => 'setNameCn',
            'nameEn' => 'setNameEn',
            'displayPriority' => 'setDisplayPriority',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * level  带宽包等级
    * nameCn  实例名字。
    * nameEn  实例名字。
    * displayPriority  展示优先级，数值越低，优先级越高。 铂金系列优先级范围：1-50 金牌系列优先级范围：51-100 银牌系列优先级范围：101-150 其他：大于151
    * description  描述。不支持 <>。
    * createdAt  创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'level' => 'getLevel',
            'nameCn' => 'getNameCn',
            'nameEn' => 'getNameEn',
            'displayPriority' => 'getDisplayPriority',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['displayPriority'] = isset($data['displayPriority']) ? $data['displayPriority'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 36)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['nameCn'])) {
                $invalidProperties[] = "invalid value for 'nameCn', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameEn']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['displayPriority']) && ($this->container['displayPriority'] > 10000)) {
                $invalidProperties[] = "invalid value for 'displayPriority', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['displayPriority']) && ($this->container['displayPriority'] < 1)) {
                $invalidProperties[] = "invalid value for 'displayPriority', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^<>]*$/.";
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
    *  实例ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets level
    *  带宽包等级
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
    * @param string|null $level 带宽包等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets nameCn
    *  实例名字。
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
    * @param string|null $nameCn 实例名字。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets nameEn
    *  实例名字。
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
    * @param string|null $nameEn 实例名字。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets displayPriority
    *  展示优先级，数值越低，优先级越高。 铂金系列优先级范围：1-50 金牌系列优先级范围：51-100 银牌系列优先级范围：101-150 其他：大于151
    *
    * @return int|null
    */
    public function getDisplayPriority()
    {
        return $this->container['displayPriority'];
    }

    /**
    * Sets displayPriority
    *
    * @param int|null $displayPriority 展示优先级，数值越低，优先级越高。 铂金系列优先级范围：1-50 金牌系列优先级范围：51-100 银牌系列优先级范围：101-150 其他：大于151
    *
    * @return $this
    */
    public function setDisplayPriority($displayPriority)
    {
        $this->container['displayPriority'] = $displayPriority;
        return $this;
    }

    /**
    * Gets description
    *  描述。不支持 <>。
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
    * @param string|null $description 描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

