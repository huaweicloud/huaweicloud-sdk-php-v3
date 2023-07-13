<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailableZoneV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailableZoneV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  可用区编码
    * azCode  可用区编码
    * azName  可用区名称
    * azId  可用区id
    * status  可用区状态
    * regionId  区域id
    * azGroupId  可用区分组id
    * azType  当前AZ的类型 Core 核心 Satellite 卫星 Dedicated 专属 Virtual 虚拟 Edge 边缘 EdgeCental 中心边缘 Hybrid 混合云
    * azTags  azTags
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'azCode' => 'string',
            'azName' => 'string',
            'azId' => 'string',
            'status' => 'string',
            'regionId' => 'string',
            'azGroupId' => 'string',
            'azType' => 'string',
            'azTags' => '\HuaweiCloud\SDK\Mrs\V1\Model\AvailableTag'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  可用区编码
    * azCode  可用区编码
    * azName  可用区名称
    * azId  可用区id
    * status  可用区状态
    * regionId  区域id
    * azGroupId  可用区分组id
    * azType  当前AZ的类型 Core 核心 Satellite 卫星 Dedicated 专属 Virtual 虚拟 Edge 边缘 EdgeCental 中心边缘 Hybrid 混合云
    * azTags  azTags
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'azCode' => null,
        'azName' => null,
        'azId' => null,
        'status' => null,
        'regionId' => null,
        'azGroupId' => null,
        'azType' => null,
        'azTags' => null
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
    * id  可用区编码
    * azCode  可用区编码
    * azName  可用区名称
    * azId  可用区id
    * status  可用区状态
    * regionId  区域id
    * azGroupId  可用区分组id
    * azType  当前AZ的类型 Core 核心 Satellite 卫星 Dedicated 专属 Virtual 虚拟 Edge 边缘 EdgeCental 中心边缘 Hybrid 混合云
    * azTags  azTags
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'azCode' => 'az_code',
            'azName' => 'az_name',
            'azId' => 'az_id',
            'status' => 'status',
            'regionId' => 'region_id',
            'azGroupId' => 'az_group_id',
            'azType' => 'az_type',
            'azTags' => 'az_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  可用区编码
    * azCode  可用区编码
    * azName  可用区名称
    * azId  可用区id
    * status  可用区状态
    * regionId  区域id
    * azGroupId  可用区分组id
    * azType  当前AZ的类型 Core 核心 Satellite 卫星 Dedicated 专属 Virtual 虚拟 Edge 边缘 EdgeCental 中心边缘 Hybrid 混合云
    * azTags  azTags
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'azCode' => 'setAzCode',
            'azName' => 'setAzName',
            'azId' => 'setAzId',
            'status' => 'setStatus',
            'regionId' => 'setRegionId',
            'azGroupId' => 'setAzGroupId',
            'azType' => 'setAzType',
            'azTags' => 'setAzTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  可用区编码
    * azCode  可用区编码
    * azName  可用区名称
    * azId  可用区id
    * status  可用区状态
    * regionId  区域id
    * azGroupId  可用区分组id
    * azType  当前AZ的类型 Core 核心 Satellite 卫星 Dedicated 专属 Virtual 虚拟 Edge 边缘 EdgeCental 中心边缘 Hybrid 混合云
    * azTags  azTags
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'azCode' => 'getAzCode',
            'azName' => 'getAzName',
            'azId' => 'getAzId',
            'status' => 'getStatus',
            'regionId' => 'getRegionId',
            'azGroupId' => 'getAzGroupId',
            'azType' => 'getAzType',
            'azTags' => 'getAzTags'
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
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['azId'] = isset($data['azId']) ? $data['azId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['azGroupId'] = isset($data['azGroupId']) ? $data['azGroupId'] : null;
        $this->container['azType'] = isset($data['azType']) ? $data['azType'] : null;
        $this->container['azTags'] = isset($data['azTags']) ? $data['azTags'] : null;
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
    * Gets id
    *  可用区编码
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
    * @param string|null $id 可用区编码
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区编码
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区编码
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets azName
    *  可用区名称
    *
    * @return string|null
    */
    public function getAzName()
    {
        return $this->container['azName'];
    }

    /**
    * Sets azName
    *
    * @param string|null $azName 可用区名称
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets azId
    *  可用区id
    *
    * @return string|null
    */
    public function getAzId()
    {
        return $this->container['azId'];
    }

    /**
    * Sets azId
    *
    * @param string|null $azId 可用区id
    *
    * @return $this
    */
    public function setAzId($azId)
    {
        $this->container['azId'] = $azId;
        return $this;
    }

    /**
    * Gets status
    *  可用区状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 可用区状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets regionId
    *  区域id
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
    * @param string|null $regionId 区域id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets azGroupId
    *  可用区分组id
    *
    * @return string|null
    */
    public function getAzGroupId()
    {
        return $this->container['azGroupId'];
    }

    /**
    * Sets azGroupId
    *
    * @param string|null $azGroupId 可用区分组id
    *
    * @return $this
    */
    public function setAzGroupId($azGroupId)
    {
        $this->container['azGroupId'] = $azGroupId;
        return $this;
    }

    /**
    * Gets azType
    *  当前AZ的类型 Core 核心 Satellite 卫星 Dedicated 专属 Virtual 虚拟 Edge 边缘 EdgeCental 中心边缘 Hybrid 混合云
    *
    * @return string|null
    */
    public function getAzType()
    {
        return $this->container['azType'];
    }

    /**
    * Sets azType
    *
    * @param string|null $azType 当前AZ的类型 Core 核心 Satellite 卫星 Dedicated 专属 Virtual 虚拟 Edge 边缘 EdgeCental 中心边缘 Hybrid 混合云
    *
    * @return $this
    */
    public function setAzType($azType)
    {
        $this->container['azType'] = $azType;
        return $this;
    }

    /**
    * Gets azTags
    *  azTags
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\AvailableTag|null
    */
    public function getAzTags()
    {
        return $this->container['azTags'];
    }

    /**
    * Sets azTags
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\AvailableTag|null $azTags azTags
    *
    * @return $this
    */
    public function setAzTags($azTags)
    {
        $this->container['azTags'] = $azTags;
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

