<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CategoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CategoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * guid  主题目录guid。
    * name  主题目录名称。
    * description  主题目录描述信息。
    * code  主题目录编码。
    * path  主题目录路径。
    * alias  主题目录别名。
    * level  主题目录级别。
    * ordinal  主题目录排序。
    * nameEng  主题目录英文名称。
    * qualifiedName  主题目录唯一标识名称。
    * createTime  资产创建时间。
    * updateTime  资产修改时间。
    * businessMeaning  业务意义。
    * parentGuid  父级目录guid。
    * department  主题目录部门。
    * dataOwner  数据owner所属部门。
    * dataSteward  数据管家。
    * database  数据库。
    * obsBucket  obs桶。
    * obsEncryptBucket  obs加密桶。
    * workspace  所属空间。
    * children  子级目录列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'guid' => 'string',
            'name' => 'string',
            'description' => 'string',
            'code' => 'string',
            'path' => 'string',
            'alias' => 'string',
            'level' => 'string',
            'ordinal' => 'int',
            'nameEng' => 'string',
            'qualifiedName' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'businessMeaning' => 'string',
            'parentGuid' => 'string',
            'department' => 'string',
            'dataOwner' => 'string',
            'dataSteward' => 'string',
            'database' => 'string[]',
            'obsBucket' => 'string',
            'obsEncryptBucket' => 'string',
            'workspace' => 'string[]',
            'children' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CategoryInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * guid  主题目录guid。
    * name  主题目录名称。
    * description  主题目录描述信息。
    * code  主题目录编码。
    * path  主题目录路径。
    * alias  主题目录别名。
    * level  主题目录级别。
    * ordinal  主题目录排序。
    * nameEng  主题目录英文名称。
    * qualifiedName  主题目录唯一标识名称。
    * createTime  资产创建时间。
    * updateTime  资产修改时间。
    * businessMeaning  业务意义。
    * parentGuid  父级目录guid。
    * department  主题目录部门。
    * dataOwner  数据owner所属部门。
    * dataSteward  数据管家。
    * database  数据库。
    * obsBucket  obs桶。
    * obsEncryptBucket  obs加密桶。
    * workspace  所属空间。
    * children  子级目录列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'guid' => null,
        'name' => null,
        'description' => null,
        'code' => null,
        'path' => null,
        'alias' => null,
        'level' => null,
        'ordinal' => 'int32',
        'nameEng' => null,
        'qualifiedName' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'businessMeaning' => null,
        'parentGuid' => null,
        'department' => null,
        'dataOwner' => null,
        'dataSteward' => null,
        'database' => null,
        'obsBucket' => null,
        'obsEncryptBucket' => null,
        'workspace' => null,
        'children' => null
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
    * guid  主题目录guid。
    * name  主题目录名称。
    * description  主题目录描述信息。
    * code  主题目录编码。
    * path  主题目录路径。
    * alias  主题目录别名。
    * level  主题目录级别。
    * ordinal  主题目录排序。
    * nameEng  主题目录英文名称。
    * qualifiedName  主题目录唯一标识名称。
    * createTime  资产创建时间。
    * updateTime  资产修改时间。
    * businessMeaning  业务意义。
    * parentGuid  父级目录guid。
    * department  主题目录部门。
    * dataOwner  数据owner所属部门。
    * dataSteward  数据管家。
    * database  数据库。
    * obsBucket  obs桶。
    * obsEncryptBucket  obs加密桶。
    * workspace  所属空间。
    * children  子级目录列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'guid' => 'guid',
            'name' => 'name',
            'description' => 'description',
            'code' => 'code',
            'path' => 'path',
            'alias' => 'alias',
            'level' => 'level',
            'ordinal' => 'ordinal',
            'nameEng' => 'name_eng',
            'qualifiedName' => 'qualified_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'businessMeaning' => 'business_meaning',
            'parentGuid' => 'parent_guid',
            'department' => 'department',
            'dataOwner' => 'data_owner',
            'dataSteward' => 'data_steward',
            'database' => 'database',
            'obsBucket' => 'obs_bucket',
            'obsEncryptBucket' => 'obs_encrypt_bucket',
            'workspace' => 'workspace',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * guid  主题目录guid。
    * name  主题目录名称。
    * description  主题目录描述信息。
    * code  主题目录编码。
    * path  主题目录路径。
    * alias  主题目录别名。
    * level  主题目录级别。
    * ordinal  主题目录排序。
    * nameEng  主题目录英文名称。
    * qualifiedName  主题目录唯一标识名称。
    * createTime  资产创建时间。
    * updateTime  资产修改时间。
    * businessMeaning  业务意义。
    * parentGuid  父级目录guid。
    * department  主题目录部门。
    * dataOwner  数据owner所属部门。
    * dataSteward  数据管家。
    * database  数据库。
    * obsBucket  obs桶。
    * obsEncryptBucket  obs加密桶。
    * workspace  所属空间。
    * children  子级目录列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'guid' => 'setGuid',
            'name' => 'setName',
            'description' => 'setDescription',
            'code' => 'setCode',
            'path' => 'setPath',
            'alias' => 'setAlias',
            'level' => 'setLevel',
            'ordinal' => 'setOrdinal',
            'nameEng' => 'setNameEng',
            'qualifiedName' => 'setQualifiedName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'businessMeaning' => 'setBusinessMeaning',
            'parentGuid' => 'setParentGuid',
            'department' => 'setDepartment',
            'dataOwner' => 'setDataOwner',
            'dataSteward' => 'setDataSteward',
            'database' => 'setDatabase',
            'obsBucket' => 'setObsBucket',
            'obsEncryptBucket' => 'setObsEncryptBucket',
            'workspace' => 'setWorkspace',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * guid  主题目录guid。
    * name  主题目录名称。
    * description  主题目录描述信息。
    * code  主题目录编码。
    * path  主题目录路径。
    * alias  主题目录别名。
    * level  主题目录级别。
    * ordinal  主题目录排序。
    * nameEng  主题目录英文名称。
    * qualifiedName  主题目录唯一标识名称。
    * createTime  资产创建时间。
    * updateTime  资产修改时间。
    * businessMeaning  业务意义。
    * parentGuid  父级目录guid。
    * department  主题目录部门。
    * dataOwner  数据owner所属部门。
    * dataSteward  数据管家。
    * database  数据库。
    * obsBucket  obs桶。
    * obsEncryptBucket  obs加密桶。
    * workspace  所属空间。
    * children  子级目录列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'guid' => 'getGuid',
            'name' => 'getName',
            'description' => 'getDescription',
            'code' => 'getCode',
            'path' => 'getPath',
            'alias' => 'getAlias',
            'level' => 'getLevel',
            'ordinal' => 'getOrdinal',
            'nameEng' => 'getNameEng',
            'qualifiedName' => 'getQualifiedName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'businessMeaning' => 'getBusinessMeaning',
            'parentGuid' => 'getParentGuid',
            'department' => 'getDepartment',
            'dataOwner' => 'getDataOwner',
            'dataSteward' => 'getDataSteward',
            'database' => 'getDatabase',
            'obsBucket' => 'getObsBucket',
            'obsEncryptBucket' => 'getObsEncryptBucket',
            'workspace' => 'getWorkspace',
            'children' => 'getChildren'
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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['nameEng'] = isset($data['nameEng']) ? $data['nameEng'] : null;
        $this->container['qualifiedName'] = isset($data['qualifiedName']) ? $data['qualifiedName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['businessMeaning'] = isset($data['businessMeaning']) ? $data['businessMeaning'] : null;
        $this->container['parentGuid'] = isset($data['parentGuid']) ? $data['parentGuid'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['dataOwner'] = isset($data['dataOwner']) ? $data['dataOwner'] : null;
        $this->container['dataSteward'] = isset($data['dataSteward']) ? $data['dataSteward'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['obsEncryptBucket'] = isset($data['obsEncryptBucket']) ? $data['obsEncryptBucket'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
    * Gets guid
    *  主题目录guid。
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid 主题目录guid。
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets name
    *  主题目录名称。
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
    * @param string|null $name 主题目录名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  主题目录描述信息。
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
    * @param string|null $description 主题目录描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets code
    *  主题目录编码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 主题目录编码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets path
    *  主题目录路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 主题目录路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets alias
    *  主题目录别名。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 主题目录别名。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets level
    *  主题目录级别。
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
    * @param string|null $level 主题目录级别。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets ordinal
    *  主题目录排序。
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 主题目录排序。
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets nameEng
    *  主题目录英文名称。
    *
    * @return string|null
    */
    public function getNameEng()
    {
        return $this->container['nameEng'];
    }

    /**
    * Sets nameEng
    *
    * @param string|null $nameEng 主题目录英文名称。
    *
    * @return $this
    */
    public function setNameEng($nameEng)
    {
        $this->container['nameEng'] = $nameEng;
        return $this;
    }

    /**
    * Gets qualifiedName
    *  主题目录唯一标识名称。
    *
    * @return string|null
    */
    public function getQualifiedName()
    {
        return $this->container['qualifiedName'];
    }

    /**
    * Sets qualifiedName
    *
    * @param string|null $qualifiedName 主题目录唯一标识名称。
    *
    * @return $this
    */
    public function setQualifiedName($qualifiedName)
    {
        $this->container['qualifiedName'] = $qualifiedName;
        return $this;
    }

    /**
    * Gets createTime
    *  资产创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 资产创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  资产修改时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 资产修改时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets businessMeaning
    *  业务意义。
    *
    * @return string|null
    */
    public function getBusinessMeaning()
    {
        return $this->container['businessMeaning'];
    }

    /**
    * Sets businessMeaning
    *
    * @param string|null $businessMeaning 业务意义。
    *
    * @return $this
    */
    public function setBusinessMeaning($businessMeaning)
    {
        $this->container['businessMeaning'] = $businessMeaning;
        return $this;
    }

    /**
    * Gets parentGuid
    *  父级目录guid。
    *
    * @return string|null
    */
    public function getParentGuid()
    {
        return $this->container['parentGuid'];
    }

    /**
    * Sets parentGuid
    *
    * @param string|null $parentGuid 父级目录guid。
    *
    * @return $this
    */
    public function setParentGuid($parentGuid)
    {
        $this->container['parentGuid'] = $parentGuid;
        return $this;
    }

    /**
    * Gets department
    *  主题目录部门。
    *
    * @return string|null
    */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
    * Sets department
    *
    * @param string|null $department 主题目录部门。
    *
    * @return $this
    */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;
        return $this;
    }

    /**
    * Gets dataOwner
    *  数据owner所属部门。
    *
    * @return string|null
    */
    public function getDataOwner()
    {
        return $this->container['dataOwner'];
    }

    /**
    * Sets dataOwner
    *
    * @param string|null $dataOwner 数据owner所属部门。
    *
    * @return $this
    */
    public function setDataOwner($dataOwner)
    {
        $this->container['dataOwner'] = $dataOwner;
        return $this;
    }

    /**
    * Gets dataSteward
    *  数据管家。
    *
    * @return string|null
    */
    public function getDataSteward()
    {
        return $this->container['dataSteward'];
    }

    /**
    * Sets dataSteward
    *
    * @param string|null $dataSteward 数据管家。
    *
    * @return $this
    */
    public function setDataSteward($dataSteward)
    {
        $this->container['dataSteward'] = $dataSteward;
        return $this;
    }

    /**
    * Gets database
    *  数据库。
    *
    * @return string[]|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string[]|null $database 数据库。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets obsBucket
    *  obs桶。
    *
    * @return string|null
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param string|null $obsBucket obs桶。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets obsEncryptBucket
    *  obs加密桶。
    *
    * @return string|null
    */
    public function getObsEncryptBucket()
    {
        return $this->container['obsEncryptBucket'];
    }

    /**
    * Sets obsEncryptBucket
    *
    * @param string|null $obsEncryptBucket obs加密桶。
    *
    * @return $this
    */
    public function setObsEncryptBucket($obsEncryptBucket)
    {
        $this->container['obsEncryptBucket'] = $obsEncryptBucket;
        return $this;
    }

    /**
    * Gets workspace
    *  所属空间。
    *
    * @return string[]|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string[]|null $workspace 所属空间。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets children
    *  子级目录列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CategoryInfo[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CategoryInfo[]|null $children 子级目录列表。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
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

