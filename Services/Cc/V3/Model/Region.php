<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Region implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Region';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。
    * areaId  areaId
    * id  区域ID。
    * areaName  大区名称。
    * usedScenes  云连接使用场景。  - er（企业路由器） - vpc（虚拟私有云） - vgw（虚拟网关）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'areaId' => '\HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef',
            'id' => 'string',
            'areaName' => 'string',
            'usedScenes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。
    * areaId  areaId
    * id  区域ID。
    * areaName  大区名称。
    * usedScenes  云连接使用场景。  - er（企业路由器） - vpc（虚拟私有云） - vgw（虚拟网关）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'areaId' => null,
        'id' => null,
        'areaName' => null,
        'usedScenes' => null
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
    * name  实例名称。
    * areaId  areaId
    * id  区域ID。
    * areaName  大区名称。
    * usedScenes  云连接使用场景。  - er（企业路由器） - vpc（虚拟私有云） - vgw（虚拟网关）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'areaId' => 'area_id',
            'id' => 'id',
            'areaName' => 'area_name',
            'usedScenes' => 'used_scenes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。
    * areaId  areaId
    * id  区域ID。
    * areaName  大区名称。
    * usedScenes  云连接使用场景。  - er（企业路由器） - vpc（虚拟私有云） - vgw（虚拟网关）
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'areaId' => 'setAreaId',
            'id' => 'setId',
            'areaName' => 'setAreaName',
            'usedScenes' => 'setUsedScenes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。
    * areaId  areaId
    * id  区域ID。
    * areaName  大区名称。
    * usedScenes  云连接使用场景。  - er（企业路由器） - vpc（虚拟私有云） - vgw（虚拟网关）
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'areaId' => 'getAreaId',
            'id' => 'getId',
            'areaName' => 'getAreaName',
            'usedScenes' => 'getUsedScenes'
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
    const USED_SCENES_ER = 'er';
    const USED_SCENES_VPC = 'vpc';
    const USED_SCENES_VGW = 'vgw';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUsedScenesAllowableValues()
    {
        return [
            self::USED_SCENES_ER,
            self::USED_SCENES_VPC,
            self::USED_SCENES_VGW,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['areaId'] = isset($data['areaId']) ? $data['areaId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['areaName'] = isset($data['areaName']) ? $data['areaName'] : null;
        $this->container['usedScenes'] = isset($data['usedScenes']) ? $data['usedScenes'] : null;
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
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
        if ($this->container['areaId'] === null) {
            $invalidProperties[] = "'areaId' can't be null";
        }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['areaName']) && (mb_strlen($this->container['areaName']) > 36)) {
                $invalidProperties[] = "invalid value for 'areaName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['areaName']) && (mb_strlen($this->container['areaName']) < 0)) {
                $invalidProperties[] = "invalid value for 'areaName', the character length must be bigger than or equal to 0.";
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
    *  实例名称。
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
    * @param string $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets areaId
    *  areaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef
    */
    public function getAreaId()
    {
        return $this->container['areaId'];
    }

    /**
    * Sets areaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef $areaId areaId
    *
    * @return $this
    */
    public function setAreaId($areaId)
    {
        $this->container['areaId'] = $areaId;
        return $this;
    }

    /**
    * Gets id
    *  区域ID。
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
    * @param string|null $id 区域ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets areaName
    *  大区名称。
    *
    * @return string|null
    */
    public function getAreaName()
    {
        return $this->container['areaName'];
    }

    /**
    * Sets areaName
    *
    * @param string|null $areaName 大区名称。
    *
    * @return $this
    */
    public function setAreaName($areaName)
    {
        $this->container['areaName'] = $areaName;
        return $this;
    }

    /**
    * Gets usedScenes
    *  云连接使用场景。  - er（企业路由器） - vpc（虚拟私有云） - vgw（虚拟网关）
    *
    * @return string[]|null
    */
    public function getUsedScenes()
    {
        return $this->container['usedScenes'];
    }

    /**
    * Sets usedScenes
    *
    * @param string[]|null $usedScenes 云连接使用场景。  - er（企业路由器） - vpc（虚拟私有云） - vgw（虚拟网关）
    *
    * @return $this
    */
    public function setUsedScenes($usedScenes)
    {
        $this->container['usedScenes'] = $usedScenes;
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

