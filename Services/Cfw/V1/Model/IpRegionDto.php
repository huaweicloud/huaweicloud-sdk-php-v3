<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpRegionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpRegionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * descriptionCn  区域中文描述，仅当区域为中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * descriptionEn  区域英文描述，仅当区域为非中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * regionType  区域类型，0表示国家，1表示省份，2表示大洲，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'descriptionCn' => 'string',
            'descriptionEn' => 'string',
            'regionType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * descriptionCn  区域中文描述，仅当区域为中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * descriptionEn  区域英文描述，仅当区域为非中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * regionType  区域类型，0表示国家，1表示省份，2表示大洲，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'descriptionCn' => null,
        'descriptionEn' => null,
        'regionType' => 'int32'
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
    * regionId  区域id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * descriptionCn  区域中文描述，仅当区域为中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * descriptionEn  区域英文描述，仅当区域为非中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * regionType  区域类型，0表示国家，1表示省份，2表示大洲，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'descriptionCn' => 'description_cn',
            'descriptionEn' => 'description_en',
            'regionType' => 'region_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * descriptionCn  区域中文描述，仅当区域为中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * descriptionEn  区域英文描述，仅当区域为非中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * regionType  区域类型，0表示国家，1表示省份，2表示大洲，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'descriptionCn' => 'setDescriptionCn',
            'descriptionEn' => 'setDescriptionEn',
            'regionType' => 'setRegionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * descriptionCn  区域中文描述，仅当区域为中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * descriptionEn  区域英文描述，仅当区域为非中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    * regionType  区域类型，0表示国家，1表示省份，2表示大洲，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'descriptionCn' => 'getDescriptionCn',
            'descriptionEn' => 'getDescriptionEn',
            'regionType' => 'getRegionType'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['descriptionCn'] = isset($data['descriptionCn']) ? $data['descriptionCn'] : null;
        $this->container['descriptionEn'] = isset($data['descriptionEn']) ? $data['descriptionEn'] : null;
        $this->container['regionType'] = isset($data['regionType']) ? $data['regionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets regionId
    *  区域id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets descriptionCn
    *  区域中文描述，仅当区域为中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @return string|null
    */
    public function getDescriptionCn()
    {
        return $this->container['descriptionCn'];
    }

    /**
    * Sets descriptionCn
    *
    * @param string|null $descriptionCn 区域中文描述，仅当区域为中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @return $this
    */
    public function setDescriptionCn($descriptionCn)
    {
        $this->container['descriptionCn'] = $descriptionCn;
        return $this;
    }

    /**
    * Gets descriptionEn
    *  区域英文描述，仅当区域为非中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @return string|null
    */
    public function getDescriptionEn()
    {
        return $this->container['descriptionEn'];
    }

    /**
    * Sets descriptionEn
    *
    * @param string|null $descriptionEn 区域英文描述，仅当区域为非中国区域时使用，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @return $this
    */
    public function setDescriptionEn($descriptionEn)
    {
        $this->container['descriptionEn'] = $descriptionEn;
        return $this;
    }

    /**
    * Gets regionType
    *  区域类型，0表示国家，1表示省份，2表示大洲，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @return int|null
    */
    public function getRegionType()
    {
        return $this->container['regionType'];
    }

    /**
    * Sets regionType
    *
    * @param int|null $regionType 区域类型，0表示国家，1表示省份，2表示大洲，可通过[地域信息表](cfw_02_0031.xml)获取。
    *
    * @return $this
    */
    public function setRegionType($regionType)
    {
        $this->container['regionType'] = $regionType;
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

