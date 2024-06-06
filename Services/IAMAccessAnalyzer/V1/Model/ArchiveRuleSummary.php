<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ArchiveRuleSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ArchiveRuleSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建存档规则的时间。
    * filters  匹配要返回的访问分析结果的筛选器。
    * id  存档规则的唯一标识符。
    * name  创建存档规则的名称。
    * updatedAt  上次更新存档规则的时间。
    * urn  存档规则的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => '\DateTime',
            'filters' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingFilter[]',
            'id' => 'string',
            'name' => 'string',
            'updatedAt' => '\DateTime',
            'urn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建存档规则的时间。
    * filters  匹配要返回的访问分析结果的筛选器。
    * id  存档规则的唯一标识符。
    * name  创建存档规则的名称。
    * updatedAt  上次更新存档规则的时间。
    * urn  存档规则的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => 'date-time',
        'filters' => null,
        'id' => null,
        'name' => null,
        'updatedAt' => 'date-time',
        'urn' => null
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
    * createdAt  创建存档规则的时间。
    * filters  匹配要返回的访问分析结果的筛选器。
    * id  存档规则的唯一标识符。
    * name  创建存档规则的名称。
    * updatedAt  上次更新存档规则的时间。
    * urn  存档规则的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'filters' => 'filters',
            'id' => 'id',
            'name' => 'name',
            'updatedAt' => 'updated_at',
            'urn' => 'urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建存档规则的时间。
    * filters  匹配要返回的访问分析结果的筛选器。
    * id  存档规则的唯一标识符。
    * name  创建存档规则的名称。
    * updatedAt  上次更新存档规则的时间。
    * urn  存档规则的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'filters' => 'setFilters',
            'id' => 'setId',
            'name' => 'setName',
            'updatedAt' => 'setUpdatedAt',
            'urn' => 'setUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建存档规则的时间。
    * filters  匹配要返回的访问分析结果的筛选器。
    * id  存档规则的唯一标识符。
    * name  创建存档规则的名称。
    * updatedAt  上次更新存档规则的时间。
    * urn  存档规则的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'filters' => 'getFilters',
            'id' => 'getId',
            'name' => 'getName',
            'updatedAt' => 'getUpdatedAt',
            'urn' => 'getUrn'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z][A-Za-z0-9_.-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z][A-Za-z0-9_.-]*$/.";
            }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
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
    * Gets createdAt
    *  创建存档规则的时间。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 创建存档规则的时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets filters
    *  匹配要返回的访问分析结果的筛选器。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingFilter[]
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingFilter[] $filters 匹配要返回的访问分析结果的筛选器。
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
        return $this;
    }

    /**
    * Gets id
    *  存档规则的唯一标识符。
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
    * @param string $id 存档规则的唯一标识符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  创建存档规则的名称。
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
    * @param string $name 创建存档规则的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets updatedAt
    *  上次更新存档规则的时间。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 上次更新存档规则的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets urn
    *  存档规则的唯一资源标识符。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 存档规则的唯一资源标识符。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
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

