<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCompliancePackageDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCompliancePackageDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  遵从包的uuid
    * name  遵从包的名称
    * version  遵从包的版本号
    * owner  遵从包的责任人
    * specCatalogVoList  遵从包的目录列表
    * description  对遵从包的描述
    * classify  遵从包的分类
    * areas  遵从包适用的领域
    * region  遵从包适用的区域
    * state  表示遵从包的状态 0：未启用 1: 启用
    * type  表示遵从包的类型 0：内置 1: 自定义
    * checkItemsNum  表示该遵从包包含的检查项个数
    * hasAutoCheckItems  表示该遵从包是否包含自动检查项
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'name' => 'string',
            'version' => 'string',
            'owner' => 'string',
            'specCatalogVoList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\BaselineCatalogModel[]',
            'description' => 'string',
            'classify' => 'string',
            'areas' => 'string',
            'region' => 'string',
            'state' => 'int',
            'type' => 'int',
            'checkItemsNum' => 'int',
            'hasAutoCheckItems' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  遵从包的uuid
    * name  遵从包的名称
    * version  遵从包的版本号
    * owner  遵从包的责任人
    * specCatalogVoList  遵从包的目录列表
    * description  对遵从包的描述
    * classify  遵从包的分类
    * areas  遵从包适用的领域
    * region  遵从包适用的区域
    * state  表示遵从包的状态 0：未启用 1: 启用
    * type  表示遵从包的类型 0：内置 1: 自定义
    * checkItemsNum  表示该遵从包包含的检查项个数
    * hasAutoCheckItems  表示该遵从包是否包含自动检查项
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'name' => null,
        'version' => null,
        'owner' => null,
        'specCatalogVoList' => null,
        'description' => null,
        'classify' => null,
        'areas' => null,
        'region' => null,
        'state' => null,
        'type' => null,
        'checkItemsNum' => null,
        'hasAutoCheckItems' => null
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
    * uuid  遵从包的uuid
    * name  遵从包的名称
    * version  遵从包的版本号
    * owner  遵从包的责任人
    * specCatalogVoList  遵从包的目录列表
    * description  对遵从包的描述
    * classify  遵从包的分类
    * areas  遵从包适用的领域
    * region  遵从包适用的区域
    * state  表示遵从包的状态 0：未启用 1: 启用
    * type  表示遵从包的类型 0：内置 1: 自定义
    * checkItemsNum  表示该遵从包包含的检查项个数
    * hasAutoCheckItems  表示该遵从包是否包含自动检查项
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'name' => 'name',
            'version' => 'version',
            'owner' => 'owner',
            'specCatalogVoList' => 'spec_catalog_vo_list',
            'description' => 'description',
            'classify' => 'classify',
            'areas' => 'areas',
            'region' => 'region',
            'state' => 'state',
            'type' => 'type',
            'checkItemsNum' => 'check_items_num',
            'hasAutoCheckItems' => 'has_auto_check_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  遵从包的uuid
    * name  遵从包的名称
    * version  遵从包的版本号
    * owner  遵从包的责任人
    * specCatalogVoList  遵从包的目录列表
    * description  对遵从包的描述
    * classify  遵从包的分类
    * areas  遵从包适用的领域
    * region  遵从包适用的区域
    * state  表示遵从包的状态 0：未启用 1: 启用
    * type  表示遵从包的类型 0：内置 1: 自定义
    * checkItemsNum  表示该遵从包包含的检查项个数
    * hasAutoCheckItems  表示该遵从包是否包含自动检查项
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'name' => 'setName',
            'version' => 'setVersion',
            'owner' => 'setOwner',
            'specCatalogVoList' => 'setSpecCatalogVoList',
            'description' => 'setDescription',
            'classify' => 'setClassify',
            'areas' => 'setAreas',
            'region' => 'setRegion',
            'state' => 'setState',
            'type' => 'setType',
            'checkItemsNum' => 'setCheckItemsNum',
            'hasAutoCheckItems' => 'setHasAutoCheckItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  遵从包的uuid
    * name  遵从包的名称
    * version  遵从包的版本号
    * owner  遵从包的责任人
    * specCatalogVoList  遵从包的目录列表
    * description  对遵从包的描述
    * classify  遵从包的分类
    * areas  遵从包适用的领域
    * region  遵从包适用的区域
    * state  表示遵从包的状态 0：未启用 1: 启用
    * type  表示遵从包的类型 0：内置 1: 自定义
    * checkItemsNum  表示该遵从包包含的检查项个数
    * hasAutoCheckItems  表示该遵从包是否包含自动检查项
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'name' => 'getName',
            'version' => 'getVersion',
            'owner' => 'getOwner',
            'specCatalogVoList' => 'getSpecCatalogVoList',
            'description' => 'getDescription',
            'classify' => 'getClassify',
            'areas' => 'getAreas',
            'region' => 'getRegion',
            'state' => 'getState',
            'type' => 'getType',
            'checkItemsNum' => 'getCheckItemsNum',
            'hasAutoCheckItems' => 'getHasAutoCheckItems'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['specCatalogVoList'] = isset($data['specCatalogVoList']) ? $data['specCatalogVoList'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['classify'] = isset($data['classify']) ? $data['classify'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['checkItemsNum'] = isset($data['checkItemsNum']) ? $data['checkItemsNum'] : null;
        $this->container['hasAutoCheckItems'] = isset($data['hasAutoCheckItems']) ? $data['hasAutoCheckItems'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 36)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 64)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 0)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['classify']) && (mb_strlen($this->container['classify']) > 64)) {
                $invalidProperties[] = "invalid value for 'classify', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['classify']) && (mb_strlen($this->container['classify']) < 0)) {
                $invalidProperties[] = "invalid value for 'classify', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['areas']) && (mb_strlen($this->container['areas']) > 64)) {
                $invalidProperties[] = "invalid value for 'areas', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['areas']) && (mb_strlen($this->container['areas']) < 0)) {
                $invalidProperties[] = "invalid value for 'areas', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
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
    * Gets uuid
    *  遵从包的uuid
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
    * @param string|null $uuid 遵从包的uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets name
    *  遵从包的名称
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
    * @param string|null $name 遵从包的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  遵从包的版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 遵从包的版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets owner
    *  遵从包的责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 遵从包的责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets specCatalogVoList
    *  遵从包的目录列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\BaselineCatalogModel[]|null
    */
    public function getSpecCatalogVoList()
    {
        return $this->container['specCatalogVoList'];
    }

    /**
    * Sets specCatalogVoList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\BaselineCatalogModel[]|null $specCatalogVoList 遵从包的目录列表
    *
    * @return $this
    */
    public function setSpecCatalogVoList($specCatalogVoList)
    {
        $this->container['specCatalogVoList'] = $specCatalogVoList;
        return $this;
    }

    /**
    * Gets description
    *  对遵从包的描述
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
    * @param string|null $description 对遵从包的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets classify
    *  遵从包的分类
    *
    * @return string|null
    */
    public function getClassify()
    {
        return $this->container['classify'];
    }

    /**
    * Sets classify
    *
    * @param string|null $classify 遵从包的分类
    *
    * @return $this
    */
    public function setClassify($classify)
    {
        $this->container['classify'] = $classify;
        return $this;
    }

    /**
    * Gets areas
    *  遵从包适用的领域
    *
    * @return string|null
    */
    public function getAreas()
    {
        return $this->container['areas'];
    }

    /**
    * Sets areas
    *
    * @param string|null $areas 遵从包适用的领域
    *
    * @return $this
    */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;
        return $this;
    }

    /**
    * Gets region
    *  遵从包适用的区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 遵从包适用的区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets state
    *  表示遵从包的状态 0：未启用 1: 启用
    *
    * @return int|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int|null $state 表示遵从包的状态 0：未启用 1: 启用
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets type
    *  表示遵从包的类型 0：内置 1: 自定义
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 表示遵从包的类型 0：内置 1: 自定义
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets checkItemsNum
    *  表示该遵从包包含的检查项个数
    *
    * @return int|null
    */
    public function getCheckItemsNum()
    {
        return $this->container['checkItemsNum'];
    }

    /**
    * Sets checkItemsNum
    *
    * @param int|null $checkItemsNum 表示该遵从包包含的检查项个数
    *
    * @return $this
    */
    public function setCheckItemsNum($checkItemsNum)
    {
        $this->container['checkItemsNum'] = $checkItemsNum;
        return $this;
    }

    /**
    * Gets hasAutoCheckItems
    *  表示该遵从包是否包含自动检查项
    *
    * @return bool|null
    */
    public function getHasAutoCheckItems()
    {
        return $this->container['hasAutoCheckItems'];
    }

    /**
    * Sets hasAutoCheckItems
    *
    * @param bool|null $hasAutoCheckItems 表示该遵从包是否包含自动检查项
    *
    * @return $this
    */
    public function setHasAutoCheckItems($hasAutoCheckItems)
    {
        $this->container['hasAutoCheckItems'] = $hasAutoCheckItems;
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

